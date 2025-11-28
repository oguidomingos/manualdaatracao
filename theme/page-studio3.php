<?php
/**
 * Template Name: Studio 3 - Long Form Sales Page
 * Template Post Type: page
 *
 * Landing page focada em copy longa e storytelling (Versão 3).
 */

// Load WhatsApp notification system
require_once get_template_directory() . '/inc/whatsapp-notification.php';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segredos dos Atores - Domínio Masculino</title>
    
    <!-- DNS Prefetch for external resources -->
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//cdn.tailwindcss.com">

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PH8RKMDN');</script>
    <!-- End Google Tag Manager -->

    <!-- Facebook Cloaking Script -->
    <script>
        (function () {
            // Função para verificar se é tráfego do Facebook
            function isFacebookTraffic() {
                const referrer = document.referrer.toLowerCase();
                const urlParams = new URLSearchParams(window.location.search);

                // Verifica referrer do Facebook
                const facebookDomains = [
                    'facebook.com',
                    'fb.com',
                    'fbclid',
                    'm.facebook.com',
                    'l.facebook.com',
                    'lm.facebook.com'
                ];

                const hasFacebookReferrer = facebookDomains.some(domain => referrer.includes(domain));

                // Verifica parâmetros UTM ou fbclid
                const hasFacebookParams = urlParams.has('fbclid') ||
                    (urlParams.get('utm_source') === 'facebook') ||
                    (urlParams.get('utm_source') === 'fb');

                return hasFacebookReferrer || hasFacebookParams;
            }

            // Se não for tráfego do Facebook, redireciona ou mostra página alternativa
            if (!isFacebookTraffic()) {
                // Opção 1: Redirecionar para outra página
                // window.location.href = 'https://manualdaatracao.digital';

                // Opção 2: Mostrar mensagem e esconder conteúdo
                document.addEventListener('DOMContentLoaded', function () {
                    document.body.innerHTML = '<div style="display:flex;align-items:center;justify-content:center;min-height:100vh;background:#050505;color:#fff;font-family:sans-serif;text-align:center;padding:20px;"><div><h1 style="font-size:2rem;margin-bottom:1rem;">Acesso Restrito</h1><p style="color:#999;">Esta página está disponível apenas através de anúncios autorizados.</p></div></div>';
                });
            }
        })();
    </script>
    <!-- End Facebook Cloaking -->

    <!-- Fonts - Optimized -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Preconnect for external resources -->
    <link rel="preconnect" href="https://images.unsplash.com">
    <link rel="preconnect" href="https://i.pravatar.cc">
    <link rel="preconnect" href="https://manualdaatracao.digital">
    <link
        href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap"
        rel="stylesheet">
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" as="style">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
    </noscript>

    <!-- Preload Hero Background Image for LCP -->
    <link rel="preload" as="image" href="https://images.unsplash.com/photo-1592399668789-6432393d5761?q=80&w=1740&auto=format&fit=crop" fetchpriority="high">

    <?php wp_head(); ?>

    <!-- Studio Carousel CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/studio-carousel.css">

    <!-- Tailwind CDN - Deferred -->
    <script src="https://cdn.tailwindcss.com" defer></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            gold: '#D4AF37',
                            dark: '#050505',
                            gray: '#1a1a1a',
                            red: '#8B0000',
                        }
                    },
                    backgroundImage: {
                        'gold-gradient': 'linear-gradient(to right, #bf953f, #fcf6ba, #b38728, #fbf5b7, #aa771c)',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #050505;
            color: #e5e5e5;
        }
        .text-neutral-300 {
            color: rgb(212 212 212);
        }
        .text-brand-red {
            color: #8B0000;
            animation: none !important;
        }
        .no-pulse {
            animation: none !important;
        }

        .gold-text {
            background: linear-gradient(135deg, #FFD700 0%, #FDB931 25%, #FFD700 50%, #FFFFFF 66%, #FFED4E 75%, #FDB931 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
            background-size: 200% auto;
        }

        .overheadline {
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: normal;
        }

        .headline {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 900;
            line-height: 1.2;
            letter-spacing: -0.02em;
            font-family: 'Staatliches', sans-serif;
        }

        .font-headline {
            font-family: 'Staatliches', sans-serif !important;
            font-weight: 900 !important;
        }

        .subheadline {
            font-size: clamp(1rem, 2.5vw, 1.25rem);
            font-weight: 300;
            line-height: 1.6;
            color: #d1d5db;
        }

        .btn-premium {
            background: linear-gradient(135deg, #FFD700 0%, #FDB931 50%, #FFD700 100%);
            background-size: 200% auto;
            transition: all 0.5s ease;
            color: #000;
            font-weight: 800;
            text-transform: uppercase;
            box-shadow: 0 0 30px rgba(255, 215, 0, 0.5);
            position: relative;
            overflow: hidden;
            will-change: transform, background-position, box-shadow;
        }

        .btn-premium::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
            will-change: left;
        }

        .btn-premium:hover {
            background-position: right center;
            transform: scale(1.05);
            box-shadow: 0 0 50px rgba(255, 215, 0, 0.8);
        }

        .btn-premium:hover::before {
            left: 100%;
        }

        /* Typography for Long Copy */
        .prose-premium p {
            margin-bottom: 1.5rem;
            line-height: 1.8;
            font-size: 1.125rem;
            color: #d1d5db;
        }

        .prose-premium strong {
            color: white;
            font-weight: 700;
        }

        .section-divider {
            height: 1px;
            background: linear-gradient(to right, transparent, rgba(255, 215, 0, 0.3), transparent);
            margin: 3rem 0;
        }

        .section-title {
            font-size: clamp(1.75rem, 4vw, 2.5rem);
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 1rem;
        }

        .card-premium {
            background: linear-gradient(135deg, rgba(26, 26, 26, 0.8) 0%, rgba(10, 10, 10, 0.9) 100%);
            border: 1px solid rgba(255, 215, 0, 0.2);
            transition: all 0.3s ease;
            will-change: transform, border-color;
            contain: layout style paint;
        }

        .card-premium:hover {
            border-color: rgba(255, 215, 0, 0.5);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 215, 0, 0.1);
        }

        /* Force text centering across sections */
        body, section, .prose-premium, .lesson-content, .bonus-mega-section, .veiled-carousel-track {
            text-align: center !important;
        }

        .lesson-content .lesson-meta,
        .lesson-content h3,
        .lesson-content p,
        .bonus-mega-section * {
            text-align: center !important;
        }

        /* Bonus cards: allow full text */
        .bonus-card {
            min-height: 500px;
            height: auto !important;
            display: flex !important;
            flex-direction: column;
            justify-content: flex-end;
        }

        .bonus-card .lesson-description {
            white-space: normal;
            overflow: visible;
            display: block;
            opacity: 1 !important;
            visibility: visible !important;
            color: #d1d5db !important;
        }

        .bonus-card .lesson-content {
            padding: 16px;
            position: absolute !important;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: 10;
            background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.85) 50%, rgba(0,0,0,0.4) 100%);
            min-height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        /* Spacing tweak for lessons carousel + label */
        .pricing-modules .veiled-carousel {
            margin-bottom: 10px;
        }

        .pricing-modules .text-yellow-400 {
            margin-top: 6px !important;
            margin-bottom: 10px !important;
        }

        .popular-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 8px 14px;
            border: 1px solid rgba(255, 215, 0, 0.6);
            border-radius: 999px;
            background: #FFD700;
            color: #000000;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            box-shadow: 0 0 18px rgba(255, 215, 0, 0.25);
            position: absolute !important;
            top: 0 !important;
            left: 50% !important;
            transform: translate(-50%, -50%) !important;
            z-index: 20;
            width: max-content;
            margin: 0;
        }

        .real-images-text {
            position: absolute;
            bottom: -35px;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 15;
            pointer-events: none;
            color: #facc15; /* text-yellow-400 */
            font-weight: 700;
            font-size: 0.9rem;
        }

        /* CTA modal */
        .cta-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.85);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            padding: 1.5rem;
        }

        .cta-overlay.active {
            display: flex;
        }

        .cta-overlay .cta-box {
            max-width: 620px;
            width: 100%;
            background: linear-gradient(135deg, rgba(26, 26, 26, 0.95), rgba(10, 10, 10, 0.95));
            border: 1px solid rgba(255, 215, 0, 0.5);
            box-shadow: 0 0 40px rgba(255, 215, 0, 0.15);
            border-radius: 20px;
            padding: 28px;
            text-align: center;
        }

        .cta-overlay h3 {
            color: #FFD700;
            font-size: 1.5rem;
            margin-bottom: 0.75rem;
            font-weight: 800;
        }

        .cta-overlay p {
            color: #e5e5e5;
            margin-bottom: 1.25rem;
        }

        .cta-overlay .benefits {
            list-style: none;
            padding: 0;
            margin: 0 0 1.25rem 0;
            text-align: left;
        }

        .cta-overlay .benefits li {
            color: #e5e5e5;
            margin-bottom: 0.6rem;
            display: flex;
            gap: 8px;
            align-items: flex-start;
        }

        .cta-overlay .benefits li::before {
            content: "✓";
            color: #FFD700;
            margin-top: 1px;
            font-weight: 800;
        }

        .cta-overlay .actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-overlay .actions a,
        .cta-overlay .actions button {
            padding: 14px 18px;
            border-radius: 999px;
            font-weight: 700;
            border: none;
            cursor: pointer;
        }

        .cta-overlay .actions .primary {
            background: linear-gradient(135deg, #FFD700 0%, #FDB931 50%, #FFD700 100%);
            color: #000;
            box-shadow: 0 0 30px rgba(255, 215, 0, 0.4);
        }

        .cta-overlay .actions .ghost {
            background: transparent;
            color: #e5e5e5;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .cta-overlay .line-through {
            text-decoration: line-through;
            text-decoration-color: currentColor;
            text-decoration-thickness: 2px;
        }

        .cta-overlay .price-green {
            color: #22c55e;
            display: inline-block;
            animation: priceFloat 3s ease-in-out infinite;
        }

        @keyframes priceFloat {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-4px);
            }
        }

        /* Slow pulse for popular plan label */
        .animate-pulse-scale-slow {
            animation: pulse-scale 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        /* Infinite Carousel Animations */
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes scroll-reverse {
            0% {
                transform: translateX(-50%);
            }

            100% {
                transform: translateX(0);
            }
        }

        .animate-scroll {
            animation: scroll 30s linear infinite;
        }

        .animate-scroll-reverse {
            animation: scroll-reverse 30s linear infinite;
        }

        .carousel-container {
            position: relative;
        }

        .carousel-track:hover {
            animation-play-state: paused;
        }

        /* Mobile-only visibility - hide on desktop */
        @media (min-width: 768px) {
            body {
                display: none !important;
            }
        }

        /* Performance optimizations */
        section {
            content-visibility: auto;
            contain-intrinsic-size: auto 500px;
        }

        img {
            content-visibility: auto;
        }

        @keyframes pulse-scale {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        .animate-pulse-scale {
            animation: pulse-scale 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>
</head>

<body <?php body_class('antialiased overflow-x-hidden'); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH8RKMDN" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- 1. HERO SECTION -->
    <section
        class="relative min-h-[80vh] flex flex-col items-center justify-center pt-10 pb-4 px-4 text-center bg-brand-dark bg-[url('https://images.unsplash.com/photo-1592399668789-6432393d5761?q=80&w=1740&auto=format&fit=crop')] bg-cover bg-center bg-no-repeat bg-fixed">
        <div class="absolute inset-0 bg-black/90"></div>

        <div class="relative z-10 max-w-4xl mx-auto w-full">
            <!-- Headline -->
            <h1 class="text-4xl md:text-5xl mx-2 lg:text-6xl font-bold tracking-tight leading-tight mb-6 text-white uppercase font-headline">
                <span class="gold-text">Aprenda a transar como um homem verdade e</span> <span class="text-brand-red no-pulse" style="display: inline-block;">nunca mais seja esquecido por uma mulher.</span>
            </h1>

            <!-- Subheadline -->
            <p class="text-base md:text-xl text-gray-300 mx-4 font-light max-w-3xl mx-auto mb-10">
                Por menos de R$10, você vai assistir 15 aulas com atores pornô mostrando, na prática, técnicas que realmente faz uma mulher <span class="text-brand-red">gozar de verdade</span>, sem fingimento, sem frescura. Vamos admitir aqui, você sabe que pode muito mais... essa é sua chance de virar uma verdadeira <span class="text-brand-red">máquina do sexo</span>.
            </p>

            <div class="mb-4">
                <div class="btn-premium inline-block py-2 px-6 rounded-full text-sm">
                    Acesso imediato
                </div>
            </div>

            <!-- Hero Video (moved up from results section) -->
            <div
                class="w-full max-w-md mx-auto aspect-[9/16] bg-black rounded-2xl border border-yellow-800 shadow-2xl mb-10 overflow-hidden">
                <video id="vsl-video" class="w-full h-full object-cover cursor-pointer" preload="metadata" poster=""
                    onclick="this.paused ? this.play() : this.pause()" playsinline>
                    <source src="https://manualdaatracao.digital/wp-content/uploads/2025/11/11261.mov" type="video/mp4">
                    Seu navegador não suporta a reprodução de vídeos.
                </video>
            </div>

            <!-- CTA -->
            <div class="flex flex-col items-center gap-6 w-full px-4">
                <a href="#checkout"
                    class="btn-premium inline-block py-5 px-6 md:px-10 rounded-full text-xl md:text-2xl tracking-wide w-full md:w-auto md:min-w-[320px] animate-pulse text-center">
                    QUERO OS SEGREDOS
                </a>

                <!-- Reviews Widget -->
                <div
                    class="flex items-center gap-3 bg-gray-900/80 backdrop-blur px-6 py-3 rounded-full border border-gray-700">
                    <!-- Profile Images -->
                    <div class="flex -space-x-2">
                        <img src="https://i.pravatar.cc/40?img=51" alt="User 1"
                            class="w-8 h-8 rounded-full border-2 border-gray-900" width="32" height="32" loading="lazy">
                        <img src="https://i.pravatar.cc/40?img=52" alt="User 2"
                            class="w-8 h-8 rounded-full border-2 border-gray-900" width="32" height="32" loading="lazy">
                        <img src="https://i.pravatar.cc/40?img=53" alt="User 3"
                            class="w-8 h-8 rounded-full border-2 border-gray-900" width="32" height="32" loading="lazy">
                        <img src="https://i.pravatar.cc/40?img=54" alt="User 4"
                            class="w-8 h-8 rounded-full border-2 border-gray-900" width="32" height="32" loading="lazy">
                        <img src="https://i.pravatar.cc/40?img=55" alt="User 5"
                            class="w-8 h-8 rounded-full border-2 border-gray-900" width="32" height="32" loading="lazy">
                    </div>
                    <!-- Stars and Text -->
                    <div class="flex flex-col">
                        <div class="flex text-brand-gold text-xs">★★★★★</div>
                        <span class="text-gray-400 text-xs font-medium">+ 6.879 homens</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- 2. STORYTELLING 1 -->
    <section class="py-16 px-4 bg-black">
        <div class="max-w-3xl mx-auto">
            <!-- Image Placeholder -->
            <div class="w-full max-w-3xl mx-auto flex items-center justify-center mb-10">
                <div
                    class="bg-gray-900 rounded-xl border border-yellow-800 flex items-center justify-center overflow-hidden">
                    <img src="https://manualdaatracao.digital/wp-content/uploads/2025/11/aura.png"
                        alt="Storytelling Image" class="w-auto h-75 max-w-full object-contain opacity-90 rounded-xl"
                        loading="lazy" decoding="async">
                </div>
            </div>

            <div class="prose-premium text-left mx-4">
                <p><span class="gold-text font-bold">Essas técnicas são tão poderosas, que te dão uma <strong>“vantagem
                            injusta”</strong> sobre qualquer
                        mulher na cama.</span> Já vou te avisando, se você não quer mulher rastejando atrás de você e
                    ser um
                    verdadeiro imã de buceta é melhor nem aprender essas técnicas.</p>

                <p><span class="text-white font-bold">Chega de passar vergonha na cama, ou de ficar com aquela dúvida se
                        “foi bom”.</span>
                    Ela nunca mais vai ficar inventando desculpas, evitando, apressando ou escondendo que não está
                    satisfeita.</p>

                <p><span class="text-white font-bold">Tudo que você aprendeu até hoje sobre sexo fez você se
                        tornar um
                        cara comum, desde os pornô que você
                        assistiu até aqueles conselhos que todo homem escuta.</span> Nada disso vai te ajudar,
                    eu já
                    escutei relatos de milhares de homens e
                    tudo
                    <span class="gold-text font-bold">o que você precisa são essas técnicas secretas que os
                        atores do
                        mundo inteiro
                        usam.</span>
                </p>
            </div>
        </div>
    </section>

    <!-- 3. STORYTELLING 2 (CLOSING) -->
    <section class="py-16 px-4 bg-gray-900 border-y border-gray-800">
        <div class="max-w-3xl mx-auto">

            <div class="text-center mb-10">
                <p class="overheadline gold-text tracking-tighter mb-3 text-sm mx-6 normal-case  ">
                    Se está decepcionando na hora de comer ela, ou acha que poderia fazer muito melhor….
                </p>
                <h2 class="headline text-white">
                    Eu vou te contar um segredo, que as <span class="gold-text">mulheres nunca te contam</span>
                </h2>
            </div>

            <!-- Image Placeholder -->
            <div class="w-full max-w-3xl mx-auto flex items-center justify-center mb-10">
                <div
                    class="bg-gray-900 rounded-xl border border-yellow-800 flex items-center justify-center overflow-hidden">
                    <img src="https://manualdaatracao.digital/wp-content/uploads/2025/11/edwmy4rn61rm80ctqr6930nzyg.png"
                        alt="Secret Image" class="w-auto h-75 max-w-full object-contain opacity-90 rounded-xl"
                        loading="lazy" decoding="async">
                </div>
            </div>

            <div class="prose-premium text-left mx-4">
                <p>Durante muito tempo eu vi mulheres comentando entre si sobre os <span
                        class="gold-text font-bold">homens que marcaram elas na cama</span>: os
                    poucos <span class="gold-text font-bold">que fizeram elas perder o controle, querer repetir,
                        procurar de novo.</span></p>

                <p>E vi também como elas falavam dos outros: não entregaram nada, os que elas evitaram depois, os que
                    nunca chegaram perto de fazer elas terminar de verdade.</p>

                <p><span class="gold-text font-bold">A maioria de vocês não faz ideia da diferença brutal que existe
                        entre um homem comum e um homem marcante na cama.</span></p>

                <div class="card-premium p-6 rounded-lg border-l-4 border-yellow-500 my-8">
                    <p class="mb-0 font-medium text-white">E antes que você ache que "tá tudo certo", deixa eu te jogar
                        a verdade na cara:</p>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex gap-3 text-gray-300"><span class="text-yellow-400 font-bold text-xl">✕</span> Se ela
                        não voltou
                        querendo mais, você não foi memorável.</li>
                    <li class="flex gap-3 text-gray-300"><span class="text-yellow-400 font-bold text-xl">✕</span> Se ela
                        não buscou
                        de novo, você não entregou o que ela esperava.</li>
                    <li class="flex gap-3 text-gray-300"><span class="text-yellow-400 font-bold text-xl">✕</span> Se
                        você
                        nunca
                        soube se ela realmente terminou, você não fez o suficiente.</li>
                </ul>

                <p><span class="gold-text font-bold">É porque você nunca aprendeu a sequência certa.<br>
                        Nunca aprendeu como o corpo e a mente dela realmente funcionam.<br>
                        Nunca aprendeu o que faz ela querer você, de verdade.</span></p>

                <p>As mulheres sabem quando o homem não entende sequência, ritmo, progressão, intensidade.<br>
                    Sabem quando você está perdido, acelerado demais, lento demais ou simplesmente sem noção do que está
                    fazendo.</p>

                <p class="text-xl font-bold text-white mt-8">Mas isso muda hoje.</p>

                <div class="mt-10 text-center w-full px-4">
                    <a href="#checkout-final"
                        class="btn-premium inline-block py-5 px-6 md:px-10 rounded-full text-xl tracking-wide w-full md:w-auto md:min-w-[320px] text-center">
                        QUERO AS TÉCNICAS SECRETAS
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. THE METHOD -->
    <section class="py-16 px-4 bg-black">
        <div class="max-w-3xl prose-premium mx-4">
            <p><span class="gold-text font-bold">Existe um método, real, direto, masculino, que ativa exatamente o que
                    o corpo feminino espera.</span><br>
                <span class="text-white font-bold">Segredos que os atores usam para despertar interesse, conexão e
                    vontade.</span><br>
                Isso é o que faz ela te procurar, querer repetir e lembrar do que vocês viveram.
            </p>

            <p>Essas técnicas reorganizam tudo o que você faz de forma instintiva, mas do jeito certo:<br>
                na ordem certa, com o ritmo certo, com o estímulo certo,<br>
                e <span class="gold-text font-bold">faz ela responder de um jeito que você nunca viu antes.</span></p>

            <div class="my-10 p-8 card-premium rounded-xl text-center">
                <p class="text-lg font-bold text-white mb-6">E eu vou te dizer uma coisa com toda clareza:</p>
                <h3 class="headline gold-text mb-6">Quando você aprende isso tudo muda.</h3>

                <div class="space-y-4 text-left max-w-md mx-auto">
                    <div class="flex items-center gap-3 text-base">
                        <span class="text-gray-300">Você deixa de insistir…</span>
                        <span class="text-yellow-400 font-bold text-right">e começa a ser procurado.</span>
                    </div>
                    <div class="flex items-center gap-3 text-base">
                        <span class="text-gray-300">Deixa de tentar convencer…</span>
                        <span class="text-yellow-400 font-bold text-right">e começa a ser desejado.</span>
                    </div>
                    <div class="flex items-center gap-3 text-base">
                        <span class="text-gray-300">Deixa de "ver no que dá"…</span>
                        <span class="text-yellow-400 font-bold text-right">e começa a dominar o momento.</span>
                    </div>
                </div>
            </div>
            <div class="my-10 p-8 card-premium rounded-xl text-center">
                <p class="text-lg font-bold text-white mb-6">E é exatamente isso que o treinamento que você vai conhecer
                    hoje faz com você.</p>

                <p>Ele te ensina o que nenhum homem foi ensinado:<br>
                    <span class="gold-text font-bold">como conduzir, como gerar resposta, como aumentar
                        desejo</span><br>
                    e como entregar uma experiência que faz qualquer mulher querer voltar,<br>
                    e não te esquecer.
                </p>

                <p><span class="gold-text font-bold">Menos de 2% dos homens têm acesso a esse nível de
                        conhecimento.</span><br>
                    Mas a partir de agora, você pode estar entre eles.</p>

                <p>E quando você estiver…<br>
                    você nunca mais vai precisar pedir nada.<br>
                    <span class="gold-text font-bold">Porque ela vai querer.</span>
                </p>
            </div>

            <div class="text-center mt-12 w-full px-4">
                <a href="#checkout"
                    class="btn-premium inline-block py-5 px-6 md:px-10 rounded-full text-xl tracking-wide w-full md:w-auto md:min-w-[320px] text-center">
                    QUERO AS TÉCNICAS SECRETAS
                </a>
            </div>
        </div>
    </section>

    <!-- 5. VSL / SOCIAL PROOF -->
    <section id="vsl-section" class="py-20 px-4 bg-gray-900 border-t border-gray-800">
        <div class="max-w-4xl mx-4 text-center">
            <p class="overheadline text-brand-gold mb-2">+ de 5 mil homens usam essas técnicas</p>
            <h2 class="headline text-white mb-10">Os resultados falam por si…</h2>



            <!-- VSL Video -->
            <div class="grid md:grid-cols-3 gap-6 text-left mb-12">
                <!-- Testimonial 1 -->
                <div
                    class="group relative overflow-hidden rounded-2xl border-2 border-gray-800 hover:border-brand-gold/50 transition-all duration-500 shadow-xl hover:shadow-2xl hover:scale-105">
                    <img src="https://manualdaatracao.digital/wp-content/uploads/2025/11/social-proof-1.jpeg"
                        alt="Depoimento 1" class="w-full h-auto object-cover" loading="lazy" decoding="async">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity">
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div
                    class="group relative overflow-hidden rounded-2xl border-2 border-gray-800 hover:border-brand-gold/50 transition-all duration-500 shadow-xl hover:shadow-2xl hover:scale-105">
                    <img src="https://manualdaatracao.digital/wp-content/uploads/2025/11/social-proof-2.jpeg"
                        alt="Depoimento 2" class="w-full h-auto object-cover" loading="lazy" decoding="async">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity">
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div
                    class="group relative overflow-hidden rounded-2xl border-2 border-gray-800 hover:border-brand-gold/50 transition-all duration-500 shadow-xl hover:shadow-2xl hover:scale-105">
                    <img src="https://manualdaatracao.digital/wp-content/uploads/2025/11/social-proof-3.jpeg"
                        alt="Depoimento 3" class="w-full h-auto object-cover" loading="lazy" decoding="async">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity">
                    </div>
                </div>
            </div>

            <p class="mt-12 text-xl text-gray-300 max-w-3xl mx-auto mb-8">
                <span class="gold-text font-bold">Você só precisa assistir algumas aulas para que na primeira
                    oportunidade você vire uma besta na cama.</span>
                Esses segredos vão garantir tanto prazer pra ela que <span class="text-white font-bold">é impossível ela
                    não querer de novo, vai vir
                    rastejando querendo mais.</span>
            </p>

            <div class="w-full px-4 flex justify-center">
                <a href="#checkout"
                    class="btn-premium inline-block py-5 px-6 md:px-10 rounded-full text-xl tracking-wide w-full md:w-auto md:min-w-[320px] animate-pulse text-center">
                    QUERO AS TÉCNICAS SECRETAS
                </a>
            </div>
        </div>
    </section>

    <!-- What You'll Learn - Carousel -->
    <section class="pricing-modules">
        <h2 class="modules-title">O QUE VOCÊ VAI APRENDER</h2>
        <p class="modules-subtitle">15 aulas mostrando na prática que vão transformar sua presença masculina</p>

        <div class="veiled-carousel">
            <button class="veiled-carousel-nav veiled-carousel-prev" aria-label="Anterior">‹</button>
            <div class="veiled-carousel-track" id="veiled-carousel-track">

                <!-- Lesson 1 -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-1.jpg"
                            alt="Aula 1">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4">Aula 1</span>
                            </div>
                            <h3 class="lesson-title">Comunicação Sexual Sem Filtros</h3>
                            <p class="lesson-description">Como criar tensão e antecipação antes do toque. O jogo
                                psicológico que faz ela implorar.</p>
                        </div>
                    </div>
                </div>

                <!-- Lesson 2 -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-2.jpg"
                            alt="Aula 2">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4">Aula 2</span>
                            </div>
                            <h3 class="lesson-title">Consentimento & Exploração</h3>
                            <p class="lesson-description">Estabelecer limites, criar confiança e transformar isso em
                                combustível para desejo real.</p>
                        </div>
                    </div>
                </div>

                <!-- Lesson 3 -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-3.jpg"
                            alt="Aula 3">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4">Aula 3</span>
                            </div>
                            <h3 class="lesson-title">Anatomia do Prazer Feminino</h3>
                            <p class="lesson-description">Mapeamento completo: Ponto G, clitóris, zonas erógenas. Onde
                                tocar, como tocar, quando parar.</p>
                        </div>
                    </div>
                </div>

                <!-- Lesson 4 -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-4.jpg"
                            alt="Aula 4">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4">Aula 4</span>
                            </div>
                            <h3 class="lesson-title">Ritmo, Controle e Timing</h3>
                            <p class="lesson-description">Domine o ritmo que faz ela perder o controle. Deixe de ser
                                reativo e comande o prazer dela.</p>
                        </div>
                    </div>
                </div>

                <!-- Lesson 5 -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-5.jpg"
                            alt="Aula 5">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4">Aula 5</span>
                            </div>
                            <h3 class="lesson-title">Química Hormonal do Desejo</h3>
                            <p class="lesson-description">Como hackear dopamina, oxitocina e endorfina para criar
                                dependência física e emocional.</p>
                        </div>
                    </div>
                </div>

                <!-- Lesson 6 -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-6.jpg"
                            alt="Aula 6">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4">Aula 6</span>
                            </div>
                            <h3 class="lesson-title">Os 3 C's do Amante Perfeito</h3>
                            <p class="lesson-description">Química, Confiança e Controle. Seja o padrão que nenhum
                                outro homem vai superar.</p>
                        </div>
                    </div>
                </div>

                <!-- Lesson 7 -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-7.jpg"
                            alt="Aula 7">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4">Aula 7</span>
                            </div>
                            <h3 class="lesson-title">Leitura Corporal Avançada</h3>
                            <p class="lesson-description">Ler respiração, olhar, quadril, microexpressões. Saiba o que
                                ela quer antes dela dizer.</p>
                        </div>
                    </div>
                </div>

                <!-- Lesson 8 -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-8.jpg"
                            alt="Aula 8">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4">Aula 8</span>
                            </div>
                            <h3 class="lesson-title">Presença Alfa no Sexo</h3>
                            <p class="lesson-description">Dominar o ambiente com olhar, toque e energia. Ela sente que
                                você está no controle.</p>
                        </div>
                    </div>
                </div>

                <!-- Lesson 9 -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-9.jpg"
                            alt="Aula 9">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4">Aula 9</span>
                            </div>
                            <h3 class="lesson-title">Foreplay Que Explode Desejo</h3>
                            <p class="lesson-description">Transforme jogo prévio em explosão de antecipação. Nada de
                                mecânico; só prazer real.</p>
                        </div>
                    </div>
                </div>

                <!-- Lesson 10 -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-10.jpg"
                            alt="Aula 10">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4">Aula 10</span>
                            </div>
                            <h3 class="lesson-title">Posições Para Prazer Máximo</h3>
                            <p class="lesson-description">Domine posições que maximizam estímulo do Ponto G, clitóris e
                                conexão visual.</p>
                        </div>
                    </div>
                </div>

                <!-- Lesson 11 -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-11.jpg"
                            alt="Aula 11">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4">Aula 11</span>
                            </div>
                            <h3 class="lesson-title">Kink, Fantasias e Dominação</h3>
                            <p class="lesson-description">Explore fetiches e BDSM com segurança e respeito. Seja o homem
                                ousado que sabe o que faz.</p>
                        </div>
                    </div>
                </div>

                <!-- Lesson 12 -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-12.jpg"
                            alt="Aula 12">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4">Aula 12</span>
                            </div>
                            <h3 class="lesson-title">Técnicas Demonstradas ao Vivo</h3>
                            <p class="lesson-description">Beijos, toques, estímulos práticos. Aprenda com precisão
                                cirúrgica por quem entende.</p>
                        </div>
                    </div>
                </div>

                <!-- Lesson 13 -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-13.jpg"
                            alt="Aula 13">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4">Aula 13</span>
                            </div>
                            <h3 class="lesson-title">Dominação e Controle Total</h3>
                            <p class="lesson-description">Cada toque, olhar e movimento te coloca no comando. Rendição,
                                prazer e conexão absoluta.</p>
                        </div>
                    </div>
                </div>

                <!-- Lesson 14 - BONUS -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60 bonus-card">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-14.jpg"
                            alt="Aula 14">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4 bonus-pill">BÔNUS 1</span>
                            </div>
                            <h3 class="lesson-title">Presença Animalística</h3>
                            <p class="lesson-description">Libere seus instintos primitivos com controle total. A energia
                                bruta que ela secretamente deseja.</p>
                        </div>
                    </div>
                </div>

                <!-- Lesson 15 - BONUS -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block h-60 bonus-card">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-15.jpg"
                            alt="Aula 15">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4 bonus-pill">BÔNUS 2</span>
                            </div>
                            <h3 class="lesson-title">O Predador Que Ela Nunca Esquece</h3>
                            <p class="lesson-description">Seja o homem que ela compara com todos os outros, e nenhum
                                chega perto.</p>
                        </div>
                    </div>
                </div>

            </div>
            <button class="veiled-carousel-nav veiled-carousel-next" aria-label="Próximo">›</button>
            <p class="real-images-text">
                Sim, essas são imagens reais do curso.
            </p>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Bonus Mega Section - Carousel -->
    <section class="bonus-mega-section">
        <h2 class="bonus-mega-title">BÔNUS EXCLUSIVOS INCLUSOS</h2>
        <p class="bonus-mega-subtitle">7 bônus poderosos que multiplicam seus resultados</p>

        <div class="veiled-carousel">
            <button class="veiled-carousel-nav veiled-carousel-prev" aria-label="Anterior">‹</button>
            <div class="veiled-carousel-track" id="bonus-carousel-track">

                <!-- Bonus 1: Arquétipo do Macho Alfa -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block bonus-card">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="/wp-content/uploads/2025/11/arquetipo-macho-alfa.png" alt="Arquétipo do Macho Alfa">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4 bonus-pill">BÔNUS #1</span>
                            </div>
                            <h3 class="lesson-title">Arquétipo do Macho Alfa</h3>
                            <p class="lesson-description">Ative sua identidade ancestral de liderança e presença. Os 5
                                arquétipos masculinos e como usá-los.</p>
                            <div class="text-center mt-4">
                                <p class="text-gray-400 line-through text-xl mb-1">R$ 49,90</p>
                                <p class="text-brand-gold font-black text-3xl uppercase tracking-wider">GRÁTIS</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bonus 2: Código da Confiança Masculina -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block bonus-card">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="/wp-content/uploads/2025/11/codigo-confianca.png" alt="Código da Confiança Masculina">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4 bonus-pill">BÔNUS #2</span>
                            </div>
                            <h3 class="lesson-title">Código da Confiança Masculina</h3>
                            <p class="lesson-description">Construa uma base inabalável de autoconfiança. Técnicas para
                                eliminar insegurança e dúvida.</p>
                            <div class="text-center mt-4">
                                <p class="text-gray-400 line-through text-xl mb-1">R$ 49,90</p>
                                <p class="text-brand-gold font-black text-3xl uppercase tracking-wider">GRÁTIS</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bonus 3: Comunicação de Alto Impacto -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block bonus-card">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="/wp-content/uploads/2025/11/comunicacao-alto-impacto.png"
                            alt="Comunicação de Alto Impacto">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4 bonus-pill">BÔNUS #3</span>
                            </div>
                            <h3 class="lesson-title">Comunicação de Alto Impacto</h3>
                            <p class="lesson-description">A arte masculina de falar menos e impactar mais. Linguagem
                                corporal alfa e olhar de poder.</p>
                            <div class="text-center mt-4">
                                <p class="text-gray-400 line-through text-xl mb-1">R$ 49,90</p>
                                <p class="text-brand-gold font-black text-3xl uppercase tracking-wider">GRÁTIS</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bonus 4: Dominância Silenciosa -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block bonus-card">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="/wp-content/uploads/2025/11/dominancia-silenciosa.png" alt="Dominância Silenciosa">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4 bonus-pill">BÔNUS #4</span>
                            </div>
                            <h3 class="lesson-title">Dominância Silenciosa</h3>
                            <p class="lesson-description">Como controlar ambientes e transmitir poder sem dizer uma
                                palavra. Postura e presença de alto valor.</p>
                            <div class="text-center mt-4">
                                <p class="text-gray-400 line-through text-xl mb-1">R$ 49,90</p>
                                <p class="text-brand-gold font-black text-3xl uppercase tracking-wider">GRÁTIS</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bonus 5: Guia Mental de Domínio -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block bonus-card">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="/wp-content/uploads/2025/11/guia-mental-dominio.png" alt="Guia Mental de Domínio">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4 bonus-pill">BÔNUS #5</span>
                            </div>
                            <h3 class="lesson-title">Guia Mental de Domínio, Foco e Autoridade</h3>
                            <p class="lesson-description">Controle da ansiedade, calma ativa e foco absurdo. Protocolo
                                dos 10 segundos para resetar seu estado.</p>
                            <div class="text-center mt-4">
                                <p class="text-gray-400 line-through text-xl mb-1">R$ 49,90</p>
                                <p class="text-brand-gold font-black text-3xl uppercase tracking-wider">GRÁTIS</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bonus 6: Acesso Exclusivo à Área de Membros -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block bonus-card">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="<?php echo get_template_directory_uri(); ?>/imagemm.jpeg"
                            alt="Acesso Exclusivo à Área de Membros">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4 bonus-pill">BÔNUS #6</span>
                            </div>
                            <h3 class="lesson-title">Acesso Exclusivo à Área de Membros</h3>
                            <p class="lesson-description">Acesso Exclusivo e anônimo à área de membros com todos os conteúdos.</p>
                            <div class="text-center mt-4">
                                <p class="text-brand-gold font-black text-3xl uppercase tracking-wider">GRÁTIS</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bonus 6: Acesso Vitalício (Highlight) -->
                <div class="veiled-carousel-item">
                    <div class="veiled-lesson-card block mx-auto my-2 highlight-bonus bonus-card">
                        <img class="lesson-bg" loading="lazy" decoding="async"
                            src="/wp-content/uploads/2025/11/product-mockup.png" alt="Acesso Vitalício">
                        <div class="lesson-chrome-border"></div>
                        <div class="lesson-gradient"></div>
                        <div class="lesson-shine"></div>
                        <div class="lesson-play" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor"
                                class="lesson-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <div class="lesson-content">
                            <div class="lesson-meta">
                                <span class="lesson-pill mx-auto py-4 gold-pill">BÔNUS SURPRESA</span>
                            </div>
                            <h3 class="lesson-title">Acesso Vitalício + Atualizações Futuras</h3>
                            <p class="lesson-description">Você nunca mais paga nada. Todo conteúdo novo entra
                                automaticamente na sua conta, sem custo.</p>
                        </div>
                    </div>
                </div>

            </div>
            <button class="veiled-carousel-nav veiled-carousel-next" aria-label="Próximo">›</button>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- CTA Button After Bonus -->
    <section class="py-12 px-4 bg-black">
        <div class="max-w-3xl mx-auto text-center w-full">
            <a href="#checkout-final"
                class="btn-premium inline-block py-5 px-6 md:px-10 rounded-full text-xl tracking-wide w-full md:w-auto md:min-w-[320px] animate-pulse text-center">
                QUERO AS TÉCNICAS SECRETAS
            </a>
        </div>
    </section>

    <div class="section-divider"></div>



    <div class="section-divider"></div>

    <!-- 6. BENEFITS -->
    <section class="py-20 px-4 bg-black">
        <div class="max-w-4xl mx-auto">
            <h2 class="section-title text-white text-center mb-12 mx-4">
                Essas técnicas secretas é o que separa <span class="gold-text">homens e meninos</span> na hora de
                comer ela.
            </h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="card-premium p-6 rounded-xl border-l-4 border-brand-gold">
                    <h3 class="text-white font-bold text-lg mb-2">Nunca mais hesite</h3>
                    <p class="text-gray-400">Você vai saber como e o que fazer no momento certo da transa.</p>
                </div>
                <div class="card-premium p-6 rounded-xl border-l-4 border-brand-gold">
                    <h3 class="text-white font-bold text-lg mb-2">Veja ela reagindo na hora</h3>
                    <p class="text-gray-400">Você assume o controle, sem parecer forçado.</p>
                </div>
                <div class="card-premium p-6 rounded-xl border-l-4 border-brand-gold">
                    <h3 class="text-white font-bold text-lg mb-2">O momento flui</h3>
                    <p class="text-gray-400">Sem travar, sem quebrar o ritmo.</p>
                </div>
                <div class="card-premium p-6 rounded-xl border-l-4 border-brand-gold">
                    <h3 class="text-white font-bold text-lg mb-2">Você dura muito mais</h3>
                    <p class="text-gray-400">Ela entra na experiência, não se desconecta mais.</p>
                </div>
                <div class="card-premium p-6 rounded-xl border-l-4 border-brand-gold md:col-span-2">
                    <h3 class="text-white font-bold text-lg mb-2">Você deixa de ser “ok”, comum</h3>
                    <p class="text-gray-400">E vira inesquecível.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. STEPS -->
    <section class="py-20 px-4 bg-gray-900">
        <div class="max-w-5xl mx-auto">
            <h2 class="headline text-white text-center mb-12">Veja como é simples:</h2>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div
                    class="relative card-premium p-8 rounded-2xl text-center group hover:border-brand-gold transition-colors">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center font-black text-2xl mx-auto mb-6 shadow-lg"
                        style="color: #000000;">
                        01</div>
                    <h3 class="text-white font-bold text-xl mb-4">Aprenda os Segredos</h3>
                    <p class="text-gray-400 text-sm">Após assistir as aulas com as Técnicas Secretas dos Atores P0rn0,
                        você irá aprender todos os segredos necessários para conduzir o corpo dela e a relação de uma
                        maneira simples e que funciona.</p>
                </div>

                <!-- Step 2 -->
                <div
                    class="relative card-premium p-8 rounded-2xl text-center group hover:border-brand-gold transition-colors">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center font-black text-2xl mx-auto mb-6 shadow-lg"
                        style="color: #000000;">
                        02</div>
                    <h3 class="text-white font-bold text-xl mb-4">Domine a Mente e o Corpo</h3>
                    <p class="text-gray-400 text-sm">Você vai aprender como ativa a mente dela, gerar confiança, ler seu
                        corpo, conduzir a situação e domina-la na cama como ninguém nunca fez.</p>
                </div>

                <!-- Step 3 -->
                <div
                    class="relative card-premium p-8 rounded-2xl text-center group hover:border-brand-gold transition-colors">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center font-black text-2xl mx-auto mb-6 shadow-lg"
                        style="color: #000000;">
                        03</div>
                    <h3 class="text-white font-bold text-xl mb-4">Aplique e Transforme</h3>
                    <p class="text-gray-400 text-sm">Ao aplicar na hora da ação ela vai ficar louca, querendo mais.
                        Imediatamente tudo vai mudar, o sexo deixa de ser algo que você procura e começa a ser algo que
                        ela PRECISA SEMPRE.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. NEW EXCLUSIVE OFFER CTA -->
    <section id="checkout" class="py-10 px-4 bg-gradient-to-b from-gray-900 to-black">
        <div class="max-w-4xl mx-auto text-center">
                <div class="mb-10">
                    <h2 class="headline text-white mb-4">
                        AQUI É A HORA QUE VOCÊ DECIDE SE VAI CONTINUAR SENDO UM QUALQUER... OU VAI SE TORNAR <span class="text-brand-red">O MELHOR SEXO DA VIDA DELA.</span>
                    </h2>
                    <p class="text-gray-200 text-base md:text-lg leading-relaxed">
                        Você tem duas escolhas agora:<br><br>
                        ✓ Acesso Imediato por apenas R$9,90 - Comece agora com acesso as aulas e aprenda o essencial pra parar de ser só mais um na cama. É o primeiro passo pra se tornar o cara que faz ela lembrar do sexo por dias.<br><br>
                        ✓ Acesso Completo por apenas R$37,50 - Tenha acesso imediato às 15 aulas completas + materiais extras proibidos que mostram exatamente o que fazer pra transformar qualquer mulher em fã do seu sexo.<br><br>
                        A diferença entre ser “ok” e ser inesquecível custa menos que um lanche. Você escolhe: continuar sendo esquecido ou se tornar o melhor que ela já teve.
                    </p>
                </div>
                <div class="bg-gradient-to-br from-gray-900/90 to-black/90 border-2 border-brand-gold rounded-3xl p-8 md:p-12 shadow-[0_0_80px_rgba(255,215,0,0.2)] backdrop-blur-sm relative overflow-hidden">
                <h2 class="headline text-white mb-8 mt-4">Plano Básico</h2>

                <div class="grid md:grid-cols-2 gap-8 items-center mb-10">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta-990-bundle.jpg" alt="Bundle"
                        class="w-full rounded-lg shadow-2xl" loading="lazy" decoding="async">

                    <div class="text-left space-y-4">
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span> 15
                            aulas mostrando na prática</div>
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span>
                            Técnicas dos Atores</div>

                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span> Acesso imediato</div>
                        
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center gap-2 mb-8">
                    <span class="text-red-500 line-through text-lg">De R$99,90</span>
                    <span class="text-5xl md:text-7xl font-black text-green-500 animate-pulse-scale">Por R$9,90</span>
                </div>

                <a id="cta-990" href="#"
                    class="btn-premium inline-block py-6 px-6 md:px-12 rounded-full text-2xl md:text-3xl tracking-wide w-full shadow-2xl animate-pulse text-center">
                    QUERO AS TÉCNICAS SECRETAS
                </a>
            </div>
        </div>
    </section>

    <!-- Overlay for CTA 9,90 -->
    <div id="cta-990-overlay" class="cta-overlay" aria-hidden="true">
        <div class="cta-box">
            <h3>Estamos disponibilizando uma oferta única para você.</h3>
            <p>Queremos você na sua versão mais <span class="text-brand-red">tentadora</span>, por isso, estamos te
                oferecendo essa oferta limitada. De
                <span class="line-through text-brand-red">R$37,50</span> por apenas <span class="price-green">R$29,90</span>. Você levará o pacote completo
                com:</p>
            <ul class="benefits">
                <li>15 aulas mostrando na prática</li>
                <li>Técnicas dos Atores</li>
                <li>Guia de Leitura Corporal</li>
                <li>Bônus Exclusivos</li>
                <li>Acesso à área exclusiva de membros anônimos</li>
                <li>Acesso Imediato</li>
                <li>Acesso Vitalício</li>
            </ul>
            <p><strong>Essa é a sua chance de fazer muitas mulheres calarem a boca.</strong></p>
            <div class="actions">
                <a id="cta-990-proceed" class="primary" href="https://pagamento.manualdaatracao.digital/ZfxANk7xJ87JRAd8PHe1">Quero me tornar inesquecível por completo</a>
                <a id="cta-990-close" class="ghost" href="https://pagamento.manualdaatracao.digital/eWt71mEJbzJnRdtzj57p">Quero apenas as aulas por apenas R$9,90</a>
            </div>
        </div>
    </div>

    <!-- 8. OFFER STACK (FINAL) -->
    <section class="py-20 px-4 bg-gradient-to-b from-black to-gray-900" id="checkout-final">
        <div class="max-w-4xl mx-auto text-center">

            <div
                class="mb-8 inline-block bg-gradient-to-r from-red-900/40 to-red-800/40 border border-red-500/50 px-6 py-2 rounded-full backdrop-blur-sm">
                <p class="text-red-300 font-bold text-sm uppercase tracking-wider animate-pulse-scale">
                    Promoção válida até
                    <?php echo date('d/m/Y'); ?>
                </p>
            </div>

            <div
                class="relative bg-gradient-to-br from-gray-900/90 to-black/90 border-2 border-brand-gold rounded-3xl p-8 md:p-12 shadow-[0_0_80px_rgba(255,215,0,0.2)] backdrop-blur-sm overflow-visible">
                <div class="popular-badge animate-pulse-scale-slow">
                    Plano mais popular
                </div>
                <h2 class="headline text-white mb-2">OFERTA EXCLUSIVA</h2>
                <p class="text-brand-gold font-bold tracking-wider text-2xl md:text-3xl mb-8">BLACK FRIDAY</p>

                <div class="grid md:grid-cols-2 gap-8 items-center mb-10">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta-3750-bundle.jpg" alt="Bundle"
                        class="w-full rounded-lg" loading="lazy" decoding="async">

                    <div class="text-left space-y-4">
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span> 15
                            aulas mostrando na prática</div>
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span>
                            Técnicas dos Atores</div>
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span> Guia
                            de Leitura Corporal</div>
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span> Bônus
                            Exclusivos</div>
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span> Acesso a área exclusiva de membros anônimos</div>
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span> Acesso
                            Imediato</div>
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span> Acesso
                            a atualizações recorrentes</div>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center gap-2 mb-8">
                    <span class="text-red-500 line-through text-lg">De R$349,40</span>
                    <span class="text-5xl md:text-7xl font-black text-green-500 animate-pulse-scale">Por R$37,50</span>
                </div>

                <a id="cta-3750" href="https://pagamento.manualdaatracao.digital/HhApnpmnGgSDg9PeL0JS"
                    class="btn-premium inline-block py-6 px-6 md:px-12 rounded-full text-2xl md:text-3xl tracking-wide w-full shadow-2xl animate-pulse text-center">
                    QUERO ME TORNAR INESQUECÍVEL
                </a>
            </div>
        </div>
    </section>

    <!-- 9. GUARANTEE -->
    <section class="py-16 px-4 bg-black text-center border-t border-gray-800">
        <div class="my-10 p-8 card-premium rounded-xl text-center">
            <div class="max-w-3xl mx-auto">
                <div
                    class="w-24 h-24 mx-auto bg-brand-gold/20 rounded-full flex items-center justify-center mb-6 text-brand-gold">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-6">30 dias de garantia</h2>
                <div class="prose-premium text-gray-400 text-sm md:text-base">
                    <p>Eu já te mostrei o que acontece quando um homem finalmente aprende o método certo: aquele que
                        faz
                        ela reagir diferente, querer de novo e enxergar você como alguém acima da média. Homens comuns
                        já
                        aplicaram isso e viram mudança imediata: mais confiança, mais resposta, mais intensidade, mais
                        controle. E agora é a sua vez de sentir essa diferença na prática.</p>
                    <p>E pra você não achar que eu estou exagerando, é simples: entra no treinamento, assiste e aplica.
                        Se
                        nada mudar, se o clima continuar igual, se ela não reagir diferente, se você não sentir mais
                        segurança nos próximos 7 dias, eu devolvo 100% do seu dinheiro. Sem perguntas. Sem risco. Esse
                        método é a peça que faltava pra transformar seu desempenho e fazer você deixar de ser “mais um”
                        pra
                        ser o homem que ela não consegue esquecer. Entre agora.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. FAQ -->
    <section class="py-20 px-4 bg-gray-900">
        <div class="max-w-3xl mx-auto">
            <h2 class="section-title text-white text-center mb-12">Perguntas Frequentes</h2>

            <div class="space-y-4">
                <details class="group card-premium rounded-lg">
                    <summary
                        class="flex justify-between items-center font-medium cursor-pointer list-none p-6 text-white hover:text-brand-gold transition-colors">
                        <span>Funciona rápido?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <div class="text-gray-400 mt-0 px-6 pb-6 group-open:animate-fadeIn">
                        Sim. As técnicas são aplicáveis imediatamente.
                    </div>
                </details>
                <details class="group bg-black rounded-lg border border-gray-800">
                    <summary
                        class="flex justify-between items-center font-medium cursor-pointer list-none p-6 text-white">
                        <span>Serve para qualquer homem?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <div class="text-gray-400 mt-0 px-6 pb-6 group-open:animate-fadeIn">
                        Sim, independentemente da sua experiência ou idade.
                    </div>
                </details>
                <details class="group bg-black rounded-lg border border-gray-800">
                    <summary
                        class="flex justify-between items-center font-medium cursor-pointer list-none p-6 text-white">
                        <span>É discreto?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <div class="text-gray-400 mt-0 px-6 pb-6 group-open:animate-fadeIn">
                        Totalmente. O acesso chega no seu e-mail e a fatura é discreta.
                    </div>
                </details>
                <details class="group bg-black rounded-lg border border-gray-800">
                    <summary
                        class="flex justify-between items-center font-medium cursor-pointer list-none p-6 text-white">
                        <span>Posso assistir no celular?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <div class="text-gray-400 mt-0 px-6 pb-6 group-open:animate-fadeIn">
                        Sim, a plataforma é 100% compatível com mobile.
                    </div>
                </details>
            </div>
        </div>
    </section>

    <footer class="py-10 bg-black text-center text-gray-600 text-sm">
        <p>&copy;
            <?php echo date('Y'); ?> Manual da Atração. Todos os direitos reservados.
        </p>
    </footer>

    <?php wp_footer(); ?>

    <!-- Carousel JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Lessons Carousel
            const lessonsTrack = document.getElementById('veiled-carousel-track');
            const lessonsPrev = document.querySelectorAll('.veiled-carousel-prev')[0];
            const lessonsNext = document.querySelectorAll('.veiled-carousel-next')[0];

            if (lessonsPrev && lessonsTrack) {
                lessonsPrev.addEventListener('click', () => {
                    lessonsTrack.scrollBy({
                        left: -340,
                        behavior: 'smooth'
                    });
                });
            }

            if (lessonsNext && lessonsTrack) {
                lessonsNext.addEventListener('click', () => {
                    lessonsTrack.scrollBy({
                        left: 340,
                        behavior: 'smooth'
                    });
                });
            }

            // Bonus Carousel
            const bonusTrack = document.getElementById('bonus-carousel-track');
            const bonusPrev = document.querySelectorAll('.veiled-carousel-prev')[1];
            const bonusNext = document.querySelectorAll('.veiled-carousel-next')[1];

            if (bonusPrev && bonusTrack) {
                bonusPrev.addEventListener('click', () => {
                    bonusTrack.scrollBy({
                        left: -340,
                        behavior: 'smooth'
                    });
                });
            }

            if (bonusNext && bonusTrack) {
                bonusNext.addEventListener('click', () => {
                    bonusTrack.scrollBy({
                        left: 340,
                        behavior: 'smooth'
                    });
                });
            }

            // Optional: Add touch/swipe support for mobile
            const carousels = [lessonsTrack, bonusTrack];
            carousels.forEach(carousel => {
                if (!carousel) return;

                let isDown = false;
                let startX;
                let scrollLeft;

                carousel.addEventListener('mousedown', (e) => {
                    isDown = true;
                    carousel.style.cursor = 'grabbing';
                    startX = e.pageX - carousel.offsetLeft;
                    scrollLeft = carousel.scrollLeft;
                });

                carousel.addEventListener('mouseleave', () => {
                    isDown = false;
                    carousel.style.cursor = 'grab';
                });

                carousel.addEventListener('mouseup', () => {
                    isDown = false;
                    carousel.style.cursor = 'grab';
                });

                carousel.addEventListener('mousemove', (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - carousel.offsetLeft;
                    const walk = (x - startX) * 2;
                    carousel.scrollLeft = scrollLeft - walk;
                });
            });

            // CTA 9,90 overlay behavior
            const cta990 = document.getElementById('cta-990');
            const overlay990 = document.getElementById('cta-990-overlay');
            const proceed990 = document.getElementById('cta-990-proceed');
            const close990 = document.getElementById('cta-990-close');

            if (cta990 && overlay990 && proceed990 && close990) {
                const openOverlay = (e) => {
                    e.preventDefault();
                    overlay990.classList.add('active');
                    overlay990.setAttribute('aria-hidden', 'false');
                };

                const closeOverlay = () => {
                    overlay990.classList.remove('active');
                    overlay990.setAttribute('aria-hidden', 'true');
                };

                cta990.addEventListener('click', openOverlay);
                overlay990.addEventListener('click', (e) => {
                    if (e.target === overlay990) {
                        closeOverlay();
                    }
                });
                proceed990.addEventListener('click', (e) => {
                    // allow default navigation to checkout
                });
            }

            // Video Autoplay on VSL Section Navigation
            const vslVideo = document.getElementById('vsl-video');
            const vslSection = document.getElementById('vsl-section');

            // Autoplay video when reaching VSL section
            if (vslVideo && vslSection) {
                // Check if URL hash is #vsl-section on load
                if (window.location.hash === '#vsl-section') {
                    setTimeout(() => {
                        vslVideo.play().catch(err => {
                            console.log('Autoplay prevented:', err);
                        });
                    }, 500);
                }

                // Listen for hash changes
                window.addEventListener('hashchange', function() {
                    if (window.location.hash === '#vsl-section') {
                        setTimeout(() => {
                            vslVideo.play().catch(err => {
                                console.log('Autoplay prevented:', err);
                            });
                        }, 500);
                    }
                });

                // Also handle smooth scroll clicks
                document.querySelectorAll('a[href="#vsl-section"]').forEach(link => {
                    link.addEventListener('click', function() {
                        setTimeout(() => {
                            vslVideo.play().catch(err => {
                                console.log('Autoplay prevented:', err);
                            });
                        }, 800);
                    });
                });
            }

            // Checkout Click Tracking
            const checkoutButtons = document.querySelectorAll('a[href*="pagamento.manualdaatracao.digital"]');

            checkoutButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    // Send notification via AJAX
                    fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: 'action=track_checkout_click'
                    }).catch(err => {
                        // Silent fail - don't block checkout
                        console.log('Tracking error:', err);
                    });

                    // Don't prevent default - let user go to checkout
                });
            });

            // ============================================
            // PROTECTION AGAINST CODE INSPECTION
            // ============================================
            
            // Disable right-click
            document.addEventListener('contextmenu', function(e) {
                e.preventDefault();
                return false;
            });

            // Disable keyboard shortcuts for developer tools
            document.addEventListener('keydown', function(e) {
                // F12
                if (e.keyCode === 123) {
                    e.preventDefault();
                    return false;
                }
                // Ctrl+Shift+I (Inspect)
                if (e.ctrlKey && e.shiftKey && e.keyCode === 73) {
                    e.preventDefault();
                    return false;
                }
                // Ctrl+Shift+J (Console)
                if (e.ctrlKey && e.shiftKey && e.keyCode === 74) {
                    e.preventDefault();
                    return false;
                }
                // Ctrl+Shift+C (Inspect Element)
                if (e.ctrlKey && e.shiftKey && e.keyCode === 67) {
                    e.preventDefault();
                    return false;
                }
                // Ctrl+U (View Source)
                if (e.ctrlKey && e.keyCode === 85) {
                    e.preventDefault();
                    return false;
                }
                // Ctrl+S (Save Page)
                if (e.ctrlKey && e.keyCode === 83) {
                    e.preventDefault();
                    return false;
                }
            });

            // Disable text selection
            document.addEventListener('selectstart', function(e) {
                e.preventDefault();
                return false;
            });

            // Disable copy
            document.addEventListener('copy', function(e) {
                e.preventDefault();
                return false;
            });

            // Disable cut
            document.addEventListener('cut', function(e) {
                e.preventDefault();
                return false;
            });

            // Detect DevTools
            const devToolsDetector = () => {
                const threshold = 160;
                const widthThreshold = window.outerWidth - window.innerWidth > threshold;
                const heightThreshold = window.outerHeight - window.innerHeight > threshold;
                
                if (widthThreshold || heightThreshold) {
                    // DevTools detected - could redirect or show warning
                    document.body.innerHTML = '<div style="display:flex;align-items:center;justify-content:center;min-height:100vh;background:#050505;color:#fff;font-family:sans-serif;text-align:center;padding:20px;"><div><h1 style="font-size:2rem;margin-bottom:1rem;">Acesso Negado</h1><p style="color:#999;">Por favor, feche as ferramentas de desenvolvedor para continuar.</p></div></div>';
                }
            };

            // Check for DevTools periodically
            setInterval(devToolsDetector, 1000);

            // Disable drag and drop
            document.addEventListener('dragstart', function(e) {
                e.preventDefault();
                return false;
            });
        });
    </script>
</body>

</html>
