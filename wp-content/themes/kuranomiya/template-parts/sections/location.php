<!-- Map Information  -->

<section class="w-full bg-[#F1ECE0] font-serif-jp overflow-hidden" id="access">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-stretch min-h-[550px] md:min-h-[650px]">

        <div
            class="flex flex-col justify-center px-6 sm:px-12 lg:px-16 xl:px-24 py-16 md:py-20 max-w-[750px] lg:max-w-none mx-auto w-full"
            data-animate="fade-up">
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
                <a href="<?php echo esc_url(kuranomiya_get_google_maps_url()); ?>" target="_blank" rel="noopener noreferrer"
                    class="bg-[#B57A3F] text-white inline-flex items-center justify-center space-x-1 px-8 py-4 font-medium shadow-md hover:bg-[#a06830] transition-colors w-[260px] sm:w-[300px]">
                    <span class="text-[16px] md:text-[18px] noto-sans font-semibold tracking-wider">Google
                        Mapをみる</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>

        </div>

        <div class="w-full h-[350px] sm:h-[450px] lg:h-full min-h-[400px] lg:min-h-none relative z-10 bg-gray-200">
            <iframe
                src="<?php echo esc_url(kuranomiya_get_google_maps_embed_url()); ?>"
                class="w-full h-full border-none grayscale-[20%] contrast-[110%] select-none pointer-events-auto"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                title="買取 蔵の宮 アクセスマップ">
            </iframe>
        </div>

    </div>
</section>