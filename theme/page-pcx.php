<?php
/**
 * Template Name: PCX - Forge Essence
 *
 * Landing page para Pornstar Coaching + We Teach Sex University
 *
 * @package manualdaatracao
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PH8RKMDN');</script>
    <!-- End Google Tag Manager -->

    <!-- Cloaking Script - DEVE VIR ANTES DO wp_head() -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/cloaking-pcx.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class( 'page-template-page-pcx' ); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH8RKMDN"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="pcx-wrapper md:hidden sm:block">

        <!-- SECTION 1: HERO -->
        <section class="pcx-hero">
            <div class="pcx-hero-bg"></div>
            <div class="pcx-container">
                <div class="pcx-hero-content">
                    <h1 class="pcx-hero-headline">
                        O ÚNICO TREINAMENTO PRA VOCÊ VIRAR O CARA QUE<br>
                        <span class="pcx-highlight">AS MULHERES NÃO CONSEGUEM ESQUECER.</span>
                    </h1>

                    <div class="pcx-hero-subheadline">
                        <p class="text-sm text-muted-foreground">Te ensinaram a falar, andar, escrever, dirigir.<br>
                        <span class="text-primary text-normal text-bold py-10">Mas <strong>ninguém nunca te ensinou a transar.</strong></span></p>

                    <?php
                        // Thumbnail da VSL (mesmo usado na page-vsl.php)
                        $vsl_thumbnail_url = 'https://manualdaatracao.digital/wp-content/uploads/2025/11/CURSO-REAL.png';
                    ?>

                    <!-- VSL 9:16 na HERO -->
                    <div class="vsl-player-wrapper">
                        <div class="vsl-player-container">
                            <button class="vsl-thumbnail-button">
                                <img src="<?php echo esc_url( $vsl_thumbnail_url ); ?>" alt="VSL Preview" class="vsl-thumbnail-image">
                                <div class="vsl-play-overlay">
                                    <div class="vsl-play-button">
                                        <svg class="vsl-play-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <!-- Barra de progresso de carregamento do vídeo -->
                        <div class="vsl-loading-bar">
                            <div class="vsl-loading-fill" id="vsl-loading-fill"></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Todo o restante da LP fica bloqueado até 1 min de vídeo -->
        <div id="pcx-locked-content" class="pcx-locked">

        <!-- Elementos bloqueados até VSL -->
        <section class="pcx-hero-extra-content">
            <div class="pcx-container">
                <p class="text-sm text-muted-foreground"><br>
                    Ela finge que foi "incrível". Você sente que foi "ok". </br> </br> </br> <span class="text-primary text-2xl">E no fundo, os dois sabem que dava pra ser MUITO mais.</span></p>
                <p class="text-sm text-muted-foreground"><br>
                    </br> <span class="text-primary text-3xl text-bold">Esse é o treinamento final para:</span></p>

                <div class="pcx-hero-bullets">
                    <ul>
                        <li>✓ Ela parar de inventar desculpa de dor de cabeça.</li>
                        <li>✓ Mudar a chave de você correndo atrás para ela correndo atrás de você.</li>
                        <li>✓ E você vira o cara que ela compara em silêncio com TODOS os outros.</li>
                    </ul>
                </div>

                <div class="pcx-hero-offer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/program.png" alt="Programa" class="pcx-program-image" />
                    <div class="pcx-price-box">
                        <div class="pcx-price-main">R$ 49,90</div>
                        <div class="pcx-price-benefits">
                            <span>✓ Acesso imediato</span>
                            <span>✓ +3h de aulas</span>
                            <span>✓ 7 dias de garantia total</span>
                        </div>
                    </div>

                    <a href="https://www.ggcheckout.com/checkout/v2/HhApnpmnGgSDg9PeL0JS" class="pcx-cta-primary" data-cta-location="hero">
                        Quero Entrar Agora
                    </a>

                    <div class="pcx-guarantee-badge">
                        🛡️ 7 dias de garantia total
                    </div>
                </div>

                <div class="pcx-hero-mockup">
                    <div class="pcx-mockup-card">
                        <div class="pcx-mockup-icon">🎯</div>
                        <p>Transformação real começa aqui</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: INJUSTIÇA (Problem Section) -->
        <section class="pcx-problem">
            <div class="pcx-container">
                <h2 class="pcx-section-title">Por que esse treinamento existe</h2>

                <div class="pcx-problem-content">
                    <p class="pcx-problem-intro">Você nasceu em um mundo onde:</p>

                    <ul class="pcx-problem-list">
                        <li>
                            <span class="pcx-problem-icon">❌</span>
                            <div class="pcx-problem-text">
                                <strong>Ninguém conversa sério sobre sexo.</strong>
                            </div>
                        </li>
                        <li>
                            <span class="pcx-problem-icon">❌</span>
                            <div class="pcx-problem-text">
                                <strong>Pornô te mostrou um roteiro falso, plástico e exagerado.</strong>
                            </div>
                        </li>
                        <li>
                            <span class="pcx-problem-icon">❌</span>
                            <div class="pcx-problem-text">
                                <strong>Mulheres quase nunca falam quando foi ruim</strong> – elas só somem ou perdem o interesse.
                            </div>
                        </li>
                    </ul>

                    <p class="pcx-problem-explanation">
                        Você foi ensinado a ser "educado", "legalzinho"… mas não a ser o homem que:
                    </p>

                    <ul class="pcx-problem-skills">
                        <li>✓ Lê o corpo dela como um mapa,</li>
                        <li>✓ Comanda o ritmo,</li>
                        <li>✓ Faz ela sair da cama com a perna tremendo e a cabeça viciada em você.</li>
                    </ul>

                    <div class="pcx-problem-pain">
                        <h3>Esse buraco de formação gera o cenário que você já conhece:</h3>
                        <ul>
                            <li>🔸 Ela goza pouco (ou quase nunca com penetração).</li>
                            <li>🔸 Você termina se perguntando se foi suficiente.</li>
                            <li>🔸 E o pior: você sente que tem muito mais potência do que está entregando.</li>
                        </ul>
                    </div>

                    <p class="pcx-problem-transition">
                        Esse treinamento foi desenhado exatamente pra isso:<br>
                        <strong>pegar um cara normal e transformar em uma experiência sexual inesquecível.</strong>
                    </p>
                </div>
            </div>
        </section>

        <!-- SECTION 3: MECHANISM -->
        <section class="pcx-mechanism">
            <div class="pcx-container">
                <h2 class="pcx-section-title">O mecanismo por trás do We Teach Sex University</h2>
                <p class="pcx-mechanism-subtitle">Aqui não tem "truquezinho de cama" nem dica rasa.<br>
                Você vai aprender o método completo que une 4 pilares:</p>

                <div class="pcx-mechanism-grid">
                    <div class="pcx-mechanism-card">
                        <div class="pcx-mechanism-number">1</div>
                        <h3>Química & Hormônios do Prazer</h3>
                        <p>Entender como endorfina, oxitocina e dopamina funcionam é entender como viciar o corpo e a mente dela em você – de forma saudável. Você aprende a criar conexão, apego e desejo contínuo, não só "uma noite boa".</p>
                    </div>

                    <div class="pcx-mechanism-card">
                        <div class="pcx-mechanism-number">2</div>
                        <h3>Comunicação & Leitura de Sinais</h3>
                        <p>Você vai aprender a ler olho, respiração, quadril, microexpressão – e saber exatamente quando acelerar, quando segurar, quando mudar de estímulo. É o tipo de leitura que faz a mulher pensar: <em>"Como esse cara sabe exatamente o que eu quero sem eu falar nada?"</em></p>
                    </div>

                    <div class="pcx-mechanism-card">
                        <div class="pcx-mechanism-number">3</div>
                        <h3>Técnica Pornstar Aplicada à Vida Real</h3>
                        <p>Técnicas de foreplay, clitóris, ponto G, posições, ritmo, controle… Tudo demonstrado por quem vive disso, traduzido pra realidade do seu quarto – sem câmeras, sem diretor, sem performance forçada.</p>
                    </div>

                    <div class="pcx-mechanism-card">
                        <div class="pcx-mechanism-number">4</div>
                        <h3>Presença Alfa & Domínio Masculino</h3>
                        <p>Sexo animalístico, dominação consensual, energia de macho alfa, controle emocional, comunicação de alto impacto – tudo pra você ser o cara que entra no quarto e automaticamente domina o ambiente, sem precisar levantar a voz ou se provar.</p>
                    </div>
                </div>

                <p class="pcx-mechanism-conclusion">
                    Você não vai aprender só a fazer ela gozar.<br>
                    <strong>Vai aprender a ser o homem que ela quer se rastejar pra estar perto.</strong>
                </p>
            </div>
        </section>

        <!-- SECTION 4: TRANSFORMATION -->
        <section class="pcx-transformation">
            <div class="pcx-container">
                <h2 class="pcx-section-title">Quem você vira depois desse treinamento</h2>

                <div class="pcx-transformation-grid">
                    <div class="pcx-transformation-item">
                        <div class="pcx-transformation-icon">💪</div>
                        <h3>Autoconfiança Sexual</h3>
                        <p>Zero dúvida, zero insegurança. Você sabe exatamente o que fazer.</p>
                    </div>

                    <div class="pcx-transformation-item">
                        <div class="pcx-transformation-icon">👑</div>
                        <h3>Presença Dominante</h3>
                        <p>O cara que comanda o ambiente sem precisar gritar.</p>
                    </div>

                    <div class="pcx-transformation-item">
                        <div class="pcx-transformation-icon">🔥</div>
                        <h3>Capacidade de Dar Prazer Real</h3>
                        <p>Ela goza de verdade. E você sabe disso.</p>
                    </div>

                    <div class="pcx-transformation-item">
                        <div class="pcx-transformation-icon">💎</div>
                        <h3>Mulher Viciada em Você</h3>
                        <p>Ela não esquece. Ela compara todos com você.</p>
                    </div>

                    <div class="pcx-transformation-item">
                        <div class="pcx-transformation-icon">✅</div>
                        <h3>Zero Dúvida Se Ela Fingiu</h3>
                        <p>Você lê os sinais. Você sabe quando é real.</p>
                    </div>

                    <div class="pcx-transformation-item">
                        <div class="pcx-transformation-icon">⚡</div>
                        <h3>Identidade de Alto Valor</h3>
                        <p>Não é só técnica. É quem você se torna.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5: COURSE LESSONS (15 aulas) -->
        <section class="pcx-lessons">
            <div class="pcx-container">
                <h2 class="pcx-section-title">15 Aulas Com Especialistas Reais</h2>
                <p class="pcx-lessons-subtitle">Cada aula é ministrada por performers profissionais com anos de experiência.</p>

                <!-- Carousel (horizontal) with chrome hover -->
                <div class="pcx-carousel">
                    <button class="pcx-carousel-nav pcx-carousel-prev" aria-label="Anterior">‹</button>
                    <div class="pcx-carousel-track" id="pcx-carousel-track">
                        <?php for ($i = 1; $i <= 15; $i++): ?>
                        <div class="pcx-carousel-item">
                            <div class="pcx-lesson-card">
                                <img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-<?php echo $i; ?>.jpg" alt="Aula <?php echo $i; ?>">

                                <div class="lesson-chrome-border"></div>
                                <div class="lesson-gradient"></div>
                                <div class="lesson-shine"></div>

                                <div class="lesson-play" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
                                </div>

                                <div class="lesson-content">
                                    <div class="lesson-meta">
                                        <span class="lesson-pill">Aula <?php echo $i; ?></span>
                                    </div>
                                    <h3 class="lesson-title">Conteúdo da Aula <?php echo $i; ?></h3>
                                    <p class="lesson-description">Detalhes práticos e aplicáveis para resultados reais.</p>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <button class="pcx-carousel-nav pcx-carousel-next" aria-label="Próximo">›</button>
                </div>
            </div>
        </section>

        <!-- SECTION 6: COACHES -->
        <section class="pcx-coaches">
            <div class="pcx-container">
                <h2 class="pcx-section-title">Quem está te ensinando</h2>

                <div class="pcx-coaches-grid">
                    <div class="pcx-coach-card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Katie_Morgan_2016.jpg/960px-Katie_Morgan_2016.jpg" alt="Katie Morgan">
                        <h3>Katie Morgan</h3>
                        <p>Atriz e educadora sexual com mais de 20 anos de experiência. Especialista em comunicação e prazer feminino.</p>
                    </div>

                    <div class="pcx-coach-card">
                        <img src="https://m.media-amazon.com/images/M/MV5BZmNhYWUwMGQtMTZmZS00ZWEyLWE4NWMtOTkwOGNjZjA1MGI3XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="Ryan McClean">
                        <h3>Ryan McClean</h3>
                        <p>Performance coach e especialista em técnicas avançadas de controle e presença masculina.</p>
                    </div>

                    <div class="pcx-coach-card">
                        <img src="https://t.fapcat.com/contents/videos_screenshots/317000/317506/preview.jpg" alt="Julia Robbie">
                        <h3>Julia Robbie</h3>
                        <p>Especialista em dinâmicas de poder, BDSM e dominação consensual. Professora de leitura corporal.</p>
                    </div>
                </div>

                <p class="pcx-coaches-footer">
                    Anos de experiência, centenas de produções, e agora ensinando você a dominar o que eles dominaram.
                </p>
            </div>
        </section>

        <!-- SECTION 7: MODULES -->
        <section class="pcx-modules">
            <div class="pcx-container">
                <h2 class="pcx-section-title">O que você vai receber ao entrar hoje</h2>
                <p class="pcx-modules-intro">Tudo organizado numa área de membros, com aulas em vídeo separadas por temas.<br>
                Você entra, dá play e já sai com coisa nova pra aplicar hoje à noite.</p>

                <div class="pcx-modules-list">
                    <div class="pcx-module-item">
                        <div class="pcx-module-header">
                            <span class="pcx-module-number">MÓDULO 1</span>
                            <h3>Comunicação, Consentimento e Desejo Sem Filtro</h3>
                        </div>
                        <ul class="pcx-module-topics">
                            <li>Como falar de sexo sem soar carente ou bizarro.</li>
                            <li>Como criar um ambiente seguro pra ela falar TUDO o que quer na cama.</li>
                            <li>Como fazer combinados, limites e fantasias sem matar o clima – e ainda deixar mais excitante.</li>
                        </ul>
                    </div>

                    <div class="pcx-module-item">
                        <div class="pcx-module-header">
                            <span class="pcx-module-number">MÓDULO 2</span>
                            <h3>Prazer Feminino, Ponto G, Clitóris e Squirting</h3>
                        </div>
                        <ul class="pcx-module-topics">
                            <li>Como entender o mapa de prazer feminino sem adivinhação.</li>
                            <li>Por que a maioria dos caras erra o ritmo – e como corrigir em segundos.</li>
                            <li>A lógica real do squirting, hidratação, técnica, posição e o papel do homem como apoio, não julgamento.</li>
                        </ul>
                    </div>

                    <div class="pcx-module-item">
                        <div class="pcx-module-header">
                            <span class="pcx-module-number">MÓDULO 3</span>
                            <h3>A Ciência do Sexo Que Vicia (Endorfina, Oxitocina, Dopamina)</h3>
                        </div>
                        <ul class="pcx-module-topics">
                            <li>Como usar toque, ritmo e presença pra liberar hormônios que fazem ela se apegar a você.</li>
                            <li>Como transformar sexo em algo que ela associa com cura, alívio e conexão profunda – não só descarga física.</li>
                        </ul>
                    </div>

                    <div class="pcx-module-item">
                        <div class="pcx-module-header">
                            <span class="pcx-module-number">MÓDULO 4</span>
                            <h3>O Amante Ideal: Três C's (Química, Confiança, Condução)</h3>
                        </div>
                        <ul class="pcx-module-topics">
                            <li>Como se tornar o amante que ela não esquece: química, confiança e performance.</li>
                            <li>Como parar de transar "com pressa" e começar a transar pra marcar território no corpo e na mente dela.</li>
                        </ul>
                    </div>

                    <div class="pcx-module-item">
                        <div class="pcx-module-header">
                            <span class="pcx-module-number">MÓDULO 5</span>
                            <h3>Leitura do Corpo, Tantra e Presença Absurda</h3>
                        </div>
                        <ul class="pcx-module-topics">
                            <li>Como usar olhar, respiração e toques mínimos pra deixar ela hipnotizada.</li>
                            <li>Técnicas inspiradas em tantra pra criar conexão tão forte que ela sente que "só com você é diferente".</li>
                        </ul>
                    </div>

                    <div class="pcx-module-item">
                        <div class="pcx-module-header">
                            <span class="pcx-module-number">MÓDULO 6</span>
                            <h3>Foreplay Avançado & Posições Que Mais Dão Prazer Pra Ela</h3>
                        </div>
                        <ul class="pcx-module-topics">
                            <li>Foreplay físico e mental: como deixar ela derretendo antes de encostar.</li>
                            <li>Posições reais que funcionam fora do pornô: missionária avançada, variações do doggy, side spoon, cowgirl, etc.</li>
                            <li>Qual posição usar quando o pênis é maior, quando ela é mais sensível, quando você quer dominar total.</li>
                        </ul>
                    </div>

                    <div class="pcx-module-item">
                        <div class="pcx-module-header">
                            <span class="pcx-module-number">MÓDULO 7</span>
                            <h3>Kink, BDSM e Dominação Consensual</h3>
                        </div>
                        <ul class="pcx-module-topics">
                            <li>Como introduzir tapas, puxão de cabelo, amarrações e dinâmicas de poder SEM virar um idiota agressivo.</li>
                            <li>Palavras de segurança, limites, controles e como fazer tudo de forma madura, quente e segura.</li>
                        </ul>
                    </div>

                    <div class="pcx-module-item">
                        <div class="pcx-module-header">
                            <span class="pcx-module-number">MÓDULO 8</span>
                            <h3>Sexo "Animalístico" & A Energia do Predador Consensual</h3>
                        </div>
                        <ul class="pcx-module-topics">
                            <li>Como ligar o modo primitivo, selvagem, sem perder o respeito nem o controle.</li>
                            <li>Como ser o cara que ela escolhe pra viver as fantasias que jamais contaria pros outros.</li>
                        </ul>
                    </div>
                </div>

                <p class="pcx-modules-footer">
                    Tudo isso em <strong>+ de 3 horas de aulas</strong> direto ao ponto, com demonstrações, explicação clara e foco em prática imediata.
                </p>
            </div>
        </section>

        <!-- SECTION 8: BONUSES -->
        <section class="pcx-bonuses">
            <div class="pcx-container">
                <h2 class="pcx-section-title">Bônus Exclusivos Para Quem Entrar Nessa Oferta de R$ 49,90</h2>
                <p class="pcx-bonuses-intro">Você não vai só aprender técnica de cama.<br>
                <strong>Vai virar um homem com presença, domínio e comunicação de alto valor.</strong></p>

                <div class="pcx-bonuses-grid">
                    <div class="pcx-bonus-card">
                        <div class="pcx-bonus-badge">BÔNUS #1</div>
                        <h3>Comunicação de Alto Impacto</h3>
                        <div class="pcx-bonus-value">R$ 97</div>
                        <p>A arte masculina de falar menos, impactar mais e ser percebido como líder natural.</p>
                        <ul>
                            <li>Fala de alto valor</li>
                            <li>Uso estratégico de silêncio</li>
                            <li>Linguagem corporal alfa e olhar de impacto</li>
                        </ul>
                    </div>

                    <div class="pcx-bonus-card">
                        <div class="pcx-bonus-badge">BÔNUS #2</div>
                        <h3>Dominância Silenciosa</h3>
                        <div class="pcx-bonus-value">R$ 147</div>
                        <p>Como controlar ambientes, atrair respeito e transmitir poder sem dizer uma palavra.</p>
                        <ul>
                            <li>Sinais de dominância silenciosa</li>
                            <li>Postura, olhar, respiração e movimentos de alto valor</li>
                            <li>Ritual diário pra se tornar inabalável</li>
                        </ul>
                    </div>

                    <div class="pcx-bonus-card">
                        <div class="pcx-bonus-badge">BÔNUS #3</div>
                        <h3>Guia Mental de Domínio, Foco e Autocontrole Masculino</h3>
                        <div class="pcx-bonus-value">R$ 97</div>
                        <p>Controle da ansiedade, calma ativa e foco absurdo.</p>
                        <ul>
                            <li>Protocolo dos 10 segundos pra resetar seu estado</li>
                            <li>Respiração de domínio</li>
                            <li>Plano de treino de 7 dias pra construir autocontrole real</li>
                        </ul>
                    </div>

                    <div class="pcx-bonus-card">
                        <div class="pcx-bonus-badge">BÔNUS #4</div>
                        <h3>Arquétipo do Macho Alfa</h3>
                        <div class="pcx-bonus-value">R$ 147</div>
                        <p>Ative sua identidade ancestral de liderança e presença.</p>
                        <ul>
                            <li>Os 5 arquétipos masculinos (Rei, Guerreiro, Protetor, Caçador, Estrategista)</li>
                            <li>Ritual de ativação em 20 segundos</li>
                            <li>Como usar seu arquétipo em encontros, no trabalho e na cama</li>
                        </ul>
                    </div>
                </div>

                <div class="pcx-value-stack">
                    <p>Só esses bônus, vendidos separados, poderiam facilmente custar mais que o treinamento principal.</p>
                    <p class="pcx-value-highlight">Com essa oferta, você leva <strong>TUDO junto por R$ 49,90.</strong></p>
                </div>
            </div>
        </section>

        <!-- SECTION 9: VALUE STACK -->
        <section class="pcx-valuestack">
            <div class="pcx-container">
                <h2 class="pcx-section-title">O Que Você Está De Fato Comprando</h2>

                <div class="pcx-valuestack-content">
                    <p class="pcx-valuestack-intro">Não é "mais um curso de sexo".<br>
                    <strong>Você está comprando:</strong></p>

                    <ul class="pcx-valuestack-list">
                        <li>✓ Um mapa completo de como dar prazer real pra uma mulher.</li>
                        <li>✓ Um modo de operar que faz ela sentir que finalmente encontrou um homem de verdade.</li>
                        <li>✓ Uma identidade nova: você como o cara que domina corpo, mente e ambiente.</li>
                        <li>✓ A paz de nunca mais deitar na cama pensando: "será que ela fingiu?"</li>
                    </ul>

                    <div class="pcx-valuestack-freedom">
                        <h3>Você está comprando a liberdade de:</h3>
                        <ul>
                            <li>Nunca mais ouvir "não é você, sou eu" depois de semanas de sexo morno.</li>
                            <li>Nunca mais sentir que precisa provar algo – porque seu resultado fala por você.</li>
                            <li>Deixar de ser o cara "legalzinho" e virar o cara que ela não esquece.</li>
                        </ul>
                    </div>

                    <a href="#final-cta" class="pcx-cta-primary" data-cta-location="valuestack">
                        Garantir Meu Acesso Agora
                    </a>
                </div>
            </div>
        </section>

        <!-- SECTION 10: SOCIAL PROOF (Testimonials) -->
        <section class="pcx-testimonials">
            <div class="pcx-container">
                <h2 class="pcx-section-title">Homens reais. Resultados reais.</h2>

                <div class="pcx-testimonials-grid">
                    <div class="pcx-testimonial-card">
                        <div class="pcx-testimonial-quote">"</div>
                        <p class="pcx-testimonial-text">Antes eu só fingia confiança. Agora eu realmente sei o que estou fazendo. A diferença na reação dela foi absurda.</p>
                        <div class="pcx-testimonial-author">
                            <strong>Ricardo M.</strong>
                            <span>São Paulo, SP</span>
                        </div>
                    </div>

                    <div class="pcx-testimonial-card">
                        <div class="pcx-testimonial-quote">"</div>
                        <p class="pcx-testimonial-text">Pela primeira vez eu sei que ela gozou de verdade. E ela mesma confirmou. Isso mudou completamente o nosso relacionamento.</p>
                        <div class="pcx-testimonial-author">
                            <strong>Felipe S.</strong>
                            <span>Rio de Janeiro, RJ</span>
                        </div>
                    </div>

                    <div class="pcx-testimonial-card">
                        <div class="pcx-testimonial-quote">"</div>
                        <p class="pcx-testimonial-text">Eu achava que era só eu que tinha essa insegurança. O treinamento me mostrou que era falta de técnica mesmo. Agora eu domino.</p>
                        <div class="pcx-testimonial-author">
                            <strong>Thiago A.</strong>
                            <span>Belo Horizonte, MG</span>
                        </div>
                    </div>

                    <div class="pcx-testimonial-card">
                        <div class="pcx-testimonial-quote">"</div>
                        <p class="pcx-testimonial-text">Os módulos de comunicação e leitura de sinais foram um divisor de águas. Eu literalmente vejo o corpo dela de forma diferente agora.</p>
                        <div class="pcx-testimonial-author">
                            <strong>Lucas P.</strong>
                            <span>Curitiba, PR</span>
                        </div>
                    </div>

                    <div class="pcx-testimonial-card">
                        <div class="pcx-testimonial-quote">"</div>
                        <p class="pcx-testimonial-text">R$ 49,90 foi o melhor investimento que eu já fiz na minha vida. Sério. Mudou tudo.</p>
                        <div class="pcx-testimonial-author">
                            <strong>André C.</strong>
                            <span>Porto Alegre, RS</span>
                        </div>
                    </div>

                    <div class="pcx-testimonial-card">
                        <div class="pcx-testimonial-quote">"</div>
                        <p class="pcx-testimonial-text">Finalmente entendi o que significa ser dominante sem ser agressivo. Ela ama essa nova versão minha.</p>
                        <div class="pcx-testimonial-author">
                            <strong>Gustavo R.</strong>
                            <span>Brasília, DF</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 11: GUARANTEE -->
        <section class="pcx-guarantee">
            <div class="pcx-container">
                <div class="pcx-guarantee-badge-large">
                    <div class="pcx-guarantee-icon">🛡️</div>
                    <div class="pcx-guarantee-text">7 DIAS DE GARANTIA TOTAL</div>
                </div>

                <h2 class="pcx-section-title">Ou Você Começa a Ver Resultado, Ou Não Fica Com o Risco</h2>

                <div class="pcx-guarantee-content">
                    <p>Você tem <strong>7 dias</strong> para entrar, assistir, estudar e aplicar.</p>

                    <p>Se dentro desse período você olhar e pensar:</p>

                    <blockquote>"Não vale nem de longe esses R$ 49,90 que eu paguei."</blockquote>

                    <p>Basta enviar um e-mail pedindo seu dinheiro de volta.<br>
                    Você recebe <strong>100% do valor</strong>, sem burocracia, sem formulários, sem interrogatório.</p>

                    <p class="pcx-guarantee-highlight">
                        <strong>O risco é meu. A decisão é sua.</strong>
                    </p>
                </div>
            </div>
        </section>

        <!-- SECTION 12: URGENCY -->
        <section class="pcx-urgency">
            <div class="pcx-container">
                <h2 class="pcx-section-title">Por Que Você Precisa Decidir Agora</h2>

                <div class="pcx-urgency-content">
                    <p class="pcx-urgency-intro">Vamos ser diretos:</p>

                    <p><strong>Homem que deixa isso pra "depois" é o mesmo que:</strong></p>

                    <ul class="pcx-urgency-list">
                        <li>Empurra problema sexual com a barriga.</li>
                        <li>Finge que "tá tudo bem" enquanto a mulher vai esfriando.</li>
                        <li>E só vai perceber o tamanho do buraco quando ela estiver distante demais – ou com outro cara.</li>
                    </ul>

                    <div class="pcx-urgency-box">
                        <h3>Além disso:</h3>
                        <ul>
                            <li>⚠️ Essa condição de R$ 49,90 com todos os bônus inclusos é uma <strong>oferta de lançamento</strong>.</li>
                            <li>⚠️ O preço pode subir ou os bônus podem ser retirados a qualquer momento, <strong>sem aviso</strong>.</li>
                        </ul>
                        <p class="pcx-urgency-final">Se você está lendo essa página, ainda está valendo.<br>
                        Depois… não tem como garantir.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 13: FAQ -->
        <section class="pcx-faq">
            <div class="pcx-container">
                <h2 class="pcx-section-title">Perguntas Frequentes</h2>

                <div class="pcx-faq-list">
                    <div class="pcx-faq-item">
                        <button class="pcx-faq-question">
                            Como vou acessar o conteúdo?
                            <span class="pcx-faq-icon">+</span>
                        </button>
                        <div class="pcx-faq-answer">
                            <p>Assim que você finalizar a compra, receberá um e-mail com login e senha para acessar a área de membros. Tudo online, 24/7, de qualquer dispositivo.</p>
                        </div>
                    </div>

                    <div class="pcx-faq-item">
                        <button class="pcx-faq-question">
                            Por quanto tempo tenho acesso?
                            <span class="pcx-faq-icon">+</span>
                        </button>
                        <div class="pcx-faq-answer">
                            <p>Acesso vitalício. Pague uma vez, assista quantas vezes quiser, pra sempre.</p>
                        </div>
                    </div>

                    <div class="pcx-faq-item">
                        <button class="pcx-faq-question">
                            Funciona se eu estiver solteiro?
                            <span class="pcx-faq-icon">+</span>
                        </button>
                        <div class="pcx-faq-answer">
                            <p>Com certeza. Você vai aprender técnicas, presença e mentalidade que funcionam com qualquer mulher, em qualquer contexto.</p>
                        </div>
                    </div>

                    <div class="pcx-faq-item">
                        <button class="pcx-faq-question">
                            Vai aparecer algo no cartão dizendo "pornstar"?
                            <span class="pcx-faq-icon">+</span>
                        </button>
                        <div class="pcx-faq-answer">
                            <p>Não. A cobrança aparece de forma totalmente discreta na sua fatura.</p>
                        </div>
                    </div>

                    <div class="pcx-faq-item">
                        <button class="pcx-faq-question">
                            Preciso de experiência?
                            <span class="pcx-faq-icon">+</span>
                        </button>
                        <div class="pcx-faq-answer">
                            <p>Zero. O treinamento foi feito tanto pra quem nunca transou quanto pra quem quer melhorar radicalmente.</p>
                        </div>
                    </div>

                    <div class="pcx-faq-item">
                        <button class="pcx-faq-question">
                            E se minha parceira for tímida?
                            <span class="pcx-faq-icon">+</span>
                        </button>
                        <div class="pcx-faq-answer">
                            <p>Perfeito. O módulo de comunicação te ensina exatamente como criar um ambiente seguro pra ela se abrir. Timidez não é problema – é oportunidade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 14: FINAL CTA -->
        <section id="final-cta" class="pcx-final-cta">
            <div class="pcx-cta-bg-radial"></div>

            <div class="pcx-container">
                <div class="pcx-cta-header">
                    <h2 class="pcx-cta-title">
                        Você pode continuar tentando sozinho...
                    </h2>
                    <p class="pcx-cta-subtitle-gold">
                        Ou finalmente dominar.
                    </p>
                    <p class="pcx-cta-description">
                        A escolha é sua. Mas pense: quanto tempo mais você vai desperdiçar sem saber o que fazer? Quanto mais vai deixar passar por insegurança?
                    </p>
                </div>

                <div class="pcx-cta-card-outer">
                    <!-- Chrome border effect -->
                    <div class="pcx-cta-chrome-border"></div>

                    <div class="bg-white border border-red-200 rounded-lg shadow-lg">
                        <div class="pcx-cta-content">
                            <!-- Pricing header with chrome accent -->
                            <div class="pcx-cta-pricing-header">
                                <div class="pcx-cta-badge">OFERTA EXCLUSIVA</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/program.png" alt="Programa" class="pcx-program-image" />
 

                                <div class="pcx-cta-pricing">
                                    <p class="text-black text-sm">De R$ 497 por apenas:</p>
                                    <div class="pcx-cta-price-main">
                                        <div class="pcx-cta-price-glow"></div>
                                        <span class="pcx-cta-price-value">R$ 37</span>
                                        <span class="pcx-cta-price-cents">,50</span>
                                    </div>
                                    <p class="text-black text-sm">Pagamento único • Acesso vitalício</p>
                                </div>
                            </div>

                            <!-- Value stack with chrome accents -->
                            <div class="pcx-cta-benefits-section">
                                <h3 class="pcx-cta-benefits-title">
                                    <span class="pcx-cta-divider-left"></span>
                                    O que está incluso
                                    <span class="pcx-cta-divider-right"></span>
                                </h3>

                                <div class="pcx-cta-benefits-list">
                                    <div class="pcx-cta-benefit-item">
                                        <div class="pcx-cta-check-icon">✓</div>
                                        <span>8 módulos completos de treinamento sexual avançado</span>
                                    </div>
                                    <div class="pcx-cta-benefit-item">
                                        <div class="pcx-cta-check-icon">✓</div>
                                        <span>15 aulas práticas com especialistas reais</span>
                                    </div>
                                    <div class="pcx-cta-benefit-item">
                                        <div class="pcx-cta-check-icon">✓</div>
                                        <span>4 bônus exclusivos de presença e domínio masculino</span>
                                    </div>
                                    <div class="pcx-cta-benefit-item">
                                        <div class="pcx-cta-check-icon">✓</div>
                                        <span>Acesso vitalício à área de membros</span>
                                    </div>
                                    <div class="pcx-cta-benefit-item">
                                        <div class="pcx-cta-check-icon">✓</div>
                                        <span>Garantia total de 7 dias para testar</span>
                                    </div>
                                    <div class="pcx-cta-benefit-item">
                                        <div class="pcx-cta-check-icon">✓</div>
                                        <span>Suporte especializado para dúvidas</span>
                                    </div>
                                </div>

                                <!-- Total value display -->
                                <div class="pcx-cta-value-total">
                                    <div class="pcx-cta-value-glow"></div>
                                    <div class="pcx-cta-value-content">
                                        <p class="text-black text-sm">Valor total do conteúdo:</p>
                                        <p class="pcx-cta-value-crossed">R$ 497</p>
                                        <p class="pcx-cta-value-savings">Economia de 92%</p>
                                    </div>
                                </div>
                            </div>

                            <a href="https://www.ggcheckout.com/checkout/v2/HhApnpmnGgSDg9PeL0JS" class="pcx-cta-button-final" data-cta-location="final">
                                <span class="pcx-cta-button-text">
                                    Assumir o controle agora →
                                </span>
                                <div class="pcx-cta-button-shine"></div>
                            </a>

                            <div class="pcx-cta-footer-info">
                                <p class="text-primary text-sm">
                                    <span class="pcx-cta-pulse"></span>
                                    🔒 Ambiente 100% seguro • Acesso imediato após confirmação
                                </p>
                                <p class="pcx-cta-urgency">
                                    ⚡ 247 homens adquiriram nas últimas 24 horas
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="pcx-cta-limited-offer">
                    Vagas limitadas neste valor. Este preço promocional pode mudar a qualquer momento.
                </p>
            </div>
        </section>

        <!-- SECTION 15: FOOTER -->
        <footer class="pcx-footer">
            <div class="pcx-container">
                <div class="pcx-footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
                </div>

                <div class="pcx-footer-links">
                    <a href="#">Termos de Uso</a>
                    <a href="#">Política de Privacidade</a>
                    <a href="#">Suporte</a>
                </div>

                <div class="pcx-footer-copyright">
                    <p>&copy; <?php echo date('Y'); ?> Pornstar Coaching. Todos os direitos reservados.</p>
                    <p>Este site não é afiliado ao Facebook ou a qualquer entidade do Facebook.</p>
                </div>
            </div>
        <!-- Fecha conteúdo bloqueado antes do footer -->
        </div><!-- /#pcx-locked-content -->

        </footer>

    <?php wp_footer(); ?>
</body>
</html>
