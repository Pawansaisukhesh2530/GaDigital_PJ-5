# BrainToSpine — Typography Design Tokens

Complete typography system for the BrainToSpine website redesign. Follows the agency
pattern established in Project-3 (`dr.rajeshreddy/css/style.css`) and formalizes it
into a reusable token set. All sizes are `rem`-based on a 16px root; `px` equivalents
are listed for reference.

## 1. Font Families

| Role | Font | Usage |
|------|------|-------|
| Display / Headings | **Plus Jakarta Sans** (300–800) | Display, h1–h6, buttons, nav, labels |
| Body | **Inter** (300–700) | Paragraphs, lists, form inputs, captions, UI meta text |

### Google Fonts import (exact agency pattern from Project-3)

```css
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Inter:wght@300;400;500;600;700&display=swap');
```

### Font stack tokens

```css
--font-display: 'Plus Jakarta Sans', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
--font-body: 'Inter', 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
```

## 2. Type Scale — 10 Steps

Grounded in Project-3's actual rendered sizes (hero 3.5rem, section heads 2.5–2.75rem,
card titles 1.25–1.5rem, body 1rem, meta text 0.75–0.95rem).

| Token | rem | px | Semantic role(s) |
|-------|-----|----|------------------|
| `--text-xs` | 0.75rem | 12px | caption, badges, eyebrow labels |
| `--text-sm` | 0.875rem | 14px | small, nav links, form hints |
| `--text-base` | 1rem | 16px | body (default), UI controls |
| `--text-lg` | 1.125rem | 18px | h6, lead-in paragraphs, large UI |
| `--text-xl` | 1.25rem | 20px | h5, card subtitles, pull quotes |
| `--text-2xl` | 1.5rem | 24px | h4, card titles |
| `--text-3xl` | 1.875rem | 30px | h3, sub-section headings |
| `--text-4xl` | 2.25rem | 36px | h2, section headings |
| `--text-5xl` | 3rem | 48px | h1, page titles |
| `--text-6xl` | 3.75rem | 60px | display, hero headings |

```css
--text-xs: 0.75rem;      /* 12px */
--text-sm: 0.875rem;     /* 14px */
--text-base: 1rem;       /* 16px */
--text-lg: 1.125rem;     /* 18px */
--text-xl: 1.25rem;      /* 20px */
--text-2xl: 1.5rem;      /* 24px */
--text-3xl: 1.875rem;    /* 30px */
--text-4xl: 2.25rem;     /* 36px */
--text-5xl: 3rem;        /* 48px */
--text-6xl: 3.75rem;     /* 60px */
```

### Responsive note

