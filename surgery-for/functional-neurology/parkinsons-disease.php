<?php
$pageTitle = "Parkinson's Disease Treatment in Hyderabad | Brain to Spine";
$pageDescription = "Parkinson's Disease treatment by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Parkinson's Disease";
$heroKicker = "Functional Neurology";
$heroImage = 'images/hero-functional-neurology.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',                  'url' => '../../index.php'),
  array('label' => 'Surgery For',           'url' => '../index.php'),
  array('label' => 'Functional Neurology',  'url' => 'index.php'),
  array('label' => "Parkinson's Disease"),
);
$relatedLinks = array(
  array('label' => 'Tremor',                      'url' => 'tremor.php'),
  array('label' => 'Dystonia',                    'url' => 'dystonia.php'),
  array('label' => 'Epilepsy',                    'url' => 'epilepsy.php'),
  array('label' => 'Headache',                    'url' => 'headache.php'),
  array('label' => 'Tourette Syndrome',           'url' => 'tourettes-syndrome.php'),
  array('label' => 'Complex Regional Pain Syndrome (CRPS)', 'url' => 'crps.php'),
  array('label' => 'All Functional Neurology',    'url' => 'index.php'),
);
$content = '
<p>Parkinson&rsquo;s disease is a condition of the brain that leads to involuntary or uncontrolled movements, including trembling, stiffness, and problems with balance and coordination.</p>

<h2>Causes</h2>
<p>The root of what triggers Parkinson&rsquo;s disease is still a mystery. Both hereditary and environmental factors may be at play. In addition, there is evidence that viruses can cause Parkinson&rsquo;s, according to some researchers.</p>
<p>Researchers have found a correlation between low levels of the neurotransmitter dopamine and the dopamine regulator norepinephrine, which is also associated with Parkinson&rsquo;s disease.</p>
<p>Lewy bodies, and abnormal proteins, have also been discovered in persons with Parkinson&rsquo;s disease brains. However, if Lewy bodies have a role in the onset of Parkinson&rsquo;s disease, scientists are unaware of it.</p>

<h2>Symptoms</h2>
<p>There are four primary signs of Parkinson&rsquo;s:</p>
<ul>
  <li>Shaking of the limbs or the head, neck, or jaw</li>
  <li>Muscle stiffness, characterised by prolonged muscle contraction</li>
  <li>Sluggishness in movement</li>
  <li>Lack of balance and coordination can cause accidental falls.</li>
</ul>
<p>Other symptoms:</p>
<ul>
  <li>Sadness and other mood swings</li>
  <li>Problems with eating, drinking, and communicating</li>
  <li>Issues with urination or bowel movement</li>
  <li>Skin conditions</li>
</ul>

<h2>Diagnosis</h2>
<p>The non-genetic types of Parkinson&rsquo;s disease cannot yet be diagnosed using blood or laboratory tests. However, normal diagnostic procedures include a thorough medical history review and a neurological exam.</p>

<h2>Treatment</h2>
<p>Medication, lifestyle changes and therapies can be useful in treating Parkinson&rsquo;s.</p>
';
include __DIR__ . '/../../components/condition-template.php';
