# Kuranomiya Theme — Claude Code Context

## Project Overview

**Business:** Kuranomiya Purchase Store (蔵ノ宮) — specialty buy-back shop for precious metals,
watches, jewelry, and luxury brands. Located at 1F Leaf 8, 12-24 Beniya-cho, Hiratsuka City,
Kanagawa 254-0043. Hours: 10:00–18:00, closed Wednesdays.

**Audience:** Women in their 60s engaged in estate organization, end-of-life planning, lifetime
decluttering. Assume lower digital fluency; prioritise legibility and large touch targets.

**Brand tone:** Warm and approachable, polite, honest, restrained, quietly confident.
Core concept is **観る (observe)** — a deep, considered gaze — not 見る (merely look).
Think appraiser's eye, not salesperson's pitch.

**Figma file:** `https://www.figma.com/design/E3NZ2xMqosQ4B0yGq07kVY/`
Reference widths: Desktop 1440px / Mobile 430px. Always get exact values from Figma Dev Mode.

---

## Tech Stack

| Layer | Choice | Notes |
|---|---|---|
| CMS | WordPress (latest stable) | |
| Theme | Custom theme `kuranomiya` | **Not SWELL** — custom was chosen for full control over build pipeline |
| CSS framework | Tailwind CSS v4 | Via `@tailwindcss/vite` plugin; no config file needed |
| Bundler | Vite 6 (`vite.config.mjs`) | ESM, Valet SSL, HMR over wss |
| Animation | GSAP 3.15 + ScrollTrigger + ScrollToPlugin | Imported as ES module; registered conditionally |
| PHP | 8.x with typed functions (`void`, `?array`, `string`) | |
| Dev environment | Laravel Valet at `kuranomiya.test` | SSL certs auto-loaded from `~/.config/valet/Certificates/` |
| Git remote | `git@github-personal:vesh8750/kuranomiya.git` | SSH alias `github-personal` |

---

## File Structure

```
wp-content/themes/kuranomiya/
├── assets/
│   ├── css/
│   │   ├── main.css          — @import "tailwindcss" only; all design via utilities
│   │   └── custom.css        — CSS-only rules that Tailwind can't express (header slide-hide)
│   └── js/
│       └── main.js           — Single JS entry point; all GSAP animation logic lives here
├── dist/                     — Vite build output (gitignored assets, manifest tracked)
│   └── .vite/manifest.json   — Maps source → hashed filenames; enqueue.php reads this
├── inc/
│   ├── acf-fields.php        — Stub only; ACF field groups not yet configured
│   ├── enqueue.php           — Vite asset loading (HMR in local, manifest in prod)
│   ├── metal-rates.php       — Precious metal API, WP-Cron, admin override page
│   └── post-types.php        — CPTs and taxonomies
├── functions.php             — Theme setup, requires all inc/ files, disables Gutenberg
├── header.php                — Skeleton stub (nav not yet built)
├── footer.php                — Skeleton stub
├── index.php                 — Tailwind smoke-test stub
├── vite.config.mjs           — Vite config with Tailwind plugin and Valet SSL
└── package.json              — npm scripts: dev / build
```

Template files not yet created (pending design handoff):
`front-page.php`, `page.php`, `single.php`, `archive.php`,
`single-purchase-record.php`, `archive-purchase-record.php`,
`single-column.php`, `archive-column.php`,
`page-about.php`, `page-metal-rates.php`, `page-contact.php`

Partials will live in `template-parts/` (e.g. `template-parts/components/card-purchase-record.php`).

---

## What Each File Does

### `functions.php`
Theme setup (title-tag, post-thumbnails, html5 support, custom image sizes, nav menus).
Disables Gutenberg via `use_block_editor_for_post` filter. Requires all `inc/` files.
Image sizes registered: `kuranomiya-hero` (1440×800), `kuranomiya-card` (640×480),
`kuranomiya-card-wide` (800×600), `kuranomiya-thumb` (160×160).

### `inc/enqueue.php`
Vite manifest-based asset loading. In `local` environment with Vite running at port 3000,
injects `@vite/client` and the JS module directly from the dev server (HMR).
In all other environments reads `dist/.vite/manifest.json` and enqueues hashed files.
Adds `type="module"` to script tags via `script_loader_tag` filter.
`is_vite_running()` uses `fsockopen` with `@` suppression to check port 3000 non-fatally;
result is cached in a static variable per request.

### `inc/post-types.php`
Registers two CPTs and two taxonomies. All have `show_in_rest: false`.

| Slug | Label | Taxonomy |
|---|---|---|
| `purchase-record` | 買取実績 | `purchase-record-category` (hierarchical) |
| `column` | コラム | `column-category` (hierarchical) |

