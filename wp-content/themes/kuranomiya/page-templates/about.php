<?php

/**
 * Template Name: About
 * Template: Page 4
 */

get_header();
?>


<!-- Hero Section  -->

<section
    class="greeting-hero relative min-h-[100vh] md:min-h-[75vh] lg:min-h-[80vh] flex flex-col items-stretch md:items-center bg-cover bg-no-repeat bg-[position:center_bottom] md:bg-right-center overflow-hidden bg-[#FFFCF5]"
    style="--bg-mobile: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/greeting-hero-mobile.png'); --bg-desktop: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/greeting-hero-bg.png');">

    <div
        class="absolute inset-0 bg-gradient-to-b from-[#FFFCF5] via-[#FFFCF5]/90 to-transparent md:hidden pointer-events-none">
    </div>
    <div
        class="hidden md:block absolute inset-0 bg-gradient-to-r from-[#FFFCF5]/95 via-[#FFFCF5]/85 to-transparent md:from-[#FFFCF5]/85 md:via-[#FFFCF5]/40 md:to-transparent pointer-events-none">
    </div>

    <div class="relative w-full max-w-[1400px] mx-auto px-5 sm:px-6 lg:px-8 pt-4 sm:pt-6 pb-56 md:pb-20 z-10 flex-1 flex flex-col">
        <nav class="hidden md:flex items-center space-x-2 flex-wrap noto-sans text-sm text-[#615C56] tracking-wider">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#B57A3F] transition-colors">ホーム</a>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <a href="<?php echo esc_url(home_url('/purchase-records')); ?>" class="hover:text-[#B57A3F] transition-colors">買取品目</a>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <span class="font-medium">店主・店舗紹介</span>
        </nav>

        <div class="flex-1 flex items-stretch md:items-center pt-8 md:pt-12 lg:pt-16">
        <div class="max-w-[640px] text-center md:text-left flex flex-col items-center md:items-center">

            <div class="w-24 h-auto mb-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain mx-auto md:mx-0" />
            </div>

            <h1
                class="font-serif-jp text-[clamp(1.75rem,5.5vw,3rem)] text-[#33312D] font-bold leading-tight tracking-wide mb-3">
                観ることに、真剣です。
            </h1>

            <p
                class="font-['EB_Garamond'] text-[#B57A3F] text-[clamp(14px,2.2vw,18px)] uppercase tracking-[0.15em] font-medium mb-6">
                ABOUT
            </p>

            <div
                class="bg-[#B57A3F] text-white font-serif-jp text-[clamp(14px,2vw,24px)] font-semibold tracking-widest px-6 py-1.5 mb-8 rounded-none shadow-xs select-none">
                買取 蔵の宮について
            </div>

            <div
                class="text-[#615C56] text-center font-medium noto-sans !font-medium text-[clamp(0.85rem,3vw,0.95rem)] leading-[2] tracking-wide space-y-2">
                <p>買取 蔵の宮の店主ご挨拶や店舗情報などを掲載しております。</p>
                <p>ご来店の際は、こちらをご覧ください。</p>
            </div>

        </div>
        </div>
    </div>
</section>


<!-- Greeting Section  -->

<section class="relative bg-[#F1ECE0] py-16 md:py-28 font-serif-jp overflow-hidden" id="greeting">

    <div class="absolute right-0 top-0 w-[45%] md:w-[35%] max-w-[500px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/card-top-pattern.png" alt="" class="w-full h-auto object-contain transform" />
    </div>
    <div class="absolute left-0 bottom-0 w-[45%] md:w-[25%] max-w-[320px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/card-bottom-pattern.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full">

        <div class="text-center mb-12 md:mb-16" data-animate="fade-up">
            <div class="w-30 h-auto mx-auto mb-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
            </div>
            <span
                class="font-['EB_Garamond'] text-[#B57A3F] text-[18px] uppercase block mb-2 tracking-[0.15em]">Greeting</span>
            <h2 class="text-[#33312D] text-[clamp(1.75rem,4vw,3rem)] font-bold tracking-wide">
                店主からのご挨拶
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 items-start gap-8 lg:gap-8  mx-auto" data-animate="composition-reveal">

            <div class="lg:col-span-5 w-full shadow-xs bg-white p-0">
                <div class="relative w-full aspect-[4/5] max-h-[480px] overflow-hidden" data-composition="image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/client.png" alt="店主" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="lg:col-span-7 space-y-6 text-left" data-composition="content">

                <div class="space-y-3 my-6 md:my-10">
                    <h3
                        class="text-[#33312D] text-[clamp(1.35rem,3vw,1.75rem)] font-bold tracking-wide flex items-baseline">
                        店主 ●●
                    </h3>
                    <div class="w-12 h-[1px] bg-[#B57A3F]"></div>
                </div>

                <p class="text-[#B57A3F] noto-sans text-[14px] sm:text-[15px] font-bold tracking-wider">
                    業界歴11年以上の査定員
                </p>

                <div
                    class="text-[#615C56] my-6 md:my-10 font-medium noto-sans !font-medium text-[14px] sm:text-[15px] leading-[1.9] tracking-wider space-y-3">
                    <p>
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。
                    </p>
                    <p>
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。
                    </p>
                    <p>
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- Flow Cards  -->

