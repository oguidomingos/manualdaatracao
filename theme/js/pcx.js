/**
 * PCX - Forge Essence JavaScript
 * Interatividade e tracking para landing page
 */

(function() {
  'use strict';

  // ========================================
  // FAQ ACCORDION
  // ========================================

  function initFAQ() {
    const faqItems = document.querySelectorAll('.pcx-faq-item');

    faqItems.forEach(item => {
      const question = item.querySelector('.pcx-faq-question');

      question.addEventListener('click', function() {
        // Toggle current item
        item.classList.toggle('active');

        // Close other items (optional - comment out for multi-open)
        faqItems.forEach(otherItem => {
          if (otherItem !== item && otherItem.classList.contains('active')) {
            otherItem.classList.remove('active');
          }
        });
      });
    });
  }

  // ========================================
  // CTA CLICK TRACKING
  // ========================================

  function initCTATracking() {
    const ctaButtons = document.querySelectorAll('[data-cta-location]');

    ctaButtons.forEach(button => {
      button.addEventListener('click', function() {
        const location = this.getAttribute('data-cta-location');

        // GTM dataLayer push
        if (window.dataLayer) {
          window.dataLayer.push({
            'event': 'cta_click',
            'cta_location': location,
            'page_template': 'pcx-forge-essence'
          });
        }

        // Console log for debugging
        console.log('CTA clicked:', location);
      });
    });
  }

  // ========================================
  // SMOOTH SCROLL FOR ANCHOR LINKS
  // ========================================

  function initSmoothScroll() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');

    anchorLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href !== '#') {
          const target = document.querySelector(href);
          if (target) {
            e.preventDefault();
            target.scrollIntoView({
              behavior: 'smooth',
              block: 'start'
            });
          }
        }
      });
    });
  }

  // ========================================
  // INTERSECTION OBSERVER (Fade in animations)
  // ========================================

  function initIntersectionObserver() {
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
        }
      });
    }, observerOptions);

    // Observe all cards and sections
    const elementsToObserve = document.querySelectorAll(
      '.pcx-mechanism-card, .pcx-transformation-item, .pcx-coach-card, .pcx-bonus-card, .pcx-testimonial-card'
    );

    elementsToObserve.forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
      el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
      observer.observe(el);
    });

    // Add visible class styling
    const style = document.createElement('style');
    style.textContent = `
      .is-visible {
        opacity: 1 !important;
        transform: translateY(0) !important;
      }
    `;
    document.head.appendChild(style);
  }

  // ========================================
  // LESSONS CAROUSEL SCROLL BEHAVIOR
  // ========================================

  function initLessonsCarousel() {
    const track = document.getElementById('pcx-carousel-track');
    const prev = document.querySelector('.pcx-carousel-prev');
    const next = document.querySelector('.pcx-carousel-next');
    if (!track || !prev || !next) return;

    track.style.scrollBehavior = 'smooth';

    function scrollByAmount(dir) {
      const amount = track.clientWidth * 0.9;
      track.scrollLeft += dir * amount;
    }

    prev.addEventListener('click', () => scrollByAmount(-1));
    next.addEventListener('click', () => scrollByAmount(1));
  }

  // ========================================
  // PAGE LOAD TRACKING
  // ========================================

  function trackPageLoad() {
    if (window.dataLayer) {
      window.dataLayer.push({
        'event': 'page_view',
        'page_template': 'pcx-forge-essence',
        'page_type': 'landing_page'
      });
    }
  }

  // ========================================
  // SCROLL DEPTH TRACKING
  // ========================================

  function initScrollDepthTracking() {
    const milestones = [25, 50, 75, 100];
    const tracked = new Set();

    function checkScrollDepth() {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const scrollPercent = (scrollTop / docHeight) * 100;

      milestones.forEach(milestone => {
        if (scrollPercent >= milestone && !tracked.has(milestone)) {
          tracked.add(milestone);

          if (window.dataLayer) {
            window.dataLayer.push({
              'event': 'scroll_depth',
              'scroll_percentage': milestone,
              'page_template': 'pcx-forge-essence'
            });
          }

          console.log('Scroll depth:', milestone + '%');
        }
      });
    }

    let ticking = false;
    window.addEventListener('scroll', function() {
      if (!ticking) {
        window.requestAnimationFrame(function() {
          checkScrollDepth();
          ticking = false;
        });
        ticking = true;
      }
    });
  }

  // ========================================
  // INIT ALL ON DOM READY
  // ========================================

  function init() {
    initFAQ();
    initCTATracking();
    initSmoothScroll();
    initIntersectionObserver();
    initLessonsCarousel();
    trackPageLoad();
    initScrollDepthTracking();

    // Unlock the rest of the LP when VSL CTA is revealed (after configured delay)
    document.addEventListener('vsl:cta_revealed', function() {
      const locked = document.getElementById('pcx-locked-content');
      if (locked) {
        // reveal sections below hero by turning display back on
        locked.style.display = 'block';
        locked.classList.remove('pcx-locked');
      }
    });

    console.log('PCX Forge Essence initialized');
  }

  // DOM Ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

})();
