/**
 * PornStar Coaching - JavaScript
 * Handles notifications and access counter
 */

(function() {
  'use strict';

  // =====================================================
  // CONFIGURATION
  // =====================================================
  const NOTIFICATION_INTERVAL = 18500; // 18.5 seconds
  const NOTIFICATION_VISIBLE_DURATION = 5000; // 5 seconds
  const INITIAL_ACCESSES = 28;

  const NAMES = [
    "Miguel", "Arthur", "Gael", "Théo", "Heitor", "Ravi", "Davi", "Bernardo", "Noah", "Gabriel",
    "Lucas", "Matheus", "Benjamin", "Guilherme", "Samuel", "Enzo", "Nicolas", "Lorenzo", "Pedro", "Rafael"
  ];

  const CITIES = [
    "São Paulo", "Rio de Janeiro", "Belo Horizonte", "Salvador", "Fortaleza", "Curitiba", "Manaus", "Recife", "Goiânia", "Belém",
    "Porto Alegre", "Brasília", "Campinas", "São Luís", "São Gonçalo", "Maceió", "Duque de Caxias", "Natal", "Campo Grande", "Teresina"
  ];

  // =====================================================
  // STATE
  // =====================================================
  let accessesCount = INITIAL_ACCESSES;
  let notificationTimer = null;

  // =====================================================
  // NOTIFICATION SYSTEM
  // =====================================================
  function showNotification() {
    const notification = document.getElementById('psc-notification');
    const nameElement = document.getElementById('psc-notification-name');
    const cityElement = document.getElementById('psc-notification-city');

    if (!notification || !nameElement || !cityElement) return;

    // Decrement accesses count
    if (accessesCount > 0) {
      accessesCount--;
      updateAccessesDisplay();
    }

    // Random name and city
    const randomName = NAMES[Math.floor(Math.random() * NAMES.length)];
    const randomCity = CITIES[Math.floor(Math.random() * CITIES.length)];

    nameElement.textContent = randomName;
    cityElement.textContent = randomCity;

    // Show notification
    notification.style.opacity = '1';

    // Hide after duration
    setTimeout(function() {
      notification.style.opacity = '0';
    }, NOTIFICATION_VISIBLE_DURATION);
  }

  function startNotificationCycle() {
    function runCycle() {
      showNotification();
      notificationTimer = setTimeout(runCycle, NOTIFICATION_INTERVAL);
    }

    // Start first notification after short delay
    setTimeout(runCycle, 2000);
  }

  // =====================================================
  // ACCESSES COUNTER
  // =====================================================
  function updateAccessesDisplay() {
    const counterElement = document.getElementById('psc-accesses-count');
    if (counterElement) {
      counterElement.textContent = accessesCount + ' acessos';
    }
  }

  // =====================================================
  // SMOOTH SCROLL FOR CTAs
  // =====================================================
  function initSmoothScroll() {
    const ctaButtons = document.querySelectorAll('[data-cta-action]');

    ctaButtons.forEach(function(button) {
      // Add GTM tracking
      button.addEventListener('click', function() {
        const action = button.getAttribute('data-cta-action');

        if (window.dataLayer) {
          window.dataLayer.push({
            'event': 'cta_click',
            'cta_location': action
          });
        }

        console.log('CTA clicked:', action);
      });
    });
  }

  // =====================================================
  // INITIALIZE
  // =====================================================
  function init() {
    // Start notification cycle
    startNotificationCycle();

    // Initialize smooth scroll and tracking
    initSmoothScroll();

    // Initial counter display
    updateAccessesDisplay();

    console.log('PSC JavaScript initialized');
  }

  // Run on DOM ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  // Cleanup on page unload
  window.addEventListener('beforeunload', function() {
    if (notificationTimer) {
      clearTimeout(notificationTimer);
    }
  });

})();
