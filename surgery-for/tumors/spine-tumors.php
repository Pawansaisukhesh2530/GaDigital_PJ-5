<?php
$pageTitle = "Spine Tumors Treatment in Hyderabad | Brain to Spine";
$pageDescription = "Spine Tumors treatment by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Spine Tumors";
$heroKicker = "Tumors";
$heroImage = 'images/hero-tumors.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',        'url' => '../../index.php'),
  array('label' => 'Surgery For', 'url' => '../index.php'),
  array('label' => 'Tumors',      'url' => 'index.php'),
  array('label' => 'Spine Tumors'),
);
$relatedLinks = array(
  array('label' => 'Brain Tumors',      'url' => 'brain-tumors/index.php'),
  array('label' => 'Skull Base Tumors', 'url' => 'skull-base-tumors/index.php'),
  array('label' => 'Pituitary Tumors',  'url' => 'skull-base-tumors/pituitary-tumors.php'),
  array('label' => 'Chordomas',         'url' => 'skull-base-tumors/chordomas.php'),
  array('label' => 'All Tumors',        'url' => 'index.php'),
);
$content = '
<p>A spinal tumour is a growth that appears inside the spinal column or the bones of the spine. A spinal tumour that originates in the spinal cord or its covering is referred to as a spinal cord tumour, also known as an intradural tumour (dura). Vertebral tumours are tumours that affect the vertebrae, which make up the spine.</p>

<h2>Symptoms</h2>
<ul>
  <li>Tumour growth&ndash;related pain at the tumour site</li>
  <li>Back pain that frequently spreads to other body parts</li>
  <li>Reduced sensitivity to heat, cold, and discomfort</li>
  <li>Loss of bladder or bowel control</li>
  <li>Walking difficulty that occasionally results in falls</li>
  <li>Back discomfort that worsens at night</li>
  <li>Muscle weakness or loss of feeling, especially in the arms or legs</li>
  <li>Muscle weakness in various sections of your body, which may be slight or severe</li>
</ul>

<h2>Diagnosis</h2>
<p>Before deciding on a course of treatment, it may be essential to do the most common diagnostic tests for spinal tumours, including X-rays, MRIs, computerised tomography CTs, and a (closed) biopsy.</p>

<h2>Treatment</h2>
<p>Surgery, radiation, and chemotherapy are the most common treatments for spinal tumours. Steroids may also be prescribed by your doctor to minimise swelling in the central nervous system. The best option for you will be determined by the specifics of your medical condition.</p>
';
include __DIR__ . '/../../components/condition-template.php';
