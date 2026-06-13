import "../css/main.css";
import "../css/custom.css";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

const prefersReducedMotion = window.matchMedia(
  "(prefers-reduced-motion: reduce)",
).matches;

if (!prefersReducedMotion) {
  gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
}

const SCROLL_START = "top 85%";

function getStaggerTargets(container) {
  return [...container.children].filter(
    (el) => !el.classList.contains("pointer-events-none"),
  );
}

const scrollRevealTriggers = [];

function parseScrollStartRatio(start) {
  const match = start.match(/top\s+(\d+(?:\.\d+)?)%/);

  if (!match) {
    return 0.85;
  }

  return parseFloat(match[1]) / 100;
}

function isRevealPastStart(trigger, start = SCROLL_START) {
  const rect = trigger.getBoundingClientRect();
  const threshold = parseScrollStartRatio(start) * window.innerHeight;

  return rect.top <= threshold;
}

function bindScrollReveal(trigger, animation) {
  const instance = ScrollTrigger.create({
    trigger,
    start: SCROLL_START,
    once: true,
    animation,
    toggleActions: "play none none none",
    invalidateOnRefresh: true,
  });

  scrollRevealTriggers.push({ instance, trigger, animation });
  return instance;
}

function finalizeScrollAnimations() {
  ScrollTrigger.refresh();

  scrollRevealTriggers.forEach(({ instance, trigger, animation }) => {
    if (!animation || !animation.paused()) {
      return;
    }

    if (instance.isActive || instance.progress > 0 || isRevealPastStart(trigger)) {
      animation.play(0);
    }
  });
}

export function fadeInUp(selector) {
  if (prefersReducedMotion) return;

  gsap.utils.toArray(selector).forEach((element) => {
    gsap.set(element, { y: 24, opacity: 0 });

    const timeline = gsap.timeline({ paused: true });
    timeline.to(element, {
      y: 0,
      opacity: 1,
      duration: 0.8,
      ease: "power2.out",
    });

    bindScrollReveal(element, timeline);
  });
}

export function fadeInStagger(selector) {
  if (prefersReducedMotion) return;

  const container = gsap.utils.toArray(selector)[0];
  if (!container) return;

  const targets = getStaggerTargets(container);
  if (!targets.length) return;

  gsap.set(targets, { x: 28, opacity: 0 });

  const timeline = gsap.timeline({ paused: true });
  timeline.to(targets, {
    x: 0,
    opacity: 1,
    duration: 0.75,
    ease: "power2.out",
    stagger: 0.12,
  });

  bindScrollReveal(container, timeline);
}

export function fadeInStaggerList(selector) {
  if (prefersReducedMotion) return;

  const container = gsap.utils.toArray(selector)[0];
  if (!container) return;

  const targets = getStaggerTargets(container);
  if (!targets.length) return;

  gsap.set(targets, { y: 24, opacity: 0 });

  const timeline = gsap.timeline({ paused: true });
  timeline.to(targets, {
    y: 0,
    opacity: 1,
    duration: 0.75,
    ease: "power2.out",
    stagger: 0.15,
  });

  bindScrollReveal(container, timeline);
}

export function fadeInStaggerSoft(selector) {
  if (prefersReducedMotion) return;

  const container = gsap.utils.toArray(selector)[0];
  if (!container) return;

  const targets = getStaggerTargets(container);
  if (!targets.length) return;

  gsap.set(targets, { y: 36, opacity: 0 });

  const timeline = gsap.timeline({ paused: true });
  timeline.to(targets, {
    y: 0,
    opacity: 1,
    duration: 1.05,
    ease: "power2.out",
    stagger: 0.18,
  });

  bindScrollReveal(container, timeline);
}

export function revealFromLeft(selector) {
  if (prefersReducedMotion) return;

  gsap.utils.toArray(selector).forEach((element) => {
    gsap.set(element, { clipPath: "inset(0 100% 0 0)" });

    const timeline = gsap.timeline({ paused: true });
    timeline.to(element, {
      clipPath: "inset(0 0% 0 0)",
      duration: 1.1,
      ease: "power2.out",
    });

    bindScrollReveal(element, timeline);
  });
}

export function imageReveal(selector) {
  if (prefersReducedMotion) return;

  gsap.utils.toArray(selector).forEach((element) => {
    const image =
      element.tagName === "IMG" ? element : element.querySelector("img");

    gsap.set(element, { clipPath: "inset(100% 0 0 0)" });
    if (image) {
      gsap.set(image, { scale: 1.04, transformOrigin: "center center" });
    }

    const timeline = gsap.timeline({ paused: true });
    timeline.to(element, {
      clipPath: "inset(0% 0 0 0)",
      duration: 1.15,
      ease: "power2.out",
    });

    if (image) {
      timeline.to(
        image,
        {
          scale: 1,
          duration: 1.25,
          ease: "power2.out",
        },
        0,
      );
    }

    bindScrollReveal(element, timeline);
  });
}

