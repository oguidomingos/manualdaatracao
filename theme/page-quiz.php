<?php
/**
 * Template Name: Quiz - Profile Unveiled
 * Template Post Type: page
 *
 * Quiz de personalidade luxuoso
 *
 * @package manualdaatracao
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Avaliação Masculina: Descubra Onde Está Seu Maior Erro</title>
	<meta name="description"
		content="Responda honestamente e descubra se está no nível que acha ou no nível que ela realmente percebe">

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
	<link
		href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Playfair+Display:wght@700&family=Inter:wght@300;400;500;600&display=swap"
		rel="stylesheet">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/quiz.css">

	<style>
		/* Mobile-only restriction */
		#desktop-block {
			display: none;
			position: fixed;
			inset: 0;
			background: linear-gradient(135deg, #0a0a0a 0%, #1a0a0f 100%);
			z-index: 9999;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			padding: 2rem;
			text-align: center;
		}

		#desktop-block h1 {
			font-size: 2rem;
			font-weight: 900;
			color: #fff;
			margin-bottom: 1rem;
		}

		#desktop-block p {
			font-size: 1.25rem;
			color: #9ca3af;
			max-width: 600px;
		}

		#desktop-block .icon {
			font-size: 4rem;
			margin-bottom: 2rem;
		}

		@media (min-width: 768px) {
			#desktop-block {
				display: flex !important;
			}

			#quiz-app {
				display: none !important;
			}
		}
	</style>
</head>

