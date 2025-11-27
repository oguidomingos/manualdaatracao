# Novos Templates WordPress

Foram criados dois novos templates WordPress baseados nos repositórios GitHub fornecidos:

## 1. Quiz - Profile Unveiled (page-quiz.php)

### Descrição
Um quiz interativo e luxuoso de personalidade com 8 perguntas sobre vida sexual. Design moderno com tema vermelho carmim e preto fosco.

### Como Usar
1. No WordPress Admin, crie uma nova **Página**
2. No editor da página, no painel direito, procure por **"Atributos da Página"** ou **"Template"**
3. Selecione o template **"Quiz - Profile Unveiled"**
4. Publique a página

### Características
- **8 Perguntas** sobre desempenho sexual
- **Tela de Welcome** com GIF animado
- **Loading Screen** com animação
- **Tela de Resultado** com análise do perfil
- **Tela Final** com CTA para as aulas
- **Botão de Voltar** para navegar entre questões
- **Partículas Animadas** no fundo
- **Design Responsivo** (mobile-first)

### Arquivos
- **Template**: `theme/page-quiz.php`
- **CSS**: `theme/css/quiz.css`
- **Assets**: `theme/assets/images/quiz/`
  - `mulher-orgasmo-01.gif`
  - `foto-def.jpg`
  - `tumblr_n9wii1qBD41tx3rsho1_500.gif`

### Cores
- **Carmine Red**: hsl(347, 80%, 50%)
- **Matte Black**: hsl(0, 0%, 10%)
- **Bright Red**: hsl(347, 100%, 60%)
- **Off White**: hsl(0, 0%, 95%)

### Fontes
- **Cinzel**: Títulos (Google Fonts)
- **Inter**: Texto corpo (Google Fonts)

---

## 2. Studio - Landing Page (page-studio.php)

### Descrição
Uma landing page profissional de vendas com múltiplas seções, design elegante e focada em conversão.

### Como Usar
1. No WordPress Admin, crie uma nova **Página**
2. No editor da página, no painel direito, procure por **"Atributos da Página"** ou **"Template"**
3. Selecione o template **"Studio - Landing Page"**
4. Publique a página

### Características
- **Hero Section** com background de imagem e VSL placeholder
- **Storytelling** com texto expansível (Ler mais/menos)
- **Benefits Grid** com 6 benefícios principais
- **Price Section** com oferta destacada
- **CTA Final** com garantia de 7 dias
- **Footer** com links
- **Design Responsivo** (mobile-first)

### Seções
1. **Hero**: Headline principal + VSL + CTA
2. **Storytelling**: Narrativa emocional de uma mulher
3. **Benefits**: 6 cards com benefícios do treinamento
4. **Price**: Oferta com preço destacado (R$ 37,50)
5. **CTA Final**: Último apelo à ação
6. **Footer**: Links e copyright

### Arquivos
- **Template**: `theme/page-studio.php`
- **CSS**: `theme/css/studio.css`
- **Assets**: `theme/assets/images/studio/`
  - `vsl-placeholder.jpg` (ADICIONAR - 720x1280px)

### Cores
- **Primary**: hsl(349, 83.3%, 47.1%) - Vermelho carmim
- **Secondary**: hsl(30, 15%, 12%) - Nude queimado
- **Accent**: hsl(38, 92%, 50%) - Dourado metálico
- **Background**: hsl(240, 10%, 3.9%) - Preto fosco

### Fontes
- **Bebas Neue**: Headlines (Google Fonts)
- **Inter**: Texto corpo (Google Fonts)

---

## Links de Checkout

Ambos os templates usam o mesmo link de checkout da GGCheckout:
```
https://www.ggcheckout.com/checkout/v2/HhApnpmnGgSDg9PeL0JS
```

## Customização

### Para mudar o link de checkout:
Procure por `https://www.ggcheckout.com/checkout/v2/HhApnpmnGgSDg9PeL0JS` nos arquivos PHP e substitua.

### Para mudar cores:
Edite as variáveis CSS em:
- `theme/css/quiz.css` (para o Quiz)
- `theme/css/studio.css` (para o Studio)

### Para adicionar/editar perguntas do Quiz:
Edite o array `questions` no JavaScript dentro de `page-quiz.php` (linha ~47).

### Para adicionar imagens:
- **Quiz**: Adicione em `theme/assets/images/quiz/`
- **Studio**: Adicione em `theme/assets/images/studio/`

## Compatibilidade

✅ WordPress 5.0+
✅ Qualquer tema (standalone templates)
✅ Mobile, Tablet, Desktop
✅ Navegadores modernos (Chrome, Firefox, Safari, Edge)

## Google Tag Manager

Ambos os templates incluem o Google Tag Manager com ID: **GTM-PH8RKMDN**

Para mudar o GTM ID, procure por `GTM-PH8RKMDN` e substitua nos arquivos.

## Suporte

Para dúvidas ou problemas com os templates, verifique:
1. Se os arquivos CSS estão sendo carregados corretamente
2. Se as imagens estão nos diretórios corretos
3. Se o tema WordPress está ativo
4. Se não há conflitos com plugins

## Observações

- Os templates são **standalone** (não dependem do header/footer do tema)
- Incluem seus próprios estilos CSS
- Funcionam independentemente do tema WordPress ativo
- Usam `wp_head()` e `wp_footer()` para compatibilidade com plugins

---

## Estrutura de Arquivos

```
theme/
├── page-quiz.php          # Template do Quiz
├── page-studio.php        # Template do Studio
├── css/
│   ├── quiz.css          # Estilos do Quiz
│   └── studio.css        # Estilos do Studio
└── assets/
    └── images/
        ├── quiz/         # Imagens do Quiz
        │   ├── mulher-orgasmo-01.gif
        │   ├── foto-def.jpg
        │   └── tumblr_n9wii1qBD41tx3rsho1_500.gif
        └── studio/       # Imagens do Studio
            ├── README.md
            └── vsl-placeholder.jpg (ADICIONAR)
```

---

**Data de Criação**: 20 de Novembro de 2025
**Baseado em**:
- profile-unveiled (GitHub)
- studio (GitHub)