export function heroEntrance() {
  if (prefersReducedMotion) return;

  const tl = gsap.timeline({ defaults: { ease: "power2.out" } });

  tl.from(".hero-image", { opacity: 0, duration: 0.8 })
    .from(".hero-title", { y: 30, opacity: 0, duration: 0.6 }, "+=0.2")
    .from(".hero-subtitle", { y: 30, opacity: 0, duration: 0.5 }, "+=0.2")
    .from(".hero-cta", { y: 30, opacity: 0, duration: 0.5 }, "+=0.2");
}

function initSmoothAnchor() {
  const header =
    document.querySelector("header") ?? document.querySelector(".site-header");

  document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener("click", (e) => {
      const href = link.getAttribute("href");
      if (!href || href === "#") return;

      const target = document.querySelector(href);
      if (!target) return;

      e.preventDefault();

      const headerHeight = header ? header.getBoundingClientRect().height : 0;
      const targetOffset =
        target.getBoundingClientRect().top + window.scrollY - headerHeight;

      gsap.to(window, {
        scrollTo: targetOffset,
        duration: 0.8,
        ease: "power2.inOut",
      });
    });
  });
}

function closeFAQItem(item) {
  const panel = item.querySelector(".faq-panel");
  if (!panel) return;

  item.classList.remove("is-open");

  if (prefersReducedMotion) {
    gsap.set(panel, { height: 0, overflow: "hidden", opacity: 0 });
    return;
  }

  gsap.set(panel, { height: panel.offsetHeight });
  gsap.to(panel, {
    height: 0,
    opacity: 0,
    duration: 0.25,
    ease: "power2.in",
  });
}

function openFAQItem(item) {
  const panel = item.querySelector(".faq-panel");
  if (!panel) return;

  item.classList.add("is-open");

  if (prefersReducedMotion) {
    gsap.set(panel, { height: "auto", overflow: "hidden", opacity: 1 });
    return;
  }

  gsap.to(panel, {
    height: "auto",
    opacity: 1,
    duration: 0.3,
    ease: "power2.out",
  });
}

function initFAQ() {
  const lists = new Map();

  document.querySelectorAll(".faq-item").forEach((item) => {
    const parent = item.parentElement;
    if (!parent) return;

    if (!lists.has(parent)) {
      lists.set(parent, []);
    }

    lists.get(parent).push(item);
  });

  lists.forEach((items) => {
    items.forEach((item) => {
      const panel = item.querySelector(".faq-panel");
      const trigger = item.querySelector(".faq-trigger");
      if (!panel || !trigger) return;

      gsap.set(panel, { height: 0, overflow: "hidden", opacity: 0 });

      trigger.addEventListener("click", () => {
        if (item.classList.contains("is-open")) {
          closeFAQItem(item);
          return;
        }

        const openItem = items.find((faqItem) =>
          faqItem.classList.contains("is-open"),
        );
        if (openItem) {
          closeFAQItem(openItem);
        }

        openFAQItem(item);
      });
    });
  });
}

function initAnimations() {
  initFAQ();

  if (prefersReducedMotion) return;

  initSmoothAnchor();

  if (document.querySelector(".hero-image")) {
    heroEntrance();
  }

  document
    .querySelectorAll('[data-animate="fade-up"]')
    .forEach((el) => fadeInUp(el));
  document
    .querySelectorAll('[data-animate="stagger"]')
    .forEach((el) => fadeInStagger(el));
  document
    .querySelectorAll('[data-animate="stagger-list"]')
    .forEach((el) => fadeInStaggerList(el));
  document
    .querySelectorAll('[data-animate="stagger-soft"]')
    .forEach((el) => fadeInStaggerSoft(el));
  document
    .querySelectorAll('[data-animate="reveal-left"]')
    .forEach((el) => revealFromLeft(el));
  document
    .querySelectorAll('[data-animate="image-reveal"]')
    .forEach((el) => imageReveal(el));

  finalizeScrollAnimations();
  window.addEventListener("load", finalizeScrollAnimations, { once: true });
}

function initMobileMenu() {
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
}

function initCarousels() {
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
}

function initScrollTop() {
  const scrollTopBtn = document.getElementById("scroll-top-btn");

  if (scrollTopBtn) {
    scrollTopBtn.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }
}

