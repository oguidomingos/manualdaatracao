/**
 * Parallax Scrolling Effect
 * Creates depth and movement on scroll
 */

(function() {
  'use strict';

  // Parallax effect for background images
  function initParallax() {
    const parallaxElements = document.querySelectorAll('.parallax-image');

    if (parallaxElements.length === 0) return;

    function handleScroll() {
      const scrolled = window.pageYOffset;

      parallaxElements.forEach(function(element) {
        const speed = parseFloat(element.getAttribute('data-speed')) || 0.5;
        const yPos = -(scrolled * speed);
        element.style.transform = 'translateY(' + yPos + 'px)';
      });
    }

    // Use passive listener for better performance
    window.addEventListener('scroll', handleScroll, { passive: true });

    // Initial call
    handleScroll();
  }

  // Smooth scroll to pricing section
  function initSmoothScroll() {
    const scrollButtons = document.querySelectorAll('.scroll-to-pricing');

    scrollButtons.forEach(function(button) {
      button.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = button.getAttribute('href');
        const targetSection = document.querySelector(targetId);

        if (targetSection) {
          targetSection.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  }

  // Initialize on DOM ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function() {
      initParallax();
      initSmoothScroll();
    });
  } else {
    initParallax();
    initSmoothScroll();
  }
})();
