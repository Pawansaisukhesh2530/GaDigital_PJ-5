<?php
$pageTitle = "Back Pain Surgery in Hyderabad | Brain to Spine";
$pageDescription = "Back Pain surgical treatment options - spinal fusion, laminectomy and discectomy - by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Back Pain";
$schemaType = "MedicalCondition";
$heroKicker = "Spinal Conditions";
$heroImage = 'images/hero-spinal-conditions.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home', 'url' => '../../index.php'),
  array('label' => 'Surgery For', 'url' => '../index.php'),
  array('label' => 'Spinal Conditions', 'url' => 'index.php'),
  array('label' => 'Back Pain'),
);
$relatedLinks = array(
  array('label' => 'Spinal Fusion', 'url' => 'back-pain/spinal-fusion.php'),
  array('label' => 'Laminectomy', 'url' => 'back-pain/laminectomy.php'),
  array('label' => 'Discectomy', 'url' => 'back-pain/discectomy.php'),
  array('label' => 'Neck Pain', 'url' => '../neck-pain.php'),
);
$content = '<p>Surgical procedures performed by Dr. A. Ajay Reddy for back pain. Select a procedure below to read the pre-operative preparation and post-operative precautions for it.</p>

<div class="condition-grid">
  <a href="back-pain/spinal-fusion.php" class="condition-card">
    <h3>Spinal Fusion</h3>
    <p>Surgical procedure to join two or more vertebrae</p>
  </a>
  <a href="back-pain/laminectomy.php" class="condition-card">
    <h3>Laminectomy</h3>
    <p>Surgical removal of part of the vertebral bone</p>
  </a>
  <a href="back-pain/discectomy.php" class="condition-card">
    <h3>Discectomy</h3>
    <p>Surgical removal of herniated disc material</p>
  </a>
</div>

<h2>Talk to Dr. Ajay Reddy</h2>
<p>Dr. A. Ajay Reddy is a Senior Consultant in Neurosurgery at Star Hospitals, Hyderabad, with 22+ years of experience and over 3,000 cranial and spinal procedures performed. He holds MBBS and MCh Neuro Surgery qualifications, trained in minimally invasive spine surgery at Yonsei, Seoul, South Korea, and completed a fellowship at the Saitama Gamma Knife Center and Tokyo Women&rsquo;s Medical University, Japan.</p>';
include __DIR__ . '/../../components/condition-template.php';
