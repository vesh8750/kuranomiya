import '../css/main.css';
import '../css/custom.css';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin';

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (!prefersReducedMotion) {
  gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
}

const SCROLL_START = 'top 85%';

export function fadeInUp(selector) {
  if (prefersReducedMotion) return;

  gsap.from(selector, {
    y: 40,
    opacity: 0,
    duration: 0.7,
    ease: 'power2.out',
    scrollTrigger: {
      trigger: selector,
      start: SCROLL_START,
    },
  });
}

export function fadeInStagger(selector) {
  if (prefersReducedMotion) return;

  const container = gsap.utils.toArray(selector)[0];
  if (!container) return;

  gsap.from(container.children, {
    y: 40,
    opacity: 0,
    duration: 0.7,
    ease: 'power2.out',
    stagger: {
      each: 0.15,
      axis: 'x',
    },
    scrollTrigger: {
      trigger: container,
      start: SCROLL_START,
    },
  });
}

export function fadeInStaggerList(selector) {
  if (prefersReducedMotion) return;

  const container = gsap.utils.toArray(selector)[0];
  if (!container) return;

  gsap.from(container.children, {
    y: 40,
    opacity: 0,
    duration: 0.7,
    ease: 'power2.out',
    stagger: {
      each: 0.15,
      axis: 'y',
    },
    scrollTrigger: {
      trigger: container,
      start: SCROLL_START,
    },
  });
}

export function revealFromLeft(selector) {
  if (prefersReducedMotion) return;

  gsap.from(selector, {
    clipPath: 'inset(0 100% 0 0)',
    duration: 1,
    ease: 'power3.out',
    scrollTrigger: {
      trigger: selector,
      start: SCROLL_START,
    },
  });
}

export function heroEntrance() {
  if (prefersReducedMotion) return;

  const tl = gsap.timeline({ defaults: { ease: 'power2.out' } });

  tl.from('.hero-image', { opacity: 0, duration: 0.8 })
    .from('.hero-title', { y: 30, opacity: 0, duration: 0.6 }, '+=0.2')
    .from('.hero-subtitle', { y: 30, opacity: 0, duration: 0.5 }, '+=0.2')
    .from('.hero-cta', { y: 30, opacity: 0, duration: 0.5 }, '+=0.2');
}

function initHeader() {
  const header = document.querySelector('header') ?? document.querySelector('.site-header');
  if (!header) return;

  let lastScrollY = window.scrollY;

  window.addEventListener(
    'scroll',
    () => {
      const currentScrollY = window.scrollY;

      if (currentScrollY <= 100) {
        header.classList.remove('header--hidden');
      } else if (currentScrollY > lastScrollY) {
        header.classList.add('header--hidden');
      } else if (currentScrollY < lastScrollY) {
        header.classList.remove('header--hidden');
      }

      lastScrollY = currentScrollY;
    },
    { passive: true },
  );
}

function initSmoothAnchor() {
  const header = document.querySelector('header') ?? document.querySelector('.site-header');

  document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener('click', (e) => {
      const href = link.getAttribute('href');
      if (!href || href === '#') return;

      const target = document.querySelector(href);
      if (!target) return;

      e.preventDefault();

      const headerHeight = header ? header.getBoundingClientRect().height : 0;
      const targetOffset = target.getBoundingClientRect().top + window.scrollY - headerHeight;

      gsap.to(window, {
        scrollTo: targetOffset,
        duration: 0.8,
        ease: 'power2.inOut',
      });
    });
  });
}

function closeFAQItem(item) {
  const answer = item.querySelector('.faq-answer');
  if (!answer) return;

  item.classList.remove('is-open');

  gsap.set(answer, { height: answer.offsetHeight });
  gsap.to(answer, {
    height: 0,
    opacity: 0,
    duration: 0.25,
    ease: 'power2.in',
  });
}

function openFAQItem(item) {
  const answer = item.querySelector('.faq-answer');
  if (!answer) return;

  item.classList.add('is-open');

  gsap.to(answer, {
    height: 'auto',
    opacity: 1,
    duration: 0.3,
    ease: 'power2.out',
  });
}

function initFAQ() {
  document.querySelectorAll('.faq-list').forEach((list) => {
    list.querySelectorAll('.faq-item').forEach((item) => {
      const answer = item.querySelector('.faq-answer');
      const question = item.querySelector('.faq-question');
      if (!answer || !question) return;

      gsap.set(answer, { height: 0, overflow: 'hidden', opacity: 0 });

      question.addEventListener('click', () => {
        if (item.classList.contains('is-open')) {
          closeFAQItem(item);
          return;
        }

        const openItem = list.querySelector('.faq-item.is-open');
        if (openItem) {
          closeFAQItem(openItem);
        }

        openFAQItem(item);
      });
    });
  });
}

function initAnimations() {
  if (prefersReducedMotion) return;

  initHeader();
  initSmoothAnchor();
  initFAQ();

  if (document.querySelector('.hero-image')) {
    heroEntrance();
  }

  document.querySelectorAll('[data-animate="fade-up"]').forEach((el) => fadeInUp(el));
  document.querySelectorAll('[data-animate="stagger"]').forEach((el) => fadeInStagger(el));
  document.querySelectorAll('[data-animate="stagger-list"]').forEach((el) => fadeInStaggerList(el));
  document.querySelectorAll('[data-animate="reveal-left"]').forEach((el) => revealFromLeft(el));
}

document.addEventListener('DOMContentLoaded', initAnimations);
