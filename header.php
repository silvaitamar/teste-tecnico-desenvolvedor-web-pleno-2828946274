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

	<header id="masthead" class="site-header">
		<div class="site-header-inner container-fluid d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
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

			<nav id="site-navigation" class="main-navigation col-12 col-md-auto mb-2 justify-content-center mb-md-0">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tema-teste-dev' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_class'	 => 'nav',
						'menu_id'        => 'primary-menu'
					)
				);
				?>
			</nav><!-- #site-navigation -->

			<div class="col-md-3 text-end">
				<button type="button" class="btn btn-outline-primary me-2">Login</button>
			</div>
		</div>
	</header><!-- #masthead -->
