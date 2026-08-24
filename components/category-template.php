<?php
/**
 * Category / Landing Page Template
 *
 * Set before including:
 *   $pageTitle, $pageDescription, $categoryName, $categorySubtitle
 * Optional:
 *   $breadcrumbTrail  array of ['label' => ..., 'url' => ...] (last item omits url)
 *   $intro            HTML string rendered above the card grid (medical prose)
 *   $cards            array of ['label' => ..., 'url' => ..., 'desc' => ...]
 *   $heroKicker       small label above the H1
 */
require_once __DIR__ . '/init.php';

if (!isset($pageTitle))        $pageTitle = "Surgery For | Brain to Spine";
if (!isset($pageDescription))  $pageDescription = "Neurosurgery and spine surgery by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
if (!isset($categoryName))     $categoryName = "Surgery For";
if (!isset($categorySubtitle)) $categorySubtitle = "";
if (!isset($intro))            $intro = "";
if (!isset($cards))            $cards = array();
if (!isset($heroKicker))       $heroKicker = "Surgery For";
if (!isset($heroImage))        $heroImage = "";      // root-relative, e.g. images/hero-tumors.jpg
if (!isset($heroImageAlt))     $heroImageAlt = $categoryName;

// Cards render with a thumbnail only when at least one supplies an image
$cardsHaveImages = false;
foreach ($cards as $c) { if (!empty($c['img'])) { $cardsHaveImages = true; break; } }

if (!isset($breadcrumbTrail) || !is_array($breadcrumbTrail)) {
    $breadcrumbTrail = array(
        array('label' => 'Home', 'url' => $rootPath . 'index.php'),
        array('label' => $categoryName),
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
</head>
<body>
  <?php include __DIR__ . '/header.php'; ?>

  <main id="content">
    <section class="page-hero<?php echo $heroImage ? ' page-hero-media' : ''; ?>">
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
        <h1 class="page-title"><?php echo htmlspecialchars($categoryName); ?></h1>
        <?php if ($categorySubtitle !== ''): ?>
          <p class="page-subtitle"><?php echo htmlspecialchars($categorySubtitle); ?></p>
        <?php endif; ?>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <?php if ($intro !== ''): ?>
          <article class="prose prose-wide"><?php echo $intro; ?></article>
        <?php endif; ?>

        <?php if (!empty($cards)): ?>
          <h2 class="grid-heading">Conditions &amp; Procedures</h2>
          <div class="condition-grid<?php echo $cardsHaveImages ? ' condition-grid-media' : ''; ?>">
            <?php foreach ($cards as $card): ?>
              <a href="<?php echo $card['url']; ?>" class="condition-card<?php echo !empty($card['img']) ? ' condition-card-media' : ''; ?>">
                <?php if (!empty($card['img'])): ?>
                  <span class="condition-card-thumb">
                    <img src="<?php echo $rootPath . $card['img']; ?>" alt="<?php echo htmlspecialchars($card['label']); ?>" width="400" height="260" loading="lazy" decoding="async">
                  </span>
                <?php endif; ?>
                <span class="condition-card-body">
                  <h3><?php echo htmlspecialchars($card['label']); ?></h3>
                  <?php if (!empty($card['desc'])): ?>
                    <p><?php echo htmlspecialchars($card['desc']); ?></p>
                  <?php endif; ?>
                  <span class="condition-card-arrow" aria-hidden="true">&rarr;</span>
                </span>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <div class="cta-panel">
          <div>
            <h2 class="cta-panel-title">Not sure which treatment you need?</h2>
            <p class="cta-panel-text">Dr. Ajay Reddy will review your scans and reports and advise on the appropriate course.</p>
          </div>
          <div class="cta-panel-actions">
            <a href="<?php echo $rootPath; ?>contact-us.php" class="btn-primary">Book a Consultation</a>
            <a href="<?php echo $rootPath; ?>second-opinion.php" class="btn-secondary">Second Opinion</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/footer.php'; ?>
  <script src="<?php echo $rootPath; ?>js/main.js"></script>
</body>
</html>
