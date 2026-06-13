<?php
/**
 * Seed purchase-record categories and 15 realistic buy-back records.
 *
 * Usage: wp eval-file wp-content/themes/kuranomiya/bin/seed-purchase-records.php
 */

defined('ABSPATH') || exit;

$import_cache = [];

function kuranomiya_seed_pr_delete_all_records(): void {
    $post_ids = get_posts([
        'post_type'      => 'purchase-record',
        'posts_per_page' => -1,
        'post_status'    => 'any',
        'fields'         => 'ids',
    ]);

    foreach ($post_ids as $post_id) {
        wp_delete_post((int) $post_id, true);
    }

    if ($post_ids) {
        WP_CLI::log('Deleted ' . count($post_ids) . ' existing purchase-record post(s).');
    }
}

function kuranomiya_seed_pr_delete_seed_images(array $filenames): void {
    foreach ($filenames as $filename) {
        $attachments = get_posts([
            'post_type'      => 'attachment',
            'posts_per_page' => -1,
            'post_status'    => 'any',
            'meta_query'     => [[
                'key'     => '_kuranomiya_seed_source',
                'value'   => $filename,
                'compare' => '=',
            ]],
            'fields'         => 'ids',
        ]);

        foreach ($attachments as $attachment_id) {
            wp_delete_attachment((int) $attachment_id, true);
        }
    }
}

function kuranomiya_seed_pr_import_image(string $filename): int {
    global $import_cache;

    $theme_img_dir = get_template_directory() . '/assets/img';
    if (isset($import_cache[$filename])) {
        return $import_cache[$filename];
    }

    $path = $theme_img_dir . '/' . $filename;
    if (!file_exists($path)) {
        WP_CLI::warning("Image not found: {$filename}");
        return 0;
    }

    $existing = get_posts([
        'post_type'      => 'attachment',
        'posts_per_page' => 1,
        'meta_query'     => [[
            'key'     => '_kuranomiya_seed_source',
            'value'   => $filename,
            'compare' => '=',
        ]],
        'fields'         => 'ids',
    ]);

    if ($existing) {
        $import_cache[$filename] = (int) $existing[0];
        return $import_cache[$filename];
    }

    require_once ABSPATH . 'wp-admin/includes/file.php';
    require_once ABSPATH . 'wp-admin/includes/media.php';
    require_once ABSPATH . 'wp-admin/includes/image.php';

    $upload = wp_upload_bits($filename, null, file_get_contents($path));
    if (!empty($upload['error'])) {
        WP_CLI::warning("Upload failed for {$filename}: {$upload['error']}");
        return 0;
    }

    $attachment_id = wp_insert_attachment([
        'post_mime_type' => wp_check_filetype($filename)['type'],
        'post_title'     => sanitize_file_name(pathinfo($filename, PATHINFO_FILENAME)),
        'post_content'   => '',
        'post_status'    => 'inherit',
    ], $upload['file']);

    if (!$attachment_id || is_wp_error($attachment_id)) {
        WP_CLI::warning("Attachment insert failed for {$filename}");
        return 0;
    }

    update_post_meta($attachment_id, '_kuranomiya_seed_source', $filename);
    $metadata = wp_generate_attachment_metadata($attachment_id, $upload['file']);
    wp_update_attachment_metadata($attachment_id, $metadata);

    $import_cache[$filename] = (int) $attachment_id;

    return $import_cache[$filename];
}

function kuranomiya_seed_pr_set_featured_image(int $post_id, string $filename): void {
    $attachment_id = kuranomiya_seed_pr_import_image($filename);
    if ($attachment_id) {
        set_post_thumbnail($post_id, $attachment_id);
    }
}

