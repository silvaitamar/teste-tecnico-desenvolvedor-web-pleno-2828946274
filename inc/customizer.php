<?php
/**
 * Tema Teste Dev Theme Customizer
 *
 * @package Tema_Teste_Dev
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tema_teste_dev_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'tema_teste_dev_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'tema_teste_dev_customize_partial_blogdescription',
			)
		);
	}

	// Add new section for social media links
	$wp_customize->add_section( 'tema_teste_dev_social_links_section', array(
		'title'    => __( 'Social Media Links', 'tema-teste-dev' ),
		'priority' => 30,
	) );

	// Add settings for social media links
	$wp_customize->add_setting( 'tema_teste_dev_instagram_link', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_setting( 'tema_teste_dev_linkedin_link', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_setting( 'tema_teste_dev_whatsapp_link', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_setting( 'tema_teste_dev_youtube_link', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );

	// Add controls for social media links
	$wp_customize->add_control( 'tema_teste_dev_instagram_link_control', array(
		'label'    => __( 'Instagram Link', 'tema-teste-dev' ),
		'section'  => 'tema_teste_dev_social_links_section',
		'settings' => 'tema_teste_dev_instagram_link',
		'type'     => 'text',
	) );

	$wp_customize->add_control( 'tema_teste_dev_linkedin_link_control', array(
			'label'    => __( 'LinkedIn Link', 'tema-teste-dev' ),
			'section'  => 'tema_teste_dev_social_links_section',
			'settings' => 'tema_teste_dev_linkedin_link',
			'type'     => 'text',
	) );

	$wp_customize->add_control( 'tema_teste_dev_whatsapp_link_control', array(
		'label'    => __( 'WhatsApp Link', 'tema-teste-dev' ),
		'section'  => 'tema_teste_dev_social_links_section',
		'settings' => 'tema_teste_dev_whatsapp_link',
		'type'     => 'text',
	) );

	$wp_customize->add_control( 'tema_teste_dev_youtube_link_control', array(
		'label'    => __( 'YouTube Link', 'tema-teste-dev' ),
		'section'  => 'tema_teste_dev_social_links_section',
		'settings' => 'tema_teste_dev_youtube_link',
		'type'     => 'text',
	) );
}
add_action( 'customize_register', 'tema_teste_dev_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function tema_teste_dev_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function tema_teste_dev_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tema_teste_dev_customize_preview_js() {
	wp_enqueue_script( 'tema-teste-dev-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'tema_teste_dev_customize_preview_js' );
