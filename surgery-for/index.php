<?php
$pageTitle = "Surgery For | Brain to Spine";
$pageDescription = "Surgery For - Browse neurosurgery and spine surgery treatment categories by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$categoryName = "Surgery For";
$categorySubtitle = "Browse neurosurgery and spine surgery treatment categories.";
$heroKicker = "Treatments";
$heroImage = 'images/hero-common.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home', 'url' => '../index.php'),
  array('label' => 'Surgery For'),
);
$cards = array(
  array('label' => 'Spinal Conditions',          'url' => 'spinal-conditions/index.php',          'desc' => 'Surgical treatment for spinal disorders and back conditions',      'img' => 'images/card-back-pain.jpg'),
  array('label' => 'Neck Pain',                  'url' => 'neck-pain.php',                        'desc' => 'Cervical spine procedures for neck pain and nerve compression',    'img' => 'images/card-cervical-laminectomy.jpg'),
  array('label' => 'Tumors',                     'url' => 'tumors/index.php',                     'desc' => 'Surgical treatment for brain, spine and skull base tumors',       'img' => 'images/card-brain-tumor.jpg'),
  array('label' => 'Head Injuries',              'url' => 'head-injuries/index.php',              'desc' => 'Surgical treatment for traumatic head and brain injuries',        'img' => 'images/card-trauma.jpg'),
  array('label' => 'Cerebrovascular Conditions', 'url' => 'cerebrovascular-conditions/index.php', 'desc' => 'Stroke, aneurysm and vascular conditions of the brain',           'img' => 'images/card-ischemic-stroke.jpg'),
  array('label' => 'Functional Neurology',       'url' => 'functional-neurology/index.php',       'desc' => 'Movement disorders, epilepsy and pain syndromes',                 'img' => 'images/card-parkinsons.jpg'),
  array('label' => 'Others',                     'url' => 'others/index.php',                     'desc' => 'Additional neurosurgical procedures for nerve and skull conditions', 'img' => 'images/card-carpal-tunnel.jpg'),
);
include __DIR__ . '/../components/category-template.php';
