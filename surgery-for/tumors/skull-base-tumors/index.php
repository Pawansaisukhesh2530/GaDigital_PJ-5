<?php
$pageTitle = "Skull Base Tumors Treatment in Hyderabad | Brain to Spine";
$pageDescription = "Skull Base Tumors treatment by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Skull Base Tumors";
$heroKicker = "Tumors";
$heroImage = 'images/hero-tumors.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',        'url' => '../../../index.php'),
  array('label' => 'Surgery For', 'url' => '../../index.php'),
  array('label' => 'Tumors',      'url' => '../index.php'),
  array('label' => 'Skull Base Tumors'),
);
$relatedLinks = array(
  array('label' => 'Pituitary Tumors', 'url' => 'pituitary-tumors.php'),
  array('label' => 'Chordomas',        'url' => 'chordomas.php'),
  array('label' => 'Brain Tumors',     'url' => '../brain-tumors/index.php'),
  array('label' => 'Spine Tumors',     'url' => '../spine-tumors.php'),
  array('label' => 'All Tumors',       'url' => '../index.php'),
);
$content = '
<div class="condition-grid">
  <a href="pituitary-tumors.php" class="condition-card">
    <h3>Pituitary Tumors</h3>
    <p>The pituitary gland is a brain organ the size of a pea. Pituitary tumours are usually harmless.</p>
  </a>
  <a href="chordomas.php" class="condition-card">
    <h3>Chordomas</h3>
    <p>A chordoma is a malignant bone tumour that can arise anywhere on the spine or the skull, however it is extremely rare.</p>
  </a>
</div>
';
include __DIR__ . '/../../../components/condition-template.php';