function initRelatedCarousel() {
  const relTrack = document.getElementById("related-track");
  const relPrevBtn = document.getElementById("related-prev");
  const relNextBtn = document.getElementById("related-next");
  const relDotsContainer = document.getElementById("related-dots");

  if (relTrack && relPrevBtn && relNextBtn) {
    const originalRelItems = Array.from(
      relTrack.querySelectorAll(".related-card"),
    );
    const originalRelCount = originalRelItems.length;

    // Mount isolated infinite view clones with responsive desktop hidden destruction hooks
    originalRelItems.forEach((card) => {
      const cloneBefore = card.cloneNode(true);
      const cloneAfter = card.cloneNode(true);
      cloneBefore.classList.add("clone", "mr-4", "lg:mr-0", "lg:hidden");
      cloneAfter.classList.add("clone", "mr-4", "lg:mr-0", "lg:hidden");
      relTrack.insertBefore(cloneBefore, relTrack.firstChild);
      relTrack.appendChild(cloneAfter);
    });

    let relCardWidth = originalRelItems[0].offsetWidth + 16;
    let relCurrentIndex = originalRelCount;

    const initRelPosition = () => {
      if (window.innerWidth < 1024) {
        relCardWidth = originalRelItems[0].offsetWidth + 16;
        relTrack.scrollLeft = relCurrentIndex * relCardWidth;
      } else {
        relTrack.scrollLeft = 0;
      }
    };

    setTimeout(initRelPosition, 50);

    const updateRelDots = (realIndex) => {
      if (!relDotsContainer) return;
      const dots = relDotsContainer.children;
      Array.from(dots).forEach((dot, i) => {
        if (i === realIndex) {
          dot.classList.remove("bg-[#B57A3F]/30");
          dot.classList.add("bg-[#B57A3F]");
        } else {
          dot.classList.remove("bg-[#B57A3F]");
          dot.classList.add("bg-[#B57A3F]/30");
        }
      });
    };

    const slideRelTo = (index) => {
      if (window.innerWidth >= 1024) return;
      relTrack.scrollTo({
        left: index * relCardWidth,
        behavior: "smooth",
      });
      relCurrentIndex = index;
    };

    relNextBtn.addEventListener("click", () => slideRelTo(relCurrentIndex + 1));
    relPrevBtn.addEventListener("click", () => slideRelTo(relCurrentIndex - 1));

    let relScrollTimeout;
    relTrack.addEventListener("scroll", () => {
      if (window.innerWidth >= 1024) return;

      clearTimeout(relScrollTimeout);
      relScrollTimeout = setTimeout(() => {
        const currentScroll = relTrack.scrollLeft;
        const approxIndex = Math.round(currentScroll / relCardWidth);

        if (approxIndex >= originalRelCount * 2) {
          relTrack.style.scrollBehavior = "auto";
          relCurrentIndex = approxIndex - originalRelCount;
          relTrack.scrollLeft = relCurrentIndex * relCardWidth;
          relTrack.style.scrollBehavior = "smooth";
        } else if (approxIndex < originalRelCount) {
          relTrack.style.scrollBehavior = "auto";
          relCurrentIndex = approxIndex + originalRelCount;
          relTrack.scrollLeft = relCurrentIndex * relCardWidth;
          relTrack.style.scrollBehavior = "smooth";
        } else {
          relCurrentIndex = approxIndex;
        }

        const relativeIndex =
          (relCurrentIndex - originalRelCount) % originalRelCount;
        updateRelDots(
          relativeIndex >= 0 ? relativeIndex : relativeIndex + originalRelCount,
        );
      }, 150);
    });

    window.addEventListener("resize", initRelPosition);
  }
}

function initProductGallery() {
  const mainImage = document.getElementById("product-gallery-main");
  const thumbs = document.querySelectorAll(".product-gallery-thumb");

  if (!mainImage || !thumbs.length) return;

  const setActiveThumb = (activeThumb) => {
    thumbs.forEach((thumb) => {
      thumb.classList.remove("is-active", "border-[#B57A3F]");
      thumb.classList.add("border-[#E3DCCE]/60");
    });

    activeThumb.classList.add("is-active", "border-[#B57A3F]");
    activeThumb.classList.remove("border-[#E3DCCE]/60");
  };

  thumbs.forEach((thumb) => {
    thumb.addEventListener("click", () => {
      const fullSrc = thumb.dataset.fullSrc;
      const fullAlt = thumb.dataset.fullAlt;

      if (!fullSrc) return;

      mainImage.src = fullSrc;
      mainImage.alt = fullAlt || mainImage.alt;

      setActiveThumb(thumb);
    });
  });
}

document.addEventListener("DOMContentLoaded", initAnimations);

document.addEventListener("DOMContentLoaded", () => {
  initMobileMenu();
  initCarousels();
  initScrollTop();
  initRelatedCarousel();
  initProductGallery();

  if (!prefersReducedMotion) {
    finalizeScrollAnimations();
  }
});
