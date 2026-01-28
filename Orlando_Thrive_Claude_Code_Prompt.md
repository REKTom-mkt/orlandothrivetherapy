# Orlando Thrive Therapy - Claude Code Prompt
## Build 6 New Pages: Service+Location & Location Landing Pages

---

## Copy everything below into Claude Code after connecting to the site folder:

---

## Project Overview

**Client:** Orlando Thrive Therapy
**Website:** orlandothrivetherapy.com
**Task:** Create 6 new pages (2 service+location pages, 4 location landing pages)

The full website files are on my desktop. You have access to the complete directory.

I've uploaded the SEO toolkit document (Orlando_Thrive_Complete_SEO_Toolkit_6_Pages.md) which contains:
- Meta titles and descriptions for each page
- Full page content (1,000-1,300 words per page)
- Schema markup (JSON-LD) for each page
- Open Graph and Twitter Card tags

---

## Your Role

You are a world-class front-end developer and SEO expert who builds clean, fast, accessible websites for local small businesses. You have perfectionist standards and deliver production-ready code.

**Your approach:**
- Analyze before building - understand the existing codebase first
- Match existing patterns exactly - never invent new designs
- Validate everything - schema, meta tags, links
- Think like a search engine - proper heading hierarchy, internal linking, unique content

---

## Phase 1: Discovery (Do This First)

Before creating anything, explore the directory and report back:

1. List all HTML files to identify existing page types
2. Open the service pages (relationship-therapy.html, anxiety-therapy.html, emdr-therapy.html) to understand the template structure
3. Document what you find:
   - Header/navigation pattern
   - Main content sections and their CSS classes
   - Footer structure
   - How schema is currently implemented
   - CSS file location(s)
   - Image folder structure
4. Identify which existing page will be your template for:
   - Service+location pages (couples-therapy-orlando, marriage-counseling-orlando)
   - Location landing pages (the 4 therapist-[location] pages)

**Confirm your findings before proceeding to Phase 2.**

---

## Phase 2: Page Creation

### Pages to Create:

| # | Filename | Type | H1 |
|---|----------|------|-----|
| 1 | couples-therapy-orlando.html | Service+Location | Couples Therapy in Orlando, FL |
| 2 | marriage-counseling-orlando.html | Service+Location | Marriage Counseling in Orlando, FL |
| 3 | therapist-winter-park.html | Location Landing | Therapist in Winter Park, FL |
| 4 | therapist-dr-phillips.html | Location Landing | Therapist in Dr. Phillips, Orlando |
| 5 | therapist-altamonte-springs.html | Location Landing | Therapist in Altamonte Springs, FL |
| 6 | therapist-downtown-orlando.html | Location Landing | Therapist in Downtown Orlando |

### For Each Page:

1. Use the meta title, meta description, and content from the SEO toolkit
2. Implement the JSON-LD schema markup from the SEO toolkit (place before </body>)
3. Include Open Graph and Twitter Card meta tags from the SEO toolkit
4. Add canonical URL: `<link rel="canonical" href="https://www.orlandothrivetherapy.com/[filename]">`
5. Add robots meta: `<meta name="robots" content="index, follow">`
6. Match the existing site's header, navigation, and footer exactly
7. Use the same CSS classes and structure as existing service pages

### Content Structure for Service+Location Pages:
- Hero section with H1
- Introduction paragraph
- "Signs You Could Benefit" or "When to Consider" section (H2)
- "Our Approach" section (H2)
- "What to Expect" section (H2)
- "Four Convenient Locations" section with all 4 addresses (H2)
- FAQ section with schema-enabled Q&As (H2)
- CTA section with phone number
- Related Services links

### Content Structure for Location Landing Pages:
- Hero section with H1
- Rating callout (stars + review count)
- Office info box (address, phone, hours)
- "Therapy Services" section with service cards/links (H2)
- "Why [Location] Residents Choose Us" section (H2)
- "Serving the [Area] Community" section with neighborhood list (H2)
- FAQ section (H2)
- "Other Locations" internal links section (H2)
- CTA section
- Service links footer section

---

## Phase 3: Internal Linking

### Add Cross-Links Between All Location Pages

Each location page should have a section linking to the other 3 locations:

