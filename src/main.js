import "./style.css";

// Mobile Menu Toggle

document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.getElementById("menu-btn");
  const closeMenuBtn = document.getElementById("close-menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  const openMenu = () => {
    mobileMenu.classList.remove("translate-x-full");
    mobileMenu.classList.add("translate-x-0");
    document.body.classList.add("overflow-hidden");
  };

  const closeMenu = () => {
    mobileMenu.classList.remove("translate-x-0");
    mobileMenu.classList.add("translate-x-full");
    document.body.classList.remove("overflow-hidden");
  };

  if (menuBtn && mobileMenu) {
    menuBtn.addEventListener("click", openMenu);
  }

  if (closeMenuBtn) {
    closeMenuBtn.addEventListener("click", closeMenu);
  }

  window.addEventListener("resize", () => {
    if (
      window.innerWidth >= 1024 &&
      !mobileMenu.classList.contains("translate-x-full")
    ) {
      closeMenu();
    }
  });
});

document.addEventListener("DOMContentLoaded", () => {
  function createInfiniteCarousel({
    trackId,
    prevBtnId,
    nextBtnId,
    dotsId,
    cardSelector,
    dotActiveClass,
    dotInactiveClass,
  }) {
    const track = document.getElementById(trackId);
    const prevBtn = document.getElementById(prevBtnId);
    const nextBtn = document.getElementById(nextBtnId);
    const dotsContainer = document.getElementById(dotsId);

    if (!track || !prevBtn || !nextBtn) return;

    const originals = Array.from(track.querySelectorAll(cardSelector));
    const count = originals.length;

    originals.forEach((card) => {
      const before = card.cloneNode(true);
      const after = card.cloneNode(true);

      before.classList.add("clone", "mr-4", "lg:mr-0", "lg:hidden");
      after.classList.add("clone", "mr-4", "lg:mr-0", "lg:hidden");

      track.insertBefore(before, track.firstChild);
      track.appendChild(after);
    });

    let cardWidth = originals[0].offsetWidth + 16;
    let currentIndex = count;

    const init = () => {
      if (window.innerWidth < 1024) {
        cardWidth = originals[0].offsetWidth + 16;
        track.scrollLeft = currentIndex * cardWidth;
      } else {
        track.scrollLeft = 0;
      }
    };

    setTimeout(init, 50);

    const updateDots = (realIndex) => {
      if (!dotsContainer) return;
      Array.from(dotsContainer.children).forEach((dot, i) => {
        dot.classList.toggle(dotActiveClass, i === realIndex);
        dot.classList.toggle(dotInactiveClass, i !== realIndex);
      });
    };

    const slideTo = (index) => {
      if (window.innerWidth >= 1024) return;
      track.scrollTo({
        left: index * cardWidth,
        behavior: "smooth",
      });
      currentIndex = index;
    };

    nextBtn.addEventListener("click", () => slideTo(currentIndex + 1));
    prevBtn.addEventListener("click", () => slideTo(currentIndex - 1));

    let scrollTimeout;

    track.addEventListener("scroll", () => {
      if (window.innerWidth >= 1024) return;

      clearTimeout(scrollTimeout);

      scrollTimeout = setTimeout(() => {
        const approxIndex = Math.round(track.scrollLeft / cardWidth);

        if (approxIndex >= count * 2) {
          track.style.scrollBehavior = "auto";
          currentIndex = approxIndex - count;
          track.scrollLeft = currentIndex * cardWidth;
          track.style.scrollBehavior = "smooth";
        } else if (approxIndex < count) {
          track.style.scrollBehavior = "auto";
          currentIndex = approxIndex + count;
          track.scrollLeft = currentIndex * cardWidth;
          track.style.scrollBehavior = "smooth";
        } else {
          currentIndex = approxIndex;
        }

        const realIndex = (currentIndex - count + count) % count;

        updateDots(realIndex);
      }, 150);
    });

    window.addEventListener("resize", init);
  }

  // -------------------------
  // ALL CAROUSELS
  // -------------------------

  createInfiniteCarousel({
    trackId: "story-track",
    prevBtnId: "story-prev",
    nextBtnId: "story-next",
    dotsId: "story-dots",
    cardSelector: ".story-card",
    dotActiveClass: "bg-white",
    dotInactiveClass: "bg-white/40",
  });

  createInfiniteCarousel({
    trackId: "items-track",
    prevBtnId: "items-prev",
    nextBtnId: "items-next",
    dotsId: "items-dots",
    cardSelector: ".item-card",
    dotActiveClass: "bg-[#B57A3F]",
    dotInactiveClass: "bg-[#B57A3F]/30",
  });

  createInfiniteCarousel({
    trackId: "achievements-track",
    prevBtnId: "achievements-prev",
    nextBtnId: "achievements-next",
    dotsId: "achievements-dots",
    cardSelector: ".achievement-card",
    dotActiveClass: "bg-[#B57A3F]",
    dotInactiveClass: "bg-[#B57A3F]/30",
  });

  createInfiniteCarousel({
    trackId: "column-track",
    prevBtnId: "column-prev",
    nextBtnId: "column-next",
    dotsId: "column-dots",
    cardSelector: ".column-card",
    dotActiveClass: "bg-white",
    dotInactiveClass: "bg-white/40",
  });
});

//   Accordion Toggle

const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach((item) => {
  const trigger = item.querySelector(".faq-trigger");
  const panel = item.querySelector(".faq-panel");
  const icon = item.querySelector(".faq-icon");

  if (trigger && panel && icon) {
    trigger.addEventListener("click", () => {
      const isOpen = panel.classList.contains("max-h-[500px]");
      faqItems.forEach((otherItem) => {
        const otherPanel = otherItem.querySelector(".faq-panel");
        const otherIcon = otherItem.querySelector(".faq-icon");
        if (otherPanel && otherPanel.classList.contains("max-h-[500px]")) {
          otherPanel.classList.remove("max-h-[500px]");
          otherPanel.classList.add("max-h-0");
          if (otherIcon) otherIcon.style.transform = "rotate(0deg)";
        }
      });
      if (!isOpen) {
        panel.classList.remove("max-h-0");
        panel.classList.add("max-h-[500px]");
        icon.style.transform = "rotate(90deg)";
      } else {
        panel.classList.remove("max-h-[500px]");
        panel.classList.add("max-h-0");
        icon.style.transform = "rotate(0deg)";
      }
    });
  }
});

const scrollTopBtn = document.getElementById("scroll-top-btn");

if (scrollTopBtn) {
  scrollTopBtn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
}
