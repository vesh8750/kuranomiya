<?php

/**
 * Template Name: Purchase Records Archive
 * Template: Page 2
 */

get_header();
?>


<div class="w-full bg-[#FFFCF5] pt-4 sm:pt-6 font-sans text-[12px] tracking-wider text-[#615C56]">
    <div class="max-w-[1400px] noto-sans mx-auto px-5 sm:px-6 lg:px-8">
        <nav class="flex items-center space-x-2 flex-wrap">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#B57A3F] transition-colors">ホーム</a>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <span class="text-[#33312D] font-medium">買取実績</span>
        </nav>
    </div>
</div>

<!-- Hero Section  -->

<section
    class="relative bg-[#FFFCF5] pt-10 pb-20 sm:pb-28 lg:py-24 font-serif-jp overflow-hidden min-h-[360px] flex items-center">

    <div
        class="absolute hidden md:block right-[-10%] sm:right-[-5%] lg:right-10 top-1/2 -translate-y-1/2 w-[60%] sm:w-[45%] lg:w-[32%] max-w-[450px] pointer-events-none z-0">
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
                    <button type="button"
                        class="px-6 py-2 bg-[#B57A3F] rounded-[24px] text-white text-[14px] font-medium transition-colors hover:bg-[#a06830]">すべて</button>
                    <button type="button"
                        class="px-5 py-2 bg-[#FFFCF5] rounded-[24px] text-[#B57A3F] text-[14px] font-medium border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]">金・プラチナ・銀</button>
                    <button type="button"
                        class="px-5 py-2 bg-[#FFFCF5] rounded-[24px] text-[#B57A3F] text-[14px] border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]">時計</button>
                    <button type="button"
                        class="px-5 py-2 bg-[#FFFCF5] rounded-[24px] text-[#B57A3F] text-[14px] border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]">宝飾品</button>
                    <button type="button"
                        class="px-5 py-2 bg-[#FFFCF5] rounded-[24px] text-[#B57A3F] text-[14px] border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]">ブランド品</button>
                    <button type="button"
                        class="px-5 py-2 bg-[#FFFCF5] rounded-[24px] text-[#B57A3F] text-[14px] border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]">その他</button>
                </div>
            </div>

            <div class="space-y-3 w-full sm:w-[240px] lg:w-[260px] self-start lg:self-auto">
                <span
                    class="text-[#33312D] text-[13px] sm:text-[14px] font-bold tracking-wider block lg:text-left">表示順の切り替え</span>
                <div
                    class="relative bg-[#FFFCF5] border border-[#E3DCCE] text-[#615C56] noto-sans text-[14px] px-4 py-2.5 pr-10 shadow-xs cursor-pointer select-none group">
                    <span class="block tracking-wide">新着順</span>
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

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/achievement-1.png" alt="ロレックス デイトジャスト 16233"
                        class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 noto-sans left-0 bg-[#303E5F] text-white px-5 py-2 text-[16px] tracking-wider font-medium">
                        時計</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-2">
                        ロレックス デイトジャスト 16233</h3>
                    <div class="flex items-baseline text-[#33312D] mb-5">
                        <span
                            class="text-[clamp(14px,1vw,16px)] font-medium mr-2 noto-sans text-[#615C56]">買取価格</span>
                        <span
                            class="text-[clamp(32px,4vw,38px)] font-['EB_Garamond'] font-medium tracking-wide">550,000</span>
                        <span class="text-[clamp(13px,0.9vw,15px)] noto-sans font-medium ml-0.5">円</span>
                    </div>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-5"></div>
                    <p
                        class="text-[#615C56] noto-sans text-[14px] leading-[1.75] noto-sans !font-medium tracking-wide flex-grow mb-6">
                        長くお使いになった一本。傷の中にも丁寧に時を刻まれた品の良さがありました。<br
                            class="hidden md:block">機械の調子と相場を踏まえ、お客様にご納得いただける査定額をお伝えしました。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">2026.04</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/card-ornament-2.png" alt="金属アクセサリー 一式" class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 noto-sans left-0 bg-[#303E5F] text-white px-5 py-2 text-[16px] tracking-wider font-medium">
                        宝飾品</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-2">
                        金属アクセサリー 一式</h3>
                    <div class="flex items-baseline text-[#33312D] mb-5">
                        <span
                            class="text-[clamp(14px,1vw,16px)] font-medium mr-2 noto-sans text-[#615C56]">買取価格</span>
                        <span
                            class="text-[clamp(32px,4vw,38px)] font-['EB_Garamond'] font-medium tracking-wide">1,294,872</span>
                        <span class="text-[15px] font-bold ml-0.5">円</span>
                    </div>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-5"></div>
                    <p
                        class="text-[#615C56] noto-sans text-[14px] leading-[1.75] noto-sans !font-medium tracking-wide flex-grow mb-6">
                        ご結婚当時にお揃えになった品々とお伺いしました。<br
                            class="hidden md:block">一点一点純度と重量を計測しながら、お話を伺いつつ、丁寧にさてさせていただきました。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">2026.04</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/card-ornament-3.png" alt="金歯・銀歯" class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 noto-sans left-0 bg-[#303E5F] text-white px-5 py-2 text-[16px] tracking-wider font-medium">
                        金・銀</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-2">
                        金歯・銀歯</h3>
                    <div class="flex items-baseline text-[#33312D] mb-5">
                        <span
                            class="text-[clamp(14px,1vw,16px)] font-medium mr-2 noto-sans text-[#615C56]">買取価格</span>
                        <span
                            class="text-[clamp(32px,4vw,38px)] font-['EB_Garamond'] font-medium tracking-wide">114,567</span>
                        <span class="text-[15px] font-bold ml-0.5">円</span>
                    </div>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-5"></div>
                    <p
                        class="text-[#615C56] noto-sans text-[14px] leading-[1.75] noto-sans !font-medium tracking-wide flex-grow mb-6">
                        歯科医院よりお受け取りになった金歯・銀歯。地金として精錬する形での組成の純度を確認し、当日の相場に基づき算定したうえでお伝えしました。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">2026.04</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div
                    class="relative w-full aspect-[5/3] overflow-hidden bg-[#E3DCCE]/40 flex items-center justify-center text-[#B57A3F]/50">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/placeholder-img.png" alt="金歯・銀歯" class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 noto-sans left-0 bg-[#303E5F] text-white px-5 py-2 text-[16px] tracking-wider font-medium">
                        カテゴリ名</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-2">
                        品目名が入ります</h3>
                    <div class="flex items-baseline text-[#33312D] mb-5">
                        <span
                            class="text-[clamp(14px,1vw,16px)] font-medium mr-2 noto-sans text-[#615C56]">買取価格</span>
                        <span
                            class="text-[clamp(32px,4vw,38px)] font-['EB_Garamond'] font-medium tracking-wide">000,000</span>
                        <span class="text-[15px] font-bold ml-0.5">円</span>
                    </div>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-5"></div>
                    <p
                        class="text-[#615C56] noto-sans text-[14px] leading-[1.75] noto-sans !font-medium tracking-wide flex-grow mb-6">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">2026.04</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div
                    class="relative w-full aspect-[5/3] overflow-hidden bg-[#E3DCCE]/40 flex items-center justify-center text-[#B57A3F]/50">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/placeholder-img.png" alt="金歯・銀歯" class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 noto-sans left-0 bg-[#303E5F] text-white px-5 py-2 text-[16px] tracking-wider font-medium">
                        カテゴリ名</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-2">
                        品目名が入ります</h3>
                    <div class="flex items-baseline text-[#33312D] mb-5">
                        <span
                            class="text-[clamp(14px,1vw,16px)] font-medium mr-2 noto-sans text-[#615C56]">買取価格</span>
                        <span
                            class="text-[clamp(32px,4vw,38px)] font-['EB_Garamond'] font-medium tracking-wide">000,000</span>
                        <span class="text-[15px] font-bold ml-0.5">円</span>
                    </div>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-5"></div>
                    <p
                        class="text-[#615C56] noto-sans text-[14px] leading-[1.75] noto-sans !font-medium tracking-wide flex-grow mb-6">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">2026.04</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div
                    class="relative w-full aspect-[5/3] overflow-hidden bg-[#E3DCCE]/40 flex items-center justify-center text-[#B57A3F]/50">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/placeholder-img.png" alt="金歯・銀歯" class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 noto-sans left-0 bg-[#303E5F] text-white px-5 py-2 text-[16px] tracking-wider font-medium">
                        カテゴリ名</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-2">
                        品目名が入ります</h3>
                    <div class="flex items-baseline text-[#33312D] mb-5">
                        <span
                            class="text-[clamp(14px,1vw,16px)] font-medium mr-2 noto-sans text-[#615C56]">買取価格</span>
                        <span
                            class="text-[clamp(32px,4vw,38px)] font-['EB_Garamond'] font-medium tracking-wide">000,000</span>
                        <span class="text-[15px] font-bold ml-0.5">円</span>
                    </div>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-5"></div>
                    <p
                        class="text-[#615C56] noto-sans text-[14px] leading-[1.75] noto-sans !font-medium tracking-wide flex-grow mb-6">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">2026.04</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div
                    class="relative w-full aspect-[5/3] overflow-hidden bg-[#E3DCCE]/40 flex items-center justify-center text-[#B57A3F]/50">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/placeholder-img.png" alt="金歯・銀歯" class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 noto-sans left-0 bg-[#303E5F] text-white px-5 py-2 text-[16px] tracking-wider font-medium">
                        カテゴリ名</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-2">
                        品目名が入ります</h3>
                    <div class="flex items-baseline text-[#33312D] mb-5">
                        <span
                            class="text-[clamp(14px,1vw,16px)] font-medium mr-2 noto-sans text-[#615C56]">買取価格</span>
                        <span
                            class="text-[clamp(32px,4vw,38px)] font-['EB_Garamond'] font-medium tracking-wide">000,000</span>
                        <span class="text-[15px] font-bold ml-0.5">円</span>
                    </div>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-5"></div>
                    <p
                        class="text-[#615C56] noto-sans text-[14px] leading-[1.75] noto-sans !font-medium tracking-wide flex-grow mb-6">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">2026.04</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div
                    class="relative w-full aspect-[5/3] overflow-hidden bg-[#E3DCCE]/40 flex items-center justify-center text-[#B57A3F]/50">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/placeholder-img.png" alt="金歯・銀歯" class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 noto-sans left-0 bg-[#303E5F] text-white px-5 py-2 text-[16px] tracking-wider font-medium">
                        カテゴリ名</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-2">
                        品目名が入ります</h3>
                    <div class="flex items-baseline text-[#33312D] mb-5">
                        <span
                            class="text-[clamp(14px,1vw,16px)] font-medium mr-2 noto-sans text-[#615C56]">買取価格</span>
                        <span
                            class="text-[clamp(32px,4vw,38px)] font-['EB_Garamond'] font-medium tracking-wide">000,000</span>
                        <span class="text-[15px] font-bold ml-0.5">円</span>
                    </div>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-5"></div>
                    <p
                        class="text-[#615C56] noto-sans text-[14px] leading-[1.75] noto-sans !font-medium tracking-wide flex-grow mb-6">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">2026.04</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div
                    class="relative w-full aspect-[5/3] overflow-hidden bg-[#E3DCCE]/40 flex items-center justify-center text-[#B57A3F]/50">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/placeholder-img.png" alt="金歯・銀歯" class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 noto-sans left-0 bg-[#303E5F] text-white px-5 py-2 text-[16px] tracking-wider font-medium">
                        カテゴリ名</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-2">
                        品目名が入ります</h3>
                    <div class="flex items-baseline text-[#33312D] mb-5">
                        <span
                            class="text-[clamp(14px,1vw,16px)] font-medium mr-2 noto-sans text-[#615C56]">買取価格</span>
                        <span
                            class="text-[clamp(32px,4vw,38px)] font-['EB_Garamond'] font-medium tracking-wide">000,000</span>
                        <span class="text-[15px] font-bold ml-0.5">円</span>
                    </div>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-5"></div>
                    <p
                        class="text-[#615C56] noto-sans text-[14px] leading-[1.75] noto-sans !font-medium tracking-wide flex-grow mb-6">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">2026.04</span>
                </div>
            </div>

        </div>

        <div
            class="flex items-center justify-end space-x-1.5 sm:space-x-2 font-sans font-medium text-[14px] md:text-[15px]">
            <span
                class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center bg-[#B57A3F] text-white cursor-pointer transition-colors shadow-xs">1</span>
            <a href="#"
                class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center bg-white text-[#B57A3F] border border-[#DED7C7] hover:bg-[#F6F2E9] transition-colors shadow-xs">2</a>
            <a href="#"
                class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center bg-white text-[#B57A3F] border border-[#DED7C7] hover:bg-[#F6F2E9] transition-colors shadow-xs">3</a>
            <a href="#"
                class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center bg-white text-[#B57A3F] border border-[#DED7C7] hover:bg-[#F6F2E9] transition-colors shadow-xs">4</a>
            <a href="#"
                class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center bg-white text-[#B57A3F] border border-[#DED7C7] hover:bg-[#F6F2E9] transition-colors shadow-xs">5</a>
        </div>

    </div>
</section>



<?php get_footer(); ?>