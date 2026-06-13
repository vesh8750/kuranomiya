<?php

/**
 * Single Column
 * Page 3 Detail
 */

get_header();

$hero_desc_1 = get_field('column_hero_desc_1', 'option');
$hero_desc_2 = get_field('column_hero_desc_2', 'option');
$owner_name  = get_field('owner_name', 'option');
$owner_photo = get_field('owner_photo', 'option');
$owner_title = get_field('owner_title', 'option');
$owner_bio   = get_field('owner_bio', 'option');

$column_page = get_page_by_path('column');
$column_url  = $column_page ? get_permalink($column_page) : '';

while (have_posts()) :
    the_post();

    $lead      = get_field('column_lead_text');
    $mid_image = get_field('column_mid_image');
    $featured  = get_the_post_thumbnail_url(null, 'full');

    $terms    = get_the_terms(get_the_ID(), 'column-category');
    $term_ids = ($terms && !is_wp_error($terms)) ? wp_list_pluck($terms, 'term_id') : [];

    $related = new WP_Query([
        'post_type'      => 'column',
        'posts_per_page' => 3,
        'post__not_in'   => [get_the_ID()],
        'orderby'        => 'rand',
        'tax_query'      => $term_ids ? [[
            'taxonomy' => 'column-category',
            'field'    => 'term_id',
            'terms'    => $term_ids,
        ]] : [],
    ]);
?>

<div class="w-full bg-[#FFFCF5] pt-4 sm:pt-6 font-sans text-[12px] tracking-wider text-[#615C56]">
    <div class="max-w-[1400px] mx-auto px-5 sm:px-6 lg:px-8">
        <nav class="flex items-center space-x-2 flex-wrap text-sm">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#B57A3F] transition-colors">ホーム</a>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <?php if ($column_url) : ?>
                <a href="<?php echo esc_url($column_url); ?>" class="hover:text-[#B57A3F] transition-colors">コラム</a>
            <?php else : ?>
                <span class="text-[#33312D] font-medium">コラム</span>
            <?php endif; ?>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <span class="text-[#33312D] font-medium"><?php the_title(); ?></span>
        </nav>
    </div>
</div>

<!-- Hero Section  -->

<section
    class="relative bg-[#FFFCF5] pt-10 pb-20 sm:pb-28 lg:py-24 font-serif-jp overflow-x-clip min-h-[360px] flex items-center">

    <div
        class="absolute hidden md:flex right-[-10%] sm:right-[-5%] lg:right-10 inset-y-0 w-[60%] sm:w-[45%] lg:w-[32%] max-w-[450px] pointer-events-none z-0 items-end">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/product-page-right-bg.png" alt="" class="w-full h-auto max-h-full object-contain" />
    </div>

    <div
        class="absolute bottom-[-1%] sm:bottom-[-4%] left-[-0%] font-['EB_Garamond'] text-[clamp(3rem,13vw,6rem)] uppercase tracking-[0.05em] text-[#F1ECE0] leading-none font-medium select-none pointer-events-none whitespace-nowrap z-0">
        column
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 items-end gap-8 lg:gap-12" data-animate="fade-up">

            <div class="lg:col-span-3 text-center lg:text-center flex flex-col items-start md:items-center lg:items-center">
                <div class="w-24 h-auto mb-3 sm:mb-4">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt=""
                        class="w-full h-auto object-contain mx-auto md:mx-0" />
                </div>
                <h1 class="text-[#33312D] text-[clamp(2rem,5vw,2.75rem)] font-bold tracking-wide leading-none">
                    コラム
                </h1>
            </div>

            <div
                class="lg:col-span-9 text-[#615C56] font-medium noto-sans !font-medium text-[clamp(0.88rem,2.8vw,1.05rem)] leading-[2] tracking-wider space-y-2 max-w-[620px] mx-auto lg:mx-0 text-left pl-0 lg:pl-4">
                <p><?php echo esc_html($hero_desc_1); ?></p>
                <p><?php echo esc_html($hero_desc_2); ?></p>
            </div>

        </div>
    </div>
</section>

<!-- Column Detail Header  -->

