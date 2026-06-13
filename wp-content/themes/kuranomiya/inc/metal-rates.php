<?php
defined('ABSPATH') || exit;

if (! defined('KURANOMIYA_METALS_API_KEY')) {
    define('KURANOMIYA_METALS_API_KEY', '');
}
define('KURANOMIYA_METALS_API_URL', 'https://api.metals.dev/v1/latest');

function kuranomiya_get_metals_api_key(): string {
    $stored = get_option('kuranomiya_metals_api_key', '');
    if (is_string($stored) && trim($stored) !== '') {
        return trim($stored);
    }

    if (defined('KURANOMIYA_METALS_API_KEY')) {
        $constant = KURANOMIYA_METALS_API_KEY;
        if ($constant !== '' && $constant !== 'YOUR_API_KEY_HERE') {
            return $constant;
        }
    }

    return '';
}

// ---------------------------------------------------------------------------
// 1. Karat / Purity multipliers
// ---------------------------------------------------------------------------

function kuranomiya_get_karat_multipliers(): array {
    return [
        'gold' => [
            'K24'   => 1.0000,
            'K23'   => 0.9583,
            'K22'   => 0.9167,
            'K21.6' => 0.9000,
            'K20'   => 0.8333,
            'K18'   => 0.7500,
            'K17'   => 0.7083,
            'K14'   => 0.5833,
            'K12'   => 0.5000,
            'K10'   => 0.4167,
            'K9'    => 0.3750,
            'K8'    => 0.3333,
            'K7'    => 0.2917,
            'K5'    => 0.2083,
            'K18WG' => 0.7500,
            'K14WG' => 0.5833,
        ],
        'platinum' => [
            'Pt1000' => 1.0000,
            'Pt950'  => 0.9500,
            'Pt900'  => 0.9000,
            'Pt850'  => 0.8500,
        ],
        'silver' => [
            'Ag999' => 1.0000,
            'Ag925' => 0.9250,
        ],
    ];
}

// ---------------------------------------------------------------------------
// 2. API fetch
// ---------------------------------------------------------------------------

function kuranomiya_fetch_metal_rates(): void {
    $api_key = kuranomiya_get_metals_api_key();
    if ($api_key === '') {
        kuranomiya_record_metal_rates_error(
            'metals.dev API key is not configured. Set it under Tools → 貴金属相場.'
        );
        return;
    }

    $url = add_query_arg(
        [
            'api_key'  => $api_key,
            'currency' => 'JPY',
            'unit'     => 'g',
        ],
        KURANOMIYA_METALS_API_URL
    );

    $response = wp_remote_get($url, ['timeout' => 15]);

    if (is_wp_error($response)) {
        kuranomiya_record_metal_rates_error(
            'metals.dev connection error: ' . $response->get_error_message()
        );
        return;
    }

    $http_code = wp_remote_retrieve_response_code($response);
    $raw_body  = wp_remote_retrieve_body($response);
    $body      = json_decode($raw_body, true);

    // Handle API-level failures (returned as 200 with status=failure).
    if (is_array($body) && isset($body['status']) && $body['status'] === 'failure') {
        $error_code = $body['error_code'] ?? 0;
        $error_msg  = $body['error_message'] ?? 'Unknown error';

        switch ((int) $error_code) {
            case 1203:
                $msg = 'metals.dev monthly quota exceeded. Falling back to stored rates.';
                break;
            case 1101:
                $msg = 'metals.dev API key is invalid. Check the API key in Tools → 貴金属相場.';
                break;
            case 1201:
            case 1202:
                $msg = 'metals.dev account is not active.';
                break;
            default:
                $msg = "metals.dev error {$error_code}: {$error_msg}";
                break;
        }

        kuranomiya_record_metal_rates_error($msg);
        return;
    }

    if ($http_code !== 200) {
        kuranomiya_record_metal_rates_error("metals.dev HTTP {$http_code}: {$raw_body}");
        return;
    }

    if (! is_array($body) || empty($body['metals'])) {
        kuranomiya_record_metal_rates_error('metals.dev unexpected payload: ' . $raw_body);
        return;
    }

    if (! isset($body['status']) || $body['status'] !== 'success') {
        kuranomiya_record_metal_rates_error(
            'metals.dev response status was not "success": ' . ($body['status'] ?? 'unknown')
        );
        return;
    }

    $metals = $body['metals'];

    if (empty($metals['gold']) || empty($metals['platinum']) || empty($metals['silver'])) {
        kuranomiya_record_metal_rates_error('metals.dev one or more metals missing from response.');
        return;
    }

    $rates = [
        'gold'       => round((float) $metals['gold'],     2),
        'platinum'   => round((float) $metals['platinum'], 2),
        'silver'     => round((float) $metals['silver'],   2),
        'updated_at' => current_time('Y-m-d H:i'),
    ];

    kuranomiya_archive_metal_rates_before_update();

    update_option('kuranomiya_metal_rates', wp_json_encode($rates));
    delete_option('kuranomiya_metal_rates_error');
}

