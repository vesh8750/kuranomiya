<?php

/**
 * Single Purchase Record
 * Page 2 Detail
 */

get_header();

$purchase_records_page = get_page_by_path('purchase-records');
$purchase_records_url  = $purchase_records_page ? get_permalink($purchase_records_page) : '';

while (have_posts()) :
    the_post();

    $main_image_url   = get_the_post_thumbnail_url(get_the_ID(), 'kuranomiya-card-wide');
    $category_terms   = get_the_terms(get_the_ID(), 'purchase-record-category');
    $category_term    = ($category_terms && !is_wp_error($category_terms)) ? $category_terms[0] : null;
    $gallery          = get_field('product_gallery');
    $customer_voice   = get_field('customer_voice');
    $owner_comment    = get_field('owner_comment');
    $related_term_ids = ($category_terms && !is_wp_error($category_terms)) ? wp_list_pluck($category_terms, 'term_id') : [];

    if (!$main_image_url && $gallery) {
        $first_image = $gallery[0];
        $main_image_url = !empty($first_image['sizes']['kuranomiya-card-wide'])
            ? $first_image['sizes']['kuranomiya-card-wide']
            : $first_image['url'];
    }

    $related = new WP_Query([
        'post_type'      => 'purchase-record',
        'posts_per_page' => 3,
        'post__not_in'   => [get_the_ID()],
        'tax_query'      => [[
            'taxonomy' => 'purchase-record-category',
            'field'    => 'term_id',
            'terms'    => $related_term_ids,
        ]],
    ]);
?>

<div class="w-full bg-[#FFFCF5] pt-4 sm:pt-6 font-sans text-[12px] tracking-wider text-[#615C56]">
    <div class="max-w-[1400px] mx-auto px-5 sm:px-6 lg:px-8">
        <nav class="flex items-center space-x-2 flex-wrap text-sm">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#B57A3F] transition-colors">ホーム</a>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <?php if ($purchase_records_url) : ?>
                <a href="<?php echo esc_url($purchase_records_url); ?>" class="hover:text-[#B57A3F] transition-colors">買取実績</a>
            <?php else : ?>
                <span class="text-[#33312D] font-medium">買取実績</span>
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
        Achievements
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 items-end gap-8 lg:gap-12" data-animate="fade-up">

            <div class="lg:col-span-3 text-center lg:text-center flex flex-col items-start md:items-center lg:items-center">
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

<!-- Item Detail Section  -->

