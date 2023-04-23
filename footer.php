<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tema_Teste_Dev
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-footer-section site-footer-top">
				<div class="row d-flex flex-wrap align-items-center justify-content-center">
					<div class="col-md-6">
						<div class="site-branding-icon text-center text-md-start">
						<?php if ( get_theme_mod( 'tema_teste_dev_footer_logo' ) ) : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo esc_url( get_theme_mod( 'tema_teste_dev_footer_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
							</a>
						<?php endif; ?>
						</div>
					</div>

					<div class="col-md-6">
						<div class="footer-social-networks">
							<ul class="list-unstyled d-flex flex-wrap align-items-center justify-content-between justify-content-lg-end m-0">
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
			<div class="site-footer-section site-footer-main">
				<div class="row">
					<div class="col-md-2 col-6 mb-3">
						<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<div class="widget-column footer-widget-1">
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>
						<?php endif; ?>
					</div>

					<div class="col-md-4 col-6 mb-3">
						<div class="row">
							<div class="col-md-6 mb-3">
								<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
								<div class="widget-column footer-widget-2">
									<?php dynamic_sidebar( 'footer-2' ); ?>
								</div>
								<?php endif; ?>
							</div>

							<div class="col-md-6 mb-3">
								<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
								<div class="widget-column footer-widget-3">
									<?php dynamic_sidebar( 'footer-3' ); ?>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>

					<div class="col-md-5 offset-md-1">
						<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
						<div class="widget-column footer-widget-4">
							<?php dynamic_sidebar( 'footer-4' ); ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="site-footer-section site-footer-bottom">
				<?php if ( is_active_sidebar( 'footer-5' ) ) : ?>
				<div class="widget-column footer-widget-5">
					<?php dynamic_sidebar( 'footer-5' ); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
