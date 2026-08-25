/**
 * BrainToSpine — global behaviour
 * Dr. A. Ajay Reddy
 */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    initBannerSlider();
    initProceduresCarousel();
    initMobileNav();
    initMegaMenuAccordion();
    initConsultationModal();
    initFaqAccordion();
    initTabs();
    initContactForm();
    initHeaderScroll();
    initScrollToTop();
    initRevealOnScroll();
  });

  /* ----------------------------------------------------------- Banner slider */
  function initBannerSlider() {
    var track = document.getElementById('bannerTrack');
    if (!track) return;

    var slides = Array.prototype.slice.call(track.querySelectorAll('.banner-slide'));
    var dots = Array.prototype.slice.call(document.querySelectorAll('.banner-dot'));
    var prev = document.getElementById('bannerPrev');
    var next = document.getElementById('bannerNext');
    if (slides.length < 2) {
      if (prev) prev.style.display = 'none';
      if (next) next.style.display = 'none';
      return;
    }

    var index = 0;
    var timer = null;
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function show(i) {
      index = (i + slides.length) % slides.length;
      slides.forEach(function (s, n) { s.classList.toggle('is-active', n === index); });
      dots.forEach(function (d, n) {
        d.classList.toggle('is-active', n === index);
        d.setAttribute('aria-selected', n === index ? 'true' : 'false');
      });
    }

    function start() {
      if (reduceMotion) return;
      stop();
      timer = setInterval(function () { show(index + 1); }, 5000);
    }
    function stop() { if (timer) { clearInterval(timer); timer = null; } }

    if (next) next.addEventListener('click', function () { show(index + 1); start(); });
    if (prev) prev.addEventListener('click', function () { show(index - 1); start(); });
    dots.forEach(function (d, n) {
      d.addEventListener('click', function () { show(n); start(); });
    });

    var slider = track.closest('.banner-slider') || track;
    slider.addEventListener('mouseenter', stop);
    slider.addEventListener('mouseleave', start);
    slider.addEventListener('focusin', stop);

    // Keyboard arrows when the slider has focus
    slider.addEventListener('keydown', function (e) {
      if (e.key === 'ArrowRight') { show(index + 1); start(); }
      if (e.key === 'ArrowLeft')  { show(index - 1); start(); }
    });

    // Touch swipe
    var startX = null;
    slider.addEventListener('touchstart', function (e) {
      startX = e.changedTouches[0].clientX;
      stop();
    }, { passive: true });
    slider.addEventListener('touchend', function (e) {
      if (startX === null) return;
      var dx = e.changedTouches[0].clientX - startX;
      if (Math.abs(dx) > 40) { show(dx < 0 ? index + 1 : index - 1); }
      startX = null;
      start();
    }, { passive: true });

    show(0);
    start();
  }

  /* ---------------------------------------------------------------- Carousel */
  function initProceduresCarousel() {
    var track = document.getElementById('proceduresTrack');
    var dots = document.querySelectorAll('.procedures-dot');
    if (!track || dots.length === 0) return;

    var originalCards = track.querySelectorAll('.procedure-card');
    var originalCount = dots.length;

    originalCards.forEach(function (card) {
      var clone = card.cloneNode(true);
      clone.classList.add('clone');
      clone.setAttribute('aria-hidden', 'true');
      track.appendChild(clone);
    });

    var currentIndex = 0;
    var autoPlayInterval = null;
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function step() {
      var card = track.querySelector('.procedure-card');
      var width = card ? card.offsetWidth : 280;
      var gap = parseFloat(window.getComputedStyle(track).gap) || 24;
      return width + gap;
    }

    function update(index) {
      currentIndex = index;
      track.style.transition = 'transform 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
      track.style.transform = 'translateX(-' + (currentIndex * step()) + 'px)';

      if (currentIndex >= originalCount) {
        setTimeout(function () {
          track.style.transition = 'none';
          currentIndex = 0;
          track.style.transform = 'translateX(0)';
        }, 500);
      }

      var dotIndex = currentIndex % originalCount;
      dots.forEach(function (d) {
        d.classList.remove('active');
        d.setAttribute('aria-selected', 'false');
      });
      if (dots[dotIndex]) {
        dots[dotIndex].classList.add('active');
        dots[dotIndex].setAttribute('aria-selected', 'true');
      }
    }

    function start() {
      if (reduceMotion) return;
      stop();
      autoPlayInterval = setInterval(function () { update(currentIndex + 1); }, 3500);
    }
    function stop() {
      if (autoPlayInterval) clearInterval(autoPlayInterval);
      autoPlayInterval = null;
    }

    dots.forEach(function (dot, idx) {
      function go() { stop(); update(idx); start(); }
      dot.addEventListener('click', go);
      dot.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); go(); }
      });
    });

    var wrapper = track.closest('.procedures-carousel-wrapper') || track;
    wrapper.addEventListener('mouseenter', stop);
    wrapper.addEventListener('mouseleave', start);
    wrapper.addEventListener('focusin', stop);

    window.addEventListener('resize', function () {
      track.style.transition = 'none';
      update(currentIndex);
    });

    start();
  }

  /* -------------------------------------------------------------- Mobile nav */
  function initMobileNav() {
    var toggle = document.getElementById('mobileToggle');
    var menu = document.getElementById('navMenu');
    var backdrop = document.getElementById('navBackdrop');
    if (!toggle || !menu) return;

    function open() {
      menu.classList.add('active');
      toggle.setAttribute('aria-expanded', 'true');
      toggle.setAttribute('aria-label', 'Close menu');
      document.body.style.overflow = 'hidden';
      if (backdrop) { backdrop.hidden = false; requestAnimationFrame(function () { backdrop.classList.add('active'); }); }
    }

    function close() {
      menu.classList.remove('active');
      toggle.setAttribute('aria-expanded', 'false');
      toggle.setAttribute('aria-label', 'Open menu');
      document.body.style.overflow = '';
      if (backdrop) {
        backdrop.classList.remove('active');
        setTimeout(function () { backdrop.hidden = true; }, 250);
      }
    }

    toggle.addEventListener('click', function () {
      if (menu.classList.contains('active')) { close(); } else { open(); }
    });

    if (backdrop) backdrop.addEventListener('click', close);

    // Close when a real destination is chosen (ignore the mega-menu parent toggle)
    menu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        if (link.classList.contains('nav-link-parent')) return;
        close();
      });
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && menu.classList.contains('active')) { close(); toggle.focus(); }
    });

    window.addEventListener('resize', function () {
      if (window.innerWidth > 992 && menu.classList.contains('active')) close();
    });
  }

  /* ------------------------------------------------- Mega menu (touch/mobile) */
  function initMegaMenuAccordion() {
    var dropdown = document.querySelector('.nav-dropdown');
    var megaToggle = document.getElementById('megaToggle');
    if (!dropdown || !megaToggle) return;

    megaToggle.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      var isOpen = dropdown.classList.toggle('open');
      megaToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    // Keyboard support for the desktop parent link
    var parent = dropdown.querySelector('.nav-link-parent');
    if (parent) {
      parent.addEventListener('keydown', function (e) {
        if (e.key === 'ArrowDown') {
          e.preventDefault();
          dropdown.removeAttribute('data-mega-dismissed');
          dropdown.classList.add('open');
          var first = dropdown.querySelector('.mega-menu a');
          if (first) first.focus();
        }
      });
    }

    /* On desktop the panel also opens via :focus-within, so removing .open is
       not enough to honour Escape. The dismissed flag forces it shut while
       focus stays on the parent link, and clears once the user moves away. */
    document.addEventListener('keydown', function (e) {
      if (e.key !== 'Escape') return;
      dropdown.classList.remove('open');
      megaToggle.setAttribute('aria-expanded', 'false');
      if (dropdown.contains(document.activeElement)) {
        dropdown.setAttribute('data-mega-dismissed', '');
        if (parent) parent.focus();
      }
    });

    dropdown.addEventListener('mouseleave', function () {
      dropdown.removeAttribute('data-mega-dismissed');
    });
    dropdown.addEventListener('focusout', function (e) {
      if (!dropdown.contains(e.relatedTarget)) dropdown.removeAttribute('data-mega-dismissed');
    });
  }

  /* ------------------------------------------------------ Consultation modal */
  function initConsultationModal() {
    var modal = document.getElementById('consultation');
    if (!modal) return;

    var openBtns = document.querySelectorAll('[href="#consultation"]');
    var closeBtn = modal.querySelector('.modal-close');
    var form = document.getElementById('consultationForm');
    var lastFocused = null;

    function open(e) {
      if (e) e.preventDefault();
      lastFocused = document.activeElement;
      modal.classList.add('active');
      document.body.style.overflow = 'hidden';
      var firstField = modal.querySelector('input, select, textarea');
      if (firstField) firstField.focus();
    }

    function close() {
      modal.classList.remove('active');
      document.body.style.overflow = '';
      if (lastFocused) lastFocused.focus();
    }

    openBtns.forEach(function (btn) { btn.addEventListener('click', open); });
    if (closeBtn) closeBtn.addEventListener('click', close);
    modal.addEventListener('click', function (e) { if (e.target === modal) close(); });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && modal.classList.contains('active')) close();
    });

    if (form) {
      form.addEventListener('submit', function (e) {
        e.preventDefault();
        function val(id) { var el = document.getElementById(id); return el ? el.value : ''; }
        var text = 'Hello, I would like to book a consultation.\n\n'
          + 'Name: ' + val('patientName') + '\n'
          + 'Phone: ' + val('patientPhone') + '\n'
          + 'Email: ' + val('patientEmail') + '\n'
          + 'Treatment: ' + val('treatmentType') + '\n'
          + 'Message: ' + val('message');
        window.open('https://api.whatsapp.com/send?phone=919346867764&text=' + encodeURIComponent(text), '_blank', 'noopener');
        close();
        form.reset();
      });
    }
  }

  /* --------------------------------------------------------- FAQ accordion */
  function initFaqAccordion() {
    var items = document.querySelectorAll('.faq-item');
    if (!items.length) return;

    items.forEach(function (item) {
      var btn = item.querySelector('.faq-question');
      var answer = item.querySelector('.faq-answer');
      if (!btn) return;

      btn.setAttribute('aria-expanded', 'false');

      btn.addEventListener('click', function () {
        var wasActive = item.classList.contains('active');
        items.forEach(function (other) {
          other.classList.remove('active');
          var b = other.querySelector('.faq-question');
          if (b) b.setAttribute('aria-expanded', 'false');
          var a = other.querySelector('.faq-answer');
          if (a) a.style.maxHeight = null;
        });
        if (!wasActive) {
          item.classList.add('active');
          btn.setAttribute('aria-expanded', 'true');
          if (answer) answer.style.maxHeight = answer.scrollHeight + 'px';
        }
      });
    });
  }

  /* ---------------------------------------------------------------- Tabs */
  function initTabs() {
    var groups = document.querySelectorAll('.tabs');
    if (!groups.length) return;

    groups.forEach(function (group) {
      var tabs = Array.prototype.slice.call(group.querySelectorAll('[role="tab"]'));
      if (!tabs.length) return;

      function panelFor(tab) {
        return document.getElementById(tab.getAttribute('aria-controls'));
      }

      function select(tab, moveFocus) {
        tabs.forEach(function (t) {
          var isActive = t === tab;
          t.classList.toggle('is-active', isActive);
          t.setAttribute('aria-selected', isActive ? 'true' : 'false');
          t.setAttribute('tabindex', isActive ? '0' : '-1');
          var p = panelFor(t);
          if (p) {
            p.classList.toggle('is-active', isActive);
            if (isActive) { p.removeAttribute('hidden'); } else { p.setAttribute('hidden', ''); }
          }
        });
        if (moveFocus) tab.focus();
      }

      tabs.forEach(function (tab) {
        tab.addEventListener('click', function () { select(tab, false); });

        tab.addEventListener('keydown', function (e) {
          var i = tabs.indexOf(tab);
          var target = null;
          if (e.key === 'ArrowRight' || e.key === 'ArrowDown') { target = tabs[(i + 1) % tabs.length]; }
          else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') { target = tabs[(i - 1 + tabs.length) % tabs.length]; }
          else if (e.key === 'Home') { target = tabs[0]; }
          else if (e.key === 'End') { target = tabs[tabs.length - 1]; }
          if (target) { e.preventDefault(); select(target, true); }
        });
      });

      // Normalise initial state
      var initial = tabs.filter(function (t) { return t.getAttribute('aria-selected') === 'true'; })[0] || tabs[0];
      select(initial, false);
    });
  }

  /* ------------------------------------------------------- Header on scroll */
  function initHeaderScroll() {
    var header = document.querySelector('.main-header');
    if (!header) return;
    var ticking = false;
    window.addEventListener('scroll', function () {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(function () {
        header.classList.toggle('scrolled', window.scrollY > 40);
        ticking = false;
      });
    }, { passive: true });
  }

  /* --------------------------------------------------------- Scroll to top */
  function initScrollToTop() {
    var btn = document.getElementById('scrollToTop');
    if (!btn) return;
    var ticking = false;
    window.addEventListener('scroll', function () {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(function () {
        btn.classList.toggle('visible', window.scrollY > 500);
        ticking = false;
      });
    }, { passive: true });
    btn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ------------------------------------------------------ Reveal on scroll */
  function initRevealOnScroll() {
    var els = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
    if (!els.length) return;

    if (!('IntersectionObserver' in window) ||
        window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      els.forEach(function (el) { el.classList.add('visible'); });
      return;
    }

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { rootMargin: '0px 0px -40px 0px', threshold: 0.08 });

    els.forEach(function (el) { observer.observe(el); });
  }

  /* --------------------------------------------------------- Contact form
     No server-side handler exists on this site, so the form composes the
     enquiry and hands it to the visitor's own WhatsApp or email client.
     Nothing is transmitted to or stored by this website.                   */
  function initContactForm() {

    var form = document.getElementById('contactForm');
    if (!form) return;

    var status = document.getElementById('contactStatus');
    var WHATSAPP_NUMBER = '919346867764';
    var EMAIL_TO = 'mybrain2spine@gmail.com';

    var fields = [
      { input: 'cName',    error: 'cNameErr',    required: true },
      { input: 'cPhone',   error: 'cPhoneErr',   required: true },
      { input: 'cEmail',   error: 'cEmailErr',   required: false, email: true },
      { input: 'cMessage', error: 'cMessageErr', required: true }
    ];

    function val(id) {
      var el = document.getElementById(id);
      return el ? el.value.trim() : '';
    }

    function setFieldError(field, invalid) {
      var input = document.getElementById(field.input);
      var error = document.getElementById(field.error);
      if (!input) return;
      if (invalid) {
        input.setAttribute('aria-invalid', 'true');
        if (error) error.hidden = false;
      } else {
        input.removeAttribute('aria-invalid');
        if (error) error.hidden = true;
      }
    }

    function checkField(field) {
      var value = val(field.input);
      var invalid = false;
      if (field.required && !value) invalid = true;
      if (!invalid && field.email && value && !/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(value)) invalid = true;
      setFieldError(field, invalid);
      return !invalid;
    }

    function setStatus(message, state) {
      if (!status) return;
      status.textContent = message;
      if (state) { status.setAttribute('data-state', state); }
      else { status.removeAttribute('data-state'); }
    }

    /* Clear the error as soon as the visitor starts correcting the field */
    fields.forEach(function (field) {
      var input = document.getElementById(field.input);
      if (!input) return;
      input.addEventListener('input', function () {
        if (input.getAttribute('aria-invalid') === 'true') checkField(field);
      });
      input.addEventListener('blur', function () {
        if (val(field.input)) checkField(field);
      });
    });

    function validate() {
      var firstInvalid = null;
      fields.forEach(function (field) {
        if (!checkField(field) && !firstInvalid) firstInvalid = document.getElementById(field.input);
      });
      if (firstInvalid) {
        setStatus('Please complete the highlighted fields.', 'error');
        firstInvalid.focus();
        return false;
      }
      return true;
    }

    function buildLines() {
      var lines = [];
      lines.push('Website enquiry - braintospine.com');
      lines.push('');
      lines.push('Name: ' + val('cName'));
      lines.push('Phone: ' + val('cPhone'));
      if (val('cEmail')) lines.push('Email: ' + val('cEmail'));
      if (val('cTopic')) lines.push('Reason: ' + val('cTopic'));
      lines.push('');
      lines.push('Message:');
      lines.push(val('cMessage'));
      return lines;
    }

    function send(channel) {
      if (!validate()) return;

      var body = buildLines().join('\n');
      var subject = 'Website enquiry from ' + val('cName');
      var url;

      if (channel === 'whatsapp') {
        url = 'https://api.whatsapp.com/send?phone=' + WHATSAPP_NUMBER +
              '&text=' + encodeURIComponent(body);
        setStatus('Opening WhatsApp with your message. Press send there to deliver it.', 'ok');
      } else {
        url = 'mailto:' + EMAIL_TO +
              '?subject=' + encodeURIComponent(subject) +
              '&body=' + encodeURIComponent(body);
        setStatus('Opening your email app with your message. Press send there to deliver it.', 'ok');
      }

      if (channel === 'whatsapp') {
        window.open(url, '_blank', 'noopener');
      } else {
        window.location.href = url;
      }
    }

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      send('whatsapp');
    });

    form.querySelectorAll('[data-send]').forEach(function (btn) {
      if (btn.type === 'submit') return;
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        send(btn.getAttribute('data-send'));
      });
    });
  }
})();
