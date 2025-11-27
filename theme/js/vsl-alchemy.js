/**
 * Veiled Alchemy - VSL Page JavaScript
 * Handles VSL player, CTA timing, exit popup, and interactions
 */

(function () {
  'use strict';

  // =====================================================
  // CONFIGURATION
  // =====================================================
  const CONFIG = {
    // CTA aparece após quantos segundos de vídeo?
    ctaDelaySeconds: 60,

    // URL do vídeo (externo)
    videoId: 'https://manualdaatracao.digital/wp-content/uploads/2025/11/1110.mp4',

    // Plataforma de vídeo: 'custom' para vídeo direto
    videoPlatform: 'custom'
  };

  // =====================================================
  // VSL PLAYER & CTA TIMING
  // =====================================================
  function initVSLPlayer() {
    const playButton = document.querySelector('.vsl-thumbnail-button');
    const playerContainer = document.querySelector('.vsl-player-container');
    const mainCTA = document.getElementById('vsl-main-cta');

    if (!playButton || !playerContainer) return;

    playButton.addEventListener('click', function () {
      loadVideoPlayer(playerContainer, mainCTA);
    });
  }

  function loadVideoPlayer(container, ctaButton) {
    const videoHTML = getVideoEmbedHTML();
    container.innerHTML = videoHTML;

    // Monitorar tempo real do vídeo (respeita pause/play)
    initVideoAPITracking(ctaButton);
  }

  function getVideoEmbedHTML() {
    const videoId = CONFIG.videoId;
    const platform = CONFIG.videoPlatform;

    switch (platform) {
      case 'vimeo':
        return `<iframe
          id="vsl-video-player"
          src="https://player.vimeo.com/video/${videoId}?autoplay=1&title=0&byline=0&portrait=0"
          frameborder="0"
          allow="autoplay; fullscreen; picture-in-picture"
          allowfullscreen
          style="width:100%;height:100%;">
        </iframe>`;

      case 'youtube':
        return `<iframe
          id="vsl-video-player"
          src="https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
          style="width:100%;height:100%;">
        </iframe>`;

      case 'wistia':
        return `<iframe
          id="vsl-video-player"
          src="https://fast.wistia.net/embed/iframe/${videoId}?autoPlay=true&controlsVisibleOnLoad=true"
          frameborder="0"
          allow="autoplay; fullscreen"
          allowfullscreen
          style="width:100%;height:100%;">
        </iframe>`;

      case 'custom':
        return `<video
          id="vsl-video-player"
          src="${videoId}"
          autoplay
          style="width:100%;height:100%;cursor:pointer;">
          Seu navegador não suporta vídeo HTML5.
        </video>`;

      default:
        return `<div class="vsl-placeholder" style="display:flex;align-items:center;justify-content:center;height:100%;background:#000;color:#999;">
          <p>Configure o vídeo em js/vsl-alchemy.js (linha 13-19)</p>
        </div>`;
    }
  }

  function startCTATimer(ctaButton) {
    if (!ctaButton) return;

    const delayMs = CONFIG.ctaDelaySeconds * 1000;

    setTimeout(function () {
      showCTA(ctaButton);
    }, delayMs);
  }

  function showCTA(ctaButton) {
    if (ctaButton) {
      // Remove display: none
      ctaButton.style.display = 'inline-block';

      // Aguarda um frame para aplicar a transição
      setTimeout(function () {
        ctaButton.style.opacity = '1';
        ctaButton.style.transform = 'translateY(0)';
      }, 50);
    }

    // GTM event
    if (window.dataLayer) {
      window.dataLayer.push({
        'event': 'cta_revealed',
        'cta_location': 'hero'
      });
    }

    // Dispatch custom event for external listeners (e.g., LP unlock)
    try {
      const evt = new CustomEvent('vsl:cta_revealed', {
        detail: {
          delaySeconds: CONFIG.ctaDelaySeconds,
          location: 'hero'
        }
      });
      document.dispatchEvent(evt);
    } catch (e) {
      // no-op if CustomEvent unsupported
    }

    console.log('CTA revelado após ' + CONFIG.ctaDelaySeconds + ' segundos');
  }

  // =====================================================
  // LOADING BAR (FICTÍCIA)
  // =====================================================
  function updateLoadingBar(currentTime, duration) {
    const loadingFill = document.getElementById('vsl-loading-fill');
    if (!loadingFill || !duration) return;

    let percentage = 0;

    // 80% em 60 segundos (1 minuto)
    if (currentTime <= 60) {
      percentage = (currentTime / 60) * 80;
    }
    // 20% restantes distribuídos até o final do vídeo
    else {
      const remainingTime = duration - 60;
      const elapsedAfter60 = currentTime - 60;
      const remainingPercentage = (elapsedAfter60 / remainingTime) * 20;
      percentage = 80 + remainingPercentage;
    }

    // Garante que não ultrapasse 100%
    percentage = Math.min(percentage, 100);

    loadingFill.style.width = percentage + '%';
  }

  // =====================================================
  // VIDEO API TRACKING (TEMPO REAL)
  // =====================================================
  function initVideoAPITracking(ctaButton) {
    const platform = CONFIG.videoPlatform;

    if (platform === 'custom') {
      // HTML5 Video - aguarda vídeo carregar
      setTimeout(function () {
        const video = document.querySelector('#vsl-video-player');

        if (!video) {
          console.error('Vídeo não encontrado');
          return;
        }

        let ctaShown = false;

        video.addEventListener('timeupdate', function () {
          if (!ctaShown && video.currentTime >= CONFIG.ctaDelaySeconds) {
            showCTA(ctaButton);
            ctaShown = true;
          }

          // Atualizar barra de carregamento
          updateLoadingBar(video.currentTime, video.duration);
        });

        // Play/Pause ao clicar no vídeo
        video.addEventListener('click', function () {
          if (video.paused) {
            video.play();
          } else {
            video.pause();
          }
        });

        console.log('Rastreamento de vídeo HTML5 iniciado');
      }, 500); // Aguarda 500ms para o vídeo ser inserido no DOM
    }

    if (platform === 'vimeo') {
      // Vimeo Player API (requer script externo)
      setTimeout(function () {
        const iframe = document.querySelector('#vsl-video-player');
        if (typeof Vimeo !== 'undefined') {
          const player = new Vimeo.Player(iframe);

          player.on('timeupdate', function (data) {
            if (data.seconds >= CONFIG.ctaDelaySeconds) {
              showCTA(ctaButton);
              player.off('timeupdate');
            }
          });
        }
      }, 500);
    }
  }

  // =====================================================
  // EXIT POPUP
  // =====================================================
  function initExitPopup() {
    const popup = document.getElementById('vsl-exit-popup');
    if (!popup) return;

    let hasTriggered = false;

    function showPopup() {
      if (!hasTriggered) {
        hasTriggered = true;
        popup.classList.remove('hidden');

        // GTM event
        if (window.dataLayer) {
          window.dataLayer.push({
            'event': 'exit_intent_shown'
          });
        }
      }
    }

    function hidePopup() {
      popup.classList.add('hidden');
    }

    // Trigger on mouse leave (desktop)
    document.addEventListener('mouseleave', function (e) {
      if (e.clientY <= 0) {
        showPopup();
      }
    });

    // Stay button - scroll to VSL
    const stayButton = document.getElementById('vsl-exit-stay');
    if (stayButton) {
      stayButton.addEventListener('click', function (e) {
        e.preventDefault();
        hidePopup();
        const heroSection = document.querySelector('.vsl-hero-section');
        if (heroSection) {
          heroSection.scrollIntoView({ behavior: 'smooth' });
        }
      });
    }

    // Dismiss button
    const dismissButton = document.getElementById('vsl-exit-dismiss');
    if (dismissButton) {
      dismissButton.addEventListener('click', function (e) {
        e.preventDefault();
        hidePopup();
      });
    }

    // Close on overlay click
    popup.addEventListener('click', function (e) {
      if (e.target === popup) {
        hidePopup();
      }
    });
  }

  // =====================================================
  // CTA CLICK HANDLERS
  // =====================================================
  function initCTAHandlers() {
    const ctaButtons = document.querySelectorAll('[data-cta-action]');

    ctaButtons.forEach(function (button) {
      button.addEventListener('click', function (e) {
        const action = button.getAttribute('data-cta-action');

        // Add GTM dataLayer push
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
  // PROGRESS BAR
  // =====================================================
  function initProgressBar() {
    const progressFill = document.getElementById('vsl-progress-fill');
    if (!progressFill) return;

    window.addEventListener('scroll', function () {
      const windowHeight = window.innerHeight;
      const documentHeight = document.documentElement.scrollHeight;
      const scrollTop = window.scrollY;

      const scrollPercentage = (scrollTop / (documentHeight - windowHeight)) * 100;
      progressFill.style.width = scrollPercentage + '%';
    });
  }

  // =====================================================
  // SMOOTH SCROLL TO PRICING
  // =====================================================
  function initSmoothScroll() {
    const scrollButtons = document.querySelectorAll('.scroll-to-pricing');

    scrollButtons.forEach(function (button) {
      button.addEventListener('click', function (e) {
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

  // =====================================================
  // INITIALIZATION
  // =====================================================
  document.addEventListener('DOMContentLoaded', function () {
    initVSLPlayer();
    initExitPopup();
    initCTAHandlers();
    initProgressBar();
    initSmoothScroll();
  });

})();
