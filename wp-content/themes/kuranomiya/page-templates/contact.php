<?php

/**
 * Template Name: Contact
 * Template: Page 6
 */

get_header();
?>

<!-- Hero Section  -->

<section
    class="relative bg-[#FFFCF5] pb-20 sm:pb-28 lg:pb-24 font-serif-jp overflow-x-clip min-h-[360px] flex flex-col">

    <div
        class="absolute hidden md:flex right-[-10%] sm:right-[-5%] lg:right-10 inset-y-0 w-[60%] sm:w-[45%] lg:w-[32%] max-w-[450px] pointer-events-none z-0 items-end">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/product-page-right-bg.png" alt="" class="w-full h-auto max-h-full object-contain" />
    </div>

    <div
        class="absolute bottom-[-1%] sm:bottom-[-4%] left-[-0%] font-['EB_Garamond'] text-[clamp(3rem,13vw,6rem)] uppercase tracking-[0.05em] text-[#F1ECE0] leading-none font-medium select-none pointer-events-none whitespace-nowrap z-0">
        Contact
    </div>

    <div class="hidden md:block relative w-full noto-sans max-w-[1400px] mx-auto px-5 sm:px-6 lg:px-8 pt-4 sm:pt-6 z-10 font-sans text-[12px] tracking-wider text-[#615C56]">
        <nav class="flex items-center space-x-2 flex-wrap noto-sans text-sm">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#B57A3F] transition-colors">ホーム</a>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <span class="text-[#33312D] font-medium">お問い合わせ</span>
        </nav>
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full flex-1 flex items-center pt-10 lg:pt-0">
        <div class="grid grid-cols-1 lg:grid-cols-12 items-end gap-8 lg:gap-5 w-full min-w-0" data-animate="fade-up">

            <div class="lg:col-span-4 text-center lg:text-center flex flex-col items-start md:items-center lg:items-center shrink-0">
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

<section class="relative bg-[#F1ECE0] py-4 md:py-24 font-serif-jp overflow-hidden">

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full">

        <div class="text-center mb-12 md:mb-8" data-animate="fade-up">
            <h2 class="text-[#33312D] text-[clamp(1.75rem,4vw,2.25rem)] font-semibold tracking-wide">
                <span
                    class="text-[#B57A3F] font-['EB_Garamond'] text-[clamp(48px,8vw,90px)] font-medium mr-0 select-none">3</span><span
                    class="text-[clamp(26px,2.5vw,30px)]">つの</span><br class="block md:hidden">お問い合わせ方法
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 xl:gap-8 max-w-[1140px] mx-auto" data-animate="stagger-soft">

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
                    <a href="<?php echo esc_url(kuranomiya_get_line_url()); ?>" target="_blank" rel="noopener noreferrer"
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

