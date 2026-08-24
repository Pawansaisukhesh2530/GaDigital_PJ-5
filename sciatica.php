<?php
$pageTitle = "Sciatica Treatment in Hyderabad | Brain to Spine";
$pageDescription = "Sciatica treatment by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Sciatica";
$heroKicker = "Spinal Conditions";
$heroImage = 'images/hero-common.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home', 'url' => 'index.php'),
  array('label' => 'Sciatica'),
);
$relatedLinks = array(
  array('label' => 'Back Pain',      'url' => 'surgery-for/spinal-conditions/back-pain.php'),
  array('label' => 'Neck Pain',      'url' => 'surgery-for/neck-pain.php'),
  array('label' => 'All Conditions', 'url' => 'surgery-for/index.php'),
);
$content = '
<p>Sciatica is assessed and treated as part of the spinal-conditions services offered by Dr. A. Ajay Reddy at Star Hospitals, Hyderabad. Please use the links below to read about the related conditions and procedures, or book a consultation for an individualised assessment.</p>

<div class="condition-grid">
  <a href="surgery-for/spinal-conditions/back-pain.php" class="condition-card">
    <h3>Back Pain</h3>
    <p>Assessment and treatment of low back pain.</p>
  </a>
  <a href="surgery-for/spinal-conditions/back-pain/discectomy.php" class="condition-card">
    <h3>Discectomy</h3>
    <p>Surgical removal of disc material pressing on a nerve.</p>
  </a>
  <a href="surgery-for/spinal-conditions/back-pain/laminectomy.php" class="condition-card">
    <h3>Laminectomy</h3>
    <p>Decompression of the spinal canal to relieve nerve pressure.</p>
  </a>
</div>
';
include __DIR__ . '/components/condition-template.php';
