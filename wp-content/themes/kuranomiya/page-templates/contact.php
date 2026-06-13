<?php

/**
 * Template Name: Contact
 * Template: Page 6
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
        Contact
    </div>

    <div class="hidden md:block relative w-full noto-sans max-w-[1400px] mx-auto px-5 sm:px-6 lg:px-8 pt-4 sm:pt-6 z-10 font-sans text-[12px] tracking-wider text-[#615C56]">
        <nav class="flex items-center space-x-2 flex-wrap noto-sans">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#B57A3F] transition-colors">ホーム</a>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <span class="text-[#33312D] font-medium">お問い合わせ</span>
        </nav>
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full flex-1 flex items-center pt-10 lg:pt-0">
        <div class="grid grid-cols-1 lg:grid-cols-12 items-end gap-8 lg:gap-5 w-full min-w-0">

            <div class="lg:col-span-4 text-center lg:text-center flex flex-col items-center lg:items-center shrink-0">
                <div class="w-24 h-auto mb-3 sm:mb-4">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt=""
                        class="w-full h-auto object-contain mx-auto md:mx-0" />
                </div>
                <h1 class="text-[#33312D] text-[clamp(2rem,5vw,2.75rem)] font-bold tracking-wide leading-none whitespace-nowrap">
                    お問い合わせ
                </h1>
            </div>

            <div
                class="lg:col-span-8 min-w-0 text-[#615C56] font-medium noto-sans !font-medium text-[clamp(0.88rem,2.8vw,1.05rem)] leading-[2] tracking-wider space-y-2 max-w-[620px] mx-auto lg:mx-0 lg:max-w-none text-left pl-0 lg:pl-4">
                <p class="lg:whitespace-nowrap">「査定だけ」「ちょっと聞いてみたいだけ」も大歓迎です。</p>
                <p class="lg:whitespace-nowrap">ご不明点などございましたら、お気軽にご相談ください。</p>
            </div>

        </div>
    </div>
</section>

<!-- Contact Cards  -->

<section class="relative bg-[#F1ECE0] py-16 md:py-24 font-serif-jp overflow-hidden">

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full">

        <div class="text-center mb-12 md:mb-8">
            <h2 class="text-[#33312D] text-[clamp(1.75rem,4vw,2.25rem)] font-semibold tracking-wide">
                <span
                    class="text-[#B57A3F] font-['EB_Garamond'] text-[clamp(48px,8vw,90px)] font-medium mr-0 select-none">3</span><span
                    class="text-[clamp(26px,2.5vw,30px)]">つの</span><br class="block md:hidden">お問い合わせ方法
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 xl:gap-8 max-w-[1140px] mx-auto">

            <div class="bg-[#FFFCF5] p-6 pt-0 shadow-xs flex flex-col justify-between">
                <div>
                    <div class="flex items-end gap-4 mb-6 -mx-6">
                        <div
                            class="bg-[#303E5F] w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center flex-shrink-0">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mail-icon-blue.svg" alt="Mail Icon" class="w-6 h-6 object-contain" />
                        </div>
                        <div class="flex items-baseline gap-1.5 font-['EB_Garamond'] text-[#303E5F] mb-0 sm:mb-0">
                            <span
                                class="text-[clamp(17px,1.5vw,17px)] uppercase tracking-widest font-normal">Contact</span>
                            <span class="text-[clamp(2rem,4vw,3.3rem)] font-normal leading-none">01</span>
                        </div>
                    </div>

                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-tight mb-4">
                        メールフォームでのお問い合わせ
                    </h3>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-normal tracking-wide mb-6">
                        下記のフォームより必須項目をご入力のうえ、お気軽にお問い合わせください。
                    </p>
                </div>

                <span class="text-[#B57A3F] font-sans text-[14px] font-bold tracking-wider block mb-2">
                    24時間受付
                </span>
            </div>

            <div class="bg-[#FFFCF5] p-6 pt-0 shadow-xs flex flex-col justify-between">
                <div>
                    <div class="flex items-end gap-4 mb-6 -mx-6">
                        <div
                            class="bg-[#303E5F] w-14 h-14 sm:w-16 sm:h-18 flex items-center justify-center flex-shrink-0">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/telephone-blue.svg" alt="Mail Icon" class="w-6 h-6 object-contain" />
                        </div>
                        <div class="flex items-baseline gap-1.5 font-['EB_Garamond'] text-[#303E5F] mb-1 sm:mb-2">
                            <span
                                class="text-[clamp(17px,1.5vw,17px)] uppercase tracking-widest font-normal">Contact</span>
                            <span class="text-[clamp(2rem,4vw,3.3rem)] font-normal leading-none">02</span>
                        </div>
                    </div>

                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-tight mb-4">
                        お電話でのお問い合わせ
                    </h3>

                    <a href="tel:0463716678"
                        class="flex items-center font-bold text-[clamp(1.35rem,3.5vw,1.65rem)] text-[#33312D] tracking-wide hover:opacity-80 transition-opacity mb-4">
                        <svg class="w-5 h-5 mr-1.5 text-[#B57A3F] flex-shrink-0" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M6.62 10.79a15.15 15.15 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.27c1.12.44 2.33.68 3.58.68a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.24 2.46.68 3.58a1 1 0 01-.27 1.11l-2.2 2.2z" />
                        </svg>
                        0463-71-6678
                    </a>
                </div>

                <span
                    class="text-[#B57A3F] font-sans text-[13px] sm:text-[14px] font-medium tracking-wide block mb-2">
                    営業時間 <span class="mx-1 text-gray-300">|</span> 10:00-18:00
                </span>
            </div>

            <div
                class="bg-[#FFFCF5] p-6 pt-0 shadow-xs flex flex-col justify-between md:col-span-2 lg:col-span-1 max-w-[540px] md:max-w-none mx-auto w-full">
                <div>
                    <div class="flex items-end gap-4 mb-6 -mx-6">
                        <div
                            class="bg-[#303E5F] w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center text-white flex-shrink-0">
                            <div
                                class="bg-[#303E5F] w-14 h-14 sm:w-16 sm:h-18 flex items-center justify-center flex-shrink-0">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/line-icon-blue.svg" alt="Mail Icon"
                                    class="w-6 h-6 object-contain" />
                            </div>
                        </div>
                        <div class="flex items-baseline gap-1.5 font-['EB_Garamond'] text-[#303E5F] mb-1 sm:mb-2">
                            <span
                                class="text-[clamp(17px,1.5vw,17px)] uppercase tracking-widest font-normal">Contact</span>
                            <span class="text-[clamp(2rem,4vw,3.3rem)] font-normal leading-none">03</span>
                        </div>
                    </div>

                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-tight mb-4">
                        LINEでのお問い合わせ
                    </h3>
                    <p class="text-[#615C56] text-[14px] leading-[1.8] noto-sans !font-normal tracking-wide mb-6">
                        友だち追加後にお問い合わせください。
                    </p>
                </div>

                <div class="pb-2">
                    <a href="#"
                        class="bg-[#B57A3F] text-white flex items-center justify-center space-x-2 px-6 py-3.5 shadow-xs hover:bg-[#a06830] transition-colors w-full rounded-none font-medium whitespace-nowrap">
                        <span
                            class="text-[14px] sm:text-[15px] font-semibold tracking-wider font-sans">LINEで査定相談する</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- Inquiry Form Section  -->

<section class="relative bg-[#FFFCF5] py-16 md:py-28 font-serif-jp overflow-hidden">

    <div class="absolute right-0 top-0 w-[45%] md:w-[25%] max-w-[320px] pointer-events-none z-0">
        <img src="/assets/form-pattern-top.png" alt="" class="w-full h-auto object-contain transform rotate-180" />
    </div>
    <div class="absolute left-0 bottom-[7%] w-[45%] md:w-[25%] max-w-[320px] pointer-events-none z-0">
        <img src="/assets/form-pattern-below.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[900px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full">

        <div class="text-center mb-10 md:mb-12">
            <div class="w-30 h-auto mx-auto mb-4">
                <img src="/assets/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
            </div>
            <span
                class="font-['EB_Garamond'] text-[#B57A3F] text-[18px] uppercase block mb-2 tracking-[0.15em]">Form</span>
            <h2 class="text-[#33312D] text-[clamp(1.75rem,4vw,2.25rem)] font-bold tracking-wide mb-6">
                お問い合わせフォーム
            </h2>

            <div
                class="text-[#615C56] text-[13px] sm:text-[14px] leading-[1.8] tracking-wider noto-sans !font-normal space-y-2  mx-auto">
                <p>ご不明点等ございましたら、お気軽にお問い合わせください。</p>
                <p class="text-[13px]">※ <span class="text-[#EC2B2B] font-semibold">（必須）</span> 項目は必ずご入力ください。</p>
                <p>よくあるご質問も掲載しておりますので、ご不明点はお問い合わせ前にこちらもご確認ください。</p>
            </div>

            <div class="mt-8">
                <a href="#"
                    class="bg-[#303E5F] text-white inline-flex items-center justify-center space-x-2 px-6 py-3 font-sans text-[13px] sm:text-[14px] font-semibold shadow-sm hover:bg-[#232e47] transition-colors rounded-none">
                    <span>よくあるご質問をみる</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>

        <form action="#" method="POST" class="space-y-8 font-sans text-[14px] text-[#33312D]">

            <div class="space-y-2">
                <label for="form-name" class="block font-bold tracking-wide">
                    お名前 <span class="text-[#EC2B2B] noto-sans text-[12px] font-medium ml-1">（必須）</span>
                </label>
                <input type="text" id="form-name" name="name" required
                    class="w-full bg-[#F1ECE0] border-none px-4 py-3.5 focus:bg-white focus:ring-1 focus:ring-[#B57A3F] transition-colors outline-none rounded-none" />
            </div>

            <div class="space-y-2">
                <label for="form-email" class="block font-bold tracking-wide">
                    メールアドレス <span class="text-[#EC2B2B] noto-sans text-[12px] font-medium ml-1">（必須）</span>
                </label>
                <input type="email" id="form-email" name="email" required
                    class="w-full bg-[#F1ECE0] border-none px-4 py-3.5 focus:bg-white focus:ring-1 focus:ring-[#B57A3F] transition-colors outline-none rounded-none" />
            </div>

            <div class="space-y-2">
                <label for="form-tel" class="block font-bold tracking-wide">
                    お電話番号 <span class="text-[#EC2B2B] noto-sans text-[12px] font-medium ml-1">（必須）</span>
                </label>
                <input type="tel" id="form-tel" name="tel" required
                    class="w-full bg-[#F1ECE0] border-none px-4 py-3.5 focus:bg-white focus:ring-1 focus:ring-[#B57A3F] transition-colors outline-none rounded-none" />
            </div>

            <div class="space-y-2">
                <label for="form-category" class="block font-bold tracking-wide">
                    ご相談の品目 <span class="text-[#B57A3F] noto-sans text-[12px] font-normal ml-1">（任意 / 複数選択不可）</span>
                </label>
                <div class="relative w-full bg-[#F1ECE0]">
                    <select id="form-category" name="category"
                        class="w-full bg-transparent border-none px-4 py-3.5 pr-10 appearance-none outline-none focus:bg-white focus:ring-1 focus:ring-[#B57A3F] transition-colors rounded-none font-medium text-[#615C56]">
                        <option value="" disabled selected>必要に応じて、品目を選択してください</option>
                        <option value="gold">金・プラチナ・銀</option>
                        <option value="watch">時計</option>
                        <option value="jewelry">宝飾品</option>
                        <option value="brand">ブランド品</option>
                        <option value="other">その他</option>
                    </select>
                    <div class="absolute right-4 top-[70%] -translate-y-1/2 pointer-events-none text-[#B57A3F]">
                        <svg class="w-4 h-4 stroke-current" fill="none" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="space-y-2">
                <label for="form-message" class="block font-bold tracking-wide">
                    お問い合わせ内容 <span class="text-[#EC2B2B] noto-sans text-[12px] font-medium ml-1">（必須）</span>
                </label>
                <textarea id="form-message" name="message" required rows="6"
                    class="w-full bg-[#F1ECE0] border-none px-4 py-3.5 focus:bg-white focus:ring-1 focus:ring-[#B57A3F] transition-colors outline-none resize-y rounded-none"></textarea>
            </div>

            <div class="space-y-4 pt-4">
                <label class="block font-bold tracking-wide font-serif-jp text-[#33312D]">
                    プライバシーポリシー
                </label>

                <div
                    class="w-full h-[180px] bg-[#F1ECE0] border border-[#E3DCCE] p-5 overflow-y-auto text-[13px] text-[#615C56] leading-[1.8] tracking-wide font-serif-jp space-y-4">
                    <p>
                        買取
                        蔵の宮（以下、「当店」といいます）は、本ウェブサイト上で提供するサービスにおける、ユーザーの個人情報の取扱いについて、以下のとおりプライバシーポリシー（以下、「本ポリシー」といいます）を定めます。
                    </p>
                    <h4 class="font-bold text-[#33312D] pt-2">第1条（個人情報）</h4>
                    <p>
                        当店は、個人情報保護に関する法令およびその他の規範を遵守します。「個人情報」とは、個人の氏名・電話番号・住所など特定の個人を識別できる情報（他の情報と容易に照合することができ、それにより特定の個人を識別できることも含みます）をいいます。
                    </p>
                </div>

                <div class="flex items-center justify-start pt-2">
                    <label
                        class="inline-flex items-center cursor-pointer select-none font-serif-jp text-[13px] sm:text-[14px] text-[#33312D]">
                        <input type="checkbox" name="policy_agreement" required
                            class="w-4 h-4 text-[#B57A3F] bg-[#F1ECE0] border-none focus:ring-0 rounded-sm cursor-pointer mr-3" />
                        <span>プライバシーポリシーに同意する</span>
                    </label>
                </div>
            </div>

            <div class="text-center pt-6">
                <button type="submit"
                    class="bg-[#B57A3F] text-white inline-flex items-center justify-center space-x-2 px-12 py-4 font-serif-jp font-semibold shadow-md hover:bg-[#a06830] transition-colors w-[200px] rounded-none cursor-pointer">
                    <span class="tracking-widest">送信する</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>

        </form>

    </div>
</section>


<?php get_footer(); ?>