<section class="relative bg-[#FFFCF5] py-10 md:py-28 font-serif-jp overflow-hidden">

    <div class="absolute right-0 top-0 w-[45%] md:w-[25%] max-w-[320px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/form-pattern-top.png" alt="" class="w-full h-auto object-contain transform" />
    </div>
    <div class="absolute left-0 bottom-[7%] w-[45%] md:w-[25%] max-w-[320px] pointer-events-none z-0">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/form-pattern-below.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[900px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full">

        <div class="text-center mb-10 md:mb-12" data-animate="fade-up">
            <div class="w-20 md:w-30 h-auto mx-auto mb-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/roof-ornament.svg" alt="" class="w-full h-auto object-contain" />
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

        <form action="#" method="POST" class="space-y-8 font-sans text-[14px] text-[#33312D]" data-animate="fade-up">

            <div class="space-y-2">
                <label for="custom-name" class="block font-bold tracking-wide">
                    お名前 <span class="text-[#EC2B2B] noto-sans text-[12px] font-medium ml-1">（必須）</span>
                </label>
                <input type="text" id="custom-name" name="name"
                    class="w-full bg-[#F1ECE0] border-none px-4 py-3.5 focus:bg-white focus:ring-1 focus:ring-[#B57A3F] transition-colors outline-none rounded-none" />
                <p class="field-error hidden noto-sans text-[12px] text-[#EC2B2B]" data-field="custom-name" role="alert"></p>
            </div>

            <div class="space-y-2">
                <label for="custom-email" class="block font-bold tracking-wide">
                    メールアドレス <span class="text-[#EC2B2B] noto-sans text-[12px] font-medium ml-1">（必須）</span>
                </label>
                <input type="email" id="custom-email" name="email"
                    class="w-full bg-[#F1ECE0] border-none px-4 py-3.5 focus:bg-white focus:ring-1 focus:ring-[#B57A3F] transition-colors outline-none rounded-none" />
                <p class="field-error hidden noto-sans text-[12px] text-[#EC2B2B]" data-field="custom-email" role="alert"></p>
            </div>

            <div class="space-y-2">
                <label for="custom-tel" class="block font-bold tracking-wide">
                    お電話番号 <span class="text-[#B57A3F] noto-sans text-[12px] font-normal ml-1">（任意）</span>
                </label>
                <input type="tel" id="custom-tel" name="tel"
                    class="w-full bg-[#F1ECE0] border-none px-4 py-3.5 focus:bg-white focus:ring-1 focus:ring-[#B57A3F] transition-colors outline-none rounded-none" />
                <p class="field-error hidden noto-sans text-[12px] text-[#EC2B2B]" data-field="custom-tel" role="alert"></p>
            </div>

            <div class="space-y-2">
                <label for="custom-category" class="block font-bold tracking-wide">
                    ご相談の品目 <span class="text-[#B57A3F] noto-sans text-[12px] font-normal ml-1">（任意 / 複数選択不可）</span>
                </label>
                <div class="relative w-full bg-[#F1ECE0]">
                    <select id="custom-category" name="category"
                        class="w-full bg-transparent border-none px-4 py-3.5 pr-10 appearance-none outline-none focus:bg-white focus:ring-1 focus:ring-[#B57A3F] transition-colors rounded-none font-medium text-[#615C56]">
                        <option value="" disabled selected>必要に応じて、品目を選択してください</option>
                        <option value="gold">金・プラチナ・銀</option>
                        <option value="watch">時計</option>
                        <option value="jewelry">宝飾品</option>
                        <option value="brand">ブランド品</option>
                        <option value="other">その他</option>
                    </select>
                    <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-[#B57A3F]">
                        <svg class="w-4 h-4 stroke-current" fill="none" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
                <p class="field-error hidden noto-sans text-[12px] text-[#EC2B2B]" data-field="custom-category" role="alert"></p>
            </div>

            <div class="space-y-2">
                <label for="custom-message" class="block font-bold tracking-wide">
                    お問い合わせ内容 <span class="text-[#EC2B2B] noto-sans text-[12px] font-medium ml-1">（必須）</span>
                </label>
                <textarea id="custom-message" name="message" rows="6"
                    class="w-full bg-[#F1ECE0] border-none px-4 py-3.5 focus:bg-white focus:ring-1 focus:ring-[#B57A3F] transition-colors outline-none resize-y rounded-none"></textarea>
                <p class="field-error hidden noto-sans text-[12px] text-[#EC2B2B]" data-field="custom-message" role="alert"></p>
            </div>

            <div class="space-y-4 pt-4">
                <label class="block font-bold tracking-wide font-serif-jp text-[#33312D]">
                    プライバシーポリシー
                </label>

                <div
                    class="w-full h-[180px] bg-[#F1ECE0] border border-[#E3DCCE] p-5 overflow-y-auto text-[13px] text-[#615C56] leading-[1.8] tracking-wide font-serif-jp space-y-4">
                    <p>
                        買取 蔵の宮（以下、「当店」といいます。）は、本ウェブサイト上で提供するサービスにおける、ユーザーの個人情報の取扱いについて、以下のとおりプライバシーポリシー（以下、「本ポリシー」といいます。）を定めます。
                    </p>

                    <h4 class="font-bold text-[#33312D] pt-2">第1条（個人情報）</h4>
                    <p>
                        当店は、個人情報保護に関する法令およびその他の規範を遵守します。「個人情報」とは、個人の氏名・電話番号・住所など特定の個人を識別できる情報（他の情報と容易に照合することで、それにより特定の個人を識別できることも含みます。）をいいます。
                    </p>

                    <h4 class="font-bold text-[#33312D] pt-2">第2条（個人情報の収集方法）</h4>
                    <p>
                        当店は、ユーザーがサービスを利用する際に、氏名・メールアドレス・電話番号などの個人情報をお尋ねすることがあります。また、ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を、当店の提携先（情報提供元、広告主、広告配信先などを含みます。以下、「提携先」といいます。）などから収集することがあります。
                    </p>

                    <h4 class="font-bold text-[#33312D] pt-2">第3条（個人情報を収集・利用する目的）</h4>
                    <p>当店が個人情報を収集・利用する目的は、以下のとおりです。</p>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>古物営業法に基づき、古物の販売及び買取の際の本人確認を行うため</li>
                        <li>当店サービスの提供・運営のため</li>
                        <li>ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）</li>
                        <li>ユーザーが利用中のサービスの新機能・更新情報・キャンペーン等及び当店が提供する他のサービスの案内のメールを送付するため</li>
                        <li>メンテナンスや重要なお知らせなど、必要に応じたご連絡のため</li>
                        <li>利用規約に違反したユーザーや、不正・不当な目的でサービスを利用しようとするユーザーの特定をし、ご利用をお断りするため</li>
                        <li>ユーザーにご自身の登録情報の閲覧や変更・削除・ご利用状況の閲覧を行っていただくため</li>
                        <li>上記の利用目的に付随する目的</li>
                    </ul>

                    <h4 class="font-bold text-[#33312D] pt-2">第4条（個人情報の第三者提供）</h4>
                    <p>
                        1. 当店は、次に掲げる場合を除いて、あらかじめユーザーの同意を得ることなく、第三者に個人情報を提供することはありません。ただし、個人情報保護法その他の法令で認められる場合を除きます。
                    </p>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>人の生命、身体または財産の保護のために必要がある場合であって、本人の同意を得ることが困難である場合</li>
                        <li>開示先、開示情報内容を特定したうえで、お客様の合意がある場合</li>
                        <li>警察・その他国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがある場合</li>
                    </ul>

                    <p>
                        2. 前項の定めにかかわらず、次に掲げる場合には、当該情報の提供先は第三者に該当しないものとします。
                    </p>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>商品のご購入決済や配送の依頼など、当店が利用目的の達成に必要な範囲内において個人情報の取扱いの全部または一部を委託する場合</li>
                        <li>合併その他の事由による事業の承継に伴って個人情報が提供される場合</li>
                    </ul>

                    <h4 class="font-bold text-[#33312D] pt-2">第5条（個人情報の訂正および削除）</h4>
                    <p>
                        ユーザーは、当店の保有する自己の個人情報が誤った情報である場合には、当店が定める手続きにより、当店に対して個人情報の訂正、追加または削除（以下、「訂正等」といいます。）を請求することができます。
                    </p>
                    <p>
                        当店は、ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には、遅滞なく、当該個人情報の訂正等を行うものとします。
                    </p>
                    <p>
                        当店は、前項の規定に基づき訂正等を行った場合、または訂正等を行わない旨の決定をしたときは遅滞なく、これをユーザーに通知します。
                    </p>

                    <h4 class="font-bold text-[#33312D] pt-2">第6条（お問い合わせ窓口）</h4>
                    <p>
                        本ポリシーに関するお問い合わせは、下記の窓口までお願いいたします。
                    </p>
                    <p>
                        買取 蔵の宮<br>
                        〒254-0043 神奈川県平塚市紅谤12-24 リーフ8 1階<br>
                        TEL: 0463-00-0000（仮）
                    </p>
                </div>

                <div class="flex items-center justify-start pt-2">
                    <label
                        class="inline-flex items-center cursor-pointer select-none font-serif-jp text-[13px] sm:text-[14px] text-[#33312D]">
                        <input type="checkbox" id="custom-policy" name="policy_agreement"
                            class="contact-checkbox w-5 h-5 border-none focus:ring-0 rounded-sm cursor-pointer mr-3" />
                        <span>プライバシーポリシーに同意する</span>
                    </label>
                </div>
                <p class="field-error hidden noto-sans text-[12px] text-[#EC2B2B]" data-field="custom-policy" role="alert"></p>
            </div>

            <div id="form-error-block"
                class="hidden bg-[#F1ECE0] border border-[#DED7C7] px-4 py-3 noto-sans text-[14px] text-[#615C56]"
                role="alert"></div>

            <div class="text-center pt-6">
                <button type="submit" id="custom-submit"
                    class="bg-[#B57A3F] text-white inline-flex items-center justify-center space-x-2 px-12 py-4 font-serif-jp font-semibold shadow-md hover:bg-[#a06830] transition-colors w-[200px] rounded-none cursor-pointer">
                    <span class="tracking-widest">送信する</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>

        </form>

        <div id="cf7-hidden-form" class="hidden">
            <?php echo do_shortcode('[contact-form-7 id="de80c18" title="Kuranomiya Contact Form"]'); ?>
        </div>

        <script>
            (function() {
                const submitBtn = document.getElementById('custom-submit');
                if (!submitBtn) return;

                const customForm = submitBtn.closest('form');
                const cf7Container = document.getElementById('cf7-hidden-form');
                const cf7Form = cf7Container ? cf7Container.querySelector('form') : null;
                const formErrorBlock = document.getElementById('form-error-block');
                const fieldIds = ['custom-name', 'custom-email', 'custom-tel', 'custom-category', 'custom-message', 'custom-policy'];

                const cf7FieldMap = {
                    'custom-name': ['your-name'],
                    'custom-email': ['your-email'],
                    'custom-tel': ['tel', 'your-tel'],
                    'custom-category': ['category', 'your-category'],
                    'custom-message': ['your-message'],
                    'custom-policy': ['acceptance', 'acceptance-policy', 'policy'],
                };

                const cf7ToCustom = {};
                Object.entries(cf7FieldMap).forEach(function(entry) {
                    entry[1].forEach(function(name) {
                        cf7ToCustom[name] = entry[0];
                    });
                });

                function getCf7Field(names) {
                    if (!cf7Form) return null;

                    for (let i = 0; i < names.length; i++) {
                        const field = cf7Form.querySelector('[name="' + names[i] + '"]');
                        if (field) return field;
                    }

                    return null;
                }

                function setCf7Value(names, value) {
                    const field = getCf7Field(names);
                    if (!field) return;

                    if (field.type === 'checkbox') {
                        field.checked = Boolean(value);
                    } else {
                        field.value = value;
                    }
                }

                function clearFieldErrors() {
                    document.querySelectorAll('.field-error').forEach(function(el) {
                        el.textContent = '';
                        el.classList.add('hidden');
                    });

                    fieldIds.forEach(function(id) {
                        const field = document.getElementById(id);
                        if (field) {
                            field.classList.remove('ring-1', 'ring-[#EC2B2B]');
                        }
                    });

                    if (formErrorBlock) {
                        formErrorBlock.textContent = '';
                        formErrorBlock.classList.add('hidden');
                    }
                }

                function showFieldError(fieldId, message) {
                    const errorEl = document.querySelector('[data-field="' + fieldId + '"]');
                    const field = document.getElementById(fieldId);

                    if (errorEl) {
                        errorEl.textContent = message;
                        errorEl.classList.remove('hidden');
                    }

                    if (field) {
                        field.classList.add('ring-1', 'ring-[#EC2B2B]');
                    }
                }

                function showFormError(message) {
                    if (!formErrorBlock) return;
                    formErrorBlock.textContent = message;
                    formErrorBlock.classList.remove('hidden');
                }

                function validateClient() {
                    clearFieldErrors();
                    let valid = true;

                    const name = document.getElementById('custom-name');
                    if (!name || !name.value.trim()) {
                        showFieldError('custom-name', 'お名前をご入力ください。');
                        valid = false;
                    }

                    const email = document.getElementById('custom-email');
                    const emailVal = email ? email.value.trim() : '';
                    if (!emailVal) {
                        showFieldError('custom-email', 'メールアドレスをご入力ください。');
                        valid = false;
                    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailVal)) {
                        showFieldError('custom-email', '正しいメールアドレスの形式でご入力ください。');
                        valid = false;
                    }

                    const tel = document.getElementById('custom-tel');
                    const telVal = tel ? tel.value.trim() : '';
                    if (telVal && !/^[0-9\-+()\s]+$/.test(telVal)) {
                        showFieldError('custom-tel', 'お電話番号の形式をご確認ください。');
                        valid = false;
                    }

                    const message = document.getElementById('custom-message');
                    if (!message || !message.value.trim()) {
                        showFieldError('custom-message', 'お問い合わせ内容をご入力ください。');
                        valid = false;
                    }

                    const policy = document.getElementById('custom-policy');
                    if (!policy || !policy.checked) {
                        showFieldError('custom-policy', 'プライバシーポリシーへのご同意をお願いいたします。');
                        valid = false;
                    }

                    return valid;
                }

                function setLoading(isLoading) {
                    const label = submitBtn.querySelector('span');
                    const icon = submitBtn.querySelector('svg:not(.contact-form-spinner)');

                    if (isLoading) {
                        submitBtn.disabled = true;
                        submitBtn.classList.add('opacity-70', 'pointer-events-none');
                        if (label) label.textContent = '送信中...';
                        if (icon) icon.classList.add('hidden');
                        if (!submitBtn.querySelector('.contact-form-spinner')) {
                            const spinner = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                            spinner.setAttribute('class', 'contact-form-spinner w-4 h-4 animate-spin');
                            spinner.setAttribute('fill', 'none');
                            spinner.setAttribute('viewBox', '0 0 24 24');
                            spinner.innerHTML = '<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="3"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>';
                            submitBtn.appendChild(spinner);
                        }
                    } else {
                        submitBtn.disabled = false;
                        submitBtn.classList.remove('opacity-70', 'pointer-events-none');
                        if (label) label.textContent = '送信する';
                        const spinner = submitBtn.querySelector('.contact-form-spinner');
                        if (spinner) spinner.remove();
                        if (icon) icon.classList.remove('hidden');
                    }
                }

                function copyToCf7() {
                    const name = document.getElementById('custom-name');
                    const email = document.getElementById('custom-email');
                    const tel = document.getElementById('custom-tel');
                    const category = document.getElementById('custom-category');
                    const message = document.getElementById('custom-message');
                    const policy = document.getElementById('custom-policy');

                    setCf7Value(cf7FieldMap['custom-name'], name ? name.value.trim() : '');
                    setCf7Value(cf7FieldMap['custom-email'], email ? email.value.trim() : '');
                    setCf7Value(cf7FieldMap['custom-tel'], tel ? tel.value.trim() : '');

                    let categoryValue = '';
                    if (category && category.value) {
                        const selectedOption = category.options[category.selectedIndex];
                        categoryValue = selectedOption ? selectedOption.text : category.value;
                    }
                    setCf7Value(cf7FieldMap['custom-category'], categoryValue);

                    setCf7Value(cf7FieldMap['custom-message'], message ? message.value.trim() : '');
                    setCf7Value(cf7FieldMap['custom-policy'], policy ? policy.checked : false);
                }

                function showSuccess() {
                    customForm.outerHTML = `
                    <div class="text-center py-12 md:py-16 space-y-6 font-serif-jp" data-animate="fade-up">
                        <div class="w-16 h-16 mx-auto rounded-full bg-[#F1ECE0] flex items-center justify-center">
                            <svg class="w-8 h-8 text-[#B57A3F]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true">
                                <circle cx="12" cy="12" r="10" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                            </svg>
                        </div>
                        <h3 class="text-[#33312D] text-[clamp(1.5rem,3vw,1.75rem)] font-bold tracking-wide">送信が完了しました</h3>
                        <p class="text-[#615C56] noto-sans text-[14px] leading-[1.8] tracking-wide max-w-md mx-auto">
                            お問い合わせいただき、誠にありがとうございます。<br class="hidden sm:block">
                            内容を確認のうえ、2〜3営業日以内にご返信いたします。<br class="hidden sm:block">
                            今しばらくお待ちくださいませ。
                        </p>
                        <a href="<?php echo esc_url(home_url('/')); ?>"
                            class="inline-flex items-center justify-center text-[#B57A3F] noto-sans text-[14px] font-semibold tracking-wide hover:opacity-80 transition-opacity pt-2">
                            トップページへ戻る
                        </a>
                    </div>
                `;
                }

                function isOurCf7Event(event) {
                    return cf7Container && cf7Container.contains(event.target);
                }

                customForm.addEventListener('submit', function(event) {
                    event.preventDefault();

                    if (!validateClient()) return;

                    if (!cf7Form) {
                        showFormError('フォームの読み込みに問題が発生しました。しばらく経ってから再度お試しください。');
                        return;
                    }

                    copyToCf7();
                    setLoading(true);

                    const cf7Submit = cf7Form.querySelector('input[type="submit"], button[type="submit"]');
                    if (cf7Submit) {
                        cf7Submit.click();
                    } else {
                        setLoading(false);
                        showFormError('送信処理を開始できませんでした。お手数ですが、しばらく経ってから再度お試しください。');
                    }
                });

                document.addEventListener('wpcf7mailsent', function(event) {
                    if (!isOurCf7Event(event)) return;
                    setLoading(false);
                    showSuccess();
                });

                document.addEventListener('wpcf7invalid', function(event) {
                    if (!isOurCf7Event(event)) return;
                    setLoading(false);
                    clearFieldErrors();

                    const invalidFields = event.detail && event.detail.apiResponse ?
                        event.detail.apiResponse.invalid_fields :
                        [];

                    if (invalidFields && invalidFields.length) {
                        invalidFields.forEach(function(item) {
                            const customId = cf7ToCustom[item.field];
                            if (customId) {
                                showFieldError(customId, item.message);
                            }
                        });
                    }
                });

                document.addEventListener('wpcf7mailfailed', function(event) {
                    if (!isOurCf7Event(event)) return;
                    setLoading(false);
                    showFormError('送信中にエラーが発生しました。お手数ですが、しばらく経ってから再度お試しいただくか、お電話にてお問い合わせください。');
                });

                document.addEventListener('wpcf7spam', function(event) {
                    if (!isOurCf7Event(event)) return;
                    setLoading(false);
                    showFormError('送信できませんでした。内容をご確認のうえ、再度お試しください。');
                });
            })();
        </script>

    </div>
</section>


<?php get_footer(); ?>