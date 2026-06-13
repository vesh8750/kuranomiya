<!-- CTA SECTION -->
<?php if (!is_page_template('page-templates/contact.php')) : ?>
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
<?php endif; ?>

<!-- FOOTER SECTION -->
<footer class="relative bg-[#1D2B4B] text-white pt-16 pb-8 font-serif-jp overflow-hidden">
  <div class="absolute right-6 top-6 sm:right-12 sm:top-10 z-20">
    <button id="scroll-top-btn" type="button"
      class="w-14 h-auto block hover:opacity-80 active:scale-95 transition-all duration-200 focus:outline-none group"
      aria-label="Scroll to Top">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/scroll-top-emblem.svg" alt="Top"
        class="w-full h-auto object-contain transform group-hover:-translate-y-1 transition-transform duration-300" />
    </button>
  </div>

  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 lg:px-10 z-10 relative">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 pb-12 border-b border-white/10 mb-8">

      <!-- LEFT PANEL: LOGO & METADATA -->
      <div class="lg:col-span-6 space-y-6">
        <!-- Logo & Tagline Group -->
        <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
          <a href="#" class="flex-shrink-0">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/footer-logo.svg" alt="買取 蔵の宮" class="h-10 sm:h-12 w-auto object-contain" />
          </a>
          <div class="hidden sm:block w-[1px] h-6 bg-white/20"></div>
          <p class="text-[clamp(14px,1.5vw,22px)] tracking-wider">
            <span class="text-[#B57A3F]">観る</span>ことに、<span class="text-[#B57A3F]">真剣</span>です。
          </p>
        </div>

        <!-- Contact Metrics Details -->
        <div class="space-y-4 font-sans text-[13px] sm:text-[14px] text-white/80 tracking-wide !font-normal">
          <div class="flex flex-col sm:flex-row sm:items-baseline gap-2 sm:gap-4">
            <a href="tel:0463000000"
              class="text-white font-['EB_Garamond'] text-[20px] sm:text-[22px] font-bold tracking-wider hover:text-[#B57A3F] transition-colors flex items-center">
              <svg class="w-4 h-4 mr-1.5 text-[#B57A3F] flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M6.62 10.79a15.15 15.15 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.27c1.12.44 2.33.68 3.58.68a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.24 2.46.68 3.58a1 1 0 01-.27 1.11l-2.2 2.2z" />
              </svg>
              0463-00-0000
            </a>
            <p>営業時間 <span class="text-white">10:00-19:00</span> <span class="mx-1 text-white/30">|</span> 定休日 <span
                class="text-white">水曜日</span></p>
          </div>

          <p class="noto-sans text-[14px]">
            〒254-0043 神奈川県平塚市紅谷12-24 リーフ8 1階（湘南スターモール商店街内）
          </p>
          <p class="text-[16px]">
            <span class="text-[#B7C2DA]">古物商許可番号 </span>xxxxxxxxxxxx
          </p>
        </div>
      </div>

      <!-- RIGHT PANEL: LINK MENUS -->
      <div class="lg:col-span-6 grid grid-cols-2 sm:grid-cols-3 gap-8 lg:pl-8 lg:border-l lg:border-white/10">

        <!-- ABOUT MENU -->
        <div class="space-y-4">
          <h4 class="font-sans text-[#B57A3F] text-[12px] sm:text-[13px] uppercase tracking-[0.15em] font-bold">About
          </h4>
          <ul class="noto-sans space-y-3 text-[13px] sm:text-[16px] text-white/80">
            <li><a href="#" class="hover:text-[#B57A3F] transition-colors block">ご挨拶</a></li>
            <li><a href="#" class="hover:text-[#B57A3F] transition-colors block">選ばれる理由</a></li>
            <li><a href="#" class="hover:text-[#B57A3F] transition-colors block">店舗のご案内</a></li>
            <li><a href="#" class="hover:text-[#B57A3F] transition-colors block">コラム</a></li>
          </ul>
        </div>

        <!-- SERVICE MENU -->
        <div class="space-y-4">
          <h4 class="font-sans text-[#B57A3F] text-[12px] sm:text-[13px] uppercase tracking-[0.15em] font-bold">
            Service</h4>
          <ul class="noto-sans space-y-3 text-[13px] font-medium sm:text-[16px] text-white/80">
            <li><a href="#" class="hover:text-[#B57A3F] transition-colors block">買取品目一覧</a></li>
            <li><a href="#" class="hover:text-[#B57A3F] transition-colors block">買取実績</a></li>
            <li><a href="#" class="hover:text-[#B57A3F] transition-colors block">金相場</a></li>
            <li><a href="#" class="hover:text-[#B57A3F] transition-colors block">よくあるご質問</a></li>
          </ul>
        </div>

        <!-- CONTACT MENU -->
        <div class="space-y-4 col-span-2 sm:col-span-1">
          <h4 class="font-sans text-[#B57A3F] text-[12px] sm:text-[13px] uppercase tracking-[0.15em] font-bold">
            Contact</h4>
          <ul class="noto-sans space-y-3 text-[13px] font-medium sm:text-[16px] text-white/80">
            <li><a href="#" class="hover:text-[#B57A3F] transition-colors block">LINEで相談する</a></li>
            <li><a href="#" class="hover:text-[#B57A3F] transition-colors block">お電話で相談する</a></li>
            <li><a href="#" class="hover:text-[#B57A3F] transition-colors block">お問い合わせフォーム</a></li>
          </ul>
        </div>

      </div>

    </div>

    <!-- COPYRIGHT SUB-FOOTER LINE -->
    <div class="text-[14px] text-[#B7C2DA] tracking-wider noto-sans text-center sm:text-left">
      © 買取 蔵の宮 All Rights Reserved. <?php echo date('Y'); ?>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>