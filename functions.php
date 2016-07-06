<?php
/**
 * Comer & Divertirse functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Comer_&_Divertirse
 */

if ( ! function_exists( 'comerydivertirse_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function comerydivertirse_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Comer & Divertirse, use a find and replace
	 * to change 'comerydivertirse' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'comerydivertirse', get_template_directory() . '/languages' );

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
	add_image_size( 'home-slider', 572, 350, true );
	add_image_size( 'home-slider-2', 350, 448, true );
	add_image_size( 'home-slider-3', 270, 225, true );
	add_image_size( 'home-carousel', 450, 258, true );
	add_image_size( 'post', 871, 497, true );
	add_image_size( 'widget-recetas', 95, 95, true );
	add_image_size( 'category', 472, 270, true );
	add_image_size( 'aplicacion', 300, 200, true );
	add_image_size( 'aplicacion_150', 150, 150, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'comerydivertirse' ),
		'footer' => esc_html__( 'Footer', 'comerydivertirse' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'comerydivertirse_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'comerydivertirse_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function comerydivertirse_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'comerydivertirse_content_width', 640 );
}
add_action( 'after_setup_theme', 'comerydivertirse_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function comerydivertirse_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'comerydivertirse' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'comerydivertirse_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function comerydivertirse_scripts() {
	// wp_enqueue_style( 'comerydivertirse-style', get_stylesheet_uri() );

	wp_enqueue_script( 'comerydivertirse-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'comerydivertirse-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'comerydivertirse_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Custom Post Type file.
 */
require get_template_directory() . '/inc/custom-post-type.php';

/**
 * Load Custom Meta box file.
 */
require get_template_directory() . '/inc/custom-metabox.php';

/**
 * Load Twitter feed file.
 */
// require get_template_directory() . '/inc/twitter/twitter.php';