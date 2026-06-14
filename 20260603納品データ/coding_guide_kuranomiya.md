# Kuranomiya Purchase Store Website Implementation Guide (For Developers)

---

## 0. Purpose of This Guide

This document serves as the **overall implementation specification** for the project’s development phase after design approval. Please use the following materials together as primary sources of information:

* **Figma File (Final Design):** `https://www.figma.com/design/E3NZ2xMqosQ4B0yGq07kVY/`
* **Designer’s Coding Instructions** (included with exported assets) — detailed component-level behavior and dimensions are defined there as the primary source
* **Exported Icons and Logos** (included in the project assets)
* This document — overall specifications, functional requirements, and items requiring confirmation

Please obtain all **exact dimensions, colors, and spacing values from Figma Dev Mode**. The token values in this document are intended for guideline confirmation only.

---

## 1. Project Overview & Assumptions

| Item            | Details                                                                                                                                                                   |
| --------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Business Name   | Kuranomiya Purchase Store (Kuranomiya)                                                                                                                                    |
| Business Type   | Specialty Purchase Store (Precious Metals, Watches, Jewelry, Luxury Brands, etc.)                                                                                         |
| Address         | 1F Leaf 8, 12-24 Beniya-cho, Hiratsuka City, Kanagawa 254-0043, Japan (Shonan Star Mall Shopping Street / Approx. 5 minutes on foot from JR Hiratsuka Station North Exit) |
| Business Hours  | 10:00–18:00 / Closed Wednesdays                                                                                                                                           |
| Target Audience | Women in their 60s (estate organization, end-of-life planning, lifetime decluttering)                                                                                     |
| Brand Tone      | A balance between “warm and approachable” and “polite.” Honest, restrained, and quietly confident                                                                         |
| CMS / Theme     | WordPress (latest stable version) + SWELL (**already purchased by the client**)                                                                                           |
| Budget Policy   | Keep costs as low as possible. **Prioritize free/standard plugins and integrations** (also reflected in precious metal price API selection described later)               |

The core brand concept is **“Observe” (観る)** rather than simply “Look” (見る). **Aggressive marketing language is strictly prohibited** (e.g., highest prices in the industry, better than anywhere else, easy/simple, effortless, etc.). Refer to the design guide for details.

---

## 2. Environment & Workflow (Build → Migration)

* The server, custom domain, and SWELL theme are **already owned by the client**. No additional purchases are required.
* Development workflow: **Build in a local/staging environment → migrate to the existing production server after completion.**

  * Use free migration tools such as All-in-One WP Migration whenever possible.
  * Hosting provider and domain registrar are currently being confirmed. **Login credentials will be received securely during the migration phase.**
* A staging URL will be shared during development so progress can be reviewed at any time.
* Since SWELL is already purchased, no theme cost is required. Only license registration for the production domain needs to be configured during deployment.

---

## 3. Figma File Structure (Based on Actual Design Files)

Reference widths: **Desktop = 1440px / Mobile = 430px**. The Figma file consists of two pages.

### Page: “01_Top Page”

* `Top Page <Desktop>` (frame 1:2)
* `Top Page <Mobile Design>` (frame 211:317)
* `Global Navigation Expansion Image` (frame 261:679) — navigation item list displayed when the mobile menu is opened

### Page: “02_Low Page”

| Page                                         | Figma Node                    | Main PC/SP |
| -------------------------------------------- | ----------------------------- | ---------- |
| 01_Purchase Items Detail (Common Template)   | 294:3028                      | PC         |
| 02-1_Purchase Records List                   | 329:1498                      | PC         |
| 02-2_Purchase Records Detail                 | 355:1426                      | PC         |
| 03-1_Column List                             | 363:1974                      | PC         |
| 03-2_Column Detail                           | 371:1608                      | PC         |
| 04_Owner & Store Introduction (About)        | 387:1605 (PC) / 294:3218 (SP) | PC + SP    |
| 05_Precious Metal Rates (Market Detail Page) | 452:2117 (PC) / 407:2337 (SP) | PC + SP    |
| 06_Contact                                   | 375:2317 (PC) / 452:3299 (SP) | PC + SP    |
| Buttons (Component Library)                  | section 359:1250              | —          |

> Note: Desktop designs are provided as the primary reference for lower-level pages. Only About, Market Rates, and Contact have dedicated mobile designs. **For lower-level pages without dedicated mobile designs, implement responsive layouts based on the homepage/mobile design rules and existing components.**

---

## 4. Sitemap & WordPress Template Mapping

