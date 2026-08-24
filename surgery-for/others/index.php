<?php
$pageTitle = "Others | Brain to Spine";
$pageDescription = "Other neurosurgical procedures by Dr. A. Ajay Reddy - Best Neurosurgeon in Hyderabad";
$categoryName = "Others";
$categorySubtitle = "Additional neurosurgical procedures for nerve, skull, and related conditions.";
$heroKicker = "Surgery For";
$heroImage = 'images/hero-common-02.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',        'url' => '../../index.php'),
  array('label' => 'Surgery For', 'url' => '../index.php'),
  array('label' => 'Others'),
);
$cards = array(
  array('label' => 'Hemifacial Spasms',            'url' => 'hemifacial-spasms.php',       'desc' => 'Surgical treatment for involuntary facial muscle contractions', 'img' => 'images/card-hemifacial-spasms.jpg'),
  array('label' => 'Craniostenosis',               'url' => 'craniostenosis.php',          'desc' => 'Surgical treatment for abnormal skull fusion in infants',      'img' => 'images/card-craniostenosis.jpg'),
  array('label' => 'Cerebro-Spinal Fluid Fistulas','url' => 'csf-fistulas.php',            'desc' => 'Surgical treatment for CSF leakage',                           'img' => 'images/card-csf-fistulas.jpg'),
  array('label' => 'Carpal Tunnel Syndrome',       'url' => 'carpal-tunnel-syndrome.php',  'desc' => 'Surgical treatment for median nerve compression',              'img' => 'images/card-carpal-tunnel.jpg'),
);
include __DIR__ . '/../../components/category-template.php';
