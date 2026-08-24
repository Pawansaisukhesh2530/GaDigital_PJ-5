<?php
$pageTitle = "Cavernous Malformations Treatment in Hyderabad | Brain to Spine";
$pageDescription = "Cavernous Malformations treatment by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Cavernous Malformations";
$heroKicker = "Cerebrovascular Conditions";
$heroImage = 'images/hero-cerebrovascular.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',                        'url' => '../../index.php'),
  array('label' => 'Surgery For',                 'url' => '../index.php'),
  array('label' => 'Cerebrovascular Conditions',  'url' => 'index.php'),
  array('label' => 'Cavernous Malformations'),
);
$relatedLinks = array(
  array('label' => 'Ischemic Stroke',      'url' => 'ischemic-stroke.php'),
  array('label' => 'Hemorrhagic Stroke',   'url' => 'hemorrhagic-stroke.php'),
  array('label' => 'Cerebral Aneurysms',   'url' => 'cerebral-aneurysms.php'),
  array('label' => 'Carotid Dissection',   'url' => 'carotid-dissection.php'),
  array('label' => 'Trigeminal Neuralgia', 'url' => 'trigeminal-neuralgia.php'),
  array('label' => 'All Cerebrovascular Conditions', 'url' => 'index.php'),
);
$content = '
<p>An expanded and abnormal collection of tiny blood arteries (capillaries) in the brain is called a cerebral cavernous malformation (CCM). The capillary walls in CCM are abnormally thin, less elastic, and more prone to leakage. The development of a cavernous malformation is a rare but potentially devastating condition. Symptoms manifest when they invade the central nervous system (CNS).</p>

<h2>Causes</h2>
<p>Cavernous malformations have an unknown origin; however, genetic studies suggest that abnormalities in specific genes may be the reason in some patients. Malformations are often evident at birth but can appear at any time during the affected person&rsquo;s life.</p>

<h2>Symptoms</h2>
<p>Several symptoms may be present depending on the size and location of the cavernous malformation. In addition, symptoms may appear at any age, although the majority of those experiencing them are between the ages of 20 and 50.</p>
<ul>
  <li>Seizures</li>
  <li>Chronic, debilitating headaches</li>
  <li>Weakness in the limbs</li>
  <li>Numbness</li>
  <li>Problems with speech, memory, and focus</li>
  <li>Disturbances in equilibrium and mobility</li>
  <li>Changes in sight, like double vision</li>
</ul>

<h2>Diagnosis</h2>
<ul>
  <li>CT</li>
  <li>MRI</li>
  <li>EEG</li>
  <li>Blood tests</li>
</ul>

<h2>Treatment</h2>
<ul>
  <li>Symptomatic treatment medication, such as antiepileptic drugs for seizures</li>
  <li>Surgical intervention to remove blood vessels</li>
  <li>MRI on a frequent basis to monitor a lesion</li>
</ul>
';
include __DIR__ . '/../../components/condition-template.php';
