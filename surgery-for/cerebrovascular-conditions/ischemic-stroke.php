<?php
$pageTitle = "Ischemic Stroke Treatment in Hyderabad | Brain to Spine";
$pageDescription = "Ischemic Stroke treatment by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Ischemic Stroke";
$heroKicker = "Cerebrovascular Conditions";
$heroImage = 'images/hero-cerebrovascular.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',                        'url' => '../../index.php'),
  array('label' => 'Surgery For',                 'url' => '../index.php'),
  array('label' => 'Cerebrovascular Conditions',  'url' => 'index.php'),
  array('label' => 'Ischemic Stroke'),
);
$relatedLinks = array(
  array('label' => 'Hemorrhagic Stroke',      'url' => 'hemorrhagic-stroke.php'),
  array('label' => 'Cerebral Aneurysms',      'url' => 'cerebral-aneurysms.php'),
  array('label' => 'Cavernous Malformations', 'url' => 'cavernous-malformations.php'),
  array('label' => 'Carotid Dissection',      'url' => 'carotid-dissection.php'),
  array('label' => 'Trigeminal Neuralgia',    'url' => 'trigeminal-neuralgia.php'),
  array('label' => 'All Cerebrovascular Conditions', 'url' => 'index.php'),
);
$content = '
<p>Ischemic stroke is the most prevalent kind of stroke, accounting for the vast majority of cases. Two forms of ischemic stroke exist: thrombotic and embolic.</p>

<p>A thrombotic stroke happens when a blood clot, known as a thrombus, obstructs an artery supplying blood to the brain and halts blood flow. When a fragment of plaque or thrombus moves from its initial location and plugs an artery downstream, an embolic stroke ensues. The displaced substance is known as an embolus. How much of the brain is harmed or impacted depends on how far downstream the blockage occurs in the artery.</p>

<h2>Causes</h2>
<p>Many diseases can cause an ischemic stroke. They are as follows:</p>
<ul>
  <li>Atherosclerosis &ndash; a condition in which the arteries constrict and clots develop</li>
  <li>Cardiovascular illness, including coronary artery disease and heart attacks</li>
  <li>Tobacco</li>
  <li>Arterial calcification or plaque development</li>
  <li>Damage to the neck&rsquo;s blood vessels</li>
  <li>Blood clotting disorders</li>
</ul>

<h2>Symptoms</h2>
<ul>
  <li>Cognitive difficulties</li>
  <li>Visual issues</li>
  <li>Distorted speech</li>
  <li>Memory loss</li>
  <li>Blackouts</li>
  <li>The extremities trembling</li>
  <li>A feeling of numbness or tingling</li>
  <li>Drooping in the face</li>
</ul>

<h2>Diagnosis</h2>
<p>The doctor will analyze your symptoms, risk factors, family and medical histories and do a physical exam to diagnose cerebrovascular illness. In most situations, the doctor will also prescribe imaging tests to evaluate the brain&rsquo;s arteries and veins. This includes:</p>
<ul>
  <li>Angiogram</li>
  <li>Ultrasound</li>
  <li>CT</li>
  <li>MRI</li>
  <li>EEG</li>
</ul>

<h2>Treatment</h2>
<p>After a course of blood thinners and surgeries to remove blood clots, rehabilitation may be the next step in the treatment plan.</p>
';
include __DIR__ . '/../../components/condition-template.php';
