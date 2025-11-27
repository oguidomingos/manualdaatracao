/**
 * Social Proof Notifications
 * Shows random purchase notifications to build trust
 */

(function() {
  'use strict';

  const names = [
    'João P.',
    'Lucas M.',
    'Pedro R.',
    'Rafael G.',
    'Bruno A.',
    'Carlos S.',
    'Daniel F.',
    'Eduardo C.',
    'Felipe T.',
    'Gustavo H.',
    'André L.',
    'Marcelo S.',
    'Thiago R.',
    'Rodrigo F.',
    'Mateus C.'
  ];

  const locations = [
    'São Paulo, SP',
    'Rio de Janeiro, RJ',
    'Belo Horizonte, MG',
    'Salvador, BA',
    'Curitiba, PR',
    'Porto Alegre, RS',
    'Brasília, DF',
    'Recife, PE',
    'Fortaleza, CE',
    'Manaus, AM',
    'Goiânia, GO',
    'Belém, PA',
    'Campinas, SP',
    'Santos, SP',
    'Florianópolis, SC'
  ];

  function getRandomItem(array) {
    return array[Math.floor(Math.random() * array.length)];
  }

  function createSocialProofElement() {
    const container = document.createElement('div');
    container.className = 'social-proof';
    container.innerHTML = `
      <div class="social-proof-card">
        <p class="social-proof-name"><span class="sp-name"></span> de <span class="sp-location"></span></p>
        <p class="social-proof-text">Acabou de adquirir o Treinamento!</p>
      </div>
    `;
    document.body.appendChild(container);
    return container;
  }

  function showNotification(container) {
    const nameSpan = container.querySelector('.sp-name');
    const locationSpan = container.querySelector('.sp-location');

    nameSpan.textContent = getRandomItem(names);
    locationSpan.textContent = getRandomItem(locations);

    // Show notification
    container.classList.add('visible');

    // Hide after 5 seconds
    setTimeout(function() {
      container.classList.remove('visible');
    }, 5000);
  }

  function initSocialProof() {
    const container = createSocialProofElement();

    // Show first notification after 10 seconds
    setTimeout(function() {
      showNotification(container);
    }, 10000);

    // Then show one every 15-25 seconds
    setInterval(function() {
      showNotification(container);
    }, 15000 + Math.random() * 10000);
  }

  // Initialize on DOM ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSocialProof);
  } else {
    initSocialProof();
  }
})();
