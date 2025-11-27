<?php
/**
 * The main template file - Veiled Vantage Landing Page
 *
 * @package manualdaatracao
 */

// No header/footer - standalone landing page
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PH8RKMDN');</script>
	<!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Carta Confidencial — Leia Antes que Saia do Ar</title>
	<meta name="description" content="A verdade que muda tudo começa aqui">

	<!-- Open Graph -->
	<meta property="og:title" content="Carta Confidencial — Leia Antes que Saia do Ar">
	<meta property="og:description" content="A verdade que muda tudo começa aqui">
	<meta property="og:type" content="website">

	<!-- Cloaking Script - Load FIRST -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/cloaking.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'font-body' ); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH8RKMDN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="veiled-container">

	<!-- Background Images -->
	<div class="bg-images-container">
		<!-- Top Abstract Glow -->
		<div
			class="parallax-image bg-abstract-glow"
			data-speed="0.3"
			style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/abstract-glow.jpg');"
		></div>

		<!-- Right Silhouette (hidden on mobile) -->
		<div
			class="parallax-image bg-silhouette-right animate-float"
			data-speed="0.5"
			style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/silhouette-right.jpg');"
		></div>

		<!-- Left Hands (hidden on mobile) -->
		<div
			class="parallax-image bg-hands-left animate-float"
			data-speed="0.4"
			style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/hands-left.jpg');"
		></div>
	</div>

	<!-- Floating Program Images -->
	<div class="floating-programs">
		<img
			src="<?php echo get_template_directory_uri(); ?>/assets/images/products/psc-prog1.png"
			alt="Program 1"
			class="parallax-image prog-1"
			data-speed="0.2"
		>
		<img
			src="<?php echo get_template_directory_uri(); ?>/assets/images/products/psc-prog2.png"
			alt="Program 2"
			class="parallax-image prog-2"
			data-speed="0.35"
		>
		<img
			src="<?php echo get_template_directory_uri(); ?>/assets/images/products/psc-prog3.png"
			alt="Program 3"
			class="parallax-image prog-3"
			data-speed="0.25"
		>
		<img
			src="<?php echo get_template_directory_uri(); ?>/assets/images/products/psc-bonus.png"
			alt="Bonus"
			class="parallax-image prog-bonus"
			data-speed="0.4"
		>
	</div>

	<!-- Main Content -->
	<main class="main-content">
		<div class="content-card">

			<!-- Logo -->
			<div class="logo-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
			</div>

			<!-- Title -->
			<h1 class="hero-title animate-fade-in">
				O segredo pra fazer ela gozar como nunca... está prestes a ser revelado.
			</h1>

			<!-- TSL Content -->
			<?php get_template_part( 'template-parts/tsl-content' ); ?>

			<!-- CTA Button -->
			<div class="cta-container">
				<a
					href="#pricing-section"
					class="cta-button scroll-to-pricing"
				>
					Compre Agora
				</a>
			</div>

		</div>
	</main>

	<!-- Pricing Section -->
	<section id="pricing-section" class="veiled-pricing-section">
		<div class="pricing-container">

			<!-- Product Mockup Image -->
			<div class="pricing-product-mockup">
				<a href="#pricing-card-section" class="mockup-link">
					<img src="/wp-content/uploads/2025/11/product-mockup.png" alt="Programa Completo de Sexualidade">
				</a>
			</div>

			<!-- Main Title -->
			<h2 class="pricing-main-title">
				DESCONTO BLACK FRIDAY<br>
				<span class="text-wine-metallic">GARANTA AS AULAS E <span class="text-primary">+5 BÔNUS EXCLUSIVOS</span> QUE VÃO TE TRANSFORMAR EM UM HOMEM DE VERDADE.</span>
			</h2>

			<!-- Main CTA Button -->
			<div class="pricing-cta-container py-6">
					<a
						href="https://www.ggcheckout.com/checkout/v2/HhApnpmnGgSDg9PeL0JS"
						class="pricing-cta-button"
						data-cta-action="pricing"
					>
						Compre Agora
					</a>
					<p class="pricing-guarantee">🔒 Garantia de 7 dias | Acesso Imediato | Compra 100% Segura</p>
				</div>
			<!-- Alert Box -->
			<div class="pricing-alert">
				<p class="text-lg py-4">VOCÊ FOI ENSINADO A FALAR, ANDAR, ESCREVER, DIRIGIR. <span class="text-wine-metallic text-primary text-xl">MAS NINGUÉM TE ENSINOU A TRANSAR. NÓS VAMOS FAZER ISSO. E ELAS NUNCA MAIS IRÃO TE TIRAR DA CABEÇA.</span></p>
				<p class="text-lg py-4">Nosso treinamento é prático, direto, explícito — onde você vai aprender com as melhores mentes e corpos do mundo adulto como se tornar o homem que toda mulher sonha ter na cama.</p>
			</div>

			<!-- Power Statement -->
			<div class="pricing-statement">
				<p class="text-2xl">Tudo isso</strong></p>
				<p>Por apenas <strong class="text-wine-metallic"><span class="text-primary">R$19,90 </span></strong>. <br> Você vai ter acesso imediato a mais de 3 horas de conteúdo inédito, com pornstars, especialistas e coaches revelando o que nunca foi mostrado fora dos bastidores da indústria.</p>
				<p><strong class="text-wine-metallic text-base py-4"><span class="text-primary">Oferta por tempo limitado </span></strong>. <br> Te garanto que você vai se arrepender</p>
			</div>

			<!-- What You'll Learn - Carousel -->
			<div class="pricing-modules">
				<h3 class="modules-title">📚 O QUE VOCÊ VAI APRENDER</h3>
				<p class="modules-subtitle">15 Aulas Práticas Com Especialistas Reais</p>

				<!-- Lessons Carousel -->
				<div class="veiled-carousel">
					<button class="veiled-carousel-nav veiled-carousel-prev" aria-label="Anterior">‹</button>
					<div class="veiled-carousel-track" id="veiled-carousel-track">

						<!-- Lesson 1 -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-1.jpg" alt="Aula 1">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4 ">Aula 1</span>
									</div>
									<h3 class="lesson-title">Comunicação Sexual Sem Filtros</h3>
									<p class="lesson-description">Como criar tensão e antecipação antes do toque. O jogo psicológico que faz ela implorar.</p>
								</div>
							</div>
						</div>

						<!-- Lesson 2 -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-2.jpg" alt="Aula 2">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4 ">Aula 2</span>
									</div>
									<h3 class="lesson-title">Consentimento & Exploração</h3>
									<p class="lesson-description">Estabelecer limites, criar confiança e transformar isso em combustível para desejo real.</p>
								</div>
							</div>
						</div>

						<!-- Lesson 3 -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-3.jpg" alt="Aula 3">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4 ">Aula 3</span>
									</div>
									<h3 class="lesson-title">Anatomia do Prazer Feminino</h3>
									<p class="lesson-description">Mapeamento completo: Ponto G, clitóris, zonas erógenas. Onde tocar, como tocar, quando parar.</p>
								</div>
							</div>
						</div>

						<!-- Lesson 4 -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-4.jpg" alt="Aula 4">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4 ">Aula 4</span>
									</div>
									<h3 class="lesson-title">Ritmo, Controle e Timing</h3>
									<p class="lesson-description">Domine o ritmo que faz ela perder o controle. Deixe de ser reativo e comande o prazer dela.</p>
								</div>
							</div>
						</div>

						<!-- Lesson 5 -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-5.jpg" alt="Aula 5">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4 ">Aula 5</span>
									</div>
									<h3 class="lesson-title">Química Hormonal do Desejo</h3>
									<p class="lesson-description">Como hackear dopamina, oxitocina e endorfina para criar dependência física e emocional.</p>
								</div>
							</div>
						</div>

						<!-- Lesson 6 -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-6.jpg" alt="Aula 6">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4 ">Aula 6</span>
									</div>
									<h3 class="lesson-title">Os 3 C's do Amante Perfeito</h3>
									<p class="lesson-description">Química, Confiança e Controle. Seja o padrão que nenhum outro homem vai superar.</p>
								</div>
							</div>
						</div>

						<!-- Lesson 7 -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-7.jpg" alt="Aula 7">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4 ">Aula 7</span>
									</div>
									<h3 class="lesson-title">Leitura Corporal Avançada</h3>
									<p class="lesson-description">Ler respiração, olhar, quadril, microexpressões. Saiba o que ela quer antes dela dizer.</p>
								</div>
							</div>
						</div>

						<!-- Lesson 8 -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-8.jpg" alt="Aula 8">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4 ">Aula 8</span>
									</div>
									<h3 class="lesson-title">Presença Alfa no Sexo</h3>
									<p class="lesson-description">Dominar o ambiente com olhar, toque e energia. Ela sente que você está no controle.</p>
								</div>
							</div>
						</div>

						<!-- Lesson 9 -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-9.jpg" alt="Aula 9">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4 ">Aula 9</span>
									</div>
									<h3 class="lesson-title">Foreplay Que Explode Desejo</h3>
									<p class="lesson-description">Transforme jogo prévio em explosão de antecipação. Nada de mecânico — só prazer real.</p>
								</div>
							</div>
						</div>

						<!-- Lesson 10 -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-10.jpg" alt="Aula 10">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4 ">Aula 10</span>
									</div>
									<h3 class="lesson-title">Posições Para Prazer Máximo</h3>
									<p class="lesson-description">Domine posições que maximizam estímulo do Ponto G, clitóris e conexão visual.</p>
								</div>
							</div>
						</div>

						<!-- Lesson 11 -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-11.jpg" alt="Aula 11">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4 ">Aula 11</span>
									</div>
									<h3 class="lesson-title">Kink, Fantasias e Dominação</h3>
									<p class="lesson-description">Explore fetiches e BDSM com segurança e respeito. Seja o homem ousado que sabe o que faz.</p>
								</div>
							</div>
						</div>

						<!-- Lesson 12 -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-12.jpg" alt="Aula 12">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4 ">Aula 12</span>
									</div>
									<h3 class="lesson-title">Técnicas Demonstradas ao Vivo</h3>
									<p class="lesson-description">Beijos, toques, estímulos práticos. Aprenda com precisão cirúrgica por quem entende.</p>
								</div>
							</div>
						</div>

						<!-- Lesson 13 -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-13.jpg" alt="Aula 13">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4 ">Aula 13</span>
									</div>
									<h3 class="lesson-title">Dominação e Controle Total</h3>
									<p class="lesson-description">Cada toque, olhar e movimento te coloca no comando. Rendição, prazer e conexão absoluta.</p>
								</div>
							</div>
						</div>

						<!-- Lesson 14 - BONUS -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60 bonus-card">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-14.jpg" alt="Aula 14">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4  bonus-pill">BÔNUS 1</span>
									</div>
									<h3 class="lesson-title">Presença Animalística</h3>
									<p class="lesson-description">Libere seus instintos primitivos com controle total. A energia bruta que ela secretamente deseja.</p>
								</div>
							</div>
						</div>

						<!-- Lesson 15 - BONUS -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-60 bonus-card">
								<img class="lesson-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/lessons/lesson-15.jpg" alt="Aula 15">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4  bonus-pill">BÔNUS 2</span>
									</div>
									<h3 class="lesson-title">O Predador Que Ela Nunca Esquece</h3>
									<p class="lesson-description">Seja o homem que ela compara com todos os outros — e nenhum chega perto.</p>
								</div>
							</div>
						</div>

					</div>
					<button class="veiled-carousel-nav veiled-carousel-next" aria-label="Próximo">›</button>
				</div>
			</div>

			<!-- BONUS SECTION - Carousel -->
			<div class="bonus-mega-section">
				<h3 class="bonus-mega-title">🎁 BÔNUS EXCLUSIVOS INCLUSOS</h3>
				<p class="bonus-mega-subtitle">5 Guias Premium de Domínio e Presença Masculina</p>

				<!-- Bonus Carousel -->
				<div class="veiled-carousel bonus-carousel">
					<button class="veiled-carousel-nav veiled-carousel-prev" aria-label="Anterior">‹</button>
					<div class="veiled-carousel-track" id="bonus-carousel-track">

						<!-- Bonus 1: Arquétipo do Macho Alfa -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-full bonus-card">
								<img class="lesson-bg" src="wp-content/uploads/2025/11/arquetipo-macho-alfa.png" alt="Arquétipo do Macho Alfa">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4  bonus-pill">BÔNUS #1</span>
										<span class="bonus-value-pill">R$ 197</span>
									</div>
									<h3 class="lesson-title">Arquétipo do Macho Alfa</h3>
									<p class="lesson-description">Ative sua identidade ancestral de liderança e presença. Os 5 arquétipos masculinos e como usá-los.</p>
								</div>
							</div>
						</div>

						<!-- Bonus 2: Código da Confiança Masculina -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-full bonus-card">
								<img class="lesson-bg" src="wp-content/uploads/2025/11/codigo-confianca.png" alt="Código da Confiança Masculina">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4  bonus-pill">BÔNUS #2</span>
										<span class="bonus-value-pill">R$ 147</span>
									</div>
									<h3 class="lesson-title">Código da Confiança Masculina</h3>
									<p class="lesson-description">Construa uma base inabalável de autoconfiança. Técnicas para eliminar insegurança e dúvida.</p>
								</div>
							</div>
						</div>

						<!-- Bonus 3: Comunicação de Alto Impacto -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-full bonus-card">
								<img class="lesson-bg" src="wp-content/uploads/2025/11/comunicacao-alto-impacto.png" alt="Comunicação de Alto Impacto">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4  bonus-pill">BÔNUS #3</span>
										<span class="bonus-value-pill">R$ 127</span>
									</div>
									<h3 class="lesson-title">Comunicação de Alto Impacto</h3>
									<p class="lesson-description">A arte masculina de falar menos e impactar mais. Linguagem corporal alfa e olhar de poder.</p>
								</div>
							</div>
						</div>

						<!-- Bonus 4: Dominância Silenciosa -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-full bonus-card">
								<img class="lesson-bg" src="wp-content/uploads/2025/11/dominancia-silenciosa.png" alt="Dominância Silenciosa">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4  bonus-pill">BÔNUS #4</span>
										<span class="bonus-value-pill">R$ 167</span>
									</div>
									<h3 class="lesson-title">Dominância Silenciosa</h3>
									<p class="lesson-description">Como controlar ambientes e transmitir poder sem dizer uma palavra. Postura e presença de alto valor.</p>
								</div>
							</div>
						</div>

						<!-- Bonus 5: Guia Mental de Domínio -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block h-full bonus-card">
								<img class="lesson-bg" src="wp-content/uploads/2025/11/guia-mental-dominio.png" alt="Guia Mental de Domínio">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4  bonus-pill">BÔNUS #5</span>
										<span class="bonus-value-pill">R$ 97</span>
									</div>
									<h3 class="lesson-title">Guia Mental de Domínio, Foco e Autoridade</h3>
									<p class="lesson-description">Controle da ansiedade, calma ativa e foco absurdo. Protocolo dos 10 segundos para resetar seu estado.</p>
								</div>
							</div>
						</div>

						<!-- Bonus 6: Acesso Vitalício (Highlight) -->
						<div class="veiled-carousel-item">
							<div class="veiled-lesson-card block mx-auto my-2 highlight-bonus" style="height: 100%;">
								<img class="lesson-bg" src="wp-content/uploads/2025/11/product-mockup.png" alt="Acesso Vitalício">
								<div class="lesson-chrome-border"></div>
								<div class="lesson-gradient"></div>
								<div class="lesson-shine"></div>
								<div class="lesson-play" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="34" height="34" fill="currentColor" class="lesson-play-icon"><path d="M8 5v14l11-7z"/></svg>
								</div>
								<div class="lesson-content">
									<div class="lesson-meta">
										<span class="lesson-pill mx-auto py-4  gold-pill">BÔNUS SURPRESA</span>
									</div>
									<h3 class="lesson-title">Acesso Vitalício + Atualizações Futuras</h3>
									<p class="lesson-description">Você nunca mais paga nada. Todo conteúdo novo entra automaticamente na sua conta — sem custo.</p>
								</div>
							</div>
						</div>
					</div>
					<button class="veiled-carousel-nav veiled-carousel-next" aria-label="Próximo">›</button>
