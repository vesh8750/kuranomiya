<?php

/**
 * Single Purchase Record
 * Page 2 Detail
 */

get_header();
?>

<!-- Hero Section  -->

<section
    class="relative bg-[#FFFCF5] pt-10 pb-20 sm:pb-28 lg:py-24 font-serif-jp overflow-hidden min-h-[360px] flex items-center">

    <div
        class="absolute hidden md:block right-[-10%] sm:right-[-5%] lg:right-10 top-[100%] -translate-y-1/2 w-[60%] sm:w-[45%] lg:w-[32%] max-w-[450px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/product-page-right-bg.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div
        class="absolute bottom-[-1%] sm:bottom-[-4%] left-[-0%] font-['EB_Garamond'] text-[clamp(3rem,13vw,6rem)] uppercase tracking-[0.05em] text-[#F1ECE0] leading-none font-medium select-none pointer-events-none whitespace-nowrap z-0">
        Achievements
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full">
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

<!-- Item Detail Section  -->

<section class="relative bg-[#F1ECE0] py-16 md:py-24 font-serif-jp overflow-hidden">

    <div class="absolute right-0 top-[35%] w-[45%] md:w-[25%] max-w-[320px] rotate-180 pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/card-top-pattern.png" alt="" class="w-full h-auto object-contain transform rotate-90" />
    </div>

    <div class="relative max-w-[1050px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full space-y-12">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-8 items-start max-w-[1000px] mx-auto pb-12">

            <div class="lg:col-span-6 space-y-4">
                <div class="w-full aspect-[5/3] min-h-[329px] bg-gray-100 overflow-hidden shadow-xs">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/achievement-1.png" alt="ロレックスデイトジャスト 16233"
                        class="w-full h-full object-cover" />
                </div>

                <div class="grid grid-cols-5 gap-2.5">
                    <div
                        class="aspect-square bg-gray-100 cursor-pointer border border-[#B57A3F] p-0.5 overflow-hidden">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/achievement-1.png" alt="" class="w-full h-full object-cover" />
                    </div>
                    <div
                        class="aspect-square bg-[#FFFCF5] border border-[#E3DCCE]/60 p-0 flex items-center justify-center cursor-pointer hover:bg-[#F6F2E9] transition-colors">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/small-camera.png" alt="" class="w-full h-full object-contain" />
                    </div>
                    <div
                        class="aspect-square bg-[#FFFCF5] border border-[#E3DCCE]/60 p-0 flex items-center justify-center cursor-pointer hover:bg-[#F6F2E9] transition-colors">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/small-camera.png" alt="" class="w-full h-full object-contain" />
                    </div>
                    <div
                        class="aspect-square bg-[#FFFCF5] border border-[#E3DCCE]/60 p-0 flex items-center justify-center cursor-pointer hover:bg-[#F6F2E9] transition-colors">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/small-camera.png" alt="" class="w-full h-full object-contain" />
                    </div>
                    <div
                        class="aspect-square bg-[#FFFCF5] border border-[#E3DCCE]/60 p-0 flex items-center justify-center cursor-pointer hover:bg-[#F6F2E9] transition-colors">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/small-camera.png" alt="" class="w-full h-full object-contain" />
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6 pt-2 space-y-5">

                <div
                    class="inline-block bg-[#303E5F] noto-sans text-white text-[clamp(12px,1vw,16px)] px-4 py-1.5 font-sans font-medium tracking-widest select-none">
                    時計 / ROLEX
                </div>

                <h1
                    class="text-[#33312D] noto-serif text-[clamp(1.5rem,4vw,1.7rem)] font-bold tracking-wide leading-tight">
                    ロレックスデイトジャスト 16233
                </h1>

                <div class="flex items-baseline text-[#33312D] border-b border-[#33312D]/10 pb-4">
                    <span class="text-[14px] noto-sans font-medium mr-4 font-sans text-[#615C56]">買取価格</span>
                    <span
                        class="text-[clamp(1.75rem,3.5vw,2.25rem)] font-['EB_Garamond'] font-medium text-[#B57A3F] tracking-wide leading-none">550,000</span>
                    <span class="text-[15px] font-bold text-[#B57A3F] ml-0.5">円</span>
                </div>

                <dl class="text-[14px] font-sans text-[#33312D] space-y-4 pt-2 !font-normal tracking-wide">
                    <div class="flex items-center">
                        <dt class="w-[80px] noto-sans text-[#615C56] font-medium flex-shrink-0">買取日</dt>
                        <dd class="noto-sans text-[#33312D]">2026.04</dd>
                    </div>
                    <div class="flex items-center">
                        <dt class="w-[80px] noto-sans text-[#615C56] font-medium flex-shrink-0">カテゴリ</dt>
                        <dd class="noto-sans text-[#33312D]">腕時計</dd>
                    </div>
                    <div class="flex items-center">
                        <dt class="w-[80px] noto-sans text-[#615C56] font-medium flex-shrink-0">状態</dt>
                        <dd class="noto-sans text-[#33312D]">中古・正常稼働</dd>
                    </div>
                </dl>

                <div class="pt-4">
                    <a href="#"
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

        <div
            class="bg-[#303E5F] text-white p-6 sm:p-10 relative overflow-hidden max-w-[1000px] mx-auto border-t-[3px] border-[#B57A3F] !py-[21px] !pl-[60px]">

            <span
                class="absolute left-6 top-6 text-[#B57A3F] font-serif text-[4rem] leading-none select-none pointer-events-none">“</span>

            <div class="relative z-10 space-y-6">
                <div class="flex items-center space-x-3 text-[#B57A3F]">
                    <h2 class="text-[clamp(1.15rem,2.5vw,1.35rem)] font-bold tracking-wide">お客様の声</h2>
                </div>

                <div
                    class="text-white text-[14px] sm:text-[14.5px] leading-[1.9] tracking-wider noto-sans !font-normal space-y-2">
                    <p>こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                    <p>こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                    <p>こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                </div>
            </div>

            <span
                class="absolute right-6 bottom-[-13px] text-[#B57A3F] font-serif text-[4rem] leading-none select-none pointer-events-none">”</span>
        </div>

        <div
            class="bg-[#FFFCF5] p-6 sm:p-5 shadow-xs border-t-2 border-[#303E5F] max-w-[1000px] mx-auto space-y-6 !py-[21px]">

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
                <p>こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                <p>こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                <p>こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                <p>こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
            </div>
        </div>

    </div>
