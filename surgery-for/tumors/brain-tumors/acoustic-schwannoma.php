<?php
$pageTitle = "Acoustic Schwannoma Treatment in Hyderabad | Brain to Spine";
$pageDescription = "Acoustic Schwannoma treatment by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Acoustic Schwannoma";
$heroKicker = "Brain Tumors";
$heroImage = 'images/hero-tumors.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',         'url' => '../../../index.php'),
  array('label' => 'Surgery For',  'url' => '../../index.php'),
  array('label' => 'Tumors',       'url' => '../index.php'),
  array('label' => 'Brain Tumors', 'url' => 'index.php'),
  array('label' => 'Acoustic Schwannoma'),
);
$relatedLinks = array(
  array('label' => 'Gliomas',            'url' => 'gliomas.php'),
  array('label' => 'Meningioma',         'url' => 'meningioma.php'),
  array('label' => 'Ependymoma',         'url' => 'ependymoma.php'),
  array('label' => 'Craniopharyngiomas', 'url' => 'craniopharyngiomas.php'),
  array('label' => 'All Brain Tumors',   'url' => 'index.php'),
);
$content = '
<p>Acoustic schwannoma &mdash; also called acoustic neuroma or vestibular schwannoma &mdash; is among the conditions Dr. A. Ajay Reddy treats; acoustic neuroma appears in his listed Procedures/Treatments Performed.</p>

<p>Dr. Reddy also holds a fellowship from Saitama Gamma Knife Center and Tokyo Women&rsquo;s Medical University, Japan.</p>

<p>Please book a consultation for an individualised assessment.</p>

<div class="condition-grid">
  <a href="gliomas.php" class="condition-card">
    <h3>Gliomas</h3>
    <p>Tumors arising from the glial cells of the brain.</p>
  </a>
  <a href="meningioma.php" class="condition-card">
    <h3>Meningioma</h3>
    <p>Tumors of the membranes covering the brain and spinal cord.</p>
  </a>
  <a href="ependymoma.php" class="condition-card">
    <h3>Ependymoma</h3>
    <p>Tumors arising from the ependymal lining.</p>
  </a>
  <a href="craniopharyngiomas.php" class="condition-card">
    <h3>Craniopharyngiomas</h3>
    <p>Tumors near the pituitary gland and optic pathways.</p>
  </a>
</div>
';
include __DIR__ . '/../../../components/condition-template.php';
