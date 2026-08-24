<?php
$pageTitle = "Functional Neurology | Brain to Spine";
$pageDescription = "Functional Neurology treatment by Dr. A. Ajay Reddy - Best Neurosurgeon in Hyderabad";
$categoryName = "Functional Neurology";
$categorySubtitle = "Surgical treatment for movement disorders, pain syndromes, and other functional neurological conditions.";
$heroKicker = "Surgery For";
$heroImage = 'images/hero-functional-neurology.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',        'url' => '../../index.php'),
  array('label' => 'Surgery For', 'url' => '../index.php'),
  array('label' => 'Functional Neurology'),
);
$cards = array(
  array('label' => 'Headache',                          'url' => 'headache.php',            'desc' => 'Surgical evaluation and treatment for chronic headache conditions', 'img' => 'images/card-headache.jpg'),
  array('label' => "Parkinson's Disease",               'url' => 'parkinsons-disease.php',  'desc' => 'Surgical treatment for movement disorders',                         'img' => 'images/card-parkinsons.jpg'),
  array('label' => 'Dystonia',                          'url' => 'dystonia.php',            'desc' => 'Surgical treatment for involuntary muscle contractions',            'img' => 'images/card-dystonia.jpg'),
  array('label' => 'Tremor',                            'url' => 'tremor.php',              'desc' => 'Surgical treatment for uncontrollable shaking',                     'img' => 'images/card-tremor.jpg'),
  array('label' => 'Tourette Syndrome',                 'url' => 'tourettes-syndrome.php',  'desc' => 'Surgical treatment for tics and movement disorders',                'img' => 'images/card-tourettes.jpg'),
  array('label' => 'Epilepsy',                          'url' => 'epilepsy.php',            'desc' => 'Surgical treatment for seizure disorders',                          'img' => 'images/card-epilepsy.jpg'),
  array('label' => 'Complex Regional Pain Syndrome',    'url' => 'crps.php',                'desc' => 'Surgical treatment for chronic pain conditions',                    'img' => 'images/card-crps.jpg'),
);
include __DIR__ . '/../../components/category-template.php';
