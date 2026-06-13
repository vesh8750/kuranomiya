<?php
/**
 * Template Name: Column Archive
 * Template: Page 3
 */

get_header();

$hero_desc_1 = get_field('column_hero_desc_1', 'option');
$hero_desc_2 = get_field('column_hero_desc_2', 'option');

$orderby = isset($_GET['orderby']) ? sanitize_text_field(wp_unslash($_GET['orderby'])) : 'date';
$paged   = max(1, (int) get_query_var('column_pg'));

$category = get_query_var('col_category');
if (!is_string($category) || $category === '') {
    $category = isset($_GET['col_category'])
        ? sanitize_text_field(wp_unslash($_GET['col_category']))
        : '';
}
if ($category === '' && isset($_GET['category'])) {
    $category = sanitize_text_field(wp_unslash($_GET['category']));
}

$terms = get_terms(['taxonomy' => 'column-category', 'hide_empty' => false]);
if (is_wp_error($terms)) {
    $terms = [];
}

$selected_term = null;
if ($category !== '') {
    $selected_term = get_term_by('slug', $category, 'column-category');
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

$page_url = get_permalink(get_queried_object_id()) ?: home_url('/');

$archive_query_args = [
    'col_category' => $category ?: null,
    'orderby'      => $orderby !== 'date' ? $orderby : null,
];

$archive_url_args = static fn(?int $page = null): string => kuranomiya_build_page_template_url(
    $page_url,
    $archive_query_args,
    $page ?? 1,
    'column_pg'
);

$args = [
    'post_type'      => 'column',
    'posts_per_page' => 9,
    'paged'          => $paged,
    'orderby'        => 'date',
    'order'          => 'DESC',
];

if ($category) {
    $args['tax_query'] = [[
        'taxonomy' => 'column-category',
        'field'    => 'slug',
        'terms'    => $category,
    ]];
}

if ($orderby === 'popular') {
    $args['orderby']  = 'meta_value_num';
    $args['meta_key'] = '_column_view_count';
}

$query = new WP_Query($args);

$sort_date_url    = kuranomiya_build_page_template_url($page_url, [
    'orderby'      => 'date',
    'col_category' => $category ?: null,
]);
$sort_popular_url = kuranomiya_build_page_template_url($page_url, [
    'orderby'      => 'popular',
    'col_category' => $category ?: null,
]);
$all_category_url = kuranomiya_build_page_template_url($page_url, [
    'orderby' => $orderby !== 'date' ? $orderby : null,
]);

$sort_date_active_class    = 'px-5 py-2 bg-[#303E5F] noto-sans rounded-[24px] text-white text-[14px] font-medium transition-colors hover:bg-[#232e47]';
$sort_popular_active_class = $sort_date_active_class;
$sort_inactive_class       = 'px-5 py-2 bg-[#FFFCF5] noto-sans rounded-[24px] text-[#33312D] text-[14px] font-medium border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]';
$filter_active_class       = 'px-6 py-2 bg-[#B57A3F] noto-sans rounded-[24px] text-white text-[14px] font-medium transition-colors hover:bg-[#a06830]';
$filter_inactive_class     = 'px-5 py-2 bg-[#FFFCF5] noto-sans rounded-[24px] text-[#B57A3F] text-[14px] font-medium border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]';
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
        column
    </div>

    <div class="hidden md:block relative w-full max-w-[1400px] mx-auto px-5 sm:px-6 lg:px-8 pt-4 sm:pt-6 z-10 font-sans text-[12px] tracking-wider text-[#615C56]">
        <nav class="flex items-center space-x-2 flex-wrap noto-sans text-sm">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#B57A3F] transition-colors">ホーム</a>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <span class="text-[#33312D] font-medium">コラム</span>
        </nav>
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full flex-1 flex items-center pt-10 lg:pt-0">
        <div class="grid grid-cols-1 lg:grid-cols-12 items-end gap-8 lg:gap-8">

            <div class="lg:col-span-3 text-center lg:text-center flex flex-col items-center lg:items-center">
                <div class="w-24 h-auto mb-3 sm:mb-4">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt=""
                        class="w-full h-auto object-contain mx-auto md:mx-0" />
                </div>
                <h1 class="text-[#33312D] text-[clamp(2rem,5vw,2.75rem)] font-bold tracking-wide leading-none">
                    コラム
                </h1>
            </div>

            <div
                class="lg:col-span-9 text-[#615C56] font-medium noto-sans !font-medium text-[clamp(0.7rem,2.8vw,1.05rem)] leading-[2] tracking-wider space-y-2 max-w-[620px] mx-auto lg:mx-0 text-left pl-0 lg:pl-4">
                <p><?php echo esc_html($hero_desc_1); ?></p>
                <p><?php echo esc_html($hero_desc_2); ?></p>
            </div>

        </div>
    </div>
</section>

<!-- Column Archive Section  -->

<section class="relative bg-[#F1ECE0] py-24 pt-28 lg:pt-36  font-serif-jp overflow-hidden">

    <div class="absolute right-0 top-[3%] w-[45%] md:w-[25%] max-w-[320px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/diamond-top-pattern.png" alt=""
            class="w-full h-auto object-contain transform rotate-180" />
    </div>
    <div class="absolute left-0 bottom-0 w-[45%] md:w-[35%] max-w-[500px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/diamond-bottom-pattern.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10">

        <div class="pb-6 mb-10 font-sans space-y-6">

            <div class="space-y-3 border-b border-[#33312D]/10 pb-7 flex items-center gap-8 md:gap-10">
                <span class="text-[#33312D] text-[13px] sm:text-[14px] font-bold tracking-wider block mb-0">新着 /
                    人気</span>
                <div class="flex flex-wrap gap-2.5 !mt-0">
                    <a href="<?php echo esc_url($sort_date_url); ?>"
                        class="<?php echo esc_attr($orderby === 'date' ? $sort_date_active_class : $sort_inactive_class); ?>">新着記事</a>
                    <a href="<?php echo esc_url($sort_popular_url); ?>"
                        class="<?php echo esc_attr($orderby === 'popular' ? $sort_popular_active_class : $sort_inactive_class); ?>">人気の記事</a>
                </div>
            </div>

            <div class="space-y-3 flex flex-col md:flex-row itmes-start md:items-center gap-6 md:gap-10">
                <span
                    class="text-[#33312D] text-[13px] sm:text-[14px] font-bold tracking-wider block mb-0">カテゴリ選択</span>
                <div class="flex flex-wrap gap-2.5 !mt-0">
                    <a href="<?php echo esc_url($all_category_url); ?>"
                        class="<?php echo esc_attr($selected_term === null ? $filter_active_class : $filter_inactive_class); ?>">すべて</a>
                    <?php foreach ($terms as $term) : ?>
                        <?php
                        $term_url    = kuranomiya_build_page_template_url($page_url, [
                            'col_category' => $term->slug,
                            'orderby'      => $orderby !== 'date' ? $orderby : null,
                        ]);
                        $term_active = $selected_term instanceof WP_Term && (int) $selected_term->term_id === (int) $term->term_id;
                        ?>
                        <a href="<?php echo esc_url($term_url); ?>"
                            class="<?php echo esc_attr($term_active ? $filter_active_class : $filter_inactive_class); ?>"><?php echo esc_html($term->name); ?></a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mx-auto mb-14">

            <?php if ($query->have_posts()) : ?>
                <?php
                while ($query->have_posts()) :
                    $query->the_post();
                    $thumb = get_the_post_thumbnail_url(get_the_ID(), 'kuranomiya-card')
                        ?: get_template_directory_uri() . '/assets/img/placeholder-img.png';
                    $post_terms = get_the_terms(get_the_ID(), 'column-category');
                    $cat_name   = ($post_terms && !is_wp_error($post_terms)) ? esc_html($post_terms[0]->name) : '';
                    $date       = get_the_date('Y.m.d');
                    $excerpt    = get_the_excerpt();
                    ?>
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="block">
                        <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                            <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
                                    class="w-full h-full object-cover" />
                                <?php if ($cat_name) : ?>
                                    <div
                                        class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-1.5 text-[14px] tracking-wider font-medium">
                                        <?php echo $cat_name; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="p-6 sm:p-8 flex flex-col flex-grow">
                                <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-4 ">
                                    <?php the_title(); ?>
                                </h3>
                                <div class="w-full h-[1px] bg-[#EAE2D5] mb-4"></div>
                                <p
                                    class="text-[#615C56] text-[14px] leading-[1.75] noto-sans !font-normal tracking-wide flex-grow mb-5">
                                    <?php echo esc_html($excerpt); ?>
                                </p>
                                <span
                                    class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block"><?php echo esc_html($date); ?></span>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p class="text-center text-[#615C56] noto-sans">該当するコラムがありません。</p>
            <?php endif; ?>

        </div>

        <?php kuranomiya_render_archive_pagination(
            $paged,
            (int) $query->max_num_pages,
            static fn(int $page): string => $archive_url_args($page)
        ); ?>

    </div>
</section>



<?php get_footer(); ?>