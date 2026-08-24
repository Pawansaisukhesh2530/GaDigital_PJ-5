<?php require_once __DIR__ . '/components/init.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Dr. A. Ajay Reddy - Best Neurosurgeon in Hyderabad. MBBS, MCh Neuro Surgery. 22+ years experience, 3000+ cranial and spinal procedures. Senior Consultant, Star Hospitals.">
  <title>Best Neurosurgeon in Hyderabad | Dr. A. Ajay Reddy | Brain to Spine</title>
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

    <!-- ============ Banner slider (original site banners) ============ -->
    <section class="banner-slider" aria-label="Featured highlights">
      <div class="banner-track" id="bannerTrack">
        <div class="banner-slide is-active">
          <img src="images/banner-01.webp" alt="Brain to Spine — Dr. A. Ajay Reddy, Neurosurgeon and Spine Surgeon" width="1600" height="650" fetchpriority="high" decoding="async">
        </div>
        <div class="banner-slide">
          <img src="images/banner-02.webp" alt="Brain to Spine — advanced neurosurgical and spine care" width="1600" height="650" loading="lazy" decoding="async">
        </div>
        <div class="banner-slide">
          <img src="images/banner-03.webp" alt="Brain to Spine — minimally invasive spine surgery" width="1600" height="650" loading="lazy" decoding="async">
        </div>
      </div>

      <button class="banner-arrow banner-prev" id="bannerPrev" aria-label="Previous slide">&#10094;</button>
      <button class="banner-arrow banner-next" id="bannerNext" aria-label="Next slide">&#10095;</button>

      <div class="banner-dots" id="bannerDots" role="tablist" aria-label="Slide navigation">
        <button class="banner-dot is-active" role="tab" aria-selected="true"  aria-label="Slide 1"></button>
        <button class="banner-dot"           role="tab" aria-selected="false" aria-label="Slide 2"></button>
        <button class="banner-dot"           role="tab" aria-selected="false" aria-label="Slide 3"></button>
      </div>
    </section>

    <!-- ============ Doctor intro (original: profile card + bio) ============ -->
    <section class="doctor-section" id="about">
      <div class="container">
        <div class="doctor-intro-grid">

          <aside class="doctor-card">
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
          </aside>

          <div class="doctor-bio">
            <span class="hero-kicker">About the Doctor</span>
            <h1 class="section-title doctor-bio-title">Best Neurosurgeon in Hyderabad</h1>
            <div class="prose">
              <p>Dr. Ajay Reddy is an alumnus of the Mahadevappa Rampure Medical College, Gulbarga and completed his MS in General Surgery from Kasturba Medical College, Manipal. He has done specialization in Neuro Surgery from Nizam&rsquo;s Institute of Medical Sciences, Hyderabad and he is now one of the best neurosurgeons in Hyderabad.</p>
              <p>He&rsquo;s a leading brain tumor specialist with vast experience and has performed over 3,000 cranial and spinal procedures. He is trained in minimally invasive spine surgeries at Yonsei, Seoul, South Korea. He also holds a fellowship from Saitama Gamma Knife Center and Tokyo Women&rsquo;s Medical University, Japan.</p>
              <p>Currently, Dr A. Ajay Reddy is associated with Star Hospitals, Hyderabad as a Senior Consultant in Neuro Surgery department.</p>
            </div>
            <div class="doctor-stats">
              <div class="stat"><span class="stat-number">22+</span><span class="stat-label">Years Experience</span></div>
              <div class="stat"><span class="stat-number">3,000+</span><span class="stat-label">Cranial &amp; Spinal Procedures</span></div>
              <div class="stat"><span class="stat-number">2</span><span class="stat-label">International Fellowships</span></div>
            </div>
            <div class="doctor-bio-actions">
              <a href="about-doctor.php" class="btn-secondary">Read Full Profile</a>
              <a href="second-opinion.php" class="btn-primary">Get A Second Opinion</a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ============ Surgical Procedures ============ -->
    <section class="procedures-section" id="treatments">
      <div class="container">
        <div class="section-header">
          <span class="hero-kicker">What We Treat</span>
          <h2 class="section-title">Surgical Procedures</h2>
          <p class="section-subtitle">Specialised brain and spine surgery across seven areas of care.</p>
        </div>

        <div class="procedures-grid">
          <a href="surgery-for/spinal-conditions/back-pain.php" class="procedure-card fade-in">
            <img src="images/proc-back-pain.webp" alt="Back pain" class="procedure-icon" loading="lazy" width="300" height="214">
            <h3 class="procedure-title">Back Pain</h3>
          </a>
          <a href="surgery-for/neck-pain.php" class="procedure-card fade-in">
            <img src="images/proc-neck-pain.webp" alt="Neck pain" class="procedure-icon" loading="lazy" width="300" height="214">
            <h3 class="procedure-title">Neck Pain</h3>
          </a>
          <a href="surgery-for/tumors/skull-base-tumors/index.php" class="procedure-card fade-in">
            <img src="images/proc-skull-base.webp" alt="Skull base surgeries" class="procedure-icon" loading="lazy" width="300" height="214">
            <h3 class="procedure-title">Skull Base Surgeries</h3>
          </a>
          <a href="surgery-for/head-injuries/index.php" class="procedure-card fade-in">
            <img src="images/proc-head-injuries.webp" alt="Head injuries" class="procedure-icon" loading="lazy" width="300" height="214">
            <h3 class="procedure-title">Head Injuries</h3>
          </a>
          <a href="surgery-for/cerebrovascular-conditions/index.php" class="procedure-card fade-in">
            <img src="images/proc-cerebrovascular.webp" alt="Cerebrovascular surgeries" class="procedure-icon" loading="lazy" width="300" height="214">
            <h3 class="procedure-title">Cerebrovascular Surgeries</h3>
          </a>
          <a href="surgery-for/functional-neurology/index.php" class="procedure-card fade-in">
            <img src="images/proc-functional-neurology.webp" alt="Functional neurology" class="procedure-icon" loading="lazy" width="300" height="214">
            <h3 class="procedure-title">Functional Neurology</h3>
          </a>
          <a href="surgery-for/tumors/index.php" class="procedure-card fade-in">
            <img src="images/proc-tumors.webp" alt="Tumors" class="procedure-icon" loading="lazy" width="300" height="214">
            <h3 class="procedure-title">Tumors</h3>
          </a>
        </div>
      </div>
    </section>

    <!-- ============ Tips for Healthy Brain & Spine ============ -->
    <section class="tips-section">
      <div class="container">
        <div class="section-header">
          <span class="hero-kicker">Patient Education</span>
          <h2 class="section-title">Tips for Healthy Brain &amp; Spine</h2>
          <p class="section-subtitle">Practical guidance from Dr. Ajay Reddy.</p>
        </div>
        <div class="tips-grid">
          <a href="blog/vertebroplasty.php" class="tip-card fade-in">
            <img src="images/tip-healthy-brain.jpg" alt="Tips for a healthy brain" class="tip-img" loading="lazy" width="600" height="400">
            <h3 class="tip-title">Understanding Vertebroplasty</h3>
            <p class="tip-excerpt">A minimally invasive solution for spinal compression fractures.</p>
          </a>
          <a href="blog/stroke-prevention.php" class="tip-card fade-in">
            <img src="images/tip-02.jpg" alt="Lifestyle changes to prevent strokes" class="tip-img" loading="lazy" width="600" height="400">
            <h3 class="tip-title">Lifestyle Changes to Prevent Strokes</h3>
            <p class="tip-excerpt">Your guide to a healthier future.</p>
          </a>
        </div>
        <div class="section-footer-action">
          <a href="blog/index.php" class="btn-secondary">Read All Articles</a>
        </div>
      </div>
    </section>

    <!-- ============ Patient Testimonials ============ -->
    <section class="testimonials-section">
      <div class="container">
        <div class="section-header">
          <span class="hero-kicker">In Their Words</span>
          <h2 class="section-title">Patient Testimonials</h2>
          <p class="section-subtitle">Recovery stories shared by patients and their families.</p>
        </div>
        <div class="testimonials-grid">
          <div class="testimonial-card fade-in">
            <a href="https://youtu.be/2LEtVe8hGM0" target="_blank" rel="noopener" class="video-link" aria-label="Watch: Spinal Fusion Surgery">
              <img src="https://img.youtube.com/vi/2LEtVe8hGM0/hqdefault.jpg" alt="Spinal fusion surgery patient testimonial" class="video-thumb" loading="lazy" width="480" height="360">
              <span class="play-btn" aria-hidden="true">&#9654;</span>
            </a>
            <h3 class="testimonial-title">Spinal Fusion Surgery</h3>
          </div>
          <div class="testimonial-card fade-in">
            <a href="https://youtu.be/A7p1GhYM1ys" target="_blank" rel="noopener" class="video-link" aria-label="Watch: Spinal Tumor Surgery">
              <img src="https://img.youtube.com/vi/A7p1GhYM1ys/hqdefault.jpg" alt="Spinal tumor surgery patient testimonial" class="video-thumb" loading="lazy" width="480" height="360">
              <span class="play-btn" aria-hidden="true">&#9654;</span>
            </a>
            <h3 class="testimonial-title">Spinal Tumor Surgery</h3>
          </div>
          <div class="testimonial-card fade-in">
            <a href="https://youtu.be/QoeuB0R32cc" target="_blank" rel="noopener" class="video-link" aria-label="Watch: Head Injury Surgery">
              <img src="https://img.youtube.com/vi/QoeuB0R32cc/hqdefault.jpg" alt="Head injury surgery patient testimonial" class="video-thumb" loading="lazy" width="480" height="360">
              <span class="play-btn" aria-hidden="true">&#9654;</span>
            </a>
            <h3 class="testimonial-title">Head Injury Surgery</h3>
          </div>
        </div>
        <div class="section-footer-action">
          <a href="media.php" class="btn-secondary">View All Videos</a>
        </div>
      </div>
    </section>

    <!-- ============ Emergency CTA (original wording) ============ -->
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

  <!-- Consultation Modal -->
  <div class="modal-overlay" id="consultation" role="dialog" aria-modal="true" aria-labelledby="consultationTitle">
    <div class="modal-content">
      <button class="modal-close" aria-label="Close dialog">&times;</button>
      <h2 class="modal-title" id="consultationTitle">Book a Consultation</h2>
      <p class="modal-subtitle">Fill in your details and we'll connect you via WhatsApp.</p>
      <form id="consultationForm">
        <div class="form-group">
          <label for="patientName">Your Name</label>
          <input type="text" id="patientName" class="form-input" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="patientPhone">Phone Number</label>
          <input type="tel" id="patientPhone" class="form-input" placeholder="+91 98765 43210" required>
        </div>
        <div class="form-group">
          <label for="patientEmail">Email Address</label>
          <input type="email" id="patientEmail" class="form-input" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="treatmentType">Treatment Interest</label>
          <select id="treatmentType" class="form-select">
            <option value="">Select treatment</option>
            <option value="Back Pain">Back Pain</option>
            <option value="Neck Pain">Neck Pain</option>
            <option value="Brain Tumor">Brain Tumor</option>
            <option value="Spine Surgery">Spine Surgery</option>
            <option value="Head Injury">Head Injury</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" class="form-textarea" rows="3" placeholder="Describe your condition..."></textarea>
        </div>
        <button type="submit" class="btn-primary form-submit">Send via WhatsApp</button>
      </form>
    </div>
  </div>

  <script src="js/main.js"></script>
</body>
</html>