function kuranomiya_record_metal_rates_error(string $message): void {
    error_log('kuranomiya_fetch_metal_rates: ' . $message);
    update_option('kuranomiya_metal_rates_error', wp_json_encode([
        'message'   => $message,
        'timestamp' => current_time('Y-m-d H:i'),
    ]));
}

// ---------------------------------------------------------------------------
// 3. WP-Cron
// ---------------------------------------------------------------------------

add_action('kuranomiya_daily_metal_fetch', 'kuranomiya_fetch_metal_rates');

function kuranomiya_schedule_metal_cron(): void {
    if (! wp_next_scheduled('kuranomiya_daily_metal_fetch')) {
        wp_schedule_event(strtotime('today 10:00'), 'daily', 'kuranomiya_daily_metal_fetch');
    }
}
add_action('after_switch_theme', 'kuranomiya_schedule_metal_cron');

function kuranomiya_clear_metal_cron(): void {
    $timestamp = wp_next_scheduled('kuranomiya_daily_metal_fetch');
    if ($timestamp) {
        wp_unschedule_event($timestamp, 'kuranomiya_daily_metal_fetch');
    }
}
add_action('switch_theme', 'kuranomiya_clear_metal_cron');

// ---------------------------------------------------------------------------
// 4. Retrieve rates
// ---------------------------------------------------------------------------

function kuranomiya_get_metal_rates(): ?array {
    $raw = get_option('kuranomiya_metal_rates');
    if (! $raw) {
        return null;
    }
    $decoded = json_decode($raw, true);
    return is_array($decoded) ? $decoded : null;
}

function kuranomiya_get_previous_metal_rates(): ?array {
    $raw = get_option('kuranomiya_metal_rates_previous');
    if (! $raw) {
        return null;
    }
    $decoded = json_decode($raw, true);
    return is_array($decoded) ? $decoded : null;
}

function kuranomiya_archive_metal_rates_before_update(): void {
    $existing = kuranomiya_get_metal_rates();
    if (! $existing || ! isset($existing['gold'])) {
        return;
    }

    $archived = [
        'updated_at' => $existing['updated_at'] ?? '',
    ];

    foreach (['gold', 'platinum', 'silver'] as $metal) {
        $spot = kuranomiya_get_metal_spot_price_from_rates($existing, $metal);
        if ($spot !== null) {
            $archived[$metal] = $spot;
        }
    }

    update_option('kuranomiya_metal_rates_previous', wp_json_encode($archived));
}

function kuranomiya_get_metal_spot_price_from_rates(array $rates, string $metal): ?int {
    if (! isset($rates[$metal])) {
        return null;
    }

    $override = get_option('kuranomiya_metal_override_' . $metal);
    $base     = ($override !== false && $override !== '') ? (float) $override : (float) $rates[$metal];

    return (int) round($base);
}

function kuranomiya_get_metal_spot_price(string $metal): ?int {
    $rates = kuranomiya_get_metal_rates();
    if (! $rates) {
        return null;
    }

    return kuranomiya_get_metal_spot_price_from_rates($rates, $metal);
}

