<?php
$pageTitle = "Ependymoma Treatment in Hyderabad | Brain to Spine";
$pageDescription = "Ependymoma treatment by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Ependymoma";
$heroKicker = "Brain Tumors";
$heroImage = 'images/hero-tumors.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',         'url' => '../../../index.php'),
  array('label' => 'Surgery For',  'url' => '../../index.php'),
  array('label' => 'Tumors',       'url' => '../index.php'),
  array('label' => 'Brain Tumors', 'url' => 'index.php'),
  array('label' => 'Ependymoma'),
);
$relatedLinks = array(
  array('label' => 'Gliomas',             'url' => 'gliomas.php'),
  array('label' => 'Meningioma',          'url' => 'meningioma.php'),
  array('label' => 'Craniopharyngiomas',  'url' => 'craniopharyngiomas.php'),
  array('label' => 'Acoustic Schwannoma', 'url' => 'acoustic-schwannoma.php'),
  array('label' => 'All Brain Tumors',    'url' => 'index.php'),
);
$content = '
<p>Ependymoma tumour is an extremely rare form of tumour that can affect both the brain and the spinal cord.</p>
<p>Ependymomas can develop in people of any age, however they are significantly more common in children. It is not known what actually causes these tumours to form.</p>

<h2>Symptoms</h2>
<p>Ependymoma symptoms include:</p>
<ul>
<li>Headaches and neck pain</li>
<li>Alterations in eyesight, such as haziness or loss of vision</li>
<li>Sudden eye movements</li>
<li>Vomiting and nausea</li>
<li>Inability to walk or maintain one&rsquo;s balance</li>
<li>Convulsions and seizures</li>
<li>Limbs tingling, numbness, or weakness</li>
</ul>

<h2>Diagnosis</h2>
<p>If your doctor suspects you of having an ependymoma, they may do the following tests:</p>
<ul>
<li>Physical and neurological exam</li>
<li>MRI</li>
<li>Spinal tap</li>
<li>Biopsy</li>
</ul>

<h2>Treatment</h2>
<p>Your doctor may recommend surgery, chemotherapy, or radiation treatment depending on the location of the tumour.</p>
';
include __DIR__ . '/../../../components/condition-template.php';
