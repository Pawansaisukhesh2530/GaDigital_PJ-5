<?php
$pageTitle = "Headache Treatment in Hyderabad | Brain to Spine";
$pageDescription = "Headache treatment by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Headache";
$heroKicker = "Functional Neurology";
$heroImage = 'images/hero-functional-neurology.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',                  'url' => '../../index.php'),
  array('label' => 'Surgery For',           'url' => '../index.php'),
  array('label' => 'Functional Neurology',  'url' => 'index.php'),
  array('label' => 'Headache'),
);
$relatedLinks = array(
  array('label' => 'Epilepsy',                    'url' => 'epilepsy.php'),
  array('label' => "Parkinson's Disease",         'url' => 'parkinsons-disease.php'),
  array('label' => 'Dystonia',                    'url' => 'dystonia.php'),
  array('label' => 'Tremor',                      'url' => 'tremor.php'),
  array('label' => 'Tourette Syndrome',           'url' => 'tourettes-syndrome.php'),
  array('label' => 'Complex Regional Pain Syndrome (CRPS)', 'url' => 'crps.php'),
  array('label' => 'All Functional Neurology',    'url' => 'index.php'),
);
$content = '
<p>Most people will suffer from headaches several times during their lifetimes. Intense discomfort in the head or face is the primary sign of a headache. Most people don&rsquo;t know the complexity that might go into a headache. Different types often present themselves in distinctive ways, for various causes, and with correspondingly varied treatment requirements.</p>

<h2>Causes</h2>
<p>Pain from a headache originates from a complex chain of neural, vascular, and nervous system interactions. Certain nerves that control muscle and blood vessel function become active for reasons that are not fully understood during a headache. Pain signals are sent to the brain from these nerves.</p>

<h2>Symptoms</h2>
<p>If the following describes your headache, you should visit a doctor:</p>
<ul>
  <li>Powerful impact. If you&rsquo;re experiencing the &ldquo;Worst headache ever,&rdquo; you should go to the hospital immediately.</li>
  <li>Is accompanied by symptoms like numbness or visual loss</li>
  <li>Is more severe than typical headaches</li>
  <li>Comes on abruptly or worsens with activity</li>
  <li>Produces pain severe enough to wake you from sleep</li>
  <li>Doesn&rsquo;t improve with therapy and comes back often</li>
  <li>Head injury with loss of consciousness, even for a short period of time</li>
  <li>Seizures</li>
  <li>Convulsions</li>
  <li>Persistent vomiting</li>
  <li>Dizziness, poor balance</li>
  <li>Fever or stiffness in the neck</li>
  <li>Changes in speech, sight, and behaviour</li>
</ul>

<h2>Diagnosis</h2>
<ul>
  <li>CT</li>
  <li>MRI</li>
  <li>CT Angiography</li>
  <li>Lumbar Puncture</li>
</ul>

<h2>Treatment</h2>
<p>Preventive and pain relieving medications and lifestyle changes for stress management.</p>
<p>If the headache is a result of an underlying medical condition or injury, the treatment plan may include surgery.</p>
';
include __DIR__ . '/../../components/condition-template.php';