<body <?php body_class('page-template-page-quiz'); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH8RKMDN" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<!-- Desktop Block Message -->
	<div id="desktop-block">
		<div class="icon">📱</div>
		<h1>Acesse pelo Celular</h1>
		<p>Este quiz foi otimizado para dispositivos móveis. Por favor, acesse através do seu smartphone para uma melhor
			experiência.</p>
	</div>

	<div id="quiz-app" class="min-h-screen relative overflow-hidden">
		<!-- Particles Background -->
		<div class="particles" id="particles"></div>

		<!-- Back Button -->
		<button id="back-btn" class="absolute top-8 left-8 z-20 text-white hover:text-primary transition-colors hidden">
			<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
			</svg>
		</button>

		<!-- Main Content -->
		<div class="relative z-10 flex items-center justify-center min-h-screen p-4">
			<div id="quiz-content" class="w-full"></div>
		</div>
	</div>

	<script>
		// Quiz State
		let currentStep = 0;
		let answers = [];
		let isLoading = false;

		// Questions Data
		const questions = [
			{
				question: 'Quando você tenta criar conexão no momento íntimo, o que costuma acontecer?',
				options: [
					'(A) Ela corresponde facilmente.',
					'(B) Às vezes sim, às vezes não.',
					'(C) Fica meio neutra, não reage muito.',
					'(D) Sinto que ela se desconecta rápido.'
				]
			},
			{
				question: 'Você sabe interpretar os sinais do corpo dela?',
				options: [
					'(A) Quase sempre.',
					'(B) Às vezes acerto.',
					'(C) Não sei se estou interpretando certo.',
					'(D) Fico totalmente perdido.'
				]
			},
			{
				question: 'Você já percebeu ela "apressando" a situação ou mudando de assunto?',
				options: [
					'(A) Não.',
					'(B) Raramente.',
					'(C) Algumas vezes.',
					'(D) Sim, já aconteceu mais de uma vez.'
				]
			},
			{
				question: 'Quão seguro você se sente no momento que deveria "conduzir"?',
				options: [
					'(A) 100% seguro.',
					'(B) Às vezes fico em dúvida.',
					'(C) Fico tenso e inseguro.',
					'(D) Geralmente improviso sem saber se estou fazendo certo.'
				]
			},
			{
				question: 'Você sabe o que realmente diferencia um homem comum de um homem marcante?',
				options: [
					'(A) Sim.',
					'(B) Acho que sim.',
					'(C) Tenho dúvidas.',
					'(D) Não tenho ideia.'
				]
			},
			{
				question: 'Quando foi a última vez que você sentiu que "não correspondeu às expectativas"?',
				options: [
					'(A) Nunca.',
					'(B) Faz tempo.',
					'(C) Recentemente.',
					'(D) Acontece com frequência.'
				]
			},
			{
				question: 'Você já pensou: "Acho que ela não ficou totalmente satisfeita"?',
				options: [
					'(A) Já, poucas vezes.',
					'(B) Já, mais de uma vez.',
					'(C) Sim, e isso mexeu comigo.',
					'(D) Sim, e não sei o que fazer para melhorar.'
				]
			}
		];

		// Initialize particles
		function initParticles() {
			const particlesContainer = document.getElementById('particles');
			for (let i = 0; i < 50; i++) {
				const particle = document.createElement('div');
				particle.className = 'particle';
				particle.style.left = `${Math.random() * 100}%`;
				particle.style.animationDelay = `${Math.random() * 8}s`;
				particle.style.animationDuration = `${5 + Math.random() * 3}s`;
				particlesContainer.appendChild(particle);
			}
		}

		// Render functions
		function renderWelcome() {
			return `
		<div class="w-full max-w-3xl mx-auto animate-fade-in flex justify-center flex-col items-center">
			<img
				src="<?php echo get_template_directory_uri(); ?>/assets/images/quiz/mulher-orgasmo-01.gif"
				alt="Mulher em orgasmo"
				class="w-full max-w-xs md:max-w-sm lg:max-w-md h-auto rounded-lg mb-8 shadow-lg"
			/>
			<div class="glass-card p-8 md:p-12 text-center max-w-2xl">
				<h1 class="text-4xl md:text-5xl font-bold mb-6 text-foreground">
					Descubra Onde Está Seu Maior Erro na cama
				</h1>
				<p class="text-lg md:text-xl text-muted-foreground mb-8 font-light leading-relaxed">
					Responda honestamente.<br/>
					Em menos de 60 segundos você vai entender se está no nível que acha…<br/>
					ou no nível que ela realmente espera.
				</p>
				<button onclick="startQuiz()" class="btn-luxury">
					Começar Avaliação
				</button>
			</div>
		</div>
	`;
		}
		function renderQuestion(index) {
			const q = questions[index];
			return `
		<div class="w-full max-w-4xl mx-auto">
			<div class="progress-bar-container mb-8">
				<div class="progress-bar-bg">
					<div class="progress-bar-fill" style="width: ${((index + 1) / questions.length) * 100}%"></div>
				</div>
				<div class="progress-text">${index + 1} de ${questions.length}</div>
			</div>
			<div class="glass-card p-8 md:p-12">
				<h2 class="text-3xl md:text-4xl font-bold mb-8 text-center text-foreground">
					${q.question}
				</h2>
				<div class="space-y-4">
					${q.options.map((option, i) => `
						<button
							onclick="answerQuestion('${option.replace(/'/g, "\\'")}')"
							class="option-button w-full"
						>
							${option}
						</button>
					`).join('')}
				</div>
			</div>
		</div>
	`;
		}

		function renderLoading() {
			return `
		<div class="w-full max-w-2xl mx-auto animate-fade-in">
			<div class="glass-card p-12 text-center">
				<div class="loading-spinner mb-6"></div>
				<h2 class="text-2xl md:text-3xl font-bold text-foreground">
					Analisando suas respostas...
				</h2>
			</div>
		</div>
	`;
		}

		function renderResult() {
			return `
		<div class="w-full max-w-2xl mx-auto animate-fade-in">
			<div class="glass-card p-8 md:p-12 text-center">
				<h1 class="text-3xl md:text-4xl font-bold mb-6 text-foreground">
					⭐ Resultado: Você tem pontos fortes…
				</h1>
				<p class="text-xl md:text-2xl text-muted-foreground mb-8 font-light leading-relaxed">
					mas também está repetindo erros que qualquer mulher percebe.
				</p>
				<p class="text-lg text-muted-foreground mb-8 font-light leading-relaxed">
					E é aqui que entra a parte mais importante:
				</p>
				<p class="text-xl md:text-2xl font-semibold mb-8 text-foreground">
					O que você realmente precisa não é "tentativa e erro".<br/>
					É APRENDER do jeito certo.
				</p>
				<button onclick="continueToFinal()" class="btn-luxury w-full">
					Ver a Solução
				</button>
			</div>
		</div>
	`;
		}
		function renderFinal() {
			return `
		<div class="w-full max-w-4xl mx-auto animate-fade-in">
			<div class="glass-card p-6 md:p-10">
				<!-- Hero Image -->
				<div class="relative mb-8 rounded-xl overflow-hidden shadow-2xl">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/quiz/curso-real-cenas-reais.jpg"
						alt="Curso Real com Cenas Reais"
						class="w-full h-auto"
					/>
					<div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
				</div>

				<!-- Main Headline -->
				<h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-center text-foreground leading-tight">
					O Treinamento Que Vai Mudar Seu Nível
				</h1>
				
				<p class="text-xl md:text-2xl text-center text-primary mb-8 font-semibold">
					Curso Real com Cenas Reais
				</p>

				<!-- Benefits Grid -->
				<div class="grid md:grid-cols-3 gap-4 mb-8">
					<div class="bg-black/20 border border-primary/20 rounded-lg p-5 text-center">
						<div class="text-3xl mb-2">🎯</div>
						<h3 class="font-semibold text-foreground mb-2">Direto ao Ponto</h3>
						<p class="text-sm text-muted-foreground">Sem enrolação, apenas o que funciona</p>
					</div>
					<div class="bg-black/20 border border-primary/20 rounded-lg p-5 text-center">
						<div class="text-3xl mb-2">🔥</div>
						<h3 class="font-semibold text-foreground mb-2">Cenas Reais</h3>
						<p class="text-sm text-muted-foreground">Demonstrações práticas e reais</p>
					</div>
					<div class="bg-black/20 border border-primary/20 rounded-lg p-5 text-center">
						<div class="text-3xl mb-2">⚡</div>
						<h3 class="font-semibold text-foreground mb-2">Resultados Rápidos</h3>
						<p class="text-sm text-muted-foreground">Aplique hoje, veja mudanças imediatas</p>
					</div>
				</div>

				<!-- What You'll Learn -->
				<div class="bg-gradient-to-br from-primary/10 to-transparent border border-primary/30 rounded-xl p-6 md:p-8 mb-8">
					<h2 class="text-2xl md:text-3xl font-bold mb-6 text-center text-foreground">
						O que você vai aprender:
					</h2>
					<ul class="space-y-4 max-w-2xl mx-auto">
						<li class="flex items-start gap-3">
							<svg class="w-6 h-6 text-primary flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
							</svg>
							<span class="text-lg text-muted-foreground"><strong class="text-foreground">Técnicas que ninguém nunca te ensinou</strong> – e que fazem toda a diferença</span>
						</li>
						<li class="flex items-start gap-3">
							<svg class="w-6 h-6 text-primary flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
							</svg>
							<span class="text-lg text-muted-foreground"><strong class="text-foreground">O que nenhuma mulher vai falar na sua cara</strong> – mas todas esperam</span>
						</li>
						<li class="flex items-start gap-3">
							<svg class="w-6 h-6 text-primary flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
							</svg>
							<span class="text-lg text-muted-foreground"><strong class="text-foreground">Como mudar completamente</strong> seu nível de confiança e desempenho</span>
						</li>
					</ul>
				</div>

				<!-- Exclusivity Badge -->
				<div class="bg-black/40 border-2 border-primary/40 rounded-xl p-6 mb-8 text-center">
					<p class="text-lg md:text-xl text-muted-foreground mb-3 font-light leading-relaxed">
						Este é um <strong class="text-primary text-2xl">PRODUTO PAGO</strong>
					</p>
					<p class="text-base text-muted-foreground font-light">
						Exclusivo para homens que querem <strong class="text-foreground">EVOLUIR de verdade</strong>.<br/>
						Não é entretenimento. Não é curiosidade.<br/>
						É para quem quer <strong class="text-primary">resolver esse problema AGORA</strong>.
					</p>
				</div>

				<!-- Trust Badges -->
				<div class="flex flex-wrap items-center justify-center gap-4 text-sm text-muted-foreground mb-8 pb-8 border-b border-primary/20">
					<span class="flex items-center gap-2 bg-black/20 px-4 py-2 rounded-full">
						<svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
						</svg>
						<span class="font-medium">Conteúdo Educacional</span>
					</span>
					<span class="flex items-center gap-2 bg-black/20 px-4 py-2 rounded-full">
						<svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
						</svg>
						<span class="font-medium">100% Seguro e Privado</span>
					</span>
					<span class="flex items-center gap-2 bg-black/20 px-4 py-2 rounded-full">
						<svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
						</svg>
						<span class="font-medium">Acesso Imediato</span>
					</span>
				</div>

				<!-- CTA Section -->
				<div class="text-center">
					<div class="mb-4">
						<div class="inline-block bg-primary/20 border border-primary rounded-full px-6 py-2 mb-4">
							<p class="text-sm text-muted-foreground">
								<span class="line-through opacity-60">R$ 97,00</span>
								<span class="text-2xl font-bold text-primary ml-3">R$ 37,50</span>
							</p>
						</div>
					</div>
					
					<a href="https://manualdaatracao.digital/page-studio/?key=segredo123" class="btn-luxury w-full block text-center mb-4 text-lg md:text-xl py-4 md:py-5">
						🎯 QUERO ACESSAR O TREINAMENTO AGORA
					</a>
					
					<p class="text-sm text-muted-foreground">
						Aprenda o que ninguém nunca te ensinou<br/>
						<strong class="text-foreground">Acesso imediato</strong> · <strong class="text-foreground">Conteúdo privado</strong> · <strong class="text-foreground">Suporte incluso</strong>
					</p>
				</div>
			</div>
		</div>
	`;
		}

		// Navigation functions
		function startQuiz() {
			currentStep = 1;
			updateBackButton();
			render();
		}

		function answerQuestion(answer) {
			answers.push(answer);

			if (currentStep < questions.length) {
				currentStep++;
				updateBackButton();
				render();
			} else {
				// Show loading
				isLoading = true;
				render();

				// Simulate processing
				setTimeout(() => {
					isLoading = false;
					currentStep = questions.length + 1; // Result screen
					updateBackButton();
					render();
				}, 2000);
			}
		}

		function continueToFinal() {
			currentStep = questions.length + 2; // Final screen
			updateBackButton();
			render();
		}

		function goBack() {
			if (currentStep > 1 && currentStep <= questions.length) {
				answers.pop();
				currentStep--;
				updateBackButton();
				render();
			}
		}

		function updateBackButton() {
			const backBtn = document.getElementById('back-btn');
			if (currentStep >= 1 && currentStep <= questions.length) {
				backBtn.classList.remove('hidden');
			} else {
				backBtn.classList.add('hidden');
			}
		}

		function render() {
			const content = document.getElementById('quiz-content');

			if (isLoading) {
				content.innerHTML = renderLoading();
				return;
			}

			if (currentStep === 0) {
				content.innerHTML = renderWelcome();
			} else if (currentStep <= questions.length) {
				content.innerHTML = renderQuestion(currentStep - 1);
			} else if (currentStep === questions.length + 1) {
				content.innerHTML = renderResult();
			} else {
				content.innerHTML = renderFinal();
			}
		}

		// Initialize
		document.addEventListener('DOMContentLoaded', () => {
			initParticles();
			render();

			document.getElementById('back-btn').addEventListener('click', goBack);
		});
	</script>

	<?php wp_footer(); ?>

</body>

</html>