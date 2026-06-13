<?php

/**
 * Template Name: Front Page
 * TOP Page
 */

get_header();
?>

<section
    class="hero-banner relative min-h-[90vh] md:min-h-[80vh] flex items-stretch md:items-center bg-cover bg-no-repeat bg-[position:center_bottom] md:bg-right-center overflow-hidden"
    style="--bg-mobile: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/hero-banner-mobile.png'); --bg-desktop: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/hero-banner.png');">

    <div
        class="absolute inset-0 bg-gradient-to-b from-[#FFFCF5] via-[#FFFCF5]/90 to-transparent md:hidden pointer-events-none">
    </div>
    <div
        class="hidden md:block absolute inset-0 bg-gradient-to-r from-[#FFFCF5]/95 via-[#FFFCF5]/80 to-transparent md:from-[#FFFCF5]/80 md:via-[#FFFCF5]/40 md:to-transparent pointer-events-none">
    </div>

    <div class="relative w-full max-w-[1400px] mx-auto px-5 sm:px-6 lg:px-8 pt-10 pb-48 md:py-20 z-10">
        <div class="max-w-[640px]">

            <h1
                class="font-serif-jp text-[clamp(1.85rem,6.5vw,3.25rem)] text-[#33312D] font-bold leading-[1.45] tracking-wider mb-6 sm:mb-8">
                「観る」目と、<br />「向き合う」心と。
            </h1>

            <p
                class="text-[#B57A3F] font-serif-jp text-[clamp(1.05rem,4vw,1.45rem)] noto-serif font-semibold leading-relaxed tracking-wide mb-8 sm:mb-10">
                お品物の状態だけでなく、<br class="block sm:hidden" />その背景にある想いまで
            </p>

            <div
                class="text-[#615C56] font-medium noto-sans !font-medium text-[clamp(0.85rem,3vw,1rem)] leading-[1.8] space-y-4 mb-8 sm:mb-12 tracking-wide">
                <p>
                    業界的11年の査定員が必ず目の前でお品物と向き合います<br class="hidden lg:block" />
                    価格ではない、心からの最善をお届けする買取店です
                </p>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6">

                <a href="#"
                    class="bg-[#B57A3F] text-white flex items-center noto-sans justify-center space-x-1 px-4 py-4 sm:py-4.5 rounded-sm font-semibold tracking-wide shadow-md hover:bg-[#a06830] transition-colors duration-300 w-[250px] md:w-[250px] text-center">
                    <span class="text-[clamp(0.95rem,1.2vw,1.05rem)]">LINEで査定相談する</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>

                <a href="#"
                    class="bg-[#303E5F] text-white flex items-center justify-center space-x-2 px-4 py-4 sm:py-4.5 rounded-sm font-semibold tracking-wide shadow-md hover:bg-[#232e47] transition-colors duration-300 w-[220px]  md:w-[220px] text-center">
                    <span class="text-[clamp(0.95rem,1.2vw,1.05rem)]">買取品目をみる</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>

            </div>

        </div>
    </div>
</section>

<!-- Philosophy Section  -->

<section class="relative bg-[#FFFCF5] py-16 md:py-28 overflow-hidden font-serif-jp">

    <div
        class="absolute block lg:hidden right-[-20%] left-0 md:right-0 top-[59%] md:top-[28%] w-[76%] md:w-[34%] max-w-[700px] md:max-w-[600px] opacity-100 pointer-events-none z-0">
       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/philosophy-brand-logo.png" alt="" class="w-full h-auto object-contain" />
    </div>
    <div
        class="absolute hidden lg:block right-[-20%]  md:right-0 top-[59%] md:top-[28%] w-[76%] md:w-[34%] max-w-[700px] md:max-w-[600px] opacity-100 pointer-events-none z-0">
       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/philosophy-brand-logo.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="absolute left-[-1%] bottom-[-5%] w-[40%] md:w-[25%] max-w-[400px]  pointer-events-none z-0">
       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/traditional-grid-pattern.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[1100px] mx-auto px-5 sm:px-6 lg:px-8 z-10">

        <div class="text-center mb-16 md:mb-18">
            <h2
                class="font-['EB_Garamond'] text-[clamp(2.5rem,7vw,5.5rem)] font-medium text-[#EAE2D5] uppercase tracking-[0.15em] leading-none mb-5 lg:mb-4">
                Philosophy
            </h2>

            <h3 class="text-[#33312D] text-[clamp(1.2rem,4vw,2.25rem)] font-bold leading-[1.6] tracking-wide mb-6">
                「蔵」と「宮」の二文字に、<br />私たちのすべてが込められています。
            </h3>

            <p class="text-[#615C56] font-medium text-[clamp(1rem,2.5vw,0.95rem)] leading-[2] tracking-wider noto-sans">
                屋号「買取 蔵の宮（くらのみや）」は、<br class="block" />
                お客様のお品物と心に向き合うた <br class="block md:hidden">の誓いそのものです。
            </p>
        </div>

        <div class="flex flex-col gap-25 md:gap-10">

            <div
                class="kura-card relative w-[81%] md:w-[62%] bg-[#303E5F] bg-contain bg-no-repeat text-white p-8 md:p-12 shadow-xl"
                style="--bg-mobile: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/kura-bg-mobile.png'); --bg-desktop: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/kura-bg.png');">

                <div class="flex flex-col md:flex-row items-start gap-4 md:gap-6 mb-6 md:mb-8">
                    <span class="text-[clamp(2.75rem,8vw,4rem)] font-bold leading-none tracking-normal">蔵</span>
                    <div class="pt-1.5">
                        <h4
                            class="font-['EB_Garamond'] text-[#B57A3F] text-[clamp(24px,3vw,36px)] font-semibold uppercase tracking-widest leading-none mb-1">
                            Kura</h4>
                        <p class="text-[#B57A3F] text-[clamp(1rem,2.5vw,1.05rem)] noto-sans font-medium tracking-wider">
                            安心を提供する場所</p>
                    </div>
                </div>

                <div class="text-[clamp(14px,2.8vw,18px)] leading-[2] tracking-wide font-semibold space-y-2 opacity-95">
                    <p>プロが行う目の前での査定。</p>
                    <p>裏に持ち込まない誤魔化しの効かない環境。</p>
                    <p>お客様の大切なお品物と「買取」に対するイメージを守ります。</p>
                </div>
            </div>


            <div
                class="miya-card relative w-[81%] md:w-[62%] bg-[#303E5F] bg-contain bg-no-repeat text-white p-8 md:p-12 shadow-xl self-end"
                style="--bg-mobile: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/miya-bg-mobile.png'); --bg-desktop: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/miya-bg.png');">

                <div class="flex flex-col md:flex-row items-start gap-4 md:gap-6 mb-6 md:mb-8">
                    <span class="text-[clamp(2.75rem,8vw,4rem)] font-bold leading-none tracking-normal">宮</span>
                    <div class="pt-1.5">
                        <h4
                            class="font-['EB_Garamond'] text-[#B57A3F] text-[clamp(18px,3vw,36px)] font-semibold uppercase tracking-widest leading-none mb-1">
                            Miya</h4>
                        <p class="text-[#B57A3F] text-[clamp(0.85rem,2.5vw,1.05rem)] font-medium tracking-wider">感動と満足を提供するサービス
                        </p>
                    </div>
                </div>

                <div class="text-[clamp(14px,2.8vw,18px)] leading-[2] tracking-wide font-semibold space-y-2 opacity-95">
                    <p>11年以上の経験で培った知識と目利き技術に加え、</p>
                    <p>品物に込められた想い、お客様の心に寄り添った査定をします。</p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Reasons Section  -->

