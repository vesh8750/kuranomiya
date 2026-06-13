<?php

/**
 * Template Name: Item Buy
 * Template: Page 1
 * Japanese name : 買取品目
 */

get_header();

$item_purchase_related_titles = [
    '商品名が入ります',
    '金属アクセサリー 一式',
    '金歯・銀歯',
];
$item_purchase_related_ids = [];
foreach ($item_purchase_related_titles as $item_purchase_title) {
    $item_purchase_post = get_page_by_title($item_purchase_title, OBJECT, 'purchase-record');
    if ($item_purchase_post instanceof WP_Post) {
        $item_purchase_related_ids[] = (int) $item_purchase_post->ID;
    }
}

if ($item_purchase_related_ids) {
    $item_purchase_related_query = new WP_Query([
        'post_type'           => 'purchase-record',
        'posts_per_page'      => 3,
        'post__in'            => $item_purchase_related_ids,
        'orderby'             => 'post__in',
        'ignore_sticky_posts' => true,
        'no_found_rows'       => true,
    ]);
} else {
    $item_purchase_related_query = new WP_Query([
        'post_type'      => 'purchase-record',
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'tax_query'      => [[
            'taxonomy' => 'purchase-record-category',
            'field'    => 'name',
            'terms'    => ['プラチナ', '金', '金・銀', '貴金属'],
            'operator' => 'IN',
        ]],
        'no_found_rows'  => true,
    ]);
}
?>

<!-- Hero Section  -->

<section
    class="greeting-hero relative min-h-[85vh] md:min-h-[75vh] lg:min-h-[80vh] flex flex-col items-stretch md:items-center bg-cover bg-no-repeat bg-[position:center_bottom] md:bg-right-center overflow-hidden bg-[#FFFCF5]"
    style="--bg-mobile: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/hero-gold-mobile.png'); --bg-desktop: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/hero-gold.png');">

    <div
        class="absolute inset-0 bg-gradient-to-b from-[#FFFCF5] via-[#FFFCF5]/90 to-transparent md:hidden pointer-events-none">
    </div>
    <div
        class="hidden md:block absolute  pointer-events-none">
    </div>

    <div class="hidden md:block relative w-full max-w-[1400px] mx-auto px-5 sm:px-6 lg:px-8 pt-4 sm:pt-6 z-10 font-sans text-[12px] tracking-wider text-[#615C56]">
        <nav class="flex items-center space-x-2 flex-wrap noto-sans">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#B57A3F] transition-colors">ホーム</a>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <a href="#" class="hover:text-[#B57A3F] transition-colors">買取品目</a>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <span class="font-medium">金・プラチナ・銀の買取</span>
        </nav>
    </div>

    <div class="relative w-full max-w-[1400px] mx-auto px-5 sm:px-6 lg:px-8 pt-8 pb-56 md:py-20 z-10 flex-1 flex items-stretch md:items-center">
        <div class="max-w-[640px] text-center md:text-left flex flex-col items-center md:items-center">

            <div class="w-24 h-auto mb-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain mx-auto md:mx-0" />
            </div>

            <h1
                class="font-serif-jp text-[clamp(1.75rem,5.5vw,3rem)] text-[#33312D] font-bold leading-tight tracking-wide mb-3">
                金・プラチナ・銀の買取
            </h1>

            <p
                class="font-['EB_Garamond'] text-[#B57A3F] text-[clamp(14px,2.2vw,18px)] uppercase tracking-[0.15em] font-medium mb-6">
                Gold / Platinum / Silver
            </p>

            <div
                class="bg-[#B57A3F] text-white font-serif-jp text-[clamp(14px,2vw,24px)] font-semibold tracking-widest px-6 py-1.5 mb-8 rounded-none shadow-xs select-none">
                買取品目
            </div>

            <div
                class="text-[#615C56] text-center font-medium noto-sans !font-medium text-[clamp(0.85rem,3vw,0.95rem)] leading-[2] tracking-wide space-y-2">
                <p>ご自宅に眠る金・プラチナ・銀製品を丁寧に査定。</p>
                <p>壊れたアクセサリーや片方だけの品なども買取いたします。</p>
            </div>

        </div>
    </div>
</section>

<!-- Card Section  -->

<?php $rates = kuranomiya_get_metal_rates(); ?>