function kuranomiya_seed_pr_upsert_record(array $post_data, array $category_ids): int {
    $existing = get_page_by_title($post_data['title'], OBJECT, 'purchase-record');
    $post_id  = $existing instanceof WP_Post
        ? (int) $existing->ID
        : 0;

    if ($post_id) {
        wp_update_post([
            'ID'            => $post_id,
            'post_date'     => $post_data['date'],
            'post_date_gmt' => get_gmt_from_date($post_data['date']),
            'post_status'   => 'publish',
        ]);
        WP_CLI::log("Updated: {$post_data['title']}");
    } else {
        $post_id = (int) wp_insert_post([
            'post_type'   => 'purchase-record',
            'post_title'  => $post_data['title'],
            'post_status' => 'publish',
            'post_date'   => $post_data['date'],
        ], true);

        if (is_wp_error($post_id)) {
            WP_CLI::warning("Failed to create {$post_data['title']}: " . $post_id->get_error_message());
            return 0;
        }

        WP_CLI::log("Created: {$post_data['title']}");
    }

    if (!empty($category_ids[$post_data['category']])) {
        wp_set_object_terms($post_id, [(int) $category_ids[$post_data['category']]], 'purchase-record-category');
    }

    kuranomiya_seed_pr_set_featured_image($post_id, $post_data['image']);

    if (function_exists('update_field')) {
        update_field('purchase_price', $post_data['purchase_price'], $post_id);
        update_field('card_description', $post_data['card_description'], $post_id);
        update_field('brand_name', $post_data['brand_name'], $post_id);
        update_field('item_condition', $post_data['item_condition'], $post_id);
        update_field('customer_voice', $post_data['customer_voice'], $post_id);
        update_field('owner_comment', $post_data['owner_comment'], $post_id);
    } else {
        update_post_meta($post_id, 'purchase_price', $post_data['purchase_price']);
        update_post_meta($post_id, 'card_description', $post_data['card_description']);
        update_post_meta($post_id, 'brand_name', $post_data['brand_name']);
        update_post_meta($post_id, 'item_condition', $post_data['item_condition']);
        update_post_meta($post_id, 'customer_voice', $post_data['customer_voice']);
        update_post_meta($post_id, 'owner_comment', $post_data['owner_comment']);
    }

    return $post_id;
}

$categories = [
    '時計',
    '宝飾品',
    '金・銀',
    '貴金属',
    'ブランド品',
    'プラチナ',
    '金',
];

$category_ids = [];
foreach ($categories as $name) {
    $existing = term_exists($name, 'purchase-record-category');
    if ($existing) {
        $category_ids[$name] = (int) (is_array($existing) ? $existing['term_id'] : $existing);
        continue;
    }

    $result = wp_insert_term($name, 'purchase-record-category');
    if (is_wp_error($result)) {
        WP_CLI::warning("Could not create category {$name}: " . $result->get_error_message());
        continue;
    }
    $category_ids[$name] = (int) $result['term_id'];
}

