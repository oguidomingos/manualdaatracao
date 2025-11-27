# Guia de Upload e Configuração de Vídeo VSL

## Resumo Rápido

1. Faça upload do vídeo para Vimeo, YouTube ou Wistia
2. Copie o ID do vídeo
3. Configure em `theme/js/vsl-alchemy.js` (linhas 13-20)
4. Pronto!

---

## Opções de Hospedagem de Vídeo

### 🟢 Recomendado: Vimeo

**Por que usar:**
- Sem anúncios
- Privacidade (pode ocultar de buscas)
- Boa qualidade
- Player limpo e profissional

**Como fazer:**

1. Crie conta em https://vimeo.com (plano gratuito ou Plus)
2. Faça upload do vídeo
3. Após o upload, clique no vídeo
4. Na URL, copie o ID: `https://vimeo.com/123456789` → ID é `123456789`
5. Configure em `js/vsl-alchemy.js`:

```javascript
const CONFIG = {
  ctaDelaySeconds: 60,
  videoId: '123456789',  // ← Cole o ID aqui
  videoPlatform: 'vimeo' // ← Mantenha 'vimeo'
};
```

**Configurações de Privacidade no Vimeo:**
- Vá em Settings > Privacy
- Selecione "Hide this video from Vimeo.com"
- Ative "Disable embedding on other sites" se quiser restringir

---

### 🔵 YouTube

**Por que usar:**
- Gratuito e ilimitado
- Boa infraestrutura
- Fácil de usar

**Desvantagens:**
- Pode mostrar vídeos relacionados no final
- Menos controle de privacidade

**Como fazer:**

1. Faça upload em https://youtube.com
2. Após o upload, copie o ID da URL: `https://www.youtube.com/watch?v=ABC123XYZ` → ID é `ABC123XYZ`
3. Configure em `js/vsl-alchemy.js`:

```javascript
const CONFIG = {
  ctaDelaySeconds: 60,
  videoId: 'ABC123XYZ',  // ← Cole o ID aqui
  videoPlatform: 'youtube' // ← Mude para 'youtube'
};
```

**Configurações de Privacidade no YouTube:**
- Defina como "Não listado" (somente quem tem o link pode ver)
- Ou "Privado" se quiser controle total

---

### 🟠 Wistia

**Por que usar:**
- Feito para marketing e vendas
- Analytics avançados
- Ótimo controle de player
- Sem branding de terceiros

**Desvantagens:**
- Plano pago (após limite gratuito)

**Como fazer:**

1. Crie conta em https://wistia.com
2. Faça upload do vídeo
3. Copie o ID do vídeo (aparece na URL ou nas configurações)
4. Configure em `js/vsl-alchemy.js`:

```javascript
const CONFIG = {
  ctaDelaySeconds: 60,
  videoId: 'SEU_ID_WISTIA',  // ← Cole o ID aqui
  videoPlatform: 'wistia' // ← Mude para 'wistia'
};
```

---

### 🟣 Upload Direto no WordPress (Opção Custom)

**Só use se o vídeo for muito curto (< 50MB)**

**Como fazer:**

1. Vá em WordPress Admin → Mídia → Adicionar Nova
2. Faça upload do arquivo de vídeo (.mp4, .webm)
3. Após upload, clique no vídeo e copie a URL completa
4. Configure em `js/vsl-alchemy.js`:

```javascript
const CONFIG = {
  ctaDelaySeconds: 60,
  videoId: 'https://seusite.com/wp-content/uploads/2025/01/seu-video.mp4',  // ← URL completa
  videoPlatform: 'custom' // ← Mude para 'custom'
};
```

**⚠️ IMPORTANTE:** Vídeos grandes podem travar o site! Use hospedagem externa.

---

## Configuração do Tempo do CTA

O botão "Me Transforme em uma Máquina Agora!" aparece após **60 segundos** de vídeo por padrão.

**Para alterar o tempo:**

Edite `theme/js/vsl-alchemy.js`, linha 14:

```javascript
const CONFIG = {
  ctaDelaySeconds: 60,  // ← Mude aqui (em segundos)
  // ...
};
```

