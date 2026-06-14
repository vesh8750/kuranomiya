<?php
defined('ABSPATH') || exit;

function kuranomiya_register_faq_acf_fields(): void {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => 'FAQ設定',
            'menu_title' => 'FAQ設定',
            'menu_slug'  => 'faq-settings',
            'capability' => 'edit_posts',
            'redirect'   => false,
        ]);
    }

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key'    => 'group_faq',
        'title'  => 'FAQ項目',
        'fields' => [
            [
                'key'        => 'field_faq_items',
                'label'      => 'FAQ一覧',
                'name'       => 'faq_items',
                'type'       => 'repeater',
                'min'        => 1,
                'max'        => 10,
                'layout'     => 'block',
                'sub_fields' => [
                    [
                        'key'   => 'field_faq_question',
                        'label' => '質問',
                        'name'  => 'faq_question',
                        'type'  => 'text',
                    ],
                    [
                        'key'   => 'field_faq_answer',
                        'label' => '回答',
                        'name'  => 'faq_answer',
                        'type'  => 'textarea',
                    ],
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'faq-settings',
                ],
            ],
        ],
    ]);
}
add_action('acf/init', 'kuranomiya_register_faq_acf_fields');

function kuranomiya_register_purchase_record_acf_fields(): void {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key'    => 'group_purchase_record',
        'title'  => '買取実績 詳細',
        'fields' => [
            [
                'key'          => 'field_purchase_price',
                'label'        => '買取価格',
                'name'         => 'purchase_price',
                'type'         => 'number',
                'instructions' => '例：550000（カンマ不要、数字のみ）',
            ],
            [
                'key'          => 'field_card_description',
                'label'        => 'カード説明文',
                'name'         => 'card_description',
                'type'         => 'textarea',
                'rows'         => 3,
                'instructions' => 'アーカイブページのカードに表示される短い説明文',
            ],
            [
                'key'          => 'field_brand_name',
                'label'        => 'ブランド名',
                'name'         => 'brand_name',
                'type'         => 'text',
                'instructions' => '例：ROLEX（英語表記）',
            ],
            [
                'key'           => 'field_item_condition',
                'label'         => '状態',
                'name'          => 'item_condition',
                'type'          => 'select',
                'choices'       => [
                    '未使用'        => '未使用',
                    '中古・正常稼働' => '中古・正常稼働',
                    '中古・難あり'   => '中古・難あり',
                ],
                'default_value' => '中古・正常稼働',
            ],
            [
                'key'          => 'field_customer_voice',
                'label'        => 'お客様の声',
                'name'         => 'customer_voice',
                'type'         => 'textarea',
                'rows'         => 4,
                'instructions' => '改行で段落が分かれます',
            ],
            [
                'key'   => 'field_owner_comment',
                'label' => '店主より',
                'name'  => 'owner_comment',
                'type'  => 'textarea',
                'rows'  => 4,
            ],
            [
                'key'          => 'field_product_gallery',
                'label'        => '商品ギャラリー',
                'name'         => 'product_gallery',
                'type'         => 'gallery',
                'instructions' => '最大4枚（メイン画像はアイキャッチ画像を使用）',
                'max'          => 4,
                'mime_types'   => 'jpg,jpeg,png,webp',
            ],
        ],
        'location' => [
            [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'purchase-record',
                ],
            ],
        ],
    ]);
}
add_action('acf/init', 'kuranomiya_register_purchase_record_acf_fields');

function kuranomiya_register_column_acf_fields(): void {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key'    => 'group_column',
        'title'  => 'コラム 詳細',
        'fields' => [
            [
                'key'          => 'field_column_lead_text',
                'label'        => 'リード文',
                'name'         => 'column_lead_text',
                'type'         => 'textarea',
                'rows'         => 3,
                'instructions' => '本文の前に表示される導入文',
            ],
            [
                'key'           => 'field_column_mid_image',
                'label'         => '中間画像',
                'name'          => 'column_mid_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'instructions'  => '本文中に表示される画像（任意）',
            ],
        ],
        'location' => [
            [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'column',
                ],
            ],
        ],
    ]);
}
add_action('acf/init', 'kuranomiya_register_column_acf_fields');

