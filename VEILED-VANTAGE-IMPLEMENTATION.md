# Veiled Vantage - WordPress Theme Implementation

## 📋 Visão Geral

Este documento descreve a implementação completa do layout **Veiled Vantage** (React + Vite) como tema WordPress personalizado para **Manual da Atração**.

### Repositório Original
- **URL**: https://github.com/PedroHenriqueFernande/veiled-vantage.git
- **Stack**: React, TypeScript, Vite, TailwindCSS, shadcn/ui
- **Tipo**: Landing Page de Vendas (VSL - Video Sales Letter)

---

## 🎨 Design System Implementado

### Cores Principais

```css
/* Background */
--background: 0 0% 4%;              /* #0A0A0A */
--foreground: 0 0% 95%;             /* #F2F2F2 */

/* Wine Metallic Gradient */
--wine-metallic-start: 356 87% 19%; /* #8C0A1A */
--wine-metallic-end: 355 69% 41%;   /* #AD4469 */

/* Copper Metallic */
--copper-metallic: 22 55% 51%;      /* #C9723D */

/* Text Colors */
--text-warm: 0 0% 95%;              /* #F2F2F2 */
--text-secondary: 0 0% 77%;         /* #C4C4C4 */

/* Container */
--container-bg: 0 0% 5%;            /* #0D0D0D */
```

### Tipografia

- **Headings**: Space Grotesk (700, 900)
- **Body**: Inter (400-700)
- **Line Height**: 1.75 (body), 1.2 (headings)

### Animações

1. **fade-in**: Entrada suave com translateY
   ```css
   0%   { opacity: 0; transform: translateY(20px); }
   100% { opacity: 1; transform: translateY(0); }
   ```

2. **pulse-glow**: Efeito de brilho pulsante
   ```css
   0%, 100% { box-shadow: 0 0 20px rgba(201, 114, 61, 0.4); }
   50%      { box-shadow: 0 0 40px rgba(201, 114, 61, 0.8); }
   ```

3. **float**: Movimento flutuante
   ```css
   0%, 100% { transform: translateY(0px); }
   50%      { transform: translateY(-20px); }
   ```

4. **parallax**: Scrolling em múltiplas velocidades (0.2 - 0.5)

---

## 📁 Estrutura de Arquivos

```
manualdaatracao/theme/
├── index.php                          # Página principal (standalone)
├── functions.php                      # Enqueue de assets customizados
├── css/
│   └── custom-veiled.css             # CSS completo do design system
├── js/
│   ├── parallax.js                   # Efeito parallax scrolling
│   └── social-proof.js               # Popup de social proof
├── assets/
│   └── images/
│       ├── backgrounds/              # 3 imagens de background
│       │   ├── abstract-glow.jpg
│       │   ├── silhouette-right.jpg
│       │   └── hands-left.jpg
│       ├── content/                  # 6 imagens de conteúdo
│       │   ├── image1.jpg
│       │   ├── image2.jpg
│       │   ├── image3.png
│       │   ├── image4.png
│       │   ├── image5.png
│       │   └── image6.jpg
│       ├── products/                 # 4 imagens de produtos
│       │   ├── psc-bonus.png
│       │   ├── psc-prog1.png
│       │   ├── psc-prog2.png
│       │   └── psc-prog3.png
│       ├── logo.png
│       └── program.png
└── template-parts/
    └── tsl-content.php               # Conteúdo completo da carta de vendas
```

---

## ✨ Funcionalidades Implementadas

### 1. Parallax Scrolling

**Arquivo**: `js/parallax.js`

- Múltiplas velocidades de scroll (data-speed attribute)
- Performance otimizada com passive event listeners
- Afeta backgrounds e imagens flutuantes

**Uso**:
```html
<div class="parallax-image" data-speed="0.3">...</div>
```

### 2. Social Proof Notifications

**Arquivo**: `js/social-proof.js`

- Popup de compras recentes
- Nomes e localizações brasileiras randomizadas
- Timing: primeira em 10s, depois a cada 15-25s
- Animação suave de entrada/saída

