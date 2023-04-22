<?php
/**
 * Tema Teste Dev functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tema_Teste_Dev
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tema_teste_dev_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Tema Teste Dev, use a find and replace
		* to change 'tema-teste-dev' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'tema-teste-dev', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'tema-teste-dev' ),
			'language' => esc_html__( 'Language', 'tema-teste-dev' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'tema_teste_dev_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'tema_teste_dev_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tema_teste_dev_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tema_teste_dev_content_width', 640 );
}
add_action( 'after_setup_theme', 'tema_teste_dev_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tema_teste_dev_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tema-teste-dev' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tema-teste-dev' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 1', 'tema-teste-dev' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Widget area for footer 1', 'tema-teste-dev' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'tema-teste-dev' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Widget area for footer 2', 'tema-teste-dev' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 3', 'tema-teste-dev' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Widget area for footer 3', 'tema-teste-dev' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 4', 'tema-teste-dev' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Widget area for footer 4', 'tema-teste-dev' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'tema_teste_dev_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tema_teste_dev_scripts() { 
    // Enqueue the Google Fonts source file
    wp_enqueue_style( 'tema-teste-dev-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap', array(), null );

	wp_enqueue_style( 'tema-teste-dev-style', get_template_directory_uri() . '/dist/css/style.css', array(), _S_VERSION );
	wp_style_add_data( 'tema-teste-dev-style', 'rtl', 'replace' );

	//wp_enqueue_script( 'tema-teste-dev-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'tema-teste-dev-popper', 'https://unpkg.com/@popperjs/core@2', array(), _S_VERSION, true );

	wp_enqueue_script( 'tema-teste-dev-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tema_teste_dev_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