function kuranomiya_register_owner_options(): void {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => '店舗・オーナー設定',
            'menu_title' => '店舗設定',
            'menu_slug'  => 'owner-settings',
            'capability' => 'edit_posts',
            'redirect'   => false,
        ]);
    }

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key'    => 'group_owner_settings',
        'title'  => '店舗・オーナー情報',
        'fields' => [
            [
                'key'           => 'field_owner_name',
                'label'         => 'オーナー名',
                'name'          => 'owner_name',
                'type'          => 'text',
                'default_value' => '●●',
            ],
            [
                'key'           => 'field_owner_photo',
                'label'         => 'オーナー写真',
                'name'          => 'owner_photo',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'thumbnail',
            ],
            [
                'key'           => 'field_owner_title',
                'label'         => '肩書き',
                'name'          => 'owner_title',
                'type'          => 'text',
                'instructions'  => '例：業界歴11年以上の査定員',
                'default_value' => '業界歴11年以上の査定員',
            ],
            [
                'key'           => 'field_owner_bio',
                'label'         => 'オーナー紹介文',
                'name'          => 'owner_bio',
                'type'          => 'textarea',
                'rows'          => 8,
                'instructions'  => '空行で段落が分かれます',
                'default_value' => "こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。\n\nこちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。\n\nこちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。",
            ],
            [
                'key'           => 'field_gallery_image_1',
                'label'         => '店内写真 メイン',
                'name'          => 'gallery_image_1',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'instructions'  => '大きく表示されるメイン写真',
            ],
            [
                'key'           => 'field_gallery_image_2',
                'label'         => '店内写真 サブ1',
                'name'          => 'gallery_image_2',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
            ],
            [
                'key'           => 'field_gallery_image_3',
                'label'         => '店内写真 サブ2',
                'name'          => 'gallery_image_3',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
            ],
            [
                'key'           => 'field_gallery_description',
                'label'         => '店内紹介文',
                'name'          => 'gallery_description',
                'type'          => 'text',
                'default_value' => '買取 蔵の宮は、湘南スターモール商店街の一角にある、24㎡の小さな店舗です。',
            ],
            [
                'key'          => 'field_line_url',
                'label'        => 'LINE友だち追加URL',
                'name'         => 'line_url',
                'type'         => 'url',
                'instructions' => 'LINE公式アカウントの友だち追加URL（例：https://lin.ee/xxxx）',
            ],
            [
                'key'           => 'field_google_maps_url',
                'label'         => 'Google Map URL',
                'name'          => 'google_maps_url',
                'type'          => 'url',
                'instructions'  => '「Google Mapをみる」ボタンのリンク先',
                'default_value' => 'https://www.google.com/maps/search/?api=1&query=神奈川県平塚市紅谷12-24+リーフ8',
            ],
            [
                'key'           => 'field_google_maps_embed_url',
                'label'         => 'Google Map 埋め込みURL',
                'name'          => 'google_maps_embed_url',
                'type'          => 'url',
                'instructions'  => '地図iframeのsrc（Google Mapsの「地図を埋め込む」から取得）',
                'default_value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3255.437452296155!2d139.3475283!3d35.3283333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601851950d87a55d%3A0x2bb9e324707647d!2z56We5aWI5bed55yM5bmz5aGa5biC57SF6LC3MTItMjQ!5e0!3m2!1sja!2sjp!4v1717148000000!5m2!1sja!2sjp',
            ],
            [
                'key'           => 'field_column_hero_desc_1',
                'label'         => 'コラム ヒーロー説明文1',
                'name'          => 'column_hero_desc_1',
                'type'          => 'text',
                'default_value' => '買取・査定・お品物の知識を店主の視点でお届けします。',
            ],
            [
                'key'           => 'field_column_hero_desc_2',
                'label'         => 'コラム ヒーロー説明文2',
                'name'          => 'column_hero_desc_2',
                'type'          => 'text',
                'default_value' => '大切なお品物の売却や遺品整理などの際は、こちらもご覧ください。',
            ],
        ],
        'location' => [
            [
                [
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'owner-settings',
                ],
            ],
        ],
    ]);
}
add_action('acf/init', 'kuranomiya_register_owner_options');

function kuranomiya_register_page_background_options(): void {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => 'ページ背景設定',
            'menu_title' => 'ページ背景',
            'menu_slug'  => 'page-backgrounds',
            'capability' => 'edit_posts',
            'redirect'   => false,
            'icon_url'   => 'dashicons-format-image',
            'position'   => 61,
        ]);
    }

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key'    => 'group_page_backgrounds',
        'title'  => 'ページ背景画像',
        'fields' => [
            [
                'key'       => 'field_page_bg_tab_front',
                'label'     => 'トップページ',
                'name'      => '',
                'type'      => 'tab',
                'placement' => 'top',
            ],
            [
                'key'           => 'field_front_hero_bg_mobile',
                'label'         => '背景画像（スマートフォン）',
                'name'          => 'front_hero_bg_mobile',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'mime_types'    => 'jpg,jpeg,png,webp',
                'instructions'  => 'トップページのヒーロー背景（スマートフォン表示）。推奨：縦長 430×800px 以上',
            ],
            [
                'key'           => 'field_front_hero_bg_desktop',
                'label'         => '背景画像（パソコン）',
                'name'          => 'front_hero_bg_desktop',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'mime_types'    => 'jpg,jpeg,png,webp',
                'instructions'  => 'トップページのヒーロー背景（パソコン表示）。推奨：1440×800px 以上',
            ],
            [
                'key'       => 'field_page_bg_tab_about',
                'label'     => '店主・店舗紹介',
                'name'      => '',
                'type'      => 'tab',
                'placement' => 'top',
            ],
            [
                'key'           => 'field_about_hero_bg_mobile',
                'label'         => '背景画像（スマートフォン）',
                'name'          => 'about_hero_bg_mobile',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'mime_types'    => 'jpg,jpeg,png,webp',
                'instructions'  => '店主・店舗紹介ページのヒーロー背景（スマートフォン表示）。推奨：縦長 430×800px 以上',
            ],
            [
                'key'           => 'field_about_hero_bg_desktop',
                'label'         => '背景画像（パソコン）',
                'name'          => 'about_hero_bg_desktop',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'mime_types'    => 'jpg,jpeg,png,webp',
                'instructions'  => '店主・店舗紹介ページのヒーロー背景（パソコン表示）。推奨：1440×800px 以上',
            ],
        ],
        'location' => [
            [
                [
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'page-backgrounds',
                ],
            ],
        ],
    ]);
}
add_action('acf/init', 'kuranomiya_register_page_background_options');
