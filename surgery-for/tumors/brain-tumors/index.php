<?php
$pageTitle = "Brain Tumors | Brain to Spine";
$pageDescription = "Brain tumor treatment by Dr. A. Ajay Reddy - Best Neurosurgeon in Hyderabad";
$categoryName = "Brain Tumors";
$categorySubtitle = "Comprehensive surgical treatment for brain tumors.";
$heroKicker = "Tumors";
$heroImage = 'images/hero-tumors.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',        'url' => '../../../index.php'),
  array('label' => 'Surgery For', 'url' => '../../index.php'),
  array('label' => 'Tumors',      'url' => '../index.php'),
  array('label' => 'Brain Tumors'),
);
$intro = '
<p>A growth or mass of abnormal cells in the brain is referred to as a brain tumour. Brain tumours can be either benign or malignant. Depending on which tissues are damaged, there are more than 120 different forms of brain tumours.</p>
<p>It could have originated in the brain (referred to as Primary) or it could have spread to the brain from another region of the body (referred to as Secondary).</p>

<h2>Symptoms</h2>
<ul>
  <li>Headaches</li>
  <li>Changes in personality (such as becoming depressed, worried, or unrestrained)</li>
  <li>Weakness</li>
  <li>Odd sensations</li>
  <li>Loss of balance</li>
  <li>Difficulty concentrating</li>
  <li>Seizures</li>
  <li>Incoordination</li>
</ul>

<h2>Risk Factors</h2>
<ul>
  <li>Exposure to radiation</li>
  <li>Family history</li>
  <li>Weakened immune system</li>
</ul>

<h2>Diagnosis</h2>
<p>Imaging studies are able to detect brain tumours, but a biopsy of the mass is typically required for a definitive diagnosis.</p>

<h2>Treatment</h2>
<p>Surgery, radiation therapy, chemotherapy, or any combination of the three may be necessary for treatment.</p>
';
$cards = array(
  array('label' => 'Gliomas',             'url' => 'gliomas.php',             'desc' => 'Tumours that originate in the glial cells of the brain',        'img' => 'images/card-gliomas.jpg'),
  array('label' => 'Meningioma',          'url' => 'meningioma.php',          'desc' => 'Tumours of the meninges surrounding the brain and spinal cord', 'img' => 'images/card-meningioma.jpg'),
  array('label' => 'Ependymoma',          'url' => 'ependymoma.php',          'desc' => 'Rare tumour affecting the brain and the spinal cord',           'img' => 'images/card-ependymoma.jpg'),
  array('label' => 'Craniopharyngiomas',  'url' => 'craniopharyngiomas.php',  'desc' => 'Benign tumours that form around the pituitary gland',           'img' => 'images/card-craniopharyngioma.jpg'),
  array('label' => 'Acoustic Schwannoma', 'url' => 'acoustic-schwannoma.php', 'desc' => 'Also called acoustic neuroma or vestibular schwannoma',         'img' => 'images/card-brain-tumor.jpg'),
);
include __DIR__ . '/../../../components/category-template.php';