| Page                                                                                      | WP Implementation Approach                                | Functionality                                                                                                         |
| ----------------------------------------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| Homepage                                                                                  | Static Page (Front Page) / Template                       | All 13 sections (see §7)                                                                                              |
| Purchase Items List & Category Details                                                    | Static Page or Shared Category Template                   | Reuse a common layout per category                                                                                    |
| Purchase Records List / Single                                                            | **Custom Post Type + Category Taxonomy**                  | List = category filters + sorting + pagination; Single = gallery + customer feedback + owner comments + related posts |
| Columns List / Single                                                                     | Standard Posts or CPT + Categories/Tags                   | List = latest/popular tabs + categories + pagination                                                                  |
| Owner & Store Introduction (About)                                                        | Static Page                                               | Greeting / Philosophy / Gallery / Store Information + Map                                                             |
| Precious Metal Rates (Market Detail)                                                      | Static Page                                               | Detailed tables for Gold, Platinum, Silver (§8)                                                                       |
| Contact                                                                                   | Static Page                                               | Three contact methods + form + privacy policy consent                                                                 |
| FAQ                                                                                       | Static Page or Homepage Anchor                            | Accordion                                                                                                             |
| Privacy Policy / Specified Commercial Transactions Act / Secondhand Dealer License Notice | Static Pages (based on SWELL defaults with brand styling) | Legal disclosures                                                                                                     |

---

## 5. Design Tokens (Guideline Values – Use Figma Dev Mode for Final Values)

### Colors (Approved by Client – Pure White/Black Not Used)

| Purpose                                | Name          | HEX       |
| -------------------------------------- | ------------- | --------- |
| CTA / Accent Color (~5% visual weight) | Amber         | `#B57A3F` |
| Dark Background Sections / Footer      | Iron Navy     | `#1F2A44` |
| Primary Background                     | Natural Beige | `#FAF6EE` |
| Cards / Forms / Table Headers          | Deep Beige    | `#F4EFE4` |
| Body Text                              | Ink Black     | `#33312D` |
| Secondary Text                         | Soft Ink      | `#615C56` |
| Borders / Dividers                     | Border        | `#DED7C7` |

> Minor color adjustments such as Deep Beige and Story section backgrounds were made during the design process. **Figma should be treated as the final source of truth.** Centralized management via CSS variables (custom properties) is recommended.

### Typography (Strictly Two Japanese Font Families)

* Headings: **Noto Serif JP** (Mincho/Serif)
* Body & UI: **Noto Sans JP** (Gothic/Sans-Serif)
* Load as web fonts. Do not introduce more than three font families.
* Line height:

  * Body text: **1.8–2.0**
  * Headings: **1.4–1.5**
* Recommended desktop sizes:

  * H1: 48–56px
  * Section Heading: 32–40px
  * Subheading: 20–24px
  * Body Text: 16–17px
  * Secondary Text: 13–14px
  * English Labels: 10–11px (`letter-spacing: 0.15em`)

### Spacing & Grid

* Between sections: 120–160px
* Medium content groups: 64–80px
* Small content groups: 32–48px
* Paragraph spacing: 16–24px
* 12-column grid
* Max width: 1140–1200px
* Gutter: 24px
* Container side padding:

  * Mobile: 24–40px
  * Desktop: 80–120px
* Card padding: 24–32px

### Buttons

* Primary: Amber background, white text, border-radius 2–4px (avoid excessive rounding)
* Secondary: Transparent background, ink-colored text, 1px ink-colored border
* Text Links: Ink color → Amber on hover
* Internal padding:

  * Vertical: 14–16px
  * Horizontal: 28–32px
  * Designed for easy interaction by users in their 60s

---

## 6. Shared Components (Corresponding to Figma Symbols)

Implemented as reusable components matching Figma symbols/instances.

* **Header** (PC 96px / Mobile 56px): Global navigation. Refer to Navigation Expansion Image (261:679). Mobile uses hamburger menu + full-screen/drawer navigation.
* **Footer**
* **Contact (Shared Section)**
* **Breadcrumb (bread)**
* **Button**

  * `btn` (Amber = primary / Iron Navy = secondary)
  * `btn01`
  * `btn02`
  * **Hover opacity: 0.7** (designer specification)
* **category_btn**

  * Amber/Iron Navy × Active/Normal (4 states)
* **number** (Pagination)

  * Active / Normal
* **tag** (Item tags)
* **icon** (Natural / Deep Natural / Amber)
* **ttl** (Section titles)
* **day** (Current date display used for market rates)
* Various Cards:

  * Reason Card
  * Story Card
  * Achievement Card
  * Column Card
  * Item Card
  * Market Rate Card
* **FAQ Accordion**

  * Shared between Homepage and Purchase Item pages (6 items)
