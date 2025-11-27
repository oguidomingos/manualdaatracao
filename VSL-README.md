# Página VSL - Veiled Alchemy

## Descrição

Landing page com design Veiled Alchemy para VSL (Video Sales Letter). Clone pixel-perfect do repositório https://github.com/PedroHenriqueFernande/veiled-alchemy.git

## Características

### Design System
- **Cores**: Sistema HSL com wine metallic (356 86% 30%) e copper accent (24 58% 52%)
- **Fontes**: Space Grotesk (headings) + Inter (body)
- **Animações**: fade-in-up, breathe, pulse-glow
- **Efeitos**: Radial glow, glassmorphism, gradient buttons

### Funcionalidades
1. **VSL Player**: Thumbnail com botão play animado
2. **Exit Popup**: Aparece quando cursor sai da página
3. **Floating CTA**: Botão fixo que aparece após scroll
4. **Progress Bar**: Barra de progresso do scroll
5. **Cloaking**: Desktop bloqueado, só funciona em mobile

### Cloaking
- **Desktop**: Mostra mensagem "Acesso Restrito"
- **Mobile**: Página completa visível
- Detecção por User Agent + largura de tela (≤768px)

## Como Usar

### 1. Criar Página no WordPress

1. Vá em **Páginas > Adicionar Nova**
2. Título da página: "VSL" (ou qualquer nome)
3. No painel direito, em **Atributos da Página**:
   - Selecione **Template: VSL - Veiled Alchemy**
4. Publique a página

### 2. Configurar Video Player

Edite o arquivo `theme/js/vsl-alchemy.js`, linha ~21:

```javascript
// Substitua com seu player (Vimeo, YouTube, Wistia, etc.)

// Exemplo Vimeo:
playerContainer.innerHTML = '<iframe src="https://player.vimeo.com/video/SEU_VIDEO_ID?autoplay=1" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="width:100%;height:100%;"></iframe>';

// Exemplo YouTube:
playerContainer.innerHTML = '<iframe src="https://www.youtube.com/embed/SEU_VIDEO_ID?autoplay=1" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="width:100%;height:100%;"></iframe>';
```

### 3. Configurar CTAs

Edite o arquivo `theme/page-vsl.php`:

**CTA Principal (Hero)** - Linha ~91:
```php
<a
    href="https://seu-link-de-checkout.com"
    class="btn-hero vsl-cta-button"
    data-cta-action="hero"
>
    Me Transforme em uma Máquina Agora!
</a>
```

**CTA Flutuante** - Linha ~127:
```php
<a
    href="https://seu-link-de-checkout.com"
    class="btn-hero"
    data-cta-action="floating"
>
    Busque Sua Solução Definitiva
</a>
```

**CTA do Exit Popup** - Linha ~155:
```php
<a
    href="https://seu-link-de-checkout.com"
    id="vsl-exit-stay"
    class="btn-hero vsl-exit-popup-stay"
>
    Ver Agora
</a>
```

### 4. Trocar Thumbnail do VSL

Substitua a imagem em:
```
theme/assets/images/vsl/hero-vsl-thumb.jpg
```

## Estrutura de Arquivos

```
theme/
├── page-vsl.php                    # Template da página VSL
├── css/
│   └── custom-alchemy.css          # CSS do design system
├── js/
│   ├── vsl-alchemy.js              # JavaScript principal (player, popup, etc)
│   └── cloaking-vsl.js             # Cloaking desktop/mobile
└── assets/
    └── images/
        └── vsl/
            └── hero-vsl-thumb.jpg  # Thumbnail do vídeo
```

## Customização

### Cores

Edite `theme/css/custom-alchemy.css`, linhas 12-41:

```css
:root {
  --primary: 356 86% 30%;          /* Wine metallic */
  --primary-glow: 356 69% 41%;     /* Wine glow */
  --accent: 24 58% 52%;            /* Copper */
  /* ... outras cores ... */
}
```

### Textos

**Headline** - `theme/page-vsl.php`, linha 77:
```php
<h1 class="vsl-headline animate-fade-in-up">
    Faça ela <span class="text-wine-metallic">gozar</span> a noite toda...
</h1>
```

**Quote de Reforço** - `theme/page-vsl.php`, linha 117:
```php
<p class="vsl-quote">
    "Depois disso, nenhuma mulher vai te esquecer, nem te comparar."
</p>
```

**Exit Popup** - `theme/page-vsl.php`, linhas 151-154:
```php
<h2 class="vsl-exit-popup-title">Espere!</h2>
<p class="vsl-exit-popup-description">
    Você ainda não viu o que realmente importa.
</p>
```

### Desativar Cloaking

Para permitir acesso desktop, remova a linha 31 do `theme/page-vsl.php`:

```php
<!-- Remova ou comente esta linha -->
<script src="<?php echo get_template_directory_uri(); ?>/js/cloaking-vsl.js"></script>
```

### Modificar Comportamento do Exit Popup

Edite `theme/js/vsl-alchemy.js`, função `initExitPopup()` (linha ~41).

Para desativar completamente, comente a chamada na linha ~116:
```javascript
// initExitPopup(); // Desativa exit popup
```

## Google Tag Manager

GTM ID integrado: **GTM-PH8RKMDN**

Localizado em:
- Head: `theme/page-vsl.php`, linhas 18-23
- Body: `theme/page-vsl.php`, linhas 37-39

## Tracking de Eventos

Todos os CTAs enviam eventos para o dataLayer:

```javascript
window.dataLayer.push({
  'event': 'cta_click',
  'cta_location': 'hero' | 'floating' | 'exit_popup'
});
```

Configure os eventos no GTM usando:
- **Event Name**: `cta_click`
- **Variable**: `cta_location`

## Suporte

Para modificações mais avançadas, consulte:
- Design original: https://github.com/PedroHenriqueFernande/veiled-alchemy
- Documentação WordPress: https://developer.wordpress.org/themes/

## Changelog

### Versão 1.0 - 2025-11-10
- Implementação inicial do design Veiled Alchemy
- Cloaking desktop/mobile
- Exit popup
- VSL player com thumbnail
- Floating CTA
- Progress bar
- Integração GTM
