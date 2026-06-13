<?php
defined('ABSPATH') || exit;

function kuranomiya_register_purchase_record_cpt(): void {
    register_post_type('purchase-record', [
        'labels' => [
            'name'          => '買取実績',
            'singular_name' => '買取実績',
            'add_new_item'  => '新規買取実績を追加',
            'edit_item'     => '買取実績を編集',
            'view_item'     => '買取実績を表示',
            'search_items'  => '買取実績を検索',
            'not_found'     => '買取実績が見つかりません',
        ],
        'public'       => true,
        'has_archive'  => false,
        'show_in_rest' => false,
        'menu_icon'    => 'dashicons-awards',
        'supports'     => ['title', 'thumbnail', 'editor'],
        'rewrite'      => ['slug' => 'purchase-record'],
    ]);
}
add_action('init', 'kuranomiya_register_purchase_record_cpt');

function kuranomiya_register_column_cpt(): void {
    register_post_type('column', [
        'labels' => [
            'name'          => 'コラム',
            'singular_name' => 'コラム',
            'add_new_item'  => '新規コラムを追加',
            'edit_item'     => 'コラムを編集',
            'view_item'     => 'コラムを表示',
            'search_items'  => 'コラムを検索',
            'not_found'     => 'コラムが見つかりません',
        ],
        'public'       => true,
        'has_archive'  => false,
        'show_in_rest' => false,
        'menu_icon'    => 'dashicons-admin-post',
        'supports'     => ['title', 'thumbnail', 'editor', 'excerpt'],
        'rewrite'      => ['slug' => 'column'],
    ]);
}
add_action('init', 'kuranomiya_register_column_cpt');

function kuranomiya_register_purchase_record_category_taxonomy(): void {
    register_taxonomy('purchase-record-category', ['purchase-record'], [
        'labels' => [
            'name'          => '買取カテゴリー',
            'singular_name' => '買取カテゴリー',
            'search_items'  => '買取カテゴリーを検索',
            'all_items'     => 'すべての買取カテゴリー',
            'edit_item'     => '買取カテゴリーを編集',
            'add_new_item'  => '新規買取カテゴリーを追加',
        ],
        'hierarchical' => true,
        'public'       => true,
        'show_in_rest' => false,
        'rewrite'      => ['slug' => 'purchase-record-category'],
    ]);
}
add_action('init', 'kuranomiya_register_purchase_record_category_taxonomy');

function kuranomiya_register_column_category_taxonomy(): void {
    register_taxonomy('column-category', ['column'], [
        'labels' => [
            'name'          => 'コラムカテゴリー',
            'singular_name' => 'コラムカテゴリー',
            'search_items'  => 'コラムカテゴリーを検索',
            'all_items'     => 'すべてのコラムカテゴリー',
            'edit_item'     => 'コラムカテゴリーを編集',
            'add_new_item'  => '新規コラムカテゴリーを追加',
        ],
        'hierarchical' => true,
        'public'       => true,
        'show_in_rest' => false,
        'rewrite'      => ['slug' => 'column-category'],
    ]);
}
add_action('init', 'kuranomiya_register_column_category_taxonomy');
