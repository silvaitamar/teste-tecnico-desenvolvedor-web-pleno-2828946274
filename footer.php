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
			<div class="site-footer-top">
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
							<ul class="list-unstyled d-flex flex-wrap align-items-center justify-content-center m-0">
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
			<div class="site-footer-main">
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

					<div class="col-md-6 offset-md-1 mb-3">
						<form>
						<h5 class="footer-title">ALP NEWS</h5>
						<p>Assine nossa newsletter e receba insights sobre Tecnologia, Marketing e Negócios</p>
						<div class="d-flex flex-column flex-sm-row w-100 gap-2">
							<label for="newsletter1" class="visually-hidden">Email address</label>
							<input id="newsletter1" type="text" class="form-control" placeholder="Email address">
							<button class="btn btn-primary" type="button">Subscribe</button>
						</div>
						</form>
					</div>
					</div>

					<div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
						<p>&copy; 2023 Company, Inc. All rights reserved.</p>
						<ul class="list-unstyled d-flex text-whites">
							<li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter" fill="#fff"/></svg></a></li>
							<li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram" fill="#fff"/></svg></a></li>
							<li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook" fill="#fff"/></svg></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="site-footer-bottom">
				<div class="row">
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tema-teste-dev' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'tema-teste-dev' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'tema-teste-dev' ), 'tema-teste-dev', '<a href="https://www.linkedin.com/in/silvaitamar/">Itamar Silva</a>' );
							?>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
