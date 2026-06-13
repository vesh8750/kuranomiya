<?php

/**
 * Single Column
 * Page 3 Detail
 */

get_header();
?>

<div class="w-full bg-[#FFFCF5] pt-4 sm:pt-6 font-sans text-[12px] tracking-wider text-[#615C56]">
    <div class="max-w-[1400px] mx-auto px-5 sm:px-6 lg:px-8">
        <nav class="flex items-center space-x-2 flex-wrap">
            <a href="#" class="hover:text-[#B57A3F] transition-colors">ホーム</a>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <span class="text-[#33312D] font-medium">コラム</span>
        </nav>
    </div>
</div>

<!-- Hero Section  -->

<section
    class="relative bg-[#FFFCF5] pt-10 pb-20 sm:pb-28 lg:py-24 font-serif-jp overflow-hidden min-h-[360px] flex items-center">

    <div
        class="absolute hidden md:block right-[-10%] sm:right-[-5%] lg:right-10 top-[100%] -translate-y-1/2 w-[60%] sm:w-[45%] lg:w-[32%] max-w-[450px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/product-page-right-bg.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div
        class="absolute bottom-[-1%] sm:bottom-[-4%] left-[-0%] font-['EB_Garamond'] text-[clamp(3rem,13vw,6rem)] uppercase tracking-[0.05em] text-[#F1ECE0] leading-none font-medium select-none pointer-events-none whitespace-nowrap z-0">
        column
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 items-end gap-8 lg:gap-12">

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
                class="lg:col-span-9 text-[#615C56] font-medium noto-sans !font-medium text-[clamp(0.88rem,2.8vw,1.05rem)] leading-[2] tracking-wider space-y-2 max-w-[620px] mx-auto lg:mx-0 text-left pl-0 lg:pl-4">
                <p>買取・査定・お品物の知識を店主の視点でお届けします。</p>
                <p>大切なお品物の売却や遺品整理などの際は、こちらもご覧ください。</p>
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

        <h1 class="text-[#33312D] text-[clamp(1.35rem,3.5vw,2rem)] font-bold tracking-wide leading-[1.6] text-left">
            こちらにタイトルが入ります。こちらにタイトルが入ります。<br class="hidden md:block" />
            こちらにタイトルが入ります。こちらにタイトルが入ります。
        </h1>

        <div
            class="bg-[#303E5F] text-white px-4 py-3 sm:px-6 sm:py-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-t-[4px] border-[#B57A3F] shadow-xs">

            <div class="flex items-center space-x-3.5">
                <div
                    class="w-10 h-10 sm:w-11 sm:h-11 rounded-full overflow-hidden bg-white/10 border border-white/20 flex-shrink-0">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/small-man-2.png" alt="店主" class="w-full h-full object-cover" />
                </div>
                <div class="font-sans text-[13px] sm:text-[14px] tracking-wide">
                    <span class="text-[#B57A3F] font-medium mr-1.5">店主</span>
                    <span class="text-white font-semibold">●●</span>
                </div>
            </div>

            <div
                class="flex items-center space-x-4 sm:space-x-6 font-sans text-[12px] sm:text-[13px] text-white/80 !font-normal tracking-wide">
                <div class="flex items-center">
                    <span class="text-[#B57A3F] font-medium mr-1.5">公開日</span>
                    <span class="noto-sans text-white">2026.04.18</span>
                </div>
                <div class="w-[1px] h-3 bg-white/20"></div>
                <div class="flex items-center">
                    <span class="text-[#B57A3F] font-medium mr-1.5">更新日</span>
                    <span class="noto-sans text-white">2026.06.01</span>
                </div>
            </div>

        </div>

        <div
            class="w-full aspect-[16/10] bg-[#E3DCCE]/40 border border-[#E3DCCE]/30 flex items-center justify-center p-0 shadow-xs overflow-hidden group">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/camera-big-man.png" alt="コラムメインイメージ"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-102"
                style="object-fit: cover; max-width: 100%;" />
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
            class="text-[#33312D] text-[clamp(15px,2vw,17px)] leading-[1.85] tracking-wider font-sans !font-normal">
            <p>こちらにリード文が入ります。こちらにリード文が入ります。こちらにリード文が入ります。</p>
            <p>こちらにリード文が入ります。こちらにリード文が入ります。こちらにリード文が入ります。</p>
        </div>

        <div class="space-y-6 pt-4">
            <div class="flex items-center space-x-3 pb-3 border-b border-[#B57A3F]">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/small-logo.svg" alt="" class="w-5 h-5 object-contain flex-shrink-0" />
                <h3
                    class="text-[#33312D] text-[clamp(1.15rem,3vw,1.45rem)] font-bold tracking-wide flex items-center">
                    h3 <span class="mx-3 font-sans font-light text-[#B57A3F]/50 text-[0.9em] select-none">|</span>
                    小見出しタイトルが入ります
                </h3>
            </div>

            <div
                class="text-[#615C56] font-medium noto-sans !font-normal text-[14px] sm:text-[15px] leading-[1.95] tracking-wider space-y-4">
                <p>こちらに段落1のテキストが入ります。こちらに段落1のテキストが入ります。こちらに段落1のテキストが入ります。</p>
                <p>こちらに段落1のテキストが入ります。こちらに段落1のテキストが入ります。こちらに段落1のテキストが入ります。</p>
                <p>こちらに段落1のテキストが入ります。こちらに段落1のテキストが入ります。こちらに段落1のテキストが入ります。</p>
                <p>こちらに段落1のテキストが入ります。こちらに段落1のテキストが入ります。こちらに段落1のテキストが入ります。</p>
            </div>
        </div>

        <div class="space-y-6 pt-4">
            <div class="flex items-center space-x-3 pb-3 border-b border-[#B57A3F]">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/small-logo.svg" alt="" class="w-5 h-5 object-contain flex-shrink-0" />
                <h3
                    class="text-[#33312D] text-[clamp(1.15rem,3vw,1.45rem)] font-bold tracking-wide flex items-center">
                    h3 <span class="mx-3 font-sans font-light text-[#B57A3F]/50 text-[0.9em] select-none">|</span>
                    小見出しタイトルが入ります
                </h3>
            </div>

            <div
                class="text-[#615C56] font-medium noto-sans !font-normal text-[14px] sm:text-[15px] leading-[1.95] tracking-wider space-y-4">
                <p>こちらに段落2のテキストが入ります。こちらに段落2のテキストが入ります。こちらに段落2のテキストが入ります。</p>
                <p>こちらに段落2のテキストが入ります。こちらに段落2のテキストが入ります。こちらに段落2のテキストが入ります。</p>
                <p>こちらに段落2のテキストが入ります。こちらに段落2のテキストが入ります。こちらに段落2のテキストが入ります。</p>
                <p>こちらに段落2のテキストが入ります。こちらに段落2のテキストが入ります。こちらに段落2のテキストが入ります。</p>
            </div>
        </div>

        <div
            class="w-full aspect-[16/10] bg-[#E3DCCE]/40 border border-[#E3DCCE]/30 flex items-center justify-center p-0 shadow-xs overflow-hidden group">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/camera-big-man.png" alt="コラムメインイメージ"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-102"
                style="object-fit: cover; max-width: 100%;" />
        </div>

        <div class="bg-[#F1ECE0] p-6 sm:p-8 shadow-xs border-t border-[#303E5F]/20 space-y-5 mt-12">
            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
                <div class="flex items-center space-x-3.5">
                    <div
                        class="w-12 h-12 rounded-full overflow-hidden bg-white/10 border border-[#E3DCCE] flex-shrink-0">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/small-man.png" alt="店主" class="w-full h-full object-cover" />
                    </div>
                    <h4 class="font-sans text-[15px] tracking-wide text-[#B57A3F] font-bold">
                        <span class="text-[#B57A3F] font-medium mr-1.5">店主</span>●●
                    </h4>
                </div>
                <div class="hidden sm:block w-[1px] h-3 bg-[#33312D]/20"></div>
                <span class="text-[#615C56] text-[13px] sm:text-[14px] font-sans font-bold tracking-wider">
                    業界歴11年以上の査定員
                </span>
            </div>

            <div
                class="text-[#615C56] text-[14px] sm:text-[14.5px] leading-[1.85] tracking-wider font-sans !font-normal space-y-3 pl-0 sm:pl-0">
                <p>こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                <p>こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                <p>こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
            </div>
        </div>

    </div>
