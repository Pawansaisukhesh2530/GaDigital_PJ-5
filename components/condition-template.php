<?php
/**
 * Condition / Procedure Page Template
 *
 * Set before including:
 *   $pageTitle, $pageDescription, $conditionName, $content
 * Optional:
 *   $breadcrumbTrail  array of ['label' => ..., 'url' => ...] (last item may omit url)
 *   $relatedLinks     array of ['label' => ..., 'url' => ..., 'desc' => ...]
 *   $schemaType       defaults to MedicalCondition
 *   $heroKicker       small label above the H1
 */
require_once __DIR__ . '/init.php';

if (!isset($pageTitle))       $pageTitle = "Condition | Brain to Spine";
if (!isset($pageDescription)) $pageDescription = "Treatment information from Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
if (!isset($conditionName))   $conditionName = "";
if (!isset($schemaType))      $schemaType = "MedicalCondition";
if (!isset($content))         $content = "";
if (!isset($relatedLinks))    $relatedLinks = array();
if (!isset($heroKicker))      $heroKicker = "Surgery For";
if (!isset($heroImage))       $heroImage = "";   // root-relative, e.g. images/hero-tumors.jpg
if (!isset($bodyImage))       $bodyImage = "";   // optional in-article figure
if (!isset($bodyImageAlt))    $bodyImageAlt = $conditionName;
if (!isset($bodyImagePortrait)) $bodyImagePortrait = false;  // true for tall infographics
if (!isset($faqs))            $faqs = array();   // array of ['q' => ..., 'a' => ...]

// Build breadcrumb trail. Fall back to a Home > Surgery For trail.
if (!isset($breadcrumbTrail) || !is_array($breadcrumbTrail)) {
    $breadcrumbTrail = array(
        array('label' => 'Home',        'url' => $rootPath . 'index.php'),
        array('label' => 'Surgery For', 'url' => $rootPath . 'surgery-for/index.php'),
        array('label' => $conditionName),
    );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <link rel="icon" href="<?php echo $rootPath; ?>images/logo.png">
  <link rel="stylesheet" href="<?php echo $rootPath; ?>css/style.css">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Physician",
        "name": "Dr. A. Ajay Reddy",
        "medicalSpecialty": "Neurosurgery",
        "image": "https://www.braintospine.com/wp-content/uploads/2026/04/ajay-reddy-1-250x300-1.webp",
        "telephone": "+91-95155-02113",
        "email": "mybrain2spine@gmail.com",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Star Hospitals, Survey No.74, Financial District, Nanakramguda",
          "addressLocality": "Hyderabad",
          "addressRegion": "Telangana",
          "postalCode": "500008",
          "addressCountry": "IN"
        }
      },
      {
        "@type": "<?php echo $schemaType; ?>",
        "name": "<?php echo htmlspecialchars($conditionName); ?>",
        "possibleTreatment": {
          "@type": "MedicalProcedure",
          "name": "Neurosurgical Treatment"
        }
      }<?php if (!empty($faqs)): ?>,
      {
        "@type": "FAQPage",
        "mainEntity": [
          <?php
            $parts = array();
            foreach ($faqs as $faq) {
                $q = html_entity_decode(strip_tags($faq['q']), ENT_QUOTES, 'UTF-8');
                $a = html_entity_decode(strip_tags($faq['a']), ENT_QUOTES, 'UTF-8');
                $a = preg_replace('/\s+/', ' ', trim($a));
                $parts[] = '{"@type":"Question","name":' . json_encode($q)
                         . ',"acceptedAnswer":{"@type":"Answer","text":' . json_encode($a) . '}}';
            }
            echo implode(",\n          ", $parts);
          ?>
        ]
      }<?php endif; ?>
    ]
  }
  </script>