<section class="relative bg-[#F1ECE0] py-16 md:py-24 font-serif-jp overflow-hidden">

    <div class="absolute left-0 top-0 w-[45%] md:w-[25%] max-w-[320px] opacity-20 pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/traditional-grid-pattern.png" alt="" class="w-full h-auto object-contain" />
    </div>
    <div class="absolute right-0 bottom-0 w-[45%] md:w-[25%] max-w-[320px] opacity-20 pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/traditional-grid-pattern.png" alt=""
            class="w-full h-auto object-contain transform rotate-180" />
    </div>

    <div class="relative max-w-[1000px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full space-y-8">

        <h1 class="text-[#33312D] text-[clamp(1.35rem,3.5vw,2rem)] font-bold tracking-wide leading-[1.6] text-left" data-animate="fade-up">
            <?php the_title(); ?>
        </h1>

        <div
            class="bg-[#303E5F] text-white px-4 py-3 sm:px-6 sm:py-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-t-[4px] border-[#B57A3F] shadow-xs"
            data-animate="fade-up">

            <div class="flex items-center space-x-3.5">
                <div
                    class="w-10 h-10 sm:w-11 sm:h-11 rounded-full overflow-hidden bg-white/10 border border-white/20 flex-shrink-0">
                    <?php if ($owner_photo && !empty($owner_photo['url'])) : ?>
                        <img src="<?php echo esc_url($owner_photo['url']); ?>" alt="<?php echo esc_attr($owner_photo['alt'] ?? '店主'); ?>" class="w-full h-full object-contain" />
                    <?php else : ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/small-man-2.png" alt="店主" class="w-full h-full object-contain" />
                    <?php endif; ?>
                </div>
                <div class="font-sans text-[13px] sm:text-[14px] tracking-wide">
                    <span class="text-[#B57A3F] font-medium mr-1.5">店主</span>
                    <?php if ($owner_name) : ?>
                        <span class="text-white font-semibold"><?php echo esc_html($owner_name); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div
                class="flex items-center space-x-4 sm:space-x-6 font-sans text-[12px] sm:text-[13px] text-white/80 !font-normal tracking-wide">
                <div class="flex items-center">
                    <span class="text-[#B57A3F] font-medium mr-1.5">公開日</span>
                    <span class="noto-sans text-white"><?php echo esc_html(get_the_date('Y.m.d')); ?></span>
                </div>
                <div class="w-[1px] h-3 bg-white/20"></div>
                <div class="flex items-center">
                    <span class="text-[#B57A3F] font-medium mr-1.5">更新日</span>
                    <span class="noto-sans text-white"><?php echo esc_html(get_the_modified_date('Y.m.d')); ?></span>
                </div>
            </div>

        </div>

        <div
            class="w-full aspect-[16/10] bg-[#E3DCCE]/40 border border-[#E3DCCE]/30 flex items-center justify-center p-0 shadow-xs overflow-hidden group"
            data-animate="image-reveal">
            <?php if ($featured) : ?>
                <img src="<?php echo esc_url($featured); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-102"
                    style="object-fit: cover; max-width: 100%;" />
            <?php endif; ?>
        </div>

    </div>
</section>

<!-- Editorial Section  -->

<section class="relative bg-[#FFFCF5]  py-16 md:py-24 font-serif-jp overflow-hidden">

    <div class="absolute left-0 bottom-0 w-[45%] md:w-[25%] max-w-[320px] opacity-20 pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/traditional-grid-pattern.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[850px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full space-y-10 sm:space-y-12">

        <div
            class="text-[#33312D] text-[clamp(15px,2vw,17px)] leading-[1.85] tracking-wider font-sans !font-normal"
            data-animate="fade-up">
            <?php if ($lead) : ?>
                <?php echo wpautop(esc_html($lead)); ?>
            <?php endif; ?>
        </div>

        <div
            class="text-[#615C56] font-medium noto-sans !font-normal text-[14px] sm:text-[15px] leading-[1.95] tracking-wider space-y-4 pt-4"
            data-animate="fade-up">
            <?php the_content(); ?>
        </div>

        <?php if ($mid_image) : ?>
        <div
            class="w-full aspect-[16/10] bg-[#E3DCCE]/40 border border-[#E3DCCE]/30 flex items-center justify-center p-0 shadow-xs overflow-hidden group"
            data-animate="image-reveal">
            <img src="<?php echo esc_url($mid_image['url']); ?>"
                alt="<?php echo esc_attr($mid_image['alt']); ?>"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-102"
                style="object-fit: cover; max-width: 100%;" />
        </div>
        <?php endif; ?>

        <div class="bg-[#F1ECE0] p-6 sm:p-8 shadow-xs border-t border-[#303E5F]/20 space-y-5 mt-12" data-animate="fade-up">
            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
                <div class="flex items-center space-x-3.5">
                    <div
                        class="w-12 h-12 rounded-full overflow-hidden bg-white/10 border border-[#E3DCCE] flex-shrink-0">
                        <?php if ($owner_photo && !empty($owner_photo['url'])) : ?>
                            <img src="<?php echo esc_url($owner_photo['url']); ?>" alt="<?php echo esc_attr($owner_photo['alt'] ?? '店主'); ?>" class="w-full h-full object-contain" />
                        <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/small-man.png" alt="店主" class="w-full h-full object-cover" />
                        <?php endif; ?>
                    </div>
                    <?php if ($owner_name) : ?>
                    <h4 class="font-sans text-[15px] tracking-wide text-[#B57A3F] font-bold">
                        <span class="text-[#B57A3F] font-medium mr-1.5">店主</span><?php echo esc_html($owner_name); ?>
                    </h4>
                    <?php endif; ?>
                </div>
                <?php if ($owner_title) : ?>
                <div class="hidden sm:block w-[1px] h-3 bg-[#33312D]/20"></div>
                <span class="text-[#615C56] text-[13px] sm:text-[14px] font-sans font-bold tracking-wider">
                    <?php echo esc_html($owner_title); ?>
                </span>
                <?php endif; ?>
            </div>

            <?php if ($owner_bio) : ?>
            <div
                class="text-[#615C56] text-[14px] sm:text-[14.5px] leading-[1.85] tracking-wider font-sans !font-normal space-y-3 pl-0 sm:pl-0">
                <?php echo wpautop(esc_html($owner_bio)); ?>
            </div>
            <?php endif; ?>
        </div>

    </div>