</section>

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
                あわせて読みたい<br class="hidden md:block">コラム
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

                <div
                    class="related-card w-[85vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#FFFCF5] shadow-sm flex flex-col mr-4 lg:mr-0">
                    <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ornament-card-alternate.png" alt="商品名が入ります"
                            class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-2 text-[14px] tracking-wider font-medium">
                            カテゴリ名
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h3
                            class="text-[#33312D] text-[1.2rem] font-bold tracking-wide leading-snug mb-4 min-h-[1.5em]">
                            タイトルが入ります
                        </h3>
                        <span
                            class="text-[#B57A3F] font-sans text-[14px] font-medium tracking-wider block">0000.00.00</span>
                    </div>
                </div>

                <div
                    class="related-card w-[85vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#FFFCF5] shadow-sm flex flex-col mr-4 lg:mr-0">
                    <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ornament-card-alternate.png" alt="金属アクセサリー 一式"
                            class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-2 text-[14px] tracking-wider font-medium">
                            カテゴリ名
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h3
                            class="text-[#33312D] text-[1.2rem] font-bold tracking-wide leading-snug mb-4 min-h-[1.5em]">
                            タイトルが入ります
                        </h3>
                        <span
                            class="text-[#B57A3F] font-sans text-[14px] font-medium tracking-wider block">0000.00.00</span>
                    </div>
                </div>

                <div
                    class="related-card w-[85vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#FFFCF5] shadow-sm flex flex-col">
                    <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ornament-card-alternate.png" alt="金歯・銀歯"
                            class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-2 text-[14px] tracking-wider font-medium">
                            カテゴリ名
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h3
                            class="text-[#33312D] text-[1.2rem] font-bold tracking-wide leading-snug mb-4 min-h-[1.5em]">
                            タイトルが入ります
                        </h3>
                        <span
                            class="text-[#B57A3F] font-sans text-[14px] font-medium tracking-wider block">0000.00.00</span>
                    </div>
                </div>

            </div>

            <div id="related-dots" class="flex items-center justify-center gap-3 mt-6 lg:hidden">
                <span class="w-2.5 h-2.5 bg-[#B57A3F] rounded-full transition-all duration-300"></span>
                <span class="w-2.5 h-2.5 bg-[#B57A3F]/30 rounded-full transition-all duration-300"></span>
                <span class="w-2.5 h-2.5 bg-[#B57A3F]/30 rounded-full transition-all duration-300"></span>
            </div>

        </div>

    </div>
</section>

<?php
get_footer();
?>