**Exemplos:**
- 30 segundos → `ctaDelaySeconds: 30`
- 2 minutos → `ctaDelaySeconds: 120`
- 5 minutos → `ctaDelaySeconds: 300`

---

## Trocar Thumbnail do Vídeo

O thumbnail é a imagem que aparece antes de clicar no play.

**Localização:** `theme/assets/images/vsl/hero-vsl-thumb.jpg`

**Passos:**

1. Crie uma imagem 1920x1080px (ou proporção 16:9)
2. Substitua o arquivo em `theme/assets/images/vsl/hero-vsl-thumb.jpg`
3. Ou renomeie sua imagem e atualize em `page-vsl.php` (linha 73)

---

## Verificar se Está Funcionando

1. Acesse a página VSL no **mobile** (ou use DevTools mobile)
2. Clique no botão play do vídeo
3. O vídeo deve começar a tocar
4. Após 60 segundos, o botão "Me Transforme em uma Máquina Agora!" deve aparecer com fade-in

---

## Troubleshooting

### ❌ Vídeo não carrega

**Solução:**
- Verifique se o `videoId` está correto
- Verifique se o `videoPlatform` está correto ('vimeo', 'youtube', 'wistia', ou 'custom')
- Abra o Console do navegador (F12) e veja se há erros

### ❌ CTA não aparece

**Solução:**
- Verifique se o ID `vsl-main-cta` existe no HTML (`page-vsl.php` linha 97)
- Abra o Console e veja se aparece a mensagem "CTA revelado após X segundos"
- Verifique se o JavaScript está carregando (sem erros no Console)

### ❌ Vídeo do YouTube mostra vídeos relacionados

**Solução:**
- Use parâmetro `&rel=0` na URL (já incluído no código)
- Ou use Vimeo/Wistia para controle total

### ❌ Página não funciona no desktop

**Solução:**
- Isso é esperado! O cloaking bloqueia desktop
- Use DevTools mobile (F12 → ícone mobile) para testar

---

## Configuração Avançada: Monitorar Tempo Real do Vídeo

Por padrão, o CTA aparece após 60 segundos **a partir do clique no play**, mesmo se o usuário pausar o vídeo.

Se quiser que o CTA apareça apenas após **60 segundos REAIS de vídeo assistido** (respeitando pause/play):

### Para Vimeo:

1. Inclua a API do Vimeo no `page-vsl.php` (antes do `</body>`):

```php
<script src="https://player.vimeo.com/api/player.js"></script>
```

2. Em `js/vsl-alchemy.js`, descomente a função `initVideoAPITracking()` (linhas 138-167)

3. Chame a função em `loadVideoPlayer()` (linha 46):

```javascript
function loadVideoPlayer(container, ctaButton) {
  const videoHTML = getVideoEmbedHTML();
  container.innerHTML = videoHTML;

  // Descomente a linha abaixo:
  initVideoAPITracking(ctaButton);
}
```

### Para Vídeo Custom (HTML5):

Siga os mesmos passos acima. O código já está preparado para HTML5 video.

---

## Eventos GTM Disponíveis

O sistema dispara os seguintes eventos para o Google Tag Manager:

1. **`cta_revealed`** - Quando o CTA aparece (após 60 segundos)
   - Variable: `cta_location` = 'hero'

2. **`cta_click`** - Quando usuário clica no CTA
   - Variable: `cta_location` = 'hero'

3. **`exit_intent_shown`** - Quando exit popup aparece

Configure esses eventos no GTM para rastreamento.

---

## Exemplo Completo - Vimeo

```javascript
// theme/js/vsl-alchemy.js - linhas 12-21
const CONFIG = {
  // CTA aparece após 1 minuto
  ctaDelaySeconds: 60,

  // ID do vídeo no Vimeo (exemplo: https://vimeo.com/123456789)
  videoId: '123456789',

  // Plataforma
  videoPlatform: 'vimeo'
};
```

Pronto! Seu vídeo VSL está configurado. 🎉