<section class="bg-[#F1ECE0] py-16 md:py-28 font-serif-jp overflow-hidden">
    <div class="max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8">

        <div class="text-center mb-16 md:mb-15">
            <h2
                class="font-['EB_Garamond'] text-[clamp(2.9rem,7vw,5.5rem)] font-medium text-[#FFFCF5] uppercase tracking-[0.15em] mb-5 md:mb-0 leading-none">
                Reasons
            </h2>
            <h3
                class="text-[#33312D] text-[clamp(1.35rem,4vw,2.25rem)] font-semibold leading-[1.1] md:leading-[1.5] tracking-wide mb-6">
                <span
                    class="text-[#33312D] text-[clamp(1.35rem,4vw,1.4rem)] font-semibold leading-[1.5] tracking-wide mb-6">買取
                </span>蔵の宮が選ばれる<br class="block md:hidden"><span
                    class="font-['EB_Garamond'] text-[clamp(60px,5vw,90px)] text-[#B57A3F] font-normal mx-1">5</span>つの理由
            </h3>
            <p class="text-[#615C56] font-medium text-[clamp(0.8rem,2.5vw,0.95rem)] leading-[2] tracking-wider noto-sans">
                お客様1人ひとりに誠実に向き合うために。<br class="block" />
                「買取 蔵の宮」には、大切にしている5つの <br class="block md:hidden" />約束があります。
            </p>
        </div>

        <div class="space-y-6 md:space-y-8">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">

                <div class="relative bg-[#FFFCF5] p-6 pt-0 sm:p-10 sm:pt-0 shadow-sm rounded-sm overflow-hidden">
                    <div class="flex items-end gap-4 mb-6 -mx-6 sm:-mx-10">
                        <div
                            class="bg-[#B57A3F] w-15 h-15 sm:w-18 sm:h-18 flex items-center justify-center text-white flex-shrink-0">
                           <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/reason-icon-1.svg" alt="" class="w-9 h-9 object-contain" />
                        </div>
                        <div class="flex items-baseline gap-2 font-['EB_Garamond'] text-[#B57A3F]">
                            <span class="text-[clamp(14px,2vw,18px)] uppercase tracking-widest font-normal">Reasons</span>
                            <span class="text-[clamp(40px,4vw,80px)] font-medium leading-none">01</span>
                        </div>
                    </div>

                    <h4 class="text-[#33312D] text-[clamp(18px,2.5vw,24px)] font-semibold tracking-[0.05em] mb-5">
                        業界歴11年以上の査定員が、必ず目の前で査定します
                    </h4>
                    <p class="text-[#615C56] text-[clamp(13.2px,2.2vw,16px)] leading-[1.8] noto-sans">
                        持ち込まれたお品物を一旦お預かりし、本部で査定する…。業界の慣行として広く使われている査定方法ですが、当店では行いません。<br
                            class="hidden md:block">11年の知識をもつ店主自身が、すべてのお品物をお客様の目の前で査定します。
                    </p>
                </div>

                <div class="relative bg-[#FFFCF5] p-6 pt-0 sm:p-10 sm:pt-0 shadow-sm rounded-sm overflow-hidden">
                    <div class="flex items-end gap-4 mb-6 -mx-6 sm:-mx-10">
                        <div
                            class="bg-[#B57A3F] w-15 h-15 sm:w-18 sm:h-18 flex items-center justify-center text-white flex-shrink-0">
                           <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/reason-icon-2.svg" alt="" class="w-8 h-8 object-contain" />
                        </div>
                        <div class="flex items-baseline gap-2 font-['EB_Garamond'] text-[#B57A3F]">
                            <span class="text-[clamp(14px,2vw,18px)] uppercase tracking-widest font-normal">Reasons</span>
                            <span class="text-[clamp(40px,4vw,80px)] font-medium leading-none">02</span>
                        </div>
                    </div>

                    <h4 class="text-[#33312D] text-[clamp(18px,2.5vw,24px)] font-semibold tracking-[0.05em] mb-5">
                        一品ずつ丁寧にご説明し、明細への記載も行います
                    </h4>
                    <p class="text-[#615C56] text-[clamp(13.2px,2.2vw,16px)] leading-[1.8] noto-sans">
                        なぜこの価格になるのか、査定額の根拠を一品ごとに丁寧にご説明し、明細書にもしっかり内容を記載いたします。
                    </p>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">

                <div class="relative bg-[#FFFCF5] p-6 pt-0 sm:p-8 sm:pt-0 shadow-sm rounded-sm overflow-hidden">
                    <div class="flex items-end gap-4 mb-5 -mx-6 sm:-mx-8">
                        <div
                            class="bg-[#B57A3F] w-15 h-15 sm:w-18 sm:h-18 flex items-center justify-center text-white flex-shrink-0">
                           <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/reason-icon-3.svg" alt="" class="w-8 h-8 object-contain" />
                        </div>
                        <div class="flex items-baseline gap-2 font-['EB_Garamond'] text-[#B57A3F]">
                            <span class="text-[clamp(14px,2vw,18px)] uppercase tracking-widest font-normal">Reasons</span>
                            <span class="text-[clamp(40px,4vw,80px)] font-medium leading-none">03</span>
                        </div>
                    </div>

                    <h4 class="text-[#33312D] text-[clamp(16px,2.5vw,20px)] font-semibold tracking-[0.05em] mb-5">
                        口コミはリアルな声だけ
                    </h4>
                    <p class="text-[#615C56] text-[clamp(13.2px,2.2vw,16px)] leading-[1.8] noto-sans">
                        業界にはびこる「購入した口コミ」は一切掲載しておりません。実際にご来店いただいたお客様のお言葉のみです。
                    </p>
                </div>

                <div class="relative bg-[#FFFCF5] p-6 pt-0 sm:p-8 sm:pt-0 shadow-sm rounded-sm overflow-hidden">
                    <div class="flex items-end gap-4 mb-5 -mx-6 sm:-mx-8">
                        <div
                            class="bg-[#B57A3F] w-15 h-15 sm:w-18 sm:h-18 flex items-center justify-center text-white flex-shrink-0">
                           <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/reason-icon-4.svg" alt="" class="w-8 h-8 object-contain" />
                        </div>
                        <div class="flex items-baseline gap-2 font-['EB_Garamond'] text-[#B57A3F]">
                            <span class="text-[clamp(14px,2vw,18px)] uppercase tracking-widest font-normal">Reasons</span>
                            <span class="text-[clamp(40px,4vw,80px)] font-medium leading-none">04</span>
                        </div>
                    </div>

                    <h4 class="text-[#33312D] text-[clamp(16px,2.5vw,20px)] font-semibold tracking-[0.05em] mb-5">
                        就活ガイド資格1級取得
                    </h4>
                    <p class="text-[#615C56] text-[clamp(13.2px,2.2vw,16px)] leading-[1.8] noto-sans">
                        税理士、行政書士からも相続品の査定依頼を受ける蔵の宮の店主。安心を第一に培った信頼と実績の土台があります。
                    </p>
                </div>

                <div class="relative bg-[#FFFCF5] p-6 pt-0 sm:p-8 sm:pt-0 shadow-sm rounded-sm overflow-hidden">
                    <div class="flex items-end gap-4 mb-5 -mx-6 sm:-mx-8">
                        <div
                            class="bg-[#B57A3F] w-15 h-15 sm:w-18 sm:h-18 flex items-center justify-center text-white flex-shrink-0">
                           <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/reason-icon-5.svg" alt="" class="w-8 h-8 object-contain" />
                        </div>
                        <div class="flex items-baseline gap-2 font-['EB_Garamond'] text-[#B57A3F]">
                            <span class="text-[clamp(14px,2vw,18px)] uppercase tracking-widest font-normal">Reasons</span>
                            <span class="text-[clamp(40px,4vw,80px)] font-medium leading-none">05</span>
                        </div>
                    </div>

                    <h4 class="text-[#33312D] text-[clamp(16px,2.5vw,20px)] font-semibold tracking-[0.05em] mb-5">
                        「売らない」選択もご提案
                    </h4>
                    <p class="text-[#615C56] text-[clamp(13.2px,2.2vw,16px)] leading-[1.8] noto-sans">
                        ご家族の思い出や思い入れあるお品。手元に残された方が良い場合は、率直にそうお伝えします。
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Story Section  -->

