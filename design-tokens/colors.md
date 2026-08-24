# Brain to Spine — Color Design Tokens

Foundation palette for the Brain to Spine redesign. Every visual decision references
these tokens — no hardcoded hex values in components.

> **Correction notice.** An earlier version of this document recorded a green
> primary (`#267A48`) and claimed it was "confirmed from the live site". That was
> wrong — the reading came from an interstitial/anti-bot page, not the real theme.
> The palette below is read directly from the live site's Astra/Elementor kit
> variables and from measured computed styles. The site's identity is **sky blue
> and pink**.

## 1. Source & Extraction

Measured on `https://www.braintospine.com/` with a headless browser, reading
`getComputedStyle(document.documentElement)` for the theme's custom properties and
tallying computed colours across buttons, headings, sections and body text.

| Original variable | Value | Observed role |
|---|---|---|
| `--e-global-color-astglobalcolor0` / `ast-global-color-0` | `#2FC1FF` | Primary sky blue — button fills, accents |
| `--e-global-color-astglobalcolor1` / `ast-global-color-1` | `#08ACF2` | Deeper blue |
| `--e-global-color-astglobalcolor2` | `#101218` | Headings (confirmed: `rgb(16,18,24)` ×24) |
| `--e-global-color-astglobalcolor3` | `#4C5253` | Body text |
| `--e-global-color-astglobalcolor4` | `#F3F6F6` | Light background |
| `--e-global-color-astglobalcolor8` | `#F6F7F8` | Alternate background |
| `--e-global-color-astglobalcolor5` | `#FFFFFF` | Surface |

Pink is not in the kit variables but is clearly part of the identity, measured from
rendered output and artwork:

| Measured | Value | Where |
|---|---|---|
| Heading pink | `#E1597B` | `rgb(225,89,123)` on a rendered heading |
| Pale pink band | `#FFCAC8` | `rgb(255,202,200)` section background |
| Logo pink | ~`#E888A0` | Pixel census of `images/logo.png` |
| Banner artwork | pink title strips | e.g. `spinal-fusion1.jpg` |

Logo pixel census (white excluded): sky-blue family ≈ 2,215 px, pink family ≈ 636 px —
consistent with blue-primary / pink-accent.

## 2. Accessibility adjustment (deliberate deviation)

The original pairs **white text on `#2FC1FF`**, which is ≈ **2.2:1** and fails WCAG AA
for normal text. We keep that exact blue for decorative use and on dark backgrounds,
but interactive fills use a deeper blue from the same family so white text passes.

Same reasoning for pink: `#E1597B` as text on a pale tint is ≈ 3.4:1, so a darker
pink is used wherever pink carries text.

| Purpose | Token | Value | Measured contrast |
|---|---|---|---|
| Button fill (white text) | `--color-primary` | `#0973AE` | **5.15:1** ✅ AA |
| Decorative / on-dark accent | `--color-primary-bright` | `#2FC1FF` | original value, large/decorative only |
| Pink text on pink tint | `--color-accent-dark` | `#B23558` | **5.05:1** ✅ AA |
| Headings on white | `--color-heading` | `#101218` | **18.72:1** ✅ AAA |

## 3. Semantic Palette

| Token | Hex | Role |
|---|---|---|
| `--color-primary` | `#0973AE` | Buttons, links, active states, focus rings |
| `--color-primary-bright` | `#2FC1FF` | Exact original accent — gradients, on-dark text, decoration |
| `--color-primary-mid` | `#08ACF2` | Original deeper blue — secondary accents |
| `--color-primary-dark` | `#075E8F` | Hover / pressed |
| `--color-primary-light` | `#E6F6FE` | Pale blue tint background |
| `--color-accent` | `#E1597B` | Brand pink — eyebrow labels, decorative rules, card accents |
| `--color-accent-dark` | `#B23558` | Pink carrying text |
| `--color-accent-light` | `#FFE7EC` | Pale pink tint |
| `--color-accent-band` | `#FFCAC8` | Pale pink section band (as on the original) |
| `--color-heading` | `#101218` | All headings |
| `--color-text` | `#3A4046` | Body copy |
| `--color-text-secondary` | `#4C5253` | Secondary / meta text |
| `--color-text-muted` | `#8A9299` | Captions, placeholders |
| `--color-bg` | `#FFFFFF` | Page / card surface |
| `--color-bg-alt` | `#F3F6F6` | Alternating section background |
| `--color-bg-dark` | `#101218` | Dark sections, footer, condition hero |
| `--color-border` | `#DCE6EC` | Dividers, card and input borders |
| `--color-accent-warm` | `#F59E0B` | Star ratings only |
| `--color-whatsapp` | `#25D366` | WhatsApp brand — must remain green |

## 4. Usage Rules

1. Components MUST reference tokens, never raw hex.
2. **Blue is the interactive colour.** Buttons, links, focus states, active nav.
3. **Pink is the accent.** Eyebrow/kicker labels, section title underline, stat tile
   rules, decorative accents. Pink is never the sole affordance for an action.
4. Never place white text on `--color-primary-bright` at body size — use
   `--color-primary` for fills that carry text.
5. Never use `--color-accent` for text on a light tint — use `--color-accent-dark`.
6. `--color-whatsapp` is third-party brand colour and is intentionally the only
   green in the system. Do not repurpose it.
7. Dark sections use `--color-bg-dark`; on those, blue text should be
   `--color-primary-bright` and pink text `#FFC3D0` for adequate contrast.
