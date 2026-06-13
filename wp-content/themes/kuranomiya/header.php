<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-[#FFFCF5] text-[#33312D] antialiased'); ?>>
<?php wp_body_open(); ?>

    <header class="w-full bg-[#FFFCF5] border-t-[3px] border-[#303E5F] sticky top-0 z-50 shadow-sm font-serif-jp">
        <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 h-16 sm:h-20 lg:h-24 flex items-center justify-between">

            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex-shrink-0">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/nav-logo.svg" alt="買取 蔵の宮 KURANOMIYA" class="h-10 sm:h-12 lg:h-13 w-auto object-contain" />
            </a>

            <div
                class="hidden lg:flex items-center lg:gap-[clamp(1rem,1.8vw,2rem)] xl:gap-[clamp(1.5rem,2.5vw,3.5rem)] font-medium text-[clamp(13px,1.1vw,15px)] text-[#33312D]">

                <nav class="flex items-center lg:gap-[clamp(1rem,1.8vw,2rem)] xl:gap-[clamp(1.5rem,2.5vw,3.5rem)] nav-bar">
                    <a href="#" class="hover:text-[#B57A3F] transition-colors duration-200 whitespace-nowrap">買取品目</a>
                    <a href="#" class="hover:text-[#B57A3F] transition-colors duration-200 whitespace-nowrap">選ばれる理由</a>
                    <a href="#" class="hover:text-[#B57A3F] transition-colors duration-200 whitespace-nowrap">金相場</a>
                    <a href="#" class="hover:text-[#B57A3F] transition-colors duration-200 whitespace-nowrap">買取実績</a>
                    <a href="#" class="hover:text-[#B57A3F] transition-colors duration-200 whitespace-nowrap">コラム</a>
                    <a href="#" class="hover:text-[#B57A3F] transition-colors duration-200 whitespace-nowrap">アクセス</a>
                </nav>

                <a href="tel:0463000000"
                    class="flex items-center font-bold text-[clamp(15px,1.2vw,18px)] hover:opacity-80 transition-opacity duration-200 whitespace-nowrap">
                    <svg class="w-5 h-5 mr-1.5 text-[#B57A3F] flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M6.62 10.79a15.15 15.15 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.27c1.12.44 2.33.68 3.58.68a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.24 2.46.68 3.58a1 1 0 01-.27 1.11l-2.2 2.2z" />
                    </svg>
                    0463-00-0000
                </a>

                <a href="#"
                    class="bg-[#B57A3F] noto-sans text-white flex items-center justify-center space-x-2 px-5 py-3 rounded-[3px] font-medium shadow-sm hover:bg-[#a06830] transition-colors duration-300 whitespace-nowrap">
                    <span>LINEで相談する</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>

            </div>

            <div class="flex lg:hidden items-center">
                <button id="menu-btn" type="button" class="p-2 text-[#33312D] focus:outline-none" aria-label="Toggle Menu">
                    <svg class="w-8 h-8 stroke-current" fill="none" stroke-width="1.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

        </div>
    </header>
    <div id="mobile-menu"
        class="fixed inset-0 z-[100] bg-[#303E5F] transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden overflow-y-auto">

        <div class="flex justify-end p-5">
            <button id="close-menu-btn" type="button" class="text-white hover:opacity-80 focus:outline-none"
                aria-label="Close Menu">
                <svg class="w-9 h-9" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <nav class="flex flex-col items-center text-center px-6 pb-16 font-serif-jp tracking-wider">

            <div
                class="flex flex-col space-y-[clamp(1.25rem,4vh,1.75rem)] text-white text-[clamp(1rem,4.5vw,1.15rem)] mb-[clamp(1.75rem,5vh,2.5rem)]">
                <a href="#" class="hover:text-[#B57A3F] transition-colors">ホーム</a>
                <a href="#" class="hover:text-[#B57A3F] transition-colors">アクセス</a>
            </div>

            <div class="flex flex-col w-full mb-[clamp(1.75rem,5vh,2.5rem)]">
                <span
                    class="text-[#B57A3F] uppercase text-[clamp(0.8rem,3.5vw,0.9rem)] font-semibold tracking-widest mb-[clamp(1rem,3vh,1.25rem)]">About</span>
                <div class="flex flex-col space-y-[clamp(1rem,3.5vh,1.5rem)] text-white text-[clamp(0.95rem,4vw,1.1rem)]">
                    <a href="#" class="hover:text-[#B57A3F] transition-colors">ご挨拶</a>
                    <a href="#" class="hover:text-[#B57A3F] transition-colors">選ばれる理由</a>
                    <a href="#" class="hover:text-[#B57A3F] transition-colors">店舗のご案内</a>
                    <a href="#" class="hover:text-[#B57A3F] transition-colors">コラム</a>
                </div>
            </div>

            <div class="flex flex-col w-full mb-[clamp(1.75rem,5vh,2.5rem)]">
                <span
                    class="text-[#B57A3F] uppercase text-[clamp(0.8rem,3.5vw,0.9rem)] font-semibold tracking-widest mb-[clamp(1rem,3vh,1.25rem)]">Service</span>
                <div class="flex flex-col space-y-[clamp(1rem,3.5vh,1.5rem)] text-white text-[clamp(0.95rem,4vw,1.1rem)]">
                    <a href="#" class="hover:text-[#B57A3F] transition-colors">買取品目一覧</a>
                    <a href="#" class="hover:text-[#B57A3F] transition-colors">買取実績</a>
                    <a href="#" class="hover:text-[#B57A3F] transition-colors">金相場</a>
                    <a href="#" class="hover:text-[#B57A3F] transition-colors">よくあるご質問</a>
                </div>
            </div>

            <div class="flex flex-col w-full">
                <span
                    class="text-[#B57A3F] uppercase text-[clamp(0.8rem,3.5vw,0.9rem)] font-semibold tracking-widest mb-[clamp(1rem,3vh,1.25rem)]">Contact</span>
                <div class="flex flex-col space-y-[clamp(1rem,3.5vh,1.5rem)] text-white text-[clamp(0.95rem,4vw,1.1rem)]">
                    <a href="#" class="flex items-center justify-center space-x-1.5 hover:text-[#B57A3F] transition-colors">
                        <span>LINEで相談する</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                    <a href="tel:0463000000" class="hover:text-[#B57A3F] transition-colors">お電話で相談する</a>
                    <a href="#" class="hover:text-[#B57A3F] transition-colors">お問い合わせフォーム</a>
                </div>
            </div>

        </nav>
    </div>