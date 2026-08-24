<?php
$pageTitle = "Gliomas Treatment in Hyderabad | Brain to Spine";
$pageDescription = "Glioma treatment by Dr. A. Ajay Reddy, Best Neurosurgeon in Hyderabad";
$conditionName = "Gliomas";
$heroKicker = "Brain Tumors";
$heroImage = 'images/hero-tumors.jpg';
$breadcrumbTrail = array(
  array('label' => 'Home',         'url' => '../../../index.php'),
  array('label' => 'Surgery For',  'url' => '../../index.php'),
  array('label' => 'Tumors',       'url' => '../index.php'),
  array('label' => 'Brain Tumors', 'url' => 'index.php'),
  array('label' => 'Gliomas'),
);
$relatedLinks = array(
  array('label' => 'Meningioma',          'url' => 'meningioma.php'),
  array('label' => 'Ependymoma',          'url' => 'ependymoma.php'),
  array('label' => 'Craniopharyngiomas',  'url' => 'craniopharyngiomas.php'),
  array('label' => 'Acoustic Schwannoma', 'url' => 'acoustic-schwannoma.php'),
  array('label' => 'All Brain Tumors',    'url' => 'index.php'),
);
$content = '
<p>Brain tumours that originate in glial cells are called gliomas. Glucose and nutrients are supplied by glial cells to nerve cells, which assist maintain the blood-brain barrier and keep the brain healthy. Each type of glial cell has a specific purpose, and there are many of them:</p>
<ul>
<li><strong>Astrocyte:</strong> keeps neurones in place and transfers nutrients.</li>
<li><strong>Oligodendrocyte:</strong> insulates neurones with myelin.</li>
<li><strong>Microglia:</strong> breaks down the remains of diseased or dead neurons.</li>
<li><strong>Ependymal cells:</strong> covers the ventricles and produce cerebrospinal fluid.</li>
</ul>
<p>Glioma is an umbrella term for astrocytoma, oligodendroglioma, and glioblastoma, the three forms of glial tumours. Depending on the stage of malignancy, gliomas can be aggressive or benign. Some cancers progress slowly and may be treatable. Most of these cancers are slow-growing, non-resectable, and prone to recurring.</p>

<h2>Symptoms</h2>
<p>The symptoms of a glioma are associated with the region in the brain where they develop. Common symptoms include:</p>
<ul>
<li>Headache</li>
<li>Vomiting or nausea</li>
<li>Confusion or a deterioration in mental ability</li>
<li>Loss of memory</li>
<li>Character shifts or irritability</li>
<li>Challenges with balance</li>
<li>Urinary incontinence</li>
<li>Issues with vision, such as double vision, blurry vision, or loss of peripheral vision</li>
<li>Having trouble speaking</li>
<li>Seizures, especially those that occur in someone who has never had seizures before</li>
</ul>

<h2>Diagnosis</h2>
<p>If a patient has symptoms that point to glioma, the doctor will enlist the help of a multidisciplinary team to make sure the diagnosis is correct. Neurological tests, such as CT and MRI scans, will be ordered by the doctor. The results of these imaging examinations will reveal information about a tumour&rsquo;s size, location, and kind.</p>
<p>A biopsy may be necessary if the scans do not reveal the type of tumour present with sufficient clarity for a definitive diagnosis.</p>

<h2>Treatment</h2>
<p>Each patient has a unique set of circumstances when it comes to their particular cancer and the treatment options available. Treatment may be aimed at curing the disease or at alleviating its symptoms (palliative care). Treatments are frequently used in combination.</p>
';
include __DIR__ . '/../../../components/condition-template.php';
