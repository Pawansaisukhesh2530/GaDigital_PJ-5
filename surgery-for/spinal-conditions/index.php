<?php
$pageTitle = "Spinal Conditions | Brain to Spine";
$pageDescription = "Spinal Conditions treatment by Dr. A. Ajay Reddy - Best Neurosurgeon in Hyderabad";
$categoryName = "Spinal Conditions";
$categorySubtitle = "Surgical treatment for spinal disorders and back conditions.";
$heroKicker = "Surgery For";
$heroImage = 'images/hero-spinal-conditions.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',        'url' => '../../index.php'),
  array('label' => 'Surgery For', 'url' => '../index.php'),
  array('label' => 'Spinal Conditions'),
);
$cards = array(
  array('label' => 'Back Pain',     'url' => 'back-pain.php',                'desc' => 'Comprehensive evaluation and surgical treatment for chronic back pain', 'img' => 'images/card-back-pain.jpg'),
  array('label' => 'Spinal Fusion', 'url' => 'back-pain/spinal-fusion.php',  'desc' => 'Surgical procedure to join two or more vertebrae',                      'img' => 'images/card-spinal-fusion.jpg'),
  array('label' => 'Laminectomy',   'url' => 'back-pain/laminectomy.php',    'desc' => 'Surgical removal of part of the vertebral bone',                        'img' => 'images/card-laminectomy.jpg'),
  array('label' => 'Discectomy',    'url' => 'back-pain/discectomy.php',     'desc' => 'Surgical removal of herniated disc material',                           'img' => 'images/card-discectomy.jpg'),
  array('label' => 'Sciatica',      'url' => '../../sciatica.php',           'desc' => 'Pain radiating along the path of the sciatic nerve',                    'img' => 'images/card-back-pain.jpg'),
);
include __DIR__ . '/../../components/category-template.php';
