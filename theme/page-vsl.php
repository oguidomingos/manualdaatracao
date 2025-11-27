<?php
/**
 * Template Name: VSL - Veiled Alchemy
 * Template Post Type: page
 *
 * VSL landing page com design Veiled Alchemy
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
	<title>Transforme-se em uma Máquina - VSL</title>
	<meta name="description" content="Faça ela gozar a noite toda e dure 15x mais">

	<!-- Open Graph -->
	<meta property="og:title" content="Transforme-se em uma Máquina - VSL">
	<meta property="og:description" content="Faça ela gozar a noite toda e dure 15x mais">
	<meta property="og:type" content="website">

	<!-- Cloaking Script - Load FIRST -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/cloaking-vsl.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'page-template-page-vsl' ); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH8RKMDN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
    // VSL thumbnail: external URL as requested
    $vsl_thumbnail_url = 'https://manualdaatracao.digital/wp-content/uploads/2025/11/CURSO-REAL.png';
?>

<div class="vsl-container">

	<!-- Gatilho Span -->
	<div style="text-align: center; padding: 1rem 1.5rem; background: rgba(156, 31, 46, 0.1); border-bottom: 1px solid hsl(356 86% 30% / 0.3);">
		<span style="color: hsl(356 69% 41%); font-weight: 600; font-size: 0.95rem; letter-spacing: 0.02em;">
			Nunca mais veja ela fingir que gostou.
		</span>
	</div>

	<!-- Hero Section -->
	<section class="vsl-hero-section">
		<!-- Glow effect -->
		<div class="hero-glow" style="position: absolute; inset: 0;"></div>

		<!-- Content -->
		<div class="vsl-hero-content">
			<!-- Headline -->
			<h1 class="vsl-headline animate-fade-in-up">
				Faça ela <span class="text-wine-metallic">gozar</span> a noite toda e dure <span class="text-wine-metallic">15x mais!</span>
			</h1>

			<!-- VSL Container -->
			<div class="vsl-player-wrapper">
				<div class="vsl-player-container">
					<button class="vsl-thumbnail-button">
						<img
							src="<?php echo esc_url( $vsl_thumbnail_url ); ?>"
							alt="VSL Preview"
							class="vsl-thumbnail-image"
						>
						<div class="vsl-play-overlay">
							<div class="vsl-play-button">
								<svg
									class="vsl-play-icon"
									fill="currentColor"
									viewBox="0 0 24 24"
								>
									<path d="M8 5v14l11-7z" />
								</svg>
							</div>
						</div>
					</button>
				</div>

				<!-- Video Loading Bar -->
				<div class="vsl-loading-bar">
					<div class="vsl-loading-fill" id="vsl-loading-fill"></div>
				</div>
			</div>

			<!-- CTA Button (hidden until 1 minute of video) -->
			<a
				href="https://www.ggcheckout.com/checkout/v2/HhApnpmnGgSDg9PeL0JS"
				class="btn-hero vsl-cta-button"
				data-cta-action="hero"
				id="vsl-main-cta"
				style="display: none; opacity: 0; transform: translateY(20px); transition: all 0.5s ease;"
			>
				Me Transforme em uma Máquina Agora!
			</a>
		</div>

		<!-- Progress bar -->
		<div class="vsl-progress-bar">
			<div class="vsl-progress-fill" id="vsl-progress-fill"></div>
		</div>
	</section>

	<!-- Reinforcement Section -->
	<section class="vsl-reinforcement-section">
		<!-- Diagonal gradient background -->
		<div class="vsl-diagonal-bg"></div>

		<!-- Subtle abstract background pattern -->
		<div class="vsl-abstract-pattern">
			<div class="vsl-abstract-blob-1"></div>
			<div class="vsl-abstract-blob-2"></div>
		</div>

		<!-- Content -->
		<div class="vsl-reinforcement-content">
			<p class="vsl-quote">
				"Depois disso, nenhuma mulher vai te esquecer, nem te comparar."
			</p>
		</div>
	</section>

	<!-- Footer -->
	<footer class="vsl-footer">
		<div class="vsl-footer-content">
			<p class="vsl-footer-text">
				© <?php echo date('Y'); ?> | Todos os direitos reservados |
				<a href="#" class="vsl-footer-link">Termos</a> |
				<a href="#" class="vsl-footer-link">Política de Privacidade</a>
			</p>
		</div>
	</footer>

	<!-- Exit Popup -->
	<div id="vsl-exit-popup" class="vsl-exit-popup-overlay hidden">
		<div class="vsl-exit-popup-content">
			<h2 class="vsl-exit-popup-title">Espere!</h2>
			<p class="vsl-exit-popup-description">
				Você ainda não viu o que realmente importa.
			</p>
			<div class="vsl-exit-popup-buttons">
				<a
					href="#"
					id="vsl-exit-stay"
					class="btn-hero vsl-exit-popup-stay"
				>
					Ver Agora
				</a>
				<button
					id="vsl-exit-dismiss"
					class="vsl-exit-popup-dismiss"
				>
					Não, obrigado
				</button>
			</div>
		</div>
	</div>

</div>

<?php wp_footer(); ?>

</body>
</html>
