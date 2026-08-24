# BrainToSpine — Spacing Design Tokens

**BASE UNIT:** 8px (with 4px half-step)

A consistent 4/8px-based spacing scale provides visual rhythm and alignment across the design system. Every margin, padding, and gap value should be drawn from this scale.

---

## SPACING SCALE

| Token        | Value       | rem     | Usage                                      |
| ------------ | ----------- | ------- | ------------------------------------------ |
| `--space-1`  | `4px`       | `0.25rem` | Tight inline spacing, icon gaps           |
| `--space-2`  | `8px`       | `0.5rem`  | Base unit, tight stacking                 |
| `--space-3`  | `12px`      | `0.75rem` | Compact vertical rhythm                   |
| `--space-4`  | `16px`      | `1rem`    | Default paragraph / component gap         |
| `--space-5`  | `20px`      | `1.25rem` | Medium spacing                            |
| `--space-6`  | `24px`      | `1.5rem`  | Card inner rhythm, list spacing           |
| `--space-7`  | `28px`      | `1.75rem` | Sub-section gaps                          |
| `--space-8`  | `32px`      | `2rem`    | Card padding, large component gaps        |
| `--space-9`  | `40px`      | `2.5rem`  | Section sub-blocks                        |
| `--space-10` | `48px`      | `3rem`    | Hero element spacing                      |
| `--space-11` | `56px`      | `3.5rem`  | Large vertical breaks                     |
| `--space-12` | `64px`      | `4rem`    | Major section dividers                    |
| `--space-13` | `80px`      | `5rem`    | Top-level section padding (mobile-up)     |
| `--space-14` | `96px`      | `6rem`    | Large hero vertical padding               |
| `--space-15` | `112px`     | `7rem`    | Extra-large vertical rhythm               |
| `--space-16` | `128px`     | `8rem`    | Maximum spacing — page-level breathing    |

---

## COMPONENT PATTERNS

| Token                  | Value              | Purpose                                        |
| ---------------------- | ------------------ | ---------------------------------------------- |
| `--container-max`      | `1240px`           | Maximum content width for main layout          |
| `--container-gutter`   | `1.5rem` (`24px`)  | Horizontal page edge padding                   |
| `--section-padding`    | `4.5rem 0` (`72px` top/bottom) | Vertical breathing room for top-level sections |
| `--card-padding`       | `2rem` (`32px`)    | Default inner padding for card components      |

---

## :root CSS Block

```css
:root {
  /* Base unit: 8px (4px half-step) */

  /* Spacing scale */
  --space-1:  0.25rem;  /* 4px   */
  --space-2:  0.5rem;   /* 8px   */
  --space-3:  0.75rem;  /* 12px  */
  --space-4:  1rem;     /* 16px  */
  --space-5:  1.25rem;  /* 20px  */
  --space-6:  1.5rem;   /* 24px  */
  --space-7:  1.75rem;  /* 28px  */
  --space-8:  2rem;     /* 32px  */
  --space-9:  2.5rem;   /* 40px  */
  --space-10: 3rem;     /* 48px  */
  --space-11: 3.5rem;   /* 56px  */
  --space-12: 4rem;     /* 64px  */
  --space-13: 5rem;     /* 80px  */
  --space-14: 6rem;     /* 96px  */
  --space-15: 7rem;     /* 112px */
  --space-16: 8rem;     /* 128px */

  /* Component patterns */
  --container-max:    1240px;
  --container-gutter: 1.5rem;   /* 24px */
  --section-padding:  4.5rem 0; /* 72px top/bottom */
  --card-padding:     2rem;     /* 32px */
}
```

---

## Usage Notes

- Always reference spacing via the `--space-*` tokens — never hard-code pixel values in components.
- Use `--space-2` (8px) as the canonical tight unit; reach for `--space-1` (4px) only when an 8px step is too coarse.
- For major page-level vertical rhythm, prefer `--space-12` → `--space-14` (`64px`–`96px`).
- Component patterns (`--container-*`, `--section-padding`, `--card-padding`) are semantic aliases built from the scale so layout decisions stay consistent.