<section class="relative bg-[#F1ECE0] py-16 md:py-24 font-serif-jp overflow-hidden">

    <div class="absolute right-0 top-[35%] w-[45%] md:w-[25%] max-w-[320px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/card-top-pattern.png" alt="" class="w-full h-auto object-contain transform rotate-90" />
    </div>

    <div class="relative max-w-[1050px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full space-y-12">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-8 items-start max-w-[1000px] mx-auto pb-12">

            <div class="lg:col-span-6 space-y-4">
                <div class="w-full aspect-[5/3] min-h-[329px] bg-gray-100 overflow-hidden shadow-xs" data-animate="image-reveal">
                    <?php if ($main_image_url) : ?>
                        <img id="product-gallery-main" src="<?php echo esc_url($main_image_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
                            class="w-full h-full object-cover" />
                    <?php endif; ?>
                </div>

                <?php if ($gallery) : ?>
                    <div id="product-gallery-thumbs" class="grid grid-cols-5 gap-2.5">
                        <?php foreach ($gallery as $index => $image) : ?>
                            <?php
                            $thumb_url = !empty($image['sizes']['thumbnail']) ? $image['sizes']['thumbnail'] : $image['url'];
                            $full_url  = !empty($image['sizes']['kuranomiya-card-wide']) ? $image['sizes']['kuranomiya-card-wide'] : $image['url'];
                            $thumb_alt = !empty($image['alt']) ? $image['alt'] : get_the_title();
                            $thumb_class = $full_url === $main_image_url
                                ? 'product-gallery-thumb is-active aspect-square bg-gray-100 cursor-pointer border border-[#B57A3F] p-0.5 overflow-hidden'
                                : 'product-gallery-thumb aspect-square bg-gray-100 cursor-pointer border border-[#E3DCCE]/60 p-0.5 overflow-hidden hover:bg-[#F6F2E9] transition-colors';
                            ?>
                            <button type="button" class="<?php echo esc_attr($thumb_class); ?>"
                                data-full-src="<?php echo esc_url($full_url); ?>"
                                data-full-alt="<?php echo esc_attr($thumb_alt); ?>"
                                aria-label="<?php echo esc_attr($thumb_alt); ?>">
                                <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr($thumb_alt); ?>" class="w-full h-full object-cover pointer-events-none" />
                            </button>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="lg:col-span-6 pt-2 space-y-5" data-animate="fade-up">

                <?php if ($category_term || get_field('brand_name')) : ?>
                    <div
                        class="inline-block bg-[#303E5F] noto-sans text-white text-[clamp(12px,1vw,16px)] px-4 py-1.5 font-sans font-medium tracking-widest select-none">
                        <?php if ($category_term) : ?>
                            <?php echo esc_html($category_term->name); ?>
                        <?php endif; ?>
                        <?php if ($category_term && get_field('brand_name')) : ?>
                            /
                        <?php endif; ?>
                        <?php if (get_field('brand_name')) : ?>
                            <?php echo esc_html(get_field('brand_name')); ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <h1
                    class="text-[#33312D] noto-serif text-[clamp(1.5rem,4vw,1.7rem)] font-bold tracking-wide leading-tight">
                    <?php the_title(); ?>
                </h1>

                <div class="flex items-baseline text-[#33312D] border-b border-[#33312D]/10 pb-4">
                    <span class="text-[14px] noto-sans font-medium mr-4 font-sans text-[#615C56]">買取価格</span>
                    <span
                        class="text-[clamp(1.75rem,3.5vw,2.25rem)] font-['EB_Garamond'] font-medium text-[#B57A3F] tracking-wide leading-none"><?php echo esc_html(number_format((float) get_field('purchase_price'))); ?></span>
                    <span class="text-[15px] font-bold text-[#B57A3F] ml-0.5">円</span>
                </div>

                <dl class="text-[14px] font-sans text-[#33312D] space-y-4 pt-2 !font-normal tracking-wide">
                    <div class="flex items-center">
                        <dt class="w-[80px] noto-sans text-[#615C56] font-medium flex-shrink-0">買取日</dt>
                        <dd class="noto-sans text-[#33312D]"><?php echo esc_html(get_the_date('Y.m')); ?></dd>
                    </div>
                    <?php if ($category_term) : ?>
                        <div class="flex items-center">
                            <dt class="w-[80px] noto-sans text-[#615C56] font-medium flex-shrink-0">カテゴリ</dt>
                            <dd class="noto-sans text-[#33312D]">
                                <a href="<?php echo esc_url(get_term_link($category_term)); ?>">
                                    <?php echo esc_html($category_term->name); ?>
                                </a>
                            </dd>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('item_condition')) : ?>
                        <div class="flex items-center">
                            <dt class="w-[80px] noto-sans text-[#615C56] font-medium flex-shrink-0">状態</dt>
                            <dd class="noto-sans text-[#33312D]"><?php echo esc_html(get_field('item_condition')); ?></dd>
                        </div>
                    <?php endif; ?>
                </dl>

                <div class="pt-4">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>"
                        class="bg-[#B57A3F] noto-sans text-white flex items-center justify-center space-x-2 px-6 py-4 shadow-xs hover:bg-[#a06830] transition-colors w-full sm:w-[280px] font-sans font-medium rounded-none tracking-wide">
                        <span>似たお品の査定をご相談</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>

        <?php if ($customer_voice) : ?>
            <div
                class="bg-[#303E5F] text-white p-6 sm:p-10 relative overflow-hidden max-w-[1000px] mx-auto border-t-[3px] border-[#B57A3F] !py-[21px] !pl-[60px]"
                data-animate="fade-up">

                <span
                    class="absolute left-6 top-6 text-[#B57A3F] font-serif text-[4rem] leading-none select-none pointer-events-none">“</span>

                <div class="relative z-10 space-y-6">
                    <div class="flex items-center space-x-3 text-[#B57A3F]">
                        <h2 class="text-[clamp(1.15rem,2.5vw,1.35rem)] font-bold tracking-wide">お客様の声</h2>
                    </div>

                    <div
                        class="text-white text-[14px] sm:text-[14.5px] leading-[1.9] tracking-wider noto-sans !font-normal space-y-2">
                        <?php echo wpautop(esc_html($customer_voice)); ?>
                    </div>
                </div>

                <span
                    class="absolute right-6 bottom-[-13px] text-[#B57A3F] font-serif text-[4rem] leading-none select-none pointer-events-none">”</span>
            </div>
        <?php endif; ?>

        <?php if ($owner_comment) : ?>
            <div
                class="bg-[#FFFCF5] p-6 sm:p-5 shadow-xs border-t-2 border-[#303E5F] max-w-[1000px] mx-auto space-y-6 !py-[21px]"
                data-animate="fade-up">

                <div class="flex items-center space-x-4 pl-0 sm:pl-4">
                    <div
                        class="w-16 h-16 rounded-full overflow-hidden bg-gray-100 flex-shrink-0 border border-[#E3DCCE]">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/small-man.png" alt="店主アバター" class="w-full h-full object-cover" />
                    </div>
                    <h3 class="text-[#B57A3F] text-[clamp(1.2rem,2.5vw,1.4rem)] font-bold tracking-wide">
                        店主より
                    </h3>
                </div>

                <div
                    class="text-[#615C56] noto-sans text-[14px] sm:text-[14.5px] leading-[1.9] tracking-wider space-y-1 pl-0 sm:pl-4">
                    <?php echo wpautop(esc_html($owner_comment)); ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>

