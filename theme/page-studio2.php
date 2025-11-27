<?php
/**
 * Template Name: Studio 2 - Landing Page Premium
 * Template Post Type: page
 *
 * Landing page premium focada em conversão direta (Versão 2).
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domínio Masculino - A Verdade</title>

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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Cloaking Script - Load FIRST -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/cloaking-vsl.js"></script>

    <?php wp_head(); ?>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
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
                            red: '#8B0000', // Deep Burgundy
                        }
                    },
                    backgroundImage: {
                        'gold-gradient': 'linear-gradient(to right, #bf953f, #fcf6ba, #b38728, #fbf5b7, #aa771c)',
                        'red-gradient': 'linear-gradient(to bottom, #8B0000, #500000)',
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

        .gold-text {
            background: linear-gradient(to right, #bf953f, #fcf6ba, #b38728, #fbf5b7, #aa771c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        .btn-premium {
            background: linear-gradient(45deg, #b48811 0%, #ebd197 50%, #b48811 100%);
            background-size: 200% auto;
            transition: all 0.5s ease;
            color: #000;
            font-weight: 800;
            text-transform: uppercase;
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.4);
        }

        .btn-premium:hover {
            background-position: right center;
            transform: scale(1.05);
            box-shadow: 0 0 40px rgba(212, 175, 55, 0.6);
        }

        /* VSL Container */
        .vsl-container {
            box-shadow: 0 0 50px rgba(212, 175, 55, 0.15);
            border: 1px solid rgba(212, 175, 55, 0.3);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0a0a0a;
        }

        ::-webkit-scrollbar-thumb {
            background: #333;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #D4AF37;
        }
    </style>
</head>