### `inc/acf-fields.php`
Placeholder only. ACF field groups will be defined here once ACF Pro is configured
(awaiting designer asset handoff and content confirmation).

### `inc/metal-rates.php`
Full precious metal rate system. See section below.

### `assets/js/main.js`
Single entry point. Exports GSAP animation helpers and wires up all interactive behaviour.
`prefersReducedMotion` is checked once at module scope; all animations short-circuit if true.

**Exported animation functions:**
| Function | GSAP pattern |
|---|---|
| `fadeInUp(selector)` | `y: 40, opacity: 0 → 0, duration: 0.7` |
| `fadeInStagger(selector)` | children staggered 0.15s on x-axis |
| `fadeInStaggerList(selector)` | children staggered 0.15s on y-axis |
| `revealFromLeft(selector)` | `clipPath: 'inset(0 100% 0 0)' → 0`, duration 1s |
| `heroEntrance()` | Timeline: `.hero-image → .hero-title → .hero-subtitle → .hero-cta` |

**Wired behaviours (non-exported):**
- `initHeader()` — auto-hides `header` / `.site-header` after scrolling 100px down; re-shows on scroll up
- `initSmoothAnchor()` — intercepts `a[href^="#"]`, smooth-scrolls via GSAP `scrollTo`
- `initFAQ()` — accordion on `.faq-list > .faq-item`; click `.faq-question` to open/close with GSAP height animation; only one item open at a time

**`data-animate` attribute wiring (applied in `initAnimations`):**
```
data-animate="fade-up"        → fadeInUp
data-animate="stagger"        → fadeInStagger  (direct children, x-axis)
data-animate="stagger-list"   → fadeInStaggerList  (direct children, y-axis)
data-animate="reveal-left"    → revealFromLeft
```

### `assets/css/custom.css`
CSS-only rules for the header slide-hide behaviour. Sets the header to `position: fixed`
with `transition: transform 0.35s ease`. Adding `.header--hidden` via JS slides it off-screen.

---

## Metal Rates Module (`inc/metal-rates.php`)

**API:** `https://api.metals.dev/v1/latest?currency=JPY&unit=g`
Response: `{ "status": "success", "metals": { "gold": 21735.12, "platinum": 8846.23, "silver": 350.35 } }`
Values are already JPY/gram — no conversion needed.

**wp_options keys:**
| Key | Contents |
|---|---|
| `kuranomiya_metal_rates` | JSON `{ gold, platinum, silver, updated_at }` |
| `kuranomiya_metal_rates_error` | JSON `{ message, timestamp }` — set on failure, deleted on success |
| `kuranomiya_metal_override_gold` | Manual override price (string, empty = use API) |
| `kuranomiya_metal_override_platinum` | same |
| `kuranomiya_metal_override_silver` | same |

**WP-Cron:** Event `kuranomiya_daily_metal_fetch` scheduled at `strtotime('today 10:00')` daily.
Registered on `after_switch_theme`, cleared on `switch_theme`.

**Error handling:** Specific codes handled: 1203 (quota), 1101 (invalid key), 1201/1202 (inactive).
On any failure the existing stored rates are left intact (fallback).

**Public functions:**
- `kuranomiya_get_metal_rates(): ?array` — returns decoded array or `null`
- `kuranomiya_calculate_prices(string $metal): array` — returns `[['label'=>'K24','price'=>21735], ...]`
- `kuranomiya_get_metal_rates_error(): ?array` — returns `{message, timestamp}` or `null`

**Admin page:** Tools → 貴金属相場
Shows error notice if last fetch failed. Three number inputs for manual overrides.
"今すぐ更新" triggers immediate fetch and shows inline success/error result.

---

## Coding Conventions

### PHP
- All functions prefixed `kuranomiya_` — no exceptions
- Text domain: `kuranomiya`
- PHP 8 typed signatures: `function foo(string $x): void`
- `defined('ABSPATH') || exit;` at the top of every inc/ file
- Use `wp_remote_get()`, never `curl_*`
- Use `wp_options` for simple key-value storage, never raw DB queries for this
- Use `wp_json_encode()` / `json_decode(..., true)` for option values
- Sanitise all `$_POST` input with `sanitize_text_field()` before saving
- Nonces on every admin form: `wp_nonce_field()` + `check_admin_referer()`
- Use `esc_html()`, `esc_attr()`, `esc_url()` before any echo in templates

### JavaScript
- ES module syntax; `import` at top, no CommonJS
- All GSAP usage goes through functions exported from `main.js`
- Never instantiate GSAP timelines or tweens inline in template PHP/HTML
- Guard every animation with `if (prefersReducedMotion) return`
- Register plugins once via `gsap.registerPlugin()` at module init (already done)

