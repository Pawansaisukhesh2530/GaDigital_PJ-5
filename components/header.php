<?php
/**
 * Global Header Component
 * BrainToSpine - Dr. A. Ajay Reddy
 *
 * The "Surgery For" mega menu is authored once and rendered two ways:
 *  - desktop: a wide panel of column-flowed groups
 *  - mobile:  a nested accordion where each group collapses, so the rest of
 *             the nav stays reachable instead of being buried under 44 links
 */
require_once __DIR__ . '/init.php';
$u = function ($p) use ($rootPath) { return $rootPath . $p; };

/**
 * Mega menu groups. 'sub' => true renders the indented child style.
 */
$megaGroups = [
    [
        'title' => 'Spinal Conditions',
        'href'  => 'surgery-for/spinal-conditions/index.php',
        'links' => [
            ['Back Pain',     'surgery-for/spinal-conditions/back-pain.php',                false],
            ['Spinal Fusion', 'surgery-for/spinal-conditions/back-pain/spinal-fusion.php',  true],
            ['Laminectomy',   'surgery-for/spinal-conditions/back-pain/laminectomy.php',    true],
            ['Discectomy',    'surgery-for/spinal-conditions/back-pain/discectomy.php',     true],
            ['Sciatica',      'sciatica.php',                                               false],
        ],
    ],
    [
        'title' => 'Neck Pain',
        'href'  => 'surgery-for/neck-pain.php',
        'links' => [
            ['Cervical Laminectomy', 'surgery-for/neck-pain/cervical-laminectomy.php', false],
            ['Laminoplasty',         'surgery-for/neck-pain/laminoplasty.php',         false],
            ['ACDF',                 'surgery-for/neck-pain/acdf.php',                 false],
        ],
    ],
    [
        'title' => 'Tumors',
        'href'  => 'surgery-for/tumors/index.php',
        'links' => [
            ['Brain Tumors',       'surgery-for/tumors/brain-tumors/index.php',                    false],
            ['Gliomas',            'surgery-for/tumors/brain-tumors/gliomas.php',                  true],
            ['Meningioma',         'surgery-for/tumors/brain-tumors/meningioma.php',               true],
            ['Ependymoma',         'surgery-for/tumors/brain-tumors/ependymoma.php',               true],
            ['Craniopharyngiomas', 'surgery-for/tumors/brain-tumors/craniopharyngiomas.php',       true],
            ['Acoustic Schwannoma','surgery-for/tumors/brain-tumors/acoustic-schwannoma.php',      true],
            ['Spine Tumors',       'surgery-for/tumors/spine-tumors.php',                          false],
            ['Skull Base Tumors',  'surgery-for/tumors/skull-base-tumors/index.php',               false],
            ['Pituitary Tumors',   'surgery-for/tumors/skull-base-tumors/pituitary-tumors.php',    true],
            ['Chordomas',          'surgery-for/tumors/skull-base-tumors/chordomas.php',           true],
        ],
    ],
    [
        'title' => 'Head Injuries',
        'href'  => 'surgery-for/head-injuries/index.php',
        'links' => [
            ['Trauma', 'surgery-for/head-injuries/trauma.php', false],
        ],
    ],
    [
        'title' => 'Others',
        'href'  => 'surgery-for/others/index.php',
        'links' => [
            ['Hemifacial Spasms',      'surgery-for/others/hemifacial-spasms.php',      false],
            ['Craniostenosis',         'surgery-for/others/craniostenosis.php',         false],
            ['CSF Fistulas',           'surgery-for/others/csf-fistulas.php',           false],
            ['Carpal Tunnel Syndrome', 'surgery-for/others/carpal-tunnel-syndrome.php', false],
        ],
    ],
    [
        'title' => 'Cerebrovascular Conditions',
        'href'  => 'surgery-for/cerebrovascular-conditions/index.php',
        'links' => [
            ['Ischemic Stroke',          'surgery-for/cerebrovascular-conditions/ischemic-stroke.php',          false],
            ['Hemorrhagic Stroke',       'surgery-for/cerebrovascular-conditions/hemorrhagic-stroke.php',       false],
            ['Cerebral Aneurysms',       'surgery-for/cerebrovascular-conditions/cerebral-aneurysms.php',       false],
            ['Cavernous Malformations',  'surgery-for/cerebrovascular-conditions/cavernous-malformations.php',  false],
            ['Carotid Dissection',       'surgery-for/cerebrovascular-conditions/carotid-dissection.php',       false],
            ['Trigeminal Neuralgia',     'surgery-for/cerebrovascular-conditions/trigeminal-neuralgia.php',     false],
        ],
    ],
    [
        'title' => 'Functional Neurology',
        'href'  => 'surgery-for/functional-neurology/index.php',
        'links' => [
            ['Headache',                       'surgery-for/functional-neurology/headache.php',           false],
            ["Parkinson's Disease",            'surgery-for/functional-neurology/parkinsons-disease.php', false],
            ['Dystonia',                       'surgery-for/functional-neurology/dystonia.php',           false],
            ['Tremor',                         'surgery-for/functional-neurology/tremor.php',             false],
            ["Tourette's Syndrome",            'surgery-for/functional-neurology/tourettes-syndrome.php', false],
            ['Epilepsy',                       'surgery-for/functional-neurology/epilepsy.php',           false],
            ['Complex Regional Pain Syndrome', 'surgery-for/functional-neurology/crps.php',               false],
        ],
    ],
];
?>
<a href="#content" class="skip-link">Skip to content</a>
<header class="main-header" id="mainHeader">
  <div class="container header-wrapper">
    <a href="<?php echo $u('index.php'); ?>" class="logo-link" aria-label="Brain to Spine — home">
      <img src="<?php echo $u('images/logo.png'); ?>" alt="Brain to Spine" class="logo-img" width="120" height="80">
    </a>

    <nav class="main-nav" id="mainNav" aria-label="Main navigation">
      <ul class="nav-menu" id="navMenu">
        <li><a href="<?php echo $u('index.php'); ?>" class="nav-link">Home</a></li>
        <li><a href="<?php echo $u('about-doctor.php'); ?>" class="nav-link">About Us</a></li>

        <li class="nav-dropdown">
          <a href="<?php echo $u('surgery-for/index.php'); ?>" class="nav-link nav-link-parent" id="surgeryDropdown" aria-haspopup="true" aria-expanded="false">
            Surgery For <span class="nav-caret" aria-hidden="true">&#9662;</span>
          </a>
          <button class="mega-toggle" id="megaToggle" aria-expanded="false" aria-controls="megaMenu" aria-label="Toggle Surgery For submenu">
            <span class="mega-toggle-icon" aria-hidden="true"></span>
          </button>

          <div class="mega-menu" id="megaMenu">
            <div class="mega-menu-grid">
              <?php foreach ($megaGroups as $i => $group): $gid = 'megaGroup' . ($i + 1); ?>
                <div class="mega-col">
                  <div class="mega-group-head">
                    <a class="mega-heading" href="<?php echo $u($group['href']); ?>"><?php echo $group['title']; ?></a>
                    <button type="button" class="mega-group-toggle" aria-expanded="false" aria-controls="<?php echo $gid; ?>"
                            aria-label="Show <?php echo htmlspecialchars($group['title'], ENT_QUOTES); ?> links">
                      <span class="mega-group-chevron" aria-hidden="true"></span>
                    </button>
                  </div>
                  <div class="mega-group-links" id="<?php echo $gid; ?>">
                    <?php foreach ($group['links'] as $link): ?>
                      <a href="<?php echo $u($link[1]); ?>" class="mega-link<?php echo $link[2] ? ' mega-link-sub' : ''; ?>"><?php echo $link[0]; ?></a>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <a href="<?php echo $u('surgery-for/index.php'); ?>" class="mega-footer-link">View all conditions &amp; procedures &rarr;</a>
          </div>
        </li>

        <li><a href="<?php echo $u('patient-handouts/index.php'); ?>" class="nav-link">Patient Handouts</a></li>
        <li><a href="<?php echo $u('blog/index.php'); ?>" class="nav-link">Blog</a></li>
        <li><a href="<?php echo $u('media.php'); ?>" class="nav-link">Media</a></li>
        <li><a href="<?php echo $u('international-patients.php'); ?>" class="nav-link">International Patients</a></li>
        <li><a href="<?php echo $u('contact-us.php'); ?>" class="nav-link">Contact Us</a></li>
        <li class="nav-cta-mobile"><a href="<?php echo $u('second-opinion.php'); ?>" class="btn-primary">Get A Second Opinion</a></li>
      </ul>
    </nav>

    <a href="<?php echo $u('second-opinion.php'); ?>" class="btn-primary header-cta">Get A Second Opinion</a>

    <button class="mobile-toggle" id="mobileToggle" aria-label="Open menu" aria-expanded="false" aria-controls="navMenu">
      <span class="mobile-toggle-bar"></span>
      <span class="mobile-toggle-bar"></span>
      <span class="mobile-toggle-bar"></span>
    </button>
  </div>
</header>
<div class="nav-backdrop" id="navBackdrop" hidden></div>