<section class="relative bg-[#303E5F] text-white py-16 md:py-28 font-serif-jp overflow-hidden">

    <div class="absolute right-0 top-0 w-[55%] md:w-[25%] max-w-[520px] pointer-events-none z-0">
       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/story-pattern-top.png" alt="" class="w-full h-auto object-contain transform rotate-180" />
    </div>

    <div class="absolute left-0 bottom-[-91px] w-[25%] md:w-[25%] max-w-[320px] pointer-events-none z-0">
       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/story-pattern-bottom.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[1240px] mx-auto px-0 sm:px-6 lg:px-8 z-10">

        <!-- Section Header -->
        <div class="text-left md:text-left px-5 sm:px-0 mb-12 md:mb-16">
            <h2
                class="font-['EB_Garamond'] text-[clamp(50px,8vw,128px)] font-medium text-[#B57A3F] uppercase tracking-[0.05em] leading-[1.2] md:leading-relaxed mb-4 md:mb-0">
                Story<br class="block md:hidden" /><span
                    class="text-[clamp(40px,4vw,64px)] font-normal tracking-wide uppercase md:ml-4">of one day</span>
            </h2>
            <h3 class="text-white text-[clamp(1.6rem,4vw,2rem)] font-bold leading-[1.5] tracking-wide mb-6 md:mb-10">
                お客様との思い出。
            </h3>
            <p class="text-white/80 text-[clamp(1.2rem,2.2vw,1.1rem)] leading-[1.8] tracking-wider noto-sans font-medium">
                「観る」という姿勢がお客様との間に生まれた、ある日の物語。<br class="hidden md:block" />お客様のお言葉とともにお届けします。
            </p>
        </div>

        <div class="relative px-5 sm:px-0">

            <button id="story-prev" type="button"
                class="absolute left-2 top-[32%] -translate-y-1/2 z-20 lg:hidden bg-white text-[#B57A3F] w-9 h-9 flex items-center justify-center shadow-md focus:outline-none"
                aria-label="Previous Slide">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button id="story-next" type="button"
                class="absolute right-2 top-[32%] -translate-y-1/2 z-20 lg:hidden bg-white text-[#B57A3F] w-9 h-9 flex items-center justify-center shadow-md focus:outline-none"
                aria-label="Next Slide">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            <div id="story-track"
                class="flex overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar lg:grid lg:grid-cols-3 gap-6 xl:gap-10 pb-3 lg:pb-0">

                <!-- CARD 01 -->
                <div
                    class="story-card w-[88vw] sm:w-[60vw] md:w-[50vw] lg:w-auto flex-shrink-0 snap-center bg-[#1D2B4B] shadow-lg rounded-sm overflow-hidden flex flex-col h-full mr-4 lg:mr-0">
                    <div class="relative w-full aspect-[16/10] overflow-hidden">
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/story-card-1.png" alt="「売らないで」と、申し上げた日" class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-2 text-[clamp(12px,2vw,14px)] font-['EB_Garamond'] tracking-[0.15em] uppercase font-medium">
                            Episode / <span class="text-[clamp(12px,2vw,18px)]">01</span>
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h4 class="text-[clamp(1.05rem,2.5vw,1.2rem)] font-bold leading-[1.6] tracking-wide mb-5 min-h-[3.2em]">
                            「売らないで」と、<br />申し上げた日
                        </h4>
                        <p class="text-white/80 text-[13px] sm:text-[14px] leading-[1.8] tracking-wide noto-sans mb-6 flex-grow">
                            ご遺品を持ち込まれたお客様。すべて現金化するおつもりでしたが、「それだけは手元にお残しになっては」とお伝えしました。
                        </p>
                        <div class="w-full h-[1px] bg-white/10 mb-5"></div>
                        <div class="font-sans">
                            <div
                                class="flex items-center gap-2 text-[#B57A3F] text-[clamp(12px,2vw,16px)] font-bold tracking-wider mb-2.5">
                                <span class="w-[2px] h-[12px] bg-[#B57A3F]"></span>
                                <span>お客様より</span>
                            </div>
                            <p class="text-white/90 text-[13px] sm:text-[14px] leading-[1.7] tracking-wide noto-sans">
                                あの時、「売らないで」と言ってくれてありがとう。母が一緒に…
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD 02 -->
                <div
                    class="story-card w-[88vw] sm:w-[60vw] md:w-[50vw] lg:w-auto flex-shrink-0 snap-center bg-[#1D2B4B] shadow-lg rounded-sm overflow-hidden flex flex-col h-full mr-4 lg:mr-0">
                    <div class="relative w-full aspect-[16/10] overflow-hidden">
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/story-card-2.png" alt="「観る目」が、信頼に変わった日" class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-2 text-[clamp(12px,2vw,14px)] font-['EB_Garamond'] tracking-[0.15em] uppercase font-medium">
                            Episode / <span class="text-[clamp(12px,2vw,18px)]">02</span>
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h4 class="text-[clamp(1.05rem,2.5vw,1.2rem)] font-bold leading-[1.6] tracking-wide mb-5 min-h-[3.2em]">
                            「観る目」が、<br />信頼に変わった日
                        </h4>
                        <p class="text-white/80 text-[13px] sm:text-[14px] leading-[1.8] tracking-wide noto-sans mb-6 flex-grow">
                            鑑別書のないお品をお持ちくださったご家族様。他店で「分からない」と言われ、半ば諦めておられました。<br class="hidden lg:block">1点ずつ丁寧に観察し、本物と判断してお伝えしました。
                        </p>
                        <div class="w-full h-[1px] bg-white/10 mb-5"></div>
                        <div class="font-sans">
                            <div
                                class="flex items-center gap-2 text-[#B57A3F] text-[clamp(12px,2vw,16px)] font-bold tracking-wider mb-2.5">
                                <span class="w-[2px] h-[12px] bg-[#B57A3F]"></span>
                                <span>お客様より</span>
                            </div>
                            <p class="text-white/90 text-[13px] sm:text-[14px] leading-[1.7] tracking-wide noto-sans">
                                鑑別書がなくても、ちゃんと観てくれるお店があるんですね。
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD 03 -->
                <div
                    class="story-card w-[88vw] sm:w-[60vw] md:w-[50vw] lg:w-auto flex-shrink-0 snap-center bg-[#1D2B4B] shadow-lg rounded-sm overflow-hidden flex flex-col h-full lg:mr-0">
                    <div class="relative w-full aspect-[16/10] overflow-hidden">
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/story-card-3.png" alt="捨てるはずだった置物に、もう一度光を当てた日" class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-2 text-[clamp(12px,2vw,14px)] font-['EB_Garamond'] tracking-[0.15em] uppercase font-medium">
                            Episode / <span class="text-[clamp(12px,2vw,18px)]">03</span>
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h4 class="text-[clamp(1.05rem,2.5vw,1.2rem)] font-bold leading-[1.6] tracking-wide mb-5 min-h-[3.2em]">
                            捨てるはずだった置物に、<br />もう一度光を当てた日
                        </h4>
                        <p class="text-white/80 text-[13px] sm:text-[14px] leading-[1.8] tracking-wide noto-sans mb-6 flex-grow">
                            古道具として処分の予定だったお品。もしかしたらと思い、念のためお持ちくださいました。<br class="hidden lg:block">細部の銘と時代背景を巡り、想像を超える価値をお伝えしました。
                        </p>
                        <div class="w-full h-[1px] bg-white/10 mb-5"></div>
                        <div class="font-sans">
                            <div
                                class="flex items-center gap-2 text-[#B57A3F] text-[clamp(12px,2vw,16px)] font-bold tracking-wider mb-2.5">
                                <span class="w-[2px] h-[12px] bg-[#B57A3F]"></span>
                                <span>お客様より</span>
                            </div>
                            <p class="text-white/90 text-[13px] sm:text-[14px] leading-[1.7] tracking-wide noto-sans">
                                捨てるところでした。きちんと観てくださる方ですね。
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div id="story-dots" class="flex items-center justify-center gap-3 mt-4 lg:hidden">
                <span class="w-2.5 h-2.5 bg-white rounded-full transition-all duration-300"></span>
                <span class="w-2.5 h-2.5 bg-white/40 rounded-full transition-all duration-300"></span>
                <span class="w-2.5 h-2.5 bg-white/40 rounded-full transition-all duration-300"></span>
            </div>

        </div>

    </div>
</section>

<!-- Items Section  -->

