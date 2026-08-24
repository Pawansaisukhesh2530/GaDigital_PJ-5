<?php
$pageTitle = "Chordomas Treatment in Hyderabad | Brain to Spine";
$pageDescription = "Chordomas treatment by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Chordomas";
$heroKicker = "Skull Base Tumors";
$heroImage = 'images/hero-tumors.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',              'url' => '../../../index.php'),
  array('label' => 'Surgery For',       'url' => '../../index.php'),
  array('label' => 'Tumors',            'url' => '../index.php'),
  array('label' => 'Skull Base Tumors', 'url' => 'index.php'),
  array('label' => 'Chordomas'),
);
$relatedLinks = array(
  array('label' => 'Pituitary Tumors',      'url' => 'pituitary-tumors.php'),
  array('label' => 'All Skull Base Tumors', 'url' => 'index.php'),
  array('label' => 'Brain Tumors',          'url' => '../brain-tumors/index.php'),
  array('label' => 'Spine Tumors',          'url' => '../spine-tumors.php'),
  array('label' => 'All Tumors',            'url' => '../index.php'),
);
$content = '
<p>A chordoma is a malignant bone tumour that can arise anywhere on the spine or the skull, however it is extremely rare. These tumours are typically discovered in people between the ages of 40 and 70.</p>

<h2>Symptoms</h2>
<p>Symptoms can include:</p>
<ul>
  <li>Headaches</li>
  <li>Visual problems like double vision</li>
  <li>Muscle or nerve weakness in the back, arms, or legs</li>
  <li>Pain</li>
  <li>Nosebleeds</li>
  <li>Runny nose</li>
  <li>Bowel or bladder issues</li>
</ul>

<h2>Diagnosis</h2>
<p>Your doctor may order a CT scan, MRI, or biopsy to diagnose the Chordomas.</p>

<h2>Treatment</h2>
<p>Treatment may include surgery and radiation therapy.</p>
';
include __DIR__ . '/../../../components/condition-template.php';