</section>

<!-- Ornament Cards Section  -->

<section class="relative bg-[#F1ECE0] py-16 md:py-28 font-serif-jp overflow-hidden">

    <div class="absolute left-[-10%] lg:left-0 top-[10%] w-[55%] md:w-[35%] max-w-[500px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ornament-card-element.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[1240px] mx-auto px-0 sm:px-6 lg:px-8 z-10">

        <div class="text-center px-5 sm:px-0 mb-12 md:mb-16" data-animate="fade-up">
            <div class="w-30 h-auto mx-auto mb-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
            </div>
            <h2 class="text-[#33312D] text-[clamp(1.5rem,4vw,2.25rem)] font-bold tracking-wide">
                あわせて読みたい<br class="hidden md:block">コラム
            </h2>
        </div>

        <div class="relative px-5 sm:px-0 mb-12" data-animate="fade-up">

            <button id="related-prev" type="button"
                class="absolute left-2 top-[30%] -translate-y-1/2 z-20 lg:hidden bg-[#B57A3F]/80 text-white w-9 h-9 flex items-center justify-center shadow-md focus:outline-none"
                aria-label="Previous Achievement">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button id="related-next" type="button"
                class="absolute right-2 top-[30%] -translate-y-1/2 z-20 lg:hidden bg-[#B57A3F]/80 text-white w-9 h-9 flex items-center justify-center shadow-md focus:outline-none"
                aria-label="Next Achievement">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <div id="related-track"
                class="flex overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar lg:grid lg:grid-cols-3 gap-6 xl:gap-8 pb-6 lg:pb-0">

                <?php
                $related_index = 0;
                while ($related->have_posts()) :
                    $related->the_post();
                    $related_index++;
                    $rel_terms    = get_the_terms(get_the_ID(), 'column-category');
                    $rel_category = ($rel_terms && !is_wp_error($rel_terms)) ? $rel_terms[0] : null;
                    $rel_thumb    = get_the_post_thumbnail_url(get_the_ID(), 'kuranomiya-card')
                        ?: get_template_directory_uri() . '/assets/img/placeholder-img.png';
                    $card_margin  = $related_index < $related->post_count ? ' mr-4 lg:mr-0' : '';
                    ?>
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="block">
                        <div
                            class="related-card w-[85vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#FFFCF5] shadow-sm flex flex-col<?php echo esc_attr($card_margin); ?>">
                            <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                                <img src="<?php echo esc_url($rel_thumb); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
                                    class="w-full h-full object-cover" />
                                <?php if ($rel_category) : ?>
                                    <div
                                        class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-2 text-[14px] tracking-wider font-medium">
                                        <?php echo esc_html($rel_category->name); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="p-6 sm:p-8 flex flex-col flex-grow">
                                <h3
                                    class="text-[#33312D] text-[1.2rem] font-bold tracking-wide leading-snug mb-4 min-h-[1.5em]">
                                    <?php the_title(); ?>
                                </h3>
                                <span
                                    class="text-[#B57A3F] font-sans text-[14px] font-medium tracking-wider block"><?php echo esc_html(get_the_date('Y.m.d')); ?></span>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>

            </div>

            <?php if ($related->post_count > 0) : ?>
            <div id="related-dots" class="flex items-center justify-center gap-3 mt-6 lg:hidden">
                <?php for ($i = 0; $i < $related->post_count; $i++) : ?>
                    <span class="w-2.5 h-2.5 <?php echo $i === 0 ? 'bg-[#B57A3F]' : 'bg-[#B57A3F]/30'; ?> rounded-full transition-all duration-300"></span>
                <?php endfor; ?>
            </div>
            <?php endif; ?>

        </div>

    </div>
</section>

<?php
    wp_reset_postdata();
endwhile;

get_footer();
?>