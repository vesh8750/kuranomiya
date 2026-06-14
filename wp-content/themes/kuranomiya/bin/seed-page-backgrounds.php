<?php
/**
 * Seed page hero background images for front page and about page.
 *
 * Usage: wp eval-file wp-content/themes/kuranomiya/bin/seed-page-backgrounds.php
 */

defined('ABSPATH') || exit;

function kuranomiya_seed_page_bg_import_image(string $filename): int {
    static $cache = [];

    if (isset($cache[$filename])) {
        return $cache[$filename];
    }

    $path = get_template_directory() . '/assets/img/' . $filename;
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
        $cache[$filename] = (int) $existing[0];
        return $cache[$filename];
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

    $cache[$filename] = (int) $attachment_id;

    return $cache[$filename];
}

function kuranomiya_seed_page_bg_set_option(string $field, string $filename): void {
    $attachment_id = kuranomiya_seed_page_bg_import_image($filename);
    if ($attachment_id && function_exists('update_field')) {
        update_field($field, $attachment_id, 'option');
    }
}

if (!function_exists('update_field')) {
    WP_CLI::error('ACF is not active.');
}

$images = [
    'front_hero_bg_mobile'  => 'hero-banner-mobile.png',
    'front_hero_bg_desktop' => 'hero-banner.png',
    'about_hero_bg_mobile'  => 'greeting-hero-mobile.png',
    'about_hero_bg_desktop' => 'greeting-hero-bg.png',
];

foreach ($images as $field => $filename) {
    kuranomiya_seed_page_bg_set_option($field, $filename);
}

WP_CLI::success('Page background images seeded.');