$posts = [
    [
        'title'            => 'ロレックス デイトジャスト 16233',
        'category'         => '時計',
        'date'             => '2026-05-01 10:00:00',
        'image'            => 'achievement-1.png',
        'purchase_price'   => 550000,
        'card_description' => '長くお使いになった一本。傷の中にも丁寧に時を刻まれた品の良さがありました。機械の調子と相場を踏まえ、お客様にご納得いただける査定額をお伝えしました。',
        'brand_name'       => 'ROLEX',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => "亡き父の形見として大切にしていた時計でした。売却するか迷いましたが、一点一点状態をご説明いただき、納得してお任せできました。\n\n金額だけでなく、お品物への敬意を感じたことが印象的でした。",
        'owner_comment'    => 'ケースやブレスの傷、文字盤の状態を拝見し、機械の動作と市場相場を総合的に判断しました。お客様のお気持ちに寄り添いながら、ご納得いただける査定額をお伝えすることを大切にしています。',
    ],
    [
        'title'            => '金属アクセサリー 一式',
        'category'         => '金',
        'date'             => '2026-06-01 10:00:00',
        'image'            => 'card-ornament-2.png',
        'purchase_price'   => 1294872,
        'card_description' => 'ご結婚当時にお揃えになった品々とお伺いしました。一点一点純度と重量を計測しながら、お話を伺いつつ、丁寧に査定させていただきました。',
        'brand_name'       => '',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => "ご結婚のときにお揃えで購入したアクセサリーを、生前整理の機会に査定していただきました。\n\n一つひとつ計量と説明をしていただき、想いのある品物にも敬意を払っていただいたことが伝わりました。",
        'owner_comment'    => '複数点の金属アクセサリーをまとめてお預かりし、刻印と純度、重量を一つずつ確認しました。お話を伺いながら査定することで、お客様にもご納得いただける結果につながりました。',
    ],
    [
        'title'            => '金歯・銀歯',
        'category'         => '金・銀',
        'date'             => '2026-06-01 10:00:00',
        'image'            => 'card-ornament-3.png',
        'purchase_price'   => 114567,
        'card_description' => '歯科医院よりお受け取りになった金歯・銀歯。地金として精錬する形での組成の純度を確認し、当日の相場に基づき算定したうえでお伝えしました。',
        'brand_name'       => '',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => "歯科医院から受け取った金歯・銀歯の処分に迷っていましたが、地金としての価値を丁寧に説明していただき、安心してお任せできました。\n\n計算の根拠も分かりやすく、納得感がありました。",
        'owner_comment'    => '金歯・銀歯は地金としての評価が中心です。組成の純度を確認し、当日の相場をもとに正確に算定したうえで、分かりやすくご説明しました。',
    ],
    [
        'title'            => 'オメガ スピードマスター プロフェッショナル',
        'category'         => '時計',
        'date'             => '2026-04-22 11:30:00',
        'image'            => 'watch-1.png',
        'purchase_price'   => 685000,
        'card_description' => 'ご本人様が長年愛用されていたクロノグラフ。ベゼルの傷とブレスの伸びを確認し、ムーブメントの動作状態と市場相場を踏まえて査定しました。',
        'brand_name'       => 'OMEGA',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => "旅行のたびに付けていた思い出の時計です。動作状態や傷の箇所まで丁寧にご説明いただき、安心して売却を決められました。",
        'owner_comment'    => 'スピードマスターはモデル年や文字盤、ブレスの状態で評価が変わります。お客様と一緒に刻印を確認しながら、査定の根拠を分かりやすくお伝えしました。',
    ],
    [
        'title'            => 'セイコー グランドセイコー SBGW235',
        'category'         => '時計',
        'date'             => '2026-04-12 14:00:00',
        'image'            => 'watch-2.png',
        'purchase_price'   => 418000,
        'card_description' => '手巻きモデルのため、動作確認とケースの細かな傷を拝見。箱と保証書が揃っており、コンディションの良さが評価につながりました。',
        'brand_name'       => 'Grand Seiko',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => "趣味で集めていた時計の整理の一環でお持ちしました。付属品の有無まで確認していただき、納得のいく金額でした。",
        'owner_comment'    => 'グランドセイコーは付属品と保管状態が大きく影響します。箱・保証書・タグを確認し、市場での需要も踏まえて査定額をご提示しました。',
    ],
    [
        'title'            => 'カルティエ タンク ソロ W5200003',
        'category'         => '時計',
        'date'             => '2026-03-28 10:15:00',
        'image'            => 'watch-3.png',
        'purchase_price'   => 372000,
        'card_description' => '革ベルトの経年変色とケースの微細な傷を確認。クォーツモデルのため電池交換歴もお伺いし、総合的に査定しました。',
        'brand_name'       => 'Cartier',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => "妻から贈られた大切な時計でした。急かされることなく、じっくり説明していただけたので安心できました。",
        'owner_comment'    => 'タンクソロはクラシックな人気モデルです。ベルトの状態やケースの磨耗具合を拝見し、ブランド時計としての価値を丁寧に評価しました。',
    ],
    [
        'title'            => 'ダイヤモンドリング 0.5ct Pt900',
        'category'         => '宝飾品',
        'date'             => '2026-03-18 15:45:00',
        'image'            => 'achievement-1.png',
        'purchase_price'   => 186500,
        'card_description' => 'Pt900台座にセッティングされた約0.5ctのリング。石の状態と台座の重量、デザイン性を合わせて査定しました。',
        'brand_name'       => '',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => "長年身につけていた指輪を手放す決断は簡単ではありませんでしたが、石と地金の評価を分けて説明していただき、納得できました。",
        'owner_comment'    => 'ダイヤモンドはカラット・台座の品位・リング全体のデザインを総合的に見ます。ルーペで状態をご一緒に確認しながら査定額の根拠をお伝えしました。',
    ],
    [
        'title'            => '真珠ネックレス 花珠 8.5mm',
        'category'         => '宝飾品',
        'date'             => '2026-03-08 11:00:00',
        'image'            => 'achievement-2.png',
        'purchase_price'   => 158000,
        'card_description' => '花珠グレードの本真珠ネックレス。照りとキズ、クラスプの品位を確認し、保管状態の良さも評価に反映しました。',
        'brand_name'       => '',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => "母から譲り受けたネックレスでした。真珠の評価ポイントを丁寧に教えていただき、安心してお任せできました。",
        'owner_comment'    => '真珠はつや、サイズの揃い、クラスプの素材が査定のポイントです。布製ケースでの保管が確認でき、状態の良さが買取額に反映されました。',
    ],
    [
        'title'            => 'K18 ゴールドブレスレット',
        'category'         => '宝飾品',
        'date'             => '2026-02-25 13:20:00',
        'image'            => 'achievement-3.png',
        'purchase_price'   => 246800,
        'card_description' => 'K18のブレスレット。クラスプ部分の刻印と総重量を計測し、デザイン性と地金価値を合わせて査定しました。',
        'brand_name'       => '',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => "使わなくなったブレスレットを処分する前に相談しました。純度と重量の説明が明確で、他店との比較もしやすかったです。",
        'owner_comment'    => 'ブレスレットはクラスプの刻印確認が重要です。電子秤で重量を計測し、その場で計算方法をご説明しました。',
    ],
    [
        'title'            => '純金インゴット 100g',
        'category'         => '貴金属',
        'date'             => '2026-02-14 10:30:00',
        'image'            => 'card-gold-1.png',
        'purchase_price'   => 896400,
        'card_description' => '100gの純金インゴット。刻印とシリアル、表面の状態を確認し、当日の金相場に基づいて買取額を算定しました。',
        'brand_name'       => '',
        'item_condition'   => '未使用',
        'customer_voice'   => "相続したインゴットの処分で相談しました。当日の相場と計算式をその場で示していただき、とても分かりやすかったです。",
        'owner_comment'    => 'インゴットは刻印・重量・当日相場が査定の三本柱です。計算過程をその場でご説明し、納得いただいたうえで買取させていただきました。',
    ],
    [
        'title'            => 'プラチナコイン 1オンス',
        'category'         => '貴金属',
        'date'             => '2026-02-05 16:00:00',
        'image'            => 'market-item-2.png',
        'purchase_price'   => 248600,
        'card_description' => '1オンスのプラチナコイン。品位と重量を確認し、プラチナの当日相場をもとに買取価格をご提示しました。',
        'brand_name'       => '',
        'item_condition'   => '未使用',
        'customer_voice'   => "コレクションしていたコインを整理するにあたり査定をお願いしました。地金としての価値が明確に説明され、安心できました。",
        'owner_comment'    => 'プラチナコインは品位と重量が明確なため、相場連動型の査定になります。計算根拠を丁寧にご説明しました。',
    ],
    [
        'title'            => '純銀食器・コイン 一式',
        'category'         => '金・銀',
        'date'             => '2026-01-28 11:45:00',
        'image'            => 'card-silver-1.png',
        'purchase_price'   => 68400,
        'card_description' => '純銀の食器とコインをまとめてお預かり。銀含量の刻印を確認し、一点ずつ重量を計測して査定しました。',
        'brand_name'       => '',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => "実家に残っていた銀食器をどうするか迷っていました。銀と銀メッキの違いまで説明していただき、助かりました。",
        'owner_comment'    => '銀製品は刻印（925等）の有無で評価が大きく変わります。一点ずつ確認し、銀メッキ製品と区別してご説明しました。',
    ],
    [
        'title'            => 'ルイ・ヴィトン モノグラム ネヴァーフル MM',
        'category'         => 'ブランド品',
        'date'             => '2026-01-18 14:30:00',
        'image'            => 'item-1.png',
        'purchase_price'   => 96800,
        'card_description' => 'モノグラムのネヴァーフルMM。角スレや内側の汚れ、シリアルと付属品の有無を確認し、ブランドバッグとして査定しました。',
        'brand_name'       => 'Louis Vuitton',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => "長年愛用していたバッグでした。状態の評価ポイントを一つずつ説明していただき、納得して売却できました。",
        'owner_comment'    => 'ネヴァーフルは型番・シリアル・角スレ・内側の状態が査定のポイントです。付属のポーチの有無も確認し、総合的に評価しました。',
    ],
    [
        'title'            => 'シャネル マトラッセ チェーンウォレット',
        'category'         => 'ブランド品',
        'date'             => '2026-01-10 10:00:00',
        'image'            => 'item-2.png',
        'purchase_price'   => 124500,
        'card_description' => 'ラムスキンのマトラッセ長財布。角スレ、金具の状態、ギャランティーカードの有無を確認して査定しました。',
        'brand_name'       => 'CHANEL',
        'item_condition'   => '中古・難あり',
        'customer_voice'   => "使わなくなった財布を処分したくて来店しました。傷のある箇所も隠さずお伝えいただき、信頼できるお店だと感じました。",
        'owner_comment'    => 'シャネルのマトラッセは素材の経年変色や金具の状態が重要です。ギャランティーカードの有無も確認し、正直な評価をお伝えしました。',
    ],
    [
        'title'            => 'エルメス バーキン 30 トゴ ブラック',
        'category'         => 'ブランド品',
        'date'             => '2025-12-22 15:00:00',
        'image'            => 'item-3.png',
        'purchase_price'   => 1840000,
        'card_description' => 'トゴレザーのバーキン30。角スレ、ハンドルの艶、刻印と付属品を確認。高額ブランド品として慎重に査定しました。',
        'brand_name'       => 'HERMÈS',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => "大切に保管していたバッグでしたが、使う機会がなくなり査定をお願いしました。一点一点状態を確認していただき、とても丁寧な対応でした。",
        'owner_comment'    => 'バーキンは刻印（刻印年）、付属品（カデナ・ボックス・レインカバー）、皮革の状態が査定の要です。市場相場とコンディションを総合的に判断しました。',
    ],
];