function kuranomiya_get_metal_day_change(string $metal): ?int {
    $current  = kuranomiya_get_metal_spot_price($metal);
    $previous = kuranomiya_get_previous_metal_rates();

    if ($current === null || ! $previous || ! isset($previous[$metal])) {
        return null;
    }

    return $current - (int) $previous[$metal];
}

function kuranomiya_format_metal_day_change(string $metal): string {
    $change = kuranomiya_get_metal_day_change($metal);
    if ($change === null) {
        return '';
    }

    if ($change > 0) {
        return '(前日比 +' . number_format($change) . '円)';
    }

    if ($change < 0) {
        return '(前日比 ' . number_format($change) . '円)';
    }

    return '(前日比 ±0円)';
}

// ---------------------------------------------------------------------------
// 5. Calculate all prices for a given metal
// ---------------------------------------------------------------------------

function kuranomiya_calculate_prices(string $metal): array {
    $rates = kuranomiya_get_metal_rates();
    if (! $rates || ! isset($rates[$metal])) {
        return [];
    }

    // Manual admin override takes precedence when set.
    $override   = get_option('kuranomiya_metal_override_' . $metal);
    $base_price = ($override !== false && $override !== '') ? (float) $override : (float) $rates[$metal];

    $multipliers = kuranomiya_get_karat_multipliers();
    if (! isset($multipliers[$metal])) {
        return [];
    }

    $result = [];
    foreach ($multipliers[$metal] as $label => $ratio) {
        $result[] = [
            'label' => $label,
            'price' => (int) round($base_price * $ratio),
        ];
    }

    return $result;
}

// ---------------------------------------------------------------------------
// 6. Manual admin settings page (Tools → 貴金属相場)
// ---------------------------------------------------------------------------

function kuranomiya_register_metal_settings(): void {
    add_management_page(
        '貴金属相場',
        '貴金属相場',
        'manage_options',
        'kuranomiya-metal-rates',
        'kuranomiya_metal_settings_page'
    );
}
add_action('admin_menu', 'kuranomiya_register_metal_settings');

