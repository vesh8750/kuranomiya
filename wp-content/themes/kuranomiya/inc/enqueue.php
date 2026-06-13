<?php
defined('ABSPATH') || exit;

function kuranomiya_enqueue_assets(): void
{
    $theme_uri = get_template_directory_uri();
    $theme_dir = get_template_directory();
    $manifest_path = $theme_dir . '/dist/.vite/manifest.json';
    $vite_server = 'https://kuranomiya.test:3000';

    if (wp_get_environment_type() === 'local' && is_vite_running()) {
        wp_enqueue_script('vite-client', $vite_server . '/@vite/client', [], null, false);
        wp_enqueue_script('kuranomiya-main', $vite_server . '/assets/js/main.js', [], null, true);
    } elseif (file_exists($manifest_path)) {
        $manifest = json_decode(file_get_contents($manifest_path), true);
        $entry = $manifest['assets/js/main.js'] ?? null;

        if ($entry) {
            wp_enqueue_script('kuranomiya-main', $theme_uri . '/dist/' . $entry['file'], [], null, true);

            if (!empty($entry['css'])) {
                foreach ($entry['css'] as $css_file) {
                    wp_enqueue_style('kuranomiya-style', $theme_uri . '/dist/' . $css_file, [], null);
                }
            }
        }
    }

    add_filter('script_loader_tag', function ($tag, $handle) {
        if (in_array($handle, ['vite-client', 'kuranomiya-main'])) {
            return str_replace('<script ', '<script type="module" ', $tag);
        }
        return $tag;
    }, 10, 2);

    wp_enqueue_style(
        'kuranomiya-fonts',
        'https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@400;500;700;900&display=swap',
        [],
        null
    );
}
add_action('wp_enqueue_scripts', 'kuranomiya_enqueue_assets');

function is_vite_running(): bool
{
    static $running = null;
    if ($running !== null) return $running;
    $handle = @fsockopen('kuranomiya.test', 3000);
    $running = $handle !== false;
    if ($handle) fclose($handle);
    return $running;
}
