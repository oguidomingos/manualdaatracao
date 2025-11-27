/**
 * Progress Sidebar Script
 * Controls the progress bar that shows scroll progress to CTA button
 */

(function() {
  'use strict';

  // Wait for DOM to be fully loaded
  document.addEventListener('DOMContentLoaded', function() {
    const progressSidebar = document.getElementById('progress-sidebar');
    const progressFill = document.getElementById('progress-fill');
    const pricingSection = document.getElementById('pricing-section');
    const ctaButton = document.querySelector('.pricing-cta-button');

    if (!progressSidebar || !progressFill || !pricingSection || !ctaButton) {
      console.warn('Progress sidebar elements not found');
      return;
    }

    // Function to update progress bar
    function updateProgress() {
      // Get viewport height
      const viewportHeight = window.innerHeight;

      // Get CTA button position
      const ctaRect = ctaButton.getBoundingClientRect();
      const ctaTop = ctaRect.top + window.pageYOffset;

      // Get current scroll position
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      // Calculate distance from top to CTA
      const totalDistance = ctaTop;

      // Calculate scroll percentage (0 to 100)
      let scrollPercent = (scrollTop / totalDistance) * 100;

      // Clamp between 0 and 100
      scrollPercent = Math.min(100, Math.max(0, scrollPercent));

      // Update progress bar fill
      progressFill.style.height = scrollPercent + '%';

      // Show sidebar after scrolling 100px
      if (scrollTop > 100) {
        progressSidebar.classList.add('visible');
      } else {
        progressSidebar.classList.remove('visible');
      }
    }

    // Smooth scroll to CTA when clicking progress sidebar
    progressSidebar.addEventListener('click', function() {
      ctaButton.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
      });
    });

    // Add cursor pointer
    progressSidebar.style.cursor = 'pointer';

    // Update on scroll
    window.addEventListener('scroll', updateProgress, { passive: true });

    // Update on resize
    window.addEventListener('resize', updateProgress, { passive: true });

    // Initial update
    updateProgress();
  });
})();
