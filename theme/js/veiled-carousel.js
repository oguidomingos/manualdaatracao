/**
 * Veiled Vantage Carousels Script
 * Controls the horizontal scrollable carousels for lessons and bonus
 */

(function() {
  'use strict';

  // Wait for DOM to be fully loaded
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize all carousels on the page
    initCarousel('veiled-carousel-track');
    initCarousel('bonus-carousel-track');
  });

  function initCarousel(trackId) {
    const track = document.getElementById(trackId);
    if (!track) {
      console.warn('Carousel track not found: ' + trackId);
      return;
    }

    const carousel = track.closest('.veiled-carousel');
    if (!carousel) {
      console.warn('Carousel container not found for: ' + trackId);
      return;
    }

    const prev = carousel.querySelector('.veiled-carousel-prev');
    const next = carousel.querySelector('.veiled-carousel-next');

    if (!prev || !next) {
      console.warn('Carousel navigation buttons not found');
      return;
    }

    // Enable smooth scrolling
    track.style.scrollBehavior = 'smooth';

    // Scroll by viewport width (90%)
    function scrollByAmount(direction) {
      const amount = track.clientWidth * 0.9;
      track.scrollLeft += direction * amount;
    }

    // Previous button click
    prev.addEventListener('click', function() {
      scrollByAmount(-1);
    });

    // Next button click
    next.addEventListener('click', function() {
      scrollByAmount(1);
    });

    // Optional: Hide buttons at start/end
    function updateButtonVisibility() {
      const isAtStart = track.scrollLeft <= 0;
      const isAtEnd = track.scrollLeft >= track.scrollWidth - track.clientWidth - 10;

      prev.style.opacity = isAtStart ? '0.3' : '1';
      prev.style.cursor = isAtStart ? 'default' : 'pointer';

      next.style.opacity = isAtEnd ? '0.3' : '1';
      next.style.cursor = isAtEnd ? 'default' : 'pointer';
    }

    // Update button visibility on scroll
    track.addEventListener('scroll', updateButtonVisibility);

    // Initial check
    updateButtonVisibility();
  }
})();
