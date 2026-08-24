<?php require_once __DIR__ . '/components/init.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="About Dr. A. Ajay Reddy - MBBS, MCh Neuro Surgery. Best Neurosurgeon in Hyderabad with 22+ years of experience and over 3,000 cranial and spinal procedures.">
  <title>About Dr. Ajay Reddy | Brain to Spine</title>
  <link rel="icon" href="images/logo.png">
  <link rel="stylesheet" href="css/style.css">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Physician",
    "name": "Dr. A. Ajay Reddy",
    "medicalSpecialty": "Neurosurgery",
    "image": "images/dr-ajay-reddy.webp",
    "telephone": "+91-95155-02113",
    "email": "mybrain2spine@gmail.com",
    "alumniOf": [
      { "@type": "EducationalOrganization", "name": "Mahadevappa Rampure Medical College, Gulbarga" },
      { "@type": "EducationalOrganization", "name": "Kasturba Medical College, Manipal" },
      { "@type": "EducationalOrganization", "name": "Nizam's Institute of Medical Sciences, Hyderabad" }
    ],
    "worksFor": { "@type": "Hospital", "name": "Star Hospitals, Hyderabad" },
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Star Hospitals, Survey No.74, Financial District, Nanakramguda",
      "addressLocality": "Hyderabad",
      "addressRegion": "Telangana",
      "postalCode": "500008",
      "addressCountry": "IN"
    }
  }
  </script>