<!-- Ornament Cards Section  -->

<section class="relative bg-[#FFFCF5] py-16 md:py-28 font-serif-jp overflow-hidden">

    <div class="absolute left-[-10%] lg:left-0 top-[1%] w-[55%] md:w-[35%] max-w-[500px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ornament-card-pattern-2.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[1240px] mx-auto px-0 sm:px-6 lg:px-8 z-10">

        <div class="text-center px-5 sm:px-0 mb-12 md:mb-16" data-animate="fade-up">
            <div class="w-30 h-auto mx-auto mb-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
            </div>
            <h2 class="text-[#33312D] text-[clamp(1.5rem,4vw,2.25rem)] font-bold tracking-wide">
                関連する買取実績
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
                    $rel_terms = get_the_terms(get_the_ID(), 'purchase-record-category');
                    $rel_category = ($rel_terms && !is_wp_error($rel_terms)) ? $rel_terms[0] : null;
                    $rel_image = get_the_post_thumbnail_url(get_the_ID(), 'kuranomiya-card-wide');
                    $card_margin = $related_index < $related->post_count ? ' mr-4 lg:mr-0' : '';
                    ?>
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="block hover:opacity-90 transition-opacity duration-200">
                        <div
                            class="related-card w-[85vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#F1ECE0] shadow-sm flex flex-col<?php echo esc_attr($card_margin); ?>">
                        <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                            <?php if ($rel_image) : ?>
                                <img src="<?php echo esc_url($rel_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover" />
                            <?php endif; ?>
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
                            <div class="flex items-baseline text-[#33312D] mb-4">
                                <span class="text-[14px] font-medium mr-2 noto-sans text-[#615C56]">買取価格</span>
                                <span
                                    class="text-[clamp(1.5rem,3vw,1.85rem)] font-['EB_Garamond'] font-medium tracking-wide"><?php echo esc_html(number_format((float) get_field('purchase_price'))); ?></span>
                                <span class="text-[15px] font-bold ml-0.5">円</span>
                            </div>
                            <span
                                class="text-[#B57A3F] font-sans text-[14px] font-medium tracking-wider block"><?php echo esc_html(get_the_date('Y.m')); ?></span>
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

        <p
            class="text-center text-[#615C56] font-sans text-[13px] sm:text-[18px] leading-relaxed tracking-wider px-5 mt-10">
            類似のお品物の売却をご検討の方は、お気軽にご相談ください。
        </p>

    </div>
</section>

<?php
    wp_reset_postdata();
endwhile;

get_footer();
?>