<section class="relative bg-[#F1ECE0] py-16 md:py-28 font-serif-jp overflow-hidden">

    <div class="absolute right-0 top-0 w-[45%] md:w-[25%] max-w-[320px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/card-top-pattern.png" alt="" class="w-full h-auto object-contain transform rotate-180" />
    </div>
    <div class="absolute left-0 bottom-0 w-[45%] md:w-[25%] max-w-[320px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/card-bottom-pattern.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10">

        <div class="text-center mb-12 md:mb-16">
            <div class="w-30 h-auto mx-auto mb-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
            </div>
            <span
                class="font-['EB_Garamond'] text-[#B57A3F] text-[20px] uppercase block mb-2 tracking-[0.1em]">Items</span>
            <h2 class="text-[#33312D] text-[clamp(1.75rem,4vw,2.25rem)] font-bold tracking-wide">
                取扱品目
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 max-w-[1140px] mx-auto">

            <div
                class="bg-[#FFFCF5] p-6 sm:p-7 shadow-xs border-t-[4px] border-[#B57A3F] flex flex-col justify-between min-h-[260px]">
                <div class="flex justify-between items-start gap-4 mb-6">
                    <div class="space-y-2">
                        <h3 class="text-[#33312D] text-[1.2rem] font-bold tracking-wide">
                            金 <span class="text-[14px] font-sans text-[#615C56] font-normal ml-1">（K24）</span>
                        </h3>
                        <p class="text-[#33312D] text-[1.65rem] font-bold tracking-tight leading-none pt-2">
                            <?php if ($rates) : ?>
                                <?php echo esc_html(number_format($rates['gold'])); ?><span class="text-[15px] font-bold ml-0.5">円</span>
                            <?php else : ?>
                                ---<span class="text-[15px] font-bold ml-0.5">円</span>
                            <?php endif; ?>
                        </p>
                        <span class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wide block pt-1">
                            <?php if ($rates) : ?>
                                <?php echo esc_html(wp_date('Y年n月j日', strtotime($rates['updated_at'])) . '時点'); ?>
                            <?php else : ?>
                                取得中
                            <?php endif; ?>
                        </span>
                    </div>
                    <div
                        class="w-[110px] sm:w-[130px] aspect-square p-0 flex items-center justify-center flex-shrink-0">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/card-gold-1.png" alt="金" class="w-full h-full object-contain" />
                    </div>
                </div>
                <?php // TODO: make editable via ACF if client requests. ?>
                <p
                    class="text-[#615C56] text-[14px] sm:text-[14.5px] leading-[1.75] noto-sans !font-medium tracking-wide">
                    K24からK9まで、金のアクセサリーや装飾品を幅広くお取り扱いしています。壊れたものや片方だけのピアスなども、一つひとつ丁寧に査定いたします。
                </p>
            </div>

            <div
                class="bg-[#FFFCF5] p-6 sm:p-7 shadow-xs border-t-[4px] border-[#B57A3F] flex flex-col justify-between min-h-[260px]">
                <div class="flex justify-between items-start gap-4 mb-6">
                    <div class="space-y-2">
                        <h3 class="text-[#33312D] text-[1.2rem] font-bold tracking-wide">プラチナ</h3>
                        <p class="text-[#33312D] text-[1.65rem] font-bold tracking-tight leading-none pt-2">
                            <?php if ($rates) : ?>
                                <?php echo esc_html(number_format($rates['platinum'])); ?><span class="text-[15px] font-bold ml-0.5">円</span>
                            <?php else : ?>
                                ---<span class="text-[15px] font-bold ml-0.5">円</span>
                            <?php endif; ?>
                        </p>
                        <span class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wide block pt-1">
                            <?php if ($rates) : ?>
                                <?php echo esc_html(wp_date('Y年n月j日', strtotime($rates['updated_at'])) . '時点'); ?>
                            <?php else : ?>
                                取得中
                            <?php endif; ?>
                        </span>
                    </div>
                    <div
                        class="w-[110px] sm:w-[130px] aspect-square p-0 flex items-center justify-center flex-shrink-0">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/card-silver-1.png" alt="プラチナ" class="w-full h-full object-contain" />
                    </div>
                </div>
                <?php // TODO: make editable via ACF if client requests. ?>
                <p
                    class="text-[#615C56] text-[14px] sm:text-[14.5px] leading-[1.75] noto-sans !font-medium tracking-wide">
                    Pt1000からPt850まで、リングやアクセサリーなどをお取り扱いしています。傷や変形のあるものも、素材を確認したうえで査定いたします。
                </p>
            </div>

            <div
                class="bg-[#FFFCF5] p-6 sm:p-7 shadow-xs border-t-[4px] border-[#B57A3F] flex flex-col justify-between min-h-[260px]">
                <div class="flex justify-between items-start gap-4 mb-6">
                    <div class="space-y-2">
                        <h3 class="text-[#33312D] text-[1.2rem] font-bold tracking-wide">銀</h3>
                        <p class="text-[#33312D] text-[1.65rem] font-bold tracking-tight leading-none pt-2">
                            <?php if ($rates) : ?>
                                <?php echo esc_html(number_format($rates['silver'])); ?><span class="text-[15px] font-bold ml-0.5">円</span>
                            <?php else : ?>
                                ---<span class="text-[15px] font-bold ml-0.5">円</span>
                            <?php endif; ?>
                        </p>
                        <span class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wide block pt-1">
                            <?php if ($rates) : ?>
                                <?php echo esc_html(wp_date('Y年n月j日', strtotime($rates['updated_at'])) . '時点'); ?>
                            <?php else : ?>
                                取得中
                            <?php endif; ?>
                        </span>
                    </div>
                    <div
                        class="w-[110px] sm:w-[130px] aspect-square p-0 flex items-center justify-center flex-shrink-0">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/card-silver-2.png" alt="銀" class="w-full h-full object-contain" />
                    </div>
                </div>
                <?php // TODO: make editable via ACF if client requests. ?>
                <p
                    class="text-[#615C56] text-[14px] sm:text-[14.5px] leading-[1.75] noto-sans !font-medium tracking-wide">
                    銀製の食器やアクセサリー、銀歯などを幅広くお取り扱いしています。変色しているものや、セットが揃っていないものも査定いたします。
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Flow Cards  -->

