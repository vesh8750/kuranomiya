<?php

/**
 * Template Name: Market Rates
 * Template: Page 5
 */

get_header();
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
        Gold Price
    </div>

    <div class="hidden md:block relative w-full max-w-[1400px] mx-auto px-5 sm:px-6 lg:px-8 pt-4 sm:pt-6 z-10 font-sans text-[12px] tracking-wider text-[#615C56]">
        <nav class="flex items-center space-x-2 flex-wrap noto-sans">
            <a href="#" class="hover:text-[#B57A3F] transition-colors">ホーム</a>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <span class="text-[#33312D] font-medium">金相場</span>
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
                    金相場
                </h1>
            </div>

            <div
                class="lg:col-span-9 text-[#615C56] font-medium noto-sans !font-medium text-[clamp(0.88rem,2.8vw,1.05rem)] leading-[2] tracking-wider space-y-2 max-w-[620px] mx-auto lg:mx-0 text-left pl-0 lg:pl-4">
                <p>本日の金・プラチナ・銀の1gあたりの買取相場価格を掲載しております。</p>
                <p>毎日更新しておりますので、売却の際はご参考ください。</p>
            </div>

        </div>
    </div>
</section>

<!-- Table Section  -->

<section class="relative bg-[#F1ECE0] py-16 md:py-28 font-serif-jp overflow-hidden">

    <div class="absolute right-0 top-0 w-[45%] md:w-[25%] max-w-[320px]  pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/card-top-pattern.png" alt="" class="w-full h-auto object-contain transform rotate-180" />
    </div>
    <div class="absolute left-0 bottom-0 w-[45%] md:w-[25%] max-w-[320px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/diamond-bottom-pattern.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full mb-12 md:mb-16">
        <p class="text-center noto-sans text-[#615C56] font-sans text-[12px] md:text-[16px] tracking-wide mb-6">
            ※ 表示価格は店頭買取の参考価格です。純度・状態により実際の査定額は変動します。
        </p>

        <div
            class="bg-[#FFFCF5] max-w-[500px] mx-auto p-2.5 mt-10 text-center text-[12px] px-5 tracking-wide font-sans text-[#33312D] shadow-xs border border-[#E3DCCE]/40">
            <div class="flex items-center justify-center space-x-2">
                <div><span class="text-[#B57A3F] noto-sans text-[16px] font-medium mr-1.5">最終更新</span><span
                        class="text-[#615C56] noto-sans font-medium text-[16px]">2026年6月12日&nbsp;&nbsp; 9:00
                        AM</span></div>
                <span class="text-gray">|</span>
                <div><span class="text-[#B57A3F] noto-sans text-[16px] font-medium mr-1.5">情報元</span><span
                        class="text-[#615C56] noto-sans text-[16px]">業界標準価格</span></div>
            </div>
        </div>
    </div>

    <div class="relative max-w-[1000px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full space-y-16 md:space-y-24">

        <div class="w-full">
            <div class="text-center mb-6">
                <div class="w-30 h-auto mx-auto mb-4">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
                </div>
                <span
                    class="font-['EB_Garamond'] text-[#B57A3F] text-[15px] uppercase block mb-4 tracking-widest font-semibold">Gold</span>
                <h2 class="text-[#33312D] text-[1.5rem] font-bold tracking-wide">本日の「金」買取相場</h2>
                <span class="text-[#33312D] text-[18px] font-sans block mt-1">（1gあたり）</span>
            </div>

            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-x-0 gap-y-0  mx-auto noto-sans text-[clamp(14px,1.2vw,17px)]">
                <div class="divide-y divide-[#E3DCCE]">
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K24
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">25,070
                            <span class="text-[13px]"><span class="text-[13px]">円</span></span>
                        </div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K23
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">24,109
                            <span class="text-[13px]"><span class="text-[13px]">円</span></span>
                        </div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K22
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">23,048<span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K21.6
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">22,492<span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K20
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">20,571<span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K18
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">18,929<span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K17
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">16,680<span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K14
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">14,658<span
                                class="text-[13px]">円</span></div>
                    </div>
                </div>
                <div class="divide-y divide-[#E3DCCE] border-t border-[#E3DCCE] md:border-t-0">
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K12
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">11,372<span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K10
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">10,159<span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K9
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">9,123<span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K8
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">6,773<span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K7
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">6,318<span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K5
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">3,285<span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K18WG
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">18,904<span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K14WG
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">14,327<span
                                class="text-[13px]">円</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="text-center mb-6">
                <div class="w-20 h-auto mx-auto mb-2">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
                </div>
                <span
                    class="font-['EB_Garamond'] text-[#B57A3F] text-[15px] uppercase block mb-4 tracking-widest font-semibold">Platinum</span>
                <h2 class="text-[#33312D] text-[1.5rem] font-bold tracking-wide">本日の「プラチナ」買取相場</h2>
                <span class="text-[#33312D] text-[18px] font-sans block mt-1">（1gあたり）</span>
            </div>

            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-x-0 gap-y-0  mx-auto noto-sans text-[clamp(14px,1.2vw,17px)]">
                <div class="divide-y divide-[#E3DCCE]">
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#303E5F] text-[#FFFCF5] py-3 text-center font-bold tracking-wider">
                            Pt1000
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">10,575<span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#303E5F] text-[#FFFCF5] py-3 text-center font-bold tracking-wider">
                            Pt950
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">10,037<span
                                class="text-[13px]">円</span></div>
                    </div>
                </div>
                <div class="divide-y divide-[#E3DCCE] border-t border-[#E3DCCE] md:border-t-0">
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#303E5F] text-[#FFFCF5] py-3 text-center font-bold tracking-wider">
                            Pt900
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">9,800<span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#303E5F] text-[#FFFCF5] py-3 text-center font-bold tracking-wider">
                            Pt850
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">9,207<span
                                class="text-[13px]">円</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="text-center mb-6">
                <div class="w-20 h-auto mx-auto mb-2">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
                </div>
                <span
                    class="font-['EB_Garamond'] text-[#B57A3F] text-[15px] uppercase block mb-4 tracking-widest font-semibold">Silver</span>
                <h2 class="text-[#33312D] text-[1.5rem] font-bold tracking-wide">本日の「銀」買取相場</h2>
                <span class="text-[#33312D] text-[18px] font-sans block mt-1">（1gあたり）</span>
            </div>

            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-x-0 gap-y-0 mx-auto noto-sans text-[clamp(14px,1.2vw,17px)]">
                <div class="divide-y divide-[#E3DCCE]">
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#615C56] text-white py-3 text-center font-bold tracking-wider">
                            SV1000
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">410<span
                                class="text-[13px]">円</span></div>
                    </div>
                </div>
                <div class="divide-y divide-[#E3DCCE] border-t border-[#E3DCCE] md:border-t-0">
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 md:w-1/3 bg-[#615C56] text-white py-3 text-center font-bold tracking-wider">
                            SV925
                        </div>
                        <div class="w-1/2 md:w-2/3 py-3 px-6 text-center font-medium text-[#33312D]">379<span
                                class="text-[13px]">円</span></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<?php get_footer(); ?>