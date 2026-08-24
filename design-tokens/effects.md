# BrainToSpine Effects Tokens

Shadow, border, radius, and motion tokens for the BrainToSpine website redesign.
All values are CSS custom properties consumed from `:root`. Never hardcode a
shadow, radius, border width, duration, or easing in a component - reference
these tokens.

Reference pattern: Project-3 agency baseline
(`--transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1)`, `--border-radius: 12px`,
`--border-radius-pill: 9999px`). Durations below 0.2s feel instant and above
0.5s feel sluggish; this scale stays inside that band.

---

## 1. Shadow Scale

Layered, low-opacity shadows create a visible depth hierarchy without muddying
the light clinical palette. Each step roughly doubles the perceived elevation.

| Token | Value | Perceived elevation | Use for |
|---|---|---|---|
| `--shadow-sm` | `0 1px 2px 0 rgba(0, 0, 0, 0.05)` | Flat, resting on the page | Inputs at rest, subtle dividers, table rows |
| `--shadow-md` | `0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)` | Slightly raised | Raised buttons, dropdown menus, sticky header |
| `--shadow-lg` | `0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)` | Floating | Popovers, hover-lifted cards, image thumbnails |
| `--shadow-xl` | `0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)` | Elevated above content | Modals, dialogs, mobile nav drawer |
| `--shadow-card` | `0 10px 30px rgba(0, 0, 0, 0.08)` | Soft diffuse lift | Service cards, testimonial cards, pricing panels (Project-3 pattern) |

Rules:
- One shadow per element. Never stack two tokens on the same box.
- Hover lift pattern: `sm` at rest -> `lg` on hover, animated with `--transition-base`.
- Never invent a one-off shadow. If none of the five fits, the design is
  off-system - extend this table first.

## 2. Border Widths

| Token | Value | Use for |
|---|---|---|
| `--border-thin` | `1px` | Default hairline - cards, inputs, dividers, table outlines |
| `--border-medium` | `2px` | Emphasis - focused inputs, active nav underline, selected states |
| `--border-thick` | `4px` | Accent bars - section markers, blockquote rails, brand accents |

Rules:
- Pair width with a color token from `colors.md` (e.g. `--color-border`),
  never a raw hex.
- `1px` is the default. Reach for `2px`/`4px` only for state or accent, not
  decoration.

## 3. Radius Scale

| Token | Value | Use for |
|---|---|---|
| `--radius-sm` | `4px` | Small elements - tags, badges, code chips, tooltip boxes |
| `--radius-md` | `8px` | Inputs, small buttons, thumbnails, dropdown panels |
| `--radius-lg` | `12px` | Cards, modals, section containers (Project-3 `--border-radius`) |
| `--radius-xl` | `16px` | Hero panels, feature blocks, large imagery containers |
| `--radius-pill` | `9999px` | Pills - rounded buttons, chips, avatars, toggles (Project-3 `--border-radius-pill`) |

Rules:
- Radius correlates with element size: small element -> smaller radius.
- `--radius-pill` is for fully rounded caps on short elements; do not apply it
  to tall cards.
- Nested corners: inner element radius should be one step smaller than its
  container (e.g. `--radius-lg` card holds a `--radius-md` image).

## 4. Motion - Durations / Transitions

Transitions are full shorthands (duration + easing) so they can be applied
directly: `transition: var(--transition-base);`. All use `--ease-in-out`, the
Project-3 baseline curve `cubic-bezier(0.4, 0, 0.2, 1)`, which accelerates and
decelerates smoothly with no perceptible jank at 60fps.

| Token | Value | Duration | Use for |
|---|---|---|---|
| `--transition-fast` | `all 0.2s var(--ease-in-out)` | 0.2s | Micro-feedback - hover color/background, focus rings, icon swaps |
| `--transition-base` | `all 0.3s var(--ease-in-out)` | 0.3s | Default - shadow lifts, dropdown open, card transforms (Project-3 `--transition`) |
| `--transition-slow` | `all 0.5s var(--ease-in-out)` | 0.5s | Large movements - modals, drawers, hero reveals, page-level fades |

