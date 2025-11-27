<?php
/**
 * Template Name: Studio - Landing Page Premium
 * Template Post Type: page
 *
 * Landing page premium focada em conversão direta.
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
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">

	<!-- Cloaking Script - Load FIRST -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/cloaking-vsl.js"></script>

	<?php wp_head(); ?>

	<!-- Studio Carousel CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/studio-carousel.css">

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
							dark: '#0a0a0a',
							gray: '#1a1a1a',
						}
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
		}

		.btn-premium {
			background: linear-gradient(45deg, #b48811 0%, #ebd197 50%, #b48811 100%);
			background-size: 200% auto;
			transition: all 0.5s ease;
		}

		.btn-premium:hover {
			background-position: right center;
			transform: scale(1.05);
			box-shadow: 0 0 40px rgba(212, 175, 55, 0.6);
		}

		@keyframes fadeInUp {
			from {
				opacity: 0;
				transform: translateY(30px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.animate-fade-in-up {
			animation: fadeInUp 0.8s ease-out forwards;
		}

		.animate-delay-100 {
			animation-delay: 0.1s;
		}

		.animate-delay-200 {
			animation-delay: 0.2s;
		}

		.animate-delay-300 {
			animation-delay: 0.3s;
		}

		/* Perspective for 3D cards */
		.perspective-1000 {
			perspective: 1000px;
		}

		.rotate-y-180 {
			transform: rotateY(180deg);
		}

		.backface-hidden {
			backface-visibility: hidden;
			-webkit-backface-visibility: hidden;
		}

		/* Fix for overlapping text in flip cards */
		.group:not(:hover) .rotate-y-180 {
			opacity: 0;
			pointer-events: none;
		}

		.group:hover .group-hover\:rotate-y-180 {
			opacity: 0;
			pointer-events: none;
		}

		/* Section Dividers */
		.section-divider {
			height: 1px;
			background: linear-gradient(to right, transparent, rgba(156, 163, 175, 0.3), transparent);
			margin: 4rem 0;
		}

		/* Content Lock Styles */
		.locked-content {
			filter: blur(8px);
			pointer-events: none;
			user-select: none;
			transition: filter 0.8s ease-out;
		}

		.locked-content.unlocked {
			filter: blur(0);
			pointer-events: auto;
			user-select: auto;
		}

		.content-lock-overlay {
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			z-index: 9999;
			background: rgba(0, 0, 0, 0.95);
			border: 2px solid #D4AF37;
			border-radius: 1.5rem;
			padding: 3rem 2rem;
			max-width: 500px;
			width: 90%;
			text-align: center;
			box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.8), 0 0 40px rgba(212, 175, 55, 0.3);
			transition: opacity 0.5s ease-out, transform 0.5s ease-out;
		}

		.content-lock-overlay.hidden {
			opacity: 0;
			transform: translate(-50%, -50%) scale(0.9);
			pointer-events: none;
		}

		.lock-message {
			display: flex;
			flex-direction: column;
			align-items: center;
			gap: 1.5rem;
		}

		.lock-icon {
			width: 4rem;
			height: 4rem;
			color: #D4AF37;
			animation: pulse 2s ease-in-out infinite;
		}

		.lock-message h3 {
			font-size: 1.875rem;
			font-weight: 900;
			color: white;
			margin: 0;
			text-transform: uppercase;
			letter-spacing: 0.05em;
		}

		.lock-message p {
			font-size: 1.125rem;
			color: #d1d5db;
			margin: 0;
			line-height: 1.6;
		}

		.lock-message strong {
			color: #D4AF37;
			font-weight: 700;
		}

		.unlock-progress {
			width: 100%;
			height: 8px;
			background: rgba(255, 255, 255, 0.1);
			border-radius: 9999px;
			overflow: hidden;
			margin-top: 0.5rem;
		}

		.unlock-progress-bar {
			height: 100%;
			background: linear-gradient(to right, #b48811, #D4AF37, #ebd197);
			width: 0%;
			transition: width 0.3s ease-out;
			border-radius: 9999px;
		}

		@keyframes pulse {

			0%,
			100% {
				opacity: 1;
				transform: scale(1);
			}

			50% {
				opacity: 0.7;
				transform: scale(1.05);
			}
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
		class="relative min-h-screen flex flex-col items-center justify-center px-4 py-20 text-center bg-[url('https://images.unsplash.com/photo-1592399668789-6432393d5761?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center bg-no-repeat bg-fixed">
		<div class="absolute inset-0 bg-black/90"></div>

		<div class="relative z-10 max-w-5xl mx-auto space-y-10">
			<div class="animate-fade-in-up">
				<h1 class="text-4xl md:text-7xl font-black uppercase tracking-tight leading-tight mb-6">
					Você não vai mais <br> <span class="text-red-600">passar vergonha</span><br>com mulher nenhuma <span
						class="text-red-600 text-5xl"><br>na cama.</span>
				</h1>
				<p class="text-xl md:text-2xl text-gray-300 font-light max-w-3xl mx-auto">
					Porque agora você vai descobrir o que ninguém nunca te ensinou…<br>
					<span class="font-semibold text-white">mas que elas sempre esperaram que você soubesse.</span>
				</p>
			</div>

			<!-- VSL Placeholder -->
			<!-- VSL Placeholder -->
			<div class="animate-fade-in-up animate-delay-200 opacity-0">
				<div class="w-full max-w-[350px] mx-auto aspect-[9/16] relative group">
					<!-- Replicating page-vsl.php structure but with Tailwind for layout -->
					<div class="vsl-player-wrapper w-full h-full">
						<div
							class="vsl-player-container w-full h-full relative overflow-hidden rounded-2xl border-2 border-gray-800 shadow-2xl hover:border-brand-gold/50 transition-all duration-500">
							<button
								class="vsl-thumbnail-button w-full h-full relative block p-0 border-0 bg-transparent cursor-pointer">
								<img src="<?php echo esc_url('https://manualdaatracao.digital/wp-content/uploads/2025/11/CURSO-REAL.png'); ?>"
									alt="VSL Preview" class="vsl-thumbnail-image w-full h-full object-cover">
								<div
									class="vsl-play-overlay absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/10 transition-all">
									<div
										class="vsl-play-button w-20 h-20 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center border-2 border-white/30 group-hover:scale-110 transition-transform duration-300">
										<svg class="vsl-play-icon w-8 h-8 text-white fill-current ml-1"
											fill="currentColor" viewBox="0 0 24 24">
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
			</div>

			<div class="animate-fade-in-up animate-delay-300 opacity-0 flex flex-col items-center gap-5 pt-6">
				<div class="flex items-center gap-3 text-sm md:text-base text-gray-400">
					<svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
					</svg>
					<span>Acesso imediato • Conteúdo liberado em 1 minuto</span>
				</div>
			</div>
		</div>
	</section>

	<div class="section-divider"></div>

	<!-- 2. PROBLEM SECTION - REALITY CARDS -->
	<section class="py-24 px-4 bg-brand-dark">
		<div class="max-w-7xl mx-auto">
			<div class="text-center mb-20">
				<p class="text-sm md:text-base font-bold uppercase tracking-widest text-gray-500 mb-3">
					A verdade que nenhum homem gosta de ouvir
				</p>
				<h2 class="text-3xl md:text-5xl font-black text-white">
					Mas toda mulher <span class="gold-text">percebe</span>.
				</h2>
			</div>

			<div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
				<!-- Card 1 -->
				<div class="group relative h-96 perspective-1000">
					<div
						class="absolute inset-0 bg-gradient-to-br from-gray-900 to-gray-800 rounded-2xl border border-gray-700 p-8 flex flex-col items-center justify-center text-center transition-all duration-700 transform group-hover:rotate-y-180 backface-hidden shadow-xl hover:shadow-2xl">
						<div
							class="w-20 h-20 bg-red-900/20 rounded-full flex items-center justify-center mb-6 text-red-500 group-hover:scale-110 transition-transform">
							<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
							</svg>
						</div>
						<h3 class="text-2xl font-bold text-white mb-3">A Ilusão</h3>
						<p class="text-gray-400 text-lg">"Vocês acham que sabem. Mas ninguém ensinou vocês."</p>
						<p class="mt-6 text-xs text-red-400 uppercase tracking-widest font-bold animate-pulse">Clique
							Aqui</p>
					</div>
					<div
						class="absolute inset-0 bg-gradient-to-br from-red-900 to-red-800 rounded-2xl border-2 border-red-600 p-8 flex flex-col items-center justify-center text-center transition-all duration-700 transform rotate-y-180 group-hover:rotate-y-0 backface-hidden shadow-2xl">
						<h3 class="text-2xl font-bold text-white mb-4">A Realidade</h3>
						<p class="text-white font-medium text-lg">Quando vocês erram, nós percebemos na hora — mesmo
							que nunca falemos nada.</p>
					</div>
				</div>

				<!-- Card 2 -->
				<div class="group relative h-96 perspective-1000">
					<div
						class="absolute inset-0 bg-gradient-to-br from-gray-900 to-gray-800 rounded-2xl border border-gray-700 p-8 flex flex-col items-center justify-center text-center transition-all duration-700 transform group-hover:rotate-y-180 backface-hidden shadow-xl hover:shadow-2xl">
						<div
							class="w-20 h-20 bg-red-900/20 rounded-full flex items-center justify-center mb-6 text-red-500 group-hover:scale-110 transition-transform">
							<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
						</div>
						<h3 class="text-2xl font-bold text-white mb-3">O Sinal</h3>
						<p class="text-gray-400 text-lg">"Se você já sentiu ela se desligando, apressando,
							evitando..."</p>
						<p class="mt-6 text-xs text-red-400 uppercase tracking-widest font-bold animate-pulse">Clique
							Aqui</p>
					</div>
					<div
						class="absolute inset-0 bg-gradient-to-br from-red-900 to-red-800 rounded-2xl border-2 border-red-600 p-8 flex flex-col items-center justify-center text-center transition-all duration-700 transform rotate-y-180 group-hover:rotate-y-0 backface-hidden shadow-2xl">
						<h3 class="text-2xl font-bold text-white mb-4">Não foi acaso</h3>
						<p class="text-white font-medium text-lg">Foi falta de técnica. Falta de direção. Falta de
							saber o que fazer.</p>
					</div>
				</div>

				<!-- Card 3 -->
				<div class="group relative h-96 perspective-1000">
					<div
						class="absolute inset-0 bg-gradient-to-br from-gray-900 to-gray-800 rounded-2xl border border-gray-700 p-8 flex flex-col items-center justify-center text-center transition-all duration-700 transform group-hover:rotate-y-180 backface-hidden shadow-xl hover:shadow-2xl">
						<div
							class="w-20 h-20 bg-green-900/20 rounded-full flex items-center justify-center mb-6 text-green-500 group-hover:scale-110 transition-transform">
							<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
						</div>
						<h3 class="text-2xl font-bold text-white mb-3">A Solução</h3>
						<p class="text-gray-400 text-lg">"E não é culpa sua. É porque ninguém te ensinou."</p>
						<p class="mt-6 text-xs text-green-400 uppercase tracking-widest font-bold animate-pulse">Clique
							aqui</p>
					</div>
					<div
						class="absolute inset-0 bg-gradient-to-br from-yellow-600 to-yellow-500 rounded-2xl border-2 border-yellow-400 p-8 flex flex-col items-center justify-center text-center transition-all duration-700 transform rotate-y-180 group-hover:rotate-y-0 backface-hidden shadow-2xl">
						<h3 class="text-3xl font-black text-white mb-4">ISSO ACABA HOJE</h3>
						<p class="text-white font-bold text-lg">Você vai descobrir o que ninguém nunca te contou.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="section-divider"></div>

	<!-- Social Proof Testimonials -->
	<section class="py-16 px-4 bg-black">
		<div class="max-w-7xl mx-auto">
			<div class="text-center mb-12">
				<h2 class="text-3xl md:text-4xl font-black text-white mb-4">
					O Que Os Alunos Estão Dizendo
				</h2>
				<p class="text-xl text-gray-400">Resultados reais de homens que aplicaram o método</p>
			</div>

			<div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
				<!-- Testimonial 1 -->
				<div
					class="group relative overflow-hidden rounded-2xl border-2 border-gray-800 hover:border-brand-gold/50 transition-all duration-500 shadow-xl hover:shadow-2xl hover:scale-105">
					<img src="https://manualdaatracao.digital/wp-content/uploads/2025/11/social-proof-1.jpeg"
						alt="Depoimento 1" class="w-full h-auto object-cover">
					<div
						class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity">
					</div>
				</div>

				<!-- Testimonial 2 -->
				<div
					class="group relative overflow-hidden rounded-2xl border-2 border-gray-800 hover:border-brand-gold/50 transition-all duration-500 shadow-xl hover:shadow-2xl hover:scale-105">
					<img src="https://manualdaatracao.digital/wp-content/uploads/2025/11/social-proof-2.jpeg"
						alt="Depoimento 2" class="w-full h-auto object-cover">
					<div
						class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity">
					</div>
				</div>

				<!-- Testimonial 3 -->
				<div
					class="group relative overflow-hidden rounded-2xl border-2 border-gray-800 hover:border-brand-gold/50 transition-all duration-500 shadow-xl hover:shadow-2xl hover:scale-105">
					<img src="https://manualdaatracao.digital/wp-content/uploads/2025/11/social-proof-3.jpeg"
						alt="Depoimento 3" class="w-full h-auto object-cover">
					<div
						class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity">
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="section-divider"></div>

	<!-- LOCKED CONTENT - Unlocks after 60 seconds of video -->
	<div id="locked-content" class="locked-content relative">
		<!-- Lock Overlay -->
		<div id="content-lock-overlay" class="content-lock-overlay">
			<div class="lock-message">
				<svg class="lock-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
				</svg>
				<h3>Conteúdo Bloqueado</h3>
				<p>Assista ao vídeo por <strong>1 minuto</strong> para desbloquear o conteúdo completo</p>
				<div class="unlock-progress">
					<div class="unlock-progress-bar" id="unlock-progress-bar"></div>
				</div>
			</div>
		</div>

		<!-- What You'll Learn - Carousel -->
		<section class="pricing-modules">
			<h2 class="modules-title">O QUE VOCÊ VAI APRENDER</h2>
			<p class="modules-subtitle">15 aulas práticas que vão transformar sua presença masculina</p>

			<div class="veiled-carousel">
				<button class="veiled-carousel-nav veiled-carousel-prev" aria-label="Anterior">‹</button>
				<div class="veiled-carousel-track" id="veiled-carousel-track">

					<!-- Lesson 1 -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-60">
							<img class="lesson-bg"
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
							<img class="lesson-bg"
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
							<img class="lesson-bg"
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
								<p class="lesson-description">Mapeamento completo: Ponto G, clitóris, zonas erógenas.
									Onde
									tocar, como tocar, quando parar.</p>
							</div>
						</div>
					</div>

					<!-- Lesson 4 -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-60">
							<img class="lesson-bg"
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
							<img class="lesson-bg"
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
							<img class="lesson-bg"
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
									outro
									homem vai superar.</p>
							</div>
						</div>
					</div>

					<!-- Lesson 7 -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-60">
							<img class="lesson-bg"
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
								<p class="lesson-description">Ler respiração, olhar, quadril, microexpressões. Saiba o
									que
									ela quer antes dela dizer.</p>
							</div>
						</div>
					</div>

					<!-- Lesson 8 -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-60">
							<img class="lesson-bg"
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
								<p class="lesson-description">Dominar o ambiente com olhar, toque e energia. Ela sente
									que
									você está no controle.</p>
							</div>
						</div>
					</div>

					<!-- Lesson 9 -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-60">
							<img class="lesson-bg"
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
									mecânico — só prazer real.</p>
							</div>
						</div>
					</div>

					<!-- Lesson 10 -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-60">
							<img class="lesson-bg"
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
								<p class="lesson-description">Domine posições que maximizam estímulo do Ponto G,
									clitóris e
									conexão visual.</p>
							</div>
						</div>
					</div>

					<!-- Lesson 11 -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-60">
							<img class="lesson-bg"
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
								<p class="lesson-description">Explore fetiches e BDSM com segurança e respeito. Seja o
									homem
									ousado que sabe o que faz.</p>
							</div>
						</div>
					</div>

					<!-- Lesson 12 -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-60">
							<img class="lesson-bg"
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
							<img class="lesson-bg"
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
								<p class="lesson-description">Cada toque, olhar e movimento te coloca no comando.
									Rendição,
									prazer e conexão absoluta.</p>
							</div>
						</div>
					</div>

					<!-- Lesson 14 - BONUS -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-60 bonus-card">
							<img class="lesson-bg"
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
								<p class="lesson-description">Libere seus instintos primitivos com controle total. A
									energia
									bruta que ela secretamente deseja.</p>
							</div>
						</div>
					</div>

					<!-- Lesson 15 - BONUS -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-60 bonus-card">
							<img class="lesson-bg"
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
								<p class="lesson-description">Seja o homem que ela compara com todos os outros — e
									nenhum
									chega perto.</p>
							</div>
						</div>
					</div>

				</div>
				<button class="veiled-carousel-nav veiled-carousel-next" aria-label="Próximo">›</button>
			</div>
		</section>

		<div class="section-divider"></div>

		<!-- Bonus Mega Section - Carousel -->
		<section class="bonus-mega-section">
			<h2 class="bonus-mega-title">BÔNUS EXCLUSIVOS INCLUSOS</h2>
			<p class="bonus-mega-subtitle">6 bônus poderosos que multiplicam seus resultados</p>

			<div class="veiled-carousel">
				<button class="veiled-carousel-nav veiled-carousel-prev" aria-label="Anterior">‹</button>
				<div class="veiled-carousel-track" id="bonus-carousel-track">

					<!-- Bonus 1: Arquétipo do Macho Alfa -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-[400px] bonus-card">
							<img class="lesson-bg" src="/wp-content/uploads/2025/11/arquetipo-macho-alfa.png"
								alt="Arquétipo do Macho Alfa">
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
									<span class="lesson-pill mx-auto py-4 bonus-pill">BÔNUS #1</span>
									<span class="bonus-value-pill">R$ 197</span>
								</div>
								<h3 class="lesson-title">Arquétipo do Macho Alfa</h3>
								<p class="lesson-description">Ative sua identidade ancestral de liderança e presença. Os
									5
									arquétipos masculinos e como usá-los.</p>
							</div>
						</div>
					</div>

					<!-- Bonus 2: Código da Confiança Masculina -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-[400px] bonus-card">
							<img class="lesson-bg" src="/wp-content/uploads/2025/11/codigo-confianca.png"
								alt="Código da Confiança Masculina">
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
									<span class="lesson-pill mx-auto py-4 bonus-pill">BÔNUS #2</span>
									<span class="bonus-value-pill">R$ 147</span>
								</div>
								<h3 class="lesson-title">Código da Confiança Masculina</h3>
								<p class="lesson-description">Construa uma base inabalável de autoconfiança. Técnicas
									para
									eliminar insegurança e dúvida.</p>
							</div>
						</div>
					</div>

					<!-- Bonus 3: Comunicação de Alto Impacto -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-[400px] bonus-card">
							<img class="lesson-bg" src="/wp-content/uploads/2025/11/comunicacao-alto-impacto.png"
								alt="Comunicação de Alto Impacto">
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
									<span class="lesson-pill mx-auto py-4 bonus-pill">BÔNUS #3</span>
									<span class="bonus-value-pill">R$ 127</span>
								</div>
								<h3 class="lesson-title">Comunicação de Alto Impacto</h3>
								<p class="lesson-description">A arte masculina de falar menos e impactar mais. Linguagem
									corporal alfa e olhar de poder.</p>
							</div>
						</div>
					</div>

					<!-- Bonus 4: Dominância Silenciosa -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-[400px] bonus-card">
							<img class="lesson-bg" src="/wp-content/uploads/2025/11/dominancia-silenciosa.png"
								alt="Dominância Silenciosa">
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
									<span class="lesson-pill mx-auto py-4 bonus-pill">BÔNUS #4</span>
									<span class="bonus-value-pill">R$ 167</span>
								</div>
								<h3 class="lesson-title">Dominância Silenciosa</h3>
								<p class="lesson-description">Como controlar ambientes e transmitir poder sem dizer uma
									palavra. Postura e presença de alto valor.</p>
							</div>
						</div>
					</div>

					<!-- Bonus 5: Guia Mental de Domínio -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block h-[400px] bonus-card">
							<img class="lesson-bg" src="/wp-content/uploads/2025/11/guia-mental-dominio.png"
								alt="Guia Mental de Domínio">
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
									<span class="lesson-pill mx-auto py-4 bonus-pill">BÔNUS #5</span>
									<span class="bonus-value-pill">R$ 97</span>
								</div>
								<h3 class="lesson-title">Guia Mental de Domínio, Foco e Autoridade</h3>
								<p class="lesson-description">Controle da ansiedade, calma ativa e foco absurdo.
									Protocolo
									dos 10 segundos para resetar seu estado.</p>
							</div>
						</div>
					</div>

					<!-- Bonus 6: Acesso Vitalício (Highlight) -->
					<div class="veiled-carousel-item">
						<div class="veiled-lesson-card block mx-auto my-2 highlight-bonus" style="height: 400px;">
							<img class="lesson-bg" src="/wp-content/uploads/2025/11/product-mockup.png"
								alt="Acesso Vitalício">
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
									automaticamente na sua conta — sem custo.</p>
							</div>
						</div>
					</div>

				</div>
				<button class="veiled-carousel-nav veiled-carousel-next" aria-label="Próximo">›</button>
			</div>
		</section>

		<div class="section-divider"></div>

		<!-- 6. VALUE STACK (Duplicated after carousels) -->
		<section id="offer-duplicate" class="py-24 px-4 bg-gradient-to-b from-brand-dark to-black">
			<div class="max-w-5xl mx-auto">
				<div class="text-center mb-16">
					<h2 class="text-3xl md:text-5xl font-black text-white mb-4">
						Tudo Isso Por Um <span class="gold-text">Preço Simbólico</span>
					</h2>
				</div>

				<div
					class="bg-gradient-to-br from-gray-900 to-black border-2 border-brand-gold/30 rounded-3xl p-8 md:p-12">
					<div class="space-y-6 mb-10">
						<?php
						$valueItems = [
							['name' => 'Curso Principal Domínio Masculino', 'value' => 'R$ 47,00'],
							['name' => 'Bônus #1: Controle Absoluto', 'value' => 'R$ 27,00'],
							['name' => 'Bônus #2: Código da Confiança', 'value' => 'R$ 27,00'],
							['name' => 'Bônus #3: Arquétipo Masculino', 'value' => 'R$ 17,00'],
							['name' => 'Bônus #4: Comunicação de Impacto', 'value' => 'R$ 17,00'],
							['name' => 'Bônus #5: Dominância Silenciosa', 'value' => 'R$ 12,50']
						];

						foreach ($valueItems as $item):
							?>
							<div
								class="flex justify-between items-center bg-black/40 border border-gray-800 rounded-xl p-6 hover:border-brand-gold/50 transition-colors">
								<span class="text-white font-semibold text-lg"><?php echo $item['name']; ?></span>
								<span
									class="text-brand-gold font-bold text-xl line-through decoration-red-500 decoration-2"><?php echo $item['value']; ?></span>
							</div>
						<?php endforeach; ?>
					</div>

					<div class="border-t-2 border-gray-800 pt-8 text-center space-y-6">
						<div>
							<p class="text-gray-400 text-xl mb-2">Valor Total Real:</p>
							<p class="text-5xl md:text-7xl font-black text-gray-600 line-through">R$ 147,50</p>
						</div>
						<div>
							<p class="text-2xl text-white mb-2">Hoje por apenas:</p>
							<p class="text-6xl md:text-8xl font-black gold-text mb-4">R$ 37,50</p>
							<p class="text-gray-400 text-lg">(Pagamento Único • Acesso Vitalício)</p>
						</div>

						<div class="pt-8">
							<a href="https://pagamento.manualdaatracao.digital/HhApnpmnGgSDg9PeL0JS"
								class="btn-premium inline-block w-full max-w-2xl py-8 rounded-2xl text-black font-black text-2xl md:text-3xl uppercase tracking-wide shadow-2xl">
								QUERO ACESSO POR R$ 37,50
							</a>
							<div class="flex items-center justify-center gap-3 mt-6 text-gray-400">
								<svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
									viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
								</svg>
								<span>Compra 100% Segura • Acesso Instantâneo</span>
							</div>
						</div>

						<div
							class="bg-red-900/20 border border-red-700 rounded-xl p-6 mt-8 flex items-center justify-center gap-3">
							<svg class="w-6 h-6 text-red-500 animate-pulse" fill="none" stroke="currentColor"
								viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
							<p class="text-white font-bold text-lg">
								Restam apenas <span class="text-red-500 text-2xl">17 acessos</span> com bônus liberados
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="section-divider"></div>

		<!-- 3. SOLUTION - 4 PILLARS -->
		<section class="py-24 px-4 bg-black">
			<div class="max-w-7xl mx-auto">
				<div class="text-center mb-20">
					<p class="text-sm md:text-base font-bold uppercase tracking-widest text-gray-500 mb-3">
						O método completo
					</p>
					<h2 class="text-3xl md:text-5xl font-black text-white">
						Os 4 Pilares do <span class="gold-text">Domínio Masculino</span>
					</h2>
				</div>

				<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
					<?php
					$pillars = [
						[
							'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
							'title' => 'Psicologia',
							'desc' => 'Entenda o que ela realmente quer e como criar conexão emocional profunda.'
						],
						[
							'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
							'title' => 'Técnica',
							'desc' => 'Movimentos, toques e posições que geram prazer máximo para ela.'
						],
						[
							'icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
							'title' => 'Leitura',
							'desc' => 'Interprete cada sinal do corpo dela e antecipe suas reações.'
						],
						[
							'icon' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z',
							'title' => 'Presença',
							'desc' => 'Domine energia masculina, confiança e condução natural.'
						]
					];

					foreach ($pillars as $pillar):
						?>
						<div
							class="group bg-gradient-to-br from-gray-900 to-gray-800 rounded-2xl border border-gray-700 p-8 hover:border-brand-gold/50 hover:shadow-2xl hover:shadow-brand-gold/20 transition-all duration-500 hover:-translate-y-2">
							<div
								class="w-16 h-16 bg-brand-gold/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-gold/20 group-hover:scale-110 transition-all duration-300">
								<svg class="w-8 h-8 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="<?php echo $pillar['icon']; ?>" />
								</svg>
							</div>
							<h3 class="text-2xl font-bold text-white mb-4 group-hover:text-brand-gold transition-colors">
								<?php echo $pillar['title']; ?>
							</h3>
							<p class="text-gray-400 leading-relaxed"><?php echo $pillar['desc']; ?></p>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<div class="section-divider"></div>

		<!-- 4. BENEFITS - TRANSFORMATION -->
		<section class="py-24 px-4 bg-brand-dark">
			<div class="max-w-7xl mx-auto">
				<div class="text-center mb-20">
					<h2 class="text-3xl md:text-5xl font-black text-white mb-6">
						A Transformação <span class="gold-text">Garantida</span>
					</h2>
					<p class="text-xl text-gray-400 max-w-3xl mx-auto">
						Você vai sentir a diferença em você... <span class="text-white font-bold">e ela também.</span>
					</p>
				</div>

				<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
					<?php
					$benefits = [
						'Confiança real, não imitada',
						'Leitura corporal precisa',
						'Controle emocional absoluto',
						'Presença masculina forte',
						'Condução natural e segura',
						'Zero vergonha e confusão',
						'Resultados imediatos e visíveis',
						'Conexão profunda e autêntica',
						'Domínio técnico completo'
					];

					foreach ($benefits as $benefit):
						?>
						<div
							class="flex items-center gap-4 bg-gradient-to-r from-gray-900/50 to-transparent border border-gray-800 rounded-xl p-5 hover:border-brand-gold/50 hover:bg-gray-900/80 transition-all duration-300 group">
							<svg class="w-6 h-6 text-brand-gold flex-shrink-0 group-hover:scale-125 transition-transform"
								fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
							</svg>
							<span class="text-white font-medium text-lg"><?php echo $benefit; ?></span>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<div class="section-divider"></div>

		<!-- 5. SOCIAL PROOF -->
		<section class="py-24 px-4 bg-black">
			<div class="max-w-7xl mx-auto">
				<div class="text-center mb-20">
					<h2 class="text-3xl md:text-5xl font-black text-white mb-4">
						Homens Reais. <span class="gold-text">Resultados Reais.</span>
					</h2>
					<p class="text-xl text-gray-400">Veja o que os alunos estão conquistando.</p>
				</div>

				<div class="relative w-screen left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] h-[60vh] overflow-hidden">
					<img src="https://manualdaatracao.digital/wp-content/uploads/2025/11/social-proof-full.png"
						alt="Prova Social"
						class="w-full h-full object-cover opacity-70 hover:opacity-100 transition-all duration-700">
					<div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80">
					</div>
				</div>
			</div>
		</section>

		<div class="section-divider"></div>

		<!-- 6. VALUE STACK -->
		<section id="offer" class="py-24 px-4 bg-gradient-to-b from-brand-dark to-black">
			<div class="max-w-5xl mx-auto">
				<div class="text-center mb-16">
					<h2 class="text-3xl md:text-5xl font-black text-white mb-4">
						Uma Oferta <span class="gold-text">Impossível de Ignorar</span>
					</h2>
				</div>

				<div
					class="bg-gradient-to-br from-gray-900 to-black border-2 border-brand-gold/30 rounded-3xl p-8 md:p-12">
					<div class="space-y-6 mb-10">
						<?php
						$valueItems = [
							['name' => 'Curso Principal Domínio Masculino', 'value' => 'R$ 47,00'],
							['name' => 'Bônus #1: Controle Absoluto', 'value' => 'R$ 27,00'],
							['name' => 'Bônus #2: Código da Confiança', 'value' => 'R$ 27,00'],
							['name' => 'Bônus #3: Arquétipo Masculino', 'value' => 'R$ 17,00'],
							['name' => 'Bônus #4: Comunicação de Impacto', 'value' => 'R$ 17,00'],
							['name' => 'Bônus #5: Dominância Silenciosa', 'value' => 'R$ 12,50']
						];

						foreach ($valueItems as $item):
							?>
							<div
								class="flex justify-between items-center bg-black/40 border border-gray-800 rounded-xl p-6 hover:border-brand-gold/50 transition-colors">
								<span class="text-white font-semibold text-lg"><?php echo $item['name']; ?></span>
								<span
									class="text-brand-gold font-bold text-xl line-through decoration-red-500 decoration-2"><?php echo $item['value']; ?></span>
							</div>
						<?php endforeach; ?>
					</div>

					<div class="border-t-2 border-gray-800 pt-8 text-center space-y-6">
						<div>
							<p class="text-gray-400 text-xl mb-2">Valor Total Real:</p>
							<p class="text-5xl md:text-7xl font-black text-gray-600 line-through">R$ 147,50</p>
						</div>
						<div>
							<p class="text-2xl text-white mb-2">Hoje por apenas:</p>
							<p class="text-6xl md:text-8xl font-black gold-text mb-4">R$ 37,50</p>
							<p class="text-gray-400 text-lg">(Pagamento Único • Acesso Vitalício)</p>
						</div>

						<div class="pt-8">
							<a href="https://pagamento.manualdaatracao.digital/HhApnpmnGgSDg9PeL0JS"
								class="btn-premium inline-block w-full max-w-2xl py-8 rounded-2xl text-black font-black text-2xl md:text-3xl uppercase tracking-wide shadow-2xl">
								🔥 QUERO ACESSO POR R$ 37,50
							</a>
							<div class="flex items-center justify-center gap-3 mt-6 text-gray-400">
								<svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
									viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
								</svg>
								<span>Compra 100% Segura • Acesso Instantâneo</span>
							</div>
						</div>

						<div
							class="bg-red-900/20 border border-red-700 rounded-xl p-6 mt-8 flex items-center justify-center gap-3">
							<svg class="w-6 h-6 text-red-500 animate-pulse" fill="none" stroke="currentColor"
								viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
							<p class="text-white font-bold text-lg">
								Restam apenas <span class="text-red-500 text-2xl">17 acessos</span> com bônus liberados
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="section-divider"></div>

		<!-- 7. BEFORE vs AFTER -->
		<section class="py-24 px-4 bg-black">
			<div class="max-w-6xl mx-auto">
				<div class="grid md:grid-cols-2 gap-8">
					<!-- BEFORE -->
					<div class="bg-red-900/10 border-2 border-red-800 rounded-3xl p-10">
						<div class="text-center mb-10">
							<div
								class="w-20 h-20 bg-red-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
								<span class="text-4xl">❌</span>
							</div>
							<h3 class="text-3xl font-black text-red-500 uppercase">ANTES</h3>
						</div>
						<ul class="space-y-5">
							<?php
							$dores = [
								'Inseguro e ansioso',
								'Perdido sem direção',
								'Nunca sabe se ela gostou',
								'Momentos constrangedores',
								'Ela se afasta gradualmente',
								'Performance medíocre'
							];
							foreach ($dores as $dor):
								?>
								<li class="flex items-start gap-4 group">
									<svg class="w-6 h-6 text-red-500 flex-shrink-0 mt-1 group-hover:scale-125 transition-transform"
										fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M6 18L18 6M6 6l12 12" />
									</svg>
									<span class="text-gray-400 text-lg font-medium"><?php echo $dor; ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>

					<!-- AFTER -->
					<div class="bg-green-900/10 border-2 border-green-700 rounded-3xl p-10">
						<div class="text-center mb-10">
							<div
								class="w-20 h-20 bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
								<span class="text-4xl">✅</span>
							</div>
							<h3 class="text-3xl font-black text-green-500 uppercase">DEPOIS</h3>
						</div>
						<ul class="space-y-5">
							<?php
							$ganhos = [
								'Confiante e no controle',
								'Sabe exatamente o que fazer',
								'Leitura corporal precisa',
								'Conexão real e profunda',
								'Energia masculina forte',
								'Ela querendo sempre mais'
							];
							foreach ($ganhos as $ganho):
								?>
								<li class="flex items-start gap-4 group">
									<svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1 group-hover:scale-125 transition-transform"
										fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>
									<span class="text-white text-lg font-medium"><?php echo $ganho; ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<div class="section-divider"></div>

		<!-- 8. GUARANTEE -->
		<section class="py-20 px-4 bg-brand-dark">
			<div class="max-w-5xl mx-auto">
				<div
					class="bg-gradient-to-br from-yellow-900/20 to-transparent border-2 border-brand-gold/50 rounded-3xl p-10 md:p-16 flex flex-col md:flex-row items-center gap-12 shadow-2xl">
					<div class="flex-shrink-0">
						<div
							class="w-40 h-40 bg-gradient-to-br from-yellow-700 to-yellow-500 rounded-full border-4 border-yellow-300 flex items-center justify-center shadow-2xl shadow-brand-gold/50 animate-pulse">
							<div class="text-center">
								<p class="text-5xl font-black text-white leading-none drop-shadow-lg">30</p>
								<p class="text-sm font-bold text-white uppercase drop-shadow-lg">DIAS</p>
							</div>
						</div>
					</div>
					<div class="flex-1 text-center md:text-left space-y-4">
						<h3 class="text-3xl md:text-4xl font-black text-white uppercase">
							Garantia <span class="gold-text">Blindada</span>
						</h3>
						<p class="text-xl text-gray-300 leading-relaxed">
							Se você não sentir diferença significativa — uma única mensagem e eu devolvo <span
								class="text-white font-bold">100% do seu dinheiro</span>. Sem perguntas. Sem burocracia.
							Sem
							humilhação.
						</p>
						<p class="text-brand-gold font-bold text-lg">
							✓ Risco zero para você. Todo o risco é meu.
						</p>
					</div>
				</div>
			</div>
		</section>

		<div class="section-divider"></div>

		<!-- 9. FAQ -->
		<section class="py-24 px-4 bg-black">
			<div class="max-w-4xl mx-auto">
				<div class="text-center mb-16">
					<h2 class="text-3xl md:text-5xl font-black text-white mb-4">
						Perguntas <span class="gold-text">Frequentes</span>
					</h2>
				</div>

				<div class="space-y-4">
					<?php
					$faqs = [
						['"Esse treinamento é para qualquer homem?"', 'Não. É para homens adultos que querem parar de adivinhar, evoluir de verdade e assumir responsabilidade pelo próprio desempenho.'],
						['"Funciona mesmo?"', 'Funciona porque não é opinião — é ensino técnico, prático e testado na vida real por profissionais experientes.'],
						['"Preciso ter experiência?"', 'Não. Na verdade, quanto menos improvisos você tiver, melhor. O método foi feito para corrigir exatamente os erros que a maioria dos homens comete.'],
						['"Em quanto tempo vejo resultado?"', 'Alguns homens veem diferença no mesmo dia. Porque quando você entende o que fazer — e o que NUNCA mais fazer — tudo muda rápido.'],
						['"Isso é privado?"', 'Sim. O acesso é totalmente privado. Só você vê. Só você sabe. Não aparece nada comprometedor no extrato.'],
						['"E se eu não gostar?"', 'Simples: Manda uma mensagem dentro de 30 dias e recebe 100% do seu dinheiro de volta. Sem perguntas.']
					];

					foreach ($faqs as $faq):
						?>
						<details
							class="group bg-gradient-to-r from-gray-900 to-black border border-gray-800 rounded-xl hover:border-brand-gold/50 transition-colors overflow-hidden">
							<summary
								class="flex justify-between items-center font-medium cursor-pointer list-none p-6 hover:bg-gray-900/50 transition-colors">
								<span class="text-white font-bold text-lg pr-4"><?php echo $faq[0]; ?></span>
								<span class="transition-transform duration-300 group-open:rotate-180 flex-shrink-0">
									<svg fill="none" height="24" stroke="currentColor" stroke-linecap="round"
										stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
										class="text-brand-gold">
										<path d="M6 9l6 6 6-6"></path>
									</svg>
								</span>
							</summary>
							<div class="px-6 pb-6 text-gray-400 text-lg leading-relaxed border-t border-gray-800/50 pt-4">
								<p><?php echo $faq[1]; ?></p>
							</div>
						</details>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<div class="section-divider"></div>

		<!-- 10. FINAL CTA -->
		<section class="py-32 px-4 bg-gradient-to-b from-black via-brand-dark to-black text-center">
			<div class="max-w-4xl mx-auto space-y-10">
				<h2 class="text-4xl md:text-6xl font-black uppercase text-white leading-tight">
					Você decide <span class="gold-text">quem quer ser</span>
				</h2>

				<p class="text-2xl text-gray-300 max-w-2xl mx-auto">
					Homens que esperam o "momento certo" continuam presos no mesmo ciclo.<br>
					<span class="text-white font-bold">Os que agem agora assumem o controle.</span>
				</p>

				<div class="pt-6">
					<a href="https://pagamento.manualdaatracao.digital/HhApnpmnGgSDg9PeL0JS"
						class="btn-premium inline-block w-full max-w-2xl py-8 rounded-2xl text-black font-black text-2xl md:text-3xl uppercase tracking-wide shadow-2xl">
						GARANTIR ACESSO AGORA
					</a>
					<div class="flex flex-col items-center gap-3 mt-8 text-gray-400">
						<div class="flex items-center gap-2">
							<svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
							</svg>
							<span>Apenas R$ 37,50 • Acesso instantâneo</span>
						</div>
						<p class="text-brand-gold font-bold">⏰ Restam 17 acessos com bônus</p>
					</div>
				</div>
			</div>
		</section>

		<!-- FOOTER -->
		<footer class="py-12 bg-black border-t border-gray-900">
			<div class="max-w-7xl mx-auto px-4">
				<div class="flex flex-col md:flex-row justify-between items-center gap-6 mb-8">
					<div>
						<h3 class="text-2xl font-black gold-text">Domínio Masculino</h3>
						<p class="text-gray-500 text-sm mt-1">A verdade que transforma.</p>
					</div>
					<div class="flex gap-6 text-sm text-gray-500">
						<a href="#" class="hover:text-brand-gold transition-colors">Termos de Uso</a>
						<a href="#" class="hover:text-brand-gold transition-colors">Política de Privacidade</a>
					</div>
				</div>
				<div class="text-center text-gray-600 text-sm border-t border-gray-900 pt-8">
					<p>&copy; <?php echo date('Y'); ?> Domínio Masculino. Todos os direitos reservados.</p>
				</div>
			</div>
		</footer>

	</div><!-- END #locked-content -->

	<!-- VSL Player Script -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/vsl-alchemy.js"></script>

	<?php wp_footer(); ?>

	<!-- Content Unlock JavaScript -->
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const lockedContent = document.getElementById('locked-content');
			const lockOverlay = document.getElementById('content-lock-overlay');
			const progressBar = document.getElementById('unlock-progress-bar');
			const playButton = document.querySelector('.vsl-thumbnail-button');

			let videoStartTime = null;
			let unlockCheckInterval = null;
			let isUnlocked = false;

			// Listen for video play button click
			if (playButton) {
				playButton.addEventListener('click', function () {
					// Start tracking time when video starts
					videoStartTime = Date.now();

					// Start checking for unlock every 500ms
					unlockCheckInterval = setInterval(function () {
						if (isUnlocked) {
							clearInterval(unlockCheckInterval);
							return;
						}

						const elapsedSeconds = (Date.now() - videoStartTime) / 1000;
						const progress = Math.min((elapsedSeconds / 60) * 100, 100);

						// Update progress bar
						if (progressBar) {
							progressBar.style.width = progress + '%';
						}

						// Unlock content after 60 seconds
						if (elapsedSeconds >= 60 && !isUnlocked) {
							unlockContent();
						}
					}, 500);
				});
			}

			// Also listen for the vsl:cta_revealed event from vsl-alchemy.js
			document.addEventListener('vsl:cta_revealed', function (e) {
				if (!isUnlocked) {
					unlockContent();
				}
			});

			function unlockContent() {
				isUnlocked = true;

				// Hide overlay with animation
				if (lockOverlay) {
					lockOverlay.classList.add('hidden');
				}

				// Remove blur from content
				if (lockedContent) {
					lockedContent.classList.add('unlocked');
				}

				// Clear interval
				if (unlockCheckInterval) {
					clearInterval(unlockCheckInterval);
				}

				// Smooth scroll to unlocked content
				setTimeout(function () {
					const firstSection = document.querySelector('.pricing-modules');
					if (firstSection) {
						firstSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
					}
				}, 800);

				console.log('Content unlocked!');
			}
		});
	</script>

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
		});
	</script>
</body>

</html>