kuranomiya_seed_pr_delete_all_records();
kuranomiya_seed_pr_delete_seed_images(array_column($posts, 'image'));

$created = 0;

foreach ($posts as $post_data) {
    $post_id = wp_insert_post([
        'post_type'   => 'purchase-record',
        'post_title'  => $post_data['title'],
        'post_status' => 'publish',
        'post_date'   => $post_data['date'],
    ], true);

    if (is_wp_error($post_id)) {
        WP_CLI::warning("Failed to create {$post_data['title']}: " . $post_id->get_error_message());
        continue;
    }

    if (!empty($category_ids[$post_data['category']])) {
        wp_set_object_terms($post_id, [(int) $category_ids[$post_data['category']]], 'purchase-record-category');
    }

    kuranomiya_seed_pr_set_featured_image($post_id, $post_data['image']);

    if (function_exists('update_field')) {
        update_field('purchase_price', $post_data['purchase_price'], $post_id);
        update_field('card_description', $post_data['card_description'], $post_id);
        update_field('brand_name', $post_data['brand_name'], $post_id);
        update_field('item_condition', $post_data['item_condition'], $post_id);
        update_field('customer_voice', $post_data['customer_voice'], $post_id);
        update_field('owner_comment', $post_data['owner_comment'], $post_id);
    } else {
        update_post_meta($post_id, 'purchase_price', $post_data['purchase_price']);
        update_post_meta($post_id, 'card_description', $post_data['card_description']);
        update_post_meta($post_id, 'brand_name', $post_data['brand_name']);
        update_post_meta($post_id, 'item_condition', $post_data['item_condition']);
        update_post_meta($post_id, 'customer_voice', $post_data['customer_voice']);
        update_post_meta($post_id, 'owner_comment', $post_data['owner_comment']);
    }

    $created++;
    WP_CLI::log("Created: {$post_data['title']}");
}