function kuranomiya_metal_settings_page(): void {
    if (! current_user_can('manage_options')) {
        return;
    }

    if (
        isset($_POST['kuranomiya_save_api_key']) &&
        check_admin_referer('kuranomiya_metal_nonce', 'kuranomiya_metal_nonce_field')
    ) {
        $key = isset($_POST['kuranomiya_metals_api_key'])
            ? sanitize_text_field(wp_unslash($_POST['kuranomiya_metals_api_key']))
            : '';

        if ($key !== '') {
            update_option('kuranomiya_metals_api_key', $key);
            echo '<div class="notice notice-success"><p>APIキーを保存しました。</p></div>';
        } else {
            echo '<div class="notice notice-warning"><p>APIキーは空欄のため変更されませんでした。</p></div>';
        }
    }

    if (
        isset($_POST['kuranomiya_fetch_now']) &&
        check_admin_referer('kuranomiya_metal_nonce', 'kuranomiya_metal_nonce_field')
    ) {
        // Clear any stale error so we can detect fresh failure vs. old failure.
        delete_option('kuranomiya_metal_rates_error');
        kuranomiya_fetch_metal_rates();
        $fetch_error = kuranomiya_get_metal_rates_error();
        if ($fetch_error) {
            echo '<div class="notice notice-error"><p>' . esc_html($fetch_error['message']) . '</p></div>';
        } else {
            echo '<div class="notice notice-success"><p>相場データを更新しました。</p></div>';
        }
    }

    if (
        isset($_POST['kuranomiya_save_overrides']) &&
        check_admin_referer('kuranomiya_metal_nonce', 'kuranomiya_metal_nonce_field')
    ) {
        foreach (['gold', 'platinum', 'silver'] as $metal) {
            $key = 'kuranomiya_metal_override_' . $metal;
            $val = isset($_POST[$key]) ? sanitize_text_field($_POST[$key]) : '';
            update_option($key, $val);
        }
        echo '<div class="notice notice-success"><p>手動価格を保存しました。</p></div>';
    }

    $rates      = kuranomiya_get_metal_rates();
    $last_error = kuranomiya_get_metal_rates_error();
    $api_key_set = kuranomiya_get_metals_api_key() !== '';
    $labels     = ['gold' => '金 (Gold)', 'platinum' => 'プラチナ (Platinum)', 'silver' => '銀 (Silver)'];
    ?>
    <div class="wrap">
        <h1>貴金属相場</h1>

        <?php if ($last_error) : ?>
            <div class="notice notice-error">
                <p>
                    <strong>自動更新エラー:</strong>
                    <?php echo esc_html($last_error['message']); ?>
                    <br><small>（<?php echo esc_html($last_error['timestamp']); ?>）</small>
                </p>
            </div>
        <?php endif; ?>

        <form method="post">
            <?php wp_nonce_field('kuranomiya_metal_nonce', 'kuranomiya_metal_nonce_field'); ?>
            <h2 class="title">API設定</h2>
            <table class="form-table" role="presentation">
                <tr>
                    <th scope="row"><label for="kuranomiya_metals_api_key">metals.dev APIキー</label></th>
                    <td>
                        <input
                            type="password"
                            id="kuranomiya_metals_api_key"
                            name="kuranomiya_metals_api_key"
                            value=""
                            autocomplete="new-password"
                            class="regular-text"
                        />
                        <p class="description">
                            <?php if ($api_key_set) : ?>
                                APIキーは設定済みです。変更する場合のみ新しいキーを入力してください。
                            <?php else : ?>
                                <a href="https://metals.dev" target="_blank" rel="noopener noreferrer">metals.dev</a>
                                のダッシュボードからAPIキーを取得してください。
                            <?php endif; ?>
                        </p>
                    </td>
                </tr>
            </table>
            <?php submit_button('APIキーを保存', 'secondary', 'kuranomiya_save_api_key', false); ?>
        </form>

        <form method="post">
            <?php wp_nonce_field('kuranomiya_metal_nonce', 'kuranomiya_metal_nonce_field'); ?>
            <h2 class="title">手動価格</h2>
            <table class="form-table" role="presentation">
                <?php foreach (['gold', 'platinum', 'silver'] as $metal) : ?>
                    <?php
                    $override  = get_option('kuranomiya_metal_override_' . $metal, '');
                    $api_price = $rates[$metal] ?? null;
                    ?>
                    <tr>
                        <th scope="row"><?php echo esc_html($labels[$metal]); ?></th>
                        <td>
                            <input
                                type="number"
                                name="<?php echo esc_attr('kuranomiya_metal_override_' . $metal); ?>"
                                value="<?php echo esc_attr($override); ?>"
                                step="0.01"
                                min="0"
                                placeholder="<?php echo $api_price !== null ? esc_attr(number_format($api_price, 2)) : ''; ?>"
                                class="regular-text"
                            />
                            <p class="description">
                                <?php if ($api_price !== null) : ?>
                                    API取得値: <?php echo esc_html(number_format($api_price, 2)); ?> 円/g
                                    （最終更新: <?php echo esc_html($rates['updated_at'] ?? '—'); ?>）
                                <?php else : ?>
                                    API取得値なし（空欄のままにすると相場データを使用します）
                                <?php endif; ?>
                            </p>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <?php submit_button('手動価格を保存', 'primary', 'kuranomiya_save_overrides'); ?>
            <?php submit_button('今すぐ更新', 'secondary', 'kuranomiya_fetch_now', false); ?>
        </form>
    </div>
    <?php
}

function kuranomiya_get_metal_rates_error(): ?array {
    $raw = get_option('kuranomiya_metal_rates_error');
    if (! $raw) {
        return null;
    }
    $decoded = json_decode($raw, true);
    return is_array($decoded) ? $decoded : null;
}
