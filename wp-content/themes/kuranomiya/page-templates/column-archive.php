<?php
/**
 * Template Name: Column Archive
 */

get_header();
?>


<div class="w-full bg-[#FFFCF5] pt-4 sm:pt-6 font-sans text-[12px] tracking-wider text-[#615C56]">
    <div class="max-w-[1400px] noto-sans mx-auto px-5 sm:px-6 lg:px-8">
        <nav class="flex items-center space-x-2 flex-wrap">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#B57A3F] transition-colors">ホーム</a>
            <span class="text-[#B57A3F] font-medium select-none">&gt;</span>
            <span class="text-[#33312D] font-medium">コラム</span>
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
        column
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 items-end gap-8 lg:gap-8">

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
                class="lg:col-span-9 text-[#615C56] font-medium noto-sans !font-medium text-[clamp(0.7rem,2.8vw,1.05rem)] leading-[2] tracking-wider space-y-2 max-w-[620px] mx-auto lg:mx-0 text-left pl-0 lg:pl-4">
                <p>買取・査定・お品物の知識を店主の視点でお届けします。</p>
                <p>大切なお品物の売却や遺品整理などの際は、こちらもご覧ください。</p>
            </div>

        </div>
    </div>
</section>

<!-- Column Archive Section  -->

<section class="relative bg-[#F1ECE0] py-24 pt-28 lg:pt-36  font-serif-jp overflow-hidden">

    <div class="absolute right-0 top-[3%] w-[45%] md:w-[25%] max-w-[320px] pointer-events-none z-0">
        <img src="/assets/diamond-top-pattern.png" alt=""
            class="w-full h-auto object-contain transform rotate-180" />
    </div>
    <div class="absolute left-0 bottom-0 w-[45%] md:w-[35%] max-w-[500px] pointer-events-none z-0">
        <img src="/assets/diamond-bottom-pattern.png" alt="" class="w-full h-auto object-contain" />
    </div>

    <div class="relative max-w-[1240px] mx-auto px-5 sm:px-6 lg:px-8 z-10">

        <div class="pb-6 mb-10 font-sans space-y-6">

            <div class="space-y-3 border-b border-[#33312D]/10 pb-7 flex items-center gap-8 md:gap-10">
                <span class="text-[#33312D] text-[13px] sm:text-[14px] font-bold tracking-wider block mb-0">新着 /
                    人気</span>
                <div class="flex flex-wrap gap-2.5 !mt-0">
                    <button type="button"
                        class="px-5 py-2 bg-[#303E5F] noto-sans rounded-[24px] text-white text-[14px] font-medium transition-colors hover:bg-[#232e47]">新着記事</button>
                    <button type="button"
                        class="px-5 py-2 bg-[#FFFCF5] noto-sans rounded-[24px] text-[#33312D] text-[14px] font-medium border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]">人気の記事</button>
                </div>
            </div>

            <div class="space-y-3 flex flex-col md:flex-row itmes-start md:items-center gap-6 md:gap-10">
                <span
                    class="text-[#33312D] text-[13px] sm:text-[14px] font-bold tracking-wider block mb-0">カテゴリ選択</span>
                <div class="flex flex-wrap gap-2.5 !mt-0">
                    <button type="button"
                        class="px-6 py-2 bg-[#B57A3F] noto-sans rounded-[24px] text-white text-[14px] font-medium transition-colors hover:bg-[#a06830]">すべて</button>
                    <button type="button"
                        class="px-5 py-2 bg-[#FFFCF5] noto-sans rounded-[24px] text-[#B57A3F] text-[14px] font-medium border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]">貴金属</button>
                    <button type="button"
                        class="px-5 py-2 bg-[#FFFCF5] noto-sans rounded-[24px] text-[#B57A3F] text-[14px] font-medium border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]">時計</button>
                    <button type="button"
                        class="px-5 py-2 bg-[#FFFCF5] noto-sans rounded-[24px] text-[#B57A3F] text-[14px] font-medium border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]">宝飾品</button>
                    <button type="button"
                        class="px-5 py-2 bg-[#FFFCF5] noto-sans rounded-[24px] text-[#B57A3F] text-[14px] font-medium border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]">ブランド品</button>
                    <button type="button"
                        class="px-5 py-2 bg-[#FFFCF5] noto-sans rounded-[24px] text-[#B57A3F] text-[14px] font-medium border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]">終活</button>
                    <button type="button"
                        class="px-5 py-2 bg-[#FFFCF5] noto-sans rounded-[24px] text-[#B57A3F] text-[14px] font-medium border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]">遺品整理</button>
                    <button type="button"
                        class="px-5 py-2 bg-[#FFFCF5] noto-sans rounded-[24px] text-[#B57A3F] text-[14px] font-medium border border-[#E3DCCE] transition-colors hover:bg-[#F6F2E9]">その他</button>
                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mx-auto mb-14">

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                    <img src="/assets/column-img-1.png" alt="「観る」という言葉に込めた、私たちの姿勢について"
                        class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-1.5 text-[14px] tracking-wider font-medium">
                        その他</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-4 ">
                        「観る」という言葉に込めた、私たちの姿勢について
                    </h3>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-4"></div>
                    <p
                        class="text-[#615C56] text-[14px] leading-[1.75] noto-sans !font-normal tracking-wide flex-grow mb-5">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。
                    </p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">2026.05.01</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                    <img src="/assets/column-img-2.png" alt="金の価値はどう決まる？相場の見方を分かりやすく解説"
                        class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-1.5 text-[14px] tracking-wider font-medium">
                        貴金属</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3
                        class="text-[#33312D] noto-serif text-[1.15rem] font-semibold tracking-wide leading-snug mb-4 ">
                        金の価値はどう決まる？相場の見方を分かりやすく解説
                    </h3>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-4"></div>
                    <p
                        class="text-[#615C56] text-[14px] leading-[1.75] noto-sans !font-normal tracking-wide flex-grow mb-5">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。
                    </p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">2026.04.28</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div class="relative w-full aspect-[5/3] overflow-hidden bg-gray-100">
                    <img src="/assets/column-img-3.png" alt="整理を始める前にお品物との向き合い方の話"
                        class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-1.5 text-[14px] tracking-wider font-medium">
                        遺品整理</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-4 ">
                        整理を始める前にお品物との向き合い方の話
                    </h3>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-4"></div>
                    <p
                        class="text-[#615C56] text-[14px] leading-[1.75] noto-sans !font-normal tracking-wide flex-grow mb-5">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。
                    </p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">2026.04.20</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div
                    class="relative w-full aspect-[5/3] overflow-hidden bg-[#E3DCCE]/40 flex items-center justify-center">
                    <img src="/assets/placeholder-img.png" alt="" class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-1.5 text-[14px] tracking-wider font-medium">
                        カテゴリ名</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-4 ">
                        タイトルが入ります</h3>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-4"></div>
                    <p
                        class="text-[#615C56] text-[14px] leading-[1.75] noto-sans !font-normal tracking-wide flex-grow mb-5">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">0000.00.00</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div
                    class="relative w-full aspect-[5/3] overflow-hidden bg-[#E3DCCE]/40 flex items-center justify-center">
                    <img src="/assets/placeholder-img.png" alt="" class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-1.5 text-[14px] tracking-wider font-medium">
                        カテゴリ名</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-4 ">
                        タイトルが入ります</h3>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-4"></div>
                    <p
                        class="text-[#615C56] text-[14px] leading-[1.75] noto-sans !font-normal tracking-wide flex-grow mb-5">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">0000.00.00</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div
                    class="relative w-full aspect-[5/3] overflow-hidden bg-[#E3DCCE]/40 flex items-center justify-center">
                    <img src="/assets/placeholder-img.png" alt="" class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-1.5 text-[14px] tracking-wider font-medium">
                        カテゴリ名</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-4 ">
                        タイトルが入ります</h3>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-4"></div>
                    <p
                        class="text-[#615C56] text-[14px] leading-[1.75] noto-sans !font-normal tracking-wide flex-grow mb-5">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">0000.00.00</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div
                    class="relative w-full aspect-[5/3] overflow-hidden bg-[#E3DCCE]/40 flex items-center justify-center">
                    <img src="/assets/placeholder-img.png" alt="" class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-1.5 text-[14px] tracking-wider font-medium">
                        カテゴリ名</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-4 ">
                        タイトルが入ります</h3>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-4"></div>
                    <p
                        class="text-[#615C56] text-[14px] leading-[1.75] noto-sans !font-normal tracking-wide flex-grow mb-5">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">0000.00.00</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div
                    class="relative w-full aspect-[5/3] overflow-hidden bg-[#E3DCCE]/40 flex items-center justify-center">
                    <img src="/assets/placeholder-img.png" alt="" class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-1.5 text-[14px] tracking-wider font-medium">
                        カテゴリ名</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-4 ">
                        タイトルが入ります</h3>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-4"></div>
                    <p
                        class="text-[#615C56] text-[14px] leading-[1.75] noto-sans !font-normal tracking-wide flex-grow mb-5">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">0000.00.00</span>
                </div>
            </div>

            <div class="bg-[#FFFCF5] shadow-xs flex flex-col h-full">
                <div
                    class="relative w-full aspect-[5/3] overflow-hidden bg-[#E3DCCE]/40 flex items-center justify-center">
                    <img src="/assets/placeholder-img.png" alt="" class="w-full h-full object-cover" />
                    <div
                        class="absolute bottom-0 left-0 bg-[#B57A3F] text-white px-5 py-1.5 text-[14px] tracking-wider font-medium">
                        カテゴリ名</div>
                </div>
                <div class="p-6 sm:p-8 flex flex-col flex-grow">
                    <h3 class="text-[#33312D] text-[1.15rem] font-bold tracking-wide leading-snug mb-4 ">
                        タイトルが入ります</h3>
                    <div class="w-full h-[1px] bg-[#EAE2D5] mb-4"></div>
                    <p
                        class="text-[#615C56] text-[14px] leading-[1.75] noto-sans !font-normal tracking-wide flex-grow mb-5">
                        こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。こちらにコメントが入ります。</p>
                    <span
                        class="text-[#B57A3F] font-sans text-[13px] font-medium tracking-wider block">0000.00.00</span>
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