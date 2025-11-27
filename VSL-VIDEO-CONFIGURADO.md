# Vídeo VSL Configurado ✅

## ✅ Vídeo Instalado e Configurado

O vídeo **Vsllll.mp4** (73 MB) foi instalado e está 100% configurado.

### Localização do Vídeo

```
/wp-content/uploads/videos/vsl-video.mp4
```

### Configuração Atual

**Arquivo:** `theme/js/vsl-alchemy.js` (linhas 12-21)

```javascript
const CONFIG = {
  ctaDelaySeconds: 60,
  videoId: '/wp-content/uploads/videos/vsl-video.mp4',
  videoPlatform: 'custom'
};
```

---

## 🎯 Como Funciona

1. **Usuário clica no play** → Vídeo começa a tocar (HTML5)
2. **Após 60 segundos REAIS** assistidos → Botão CTA aparece
3. **Se pausar o vídeo** → Timer de CTA pausa também
4. **Se voltar o vídeo** → Timer respeita o tempo real

---

## ⚙️ Rastreamento Inteligente

O sistema usa **HTML5 Video API** para monitorar o tempo real:

- ✅ Respeita pause/play
- ✅ Respeita seek (voltar/avançar)
- ✅ CTA só aparece após 60s realmente assistidos
- ✅ Não usa timer fixo

**Código:** `theme/js/vsl-alchemy.js` linhas 134-176

---

## 🔧 Como Testar

1. Acesse a página VSL no **mobile** (ou DevTools mobile)
2. Clique no play do vídeo
3. Assista por 60 segundos
4. O botão "Me Transforme em uma Máquina Agora!" deve aparecer

### Testar Pause/Play

1. Assista 30 segundos
2. Pause o vídeo
3. Aguarde 5 segundos pausado
4. Continue (play)
5. Assista mais 30 segundos
6. CTA aparece (total: 60s assistidos, não 65s)

---

## ⏱️ Alterar Tempo do CTA

Para mudar de 60 segundos para outro tempo:

**Edite:** `theme/js/vsl-alchemy.js` linha 14

```javascript
const CONFIG = {
  ctaDelaySeconds: 30,  // ← 30 segundos
  // ou
  ctaDelaySeconds: 120, // ← 2 minutos
  // ou
  ctaDelaySeconds: 300, // ← 5 minutos
```

---

## 🎬 Substituir o Vídeo

### Opção 1: Mesmo nome de arquivo

1. Substitua o arquivo em:
   ```
   /wp-content/uploads/videos/vsl-video.mp4
   ```
2. Pronto! Não precisa alterar código

### Opção 2: Nome diferente

1. Faça upload do novo vídeo
2. Anote a URL completa
3. Edite `theme/js/vsl-alchemy.js` linha 17:

```javascript
videoId: '/wp-content/uploads/videos/MEU-NOVO-VIDEO.mp4',
```

---

## 📊 Eventos GTM Disparados

1. **`video_started`** - Quando usuário clica play (console log)
2. **`cta_revealed`** - Quando CTA aparece após 60s
   - Variable: `cta_location` = 'hero'
3. **`cta_click`** - Quando usuário clica no CTA
   - Variable: `cta_location` = 'hero'

---

## 🐛 Troubleshooting

### ❌ Vídeo não carrega

**Solução:**
1. Verifique se o arquivo existe em `/wp-content/uploads/videos/vsl-video.mp4`
2. Teste acessar direto: `https://seusite.com/wp-content/uploads/videos/vsl-video.mp4`
3. Verifique permissões do arquivo (deve ser 644)

### ❌ CTA não aparece

**Solução:**
1. Abra Console do navegador (F12)
2. Procure por: "Rastreamento de vídeo HTML5 iniciado"
3. Aguarde 60 segundos de vídeo
4. Se não aparecer, verifique se `#vsl-main-cta` existe no HTML

### ❌ Vídeo trava ou não toca

**Solução:**
1. Vídeo muito grande (73 MB pode ser pesado em conexões lentas)
2. Considere comprimir o vídeo ou usar Vimeo
3. Teste em conexão rápida primeiro

### ❌ CTA aparece antes de 60 segundos

**Solução:**
1. Limpe cache do navegador
2. Verifique `ctaDelaySeconds` em `js/vsl-alchemy.js`
3. Certifique-se de que não há outro timer rodando

---

## 💡 Dicas de Otimização

### Comprimir o Vídeo

Para melhor performance, comprima o vídeo antes de subir:

**Ferramentas gratuitas:**
- HandBrake: https://handbrake.fr/
- CloudConvert: https://cloudconvert.com/mp4-converter
- FFmpeg (linha de comando)

**Configurações recomendadas:**
- Codec: H.264
- Resolução: 1920x1080 (ou 1280x720 para mobile)
- Bitrate: 2-4 Mbps
- Áudio: AAC, 128 kbps

### Hospedar Externamente

Se o vídeo for maior que 100 MB, considere:
- Vimeo Pro (melhor qualidade, sem ads)
- Wistia (analytics avançados)
- YouTube (gratuito, mas com ads potenciais)

Para mudar para Vimeo/YouTube, consulte `VSL-VIDEO-UPLOAD-GUIDE.md`

---

## 📁 Arquivos Relacionados

```
theme/
├── js/
│   └── vsl-alchemy.js          # Configuração do vídeo
├── page-vsl.php                # Template da página VSL
└── css/
    └── custom-alchemy.css      # Estilos

wp-content/
└── uploads/
    └── videos/
        └── vsl-video.mp4       # Vídeo VSL (73 MB)
```

---

## ✅ Checklist de Verificação

- [x] Vídeo copiado para `/wp-content/uploads/videos/`
- [x] Configuração em `js/vsl-alchemy.js` atualizada
- [x] Rastreamento de tempo real ativado
- [x] CTA configurado para 60 segundos
- [x] Link do checkout configurado: https://pay.cakto.com.br/k829if9_641611
- [x] Gatilho no topo: "Nunca mais veja ela fingir que gostou"
- [x] Cloaking ativo (desktop bloqueado, mobile OK)
- [x] GTM integrado: GTM-PH8RKMDN

---

## 🚀 Próximos Passos

1. **Criar página no WordPress**
   - Páginas > Adicionar Nova
   - Template: "VSL - Veiled Alchemy"
   - Publicar

2. **Testar no mobile**
   - Acessar a URL da página
   - Clicar no play
   - Verificar se vídeo carrega
   - Aguardar 60s e verificar CTA

3. **Otimizar (opcional)**
   - Comprimir vídeo se necessário
   - Ajustar tempo do CTA
   - Personalizar textos

---

**Vídeo pronto para uso! 🎉**