**Nomes**:
- João P., Lucas M., Pedro R., Rafael G., Bruno A., etc.

**Localizações**:
- São Paulo, Rio de Janeiro, Belo Horizonte, Salvador, etc.

### 3. Background Images com Efeitos

**Três camadas de backgrounds**:

1. **Abstract Glow** (topo)
   - Speed: 0.3
   - Opacity: 0.3
   - Blur: 4px
   - Mask: linear-gradient fade

2. **Silhouette Right** (lateral direita)
   - Speed: 0.5
   - Opacity: 0.4
   - Blur: 12px
   - Animation: float (infinite)

3. **Hands Left** (lateral esquerda)
   - Speed: 0.4
   - Opacity: 0.5
   - Blur: 4px
   - Animation: float (3s delay)

### 4. Floating Program Images

**Quatro imagens flutuantes**:
- psc-prog1 (20%, esquerda, speed: 0.2)
- psc-prog2 (45%, direita, speed: 0.35)
- psc-prog3 (70%, esquerda, speed: 0.25)
- psc-bonus (95%, direita, speed: 0.4)

Ocultas em mobile/tablet (<1024px)

### 5. Main Content Container

**Características**:
- Background: rgba(12, 12, 12, 0.85)
- Backdrop blur: 8px (glassmorphism)
- Box shadow: 0 20px 60px rgba(0, 0, 0, 0.4)
- Max-width: 56rem (896px)
- Padding responsivo: 2rem (mobile) → 4rem (desktop)

### 6. CTA Button

**Efeitos**:
- Gradient inicial: Wine metallic (356° → 355°)
- Hover gradient: Copper → Wine
- Animation: pulse-glow (infinite)
- Transform: scale(1.05) on hover
- Border-radius: 9999px (full rounded)

**Link**: https://pornstarcoaching.com/checkout/checkout-re.php

---

## 📝 Conteúdo TSL (Template Sales Letter)

### Estrutura

O arquivo `template-parts/tsl-content.php` contém:

1. **Introdução** (Katie Morgan)
2. **Problema Principal** (homens não sabem tocar mulheres)
3. **3 Segredos sobre Mulheres**
   - Segredo #1: Nunca vão te falar se você é ruim
   - Segredo #2: Se você faz ela gozar, ela nunca te deixa
   - Segredo #3: Ela fica viciada em você
4. **Depoimentos** (3 testimonials em cards)
5. **Apresentação do Programa** (Treinamento de Pegação)
6. **Lista de Benefícios** (11 itens com strong highlights)
7. **CTA Final** (escolha entre continuar igual ou mudar)

### Elementos Estilizados

- **Highlight boxes**: Background wine + border-left
- **Testimonials**: Card com backdrop blur + border sutil
- **Secret boxes**: Gradient background + títulos copper
- **Imagens**: Max-width 28rem, centered, rounded, shadow

---

## 📱 Responsividade

### Breakpoints

```css
/* Mobile First */
@media (max-width: 768px) {
  .hero-title { font-size: 1.5rem; }
  .content-card { padding: 2rem 1rem; }
  .cta-button { font-size: 1rem; padding: 1.5rem 2rem; }
  .logo-container img { width: 12rem; }
}

/* Desktop */
@media (min-width: 768px) {
  .content-card { padding: 4rem; }
  .hero-title { font-size: 2.25rem; }
}

/* Hide decorative elements on mobile/tablet */
@media (max-width: 1024px) {
  .bg-silhouette-right,
  .bg-hands-left,
  .floating-programs { display: none; }
}
```

---

## 🚀 Como Ativar o Tema

### 1. Verificar Estrutura

```bash
wp-content/themes/manualdaatracao/theme/
```

### 2. Ativar no WordPress

```bash
# Via WP-CLI
wp theme activate manualdaatracao

# Ou via Dashboard: Aparência > Temas > Ativar
```

### 3. Verificar Assets Carregados

Inspecionar elemento e verificar:
- ✅ `custom-veiled.css` carregado
- ✅ `parallax.js` carregado
- ✅ `social-proof.js` carregado
- ✅ Fontes Google (Space Grotesk + Inter)