Rules:
- Animate only `transform` and `opacity` where possible; both are
  compositor-friendly and guarantee jank-free motion. The `all` keyword is
  acceptable because every animatable property in the system resolves to a
  GPU-accelerated or cheap property - never add `width`/`height`/`top`/`left`
  animations to components.
- Match duration to distance: the further an element travels, the slower the
  token.

## 5. Motion - Easing Curves

| Token | Value | Character | Use for |
|---|---|---|---|
| `--ease-in-out` | `cubic-bezier(0.4, 0, 0.2, 1)` | Smooth both ends (Material standard, Project-3 baseline) | Default for all transitions above |
| `--ease-out` | `cubic-bezier(0, 0, 0.2, 1)` | Fast start, gentle landing | Elements entering the viewport - modals in, toasts in |
| `--ease-in` | `cubic-bezier(0.4, 0, 1, 1)` | Slow start, fast exit | Elements leaving the viewport - modals out, toasts out |

Rules:
- Entering = `--ease-out`; leaving = `--ease-in`; state changes in place =
  `--ease-in-out`.
- Never use CSS `linear` for UI motion; it reads as robotic.
- Never use bounce/elastic easings - off-brand for a clinical site.

## 6. Copy-Paste Token Block

```css
:root {
  /* Shadows */
  --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  --shadow-card: 0 10px 30px rgba(0, 0, 0, 0.08);

  /* Border widths */
  --border-thin: 1px;
  --border-medium: 2px;
  --border-thick: 4px;

  /* Radii */
  --radius-sm: 4px;
  --radius-md: 8px;
  --radius-lg: 12px;
  --radius-xl: 16px;
  --radius-pill: 9999px;

  /* Easings (declared before transitions that reference them) */
  --ease-in-out: cubic-bezier(0.4, 0, 0.2, 1);
  --ease-out: cubic-bezier(0, 0, 0.2, 1);
  --ease-in: cubic-bezier(0.4, 0, 1, 1);

  /* Transitions */
  --transition-fast: all 0.2s var(--ease-in-out);
  --transition-base: all 0.3s var(--ease-in-out);
  --transition-slow: all 0.5s var(--ease-in-out);
}

/* Accessibility: honor reduced motion */
@media (prefers-reduced-motion: reduce) {
  :root {
    --transition-fast: none;
    --transition-base: none;
    --transition-slow: none;
  }
}
```

## 7. Component Mapping Quick Reference

| Component | Shadow | Radius | Border | Transition |
|---|---|---|---|---|
| Primary button | none -> `--shadow-md` on hover | `--radius-pill` or `--radius-md` | none | `--transition-fast` |
| Service / testimonial card | `--shadow-card` (`--shadow-lg` on hover) | `--radius-lg` | `--border-thin` | `--transition-base` |
| Input (rest / focus) | `--shadow-sm` / none | `--radius-md` | `--border-thin` / `--border-medium` | `--transition-fast` |
| Modal / dialog | `--shadow-xl` | `--radius-lg` | none | `--transition-slow` with `--ease-out` |
| Dropdown / popover | `--shadow-lg` | `--radius-md` | `--border-thin` | `--transition-base` |
| Sticky header | `--shadow-md` when scrolled | none | `--border-thin` bottom | `--transition-base` |
| Badge / tag | none | `--radius-sm` | `--border-thin` | `--transition-fast` |

## 8. Do / Don't

- DO reference tokens everywhere: `box-shadow: var(--shadow-card);`
- DON'T hardcode: `box-shadow: 0 4px 12px rgba(0,0,0,.15);`
- DO pick the nearest token when a mock is slightly off-system.
- DON'T add intermediate steps (no `--shadow-md-2`) without updating this file.
- DO keep every animation within the three duration tokens.
- DON'T introduce `transition: all 0.15s ease` or any other ad-hoc shorthand.
