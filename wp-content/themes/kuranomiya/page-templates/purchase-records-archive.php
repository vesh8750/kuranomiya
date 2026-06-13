<?php

/**
 * Template Name: Purchase Records Archive
 * Template: Page 2
 */

get_header();

$orderby = isset($_GET['orderby']) ? sanitize_text_field(wp_unslash($_GET['orderby'])) : 'date';
$paged   = max(1, (int) (get_query_var('paged') ?: get_query_var('page') ?: 1));
if (isset($_GET['paged'])) {
    $paged = max(1, (int) sanitize_text_field(wp_unslash($_GET['paged'])));
}

$category = get_query_var('pr_category');
if (!is_string($category) || $category === '') {
    $category = isset($_GET['pr_category'])
        ? sanitize_text_field(wp_unslash($_GET['pr_category']))
        : '';
}
if ($category === '' && isset($_GET['category'])) {
    $category = sanitize_text_field(wp_unslash($_GET['category']));
}

$page_url = get_permalink();

$terms = get_terms(['taxonomy' => 'purchase-record-category', 'hide_empty' => false]);
if (is_wp_error($terms)) {
    $terms = [];
}

$selected_term = null;
if ($category !== '') {
    $selected_term = get_term_by('slug', $category, 'purchase-record-category');
    if (!$selected_term) {
        foreach ($terms as $term_candidate) {
            if (
                $term_candidate->slug === $category
                || rawurldecode($term_candidate->slug) === $category
                || $term_candidate->slug === rawurldecode($category)
            ) {
                $selected_term = $term_candidate;
                break;
            }
        }
    }
    if ($selected_term instanceof WP_Term) {
        $category = $selected_term->slug;
    }
}

$archive_url_args = function (?string $term_slug = null, ?string $sort = null, ?int $page = null) use ($orderby, $page_url): string {
    $args = array_filter([
        'pr_category' => $term_slug,
        'orderby'     => ($sort ?? $orderby) !== 'date' ? ($sort ?? $orderby) : null,
        'paged'       => $page && $page > 1 ? $page : null,
    ], static fn($value) => $value !== null && $value !== '');

    return add_query_arg($args, $page_url);
};

$args = [
    'post_type'      => 'purchase-record',
    'posts_per_page' => 9,
    'paged'          => $paged,
    'orderby'        => 'date',
    'order'          => 'DESC',
];

if ($category) {
    $args['tax_query'] = [[
        'taxonomy' => 'purchase-record-category',
        'field'    => 'slug',
        'terms'    => $category,
    ]];
}

if ($orderby === 'price_high' || $orderby === 'price_low') {
    $args['orderby']  = 'meta_value_num';
    $args['meta_key'] = 'purchase_price';
    $args['order']    = $orderby === 'price_high' ? 'DESC' : 'ASC';
}

$query = new WP_Query($args);

$sort_query_args = static function (string $sort_value) use ($category): string {
    $params = array_filter([
        'orderby'     => $sort_value,
        'pr_category' => $category ?: null,
    ], static fn($value) => $value !== null && $value !== '');

    return '?' . http_build_query($params);
};

$filter_active_class    = 'px-6 py-2 bg-[#B57A3F] rounded-[24px] text-white text-[14px] font-medium transition-colors hover:bg-[#a06830]';
$filter_inactive_class  = 'px-5 py-2 bg-[#FFFCF5] rounded-[24px] text-[#B57A3F] text-[14px] font-medium border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]';
?>

<!-- Hero Section  -->

<section
    class="relative bg-[#FFFCF5] pb-20 sm:pb-28 lg:pb-24 font-serif-jp overflow-hidden min-h-[360px] flex flex-col">

    <div
        class="absolute hidden md:block right-[-10%] sm:right-[-5%] lg:right-10 top-1/2 -translate-y-1/2 w-[60%] sm:w-[45%] lg:w-[32%] max-w-[450px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/product-page-right-bg.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div
        class="absolute bottom-[-1%] sm:bottom-[-4%] left-[-0%] font-['EB_Garamond'] text-[clamp(3rem,13vw,6rem)] uppercase tracking-[0.05em] text-[#F1ECE0] leading-none font-medium select-none pointer-events-none whitespace-nowrap z-0">
        Achievements
    </div>

    <div class="hidden md:block relative w-full max-w-[1400px] mx-auto px-5 sm:px-6 lg:px-8 pt-4 sm:pt-6 z-10 font-sans text-[12px] tracking-wider text-[#615C56]">
        <nav class="flex items-center space-x-2 flex-wrap noto-sans">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#B57A3F] transition-colors">ホーム</a>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <span class="text-[#33312D] font-medium">買取実績</span>
        </nav>
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full flex-1 flex items-center pt-10 lg:pt-0">
        <div class="grid grid-cols-1 lg:grid-cols-12 items-end gap-8 lg:gap-12">

            <div class="lg:col-span-3 text-center lg:text-center flex flex-col items-center lg:items-center">
                <div class="w-24 h-auto mb-3 sm:mb-4">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt=""
                        class="w-full h-auto object-contain mx-auto md:mx-0" />
                </div>
                <h1 class="text-[#33312D] text-[clamp(2rem,5vw,2.75rem)] font-bold tracking-wide leading-none">
                    買取実績
                </h1>
            </div>

            <div
                class="lg:col-span-9 text-[#615C56] font-medium noto-sans !font-medium text-[clamp(0.88rem,2.8vw,1.05rem)] leading-[2] tracking-wider space-y-2 max-w-[620px] mx-auto lg:mx-0 text-left pl-0 lg:pl-4">
                <p>一点一点丁寧に査定・買取させていただいた実績をご紹介いたします。</p>
                <p>お品物の背景にある想いまで、心を傾けた査定で買取します。</p>
            </div>

        </div>
    </div>
