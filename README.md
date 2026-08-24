# Brain to Spine — Website Redesign

Redesigned website for **Dr. A. Ajay Reddy** (MBBS, MCh Neuro Surgery), Senior
Consultant Neurosurgeon at Star Hospitals, Hyderabad.

Rebuilt in PHP from the original [braintospine.com](https://www.braintospine.com/),
preserving the brand identity, content, imagery and information architecture while
improving layout, typography, spacing, responsiveness and accessibility.

Powered by GA Digital Solutions.

---

## Running locally

The site is plain PHP with no database or dependencies.

```bash
# from the project root
php -S localhost:8000
```

On Windows with XAMPP, if `php` is not on PATH:

```powershell
& "C:\xampp\php\php.exe" -S localhost:8000
```

Then open <http://localhost:8000/>.

Alternatively, copy the folder into `C:\xampp\htdocs\` and browse to
`http://localhost/Braintospine/`. Paths are resolved relative to the site root at
runtime, so serving from a subdirectory works without changes.

---

## Structure

```
├── index.php                  Homepage (banner slider, doctor intro, procedures)
├── about-doctor.php           About Dr. Ajay Reddy (credentials tabs, procedures list)
├── contact-us.php             Locations, phone / WhatsApp / email
├── second-opinion.php         Get a second opinion
├── international-patients.php International patients + FAQs
├── media.php                  Surgical and testimonial videos
├── sciatica.php               Sciatica
├── privacy.php / terms.php    Legal
│
├── blog/                      Blog index + 10 articles
├── patient-handouts/          Neuro rehab exercises (vertigo, back strengthening)
├── surgery-for/               7 categories + ~36 condition / procedure pages
│
├── components/
│   ├── init.php               Computes $rootPath from filesystem depth
│   ├── header.php             Sticky header + Surgery For mega menu
│   ├── footer.php             About / Address / Quick Links / Get In Touch
│   ├── category-template.php  Category landing pages (hero + card grid)
│   └── condition-template.php Condition / procedure pages (hero, prose, FAQs, aside)
│
├── css/style.css              Single stylesheet, design-token driven
├── js/
│   ├── main.js                Nav, banner slider, tabs, FAQ, modal, reveal
│   └── blog-enhancements.js   Reading progress + table of contents
├── images/                    Original site imagery (100 files)
├── downloads/                 Original exercise handout PDFs
└── design-tokens/             Colour, typography, spacing, effects documentation
```

### Path handling

`components/init.php` derives `$rootPath` by comparing the running script's
directory to the site root on disk. Every asset URL and internal link is prefixed
with it, so pages work at any nesting depth and when the site is served from a
subfolder. Templates are included with `__DIR__` so includes never depend on the
caller's location.

---

## Design system

Brand colour is `#267A48`, taken from the original site (see
`design-tokens/colors.md`). Typography is Plus Jakarta Sans for display and Inter
for body copy.

Vertical rhythm is controlled by four tokens in `css/style.css`:

```css
--space-section   /* section top/bottom padding */
--space-header    /* section heading to content  */
--space-block     /* between content blocks      */
--space-hero      /* page hero padding           */
```

Adjusting `--space-section` changes page density globally.

---

## Content provenance

Content, medical copy, imagery and the 28 FAQs were transferred from the original
site. The following items need client input and are **not** sourced from
braintospine.com:

| Item | Status |
|---|---|
| Patient handout exercise instructions | Written during the rebuild. The original pages carry only exercise names, photos and the PDF. **Needs clinical review by Dr. Reddy.** |
| Sciatica | No body content exists on the original page. Placeholder navigation only. |
| Acoustic Schwannoma / Vestibulocochlear Nerve Disorders | Page exists on the original but is empty. Minimal factual page only. |
| Laminoplasty | The original links a Laminoplasty card to no page. Needs copy. |

No medical claims, statistics, credentials, testimonials or reviews were invented.

---

## Accessibility & QA

- Skip link, ARIA landmarks, `aria-expanded` on all disclosure controls
- Keyboard-operable mega menu, credential tabs and FAQ accordions
- Pointer targets meet the 24px minimum (WCAG 2.5.8)
- `prefers-reduced-motion` respected
- Verified: 66/66 pages render clean, 97/97 images resolve, 0 broken internal
  links, 0 orphan pages, no horizontal overflow at 375 / 768 / 992 / 1440px

Full WCAG conformance additionally requires manual testing with assistive
technology and expert review.
