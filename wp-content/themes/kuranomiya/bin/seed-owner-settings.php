<?php
/**
 * Seed owner settings for the About page greeting section.
 *
 * Usage: wp eval-file wp-content/themes/kuranomiya/bin/seed-owner-settings.php
 */

defined('ABSPATH') || exit;

function kuranomiya_seed_owner_import_image(string $filename): int {
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

if (!function_exists('update_field')) {
    WP_CLI::error('ACF is not active.');
}

$owner_bio = "こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。\n\n"
    . "こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。\n\n"
    . "こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。";

update_field('owner_name', '●●', 'option');
update_field('owner_title', '業界歴11年以上の査定員', 'option');
update_field('owner_bio', $owner_bio, 'option');
update_field('phone_number', '0463-71-6678', 'option');
update_field('dealer_license_number', '452680013674', 'option');

$owner_photo_id = kuranomiya_seed_owner_import_image('client.png');
if ($owner_photo_id) {
    update_field('owner_photo', $owner_photo_id, 'option');
    WP_CLI::success("Owner settings seeded (photo attachment ID: {$owner_photo_id}).");
} else {
    WP_CLI::success('Owner settings seeded (photo fallback will use theme asset).');
}
