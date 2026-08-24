<?php
$pageTitle = "Dystonia Treatment in Hyderabad | Brain to Spine";
$pageDescription = "Dystonia treatment by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Dystonia";
$heroKicker = "Functional Neurology";
$heroImage = 'images/hero-functional-neurology.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',                  'url' => '../../index.php'),
  array('label' => 'Surgery For',           'url' => '../index.php'),
  array('label' => 'Functional Neurology',  'url' => 'index.php'),
  array('label' => 'Dystonia'),
);
$relatedLinks = array(
  array('label' => 'Tremor',                      'url' => 'tremor.php'),
  array('label' => "Parkinson's Disease",         'url' => 'parkinsons-disease.php'),
  array('label' => 'Epilepsy',                    'url' => 'epilepsy.php'),
  array('label' => 'Headache',                    'url' => 'headache.php'),
  array('label' => 'Tourette Syndrome',           'url' => 'tourettes-syndrome.php'),
  array('label' => 'Complex Regional Pain Syndrome (CRPS)', 'url' => 'crps.php'),
  array('label' => 'All Functional Neurology',    'url' => 'index.php'),
);
$content = '
<p>Dystonia is a neurological movement disease marked by involuntary muscular contractions, and it is extremely complicated and varied.</p>

<h2>Causes</h2>
<p>Most people who experience dystonia don&rsquo;t know what causes their symptoms. One or more of the basal ganglia dysfunctions may be at the root of dystonia. That part of the brain is in charge of starting the muscle to contract. Issues with nerve cell communication are at the heart of the problem.</p>

<h2>Symptoms</h2>
<p>The severity of dystonia symptoms might vary widely. Different regions of the body may be affected by dystonia, and the condition&rsquo;s symptoms frequently develop in waves. Some of the first signs might be:</p>
<ul>
  <li>Dragging leg</li>
  <li>Rapid, involuntary blinking</li>
  <li>Speech problems</li>
  <li>Involuntary neck pulling</li>
</ul>

<h2>Diagnosis</h2>
<p>A neurologist specialising in movement disorders can diagnose dystonia based on the patient&rsquo;s clinical presentation. Blood testing, radiology, and even urine tests may be used to rule out structural reasons. Genetic testing may be performed in some situations, including those with generalised dystonia.</p>

<h2>Treatment</h2>
<p>Because dystonia has no known medical cure, therapy focuses on managing its symptoms. Dystonia can be treated in three ways: with botulinum toxin (botox) injections, various medications, and surgery. These can be utilised singly or in tandem. Botox and other medications that interfere with nerve-muscle transmission may help reduce aberrant motion and posture.</p>
';
include __DIR__ . '/../../components/condition-template.php';