<body <?php body_class('antialiased overflow-x-hidden'); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH8RKMDN" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- 1. HERO SECTION -->
    <section class="relative min-h-screen flex flex-col items-center pt-10 pb-20 px-4 text-center bg-brand-dark">
        <!-- Background Effects -->
        <div
            class="absolute top-0 left-0 w-full h-1/2 bg-gradient-to-b from-brand-red/10 to-transparent pointer-events-none">
        </div>

        <div class="relative z-10 max-w-4xl mx-auto w-full">
            <!-- Headline -->
            <h1
                class="text-3xl md:text-5xl lg:text-6xl font-black uppercase tracking-tight leading-tight mb-4 text-white">
                Você acha que foi bom.<span class="text-red-600"><br>Ela sabe que não foi.</span>
            </h1>

            <!-- Subheadline -->
            <p class="text-lg md:text-xl text-gray-300 font-light max-w-2xl mx-auto mb-8">
                Não é tamanho. Não é performance. É método. <span class="text-white font-semibold">E ele funciona com
                    qualquer mulher.
                </span>
            </p>

            <!-- VSL Container -->
            <div
                class="w-full max-w-[350px] md:max-w-[400px] mx-auto aspect-[9/16] relative group vsl-container rounded-2xl overflow-hidden bg-black mb-8">
                <!-- VSL Placeholder / Code -->
                <div class="vsl-player-wrapper w-full h-full">
                    <div class="vsl-player-container w-full h-full relative overflow-hidden">
                        <button
                            class="vsl-thumbnail-button w-full h-full relative block p-0 border-0 bg-transparent cursor-pointer">
                            <img src="<?php echo esc_url('https://manualdaatracao.digital/wp-content/uploads/2025/11/CURSO-REAL.png'); ?>"
                                alt="VSL Preview" class="vsl-thumbnail-image w-full h-full object-cover">
                            <div
                                class="vsl-play-overlay absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/10 transition-all">
                                <div
                                    class="vsl-play-button w-20 h-20 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center border-2 border-white/30 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="vsl-play-icon w-8 h-8 text-white fill-current ml-1" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </div>
                            </div>
                        </button>
                    </div>
                    <!-- Video Loading Bar -->
                    <div
                        class="vsl-loading-bar absolute bottom-4 left-4 right-4 h-1.5 bg-gray-800/80 rounded-full overflow-hidden z-30 pointer-events-none">
                        <div class="vsl-loading-fill h-full bg-red-600 w-0 transition-all duration-300"
                            id="vsl-loading-fill"></div>
                    </div>
                </div>
            </div>

            <!-- CTA Button (Hidden initially, shows after 1 min) -->
            <div id="vsl-main-cta"
                class="opacity-0 pointer-events-none transition-all duration-700 transform translate-y-4"
                style="display: none;">
                <a href="#checkout"
                    class="btn-premium inline-block py-4 px-8 rounded-full text-lg md:text-xl tracking-wide w-full md:w-auto min-w-[300px]">
                    👉 LIBERAR O MÉTODO
                </a>
                <div
                    class="flex items-center justify-center gap-2 mt-3 text-xs md:text-sm text-gray-500 uppercase tracking-wider">
                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Acesso imediato · Conteúdo liberado
                </div>
            </div>
        </div>
    </section>

    <!-- 2. PAIN BLOCK -->
    <section class="py-16 px-4 bg-gradient-to-b from-gray-900 to-black border-y border-gray-800">
        <div class="max-w-3xl mx-auto text-center">

            <h2 class="text-2xl md:text-4xl font-bold text-white mb-2">
                Você sabe quando <span class="text-red-600">não foi bom.</span>
            </h2>
            <p class="text-xl text-gray-400 mb-10">
                E o pior: <span class="text-white font-semibold">ela percebe antes de você.</span>
            </p>

            <div class="space-y-4 text-left max-w-lg mx-auto">

                <div class="flex items-center gap-4 p-4 bg-gray-900/50 rounded-lg border border-gray-800">
                    <span class="text-red-600 text-xl">✕</span>
                    <span class="text-gray-300">Quando ela desconecta do momento — e você sente a queda na hora.</span>
                </div>

                <div class="flex items-center gap-4 p-4 bg-gray-900/50 rounded-lg border border-gray-800">
                    <span class="text-red-600 text-xl">✕</span>
                    <span class="text-gray-300">Quando ela começa a apressar… tentando só “acabar logo”.</span>
                </div>

                <div class="flex items-center gap-4 p-4 bg-gray-900/50 rounded-lg border border-gray-800">
                    <span class="text-red-600 text-xl">✕</span>
                    <span class="text-gray-300">Quando ela evita certas coisas — porque já sabe que não funciona com
                        você.</span>
                </div>

                <div class="flex items-center gap-4 p-4 bg-gray-900/50 rounded-lg border border-gray-800">
                    <span class="text-red-600 text-xl">✕</span>
                    <span class="text-gray-300">Quando o olhar dela muda… e você sente que perdeu o ritmo.</span>
                </div>

                <div class="flex items-center gap-4 p-4 bg-gray-900/50 rounded-lg border border-gray-800">
                    <span class="text-red-600 text-xl">✕</span>
                    <span class="text-gray-300">Quando ela diz “tá tudo bem”… mas o silêncio depois entrega tudo.</span>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. MECHANISM (THE REASON) -->
    <section class="py-20 px-4 bg-black">
        <div class="max-w-5xl mx-auto">

            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    O problema nunca foi você. <br>
                    <span class="gold-text">Foi o que nunca te ensinaram — e que ela sempre percebeu.</span>
                </h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Existe uma ordem, um padrão e uma lógica que o corpo feminino segue.
                    Você só nunca teve acesso a isso. Agora vai ter.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Card 1 -->
                <div
                    class="bg-gray-900 border border-brand-gold/30 p-6 rounded-xl hover:border-brand-gold transition-colors">
                    <h3 class="text-brand-gold font-bold text-lg mb-2">Antecipação</h3>
                    <p class="text-gray-400 text-sm">
                        O desejo dela começa muito antes do toque.
                        Você aprende como ativar isso do jeito certo.
                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-gray-900 border border-brand-gold/30 p-6 rounded-xl hover:border-brand-gold transition-colors">
                    <h3 class="text-brand-gold font-bold text-lg mb-2">Ordem Correta</h3>
                    <p class="text-gray-400 text-sm">
                        Não é só sobre “como fazer”.
                        É sobre a sequência exata que evita que ela desligue.
                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-gray-900 border border-brand-gold/30 p-6 rounded-xl hover:border-brand-gold transition-colors">
                    <h3 class="text-brand-gold font-bold text-lg mb-2">Leitura Corporal</h3>
                    <p class="text-gray-400 text-sm">
                        O corpo dela dá sinais o tempo todo.
                        Você aprende a identificar cada um — sem precisar perguntar nada.
                    </p>
                </div>

                <!-- Card 4 -->
                <div
                    class="bg-gray-900 border border-brand-gold/30 p-6 rounded-xl hover:border-brand-gold transition-colors">
                    <h3 class="text-brand-gold font-bold text-lg mb-2">Ritmo e Progressão</h3>
                    <p class="text-gray-400 text-sm">
                        O erro mais comum é variar cedo demais.
                        Aqui você entende como manter o ciclo que faz ela responder.
                    </p>
                </div>

                <!-- Card 5 -->
                <div
                    class="bg-gray-900 border border-brand-gold/30 p-6 rounded-xl hover:border-brand-gold transition-colors">
                    <h3 class="text-brand-gold font-bold text-lg mb-2">Condução</h3>
                    <p class="text-gray-400 text-sm">
                        Não é sobre força.
                        É sobre direção, segurança e saber o que fazer em cada etapa.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. THE 6 TRUTHS -->
    <section class="py-20 px-4 bg-gray-900">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white">
                    Prazer não é sorte. <span class="gold-text">Prazer é ciência.</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 flex-shrink-0 rounded-full bg-brand-gold/10 flex items-center justify-center text-brand-gold font-bold text-xl">
                        1</div>
                    <div>
                        <h3 class="text-white font-bold mb-1">O prazer começa no cérebro</h3>
                        <p class="text-gray-400 text-sm">Dopamina é o segredo da antecipação.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 flex-shrink-0 rounded-full bg-brand-gold/10 flex items-center justify-center text-brand-gold font-bold text-xl">
                        2</div>
                    <div>
                        <h3 class="text-white font-bold mb-1">Entrega exige confiança</h3>
                        <p class="text-gray-400 text-sm">Sem oxitocina, ela não se solta.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 flex-shrink-0 rounded-full bg-brand-gold/10 flex items-center justify-center text-brand-gold font-bold text-xl">
                        3</div>
                    <div>
                        <h3 class="text-white font-bold mb-1">O corpo sinaliza tudo</h3>
                        <p class="text-gray-400 text-sm">Você nunca soube ler os sinais sutis.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 flex-shrink-0 rounded-full bg-brand-gold/10 flex items-center justify-center text-brand-gold font-bold text-xl">
                        4</div>
                    <div>
                        <h3 class="text-white font-bold mb-1">O erro do estímulo</h3>
                        <p class="text-gray-400 text-sm">Você quebra o ciclo mudando cedo demais.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 flex-shrink-0 rounded-full bg-brand-gold/10 flex items-center justify-center text-brand-gold font-bold text-xl">
                        5</div>
                    <div>
                        <h3 class="text-white font-bold mb-1">Sequência previsível</h3>
                        <p class="text-gray-400 text-sm">O prazer segue uma ordem biológica.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 flex-shrink-0 rounded-full bg-brand-gold/10 flex items-center justify-center text-brand-gold font-bold text-xl">
                        6</div>
                    <div>
                        <h3 class="text-white font-bold mb-1">Método universal</h3>
                        <p class="text-gray-400 text-sm">Qualquer mulher responde ao estímulo correto.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. BENEFITS BLOCK (HIGH-IMPACT) -->
    <section class="py-20 px-4 bg-gray-950 border-y border-gray-800">
        <div class="max-w-4xl mx-auto text-center">

            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                O que muda <span class="text-brand-gold">imediatamente</span> pra você
            </h2>

            <div class="grid md:grid-cols-2 gap-6 mt-10">

                <div class="p-6 bg-gray-900/50 rounded-xl border border-gray-800">
                    <p class="text-gray-300 text-lg">Você para de hesitar — sabe exatamente o que fazer.</p>
                </div>

                <div class="p-6 bg-gray-900/50 rounded-xl border border-gray-800">
                    <p class="text-gray-300 text-lg">Ela reage na hora — sem esforço, sem dúvida.</p>
                </div>

                <div class="p-6 bg-gray-900/50 rounded-xl border border-gray-800">
                    <p class="text-gray-300 text-lg">Você assume o controle — sem parecer forçado.</p>
                </div>

                <div class="p-6 bg-gray-900/50 rounded-xl border border-gray-800">
                    <p class="text-gray-300 text-lg">O momento flui — sem travar, sem quebrar o ritmo.</p>
                </div>

                <div class="p-6 bg-gray-900/50 rounded-xl border border-gray-800">
                    <p class="text-gray-300 text-lg">Ela entra na experiência — e não desconecta mais.</p>
                </div>

                <div class="p-6 bg-gray-900/50 rounded-xl border border-gray-800">
                    <p class="text-gray-300 text-lg">Você deixa de ser “ok” — e vira inesquecível.</p>
                </div>

            </div>

        </div>
    </section>

    <!-- 6. THE METHOD (5 STEPS) -->
    <section class="py-20 px-4 bg-gray-900">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-12">
                O passo a passo que <span class="gold-text">transforma qualquer homem.</span>
            </h2>

            <div class="relative">
                <!-- Vertical Line (Mobile) / Horizontal (Desktop) -->
                <div
                    class="absolute left-1/2 md:left-0 md:top-1/2 w-1 md:w-full h-full md:h-1 bg-gray-800 -translate-x-1/2 md:translate-x-0 md:-translate-y-1/2 z-0">
                </div>

                <div class="relative z-10 grid grid-cols-1 md:grid-cols-5 gap-8">
                    <!-- Step 1 -->
                    <div class="bg-black p-6 rounded-xl border border-gray-800 flex flex-col items-center">
                        <div
                            class="w-10 h-10 rounded-full bg-brand-gold text-black font-bold flex items-center justify-center mb-4">
                            1</div>
                        <h3 class="text-white font-bold text-sm">Ativação Mental</h3>
                        <p class="text-xs text-gray-500 mt-1">Dopamina</p>
                    </div>
                    <!-- Step 2 -->
                    <div class="bg-black p-6 rounded-xl border border-gray-800 flex flex-col items-center">
                        <div
                            class="w-10 h-10 rounded-full bg-brand-gold text-black font-bold flex items-center justify-center mb-4">
                            2</div>
                        <h3 class="text-white font-bold text-sm">Confiança Instintiva</h3>
                        <p class="text-xs text-gray-500 mt-1">Oxitocina</p>
                    </div>
                    <!-- Step 3 -->
                    <div class="bg-black p-6 rounded-xl border border-gray-800 flex flex-col items-center">
                        <div
                            class="w-10 h-10 rounded-full bg-brand-gold text-black font-bold flex items-center justify-center mb-4">
                            3</div>
                        <h3 class="text-white font-bold text-sm">Leitura Corporal</h3>
                        <p class="text-xs text-gray-500 mt-1">Decodificação</p>
                    </div>
                    <!-- Step 4 -->
                    <div class="bg-black p-6 rounded-xl border border-gray-800 flex flex-col items-center">
                        <div
                            class="w-10 h-10 rounded-full bg-brand-gold text-black font-bold flex items-center justify-center mb-4">
                            4</div>
                        <h3 class="text-white font-bold text-sm">Condução Inteligente</h3>
                        <p class="text-xs text-gray-500 mt-1">Liderança</p>
                    </div>
                    <!-- Step 5 -->
                    <div class="bg-black p-6 rounded-xl border border-gray-800 flex flex-col items-center">
                        <div
                            class="w-10 h-10 rounded-full bg-brand-gold text-black font-bold flex items-center justify-center mb-4">
                            5</div>
                        <h3 class="text-white font-bold text-sm">Domínio Masculino</h3>
                        <p class="text-xs text-gray-500 mt-1">Transformação</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. BEFORE VS AFTER -->
    <section class="py-20 px-4 bg-black">
        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 gap-0 rounded-2xl overflow-hidden border border-gray-800">
                <!-- Before -->
                <div class="bg-red-900/20 p-10 text-center border-b md:border-b-0 md:border-r border-red-900/30">
                    <h3 class="text-2xl font-bold text-red-500 mb-8 uppercase tracking-widest">Antes</h3>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-center justify-center gap-2"><span class="text-red-500">✕</span> Inseguro
                        </li>
                        <li class="flex items-center justify-center gap-2"><span class="text-red-500">✕</span> Perdido
                        </li>
                        <li class="flex items-center justify-center gap-2"><span class="text-red-500">✕</span>
                            Repetitivo</li>
                        <li class="flex items-center justify-center gap-2"><span class="text-red-500">✕</span>
                            Substituível</li>
                        <li class="flex items-center justify-center gap-2"><span class="text-red-500">✕</span> Quebrando
                            o momento</li>
                    </ul>
                </div>
                <!-- After -->
                <div class="bg-brand-gold/10 p-10 text-center">
                    <h3 class="text-2xl font-bold text-brand-gold mb-8 uppercase tracking-widest">Depois</h3>
                    <ul class="space-y-4 text-white font-medium">
                        <li class="flex items-center justify-center gap-2"><span class="text-brand-gold">✓</span> Seguro
                        </li>
                        <li class="flex items-center justify-center gap-2"><span class="text-brand-gold">✓</span>
                            Conduzindo</li>
                        <li class="flex items-center justify-center gap-2"><span class="text-brand-gold">✓</span>
                            Presente</li>
                        <li class="flex items-center justify-center gap-2"><span class="text-brand-gold">✓</span>
                            Marcante</li>
                        <li class="flex items-center justify-center gap-2"><span class="text-brand-gold">✓</span>
                            Inesquecível</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. OFFER STACK -->
    <section class="py-20 px-4 bg-gradient-to-b from-gray-900 to-black">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-5xl font-black text-white mb-12">
                O QUE VOCÊ RECEBE
            </h2>

            <!-- Stack Container -->
            <div class="bg-gray-900/50 border border-gray-800 rounded-2xl p-8 md:p-12 mb-10">
                <div class="grid md:grid-cols-2 gap-8 items-center mb-12">
                    <!-- Image Placeholder -->
                    <div class="relative">
                        <img src="https://manualdaatracao.digital/wp-content/uploads/2025/11/mockup-bundle.png"
                            alt="Bundle" class="w-full h-auto rounded-lg shadow-2xl">
                    </div>
                    <!-- Checklist -->
                    <div class="text-left space-y-3">
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span> 15
                            aulas práticas</div>
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span> Mais
                            de 3 horas de conteúdo real</div>
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span>
                            Técnicas, sequências e princípios</div>
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span> Guia
                            de leitura corporal</div>
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span> Guia
                            de antecipação emocional</div>
                        <div class="flex items-center gap-3 text-brand-gold font-bold"><span
                                class="text-brand-gold">✓</span> Bônus premium</div>
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span> Acesso
                            vitalício</div>
                        <div class="flex items-center gap-3 text-gray-300"><span class="text-brand-gold">✓</span> Área
                            de membros privada</div>
                    </div>
                </div>

                <!-- Price -->
                <div class="flex flex-col items-center justify-center gap-2 mb-8">
                    <span class="text-gray-500 line-through text-lg">Valor total real: R$622</span>
                    <span class="text-4xl md:text-6xl font-black text-white">R$37,50</span>
                </div>

                <a href="#checkout"
                    class="btn-premium inline-block py-5 px-10 rounded-full text-xl md:text-2xl tracking-wide w-full md:w-auto min-w-[320px] animate-pulse">
                    👉 QUERO ACESSAR AGORA
                </a>
            </div>
        </div>
    </section>

    <!-- 9. SOCIAL PROOF -->
    <section class="py-16 px-4 bg-black">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Testimonial 1 -->
                <div class="bg-gray-900 p-6 rounded-xl border border-gray-800">
                    <div class="flex text-brand-gold mb-4">★★★★★</div>
                    <p class="text-gray-300 italic mb-4">"Eu percebi que estava fazendo tudo errado. A mudança foi
                        imediata."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gray-700 rounded-full"></div>
                        <span class="text-white font-bold text-sm">Ricardo M.</span>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-gray-900 p-6 rounded-xl border border-gray-800">
                    <div class="flex text-brand-gold mb-4">★★★★★</div>
                    <p class="text-gray-300 italic mb-4">"Ela reagiu de um jeito que nunca tinha acontecido. Surreal."
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gray-700 rounded-full"></div>
                        <span class="text-white font-bold text-sm">André S.</span>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-gray-900 p-6 rounded-xl border border-gray-800">
                    <div class="flex text-brand-gold mb-4">★★★★★</div>
                    <p class="text-gray-300 italic mb-4">"Minha segurança mudou no primeiro dia. O conteúdo é direto ao
                        ponto."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gray-700 rounded-full"></div>
                        <span class="text-white font-bold text-sm">Felipe K.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. GUARANTEE -->
    <section class="py-16 px-4 bg-gray-900 text-center">
        <div class="max-w-3xl mx-auto">
            <div
                class="w-24 h-24 mx-auto bg-brand-gold/20 rounded-full flex items-center justify-center mb-6 text-brand-gold">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">30 dias de garantia.</h2>
            <p class="text-gray-400 text-lg">Se você não sentir diferença real — eu devolvo 100%.</p>
        </div>
    </section>

    <!-- 11. FAQ -->
    <section class="py-20 px-4 bg-black">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold text-white text-center mb-12">Perguntas Frequentes</h2>

            <div class="space-y-4">
                <details class="group bg-gray-900 rounded-lg border border-gray-800">
                    <summary
                        class="flex justify-between items-center font-medium cursor-pointer list-none p-6 text-white">
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
                <details class="group bg-gray-900 rounded-lg border border-gray-800">
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
                <details class="group bg-gray-900 rounded-lg border border-gray-800">
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
                <details class="group bg-gray-900 rounded-lg border border-gray-800">
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

    <!-- 12. FINAL CTA -->
    <section class="py-16 px-4 bg-gray-900 border-t border-gray-800">
        <div class="max-w-4xl mx-auto text-center">
            <a href="#checkout"
                class="btn-premium inline-block py-6 px-12 rounded-full text-xl md:text-3xl tracking-wide w-full md:w-auto shadow-2xl">
                👉 LIBERAR ACESSO POR R$37,50
            </a>
            <p class="mt-4 text-gray-500 text-sm">Acesso imediato · Conteúdo liberado após 1 minuto</p>
        </div>
    </section>

    <footer class="py-10 bg-black text-center text-gray-600 text-sm">
        <p>&copy; <?php echo date('Y'); ?> Manual da Atração. Todos os direitos reservados.</p>
    </footer>

    <!-- VSL Script -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/vsl-alchemy.js"></script>

    <?php wp_footer(); ?>
</body>

</html>