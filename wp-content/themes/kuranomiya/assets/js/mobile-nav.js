import "../css/mobile-nav.css";
import { gsap } from "gsap";

const DESKTOP_BREAKPOINT = 1024;
const OPEN_STATE = "open";
const CLOSED_STATE = "closed";

const prefersReducedMotion = window.matchMedia(
  "(prefers-reduced-motion: reduce)",
).matches;

class MobileNav {
  #root;
  #toggle;
  #closeBtn;
  #panel;
  #links;
  #timeline = null;
  #isOpen = false;
  #isAnimating = false;
  #focusableSelector =
    'a[href], button:not([disabled]), [tabindex]:not([tabindex="-1"])';

  constructor() {
    this.#root = document.getElementById("mobile-nav");
    this.#toggle = document.getElementById("mobile-nav-toggle");
    this.#closeBtn = document.getElementById("mobile-nav-close");

    if (!this.#root || !this.#toggle) return;

    this.#panel = this.#root.querySelector("[data-mobile-nav-panel]");
    this.#links = [...this.#root.querySelectorAll(".mobile-nav__link")];

    this.#forceClosed();
    document.documentElement.classList.add("mobile-nav-active");

    this.#toggle.addEventListener("click", () => {
      if (this.#isOpen) {
        this.close();
      } else {
        this.open();
      }
    });

    if (this.#closeBtn) {
      this.#closeBtn.addEventListener("click", () => {
        this.close();
      });
    }

    this.#root.addEventListener("click", (event) => {
      if (event.target === this.#root) {
        this.close();
      }
    });

    this.#root.querySelectorAll("a[href]").forEach((link) => {
      link.addEventListener("click", () => {
        this.#forceClosed();
      });
    });

    document.addEventListener("keydown", (event) => {
      if (event.key === "Escape" && this.#isOpen) {
        event.preventDefault();
        this.close();
      }
    });

    window.addEventListener("pageshow", () => {
      this.#forceClosed();
      document.documentElement.classList.add("mobile-nav-active");
    });

    window.addEventListener("pagehide", () => {
      this.#forceClosed();
    });

    window.addEventListener("resize", () => {
      if (window.innerWidth >= DESKTOP_BREAKPOINT && this.#isOpen) {
        this.#forceClosed();
      }
    });
  }

  #forceClosed() {
    this.#timeline?.kill();
    this.#timeline = null;
    this.#isAnimating = false;
    this.#isOpen = false;

    this.#root.setAttribute("data-menu-state", CLOSED_STATE);
    this.#root.setAttribute("aria-hidden", "true");
    this.#toggle.setAttribute("aria-expanded", "false");
    document.body.classList.remove("mobile-nav-scroll-lock");

    gsap.killTweensOf([this.#root, this.#panel, this.#links]);

    gsap.set(this.#root, {
      visibility: "hidden",
      pointerEvents: "none",
    });

    if (this.#panel) {
      gsap.set(this.#panel, { xPercent: 100 });
    }

    if (this.#links.length) {
      gsap.set(this.#links, { opacity: 0, y: 12 });
    }
  }

  open() {
    if (
      this.#isOpen ||
      this.#isAnimating ||
      window.innerWidth >= DESKTOP_BREAKPOINT
    ) {
      return;
    }

    this.#isAnimating = true;
    this.#isOpen = true;

    this.#root.setAttribute("data-menu-state", OPEN_STATE);
    this.#root.setAttribute("aria-hidden", "false");
    this.#toggle.setAttribute("aria-expanded", "true");
    document.body.classList.add("mobile-nav-scroll-lock");

    if (prefersReducedMotion) {
      gsap.set(this.#root, { visibility: "visible", pointerEvents: "auto" });
      gsap.set(this.#panel, { xPercent: 0 });
      gsap.set(this.#links, { opacity: 1, y: 0 });
      this.#isAnimating = false;
      this.#focusFirstLink();
      return;
    }

    this.#timeline?.kill();

    gsap.set(this.#root, { visibility: "visible", pointerEvents: "auto" });
    gsap.set(this.#panel, { xPercent: 100 });
    gsap.set(this.#links, { opacity: 0, y: 12 });

    this.#timeline = gsap.timeline({
      defaults: { ease: "power3.out" },
      onComplete: () => {
        this.#isAnimating = false;
      },
    });

    this.#timeline.to(this.#panel, { xPercent: 0, duration: 0.45 }, 0);

    if (this.#links.length) {
      this.#timeline.to(
        this.#links,
        {
          opacity: 1,
          y: 0,
          duration: 0.38,
          stagger: 0.035,
          ease: "power2.out",
        },
        0.12,
      );
    }

    this.#focusFirstLink();
  }

  close() {
    if (!this.#isOpen || this.#isAnimating) {
      if (!this.#isOpen) {
        this.#forceClosed();
      }
      return;
    }

    this.#isAnimating = true;

    if (prefersReducedMotion) {
      this.#forceClosed();
      this.#toggle.focus();
      return;
    }

    this.#timeline?.kill();

    this.#timeline = gsap.timeline({
      defaults: { ease: "power3.in" },
      onComplete: () => {
        this.#forceClosed();
        this.#toggle.focus();
      },
    });

    if (this.#links.length) {
      this.#timeline.to(
        this.#links,
        {
          opacity: 0,
          y: 8,
          duration: 0.18,
          stagger: { each: 0.02, from: "end" },
          ease: "power2.in",
        },
        0,
      );
    }

    this.#timeline.to(this.#panel, { xPercent: 100, duration: 0.38 }, 0.06);
  }

  #focusFirstLink() {
    const firstLink = this.#root.querySelector(this.#focusableSelector);
    firstLink?.focus({ preventScroll: true });
  }
}

export function initMobileNav() {
  return new MobileNav();
}