</head>
<body>
  <?php include __DIR__ . '/header.php'; ?>

  <main id="content">
    <section class="page-hero page-hero-condition<?php echo $heroImage ? ' page-hero-media' : ''; ?>">
      <?php if ($heroImage): ?>
        <div class="page-hero-bg" aria-hidden="true">
          <img src="<?php echo $rootPath . $heroImage; ?>" alt="" width="1600" height="500" fetchpriority="high" decoding="async">
        </div>
      <?php endif; ?>
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <ol>
            <?php foreach ($breadcrumbTrail as $i => $crumb): ?>
              <li>
                <?php if (!empty($crumb['url']) && $i < count($breadcrumbTrail) - 1): ?>
                  <a href="<?php echo $crumb['url']; ?>"><?php echo htmlspecialchars($crumb['label']); ?></a>
                <?php else: ?>
                  <span aria-current="page"><?php echo htmlspecialchars($crumb['label']); ?></span>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ol>
        </nav>
        <span class="hero-kicker"><?php echo htmlspecialchars($heroKicker); ?></span>
        <h1 class="page-title"><?php echo htmlspecialchars($conditionName); ?></h1>
        <p class="page-subtitle">Treatment by Dr. A. Ajay Reddy &bull; Senior Consultant Neurosurgeon, Star Hospitals Hyderabad</p>
      </div>
    </section>

    <section class="section section-condition">
      <div class="container">
        <div class="condition-layout">
          <article class="prose">
            <?php echo $content; ?>

            <?php if ($bodyImage): ?>
              <figure class="prose-figure<?php echo $bodyImagePortrait ? ' prose-figure-portrait' : ''; ?>">
                <img src="<?php echo $rootPath . $bodyImage; ?>"
                     alt="<?php echo htmlspecialchars($bodyImageAlt); ?>"
                     <?php echo $bodyImagePortrait ? 'width="1132" height="2560"' : 'width="900" height="520"'; ?>
                     loading="lazy" decoding="async">
              </figure>
            <?php endif; ?>

            <?php if (!empty($faqs)): ?>
              <h2 id="faqs">FAQs</h2>
              <div class="faq-section">
                <?php foreach ($faqs as $i => $faq): ?>
                  <div class="faq-item">
                    <button class="faq-question" type="button" aria-expanded="false">
                      <?php echo $faq['q']; ?>
                      <span aria-hidden="true">+</span>
                    </button>
                    <div class="faq-answer">
                      <?php
                        // Answer may be one or more paragraphs
                        foreach (preg_split('/\n\s*\n/', trim($faq['a'])) as $para) {
                            echo '<p>' . trim($para) . '</p>';
                        }
                      ?>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </article>

          <aside class="condition-aside">
            <div class="aside-card">
              <h2 class="aside-title">Speak to Dr. Ajay Reddy</h2>
              <p class="aside-text">22+ years of experience and over 3,000 cranial and spinal procedures performed.</p>
              <a href="tel:+919515502113" class="btn-primary aside-btn">Call +91 95155 02113</a>
              <a href="https://api.whatsapp.com/send?phone=919346867764&amp;text=Im%20interested%20in%20your%20services" class="btn-secondary aside-btn" target="_blank" rel="noopener">WhatsApp Us</a>
              <a href="<?php echo $rootPath; ?>second-opinion.php" class="aside-link">Get a second opinion &rarr;</a>
            </div>

            <?php if (!empty($relatedLinks)): ?>
            <div class="aside-card">
              <h2 class="aside-title">Related</h2>
              <ul class="aside-list">
                <?php foreach ($relatedLinks as $link): ?>
                  <li><a href="<?php echo $link['url']; ?>"><?php echo htmlspecialchars($link['label']); ?></a></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php endif; ?>
          </aside>
        </div>

        <div class="cta-panel">
          <div>
            <h2 class="cta-panel-title">Have questions about <?php echo htmlspecialchars(strtolower($conditionName)); ?>?</h2>
            <p class="cta-panel-text">Share your scans and reports for a considered surgical opinion.</p>
          </div>
          <div class="cta-panel-actions">
            <a href="<?php echo $rootPath; ?>contact-us.php" class="btn-primary">Book a Consultation</a>
            <a href="<?php echo $rootPath; ?>surgery-for/index.php" class="btn-secondary">All Conditions</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/footer.php'; ?>
  <script src="<?php echo $rootPath; ?>js/main.js"></script>
</body>
</html>