### Tailwind
- Tailwind v4 — no `tailwind.config.js` needed; CSS-first config
- `@import "tailwindcss"` in `main.css` is the only Tailwind directive needed
- Design tokens live as CSS custom properties, not Tailwind config extensions
- Do not use arbitrary values for brand colors — define them as CSS variables first

### Templates
- Templates go in the theme root: `front-page.php`, `page-*.php`, `single-*.php`, `archive-*.php`
- Reusable partials go in `template-parts/` and are included with `get_template_part()`
- Partials for components: `template-parts/components/`
- Partials for sections: `template-parts/sections/`

---

## Key Architectural Decisions

1. **Custom theme, not SWELL.** The spec called for SWELL but a custom theme was chosen to allow
   Vite + Tailwind v4 + GSAP as a proper asset pipeline. SWELL's block system would conflict.
   The tradeoff: the client cannot use SWELL's visual block builder. Content editing is via
   standard WP editor + ACF fields. The client was informed.

2. **Vite manifest pattern.** Assets are bundled via Vite (not `@wordpress/scripts`). The
   `enqueue.php` reads the manifest at runtime so file hashes update automatically on each build.
   HMR uses `fsockopen` to detect whether the dev server is live — avoids a hard env variable.

3. **`show_in_rest: false` on all CPTs.** The REST API is not used. This prevents unintended
   data exposure and keeps the block editor fully disabled.

4. **metals.dev, not a scraping solution.** API-first was chosen for reliability.
   Free tier covers daily updates. `api_key` is `YOUR_API_KEY_HERE` in code;
   the real key must be set before deployment (consider `wp-config.php` constant instead).

5. **WP-Cron at `strtotime('today 10:00')`.** This is server local time, not UTC.
   Confirm the production server timezone before launch. If server is UTC, 10:00 UTC = 19:00 JST.

---

## Dev Commands

```bash
# From wp-content/themes/kuranomiya/
npm run dev        # Vite dev server at https://kuranomiya.test:3000 (HMR)
npm run build      # Production build → dist/

# Git
git remote -v      # origin git@github-personal:vesh8750/kuranomiya.git
```

Valet must be running and `kuranomiya.test` must be proxied before `npm run dev`.

---

## Never Do These

- **Enable Gutenberg.** `use_block_editor_for_post` returns false intentionally. Do not remove it.
- **Use aggressive marketing language.** No "業界最高値", "どこよりも高く", "簡単・お気軽" etc.
- **Use pure white (`#ffffff`) or pure black (`#000000`).** Use Natural Beige and Ink Black.
- **Hardcode the metals.dev API key.** The constant `KURANOMIYA_METALS_API_KEY` is a placeholder.
- **Call `wp_enqueue_scripts` without the Vite manifest check.** Always read the manifest; never
  hardcode a `dist/` filename — the hash changes on every build.
- **Use `curl_*` functions.** Use `wp_remote_get()` / `wp_remote_post()`.
- **Register raw REST routes** unless explicitly asked. REST is intentionally off for CPTs.
- **Add font families beyond Noto Serif JP and Noto Sans JP.** Three-family maximum per spec.
- **Use `wp_redirect()` without `exit`.** Always call `exit` immediately after.

---

## Pending — Waiting on Designer or Client

| Item | Blocker |
|---|---|
| `inc/acf-fields.php` — ACF field groups | Awaiting design handoff and content sign-off |
| All page templates | Awaiting Figma design completion and asset export |
| `template-parts/` partials | Same as above |
| Real metals.dev API key | Client to provide; set in `KURANOMIYA_METALS_API_KEY` |
| Phone number | Figma shows `0463-71-6678`; Privacy Policy draft has `0463-00-0000` (placeholder). **Confirm official number.** |
| Secondhand dealer license number | Awaiting issuance (store not yet open) |
| Owner name | Placeholder "●●" in design |
| LINE Add Friend URL | Not yet provided |
| Contact form destination email | Not yet confirmed |
| Google Maps embed API key / pin | Final address pin needs setting |
| Hero, store interior, product photography | Professional shoot pending |
| Legal pages text | Privacy Policy / Commercial Transactions Act / Dealer License — all placeholder |
| Text correction: REASONS 04 | "Job-Hunting Guide Level 1" → "End-of-Life Planning Guide Level 1" |
| Text correction: Hero | "Industry-like 11-year Appraiser" → "Appraiser with 11+ years of industry experience" |
| Production server timezone | Confirm for WP-Cron 10:00 scheduling |
