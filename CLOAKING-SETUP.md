# 🔒 Sistema de Cloaking - Manual de Configuração

## 📋 O Que Foi Implementado

O sistema de cloaking protege sua landing page com as seguintes regras:

### **Regra 1: Desktop = Bloqueado**
- Todo acesso de desktop é **bloqueado automaticamente**
- A página fica com `display: none`
- Nenhum conteúdo é visível

### **Regra 2: Mobile SEM parâmetro = Bloqueado**
- Mobile sem a URL correta mostra mensagem "Acesso Restrito"
- Ou pode ser configurado para também esconder completamente

### **Regra 3: Mobile COM parâmetro correto = Liberado**
- Somente mobile + URL com parâmetro específico libera acesso
- Exemplo: `https://seusite.com/?key=segredo123`

---

## ⚙️ Configuração

### **1. Alterar Parâmetro de Acesso**

Edite o arquivo: `theme/js/cloaking.js`

Linhas 10-11:

```javascript
// CONFIGURAÇÃO - ALTERE AQUI
const URL_PARAM_NAME = 'key';          // Nome do parâmetro
const URL_PARAM_VALUE = 'segredo123';  // Valor secreto
```

### **Exemplos de Configuração**

#### Opção 1: Parâmetro simples
```javascript
const URL_PARAM_NAME = 'key';
const URL_PARAM_VALUE = 'abc123';
```
**URL de acesso**: `https://seusite.com/?key=abc123`

#### Opção 2: Parâmetro discreto
```javascript
const URL_PARAM_NAME = 'ref';
const URL_PARAM_VALUE = 'vip2024';
```
**URL de acesso**: `https://seusite.com/?ref=vip2024`

#### Opção 3: Parâmetro aleatório
```javascript
const URL_PARAM_NAME = 'utm_source';
const URL_PARAM_VALUE = 'x8k2p9m';
```
**URL de acesso**: `https://seusite.com/?utm_source=x8k2p9m`

---

## 🧪 Como Testar

### **Teste 1: Desktop (deve bloquear)**
1. Abra o site no desktop: `https://seusite.com/`
2. ✅ **Resultado esperado**: Página em branco ou display:none

### **Teste 2: Mobile sem parâmetro (deve bloquear)**
1. Abra no celular: `https://seusite.com/`
2. ✅ **Resultado esperado**: Mensagem "Acesso Restrito"

### **Teste 3: Mobile com parâmetro errado (deve bloquear)**
1. Abra no celular: `https://seusite.com/?key=errado`
2. ✅ **Resultado esperado**: Mensagem "Acesso Restrito"

### **Teste 4: Mobile com parâmetro correto (deve liberar)**
1. Abra no celular: `https://seusite.com/?key=segredo123`
2. ✅ **Resultado esperado**: Landing page completa visível

---

## 🔍 Debug Mode

Para verificar se o cloaking está funcionando, abra o **Console do navegador** (F12 → Console):

```
Cloaking Debug: {
  isMobile: true,
  hasKey: true,
  urlParam: "segredo123",
  expectedValue: "segredo123"
}
```

### **Como interpretar**:

- `isMobile: false` → Desktop detectado
- `isMobile: true` → Mobile detectado
- `hasKey: true` → Parâmetro correto fornecido
- `hasKey: false` → Parâmetro incorreto ou ausente

---

## 🎯 Opções de Bloqueio

### **Opção A: Mensagem de Acesso Negado** (Padrão)

```javascript
// Linha ~67 em cloaking.js
if (mobile && !hasValidKey) {
  console.log('Mobile sem chave válida - Bloqueando acesso');
  showAccessDenied(); // ← Mostra mensagem
  return;
}
```

**Resultado**: Exibe uma página preta com texto "Acesso Restrito"

---

### **Opção B: Esconder Completamente**

```javascript
// Linha ~67 em cloaking.js
if (mobile && !hasValidKey) {
  console.log('Mobile sem chave válida - Bloqueando acesso');
  hideContent(); // ← Esconde tudo (troque showAccessDenied por hideContent)
  return;
}
```

**Resultado**: Página completamente em branco (display:none)

---

## 📱 Detecção de Mobile

O sistema detecta mobile por:

1. **User Agent**: iPhone, Android, iPad, etc.
2. **Largura de tela**: Menor que 768px

### **Dispositivos detectados como mobile**:
- ✅ iPhone
- ✅ iPad
- ✅ Android phones
- ✅ Android tablets
- ✅ Windows Phone
- ✅ Opera Mini
- ✅ Qualquer device com largura < 768px

