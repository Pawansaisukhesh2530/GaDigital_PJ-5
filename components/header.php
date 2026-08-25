<?php
/**
 * Global Header Component
 * BrainToSpine - Dr. A. Ajay Reddy
 */
require_once __DIR__ . '/init.php';
$u = function ($p) use ($rootPath) { return $rootPath . $p; };
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
            <span aria-hidden="true">&#9662;</span>
          </button>

          <div class="mega-menu" id="megaMenu">
            <div class="mega-menu-grid">
              <div class="mega-col">
                <a class="mega-heading" href="<?php echo $u('surgery-for/spinal-conditions/index.php'); ?>">Spinal Conditions</a>
                <a href="<?php echo $u('surgery-for/spinal-conditions/back-pain.php'); ?>" class="mega-link">Back Pain</a>
                <a href="<?php echo $u('surgery-for/spinal-conditions/back-pain/spinal-fusion.php'); ?>" class="mega-link mega-link-sub">Spinal Fusion</a>
                <a href="<?php echo $u('surgery-for/spinal-conditions/back-pain/laminectomy.php'); ?>" class="mega-link mega-link-sub">Laminectomy</a>
                <a href="<?php echo $u('surgery-for/spinal-conditions/back-pain/discectomy.php'); ?>" class="mega-link mega-link-sub">Discectomy</a>
                <a href="<?php echo $u('sciatica.php'); ?>" class="mega-link">Sciatica</a>
              </div>

              <div class="mega-col">
                <a class="mega-heading" href="<?php echo $u('surgery-for/neck-pain.php'); ?>">Neck Pain</a>
                <a href="<?php echo $u('surgery-for/neck-pain/cervical-laminectomy.php'); ?>" class="mega-link">Cervical Laminectomy</a>
                <a href="<?php echo $u('surgery-for/neck-pain/laminoplasty.php'); ?>" class="mega-link">Laminoplasty</a>
                <a href="<?php echo $u('surgery-for/neck-pain/acdf.php'); ?>" class="mega-link">ACDF</a>
              </div>

              <div class="mega-col">
                <a class="mega-heading" href="<?php echo $u('surgery-for/tumors/index.php'); ?>">Tumors</a>
                <a href="<?php echo $u('surgery-for/tumors/brain-tumors/index.php'); ?>" class="mega-link">Brain Tumors</a>
                <a href="<?php echo $u('surgery-for/tumors/brain-tumors/gliomas.php'); ?>" class="mega-link mega-link-sub">Gliomas</a>
                <a href="<?php echo $u('surgery-for/tumors/brain-tumors/meningioma.php'); ?>" class="mega-link mega-link-sub">Meningioma</a>
                <a href="<?php echo $u('surgery-for/tumors/brain-tumors/ependymoma.php'); ?>" class="mega-link mega-link-sub">Ependymoma</a>
                <a href="<?php echo $u('surgery-for/tumors/brain-tumors/craniopharyngiomas.php'); ?>" class="mega-link mega-link-sub">Craniopharyngiomas</a>
                <a href="<?php echo $u('surgery-for/tumors/brain-tumors/acoustic-schwannoma.php'); ?>" class="mega-link mega-link-sub">Acoustic Schwannoma</a>
                <a href="<?php echo $u('surgery-for/tumors/spine-tumors.php'); ?>" class="mega-link">Spine Tumors</a>
                <a href="<?php echo $u('surgery-for/tumors/skull-base-tumors/index.php'); ?>" class="mega-link">Skull Base Tumors</a>
                <a href="<?php echo $u('surgery-for/tumors/skull-base-tumors/pituitary-tumors.php'); ?>" class="mega-link mega-link-sub">Pituitary Tumors</a>
                <a href="<?php echo $u('surgery-for/tumors/skull-base-tumors/chordomas.php'); ?>" class="mega-link mega-link-sub">Chordomas</a>
              </div>

              <div class="mega-col">
                <a class="mega-heading" href="<?php echo $u('surgery-for/head-injuries/index.php'); ?>">Head Injuries</a>
                <a href="<?php echo $u('surgery-for/head-injuries/trauma.php'); ?>" class="mega-link">Trauma</a>

                <a class="mega-heading mega-heading-spaced" href="<?php echo $u('surgery-for/others/index.php'); ?>">Others</a>
                <a href="<?php echo $u('surgery-for/others/hemifacial-spasms.php'); ?>" class="mega-link">Hemifacial Spasms</a>
                <a href="<?php echo $u('surgery-for/others/craniostenosis.php'); ?>" class="mega-link">Craniostenosis</a>
                <a href="<?php echo $u('surgery-for/others/csf-fistulas.php'); ?>" class="mega-link">CSF Fistulas</a>
                <a href="<?php echo $u('surgery-for/others/carpal-tunnel-syndrome.php'); ?>" class="mega-link">Carpal Tunnel Syndrome</a>
              </div>

              <div class="mega-col">
                <a class="mega-heading" href="<?php echo $u('surgery-for/cerebrovascular-conditions/index.php'); ?>">Cerebrovascular Conditions</a>
                <a href="<?php echo $u('surgery-for/cerebrovascular-conditions/ischemic-stroke.php'); ?>" class="mega-link">Ischemic Stroke</a>
                <a href="<?php echo $u('surgery-for/cerebrovascular-conditions/hemorrhagic-stroke.php'); ?>" class="mega-link">Hemorrhagic Stroke</a>
                <a href="<?php echo $u('surgery-for/cerebrovascular-conditions/cerebral-aneurysms.php'); ?>" class="mega-link">Cerebral Aneurysms</a>
                <a href="<?php echo $u('surgery-for/cerebrovascular-conditions/cavernous-malformations.php'); ?>" class="mega-link">Cavernous Malformations</a>
                <a href="<?php echo $u('surgery-for/cerebrovascular-conditions/carotid-dissection.php'); ?>" class="mega-link">Carotid Dissection</a>
                <a href="<?php echo $u('surgery-for/cerebrovascular-conditions/trigeminal-neuralgia.php'); ?>" class="mega-link">Trigeminal Neuralgia</a>
              </div>

              <div class="mega-col">
                <a class="mega-heading" href="<?php echo $u('surgery-for/functional-neurology/index.php'); ?>">Functional Neurology</a>
                <a href="<?php echo $u('surgery-for/functional-neurology/headache.php'); ?>" class="mega-link">Headache</a>
                <a href="<?php echo $u('surgery-for/functional-neurology/parkinsons-disease.php'); ?>" class="mega-link">Parkinson's Disease</a>
                <a href="<?php echo $u('surgery-for/functional-neurology/dystonia.php'); ?>" class="mega-link">Dystonia</a>
                <a href="<?php echo $u('surgery-for/functional-neurology/tremor.php'); ?>" class="mega-link">Tremor</a>
                <a href="<?php echo $u('surgery-for/functional-neurology/tourettes-syndrome.php'); ?>" class="mega-link">Tourette's Syndrome</a>
                <a href="<?php echo $u('surgery-for/functional-neurology/epilepsy.php'); ?>" class="mega-link">Epilepsy</a>
                <a href="<?php echo $u('surgery-for/functional-neurology/crps.php'); ?>" class="mega-link">Complex Regional Pain Syndrome</a>
              </div>
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