</section>

<!-- Ornament Cards Section  -->

<section class="relative bg-[#FFFCF5] py-16 md:py-28 font-serif-jp overflow-hidden">

    <div class="absolute left-[-10%] lg:left-0 top-[1%] w-[55%] md:w-[35%] max-w-[500px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ornament-card-pattern-2.png" alt="" class="w-full h-auto object-contain" />
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

                <div
                    class="related-card w-[85vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#F1ECE0] shadow-sm flex flex-col mr-4 lg:mr-0">
                    <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/watch-1.png" alt="商品名が入ります" class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-2 text-[14px] tracking-wider font-medium">
                            プラチナ
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h3
                            class="text-[#33312D] text-[1.2rem] font-bold tracking-wide leading-snug mb-4 min-h-[1.5em]">
                            商品名が入ります
                        </h3>
                        <div class="flex items-baseline text-[#33312D] mb-4">
                            <span class="text-[14px] font-medium mr-2 noto-sans text-[#615C56]">買取価格</span>
                            <span
                                class="text-[clamp(1.5rem,3vw,1.85rem)] font-['EB_Garamond'] font-medium tracking-wide">000,000</span>
                            <span class="text-[15px] font-bold ml-0.5">円</span>
                        </div>
                        <span
                            class="text-[#B57A3F] font-sans text-[14px] font-medium tracking-wider block">2026.06</span>
                    </div>
                </div>

                <div
                    class="related-card w-[85vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#F1ECE0] shadow-sm flex flex-col mr-4 lg:mr-0">
                    <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/watch-2.png" alt="金属アクセサリー 一式" class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-2 text-[14px] tracking-wider font-medium">
                            金
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h3
                            class="text-[#33312D] text-[1.2rem] font-bold tracking-wide leading-snug mb-4 min-h-[1.5em]">
                            金属アクセサリー 一式
                        </h3>
                        <div class="flex items-baseline text-[#33312D] mb-4">
                            <span class="text-[14px] font-medium mr-2 noto-sans text-[#615C56]">買取価格</span>
                            <span
                                class="text-[clamp(1.5rem,3vw,1.85rem)] font-['EB_Garamond'] font-medium tracking-wide">000,000</span>
                            <span class="text-[15px] font-bold ml-0.5">円</span>
                        </div>
                        <span
                            class="text-[#B57A3F] font-sans text-[14px] font-medium tracking-wider block">2026.06</span>
                    </div>
                </div>

                <div
                    class="related-card w-[85vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#F1ECE0] shadow-sm flex flex-col">
                    <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/watch-3.png" alt="金歯・銀歯" class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-2 text-[14px] tracking-wider font-medium">
                            金・銀
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h3
                            class="text-[#33312D] text-[1.2rem] font-bold tracking-wide leading-snug mb-4 min-h-[1.5em]">
                            金歯・銀歯
                        </h3>
                        <div class="flex items-baseline text-[#33312D] mb-4">
                            <span class="text-[14px] font-medium mr-2 noto-sans text-[#615C56]">買取価格</span>
                            <span
                                class="text-[clamp(1.5rem,3vw,1.85rem)] font-['EB_Garamond'] font-medium tracking-wide">000,000</span>
                            <span class="text-[15px] font-bold ml-0.5">円</span>
                        </div>
                        <span
                            class="text-[#B57A3F] font-sans text-[14px] font-medium tracking-wider block">2026.06</span>
                    </div>
                </div>

            </div>

            <div id="related-dots" class="flex items-center justify-center gap-3 mt-6 lg:hidden">
                <span class="w-2.5 h-2.5 bg-[#B57A3F] rounded-full transition-all duration-300"></span>
                <span class="w-2.5 h-2.5 bg-[#B57A3F]/30 rounded-full transition-all duration-300"></span>
                <span class="w-2.5 h-2.5 bg-[#B57A3F]/30 rounded-full transition-all duration-300"></span>
            </div>

        </div>

        <p
            class="text-center text-[#615C56] font-sans text-[13px] sm:text-[18px] leading-relaxed tracking-wider px-5 mt-10">
            類似のお品物の売却をご検討の方は、お気軽にご相談ください。
        </p>

    </div>
</section>

<?php get_footer(); ?>