```html
<section class="other-locations">
  <h2>Our Other Central Florida Locations</h2>
  <ul>
    <li><a href="/therapist-downtown-orlando.html">Downtown Orlando</a> — 216 Pasadena Pl, Orlando, FL 32803</li>
    <li><a href="/therapist-dr-phillips.html">Dr. Phillips</a> — 7758 Wallace Rd Suite 1, Orlando, FL 32819</li>
    <li><a href="/therapist-winter-park.html">Winter Park</a> — 1079 W Morse Blvd Suite B, Winter Park, FL 32789</li>
    <li><a href="/therapist-altamonte-springs.html">Altamonte Springs</a> — 940 Centre Cir Suite 1012, Altamonte Springs, FL 32714</li>
  </ul>
</section>
```

(Exclude the current page from its own list)

### Link Service+Location Pages to Each Other

- couples-therapy-orlando.html should link to marriage-counseling-orlando.html in Related Services
- marriage-counseling-orlando.html should link to couples-therapy-orlando.html in Related Services

### Link to Existing Service Pages

All 6 new pages should include links to existing service pages:
- /relationship-therapy.html
- /individual-therapy.html
- /anxiety-therapy.html
- /emdr-therapy.html
- /women-therapy.html
- /life-coaching.html

---

## Phase 4: Quality Assurance (Critical)

After creating all pages, run a comprehensive audit. Check every page for:

### HTML5 Standards
- [ ] Valid doctype and `<html lang="en">`
- [ ] Semantic elements (`<header>`, `<main>`, `<section>`, `<footer>`)
- [ ] Proper heading hierarchy (only one H1, H2s for sections, H3s for subsections)
- [ ] All images have descriptive alt text
- [ ] No broken internal links

### SEO Requirements
- [ ] Unique title tag (under 65 characters)
- [ ] Unique meta description (under 155 characters)
- [ ] `<meta name="robots" content="index, follow">`
- [ ] Canonical URL matches the page URL
- [ ] Open Graph tags present (og:title, og:description, og:url, og:image, og:type, og:site_name)
- [ ] Twitter Card tags present

### Schema Markup
- [ ] Valid JSON-LD schema in `<head>` or before `</body>`
- [ ] MedicalBusiness @type for all pages
- [ ] LocalBusiness schema with complete address for location pages
- [ ] Service schema for service+location pages
- [ ] BreadcrumbList schema on all pages
- [ ] FAQPage schema where FAQs exist
- [ ] No validation errors

### Design Consistency
- [ ] Header matches existing pages exactly
- [ ] Footer matches existing pages exactly
- [ ] All CSS classes match existing patterns
- [ ] Mobile responsive
- [ ] No new CSS invented - only existing styles used

### Content Quality
- [ ] No duplicate content between pages
- [ ] No placeholder text remaining
- [ ] Phone number (407) 592-8997 consistent throughout
- [ ] All addresses match GBP listings exactly

---

## Deliverables

When complete, provide:

1. **All 6 new HTML files** - ready to upload
2. **Summary of what was created** - page names, URLs, key features
3. **Validation checklist** - confirm all QA items passed
4. **Any issues found** - things I should review or decisions you made

---

## Location Reference Data

| Location | Address | Hours (M-F) | Hours (Sat-Sun) | Rating | Reviews |
|----------|---------|-------------|-----------------|--------|---------|
| Downtown Orlando | 216 Pasadena Pl, Orlando, FL 32803 | 8AM-9PM | 9AM-4PM | 4.8 | 236 |
| Dr. Phillips | 7758 Wallace Rd Suite 1, Orlando, FL 32819 | 8AM-8PM | 9AM-4PM | 4.9 | 117 |
| Winter Park | 1079 W Morse Blvd Suite B, Winter Park, FL 32789 | 8AM-9PM | 9AM-4PM | 4.9 | 56 |
| Altamonte Springs | 940 Centre Cir Suite 1012, Altamonte Springs, FL 32714 | 8AM-9PM | 9AM-4PM | - | - |

**Phone (all locations):** (407) 592-8997

---

## Important Reminders

- **DO NOT** create new designs - match existing site exactly
- **DO NOT** invent new CSS classes - use only what exists
- **DO NOT** skip the discovery phase - analyze first, build second
- **DO** use the exact content from the SEO toolkit
- **DO** implement schema exactly as provided in the toolkit
- **DO** validate schema before finalizing
- **DO** take your time - quality over speed
