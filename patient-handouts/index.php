<?php
$pageTitle = "Patient Handouts | Neuro Rehab Exercises | Brain to Spine";
$pageDescription = "Neuro rehabilitation exercises and patient education handouts from Brain to Spine.";
$categoryName = "Patient Handouts";
$categorySubtitle = "Neuro rehabilitation exercises and patient education.";
$heroKicker = "Neuro Rehab Exercises";
$heroImage = 'images/hero-neuro-rehab.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home', 'url' => '../index.php'),
  array('label' => 'Patient Handouts'),
);
$intro = '
<p>Patients with neurological (nerve/nervous system) injuries or disorders are often asked to do neuro rehabilitation exercises. Those who have had a stroke, sustained a brain injury, or require speech therapy may benefit from a structured regimen. Use the handouts below to learn standard, home-based exercises recommended for common conditions.</p>
<div class="callout-warning">
  <strong>Before you begin:</strong>
  <ul>
    <li>Always review these exercises with your treating physician or physiotherapist before starting.</li>
    <li>Stop any movement that causes pain, dizziness, or discomfort.</li>
  </ul>
</div>
';
$cards = array(
  array('label' => 'Vertigo Exercises',           'url' => 'vertigo-exercises.php',   'desc' => 'Vestibular rehabilitation movements to help with dizziness and balance, including gaze stabilization and head-motion exercises', 'img' => 'images/card-vertigo.jpg'),
  array('label' => 'Back Strengthening Exercises','url' => 'back-strengthening.php',  'desc' => 'Gentle stretching and core-strengthening routines to support the spine, improve posture, and reduce low back pain',              'img' => 'images/card-back-strengthening.jpg'),
);
include __DIR__ . '/../components/category-template.php';
