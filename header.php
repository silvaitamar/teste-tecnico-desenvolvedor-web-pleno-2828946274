<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tema_Teste_Dev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tema-teste-dev' ); ?></a>

	<header id="masthead" class="site-header navbar navbar-expand-lg fixed-top py-3 py-md-0">
		<div class="site-header-inner container-fluid d-flex flex-wrap align-items-center justify-content-md-between">
			<div class="site-branding col-md-3 mb-2 mb-md-0">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$tema_teste_dev_description = get_bloginfo( 'description', 'display' );
				if ( $tema_teste_dev_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $tema_teste_dev_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
					
			<div class="col-md-9 d-flex flex-wrap align-items-center justify-content-md-end" aria-label="Offcanvas navbar large">
				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mainOffcanvas" aria-controls="mainOffcanvas" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="offcanvas offcanvas-end" tabindex="-1" id="mainOffcanvas" aria-labelledby="mainOffcanvasLabel">
					<div class="offcanvas-header">
						<?php if ( get_theme_mod( 'tema_teste_dev_additional_logo' ) ) : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo esc_url( get_theme_mod( 'tema_teste_dev_additional_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
							</a>
						<?php endif; ?>

						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body ">
						<nav id="site-navigation" class="main-navigation nav-subitems-icons d-flex flex-wrap align-items-center justify-content-lg-center col-md-8">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'menu_class'	 => 'navbar-nav',
									'menu_id'        => 'primary-menu',
									'fallback_cb' => '__return_false',
									'depth' => 2,
									'walker' => new bootstrap_5_wp_nav_menu_walker()
								)
							);
							?>
						</nav><!-- #site-navigation -->

						<div class="flex-wrap align-items-center justify-content-end text-end d-none d-lg-flex col-md-4">
							<div id="site-language-navigation" class="main-navigation col-12 col-md-auto mb-2 justify-content-center mb-md-0">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'language',
										'menu_class'	 => 'nav',
										'menu_id'        => 'language-menu',
										'fallback_cb' => '__return_false',
										'depth' => 2,
										'walker' => new bootstrap_5_wp_nav_menu_walker()
									)
								);
								?>
							</div><!-- #site-language-navigation -->
							<button type="button" class="btn btn-outline-primary me-2">Solicitar proposta</button>
						</div>

						<div class="header-social-networks d-md-block d-lg-none">
							<ul class="list-unstyled d-flex flex-wrap align-items-center justify-content-between m-0">
								<?php if ( get_theme_mod( 'tema_teste_dev_instagram_link' ) ) : ?>
									<li>
										<a class="link-body-emphasis" href="<?php echo esc_url( get_theme_mod( 'tema_teste_dev_instagram_link' ) ); ?>">
											<i class="icon-Property-1instagram"></i>
										</a>
									</li>
								<?php endif; ?>

								<?php if ( get_theme_mod( 'tema_teste_dev_linkedin_link' ) ) : ?>
									<li>
										<a class="link-body-emphasis" href="<?php echo esc_url( get_theme_mod( 'tema_teste_dev_linkedin_link' ) ); ?>">
											<i class="icon-Property-1linkedin"></i>
										</a>
									</li>
								<?php endif; ?>

								<?php if ( get_theme_mod( 'tema_teste_dev_whatsapp_link' ) ) : ?>
									<li>
										<a class="link-body-emphasis" href="<?php echo esc_url( get_theme_mod( 'tema_teste_dev_whatsapp_link' ) ); ?>">
											<i class="icon-Property-1whatsapp"></i>
										</a>
									</li>
								<?php endif; ?>

								<?php if ( get_theme_mod( 'tema_teste_dev_youtube_link' ) ) : ?>
									<li>
										<a class="link-body-emphasis" href="<?php echo esc_url( get_theme_mod( 'tema_teste_dev_youtube_link' ) ); ?>">
											<i class="icon-Property-1youtube"></i>
										</a>
									</li>
								<?php endif; ?>
							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
