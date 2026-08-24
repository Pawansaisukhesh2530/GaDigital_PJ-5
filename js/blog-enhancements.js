/**
 * Blog-only enhancements — reading progress + table of contents.
 * Global behaviour (nav, scroll-to-top, header, reveal) lives in main.js.
 */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    initReadingProgress();
    initTableOfContents();
  });

  function initReadingProgress() {
    var bar = document.getElementById('readingProgress');
    if (!bar) return;
    var ticking = false;

    function update() {
      var docHeight = document.documentElement.scrollHeight - window.innerHeight;
      var progress = docHeight > 0 ? (window.scrollY / docHeight) * 100 : 0;
      bar.style.width = Math.min(100, Math.max(0, progress)) + '%';
    }

    window.addEventListener('scroll', function () {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(function () { update(); ticking = false; });
    }, { passive: true });

    update();
  }

  function initTableOfContents() {
    var tocLinks = document.querySelectorAll('.post-toc a');
    if (!tocLinks.length) return;

    var header = document.querySelector('.main-header');
    var headerHeight = header ? header.offsetHeight : 0;

    tocLinks.forEach(function (link) {
      link.addEventListener('click', function (e) {
        var href = link.getAttribute('href');
        if (!href || href.charAt(0) !== '#') return;
        var target = document.querySelector(href);
        if (!target) return;
        e.preventDefault();
        var top = target.getBoundingClientRect().top + window.scrollY - headerHeight - 20;
        window.scrollTo({ top: top, behavior: 'smooth' });
      });
    });

    // Highlight the section currently in view
    var headings = [];
    tocLinks.forEach(function (link) {
      var href = link.getAttribute('href');
      if (href && href.charAt(0) === '#') {
        var el = document.querySelector(href);
        if (el) headings.push({ el: el, link: link });
      }
    });
    if (!headings.length) return;

    var ticking = false;
    window.addEventListener('scroll', function () {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(function () {
        var pos = window.scrollY + headerHeight + 120;
        var active = null;
        headings.forEach(function (h) {
          if (h.el.offsetTop <= pos) active = h.link;
        });
        tocLinks.forEach(function (l) { l.classList.remove('is-active'); });
        if (active) active.classList.add('is-active');
        ticking = false;
      });
    }, { passive: true });
  }
})();
