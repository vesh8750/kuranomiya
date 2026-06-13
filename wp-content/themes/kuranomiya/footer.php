
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
