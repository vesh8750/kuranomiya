<?php
defined('ABSPATH') || exit;

// Load includes
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/acf-fields.php';
require_once get_template_directory() . '/inc/post-types.php';
require_once get_template_directory() . '/inc/metal-rates.php';
require_once get_template_directory() . '/inc/pagination.php';

// Theme setup
function kuranomiya_theme_setup(): void {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);

    add_image_size('kuranomiya-hero', 1440, 800, true);
    add_image_size('kuranomiya-card', 640, 480, true);
    add_image_size('kuranomiya-card-wide', 800, 600, true);
    add_image_size('kuranomiya-thumb', 160, 160, true);

    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Primary Menu', 'kuranomiya'),
        'footer'  => __('Footer Menu', 'kuranomiya'),
    ]);
}
add_action('after_setup_theme', 'kuranomiya_theme_setup');

function kuranomiya_disable_gutenberg(): void {
    add_filter('use_block_editor_for_post', '__return_false');
    add_filter('use_block_editor_for_post_type', '__return_false');
}
add_action('after_setup_theme', 'kuranomiya_disable_gutenberg');

function kuranomiya_increment_view_count(): void {
    if (is_singular('column')) {
        $post_id = get_the_ID();
        $count   = (int) get_post_meta($post_id, '_column_view_count', true);
        update_post_meta($post_id, '_column_view_count', $count + 1);
    }
}
add_action('wp_head', 'kuranomiya_increment_view_count');