<section class="relative bg-[#303E5F] text-white py-16 md:py-28 font-serif-jp overflow-hidden">

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10">

        <div class="text-center mb-16 md:mb-20">
            <div class="w-30 h-auto mx-auto mb-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
            </div>
            <span
                class="font-['EB_Garamond'] text-[#B57A3F] text-[20px] uppercase block mb-2 tracking-[0.1em]">Flow</span>
            <h2 class="text-white text-[clamp(2rem,4vw,2.25rem)] font-bold tracking-wide">
                買取の流れ
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 xl:gap-8 max-w-[1140px] mx-auto">

            <div class="bg-[#FFFCF5] p-6 pt-0 shadow-md rounded-none overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="flex items-end gap-4 mb-6 -mx-6">
                        <div
                            class="bg-[#B57A3F] w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center text-white flex-shrink-0">

                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/flow-card-mail.svg" alt="Mail Icon" class="w-7 h-7 object-contain">

                        </div>
                        <div class="flex items-baseline gap-1.5 font-['EB_Garamond'] text-[#B57A3F]">
                            <span
                                class="text-[clamp(11px,1.5vw,17px)] uppercase tracking-widest font-normal">Flow</span>
                            <span class="text-[clamp(1.75rem,3vw,3rem)] font-medium leading-none">01</span>
                        </div>
                    </div>

                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-tight mb-5">
                        お問い合わせ
                    </h3>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        まずは、LINEもしくはお電話（0463-71-6678）にてお気軽にご相談ください。<span
                            class="text-[#B57A3F] font-semibold ml-0.5">仮</span>
                    </p>
                </div>
            </div>

            <div class="bg-[#FFFCF5] p-6 pt-0 shadow-md rounded-none overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="flex items-end gap-4 mb-6 -mx-6">
                        <div
                            class="bg-[#B57A3F] w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center text-white flex-shrink-0">

                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/flow-card-store.svg" alt="Mail Icon" class="w-7 h-7 object-contain">

                        </div>
                        <div class="flex items-baseline gap-1.5 font-['EB_Garamond'] text-[#B57A3F]">
                            <span
                                class="text-[clamp(11px,1.5vw,17px)] uppercase tracking-widest font-normal">Flow</span>
                            <span class="text-[clamp(1.75rem,3vw,3rem)] font-medium leading-none">02</span>
                        </div>
                    </div>

                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-tight mb-5">
                        ご来店・査定
                    </h3>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        お約束した日時にご来店ください。お持ちいただいたお品物を丁寧に査定いたします。<span
                            class="text-[#B57A3F] font-semibold ml-0.5">仮</span>
                    </p>
                </div>
            </div>

            <div class="bg-[#FFFCF5] p-6 pt-0 shadow-md rounded-none overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="flex items-end gap-4 mb-6 -mx-6">
                        <div
                            class="bg-[#B57A3F] w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center text-white flex-shrink-0">

                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/flow-card-calculator.svg" alt="Mail Icon"
                                class="w-7 h-7 object-contain">

                        </div>
                        <div class="flex items-baseline gap-1.5 font-['EB_Garamond'] text-[#B57A3F]">
                            <span
                                class="text-[clamp(11px,1.5vw,17px)] uppercase tracking-widest font-normal">Flow</span>
                            <span class="text-[clamp(1.75rem,3vw,3rem)] font-medium leading-none">03</span>
                        </div>
                    </div>

                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-tight mb-5">
                        金額のご提示
                    </h3>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        1品ずつ丁寧に査定後、査定金額をお伝えします。ご不明点もしっかりご説明いたします。<span
                            class="text-[#B57A3F] font-semibold ml-0.5">仮</span>
                    </p>
                </div>
            </div>

            <div class="bg-[#FFFCF5] p-6 pt-0 shadow-md rounded-none overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="flex items-end gap-4 mb-6 -mx-6">
                        <div
                            class="bg-[#B57A3F] w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center text-white flex-shrink-0">

                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/flow-card-payment.svg" alt="Mail Icon" class="w-7 h-7 object-contain">

                        </div>
                        <div class="flex items-baseline gap-1.5 font-['EB_Garamond'] text-[#B57A3F]">
                            <span
                                class="text-[clamp(11px,1.5vw,17px)] uppercase tracking-widest font-normal">Flow</span>
                            <span class="text-[clamp(1.75rem,3vw,3rem)] font-medium leading-none">04</span>
                        </div>
                    </div>

                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-tight mb-5">
                        現金にてお支払い
                    </h3>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        査定金額にご納得いただけましたら、現金をお支払いいたします。<span class="text-[#B57A3F] font-semibold ml-0.5">仮</span>
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- FAQ Section  -->

