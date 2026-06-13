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