</head>
<body>
  <?php include __DIR__ . '/components/header.php'; ?>

  <main id="content">

    <section class="page-hero page-hero-media">
      <div class="page-hero-bg" aria-hidden="true"><img src="images/hero-about.jpg" alt="" width="1600" height="500" fetchpriority="high" decoding="async"></div>
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><span aria-current="page">About Us</span></li>
          </ol>
        </nav>
        <span class="hero-kicker">About the Doctor</span>
        <h1 class="page-title">About Dr. Ajay Reddy</h1>
        <p class="page-subtitle">MBBS, MCh &ndash; Neuro Surgery &bull; Neurosurgeon, Spine Surgeon &bull; Senior Consultant, Star Hospitals Hyderabad</p>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="about-layout">

          <!-- ---------- Profile card (mirrors the original) ---------- -->
          <aside class="about-aside">
            <div class="doctor-card">
              <img src="images/dr-ajay-reddy.webp" alt="Dr. A. Ajay Reddy" class="doctor-card-photo" width="250" height="300">
              <h2 class="doctor-card-name">Dr. Ajay Reddy</h2>
              <p class="doctor-card-degree">MBBS, MCh</p>
              <p class="doctor-card-role">MBBS, MCh &ndash; Neuro Surgery<br>Neurosurgeon, Spine Surgeon</p>
              <p class="doctor-card-exp">Experience &ndash; 22+ Years</p>
              <ul class="doctor-card-contacts">
                <li><a href="mailto:mybrain2spine@gmail.com">mybrain2spine@gmail.com</a></li>
                <li><a href="tel:+919515502113">+91 95155 02113</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=919346867764&amp;text=Im%20interested%20in%20your%20services" target="_blank" rel="noopener">WhatsApp: +91 93468 67764</a></li>
              </ul>
              <a href="contact-us.php#contact" class="btn-primary doctor-card-cta">Book An Appointment</a>
              <a href="second-opinion.php" class="aside-link">Get a second opinion &rarr;</a>
            </div>
          </aside>

          <!-- ---------- Biography ---------- -->
          <div class="about-body">
            <article class="prose">
              <h2>Best Neurosurgeon in Hyderabad</h2>
              <p>Dr. Ajay Reddy is an alumnus of the Mahadevappa Rampure Medical College, Gulbarga and completed his MS in General Surgery from Kasturba Medical College, Manipal. He has done specialization in Neuro Surgery from Nizam&rsquo;s Institute of Medical Sciences, Hyderabad and he is now one of the best neurosurgeons in Hyderabad.</p>
              <p>He&rsquo;s a leading brain tumor specialist with vast experience and has performed over 3,000 cranial and spinal procedures. He is trained in minimally invasive spine surgeries at Yonsei, Seoul, South Korea. He also holds a fellowship from Saitama Gamma Knife Center and Tokyo Women&rsquo;s Medical University, Japan.</p>
              <p>Currently, Dr A. Ajay Reddy is associated with Star Hospitals, Hyderabad as a Senior Consultant in Neuro Surgery department.</p>
            </article>

            <div class="stat-row">
              <div class="stat-tile">
                <span class="stat-number">22+</span>
                <span class="stat-label">Years of experience</span>
              </div>
              <div class="stat-tile">
                <span class="stat-number">3,000+</span>
                <span class="stat-label">Cranial &amp; spinal procedures</span>
              </div>
              <div class="stat-tile">
                <span class="stat-number">2</span>
                <span class="stat-label">International fellowships</span>
              </div>
            </div>

            <!-- ---------- Credentials tabs (as on the original) ---------- -->
            <div class="tabs" id="credentialTabs">
              <div class="tab-list" role="tablist" aria-label="Credentials">
                <button class="tab-btn is-active" id="tab-qual" role="tab" aria-selected="true"  aria-controls="panel-qual" type="button">Qualifications</button>
                <button class="tab-btn"           id="tab-fell" role="tab" aria-selected="false" aria-controls="panel-fell" type="button" tabindex="-1">Fellowships</button>
                <button class="tab-btn"           id="tab-clin" role="tab" aria-selected="false" aria-controls="panel-clin" type="button" tabindex="-1">Clinical experience</button>
              </div>

              <div class="tab-panel is-active" id="panel-qual" role="tabpanel" aria-labelledby="tab-qual" tabindex="0">
                <ul class="credentials-list">
                  <li>Dr. A. Ajay Reddy has completed MBBS from Mahadevappa Rampure Medical College, Gulbarga, 1998</li>
                  <li>He completed MS &ndash; General Surgery from Kasturba Medical College, 2002</li>
                  <li>He completed MCh &ndash; Neuro Surgery from Nizam Institute of Medical Sciences, Hyderabad, 2006</li>
                </ul>
              </div>

              <div class="tab-panel" id="panel-fell" role="tabpanel" aria-labelledby="tab-fell" tabindex="0" hidden>
                <ul class="credentials-list">
                  <li>Completed basic training on Gamma Knife Radiosurgery, Saitama Gamma Knife Center and Tokyo Women&rsquo;s Medical University, Japan</li>
                  <li>Trained in minimally invasive spine surgery at Yonsei, Seoul</li>
                </ul>
              </div>

              <div class="tab-panel" id="panel-clin" role="tabpanel" aria-labelledby="tab-clin" tabindex="0" hidden>
                <p>Dr. A Ajay Reddy has performed more than 3000 cranial and spinal surgeries and has vast experience in the domain of Neurosurgery, especially in Neuro oncology.</p>
                <p>He has expertise in performing skull base surgeries (Endoscopically) and also endoscopic or minimally invasive spine surgeries.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ---------- Procedures / Treatments Performed ---------- -->
    <section class="section section-alt" id="procedures">
      <div class="container">
        <div class="section-header">
          <span class="hero-kicker">Scope of Practice</span>
          <h2 class="section-title">Procedures / Treatments Performed</h2>
          <p class="section-subtitle">Conditions and procedures managed by Dr. A. Ajay Reddy.</p>
        </div>

        <ul class="procedure-list" aria-label="Procedures and treatments performed">
          <li>Acoustic neuroma</li>
          <li>Aneurysms</li>
          <li>Arteriovenous malformation</li>
          <li>Astrocytoma</li>
          <li>Balance problems</li>
          <li>Benign peripheral nerve tumor</li>
          <li>Brachial plexus injury</li>
          <li>Brain aneurysm</li>
          <li>Brain AVM (arteriovenous malformation)</li>
          <li>Brain lymphoma</li>
          <li>Brain metastases</li>
          <li>Brain tumor</li>
          <li>Cancer</li>
          <li>Carotid artery disease</li>
          <li>Carotid artery stenosis</li>
          <li>Carpal tunnel syndrome</li>
          <li>Cavernous malformations</li>
          <li>Cerebral palsy</li>
          <li>Central nervous system vascular malformations</li>
          <li>Cervical spinal stenosis</li>
          <li>Chiari malformation</li>
          <li>Chondrosarcoma</li>
          <li>Chordoma</li>
          <li>Cluster headache</li>
          <li>Craniopharyngioma</li>
          <li>Craniosynostosis</li>
          <li>Cushing syndrome</li>
          <li>Delayed sleep phase</li>
          <li>Dural arteriovenous fistulas</li>
          <li>Dystonia</li>
          <li>Ependymoma</li>
          <li>Epilepsy</li>
          <li>Essential tremor</li>
          <li>Esthesioneuroblastoma</li>
          <li>Glioblastoma multiform</li>
          <li>Glioma</li>
          <li>Hemifacial spasm</li>
          <li>Hemorrhage</li>
          <li>Hydrocephalus</li>
          <li>Intracranial hemorrhage</li>
          <li>Intracranial venous malformations</li>
          <li>Lumbar spinal stenosis</li>
          <li>Malignant peripheral nerve sheath tumors</li>
          <li>Medulloblastoma</li>
          <li>Meningioma</li>
          <li>Movement disorders</li>
          <li>Moyamoya disease</li>
          <li>Nasal and paranasal tumors</li>
          <li>Neurofibromatosis</li>
          <li>Oligodendroglioma</li>
          <li>Parkinson&rsquo;s disease</li>
          <li>Pediatric brain tumors</li>
          <li>Peripheral nerve tumors</li>
          <li>Peripheral neuropathy</li>
          <li>Pituitary tumors</li>
          <li>Seizures</li>
          <li>Spina bifida</li>
          <li>Spinal arteriovenous malformation (AVM)</li>
          <li>Spinal cord injury</li>
          <li>Spinal cord lymphoma</li>
          <li>Spinal cord tumor</li>
          <li>Spinal stenosis</li>
          <li>Stroke</li>
          <li>Subarachnoid hemorrhage</li>
          <li>Subdural hemorrhage</li>
          <li>Transient ischemic attack (TIA)</li>
          <li>Trigeminal neuralgia</li>
          <li>Venous malformation</li>
          <li>Vertebral tumor</li>
        </ul>

        <div class="cta-panel">
          <div>
            <h2 class="cta-panel-title">Looking for a specific condition?</h2>
            <p class="cta-panel-text">Browse the full list of conditions and procedures by category.</p>
          </div>
          <div class="cta-panel-actions">
            <a href="surgery-for/index.php" class="btn-primary">Explore Surgery For</a>
            <a href="patient-handouts/index.php" class="btn-secondary">Patient Handouts</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ---------- Emergency CTA (original wording) ---------- -->
    <section class="cta-section">
      <div class="container">
        <div class="cta-content">
          <h2 class="cta-title">We're here when you need us.</h2>
          <p class="cta-subtitle">For all kinds of emergencies related to brain to spine, call us right away.</p>
          <div class="cta-actions">
            <a href="tel:+919515502113" class="btn-primary">Call +91 95155 02113</a>
            <a href="contact-us.php" class="btn-secondary btn-on-dark">Get In Touch</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/components/footer.php'; ?>
  <script src="js/main.js"></script>
</body>
</html>
