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
