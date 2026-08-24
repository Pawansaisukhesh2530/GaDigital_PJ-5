<?php
$pageTitle = "Head Injuries | Brain to Spine";
$pageDescription = "Head Injuries treatment by Dr. A. Ajay Reddy - Best Neurosurgeon in Hyderabad";
$categoryName = "Head Injuries";
$categorySubtitle = "Surgical treatment for traumatic head and brain injuries.";
$heroKicker = "Surgery For";
$heroImage = 'images/hero-head-injuries.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',        'url' => '../../index.php'),
  array('label' => 'Surgery For', 'url' => '../index.php'),
  array('label' => 'Head Injuries'),
);
$intro = '
<p>The phrase &ldquo;head injury&rdquo; encompasses a wide range of injuries to the scalp, skull, brain, and other subcutaneous tissues and blood vessels in the head. If the damage to the brain is severe enough, the condition is referred to as traumatic brain injury (TBI) rather than a simple head injury.</p>
<p>Adults are frequently disabled or killed by head traumas. Injuries to the head can range from a bump, bruise (contusion), or a concussion.</p>

<h2>Causes</h2>
<p>The following things frequently cause major brain injuries:</p>
<ul>
  <li>Vehicle accidents</li>
  <li>Injuries sustained while participating in sports</li>
  <li>Falls, slips and stumbles in the house</li>
  <li>Accidental falls or being hit on the head while at work</li>
  <li>Assaults</li>
</ul>

<h2>Symptoms</h2>
<p>As with any head injury, the symptoms of a minor head injury might include nausea and dizziness. But, again, this might be a minor head injury if the person is aware and talking to you now.</p>
<p>Damage to the brain that is more significant might show symptoms later. If the victim has a head injury, get to the ER immediately if they:</p>
<ul>
  <li>Repeatedly throws up</li>
  <li>Has difficulties with vision, hearing, or speech</li>
  <li>Headache gets worse or doesn&rsquo;t go away with paracetamol</li>
  <li>Can&rsquo;t see or hear properly</li>
  <li>Is acting erratically or appears to be confused</li>
  <li>Does not have the ability to stay up</li>
  <li>Has distinct variations in the size of its pupils</li>
  <li>Dizzy or unsteady in their stride</li>
  <li>Memory loss</li>
  <li>Has ear or nasal haemorrhage or discharge</li>
  <li>Is convulsing or twitching involuntarily</li>
  <li>Vision blurs or becomes clumsy</li>
  <li>Swallows or eats with difficulty</li>
</ul>

<h2>Diagnosis</h2>
<ul>
  <li>CT scan</li>
  <li>MRI</li>
</ul>

<h2>Treatment</h2>
<p>In the case of mild head injuries, symptom management is the approach taken. For serious head injuries, treatment aims to preserve key functions and prevent consequences.</p>
';
$cards = array(
  array('label' => 'Trauma', 'url' => 'trauma.php', 'desc' => 'Traumatic brain injury &mdash; causes, symptoms, diagnosis and treatment', 'img' => 'images/card-trauma.jpg'),
);
include __DIR__ . '/../../components/category-template.php';
