<?php
$pageTitle = "Craniopharyngioma Treatment in Hyderabad | Brain to Spine";
$pageDescription = "Craniopharyngioma treatment by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Craniopharyngiomas";
$heroKicker = "Brain Tumors";
$heroImage = 'images/hero-tumors.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',         'url' => '../../../index.php'),
  array('label' => 'Surgery For',  'url' => '../../index.php'),
  array('label' => 'Tumors',       'url' => '../index.php'),
  array('label' => 'Brain Tumors', 'url' => 'index.php'),
  array('label' => 'Craniopharyngiomas'),
);
$relatedLinks = array(
  array('label' => 'Gliomas',             'url' => 'gliomas.php'),
  array('label' => 'Meningioma',          'url' => 'meningioma.php'),
  array('label' => 'Ependymoma',          'url' => 'ependymoma.php'),
  array('label' => 'Acoustic Schwannoma', 'url' => 'acoustic-schwannoma.php'),
  array('label' => 'Pituitary Tumors',    'url' => '../skull-base-tumors/pituitary-tumors.php'),
);
$content = '
<p>Craniopharyngiomas are tumours that form around the pituitary gland and are considered benign. Tumours and cysts are two different forms of these growths. Craniopharyngiomas are most typically observed in children between the ages of 5 and 14. It is possible, however, that these tumours can occur among adults over the age of 50.</p>

<h2>Symptoms</h2>
<ul>
<li>Balance issues</li>
<li>Confusion, irritability, or behavior changes</li>
<li>Headache</li>
<li>Increased urination and thirst</li>
<li>Nausea and vomiting</li>
<li>Slow growth in children</li>
<li>Vision issues</li>
</ul>

<h2>Diagnosis</h2>
<p>You may need an MRI or CT scan if your doctor detects a craniopharyngioma in the pituitary gland area. In order to distinguish between craniopharyngioma and other pituitary tumours, several tests are necessary.</p>

<h2>Treatment</h2>
<p>Your neurosurgeon will devise a treatment plan that is tailored to your specific needs. The surgical removal of a craniopharyngioma (or other brain tumour) through a surgery known as a craniotomy is a treatment option in this case.</p>
';
include __DIR__ . '/../../../components/condition-template.php';
