/**
 * Cloaking System
 * - Desktop: Display none
 * - Mobile: Show only with correct URL parameter
 */

(function() {
  'use strict';

  // ========================================
  // CONFIGURAÇÃO - ALTERE AQUI
  // ========================================

  // Parâmetro da URL que libera o acesso no mobile
  // Exemplo: ?key=segredo123 ou ?access=vip2024
  const URL_PARAM_NAME = 'key';
  const URL_PARAM_VALUE = 'segredo123';

  // ========================================
  // NÃO ALTERE DAQUI PRA BAIXO
  // ========================================

  /**
   * Detecta se é dispositivo mobile
   */
  function isMobile() {
    // Detecta por user agent
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;
    const mobileRegex = /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i;

    // Detecta por tamanho de tela (fallback)
    const screenWidth = window.innerWidth || document.documentElement.clientWidth;

    return mobileRegex.test(userAgent.toLowerCase()) || screenWidth <= 768;
  }

  /**
   * Pega parâmetro da URL
   */
  function getURLParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
  }

  /**
   * Esconde todo o conteúdo
   */
  function hideContent() {
    document.body.style.display = 'none';
    document.documentElement.style.display = 'none';
  }

  /**
   * Mostra mensagem de acesso negado (opcional)
   */
  function showAccessDenied() {
    document.body.innerHTML = '';
    document.body.style.display = 'block';
    document.documentElement.style.display = 'block';
    document.body.style.background = '#0A0A0A';
    document.body.style.color = '#F2F2F2';
    document.body.style.fontFamily = 'Inter, sans-serif';
    document.body.style.padding = '2rem';
    document.body.style.textAlign = 'center';
    document.body.style.minHeight = '100vh';
    document.body.style.display = 'flex';
    document.body.style.alignItems = 'center';
    document.body.style.justifyContent = 'center';

    const message = document.createElement('div');
    message.innerHTML = '<h1 style="font-size: 2rem; margin-bottom: 1rem;">Acesso Restrito</h1><p style="color: #C4C4C4;">Esta página não está disponível no momento.</p>';
    document.body.appendChild(message);
  }

  /**
   * Aplica o cloaking
   */
  function applyCloaking() {
    const mobile = isMobile();
    const keyValue = getURLParameter(URL_PARAM_NAME);

    // Aceita tanto "segredo123" quanto "segredo=123" (por causa do encoding do FB)
    const hasValidKey = keyValue === URL_PARAM_VALUE || keyValue === 'segredo=123';

    console.log('Cloaking Debug:', {
      isMobile: mobile,
      hasKey: hasValidKey,
      urlParam: keyValue,
      expectedValue: URL_PARAM_VALUE
    });

    // REGRA 1: Desktop = sempre esconde
    if (!mobile) {
      console.log('Desktop detectado - Escondendo conteúdo');
      hideContent();
      return;
    }

    // REGRA 2: Mobile sem chave correta = esconde ou mostra mensagem
    if (mobile && !hasValidKey) {
      console.log('Mobile sem chave válida - Bloqueando acesso');
      showAccessDenied(); // Você pode trocar por hideContent() se preferir
      return;
    }

    // REGRA 3: Mobile com chave correta = mostra normalmente
    console.log('Mobile com chave válida - Acesso liberado');
    document.body.style.display = 'block';
    document.documentElement.style.display = 'block';
  }

  // Executa o mais cedo possível
  if (document.readyState === 'loading') {
    // Esconde imediatamente para evitar flash
    document.documentElement.style.display = 'none';

    document.addEventListener('DOMContentLoaded', applyCloaking);
  } else {
    applyCloaking();
  }

})();