### **Dispositivos detectados como desktop**:
- ❌ Windows PC
- ❌ Mac
- ❌ Linux desktop
- ❌ Qualquer device com largura > 768px

---

## 🔐 Segurança

### **Limitações do Cloaking Client-Side**

⚠️ **IMPORTANTE**: Este é um cloaking JavaScript (client-side), não server-side.

**Limitações**:
- Usuários técnicos podem desabilitar JavaScript
- Bots/crawlers podem ignorar o JavaScript
- Source code pode ser inspecionado

**Recomendações para mais segurança**:
1. Mudar o parâmetro secreto regularmente
2. Usar valores aleatórios difíceis de adivinhar
3. Combinar com cloaking server-side (PHP/nginx) para proteção total
4. Usar ofuscação de código JavaScript

---

## 🚀 Distribuição de Links

### **Como compartilhar a página**

**Link para tráfego mobile**:
```
https://seusite.com/?key=segredo123
```

**Encurtador de URL (recomendado)**:
```
bit.ly/abc123 → https://seusite.com/?key=segredo123
```

**QR Code**:
- Gere um QR Code apontando para a URL completa
- Mobile escaneando o QR terá acesso direto

---

## 📊 Tracking com Google Tag Manager

### **Eventos Customizados**

Você pode adicionar eventos GTM para rastrear bloqueios:

```javascript
// Adicione no cloaking.js após a linha de console.log

// Desktop bloqueado
if (!mobile) {
  dataLayer.push({
    'event': 'cloaking_blocked',
    'device': 'desktop'
  });
  hideContent();
  return;
}

// Mobile bloqueado
if (mobile && !hasValidKey) {
  dataLayer.push({
    'event': 'cloaking_blocked',
    'device': 'mobile',
    'reason': 'no_key'
  });
  showAccessDenied();
  return;
}

// Acesso liberado
dataLayer.push({
  'event': 'cloaking_allowed',
  'device': 'mobile',
  'key': hasValidKey
});
```

---

## ⚡ Performance

### **Otimizações implementadas**:
- ✅ Script carrega ANTES do wp_head()
- ✅ Executa no DOMContentLoaded
- ✅ Esconde página imediatamente para evitar "flash"
- ✅ Zero dependências externas
- ✅ Tamanho: ~3KB

---

## 🛠️ Troubleshooting

### **Problema 1: Desktop ainda mostra conteúdo**

**Solução**:
1. Limpe o cache do navegador (Ctrl+Shift+Delete)
2. Verifique se o JavaScript está habilitado
3. Abra o Console e procure por erros
4. Confirme que `cloaking.js` está carregando

---

### **Problema 2: Mobile com URL correta não funciona**

**Checklist**:
- [ ] Parâmetro digitado corretamente na URL?
- [ ] Valor é case-sensitive (segredo123 ≠ Segredo123)
- [ ] Verificou o Console para debug?
- [ ] Testou em modo anônimo?

---

### **Problema 3: Tablet é detectado como desktop**

**Solução**:
Alguns tablets grandes são detectados como desktop. Ajuste a linha 32 do `cloaking.js`:

```javascript
// De:
return mobileRegex.test(userAgent.toLowerCase()) || screenWidth <= 768;

// Para:
return mobileRegex.test(userAgent.toLowerCase()) || screenWidth <= 1024;
```

---

## 📝 Checklist de Ativação

Antes de colocar no ar:

- [ ] Parâmetro secreto configurado
- [ ] Testado em desktop (deve bloquear)
- [ ] Testado em mobile sem key (deve bloquear)
- [ ] Testado em mobile com key (deve liberar)
- [ ] GTM instalado e testado
- [ ] Links de divulgação criados
- [ ] Cache do WordPress limpo
- [ ] Cache do CDN limpo (se usar)

---

## 🔄 Manutenção

### **Trocar parâmetro secreto**

Recomendado a cada 30-60 dias:

1. Edite `theme/js/cloaking.js`
2. Mude `URL_PARAM_VALUE` para novo valor
3. Limpe cache do site
4. Atualize os links de divulgação

---

## 📞 Suporte Técnico

### **Logs úteis**

Abra o Console (F12) e procure:
```
Cloaking Debug: { ... }
Desktop detectado - Escondendo conteúdo
Mobile sem chave válida - Bloqueando acesso
Mobile com chave válida - Acesso liberado
```

### **Testar sem cloaking**

Para testar temporariamente SEM cloaking:

1. Renomeie `cloaking.js` para `cloaking.js.bak`
2. Teste a página normalmente
3. Renomeie de volta quando terminar

---

**Implementado em**: 2025-11-08
**Versão**: 1.0.0
**Compatibilidade**: Todos navegadores modernos + IE11+
