<?php
$pageTitle = "Cerebrovascular Conditions | Brain to Spine";
$pageDescription = "Cerebrovascular Conditions treatment by Dr. A. Ajay Reddy - Best Neurosurgeon in Hyderabad";
$categoryName = "Cerebrovascular Conditions";
$categorySubtitle = "Surgical treatment for stroke, aneurysm, and vascular conditions of the brain.";
$heroKicker = "Surgery For";
$heroImage = 'images/hero-cerebrovascular.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',        'url' => '../../index.php'),
  array('label' => 'Surgery For', 'url' => '../index.php'),
  array('label' => 'Cerebrovascular Conditions'),
);
$intro = '
<p>Aneurysms, vertebral stenosis, and intracranial stenosis are all types of cerebrovascular conditions, as are stroke and carotid stenosis.</p>
<p>Vessel constriction (stenosis), thrombosis, obstruction, or rupture of a blood vessel can all cause a reduction in blood flow (haemorrhage). In addition, a lack of blood supply to the brain (ischemia) can lead to a stroke.</p>

<h2>Causes</h2>
<p>There are no recognized causes of cerebrovascular anomalies. However, the following conditions can lead to cerebral stenosis or aneurysms:</p>
<ul>
  <li>Diabetes</li>
  <li>Cholesterol levels are too high</li>
  <li>Diabetic hypertension</li>
  <li>Obesity and lack of exercise</li>
  <li>Smoking</li>
</ul>

<h2>Symptoms</h2>
<p>A transient ischemic attack (TIA) or stroke typically isn&rsquo;t the first sign of cerebrovascular stenosis. Trans ischemic attack or stroke symptoms may include the sudden onset of any or a combination of the following:</p>
<ul>
  <li>Dizziness</li>
  <li>Nausea/vomiting</li>
  <li>Severe headache</li>
  <li>Insomnia, disorientation, difficulties understanding, and lapses in memory</li>
  <li>Arm or leg numbness or weakness</li>
  <li>Weakness or drooping of one side of the face</li>
  <li>Speech that is slurred or distorted</li>
  <li>Vision loss or inability to see</li>
  <li>Inability to walk due to a lack of coordination or balance</li>
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
<p>Treatment options for cerebrovascular illness may include lifestyle modifications, medication, careful monitoring, and surgery, depending on the kind and severity of the condition.</p>
';
$cards = array(
  array('label' => 'Ischemic Stroke',         'url' => 'ischemic-stroke.php',         'desc' => 'Stroke caused by a blocked artery supplying the brain',        'img' => 'images/card-ischemic-stroke.jpg'),
  array('label' => 'Hemorrhagic Stroke',      'url' => 'hemorrhagic-stroke.php',      'desc' => 'Stroke caused by bleeding into or around the brain',           'img' => 'images/card-hemorrhagic-stroke.jpg'),
  array('label' => 'Cerebral Aneurysms',      'url' => 'cerebral-aneurysms.php',      'desc' => 'Weakening and ballooning of a blood vessel wall in the brain', 'img' => 'images/card-cerebral-aneurysms.jpg'),
  array('label' => 'Cavernous Malformations', 'url' => 'cavernous-malformations.php', 'desc' => 'Abnormal cluster of enlarged capillaries in the brain',        'img' => 'images/card-cavernous-malformations.jpg'),
  array('label' => 'Carotid Dissection',      'url' => 'carotid-dissection.php',      'desc' => 'Tear or separation of the layers of the carotid artery',       'img' => 'images/card-carotid-dissection.jpg'),
  array('label' => 'Trigeminal Neuralgia',    'url' => 'trigeminal-neuralgia.php',    'desc' => 'Sudden, severe facial pain from trigeminal nerve irritation',  'img' => 'images/card-trigeminal-neuralgia.jpg'),
);
include __DIR__ . '/../../components/category-template.php';