<section class="relative bg-[#303E5F] text-white py-16 md:py-28 font-serif-jp overflow-hidden">

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10">

        <div class="text-center mb-8 md:mb-10" data-animate="fade-up">
            <div class="w-30 h-auto mx-auto mb-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
            </div>
            <span
                class="font-['EB_Garamond'] text-[#B57A3F] text-[20px] uppercase block mb-2 tracking-[0.1em]">PHILOSOPHY</span>
            <h2 class="text-white text-[clamp(1.6rem,4vw,2.25rem)] font-bold tracking-wide">
                「観る」── 私たちの考え
            </h2>
        </div>
        <div
            class="text-center text-[#FFFCF5] text-[clamp(0.85rem,2.5vw,1rem)] leading-[1.8] tracking-wider noto-sans !font-medium max-w-[900px] mx-auto mb-12 sm:mb-16 space-y-2">
            <p>見るのではなく、「観る」。</p>
            <p>そこには品物の状態だけでなく、その背景にある時間や物語までしっかり観る、という想いを込めています。</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 xl:gap-8 max-w-[1140px] mx-auto" data-animate="stagger-soft">

            <div class="bg-[#FFFCF5] p-6 pt-0 shadow-md rounded-none overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="flex items-end gap-4 mb-6 -mx-6">
                        <div
                            class="bg-[#B57A3F] w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center text-white flex-shrink-0">

                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/point-1.svg" alt="Mail Icon" class="w-7 h-7 object-contain">

                        </div>
                        <div class="flex items-baseline gap-1.5 font-['EB_Garamond'] text-[#B57A3F]">
                            <span
                                class="text-[clamp(17px,1.5vw,17px)] uppercase tracking-widest font-normal">Point</span>
                            <span class="text-[clamp(2rem,4vw,3.3rem)] font-normal leading-none">01</span>
                        </div>
                    </div>

                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-tight mb-5">
                        お品物に向き合う
                    </h3>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        こちらに説明文が入ります。
                    </p>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        こちらに説明文が入ります。
                    </p>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        こちらに説明文が入ります。
                    </p>
                </div>
            </div>

            <div class="bg-[#FFFCF5] p-6 pt-0 shadow-md rounded-none overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="flex items-end gap-4 mb-6 -mx-6">
                        <div
                            class="bg-[#B57A3F] w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center text-white flex-shrink-0">

                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/point-2.svg" alt="Mail Icon" class="w-7 h-7 object-contain">

                        </div>
                        <div class="flex items-baseline gap-1.5 font-['EB_Garamond'] text-[#B57A3F]">
                            <span
                                class="text-[clamp(17px,1.5vw,17px)] uppercase tracking-widest font-normal">Point</span>
                            <span class="text-[clamp(2rem,4vw,3.3rem)] font-normal leading-none">02</span>
                        </div>
                    </div>

                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-tight mb-5">
                        お客様に向き合う
                    </h3>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        こちらに説明文が入ります。
                    </p>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        こちらに説明文が入ります。
                    </p>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        こちらに説明文が入ります。
                    </p>

                </div>
            </div>

            <div class="bg-[#FFFCF5] p-6 pt-0 shadow-md rounded-none overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="flex items-end gap-4 mb-6 -mx-6">
                        <div
                            class="bg-[#B57A3F] w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center text-white flex-shrink-0">

                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/point-3.svg" alt="Mail Icon" class="w-7 h-7 object-contain">

                        </div>
                        <div class="flex items-baseline gap-1.5 font-['EB_Garamond'] text-[#B57A3F]">
                            <span
                                class="text-[clamp(17px,1.5vw,17px)] uppercase tracking-widest font-normal">Point</span>
                            <span class="text-[clamp(2rem,4vw,3.3rem)] font-normal leading-none">03</span>
                        </div>
                    </div>

                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-tight mb-5">
                        相場に向き合う
                    </h3>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        こちらに説明文が入ります。
                    </p>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        こちらに説明文が入ります。
                    </p>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        こちらに説明文が入ります。
                    </p>
                </div>
            </div>

            <div class="bg-[#FFFCF5] p-6 pt-0 shadow-md rounded-none overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="flex items-end gap-4 mb-6 -mx-6">
                        <div
                            class="bg-[#B57A3F] w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center text-white flex-shrink-0">

                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/point-4.svg" alt="Mail Icon" class="w-7 h-7 object-contain">

                        </div>
                        <div class="flex items-baseline gap-1.5 font-['EB_Garamond'] text-[#B57A3F]">
                            <span
                                class="text-[clamp(17px,1.5vw,17px)] uppercase tracking-widest font-normal">Point</span>
                            <span class="text-[clamp(2rem,4vw,3.3rem)] font-normal leading-none">04</span>
                        </div>
                    </div>

                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-tight mb-5">
                        判断に向き合う
                    </h3>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        こちらに説明文が入ります。
                    </p>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        こちらに説明文が入ります。
                    </p>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-medium tracking-wide">
                        こちらに説明文が入ります。
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Shop Gallery Section  -->