<?php get_template_part('template-parts/sections/faq'); ?>

<!-- Ornament Cards Section  -->

<section class="relative bg-[#F1ECE0] py-16 md:py-28 font-serif-jp overflow-hidden">

    <div class="absolute left-[-10%] lg:left-0 top-[10%] w-[55%] md:w-[35%] max-w-[500px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ornament-card-element.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[1240px] mx-auto px-0 sm:px-6 lg:px-8 z-10">

        <div class="text-center px-5 sm:px-0 mb-12 md:mb-16">
            <div class="w-30 h-auto mx-auto mb-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
            </div>
            <h2 class="text-[#33312D] text-[clamp(1.5rem,4vw,2.25rem)] font-bold tracking-wide">
                関連する買取実績
            </h2>
        </div>

        <div class="relative px-5 sm:px-0 mb-12">

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

                <?php if ($item_purchase_related_query->have_posts()) : ?>
                    <?php
                    $item_purchase_related_index = 0;
                    while ($item_purchase_related_query->have_posts()) :
                        $item_purchase_related_query->the_post();
                        $item_purchase_related_index++;
                        $item_purchase_price      = esc_html(number_format((float) get_field('purchase_price')));
                        $item_purchase_terms      = get_the_terms(get_the_ID(), 'purchase-record-category');
                        $item_purchase_category   = ($item_purchase_terms && !is_wp_error($item_purchase_terms)) ? $item_purchase_terms[0]->name : '';
                        $item_purchase_thumb      = get_the_post_thumbnail_url(get_the_ID(), 'kuranomiya-card');
                        if (!$item_purchase_thumb) {
                            $item_purchase_thumb = get_template_directory_uri() . '/assets/img/placeholder-img.png';
                        }
                        $item_purchase_card_margin = $item_purchase_related_index < $item_purchase_related_query->post_count ? ' mr-4 lg:mr-0' : '';
                        ?>
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="block hover:opacity-90 transition-opacity duration-200">
                            <div
                                class="related-card w-[85vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#FFFCF5] shadow-sm flex flex-col<?php echo esc_attr($item_purchase_card_margin); ?>">
                                <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                                    <img src="<?php echo esc_url($item_purchase_thumb); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover" />
                                    <?php if ($item_purchase_category) : ?>
                                        <div
                                            class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-2 text-[14px] tracking-wider font-medium">
                                            <?php echo esc_html($item_purchase_category); ?>
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
                                            class="text-[clamp(1.5rem,3vw,1.85rem)] font-['EB_Garamond'] font-medium tracking-wide"><?php echo $item_purchase_price; ?></span>
                                        <span class="text-[15px] font-bold ml-0.5">円</span>
                                    </div>
                                    <span
                                        class="text-[#B57A3F] font-sans text-[14px] font-medium tracking-wider block"><?php echo esc_html(get_the_date('Y.m')); ?></span>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>

            <?php if ($item_purchase_related_query->post_count > 0) : ?>
                <div id="related-dots" class="flex items-center justify-center gap-3 mt-6 lg:hidden">
                    <?php for ($i = 0; $i < $item_purchase_related_query->post_count; $i++) : ?>
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


<?php get_footer(); ?>