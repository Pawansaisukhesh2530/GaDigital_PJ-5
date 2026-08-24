<?php
$pageTitle = "Neck Pain Surgery in Hyderabad | Brain to Spine";
$pageDescription = "Neck Pain surgical treatment options - cervical laminectomy, laminoplasty and ACDF - by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Neck Pain";
$schemaType = "MedicalCondition";
$heroKicker = "Surgery For";
$heroImage = 'images/hero-neck-pain.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home', 'url' => '../index.php'),
  array('label' => 'Surgery For', 'url' => 'index.php'),
  array('label' => 'Neck Pain'),
);
$relatedLinks = array(
  array('label' => 'Cervical Laminectomy', 'url' => 'neck-pain/cervical-laminectomy.php'),
  array('label' => 'Laminoplasty', 'url' => 'neck-pain/laminoplasty.php'),
  array('label' => 'Anterior Cervical Discectomy and Fusion (ACDF)', 'url' => 'neck-pain/acdf.php'),
  array('label' => 'Back Pain', 'url' => 'spinal-conditions/back-pain.php'),
);
$content = '<p>Surgical procedures performed by Dr. A. Ajay Reddy for neck pain. Select a procedure below to read the pre-operative preparation and post-operative precautions for it.</p>

<div class="condition-grid">
  <a href="neck-pain/cervical-laminectomy.php" class="condition-card">
    <h3>Cervical Laminectomy</h3>
    <p>Decompression of the cervical spinal canal from the back of the neck</p>
  </a>
  <a href="neck-pain/laminoplasty.php" class="condition-card">
    <h3>Laminoplasty</h3>
    <p>Posterior cervical procedure that reshapes the lamina to widen the spinal canal</p>
  </a>
  <a href="neck-pain/acdf.php" class="condition-card">
    <h3>Anterior Cervical Discectomy and Fusion (ACDF)</h3>
    <p>Disc removal and fusion performed through the front of the neck</p>
  </a>
</div>

<h2>Talk to Dr. Ajay Reddy</h2>
<p>Dr. A. Ajay Reddy is a Senior Consultant in Neurosurgery at Star Hospitals, Hyderabad, with 22+ years of experience and over 3,000 cranial and spinal procedures performed. He holds MBBS and MCh Neuro Surgery qualifications, trained in minimally invasive spine surgery at Yonsei, Seoul, South Korea, and completed a fellowship at the Saitama Gamma Knife Center and Tokyo Women&rsquo;s Medical University, Japan.</p>';
include __DIR__ . '/../components/condition-template.php';