<?php
$img1 = get_field('gallery_image_1', 'option');
$img2 = get_field('gallery_image_2', 'option');
$img3 = get_field('gallery_image_3', 'option');
$gallery_desc = get_field('gallery_description', 'option');
$placeholder  = get_template_directory_uri() . '/assets/img/camera.svg';
?>

<section class="relative bg-[#FFFCF5] py-16 md:py-28 font-serif-jp overflow-hidden" id="shop-gallery">

    <div class="absolute left-0 top-0 w-[45%] md:w-[45%] max-w-[500px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/gallery-top-pattern.png" alt="" class="w-full h-auto object-contain" />
    </div>
    <div class="absolute right-0 top-[12%] w-[45%] md:w-[30%] max-w-[350px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/gallery-mid-pattern.png" alt=""
            class="w-full h-auto object-contain transform" />
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full">

        <div class="text-center mb-8 md:mb-10" data-animate="fade-up">
            <div class="w-30 h-auto mx-auto mb-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
            </div>
            <span class="font-['EB_Garamond'] text-[#B57A3F] text-[20px] uppercase block mb-2 tracking-[0.1em]">Shop
                Gallery</span>
            <h2 class="text-[#33312D] text-[clamp(1.75rem,4vw,2.25rem)] font-bold tracking-wide">
                店内紹介
            </h2>
        </div>

        <div
            class="text-center text-[#615C56] text-[14px] sm:text-[15px] leading-[1.8] tracking-wider noto-sans !font-medium max-w-[800px] mx-auto mb-12 md:mb-16">
            <p><?php echo esc_html($gallery_desc); ?></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 max-w-[1100px] mx-auto" data-animate="fade-up">

            <div
                class="md:col-span-2 bg-[#DED7C7] border border-[#DED7C7] flex items-center justify-center shadow-xs relative overflow-hidden group">
                <div class="w-full h-full aspect-[4/3] md:aspect-[16/10] flex items-center justify-center p-4">
                    <img src="<?php echo esc_url($img1 ? $img1['url'] : $placeholder); ?>"
                        alt="<?php echo esc_attr($img1 ? $img1['alt'] : '店内イメージ'); ?>"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-103"
                        <?php if (!$img1) : ?>style="object-fit: contain; max-width: 50px;"<?php endif; ?> />
                </div>
            </div>

            <div class="flex flex-col gap-4 md:gap-6">

                <div
                    class="bg-[#DED7C7] border border-[#DED7C7] flex items-center justify-center shadow-xs relative overflow-hidden group flex-grow">
                    <div class="w-full h-full aspect-[16/9] flex items-center justify-center p-4">
                        <img src="<?php echo esc_url($img2 ? $img2['url'] : $placeholder); ?>"
                            alt="<?php echo esc_attr($img2 ? $img2['alt'] : 'カウンター席'); ?>"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-103"
                            <?php if (!$img2) : ?>style="object-fit: contain; max-width: 50px;"<?php endif; ?> />
                    </div>
                </div>

                <div
                    class="bg-[#DED7C7] border border-[#DED7C7] flex items-center justify-center shadow-xs relative overflow-hidden group flex-grow">
                    <div class="w-full h-full aspect-[16/9] flex items-center justify-center p-4">
                        <img src="<?php echo esc_url($img3 ? $img3['url'] : $placeholder); ?>"
                            alt="<?php echo esc_attr($img3 ? $img3['alt'] : 'ディスプレイ'); ?>"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-103"
                            <?php if (!$img3) : ?>style="object-fit: contain; max-width: 50px;"<?php endif; ?> />
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>


<?php get_template_part('template-parts/sections/location'); ?>


<?php get_footer(); ?>