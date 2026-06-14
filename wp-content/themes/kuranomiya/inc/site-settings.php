<?php
defined('ABSPATH') || exit;

function kuranomiya_get_line_url(): string {
    if (!function_exists('get_field')) {
        return '#';
    }

    $url = get_field('line_url', 'option');

    return (is_string($url) && $url !== '') ? $url : '#';
}

function kuranomiya_get_google_maps_url(): string {
    $fallback = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode('神奈川県平塚市紅谷12-24 リーフ8');

    if (!function_exists('get_field')) {
        return $fallback;
    }

    $url = get_field('google_maps_url', 'option');

    return (is_string($url) && $url !== '') ? $url : $fallback;
}

function kuranomiya_get_google_maps_embed_url(): string {
    $fallback = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3255.437452296155!2d139.3475283!3d35.3283333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601851950d87a55d%3A0x2bb9e324707647d!2z56We5aWI5bed55yM5bmz5aGa5biC57SF6LC3MTItMjQ!5e0!3m2!1sja!2sjp!4v1717148000000!5m2!1sja!2sjp';

    if (!function_exists('get_field')) {
        return $fallback;
    }

    $url = get_field('google_maps_embed_url', 'option');

    return (is_string($url) && $url !== '') ? $url : $fallback;
}

function kuranomiya_get_page_url(string $slug, string $fragment = ''): string {
    if ($slug === '') {
        $url = home_url('/');
    } else {
        $page = get_page_by_path($slug);
        $url  = ($page instanceof WP_Post) ? get_permalink($page) : home_url('/');
    }

    if ($fragment !== '') {
        $url .= '#' . ltrim($fragment, '#');
    }

    return $url;
}

/**
 * Resolve responsive background image URLs from ACF options with theme asset fallbacks.
 *
 * @return array{mobile: string, desktop: string}
 */
function kuranomiya_get_responsive_bg_urls(
    string $mobile_field,
    string $desktop_field,
    string $mobile_fallback,
    string $desktop_fallback
): array {
    $theme_uri = get_template_directory_uri() . '/assets/img/';
    $mobile    = $theme_uri . $mobile_fallback;
    $desktop   = $theme_uri . $desktop_fallback;

    if (!function_exists('get_field')) {
        return ['mobile' => $mobile, 'desktop' => $desktop];
    }

    $mobile_image  = get_field($mobile_field, 'option');
    $desktop_image = get_field($desktop_field, 'option');

    if (is_array($mobile_image) && !empty($mobile_image['url'])) {
        $mobile = $mobile_image['url'];
    }

    if (is_array($desktop_image) && !empty($desktop_image['url'])) {
        $desktop = $desktop_image['url'];
    }

    return ['mobile' => $mobile, 'desktop' => $desktop];
}