* **Form Row**
* **Mobile Carousel Components**

  * `arrow`
  * `swipe`
  * `dot`
  * Used in Story, Items, Achievements, and Column sections

---

## 7. Page-Specific Requirements

### Homepage (13 Sections)

1. **Header** — Global navigation + CTA (Phone / LINE etc.). Provide sufficient spacing between logo and navigation (client request).
2. **Hero** — Catchphrase: “With the Eye to Observe, and the Heart to Understand.” + supporting copy + two CTA buttons (`btn` / `btn02`). Background uses a replaceable hero image.
3. **Philosophy** — Meaning behind the name “Kura” and “Miya.” Includes subtle decorative background elements.
4. **Reasons** — Five “Reasons We Are Chosen” cards (Desktop: 2 top + 3 bottom / Mobile: stacked vertically).
5. **Story** — 3-card carousel (Mobile: single card + swipe + dot + arrow).
6. **Items** — Four item cards + tag group for “Many Other Categories Accepted” + button.
7. **Achievements** — Three purchase record cards + button linking to the archive.
8. **Market Rate Summary** — Three summary cards + “View Market Details” button linking to the Market Rates page. Detailed tables should not appear on the homepage. Include note:
   “*Displayed prices are reference purchase prices at the store...*”
9. **Column** — Three column cards + archive button.
10. **FAQ** — 6-item accordion (collapsed by default).
11. **Info** — Store information table + embedded Google Map.
12. **Contact** — Shared contact section.
13. **Footer**

### Lower-Level Page Highlights

* **Purchase Item Details (Shared Template):** Hero + Breadcrumb / 6 item cards / 4-step purchase process / FAQ 6 items / 3 achievements + Contact + Footer.
* **Purchase Records List:** Category filters (`category_btn`) + **sorting selector (Newest, etc.)** + 9 cards + pagination.
* **Purchase Record Detail:** Main image + thumbnails (max 5) + tags / title / purchase price / detail table / **Customer Feedback** / **Owner’s Comment** + 3 related records.
* **Column List:** Latest/Popular tabs + category filters + 9 cards + pagination.
* **Column Detail:** Title + author/publication/update metadata + article body (lead + sections) + owner profile + 3 related articles.
* **About:** Greeting / Philosophy (4 cards) / Gallery (3 images) / Store information + map.
* **Market Rates:** See §8.
* **Contact:** Three contact methods (Form / Phone / LINE) + form + privacy policy consent.

---

## 8. Functional Requirements

### 8-1. Automatic Precious Metal Rate Updates (Highest Priority)

* Metals:

  * Gold
  * Platinum
  * Silver
* No combinations required.
* Display unit:

  * Reference purchase price per gram
* Display:

  * Current date (`day` symbol)
  * Required disclaimer

Update frequency:

* **Daily**

Data acquisition priority:

1. Free API
2. Scraping
3. Paid API

Table structure (finalized in Figma):

* Gold:

  * Two columns × 8 rows each
  * Purity categories such as K24, etc.
  * Total equivalent of 16 rows
* Platinum:

  * 4 rows
  * Pt1000 / Pt950 / Pt900 / Pt850, etc.
* Silver:

  * 2 rows

Homepage:

* Summary cards only

Market Rates page:

* Full detailed tables
* PC: 452:2117
* SP: 407:2337

Implementation approach:

* Retrieve daily via WP-Cron
* Store in options table or database
* Render via templates
* **Provide fallback behavior if API fails:**

  * Show previous retrieved values
  * Clearly display retrieval date
* Manual update functionality from WP Admin is recommended

Required note:

> *Displayed prices are reference purchase prices at the store. Actual appraisal values may vary depending on purity and condition.*

### 8-2. Contact Form

* Clearly indicate required fields (not by color alone).
* **Privacy Policy consent checkbox is mandatory before submission.**
* Flow:

  * Confirmation
  * Submission
  * Completion page
* Polite completion message
* Automatic reply email
* Spam protection (free-tier reCAPTCHA, etc.)
* Destination email address must be confirmed.
* Privacy Policy:

  * Scrollable area within the form OR separate page
  * Figma currently uses a scrollable area

### 8-3. Listing Behavior

Purchase Records:

* CPT
* Category filter
* **Sorting**

  * Newest First
  * Highest Price
  * Lowest Price
* Pagination
* Confirm labels from Figma

Columns:

* Latest / Popular tabs
* Categories and tags
* Pagination

### 8-4. Maps & Tap Behavior

* Embedded Google Maps on Info/About pages
* Phone:

  * `tel:` link
* LINE:

  * Add Friend flow
* Address tap (mobile):

  * Launch map application

---

## 9. Animation & Interaction

