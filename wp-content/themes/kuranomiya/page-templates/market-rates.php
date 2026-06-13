<?php

/**
 * Template Name: Market Rates
 * Template: Page 5
 */

get_header();

$metal_rates     = kuranomiya_get_metal_rates();
$has_rates       = is_array($metal_rates) && ! empty($metal_rates['gold']);
$gold_prices     = kuranomiya_calculate_prices('gold');
$platinum_prices = kuranomiya_calculate_prices('platinum');
$silver_prices   = kuranomiya_calculate_prices('silver');

$gold = [];
foreach ($gold_prices as $item) {
    $gold[$item['label']] = $item['price'];
}

$platinum = [];
foreach ($platinum_prices as $item) {
    $platinum[$item['label']] = $item['price'];
}

$silver_api = [];
foreach ($silver_prices as $item) {
    $silver_api[$item['label']] = $item['price'];
}
$silver = [
    'SV1000' => $silver_api['Ag999'] ?? 0,
    'SV925'  => $silver_api['Ag925'] ?? 0,
];

$updated_display = '';
if ($has_rates && ! empty($metal_rates['updated_at'])) {
    $updated_ts = strtotime($metal_rates['updated_at']);
    if ($updated_ts) {
        $updated_display = esc_html(wp_date('Y年n月j日', $updated_ts)) . '&nbsp;&nbsp; ' . esc_html(wp_date('g:i A', $updated_ts));
    }
}
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
                        class="text-[#615C56] noto-sans font-medium text-[16px]"><?php echo $has_rates ? $updated_display : '—'; ?></span></div>
                <span class="text-gray">|</span>
                <div><span class="text-[#B57A3F] noto-sans text-[16px] font-medium mr-1.5">情報元</span><span
                        class="text-[#615C56] noto-sans text-[16px]">業界標準価格</span></div>
            </div>
        </div>
    </div>

    <div class="relative max-w-[1000px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full space-y-16 md:space-y-24">

        <?php if (! $has_rates) : ?>
        <p class="text-center noto-sans text-[#615C56] font-sans text-[14px] md:text-[16px] tracking-wide">
            相場データは現在準備中です。しばらくお待ちください。
        </p>
        <?php else : ?>

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
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K24
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K24'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K23
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K23'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K22
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K22'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K21.6
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K21.6'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K20
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K20'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K18
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K18'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K17
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K17'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K14
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K14'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                </div>
                <div class="divide-y divide-[#E3DCCE] border-t border-[#E3DCCE] md:border-t-0">
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K12
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K12'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K10
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K10'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K9
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K9'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K8
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K8'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K7
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K7'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K5
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K5'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K18WG
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K18WG'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#B57A3F] text-white py-3 text-center font-bold tracking-wider">
                            K14WG
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($gold['K14WG'])); ?><span
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
                            class="w-1/2 bg-[#303E5F] text-[#FFFCF5] py-3 text-center font-bold tracking-wider">
                            Pt1000
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($platinum['Pt1000'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#303E5F] text-[#FFFCF5] py-3 text-center font-bold tracking-wider">
                            Pt950
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($platinum['Pt950'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                </div>
                <div class="divide-y divide-[#E3DCCE] border-t border-[#E3DCCE] md:border-t-0">
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#303E5F] text-[#FFFCF5] py-3 text-center font-bold tracking-wider">
                            Pt900
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($platinum['Pt900'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#303E5F] text-[#FFFCF5] py-3 text-center font-bold tracking-wider">
                            Pt850
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($platinum['Pt850'])); ?><span
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
                            class="w-1/2 bg-[#615C56] text-white py-3 text-center font-bold tracking-wider">
                            SV1000
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($silver['SV1000'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                </div>
                <div class="divide-y divide-[#E3DCCE] border-t border-[#E3DCCE] md:border-t-0">
                    <div class="flex items-stretch bg-white">
                        <div
                            class="w-1/2 bg-[#615C56] text-white py-3 text-center font-bold tracking-wider">
                            SV925
                        </div>
                        <div class="w-1/2 py-3 px-6 text-center font-medium text-[#33312D]"><?php echo esc_html(number_format($silver['SV925'])); ?><span
                                class="text-[13px]">円</span></div>
                    </div>
                </div>
            </div>
        </div>

        <?php endif; ?>

    </div>
</section>


<?php get_footer(); ?>