<section class="bg-[#FFFCF5] py-16 md:py-28 font-serif-jp overflow-hidden">
    <div class="max-w-[1240px] mx-auto px-0 sm:px-6 lg:px-8">

        <div class="text-center px-5 sm:px-0 mb-12 md:mb-16">
            <div class="w-30 h-auto mx-auto mb-4">
               <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
            </div>
            <span class="font-['EB_Garamond'] text-[#B57A3F] text-[20px] uppercase block mb-2">Items</span>
            <h2 class="text-[#33312D] text-[clamp(2rem,4vw,2.25rem)] font-bold tracking-wide">
                買取品目
            </h2>
        </div>

        <div class="relative px-5 sm:px-0 mb-12 md:mb-12">

            <button id="items-prev" type="button"
                class="absolute left-2 top-[35%] -translate-y-1/2 z-20 lg:hidden bg-[#B57A3F]/80 text-white w-9 h-9 flex items-center justify-center shadow-md focus:outline-none"
                aria-label="Previous Item">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button id="items-next" type="button"
                class="absolute right-2 top-[35%] -translate-y-1/2 z-20 lg:hidden bg-[#B57A3F]/80 text-white w-9 h-9 flex items-center justify-center shadow-md focus:outline-none"
                aria-label="Next Item">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <div id="items-track"
                class="flex overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar lg:grid lg:grid-cols-4 gap-6 xl:gap-8 pb-6 lg:pb-0">

                <div
                    class="item-card w-[85vw] sm:w-[45vw] lg:w-auto flex-shrink-0 snap-center bg-transparent flex flex-col mr-4 lg:mr-0">
                    <div class="relative w-full aspect-square mb-6">
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/item-1.png" alt="金・プラチナ・銀" class="w-full h-full object-contain mx-auto" />
                    </div>
                    <div class="relative  top-[-8%]">
                        <span
                            class="font-['EB_Garamond'] text-[#B57A3F] text-[15px] uppercase tracking-widest font-semibold block mb-1">Precious
                            Metal</span>
                        <h3 class="text-[#33312D] text-[1.35rem] font-bold leading-tight mb-6">金・プラチナ・銀</h3>
                        <a href="#"
                            class="absolute right-0 bottom-[calc(100%-2.2rem)] bg-[#B57A3F] text-white w-10 h-10 lg:w-8 lg:h-8 flex items-center justify-center rounded-xs shadow-sm hover:bg-[#a06830] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <p class="text-[#615C56] text-[15px] sm:text-[14px] leading-relaxed noto-sans !font-normal">
                            純度・重量を正確に計測。日々の地金相場と連動した価格で買い取ります。
                        </p>
                    </div>
                </div>

                <div
                    class="item-card w-[85vw] sm:w-[45vw] lg:w-auto flex-shrink-0 snap-center bg-transparent flex flex-col mr-4 lg:mr-0">
                    <div class="relative w-full aspect-square mb-6">
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/item-2.png" alt="時計" class="w-full h-full object-contain mx-auto" />
                    </div>
                    <div class="relative  top-[-8%]">
                        <span
                            class="font-['EB_Garamond'] text-[#B57A3F] text-[15px] uppercase tracking-widest font-semibold block mb-1">Watch</span>
                        <h3 class="text-[#33312D] text-[1.35rem] font-bold leading-tight mb-6">時計</h3>
                        <a href="#"
                            class="absolute right-0 bottom-[calc(100%-2.2rem)] bg-[#B57A3F] text-white w-10 h-10 lg:w-8 lg:h-8 flex items-center justify-center rounded-xs shadow-sm hover:bg-[#a06830] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <p class="text-[#615C56] text-[15px] sm:text-[14px] leading-relaxed noto-sans !font-normal">
                            ロレックス・オメガ等のブランド腕時計。アンティーク時計も買い取ります。
                        </p>
                    </div>
                </div>

                <div
                    class="item-card w-[85vw] sm:w-[45vw] lg:w-auto flex-shrink-0 snap-center bg-transparent flex flex-col mr-4 lg:mr-0">
                    <div class="relative w-full aspect-square mb-6">
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/item-3.png" alt="宝飾品" class="w-full h-full object-contain mx-auto" />
                    </div>
                    <div class="relative  top-[-8%]">
                        <span
                            class="font-['EB_Garamond'] text-[#B57A3F] text-[15px] uppercase tracking-widest font-semibold block mb-1">Jewelry</span>
                        <h3 class="text-[#33312D] text-[1.35rem] font-bold leading-tight mb-6">宝飾品</h3>
                        <a href="#"
                            class="absolute right-0 bottom-[calc(100%-2.2rem)] bg-[#B57A3F] text-white w-10 h-10 lg:w-8 lg:h-8 flex items-center justify-center rounded-xs shadow-sm hover:bg-[#a06830] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <p class="text-[#615C56] text-[15px] sm:text-[14px] leading-relaxed noto-sans !font-normal">
                            ダイヤモンド・貴石・真珠等、ノンブランドもお気軽にお持ち込みください。
                        </p>
                    </div>
                </div>

                <div class="item-card w-[85vw] sm:w-[45vw] lg:w-auto flex-shrink-0 snap-center bg-transparent flex flex-col">
                    <div class="relative w-full aspect-square mb-6">
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/item-4.png" alt="ブランド品" class="w-full h-full object-contain mx-auto" />
                    </div>
                    <div class="relative  top-[-8%]">
                        <span
                            class="font-['EB_Garamond'] text-[#B57A3F] text-[15px] uppercase tracking-widest font-semibold block mb-1">Brand</span>
                        <h3 class="text-[#33312D] text-[1.35rem] font-bold leading-tight mb-6">ブランド品</h3>
                        <a href="#"
                            class="absolute right-0 bottom-[calc(100%-2.2rem)] bg-[#B57A3F] text-white w-10 h-10 lg:w-8 lg:h-8 flex items-center justify-center rounded-xs shadow-sm hover:bg-[#a06830] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <p class="text-[#615C56] text-[15px] sm:text-[14px] leading-relaxed noto-sans !font-normal">
                            バッグ・財布・アパレル等、状態をしっかり確認し適正査定をいたします。
                        </p>
                    </div>
                </div>

            </div>

            <div id="items-dots" class="flex items-center justify-center gap-3 mt-6 lg:hidden">
                <span class="w-2.5 h-2.5 bg-[#B57A3F] rounded-full transition-all duration-300"></span>
                <span class="w-2.5 h-2.5 bg-[#B57A3F]/30 rounded-full transition-all duration-300"></span>
                <span class="w-2.5 h-2.5 bg-[#B57A3F]/30 rounded-full transition-all duration-300"></span>
                <span class="w-2.5 h-2.5 bg-[#B57A3F]/30 rounded-full transition-all duration-300"></span>
            </div>

        </div>

        <div class="bg-[#F1ECE0] rounded-sm p-6 sm:p-10 md:p-14 m-4 lg:mx-auto mx-5 sm:mx-auto">
            <h3 class="text-[#33312D] text-center text-[clamp(1.1rem,3vw,1.35rem)] font-bold mb-4">
                その他、幅広い品目に対応しております
            </h3>
            <div class="w-16 h-[1.5px] bg-[#B57A3F] mx-auto mb-8"></div>

            <div
                class="flex flex-wrap justify-center gap-2.5 sm:gap-3 max-w-[800px] mx-auto text-[13px] sm:text-[14px] font-sans text-[#33312D]">
                <span class="bg-white px-5 py-2.5 border border-[#E3DCCE] shadow-xs rounded-xs">カメラ</span>
                <span class="bg-white px-5 py-2.5 border border-[#E3DCCE] shadow-xs rounded-xs">古銭</span>
                <span class="bg-white px-5 py-2.5 border border-[#E3DCCE] shadow-xs rounded-xs">ホビー</span>
                <span class="bg-white px-5 py-2.5 border border-[#E3DCCE] shadow-xs rounded-xs">お酒</span>
                <span class="bg-white px-5 py-2.5 border border-[#E3DCCE] shadow-xs rounded-xs">ライター</span>
                <span class="bg-white px-5 py-2.5 border border-[#E3DCCE] shadow-xs rounded-xs">メッキアクセサリー</span>
                <span class="bg-white px-5 py-2.5 border border-[#E3DCCE] shadow-xs rounded-xs">切手</span>
                <span class="bg-white px-5 py-2.5 border border-[#E3DCCE] shadow-xs rounded-xs">テレカ</span>
                <span class="bg-white px-5 py-2.5 border border-[#E3DCCE] shadow-xs rounded-xs">金券</span>
                <span class="bg-white px-5 py-2.5 border border-[#E3DCCE] shadow-xs rounded-xs">骨董品</span>
                <span class="bg-white px-5 py-2.5 border border-[#E3DCCE] shadow-xs rounded-xs">スマートフォン</span>
                <span class="bg-white px-5 py-2.5 border border-[#E3DCCE] shadow-xs rounded-xs">香水・コスメ</span>
                <span class="bg-white px-5 py-2.5 border border-[#E3DCCE] shadow-xs rounded-xs">楽器</span>
                <span class="bg-white px-5 py-2.5 border border-[#E3DCCE] shadow-xs rounded-xs">ブランド食器</span>
            </div>
        </div>

        <div class="text-center mt-12 md:mt-16 px-5">
            <a href="#"
                class="bg-[#B57A3F] text-white inline-flex items-center justify-center space-x-3 px-10 py-4 sm:py-4.5 font-medium shadow-md hover:bg-[#a06830] transition-color w-[320px] sm:w-[320px]">
                <span class="text-[15px] font-semibold tracking-wider">すべての品目をみる</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>

    </div>
</section>

<!-- Achivements Section  -->

<section class="relative bg-[#F1ECE0] py-16 md:py-28 font-serif-jp overflow-hidden">
    <div class="absolute right-0 top-0 w-[55%] md:w-[25%] max-w-[520px] pointer-events-none z-0">
       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ach-pattern-top.png" alt="" class="w-full h-auto object-contain transform rotate-180" />
    </div>
    <div class="absolute left-0 bottom-0 w-[45%] md:w-[25%] max-w-[320px] pointer-events-none z-0">
       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ach-pattern-bottom.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[1240px] mx-auto px-0 sm:px-6 lg:px-8 z-10">
        <div class="text-center px-5 sm:px-0 mb-12 md:mb-16">
            <div class="w-30 h-auto mx-auto mb-4">
               <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
            </div>
            <span
                class="font-['EB_Garamond'] text-[#B57A3F] text-[20px] uppercase block mb-2 tracking-[0.1em]">Achievements</span>
            <h2 class="text-[#33312D] text-[clamp(2rem,4vw,2.25rem)] font-bold tracking-wide">
                買取実績
            </h2>
        </div>
        <div class="relative px-5 sm:px-0 mb-12 md:mb-12">
            <button id="achievements-prev" type="button"
                class="absolute left-2 top-[30%] -translate-y-1/2 z-20 lg:hidden bg-[#B57A3F]/80 text-white w-9 h-9 flex items-center justify-center shadow-md focus:outline-none"
                aria-label="Previous Achievement">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="achievements-next" type="button"
                class="absolute right-2 top-[30%] -translate-y-1/2 z-20 lg:hidden bg-[#B57A3F]/80 text-white w-9 h-9 flex items-center justify-center shadow-md focus:outline-none"
                aria-label="Next Achievement">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            <div id="achievements-track"
                class="flex overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar lg:grid lg:grid-cols-3 gap-6 xl:gap-8 pb-6 lg:pb-0">

                <!-- CARD 01: WATCH -->
                <div
                    class="achievement-card w-[90vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#FFFCF5] shadow-sm flex flex-col mr-0 lg:mr-0">
                    <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/achievement-1.png" alt="ロレックス デイトジャスト 16233" class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#303E5F] text-white px-5 py-2 text-[16px] tracking-wider noto-sans font-medium">
                            時計
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h3 class="text-[#33312D] text-[1.2rem] font-bold tracking-wide leading-snug min-h-[2.4em]">
                            ロレックス デイトジャスト 16233
                        </h3>
                        <div class="flex items-baseline text-[#33312D] mb-5">
                            <span class="text-[16px] font-medium noto-sans mr-2 font-sans text-[#615C56]">買取価格</span>
                            <span
                                class="text-[clamp(1.5rem,3vw,2.3rem)] font-['EB_Garamond'] font- font-medium tracking-wide">550,000</span>
                            <span class="text-[15px] font-bold ml-0.5">円</span>
                        </div>
                        <div class="w-full h-[1px] bg-[#EAE2D5] mb-5"></div>
                        <p class="text-[#615C56] text-[14px] leading-[1.75] noto-sans !font-normal tracking-wide flex-grow mb-6">
                            長くお使いになった一本。傷の中にも丁寧に時を刻まれた品の良さがありました。<br class="hidden md:block">機械の調子と相場を踏まえ、お客様にご納得いただける査定額をお伝えしました。
                        </p>
                        <span class="text-[#B57A3F] noto-sans text-[16px] font-medium tracking-wider block">2026.04</span>
                    </div>
                </div>

                <!-- CARD 02: JEWELRY -->
                <div
                    class="achievement-card w-[90vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#FFFCF5] shadow-sm flex flex-col lg:mr-0">
                    <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/achievement-2.png" alt="金属アクセサリー 一式" class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#303E5F] text-white px-5 py-2 text-[14px] tracking-wider font-medium">
                            宝飾品
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h3 class="text-[#33312D] text-[1.2rem] font-bold tracking-wide leading-snug min-h-[2.4em]">
                            金属アクセサリー 一式
                        </h3>
                        <div class="flex items-baseline text-[#33312D] mb-5">
                            <span class="text-[16px] font-medium noto-sans mr-2 font-sans text-[#615C56]">買取価格</span>
                            <span
                                class="text-[clamp(1.5rem,3vw,2.3rem)] font-['EB_Garamond'] font- font-medium tracking-wide">1,294,872</span>
                            <span class="text-[15px] font-bold ml-0.5">円</span>
                        </div>
                        <div class="w-full h-[1px] bg-[#EAE2D5] mb-5"></div>
                        <p class="text-[#615C56] text-[14px] leading-[1.75] noto-sans !font-normal tracking-wide flex-grow mb-6">
                            ご結婚当時にお揃えになった品々とお伺いしました。<br class="hidden md:block">一点一点純度と重量を計測しながら、お話を伺いつつ、丁寧にさてさせていただきました。
                        </p>
                        <span class="text-[#B57A3F] noto-sans text-[16px] font-medium tracking-wider block">2026.04</span>
                    </div>
                </div>

                <!-- CARD 03: PRECIOUS METALS -->
                <div
                    class="achievement-card w-[90vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#FFFCF5] shadow-sm flex flex-col">
                    <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/achievement-3.png" alt="金歯・銀歯" class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#303E5F] text-white px-5 py-2 text-[14px] tracking-wider font-medium">
                            金・銀
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow">
                        <h3 class="text-[#33312D] text-[1.2rem] font-bold tracking-wide leading-snug min-h-[2.4em]">
                            金歯・銀歯
                        </h3>
                        <div class="flex items-baseline text-[#33312D] mb-5">
                            <span class="text-[16px] font-medium noto-sans mr-2 font-sans text-[#615C56]">買取価格</span>
                            <span
                                class="text-[clamp(1.5rem,3vw,2.3rem)] font-['EB_Garamond'] font- font-medium tracking-wide">114,567</span>
                            <span class="text-[15px] font-bold ml-0.5">円</span>
                        </div>
                        <div class="w-full h-[1px] bg-[#EAE2D5] mb-5"></div>
                        <p class="text-[#615C56] text-[14px] leading-[1.75] noto-sans !font-normal tracking-wide flex-grow mb-6">
                            歯科医院よりお受け取りになった金歯・銀歯。地金として精錬する形での組成の純度を確認し、当日の相場に基づき算定したうえでお伝えしました。
                        </p>
                        <span class="text-[#B57A3F] noto-sans text-[16px] font-medium tracking-wider block">2026.04</span>
                    </div>
                </div>

            </div>


            <div id="achievements-dots" class="flex items-center justify-center gap-3 mt-6 lg:hidden">
                <span class="w-2.5 h-2.5 bg-[#B57A3F] rounded-full transition-all duration-300"></span>
                <span class="w-2.5 h-2.5 bg-[#B57A3F]/30 rounded-full transition-all duration-300"></span>
                <span class="w-2.5 h-2.5 bg-[#B57A3F]/30 rounded-full transition-all duration-300"></span>
            </div>

        </div>

        <div class="text-center mt-12 md:mt-16 px-5">
            <a href="#"
                class="bg-[#B57A3F] text-white inline-flex items-center justify-center space-x-3 px-10 py-4 sm:py-4.5 font-medium shadow-md hover:bg-[#a06830] transition-colors w-[300px]">
                <span class="text-[18px] noto-sans font-semibold tracking-wider">実績一覧をみる</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>

    </div>
</section>

<!-- Market Rate Section  -->

<section class="bg-[#FFFCF5] py-16 md:py-28 font-serif-jp overflow-hidden">
    <div class="max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8">

        <div class="text-center mb-8 md:mb-10">
            <div class="w-30 h-auto mx-auto mb-4">
               <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
            </div>
            <span class="font-['EB_Garamond'] text-[#B57A3F] text-[20px] uppercase block mb-2 tracking-[0.1em]">Market
                Rate</span>
            <h2 class="text-[#33312D] text-[clamp(1.75rem,4vw,2.25rem)] font-bold tracking-wide">
                今日の金相場
            </h2>
        </div>

        <div
            class="text-left md:text-center text-[#33312D] text-[clamp(0.85rem,2.5vw,1rem)] leading-[1.8] tracking-wider noto-sans !font-medium max-w-[800px] mx-auto mb-8 space-y-2">
            <p>業界標準価格に基づき、毎日自動で更新しています。<br class="block md:hidden"></p>
            <p>金・プラチナ・銀の3種類について、買取参考価格を併記しています。</p>
        </div>

        <div
            class="bg-[#F1ECE0] max-w-[560px] mx-auto p-3.5 sm:p-4 text-center text-[13px] sm:text-[14px] tracking-wide mb-12 sm:mb-16 font-sans text-[#33312D]">
            <div class="flex flex-col sm:flex-row items-center justify-center gap-2 sm:gap-4">
                <div>
                    <span class="text-[#B57A3F] font-semibold mr-2">最終更新</span>
                    <span class="text-[#615C56]">2026年5月5日 9:00 AM</span>
                </div>
                <span class="hidden sm:inline text-gray-300">|</span>
                <div>
                    <span class="text-[#B57A3F] font-semibold mr-2">情報元</span>
                    <span class="text-[#615C56]">業界標準価格</span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 max-w-[1100px] mx-auto mb-10 sm:mb-12">

            <!-- CARD 01: GOLD -->
            <div
                class="relative bg-[#F1ECE0] p-6 sm:p-8 border-t-[3px] border-[#B57A3F] flex justify-between items-start min-h-[170px] sm:min-h-[190px]">
                <div class="flex flex-col justify-between h-full">
                    <div>
                        <span
                            class="font-['EB_Garamond'] text-[#B57A3F] text-[14px] uppercase tracking-widest font-semibold block mb-1">Gold</span>
                        <h3 class="text-[#33312D] text-[1.5rem] font-bold leading-none mb-6">金</h3>
                    </div>
                    <div>
                        <div class="flex items-baseline text-[#33312D] mb-2 whitespace-nowrap">
                            <span class="text-[2rem] font-medium  font-['EB_Garamond'] tracking-tight leading-none">13,486</span>
                            <span class="text-[14px] font-bold ml-0.5 mr-2">円</span>
                            <span class="text-[#B57A3F] font-sans text-[15px] font-semibold tracking-wide">(前日比 +84円)</span>
                        </div>
                        <span class="bg-[#F1ECE0] text-[#615C56] font-sans text-[14px] block]">1gあたり買取価格</span>
                    </div>
                </div>
                <div class="w-24 sm:w-30 aspect-square ml-2">
                   <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/market-item-1.png" alt="金" class="w-full h-full object-contain" />
                </div>
            </div>

            <!-- CARD 02: PLATINUM -->
            <div
                class="relative bg-[#F1ECE0] p-6 sm:p-8 border-t-[3px] border-[#B57A3F] flex justify-between items-start min-h-[170px] sm:min-h-[190px]">
                <div class="flex flex-col justify-between h-full">
                    <div>
                        <span
                            class="font-['EB_Garamond'] text-[#B57A3F] text-[14px] uppercase tracking-widest font-semibold block mb-1">Platinum</span>
                        <h3 class="text-[#33312D] text-[1.5rem] font-bold leading-none mb-6">プラチナ</h3>
                    </div>
                    <div>
                        <div class="flex items-baseline text-[#33312D] mb-2 whitespace-nowrap">
                            <span class="text-[2rem] font-medium  font-['EB_Garamond'] tracking-tight leading-none">5,920</span>
                            <span class="text-[14px] font-bold ml-0.5 mr-2">円</span>
                            <span class="text-[#B57A3F] font-sans text-[15px] font-semibold tracking-wide">(前日比 +32円)</span>
                        </div>
                        <span class="bg-[#F1ECE0] text-[#615C56] font-sans text-[14px] block]">1gあたり買取価格</span>
                    </div>
                </div>
                <div class="w-24 sm:w-30 aspect-square ml-2">
                   <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/market-item-2.png" alt="プラチナ" class="w-full h-full object-contain" />
                </div>
            </div>

            <!-- CARD 03: SILVER -->
            <div
                class="relative bg-[#F1ECE0] p-6 sm:p-8 border-t-[3px] border-[#B57A3F] flex justify-between items-start min-h-[170px] sm:min-h-[190px]">
                <div class="flex flex-col justify-between h-full">
                    <div>
                        <span
                            class="font-['EB_Garamond'] text-[#B57A3F] text-[14px] uppercase tracking-widest font-semibold block mb-1">Silver</span>
                        <h3 class="text-[#33312D] text-[1.5rem] font-bold leading-none mb-6">銀</h3>
                    </div>
                    <div>
                        <div class="flex items-baseline text-[#33312D] mb-2 whitespace-nowrap">
                            <span class="text-[2rem] font-medium  font-['EB_Garamond'] tracking-tight leading-none">168</span>
                            <span class="text-[14px] font-bold ml-0.5 mr-2">円</span>

                            <span class="text-[#B57A3F] font-sans text-[15px] font-semibold tracking-wide">(前日比 -1円)</span>
                        </div>
                        <span class="bg-[#F1ECE0] text-[#615C56] font-sans text-[14px] block]">1gあたり買取価格</span>
                    </div>
                </div>
                <div class="w-24 sm:w-30 aspect-square ml-2">
                   <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/market-item-3.png" alt="銀" class="w-full h-full object-contain" />
                </div>
            </div>

        </div>

        <p
            class="text-center text-[#615C56] text-[14px] noto-sans sm:text-[13px] leading-relaxed tracking-wider mb-12 px-4 max-w-[900px] mx-auto">
            ※ 表示価格は店頭買取の参考価格です。純度・状態により実際の査定額は変動します。
        </p>
        <div class="text-center px-5">
            <a href="#"
                class="bg-[#B57A3F] text-white inline-flex items-center justify-center space-x-3 px-10 py-4 font-medium shadow-md hover:bg-[#a06830] transition-colors w-[250px] md:w-[300px]">
                <span class=" text-[16px] md:text-[18px] noto-sans font-semibold tracking-wider">相場詳細をみる</span>
                <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
            </a>
        </div>

    </div>
</section>

<!-- Column Section  -->

<section class="relative bg-[#303E5F] text-white py-16 md:py-28 font-serif-jp overflow-hidden">
    <div class="absolute left-0 top-0 w-[55%] md:w-[25%] max-w-[370px] pointer-events-none z-0">
       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/column-grid.png" alt="" class="w-full h-auto object-contain" />
    </div>
    <div
        class="absolute right-[-15%] md:right-[-0%] top-[0%] h-full w-[135%] !lg:w-[65%] md:w-[40%]  pointer-events-none z-0">
       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/column-pattern-side.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[1240px] mx-auto px-0 sm:px-6 lg:px-8 z-10">
        <div class="text-center px-5 sm:px-0 mb-12 md:mb-16">
            <div class="w-30 h-auto mx-auto mb-4">
               <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
            </div>
            <span
                class="font-['EB_Garamond'] text-[#B57A3F] text-[20px] uppercase block mb-2 tracking-[0.1em]">Column</span>
            <h2 class="text-white text-[clamp(2rem,4vw,2.25rem)] font-bold tracking-wide">
                コラム
            </h2>
        </div>

        <!-- CAROUSEL SLIDER WRAPPER CONTAINER -->
        <div class="relative px-5 sm:px-0 mb-12 md:mb-12">
            <button id="column-prev" type="button"
                class="absolute left-2 top-[30%] -translate-y-1/2 z-20 lg:hidden bg-white text-[#B57A3F] w-9 h-9 flex items-center justify-center shadow-md focus:outline-none"
                aria-label="Previous Column">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button id="column-next" type="button"
                class="absolute right-2 top-[30%] -translate-y-1/2 z-20 lg:hidden bg-white text-[#B57A3F] w-9 h-9 flex items-center justify-center shadow-md focus:outline-none"
                aria-label="Next Column">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <div id="column-track"
                class="flex overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar lg:grid lg:grid-cols-3 gap-6 xl:gap-8 pb-6 lg:pb-0">

                <!-- COLUMN CARD 01 -->
                <div
                    class="column-card w-[90vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#1D2B4B] shadow-lg rounded-sm overflow-hidden flex flex-col mr-4 lg:mr-0">
                    <div class="relative w-full aspect-[5/3] overflow-hidden bg-[#24314F]">
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/column-img-1.png" alt="「観る」という言葉に込めた、私たちの姿勢について" class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-2 text-[13px] font-['EB_Garamond'] tracking-[0.1em] uppercase font-medium">
                            Store
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow justify-between min-h-[140px] lg:min-h-[180px]">
                        <h3
                            class="text-white text-[clamp(1.05rem,2.2vw,1.25rem)] font-bold tracking-wide leading-[1.6] mb-1 lg:mb-6">
                            「観る」という言葉に込めた、<br />私たちの姿勢について
                        </h3>
                        <span class="text-[#B57A3F] noto-sans text-[16px] font-medium tracking-wider block">2026.05.01</span>
                    </div>
                </div>

                <!-- COLUMN CARD 02 -->
                <div
                    class="column-card w-[90vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#1D2B4B] shadow-lg rounded-sm overflow-hidden flex flex-col mr-4 lg:mr-0">
                    <div class="relative w-full aspect-[5/3] overflow-hidden bg-[#24314F]">
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/column-img-2.png" alt="査定員の日常から見る価値あるお品物の共通点" class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-2 text-[13px] font-['EB_Garamond'] tracking-[0.1em] uppercase font-medium">
                            Gold
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow justify-between min-h-[140px] lg:min-h-[180px]">
                        <h3
                            class="text-white text-[clamp(1.05rem,2.2vw,1.25rem)] font-bold tracking-wide leading-[1.6] mb-1 lg:mb-6">
                            査定員の日常から見る<br />価値あるお品物の共通点
                        </h3>
                        <span class="text-[#B57A3F] noto-sans text-[16px] font-medium tracking-wider block">2026.04.18</span>
                    </div>
                </div>

                <!-- COLUMN CARD 03 -->
                <div
                    class="column-card w-[90vw] sm:w-[55vw] lg:w-auto flex-shrink-0 snap-center bg-[#1D2B4B] shadow-lg rounded-sm overflow-hidden flex flex-col">
                    <div class="relative w-full aspect-[5/3] overflow-hidden bg-[#24314F]">
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/column-img-3.png" alt="大切な遺品を整理するタイミングとその方法について" class="w-full h-full object-cover" />
                        <div
                            class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-2 text-[13px] font-['EB_Garamond'] tracking-[0.1em] uppercase font-medium">
                            Story
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow justify-between min-h-[140px] lg:min-h-[180px]">
                        <h3
                            class="text-white text-[clamp(1.05rem,2.2vw,1.25rem)] font-bold tracking-wide leading-[1.6] mb-1 lg:mb-6">
                            大切な遺品を整理する<br />タイミングとその方法について
                        </h3>
                        <span class="text-[#B57A3F] noto-sans text-[16px] font-medium tracking-wider block">2026.04.05</span>
                    </div>
                </div>

            </div>
            <div id="column-dots" class="flex items-center justify-center gap-3 mt-6 lg:hidden">
                <span class="w-2.5 h-2.5 bg-white rounded-full transition-all duration-300"></span>
                <span class="w-2.5 h-2.5 bg-white/40 rounded-full transition-all duration-300"></span>
                <span class="w-2.5 h-2.5 bg-white/40 rounded-full transition-all duration-300"></span>
            </div>

        </div>
        <div class="text-center mt-12 md:mt-16 px-5">
            <a href="#"
                class="bg-[#B57A3F] hidden lg:inline-flex text-white inline-flex items-center justify-center space-x-3 px-10 py-4 font-medium shadow-md hover:bg-[#a06830] transition-colors w-[300px]">
                <span class="text-[16px] md:text-[18px] noto-sans font-semibold tracking-wider">コラム一覧をみる</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>

    </div>
</section>

<!-- FAQ Section  -->

<section class="relative bg-[#FFFCF5] py-16 md:py-28 font-serif-jp overflow-hidden">

    <div class="absolute left-[-5%] top-0 w-[45%] md:w-[35%] pointer-events-none z-0">
       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/faq-grid.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[1200px] mx-auto px-5 sm:px-6 lg:px-8 z-10">

        <div class="text-center mb-12 md:mb-10">
            <div class="w-30 h-auto mx-auto mb-4">
               <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
            </div>
            <span class="font-['EB_Garamond'] text-[#B57A3F] text-[20px] uppercase block mb-2 tracking-[0.1em]">Faq</span>
            <h2 class="text-[#33312D] text-[clamp(2rem,4vw,2.25rem)] font-bold tracking-wide">
                よくあるご質問
            </h2>
        </div>

        <div
            class="text-center text-[#33312D] text-[clamp(0.85rem,2.5vw,1rem)] leading-[1.8] tracking-wider noto-sans !font-medium max-w-[800px] mx-auto mb-12 sm:mb-16 space-y-2">
            <p>ご来店前のご不安を、少しでも解消できればと思います。</p>
            <p>掲載内容以外のご質問に関しましては、お電話またはLINEでお気軽にお問い合わせください。</p>
        </div>

        <div class="relative space-y-5 mx-auto">
            <div class="absolute right-[-8%] top-[-46%] w-[25%] aspect-square pointer-events-none z-0 hidden sm:block">
               <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/faq-pattern-top.png" alt="" class="w-full h-auto object-contain transform" />
            </div>

            <div
                class="faq-item bg-[#F1ECE0] border border-[#E3DCCE]/40 rounded-none overflow-hidden relative z-10 shadow-xs">
                <button type="button"
                    class="faq-trigger w-full flex items-center justify-between p-5 sm:p-6 text-left focus:outline-none group">
                    <div class="flex items-center space-x-4 pr-6">
                        <span
                            class="bg-[#303E5F] text-white font-['EB_Garamond'] text-[18px] sm:text-[20px] w-10 h-10 flex items-center justify-center flex-shrink-0 font-medium">Q</span>
                        <h3 class="text-[#33312D] text-[14px] sm:text-[16px] font-bold noto-sans tracking-wide leading-tight">
                            本当に査定だけでも大丈夫ですか？（仮）
                        </h3>
                    </div>
                    <span
                        class="faq-icon text-[#303E5F] font-light text-[22px] tracking-none transform transition-transform duration-300 select-none">—</span>
                </button>

                <div class="faq-panel max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="p-5 sm:p-6 pt-4  border-t border-[#E3DCCE]/60 flex items-start space-x-4">
                        <span
                            class="bg-[#B57A3F] text-white font-['EB_Garamond'] text-[18px] sm:text-[20px] w-10 h-10 flex items-center justify-center flex-shrink-0 font-medium">A</span>
                        <p class="text-[#615C56] text-[13px] sm:text-[14px] leading-[1.8] tracking-wide noto-sans pt-1.5">
                            こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="faq-item bg-[#F1ECE0] border border-[#E3DCCE]/40 rounded-none overflow-hidden relative z-10 shadow-xs">
                <button type="button"
                    class="faq-trigger w-full flex items-center justify-between p-5 sm:p-6 text-left focus:outline-none group">
                    <div class="flex items-center space-x-4 pr-6">
                        <span
                            class="bg-[#303E5F] text-white font-['EB_Garamond'] text-[18px] sm:text-[20px] w-10 h-10 flex items-center justify-center flex-shrink-0 font-medium">Q</span>
                        <h3 class="text-[#33312D] text-[14px] sm:text-[16px] font-bold noto-sans tracking-wide leading-tight">
                            事前に予約は必要ですか？（仮）
                        </h3>
                    </div>
                    <span class="faq-icon text-[#303E5F] font-light text-[22px] select-none">—</span>
                </button>
                <div class="faq-panel max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="p-5 sm:p-6 pt-4  border-t border-[#E3DCCE]/60 flex items-start space-x-4">
                        <span
                            class="bg-[#B57A3F] text-white font-['EB_Garamond'] text-[18px] sm:text-[20px] w-10 h-10 flex items-center justify-center flex-shrink-0 font-medium">A</span>
                        <p class="text-[#615C56] text-[13px] sm:text-[14px] leading-[1.8] tracking-wide noto-sans pt-1.5">
                            こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="faq-item bg-[#F1ECE0] border border-[#E3DCCE]/40 rounded-none overflow-hidden relative z-10 shadow-xs">
                <button type="button"
                    class="faq-trigger w-full flex items-center justify-between p-5 sm:p-6 text-left focus:outline-none group">
                    <div class="flex items-center space-x-4 pr-6">
                        <span
                            class="bg-[#303E5F] text-white font-['EB_Garamond'] text-[18px] sm:text-[20px] w-10 h-10 flex items-center justify-center flex-shrink-0 font-medium">Q</span>
                        <h3 class="text-[#33312D] text-[14px] sm:text-[16px] font-bold noto-sans tracking-wide leading-tight">
                            どんなものが買取可能ですか？（仮）
                        </h3>
                    </div>
                    <span class="faq-icon text-[#303E5F] font-light text-[22px] select-none">—</span>
                </button>
                <div class="faq-panel max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="p-5 sm:p-6 pt-4  border-t border-[#E3DCCE]/60 flex items-start space-x-4">
                        <span
                            class="bg-[#B57A3F] text-white font-['EB_Garamond'] text-[18px] sm:text-[20px] w-10 h-10 flex items-center justify-center flex-shrink-0 font-medium">A</span>
                        <p class="text-[#615C56] text-[13px] sm:text-[14px] leading-[1.8] tracking-wide noto-sans pt-1.5">
                            こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="faq-item bg-[#F1ECE0] border border-[#E3DCCE]/40 rounded-none overflow-hidden relative z-10 shadow-xs">
                <button type="button"
                    class="faq-trigger w-full flex items-center justify-between p-5 sm:p-6 text-left focus:outline-none group">
                    <div class="flex items-center space-x-4 pr-6">
                        <span
                            class="bg-[#303E5F] text-white font-['EB_Garamond'] text-[18px] sm:text-[20px] w-10 h-10 flex items-center justify-center flex-shrink-0 font-medium">Q</span>
                        <h3 class="text-[#33312D] text-[14px] sm:text-[16px] font-bold noto-sans tracking-wide leading-tight">
                            買取の際に必要なものはありますか？（仮）
                        </h3>
                    </div>
                    <span class="faq-icon text-[#303E5F] font-light text-[22px] select-none">—</span>
                </button>
                <div class="faq-panel max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="p-5 sm:p-6 pt-4  border-t border-[#E3DCCE]/60 flex items-start space-x-4">
                        <span
                            class="bg-[#B57A3F] text-white font-['EB_Garamond'] text-[18px] sm:text-[20px] w-10 h-10 flex items-center justify-center flex-shrink-0 font-medium">A</span>
                        <p class="text-[#615C56] text-[13px] sm:text-[14px] leading-[1.8] tracking-wide noto-sans pt-1.5">
                            こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります Muddy details content here.
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="faq-item bg-[#F1ECE0] border border-[#E3DCCE]/40 rounded-none overflow-hidden relative z-10 shadow-xs">
                <button type="button"
                    class="faq-trigger w-full flex items-center justify-between p-5 sm:p-6 text-left focus:outline-none group">
                    <div class="flex items-center space-x-4 pr-6">
                        <span
                            class="bg-[#303E5F] text-white font-['EB_Garamond'] text-[18px] sm:text-[20px] w-10 h-10 flex items-center justify-center flex-shrink-0 font-medium">Q</span>
                        <h3 class="text-[#33312D] text-[14px] sm:text-[16px] font-bold noto-sans tracking-wide leading-tight">
                            査定にはどのくらい時間がかかりますか？（仮）
                        </h3>
                    </div>
                    <span class="faq-icon text-[#303E5F] font-light text-[22px] select-none">—</span>
                </button>
                <div class="faq-panel max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="p-5 sm:p-6 pt-4  border-t border-[#E3DCCE]/60 flex items-start space-x-4">
                        <span
                            class="bg-[#B57A3F] text-white font-['EB_Garamond'] text-[18px] sm:text-[20px] w-10 h-10 flex items-center justify-center flex-shrink-0 font-medium">A</span>
                        <p class="text-[#615C56] text-[13px] sm:text-[14px] leading-[1.8] tracking-wide noto-sans pt-1.5">
                            こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="faq-item bg-[#F1ECE0] border border-[#E3DCCE]/40 rounded-none overflow-hidden relative z-10 shadow-xs">
                <button type="button"
                    class="faq-trigger w-full flex items-center justify-between p-5 sm:p-6 text-left focus:outline-none group">
                    <div class="flex items-center space-x-4 pr-6">
                        <span
                            class="bg-[#303E5F] text-white font-['EB_Garamond'] text-[18px] sm:text-[20px] w-10 h-10 flex items-center justify-center flex-shrink-0 font-medium">Q</span>
                        <h3 class="text-[#33312D] text-[14px] sm:text-[16px] font-bold noto-sans tracking-wide leading-tight">
                            キャンセルはできますか？（仮）
                        </h3>
                    </div>
                    <span class="faq-icon text-[#303E5F] font-light text-[22px] select-none">—</span>
                </button>
                <div class="faq-panel max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="p-5 sm:p-6 pt-4  border-t border-[#E3DCCE]/60 flex items-start space-x-4">
                        <span
                            class="bg-[#B57A3F] text-white font-['EB_Garamond'] text-[18px] sm:text-[20px] w-10 h-10 flex items-center justify-center flex-shrink-0 font-medium">A</span>
                        <p class="text-[#615C56] text-[13px] sm:text-[14px] leading-[1.8] tracking-wide noto-sans pt-1.5">
                            こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。こちらに回答内容が入ります。
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Map Information  -->

<section class="w-full bg-[#F1ECE0] font-serif-jp overflow-hidden">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-stretch min-h-[550px] md:min-h-[650px]">

        <div
            class="flex flex-col justify-center px-6 sm:px-12 lg:px-16 xl:px-24 py-16 md:py-20 max-w-[750px] lg:max-w-none mx-auto w-full">
            <div class="mb-10 sm:mb-12 text-center lg:text-center">
                <span
                    class="font-['EB_Garamond'] text-[#B57A3F] text-[18px] uppercase block mb-1 tracking-[0.15em]">Information</span>
                <h2 class="text-[#33312D] text-[clamp(1.75rem,3.5vw,2.25rem)] font-bold tracking-wide">
                    店舗情報
                </h2>
            </div>
            <dl class="text-[14px] sm:text-[15px] font-sans text-[#33312D] mb-10 sm:mb-12 tracking-wide">

                <!-- ITEM 01 -->
                <div class="flex flex-col sm:flex-row py-5 border-b border-[white] gap-2 sm:gap-6">
                    <dt class="font-serif-jp font-bold sm:w-[100px] flex-shrink-0">店舗名</dt>
                    <dd class="noto-sans !font-normal text-[#615C56]">買取 蔵の宮（くらのみや）</dd>
                </div>

                <!-- ITEM 02 -->
                <div class="flex flex-col sm:flex-row py-5 border-b border-[white] gap-2 sm:gap-6">
                    <dt class="font-serif-jp font-bold sm:w-[100px] flex-shrink-0">営業時間</dt>
                    <dd class="noto-sans !font-normal text-[#615C56]">10:00-18:00 / 水曜定休</dd>
                </div>

                <!-- ITEM 03 -->
                <div class="flex flex-col sm:flex-row py-5 border-b border-[white] gap-2 sm:gap-6">
                    <dt class="font-serif-jp font-bold sm:w-[100px] flex-shrink-0">所在地</dt>
                    <dd class="noto-sans !font-normal text-[#615C56] space-y-1">
                        <p>〒254-0043 神奈川県平塚市紅谷12-24</p>
                        <p>リーフ8 1階（湘南スターモール商店街内）</p>
                    </dd>
                </div>

                <!-- ITEM 04 -->
                <div class="flex flex-col sm:flex-row py-5 border-b border-[white] gap-2 sm:gap-6">
                    <dt class="font-serif-jp font-bold sm:w-[100px] flex-shrink-0">アクセス</dt>
                    <dd class="noto-sans !font-normal text-[#615C56] space-y-2">
                        <p>「平塚駅」から徒歩5分 / 湘南スターモール商店街内<br class="hidden lg:block">
                            ※ 商店街のメイン通り沿いにございます</p>
                    </dd>
                </div>

            </dl>

            <div class="text-center lg:text-center">
                <a href="https://maps.google.com" target="_blank" rel="noopener noreferrer"
                    class="bg-[#B57A3F] text-white inline-flex items-center justify-center space-x-1 px-8 py-4 font-medium shadow-md hover:bg-[#a06830] transition-colors w-[260px] sm:w-[300px]">
                    <span class="text-[16px] md:text-[18px] noto-sans font-semibold tracking-wider">Google Mapをみる</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>

        </div>

        <div class="w-full h-[350px] sm:h-[450px] lg:h-full min-h-[400px] lg:min-h-none relative z-10 bg-gray-200">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3255.437452296155!2d139.3475283!3d35.3283333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601851950d87a55d%3A0x2bb9e324707647d!2z56We5aWI5bed55yM5bmz5aGa5biC57SF6LC3MTItMjQ!5e0!3m2!1sja!2sjp!4v1717148000000!5m2!1sja!2sjp"
                class="w-full h-full border-none grayscale-[20%] contrast-[110%] select-none pointer-events-auto"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="買取 蔵の宮 アクセスマップ">
            </iframe>
        </div>

    </div>
</section>

<!-- CTA SECTION -->
<section
    class="relative bg-[#303E5F] text-white py-16 lg:py-24 font-serif-jp overflow-hidden min-h-[500px] flex items-center">
    <div class="hidden lg:block absolute left-[6rem] bottom-0 w-[22%] max-w-[260px] h-auto z-10 pointer-events-none">
       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/staff.png" alt="査定員" class="w-full h-auto object-contain vertical-alignment-bottom" />
    </div>

    <!-- 2. Right Side Product Cluster Display Graphic -->
    <div class="hidden lg:block absolute right-4 bottom-4 w-[28%] max-w-[360px] h-auto z-10 pointer-events-none">
       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/cta-jewellery.png" alt="買取品目イメージ" class="w-full h-auto object-contain" />
    </div>

    <!-- MAIN CENTRALIZED CONTENT WRAPPER CONTAINER -->
    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-20 w-full">
        <div class="max-w-[700px] mx-auto text-center flex flex-col items-center">
            <h2 class="text-white text-[clamp(1.5rem,4.5vw,2.25rem)] noto-serif font-semibold tracking-wide mb-4">
                まずはお気軽にご相談ください
            </h2>

            <div class="w-16 h-[1px] bg-[#B57A3F] mb-8"></div>
            <div
                class="text-white/90 text-[clamp(0.85rem,2.5vw,1.05rem)] leading-[2] tracking-wider noto-sans !font-normal mb-10 max-w-[540px]">
                <p>「査定だけ」「ちょっと聞いてみたいだけ」も大歓迎です</p>
                <p>11年の経験をもつ店主が、心を込めてお応えいたします</p>
            </div>

            <div
                class="flex flex-col sm:flex-row items-center justify-center gap-6 sm:gap-8 mb-12 sm:mb-0 w-full sm:w-auto">

                <a href="tel:0463000000"
                    class="flex items-center justify-center font-bold text-[clamp(1.35rem,3.5vw,1.75rem)] hover:opacity-80 transition-opacity tracking-wider whitespace-nowrap">
                    <svg class="w-6 h-6 mr-2 text-[#B57A3F] flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M6.62 10.79a15.15 15.15 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.27c1.12.44 2.33.68 3.58.68a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.24 2.46.68 3.58a1 1 0 01-.27 1.11l-2.2 2.2z" />
                    </svg>
                    0463-00-0000
                </a>

                <a href="#"
                    class="bg-[#B57A3F] text-white flex items-center justify-center space-x-2 px-8 py-4 shadow-md hover:bg-[#a06830] transition-colors w-full sm:w-[280px] rounded-[2px] font-medium whitespace-nowrap">
                    <span class="text-[16px] md:text-[18px] noto-sans font-semibold tracking-wider">LINEで査定相談する</span>
                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>

            </div>

            <div
                class="flex lg:hidden flex-row items-end justify-center w-full max-w-[420px] mx-auto mt-4 -mb-16 overflow-hidden">
                <div class="w-[40%] flex-shrink-0 translate-x-3 z-0">
                   <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/staff.png" alt="査定員" class="w-full h-auto object-contain" />
                </div>
                <div class="w-[65%] flex-shrink-0 -translate-x-3 z-1">
                   <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/cta-jewellery.png" alt="買取品目イメージ" class="w-full h-auto object-contain" />
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>