</section>

<!-- Achievements Archive Section  -->

<section class="relative bg-[#F1ECE0] py-24 pt-28 lg:pt-36 font-serif-jp overflow-hidden">

    <div class="absolute right-0 top-[3%] w-[45%] md:w-[25%] max-w-[320px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/diamond-top-pattern.png" alt=""
            class="w-full h-auto object-contain transform rotate-180" />
    </div>
    <div class="absolute left-0 bottom-[0%] w-[45%] md:w-[35%] max-w-[500px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/diamond-bottom-pattern.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10">

        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 pb-6 mb-10 font-sans">

            <div class="space-y-3">
                <span class="text-[#33312D] text-[13px] sm:text-[14px] font-bold tracking-wider block">カテゴリ選択</span>
                <div class="flex noto-sans flex-wrap gap-2.5">
                    <a href="<?php echo esc_url($archive_url_args(null)); ?>"
                        class="<?php echo esc_attr($selected_term === null ? $filter_active_class : $filter_inactive_class); ?>">すべて</a>
                    <?php foreach ($terms as $term) : ?>
                        <?php $term_active = $selected_term instanceof WP_Term && (int) $selected_term->term_id === (int) $term->term_id; ?>
                        <a href="<?php echo esc_url($archive_url_args($term->slug)); ?>"
                            class="<?php echo esc_attr($term_active ? $filter_active_class : $filter_inactive_class); ?>"><?php echo esc_html($term->name); ?></a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="space-y-3 w-full sm:w-[240px] lg:w-[260px] self-start lg:self-auto">
                <span
                    class="text-[#33312D] text-[13px] sm:text-[14px] font-bold tracking-wider block lg:text-left">表示順の切り替え</span>
                <div
                    class="relative bg-[#FFFCF5] border border-[#E3DCCE] text-[#615C56] noto-sans text-[14px] px-4 py-2.5 pr-10 shadow-xs cursor-pointer select-none group">
                    <select name="orderby" onchange="window.location=this.value"
                        class="block w-full tracking-wide bg-transparent border-0 outline-none appearance-none cursor-pointer text-[#615C56] noto-sans text-[14px]">
                        <option value="<?php echo esc_attr($sort_query_args('date')); ?>" <?php selected($orderby, 'date'); ?>>新着順</option>
                        <option value="<?php echo esc_attr($sort_query_args('price_high')); ?>" <?php selected($orderby, 'price_high'); ?>>価格高い順</option>
                        <option value="<?php echo esc_attr($sort_query_args('price_low')); ?>" <?php selected($orderby, 'price_low'); ?>>価格低い順</option>
                    </select>
                    <div class="absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none text-[#B57A3F]">
                        <svg class="w-4 h-4 transform group-hover:translate-y-0.5 transition-transform" fill="none"
                            stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mx-auto mb-14">

            <?php if ($query->have_posts()) : ?>
                <?php
                while ($query->have_posts()) :
                    $query->the_post();
                    $price         = esc_html(number_format((float) get_field('purchase_price')));
                    $desc          = esc_html(get_field('card_description'));
                    $post_terms    = get_the_terms(get_the_ID(), 'purchase-record-category');
                    $category_name = ($post_terms && !is_wp_error($post_terms)) ? esc_html($post_terms[0]->name) : '';
                    $thumb         = get_the_post_thumbnail_url(get_the_ID(), 'kuranomiya-card');
                    if (!$thumb) {
                        $thumb = get_template_directory_uri() . '/assets/img/placeholder-img.png';
                    }
                    $date = get_the_date('Y.m');
                    ?>
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="block hover:opacity-90 transition-opacity duration-200">
                        <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                        <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
                                class="w-full h-full object-cover" />
                            <?php if ($category_name) : ?>
                                <div
                                    class="absolute bottom-0 noto-sans left-0 bg-[#303E5F] text-white px-5 py-2 text-[16px] tracking-wider font-medium">
                                    <?php echo $category_name; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="p-6 sm:p-8 flex flex-col flex-grow">
                            <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-2">
                                <?php the_title(); ?>
                            </h3>
                            <div class="flex items-baseline text-[#33312D] mb-5">
                                <span
                                    class="text-[clamp(14px,1vw,16px)] font-medium mr-2 noto-sans text-[#615C56]">買取価格</span>
                                <span
                                    class="text-[clamp(32px,4vw,38px)] font-['EB_Garamond'] font-medium tracking-wide"><?php echo $price; ?></span>
                                <span class="text-[clamp(13px,0.9vw,15px)] noto-sans font-medium ml-0.5">円</span>
                            </div>
                            <div class="w-full h-[1px] bg-[#EAE2D5] mb-5"></div>
                            <?php if ($desc) : ?>
                                <p
                                    class="text-[#615C56] noto-sans text-[14px] leading-[1.75] noto-sans !font-medium tracking-wide flex-grow mb-6">
                                    <?php echo $desc; ?>
                                </p>
                            <?php endif; ?>
                            <span
                                class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block"><?php echo esc_html($date); ?></span>
                        </div>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p class="col-span-full text-center text-[#615C56] noto-sans text-[14px] leading-[1.75] tracking-wide py-12">
                    該当する買取実績がありません。
                </p>
            <?php endif; ?>

        </div>

        <?php kuranomiya_render_archive_pagination(
            $paged,
            (int) $query->max_num_pages,
            static fn(int $page): string => $archive_url_args($category ?: null, null, $page)
        ); ?>

    </div>
</section>



<?php get_footer(); ?>