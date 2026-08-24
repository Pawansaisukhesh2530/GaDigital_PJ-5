# Brain to Spine — Color Design Tokens

Foundation palette for the Brain to Spine redesign. Every visual decision references
these tokens — no hardcoded hex values in components.

## 1. Source & Extraction

| Source | Evidence | Result |
|---|---|---|
| Logo file | `images/logo.png` — original 120×80 PNG fetched 2026-08-21 from `https://www.braintospine.com/wp-content/uploads/2022/06/cropped-Brain-to-spine.-120x80-1.png` (not redesigned) | Pixel census (System.Drawing, 8-level buckets, white excluded): sky blue `#40A8E0` family = 2,215 px; pink `#E888A0` family = 636 px |
| Live site chrome | Anti-bot page on braintospine.com | Confirmed brand green `rgba(38, 122, 72, 0.86)` → solid **`#267A48`** |

**Decision:** `#267A48` is the brand primary (confirmed from the live site). The logo
mark itself is blue + pink; the mark's sky blue is deepened into the `--color-accent`
token so the UI echoes the logo without stealing the primary role from green. The
mark's pink is documented here for reference only and is intentionally NOT tokenized
in this palette (reserved for the logo asset itself).

- Primary HSL basis: `#267A48` = HSL(144°, 52%, 31%). Dark/light variants shift
  lightness only, keeping hue and saturation constant.
- Accent HSL basis: logo blue `#40A8E0` ≈ HSL(201°, 72%, 56%), deepened to 38%
  lightness for readable contrast on white.

## 2. Semantic Palette

| Token | Hex | Role | Source & reasoning |
|---|---|---|---|
| `--color-primary` | `#267A48` | Buttons, links, key brand UI | Exact confirmed site green rgba(38,122,72,0.86) |
| `--color-primary-dark` | `#1B5532` | Hover/active/pressed states of primary | Primary at lightness 22% (HSL 144°, 52%, 22%) |
| `--color-primary-light` | `#33A360` | Highlights, focus rings, large decorative accents | Primary at lightness 42% (HSL 144°, 52%, 42%); large text / graphics only |
| `--color-accent` | `#1B76A7` | Secondary CTAs, info highlights, links-in-context | Logo sky blue `#40A8E0` deepened to 38% lightness — ties UI to the mark, AA-readable on white |
| `--color-heading` | `#14211A` | All headings (h1–h6) | Near-black with a green tint; keeps headings in-brand instead of pure black |
| `--color-text-main` | `#2A3A31` | Body copy | Dark green-gray, ~12:1 on white — softer than black, still comfortably AAA |
| `--color-text-secondary` | `#5A6B60` | Captions, meta text, placeholders | Muted green-gray, ~5.7:1 on white — clears AA (4.5:1) with margin |
| `--color-background` | `#F6FAF7` | Page background | Off-white with a faint green cast; warmer and more branded than pure white |
| `--color-surface` | `#FFFFFF` | Cards, panels, elevated containers | Pure white for maximum content contrast over the tinted background |
| `--color-border` | `#DCE7E0` | Dividers, card/input borders | Light green-gray, visible on both background and surface without competing with text |
| `--color-success` | `#27AE60` | Success states, confirmations | Brighter emerald than primary so positive feedback reads instantly and is not mistaken for a brand button; pair with `--color-primary-dark` text |
| `--color-warning` | `#D97706` | Warning banners, badges | Amber — the conventional caution hue; use as fill/badge with `--color-heading` dark text, not as small text on white |
| `--color-error` | `#C0392B` | Errors, destructive actions | Deep red, ~5.4:1 on white — AA-safe as text and unmistakable against the green system |

## 3. CSS Custom Properties

```css
:root {
  /* Brand */
  --color-primary:        #267A48;
  --color-primary-dark:   #1B5532;
  --color-primary-light:  #33A360;
  --color-accent:         #1B76A7;

  /* Text */
  --color-heading:        #14211A;
  --color-text-main:      #2A3A31;
  --color-text-secondary: #5A6B60;

  /* Surfaces */
  --color-background:     #F6FAF7;
  --color-surface:        #FFFFFF;
  --color-border:         #DCE7E0;

  /* Feedback */
  --color-success:        #27AE60;
  --color-warning:        #D97706;
  --color-error:          #C0392B;
}
```

## 4. Accessibility (contrast on `--color-surface` / white)

| Token | Ratio | Verdict |
|---|---|---|
| `--color-text-main` #2A3A31 | ~12.0:1 | AAA |
| `--color-heading` #14211A | ~15:1 | AAA |
| `--color-text-secondary` #5A6B60 | ~5.7:1 | AA (normal text) |
| `--color-primary` #267A48 | ~5.3:1 | AA (normal text) |
| `--color-primary-dark` #1B5532 | ~7.5:1 | AA/AAA |
| `--color-accent` #1B76A7 | ~4.7:1 | AA (normal text) |
| `--color-error` #C0392B | ~5.4:1 | AA (normal text) |
| `--color-primary-light` #33A360 | ~2.9:1 | Large text / decorative only |
| `--color-success` #27AE60 | ~2.7:1 | Icons, fills, large elements only |
| `--color-warning` #D97706 | ~3.5:1 | Fills/badges with dark text only |

## 5. Usage Rules

1. Components MUST reference tokens, never raw hex.
2. Interactive primary elements: default `--color-primary`, hover/active `--color-primary-dark`.
3. Secondary actions and info accents use `--color-accent` — the only blue in the system, inherited from the logo mark.
4. Body text is `--color-text-main` on `--color-background` or `--color-surface`; never pure `#000`.
5. Feedback colors are semantic — do not use `--color-success` as a brand substitute for `--color-primary`.
6. The logo's pink (~`#E888A0`) belongs to the logo asset only; it is not a UI token.