`display` and `h1` should use `clamp()` so the hero scales down on mobile
(Project-3's hero is 3.5rem ≈ between 5xl and 6xl on desktop):

```css
font-size: clamp(var(--text-4xl), 5vw + 1rem, var(--text-6xl));  /* display */
font-size: clamp(var(--text-3xl), 3vw + 1rem, var(--text-5xl));  /* h1 */
```

## 3. Semantic Roles

Every text element on the site maps to exactly one of these roles — no ad-hoc sizes.

| Role | Font family | Size token | Weight | Line height | Letter spacing |
|------|-------------|-----------|--------|-------------|----------------|
| display | Plus Jakarta Sans | `--text-6xl` (clamp) | 800 | `--leading-tight` | `--tracking-tighter` |
| h1 | Plus Jakarta Sans | `--text-5xl` (clamp) | 800 | `--leading-tight` | `--tracking-tight` |
| h2 | Plus Jakarta Sans | `--text-4xl` | 700 | `--leading-snug` | `--tracking-tight` |
| h3 | Plus Jakarta Sans | `--text-3xl` | 700 | `--leading-snug` | `--tracking-tight` |
| h4 | Plus Jakarta Sans | `--text-2xl` | 700 | `--leading-snug` | `--tracking-normal` |
| h5 | Plus Jakarta Sans | `--text-xl` | 600 | `--leading-normal` | `--tracking-normal` |
| h6 | Plus Jakarta Sans | `--text-lg` | 600 | `--leading-normal` | `--tracking-normal` |
| body | Inter | `--text-base` | 400 | `--leading-relaxed` | `--tracking-normal` |
| small | Inter | `--text-sm` | 400 | `--leading-normal` | `--tracking-normal` |
| caption | Inter | `--text-xs` | 400–500 | `--leading-normal` | `--tracking-wide` |

Eyebrow / overline labels (the `letter-spacing: 2px` pattern in Project-3) use
`--text-xs` with `--tracking-widest`, weight 600, uppercase.

## 4. Line Heights

| Token | Value | Use |
|-------|-------|-----|
| `--leading-none` | 1 | Tight display lockups, stacked headlines |
| `--leading-tight` | 1.15 | display, h1 |
| `--leading-snug` | 1.3 | h2–h4 |
| `--leading-normal` | 1.5 | h5–h6, small, caption, UI text |
| `--leading-relaxed` | 1.6 | body (matches Project-3 base) |
| `--leading-loose` | 1.75 | Long-form article body, patient-education copy |

```css
--leading-none: 1;
--leading-tight: 1.15;
--leading-snug: 1.3;
--leading-normal: 1.5;
--leading-relaxed: 1.6;
--leading-loose: 1.75;
```

## 5. Font Weights

Plus Jakarta Sans is loaded 300–800; Inter 300–700. Do not use weight 800 on Inter
(not imported) or weight 900 anywhere (not imported on either font).

| Token | Value | Use |
|-------|-------|-----|
| `--font-light` | 300 | Optional large display variants, de-emphasized headings |
| `--font-regular` | 400 | Body, captions, default text |
| `--font-medium` | 500 | Navigation links, form labels, subtle emphasis |
| `--font-semibold` | 600 | h5–h6, buttons, card titles, table headers |
| `--font-bold` | 700 | h2–h4, strong emphasis |
| `--font-extrabold` | 800 | display, h1 (Plus Jakarta Sans only) |

```css
--font-light: 300;
--font-regular: 400;
--font-medium: 500;
--font-semibold: 600;
--font-bold: 700;
--font-extrabold: 800;
```

## 6. Letter Spacing

| Token | Value | Use |
|-------|-------|-----|
| `--tracking-tighter` | -0.03em | display (matches Project-3 hero) |
| `--tracking-tight` | -0.02em | h1–h3 (matches Project-3 section heads) |
| `--tracking-normal` | 0 | Body and default |
| `--tracking-wide` | 0.02em | Captions, small labels (matches Project-3 accents) |
| `--tracking-wider` | 0.05em | Buttons, strong labels |
| `--tracking-widest` | 0.125em | Uppercase eyebrow / overline labels (≈2px at 16px) |

Never apply negative tracking below `--text-xl`, and never positive tracking on
body paragraphs.

```css
--tracking-tighter: -0.03em;
--tracking-tight: -0.02em;
--tracking-normal: 0;
--tracking-wide: 0.02em;
--tracking-wider: 0.05em;
--tracking-widest: 0.125em;
```

## 7. Complete CSS Custom Properties Block

Drop-in token block for the redesign's root stylesheet:

```css
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Inter:wght@300;400;500;600;700&display=swap');

:root {
  /* Font families */
  --font-display: 'Plus Jakarta Sans', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
  --font-body: 'Inter', 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;

  /* Type scale (16px root) */
  --text-xs: 0.75rem;
  --text-sm: 0.875rem;
  --text-base: 1rem;
  --text-lg: 1.125rem;
  --text-xl: 1.25rem;
  --text-2xl: 1.5rem;
  --text-3xl: 1.875rem;
  --text-4xl: 2.25rem;
  --text-5xl: 3rem;
  --text-6xl: 3.75rem;

  /* Line heights */
  --leading-none: 1;
  --leading-tight: 1.15;
  --leading-snug: 1.3;
  --leading-normal: 1.5;
  --leading-relaxed: 1.6;
  --leading-loose: 1.75;

  /* Font weights */
  --font-light: 300;
  --font-regular: 400;
  --font-medium: 500;
  --font-semibold: 600;
  --font-bold: 700;
  --font-extrabold: 800;

  /* Letter spacing */
  --tracking-tighter: -0.03em;
  --tracking-tight: -0.02em;
  --tracking-normal: 0;
  --tracking-wide: 0.02em;
  --tracking-wider: 0.05em;
  --tracking-widest: 0.125em;
}

body {
  font-family: var(--font-body);
  font-size: var(--text-base);
  font-weight: var(--font-regular);
  line-height: var(--leading-relaxed);
}

h1, h2, h3, h4, h5, h6, .display {
  font-family: var(--font-display);
}
```

## 8. Rules of Use

1. Every `font-size` on the site MUST reference a `--text-*` token — no raw px/rem values.
2. Headings (display, h1–h6) always use `--font-display`; everything else uses `--font-body`.
3. Weight 800 is exclusive to display/h1 in Plus Jakarta Sans.
4. Negative tracking only at `--text-xl` and above.
5. Uppercase eyebrow labels: `--text-xs` + `--font-semibold` + `--tracking-widest`.
6. Body copy never drops below `--text-sm` (14px); captions never below `--text-xs` (12px).
