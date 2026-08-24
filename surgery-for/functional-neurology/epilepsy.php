<?php
$pageTitle = "Epilepsy Treatment in Hyderabad | Brain to Spine";
$pageDescription = "Epilepsy treatment by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Epilepsy";
$heroKicker = "Functional Neurology";
$heroImage = 'images/hero-functional-neurology.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',                  'url' => '../../index.php'),
  array('label' => 'Surgery For',           'url' => '../index.php'),
  array('label' => 'Functional Neurology',  'url' => 'index.php'),
  array('label' => 'Epilepsy'),
);
$relatedLinks = array(
  array('label' => 'Headache',                    'url' => 'headache.php'),
  array('label' => "Parkinson's Disease",         'url' => 'parkinsons-disease.php'),
  array('label' => 'Dystonia',                    'url' => 'dystonia.php'),
  array('label' => 'Tremor',                      'url' => 'tremor.php'),
  array('label' => 'Tourette Syndrome',           'url' => 'tourettes-syndrome.php'),
  array('label' => 'Complex Regional Pain Syndrome (CRPS)', 'url' => 'crps.php'),
  array('label' => 'All Functional Neurology',    'url' => 'index.php'),
);
$content = '
<p>Recurring, inexplicable seizures characterise the neurological disorder known as epilepsy. An electrical surge in the brain that is not typical causes a seizure. When a person experiences two or more seizures without any apparent trigger, a medical professional may suspect epilepsy.</p>

<h2>Causes</h2>
<p>Seizures or epilepsy can be brought on by any condition that results in brain damage.</p>
<ul>
  <li>Trauma or injury to the head</li>
  <li>Brain haemorrhage/stroke (bleed)</li>
  <li>A condition characterised by infection or inflammation of the brain, such as meningitis, encephalitis, or a brain abscess</li>
  <li>Abnormalities in the brain (like tumours), disorders of the brain (like Alzheimer&rsquo;s)</li>
  <li>Habitual drug or alcohol abuse</li>
  <li>Biochemical discords such swings in blood sugar levels</li>
</ul>

<h2>Symptoms</h2>
<ul>
  <li>A lapse in consciousness that lasts for a short while.</li>
  <li>Weakness in the muscles, jerking motions, and loss of muscle tone</li>
  <li>Blank stare</li>
  <li>Confusion, mental slowdown, speech and comprehension difficulties are all temporary.</li>
  <li>A loss of sensation or a shift in how your senses work.</li>
  <li>Challenges in conveying ideas or receiving them.</li>
  <li>Feeling queasy, hot or cold waves, and tingly chills.</li>
  <li>Actions using the lips, the teeth, the hands, and the fingers.</li>
  <li>Psychic feelings include dread, anxiety, or a sense of d&eacute;j&agrave; vu.</li>
  <li>An increased rate of heartbeat and/or respiration.</li>
</ul>

<h2>Diagnosis</h2>
<ul>
  <li>EEG</li>
  <li>MRI</li>
  <li>CT</li>
</ul>

<h2>Treatment</h2>
<p>Epilepsy treatment options include antiepileptic drugs (AEDs), dietary modification, and surgical intervention.</p>
';
include __DIR__ . '/../../components/condition-template.php';
