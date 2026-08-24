<?php
$pageTitle = "Tumors | Brain to Spine";
$pageDescription = "Tumors treatment by Dr. A. Ajay Reddy - Best Neurosurgeon in Hyderabad";
$categoryName = "Tumors";
$categorySubtitle = "Surgical treatment for brain and spinal tumors.";
$heroKicker = "Surgery For";
$heroImage = 'images/hero-tumors.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',        'url' => '../../index.php'),
  array('label' => 'Surgery For', 'url' => '../index.php'),
  array('label' => 'Tumors'),
);
$cards = array(
  array('label' => 'Brain Tumors',      'url' => 'brain-tumors/index.php',                 'desc' => 'Surgical treatment for tumors in the brain',                    'img' => 'images/card-brain-tumor.jpg'),
  array('label' => 'Spine Tumors',      'url' => 'spine-tumors.php',                       'desc' => 'Surgical treatment for tumors affecting the spine',            'img' => 'images/card-spine-tumor.jpg'),
  array('label' => 'Skull Base Tumors', 'url' => 'skull-base-tumors/index.php',            'desc' => 'Surgical treatment for tumors at the base of the skull',        'img' => 'images/card-skull-base-tumor.jpg'),
  array('label' => 'Pituitary Tumors',  'url' => 'skull-base-tumors/pituitary-tumors.php', 'desc' => 'Surgical treatment for tumors of the pituitary gland',          'img' => 'images/card-skull-base-tumor.jpg'),
  array('label' => 'Chordomas',         'url' => 'skull-base-tumors/chordomas.php',        'desc' => 'Surgical treatment for rare bone cancers at the skull base',    'img' => 'images/card-skull-base-tumor.jpg'),
);
include __DIR__ . '/../../components/category-template.php';