* **Fade-in on scroll**

  * Subtle and elegant
  * No flashy motion
  * No forced scrolling
  * No popups (see Design Guide §10)
* **Support `prefers-reduced-motion` is mandatory**
* **Hover: opacity 0.7**

  * Buttons
  * Links
  * Images
  * Designer specification
* External links:

  * `target="_blank"`
  * `rel="noopener"`
* Support internal anchor links
* FAQ accordion:

  * 200–300ms easing
  * Closed by default
* Mobile carousels (Story/Items/Achievements/Column):

  * Swipe
  * Dot indicators
  * Arrow controls
  * Swipe-only interactions are considered unfriendly for the target age group
* **Specific animation locations, intensity, and timing should follow the designer’s coding instructions and Figma comments as primary sources.**

---

## 10. Responsive Design / Accessibility (Required – Optimized for Users in Their 60s)

Breakpoints:

* Mobile: ≤768px
* Tablet: 769–1024px
* Desktop: ≥1025px

Requirements:

* Minimum body text size:

  * 16px (including mobile)
* Maintain line height:

  * 1.8–2.0
* Tap targets:

  * Minimum 44px
  * Recommended 48px
* Minimum button spacing:

  * 8px
* Contrast ratio:

  * WCAG AA (4.5:1) minimum
  * Preferably AAA (7:1)
* Do not communicate information by color alone.
* Required:

  * `alt` attributes
  * Distinguishable required/optional indicators
* Form errors:

  * Color + Icon + Message combination
* Hero catchphrase:

  * Split into 2–4 lines on mobile

---

## 11. SWELL Implementation Policy

* Utilize SWELL’s standard blocks and features wherever possible:

  * CTA
  * Post Lists
  * Table of Contents
  * Tabs
  * Accordions
  * Steps
  * Etc.
* **Highest priority is ensuring the client can manage content independently after delivery** (adding columns, purchase records, etc.).
* Avoid excessive hard-coding.
* Recreate designs using SWELL + Custom CSS + minimal custom development.
* Consolidate design tokens using CSS variables for maintainability.

---

## 12. Items Requiring Confirmation Before Implementation

1. **Phone Number Inconsistency**

   * Contact card: `0463-71-6678`
   * Privacy Policy footer: `TEL: 0463-00-0000 (placeholder)`
   * **Confirm official number and standardize across all locations.**
   * Client initially stated: “The phone number will be provided later.”

2. **Secondhand Dealer License Number**

   * Not yet received.
   * Required for the legal disclosure page.
   * Awaiting issuance (store interior is not yet completed).

3. **Text Corrections**

   * REASONS 04:

     * “Job-Hunting Guide Level 1”
     * Should be:

       * “End-of-Life Planning Guide Level 1”
   * Hero:

     * “Industry-like 11-year Appraiser”
     * Should be:

       * “Appraiser with 11+ years of industry experience”
     * Other sections already use “11+ years of industry experience.”

4. **Privacy Policy / Commercial Transaction Act / Secondhand Dealer Law Pages**

   * Currently placeholder text.
   * Must be replaced with finalized legal content.

5. **Placeholder Content**

   * Owner name (“●●”)
   * Column placeholders
   * Purchase record comments
   * Dummy text and images

6. **Images**

   * Hero
   * Store interior
   * Product photos
   * Professional photography will replace temporary assets later.
   * Icons and logos should use exported assets.

7. **External Integration Information**

   * LINE Add Friend URL/ID
   * Contact form destination email
   * Google Maps embed configuration (final address pin)

---

## 13. Deliverables & Pre-Launch Checklist

* [ ] All pages implemented for Desktop and Mobile
* [ ] Precious metal rate daily auto-update verified (including fallback)
* [ ] Contact form verified (submission, auto-reply, privacy consent, spam protection)
* [ ] Filters, sorting, and pagination working
* [ ] Scroll animations, `prefers-reduced-motion`, hover opacity, external link behavior verified
* [ ] Accessibility verified (font sizes, contrast, touch targets, alt text, error messaging)
* [ ] Internal SEO (title/meta/OGP/structured data), Analytics, Search Console configured
* [ ] Cross-browser and device testing completed
* [ ] Performance optimization completed
* [ ] Operations manual delivered
* [ ] Migration to production server completed

---

## 14. Recommended Development Process

1. Build local/staging environment (WordPress + SWELL)
2. Implement shared components (Header/Footer/Contact/Breadcrumb/Buttons/Tokens)
3. Implement Homepage → Lower-Level Templates
4. Develop Precious Metal Rate Auto-Update Feature
5. Implement Contact Form
6. Populate finalized content (approved text and images)
7. Responsive and accessibility refinements
8. Testing → Migration to production server → Launch
