/**
 * Cloaking Script - PCX Forge Essence
 *
 * REGRAS DE ACESSO:
 * 1. Desktop = sempre esconde o conteúdo
 * 2. Mobile SEM parâmetro ?key=segredo123 = bloqueado
 * 3. Mobile COM parâmetro ?key=segredo123 = liberado
 *
 * Facebook encoding fix: aceita tanto "segredo123" quanto "segredo=123"
 */

(function() {
  'use strict';

  // Configuração
  const URL_PARAM_NAME = 'key';
  const URL_PARAM_VALUE = 'segredo123';

  // Detecta se é mobile
  function isMobile() {
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;

    // Lista de palavras-chave de mobile
    const mobileKeywords = [
      /Android/i,
      /webOS/i,
      /iPhone/i,
      /iPad/i,
      /iPod/i,
      /BlackBerry/i,
      /Windows Phone/i,
      /Mobile/i
    ];

    return mobileKeywords.some(keyword => userAgent.match(keyword));
  }

  // Pega parâmetro da URL
  function getURLParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
  }

  // Esconde conteúdo (desktop)
  function hideContent() {
    document.body.style.display = 'none';
    console.log('Cloaking: Desktop detectado - conteúdo bloqueado');
  }

  // Mostra página de acesso negado
  function showAccessDenied() {
    document.body.innerHTML = `
      <div style="
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: linear-gradient(135deg, hsl(350, 65%, 35%) 0%, hsl(350, 70%, 25%) 100%);
        color: white;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        padding: 2rem;
        text-align: center;
      ">
        <div>
          <div style="font-size: 4rem; margin-bottom: 1rem;">🔒</div>
          <h1 style="font-size: 2rem; margin-bottom: 1rem; font-weight: 700;">
            Acesso Negado
          </h1>
          <p style="font-size: 1.125rem; opacity: 0.9; max-width: 400px; margin: 0 auto;">
            Esta página requer um link de acesso válido.<br>
            Por favor, utilize o link fornecido.
          </p>
        </div>
      </div>
    `;
    document.body.style.display = 'block';
    console.log('Cloaking: Mobile sem chave - acesso negado');
  }

  // Aplica lógica de cloaking
  function applyCloaking() {
    const mobile = isMobile();
    const keyValue = getURLParameter(URL_PARAM_NAME);

    // Aceita tanto "segredo123" quanto "segredo=123" (Facebook encoding fix)
    const hasValidKey = keyValue === URL_PARAM_VALUE || keyValue === 'segredo=123';

    // REGRA 1: Desktop = sempre esconde
    if (!mobile) {
      hideContent();
      return;
    }

    // REGRA 2: Mobile sem chave = bloqueado
    if (mobile && !hasValidKey) {
      showAccessDenied();
      return;
    }

    // REGRA 3: Mobile com chave = liberado
    document.body.style.display = 'block';
    console.log('Cloaking: Acesso liberado');
  }

  // Executa imediatamente
  applyCloaking();

})();