$item_purchase_related = [
    [
        'title'            => '商品名が入ります',
        'category'         => 'プラチナ',
        'date'             => '2026-06-01 10:00:00',
        'image'            => 'card-ornament-1.png',
        'purchase_price'   => 0,
        'card_description' => 'プラチナ製品の買取実績です。品位と重量を確認し、当日の相場に基づいて査定いたします。',
        'brand_name'       => '',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => '',
        'owner_comment'    => '',
    ],
    [
        'title'            => '金属アクセサリー 一式',
        'category'         => '金',
        'date'             => '2026-06-01 10:00:00',
        'image'            => 'card-ornament-2.png',
        'purchase_price'   => 1294872,
        'card_description' => 'ご結婚当時にお揃えになった品々とお伺いしました。一点一点純度と重量を計測しながら、お話を伺いつつ、丁寧に査定させていただきました。',
        'brand_name'       => '',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => "ご結婚のときにお揃えで購入したアクセサリーを、生前整理の機会に査定していただきました。\n\n一つひとつ計量と説明をしていただき、想いのある品物にも敬意を払っていただいたことが伝わりました。",
        'owner_comment'    => '複数点の金属アクセサリーをまとめてお預かりし、刻印と純度、重量を一つずつ確認しました。お話を伺いながら査定することで、お客様にもご納得いただける結果につながりました。',
    ],
    [
        'title'            => '金歯・銀歯',
        'category'         => '金・銀',
        'date'             => '2026-06-01 10:00:00',
        'image'            => 'card-ornament-3.png',
        'purchase_price'   => 114567,
        'card_description' => '歯科医院よりお受け取りになった金歯・銀歯。地金として精錬する形での組成の純度を確認し、当日の相場に基づき算定したうえでお伝えしました。',
        'brand_name'       => '',
        'item_condition'   => '中古・正常稼働',
        'customer_voice'   => "歯科医院から受け取った金歯・銀歯の処分に迷っていましたが、地金としての価値を丁寧に説明していただき、安心してお任せできました。\n\n計算の根拠も分かりやすく、納得感がありました。",
        'owner_comment'    => '金歯・銀歯は地金としての評価が中心です。組成の純度を確認し、当日の相場をもとに正確に算定したうえで、分かりやすくご説明しました。',
    ],
];

foreach ($item_purchase_related as $post_data) {
    kuranomiya_seed_pr_upsert_record($post_data, $category_ids);
}

WP_CLI::success("Purchase record seed complete. Created {$created} post(s).");