### 4. Testar Funcionalidades

- [ ] Parallax funciona ao scrollar
- [ ] Social proof popup aparece após 10s
- [ ] CTA button redireciona corretamente
- [ ] Imagens de background visíveis
- [ ] Responsivo em mobile/tablet/desktop

---

## 🎯 Diferenças React vs WordPress

### O que foi adaptado:

1. **Routing**:
   - React: `react-router-dom`
   - WordPress: Página única (index.php standalone)

2. **State Management**:
   - React: `useState`, `useEffect`
   - WordPress: Vanilla JavaScript com closures

3. **Components**:
   - React: TSX components
   - WordPress: PHP template parts

4. **Styling**:
   - React: Inline styles + Tailwind classes
   - WordPress: CSS classes customizadas

5. **Image Loading**:
   - React: `import` + public folder
   - WordPress: `get_template_directory_uri()`

### O que permaneceu idêntico:

✅ Design System (cores, tipografia, espaçamentos)
✅ Animações CSS
✅ Estrutura HTML
✅ Conteúdo TSL completo
✅ Efeitos visuais (parallax, glassmorphism, etc)
✅ Responsividade

---

## 🔧 Manutenção e Customização

### Alterar CTA URL

**Arquivo**: `theme/index.php`
**Linha**: ~102

```php
<a href="SEU_NOVO_URL_AQUI" class="cta-button">
```

### Alterar Cores

**Arquivo**: `theme/css/custom-veiled.css`
**Seção**: `:root` variables (linhas 12-35)

### Adicionar/Remover Conteúdo TSL

**Arquivo**: `theme/template-parts/tsl-content.php`

### Modificar Social Proof

**Arquivo**: `theme/js/social-proof.js`
**Linhas**: 8-25 (nomes e localizações)

### Ajustar Parallax Speeds

**Arquivo**: `theme/index.php`
**Atributo**: `data-speed` em cada `.parallax-image`

---

## 📊 Performance

### Otimizações Implementadas

- ✅ Passive scroll listeners
- ✅ CSS animations (GPU accelerated)
- ✅ Lazy background images
- ✅ Minified assets (via versioning)
- ✅ Webfonts preconnect
- ✅ Responsive images

### Métricas Esperadas

- **LCP**: < 2.5s
- **FID**: < 100ms
- **CLS**: < 0.1
- **Page Size**: ~2.5MB (imagens incluídas)

---

## 🐛 Troubleshooting

### CSS não carrega

```bash
# Verificar caminho
echo get_template_directory_uri() . '/css/custom-veiled.css';

# Limpar cache
wp cache flush
```

### Parallax não funciona

```javascript
// Verificar console para erros
// Certificar que .parallax-image existe no DOM
console.log(document.querySelectorAll('.parallax-image').length);
```

### Imagens não aparecem

```bash
# Verificar permissões
chmod 755 theme/assets/images/ -R

# Verificar caminhos
ls -la theme/assets/images/backgrounds/
```

### Social Proof não aparece

```javascript
// Aguardar 10 segundos
// Verificar console do navegador
// Confirmar que social-proof.js foi carregado
```

---

## ✅ Checklist Final

- [x] Repository clonado
- [x] Análise completa da estrutura
- [x] 16 imagens copiadas
- [x] CSS custom implementado
- [x] JavaScript parallax criado
- [x] JavaScript social proof criado
- [x] index.php reescrito
- [x] template-parts/tsl-content.php criado
- [x] functions.php atualizado
- [x] Design system 100% fiel
- [x] Responsividade completa
- [x] Documentação criada

---

## 📞 Suporte

Para dúvidas ou problemas:

1. Verificar este documento primeiro
2. Inspecionar console do navegador
3. Testar em modo incógnito (sem cache)
4. Verificar compatibilidade de plugins WordPress

---

**Data da Implementação**: 2025-11-08
**Versão**: 1.0.0
**Autor**: Claude Code
**Stack**: WordPress + CSS Vanilla + JavaScript ES6