</div>
				<h3 class="bonus-mega-title">BÔNUS INCLUSOS GRÁTIS POR TEMPO LIMITADO</h3>
			</div>

			<!-- Price Card -->
			<div class="pricing-card" id="pricing-card-section">
				<div class="pricing-card-header">
					<h3 class="animate-pulse">💰 TUDO ISSO, POR APENAS</h3>

					<!-- Guarantee Badge -->
					<div class="pricing-guarantee-badge1" style="text-align: center; margin: 1.5rem auto;">
						<img src="/wp-content/uploads/2025/11/guarantee-badge.png" alt="100% Money Back Guarantee" style="max-width: 80vw; display: inline-block;">
					</div>

					<div class="pricing-price">
						<span class="currency">R$</span>
						<span class="amount">19,90</span>
					</div>
				</div>

				<div class="pricing-card-body">
					<p class="pricing-intro">Vamos ser sinceros: R$19,90 é <span class="text-primary">o que você gasta num delivery.</span></p>
					<p class="pricing-intro">Mas o que você vai ganhar aqui <span class="text-primary">pode mudar completamente sua vida sexual e emocional.</span></p>

					<div class="pricing-benefits">
						<p class="bonus text-base py-2 animate-pulse">✅ +3 horas de conteúdo prático com os melhores do mundo</p>
						<p class="bonus text-base py-2 animate-pulse">✅ +15 Aulas teóricas e práticas com a mão na massa</p>
						<p class="bonus text-base py-2 animate-pulse">✅ Técnicas validadas por atrizes e especialistas da indústria</p>
						<p class="bonus text-base py-2 animate-pulse">✅ Acesso vitalício às aulas</p>
						<p class="bonus text-base py-2 animate-pulse">✅ Garantia incondicional de 7 dias</p>
						<p class="bonus text-xl py-4 animate-pulse text-primary">Ebooks Bônus Black Friday</p>
						<p class="bonus animate-pulse"><small>♠️ CÓDIGO DA CONFIANÇA MASCULINA</small></p>
						<p class="bonus animate-pulse"><small>🐺 ARQUÉTIPO DO MACHO ALFA</small></p>
						<p class="bonus animate-pulse"><small>🤫 DOMINÂNCIA SILENCIOSA</small></p>
						<p class="bonus animate-pulse"><small>🎯 GUIA MENTAL DE DOMÍNIO, FOCO E AUTOCONTROLE MASCULINO</small></p>
						<p class="bonus animate-pulse"><small>🗣️ COMUNICAÇÃO DE ALTO IMPACTO</small></p>
					</div>

					<div class="pricing-final-statement">
						<p>E o mais importante:</p>
						<p class="highlight text-base"><small>Depois desse guia você vai ter qualquer mulher <br>se rastejando por você.</small></p>
					</div>
				</div>

				<!-- Main CTA Button -->
				<div class="pricing-cta-container">
					<a
						href="https://www.ggcheckout.com/checkout/v2/HhApnpmnGgSDg9PeL0JS"
						class="pricing-cta-button"
						data-cta-action="pricing"
					>
						Compre Agora
					</a>
					<p class="pricing-guarantee">🔒 Garantia de 7 dias | Acesso Imediato | Compra 100% Segura</p>
				</div>
			</div>

			<!-- Two Choices -->
			<div class="pricing-choices">
				<h3>🚀 VOCÊ TEM DUAS ESCOLHAS AGORA</h3>
				<div class="choices-grid">
					<div class="choice-item negative">
						<span class="choice-number">1️⃣</span>
						<p>Fechar essa página e continuar achando que "transa bem" — enquanto ela finge prazer.</p>
					</div>
					<div class="choice-item positive">
						<span class="choice-number">2️⃣</span>
						<p>Ou clicar no botão abaixo e entrar pro grupo dos 1% dos homens que realmente sabem o que estão fazendo.</p>
					</div>
				</div>
			</div>

			<!-- Final CTA -->
			<div class="pricing-final-cta">
				<p class="final-message">Clique no botão agora e garanta seu acesso antes que essa oferta saia do ar.</p>
				<p class="final-impact">Porque quando você dominar isso… nada vai ser igual na sua vida — dentro e fora da cama.</p>

				<a
					href="https://www.ggcheckout.com/checkout/v2/HhApnpmnGgSDg9PeL0JS"
					class="pricing-cta-button final"
					data-cta-action="final"
				>
					Compre Agora
				</a>

				<div class="final-value">
					<p class="value-price">💥 R$19,90 – ACESSO IMEDIATO + 3 HORAS DE CONTEÚDO PRÁTICO</p>
					<p class="value-statement">👉 CLIQUE AGORA E TRANSFORME-SE NO HOMEM QUE ELA NUNCA VAI ESQUECER.</p>
				</div>
			</div>

		</div>
	</section>

	<!-- Footer -->
	<footer class="veiled-footer">
		<p>
			© <?php echo date('Y'); ?> | Todos os direitos reservados |
			<a href="#">Termos</a> |
			<a href="#">Política de Privacidade</a>
		</p>
	</footer>

	<!-- Progress Sidebar -->
	<div id="progress-sidebar" class="progress-sidebar">
		<div class="progress-bar-vertical">
			<div class="progress-fill" id="progress-fill"></div>
		</div>
		<div class="progress-text">
			<span class="progress-icon">🛒</span>
			<span class="progress-label">Comprar</span>
		</div>
	</div>

</div>

<?php wp_footer(); ?>

</body>
</html>
