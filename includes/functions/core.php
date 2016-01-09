<?php
namespace WP_Doc\Highlighter\Core;

/**
 * Set up theme defaults and register supported WordPress features.
 *
 * @return void
 */
function setup() {
	$n = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'after_setup_theme',  $n( 'i18n' ) );
	add_action( 'after_setup_theme',  $n( 'theme_support' ) );
	add_action( 'widgets_init',       $n( 'register_theme_sidebar' ) );
	add_action( 'init',               $n( 'register_theme_menus' ) );
	add_action( 'wp_enqueue_scripts', $n( 'scripts' ) );
	add_action( 'wp_enqueue_scripts', $n( 'styles' ) );
	add_action( 'wp_head',            $n( 'header_meta' ) );

	// Skip duplicate parser hooks.
	add_filter( 'wp_parser_skip_duplicate_hooks', '__return_true' );
}

/**
 * Makes WP Theme available for translation.
 *
 * Translations can be added to the /lang directory.
 * If you're building a theme based on WP Theme, use a find and replace
 * to change 'wptheme' to the name of your theme in all template files.
 *
 * @return void
 */
function i18n() {
	load_theme_textdomain( 'wpd', WPDOC_HLTR_PATH . '/languages' );
}

/**
 * Register theme support for various features.
 *
 * @return void
 */
function theme_support() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
}

/**
 * Enqueue scripts for front-end.
 *
 * @return void
 */
function scripts( $debug = false ) {
	$min = ( $debug || defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_script(
		'wpd',
		WPDOC_HLTR_TEMPLATE_URL . "/assets/js/wp-documenter{$min}.js",
		array(),
		WPDOC_HLTR_VERSION,
		true
	);

	wp_enqueue_script( 
		'prism',
		WPDOC_HLTR_TEMPLATE_URL . "/assets/js/vendor/prism{$min}.js",
		array(),
		WPDOC_HLTR_VERSION,
		true
	);
}

/**
 * Enqueue styles for front-end.
 *
 * @return void
 */
function styles( $debug = false ) {
	$min = ( $debug || defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_style(
		'wpd',
		WPDOC_HLTR_TEMPLATE_URL . "/assets/css/wp-documenter{$min}.css",
		array(),
		WPDOC_HLTR_VERSION
	);

	wp_enqueue_style( 
		'prism',
		WPDOC_HLTR_TEMPLATE_URL . "/assets/css/prism.css",
		array(),
		WPDOC_HLTR_VERSION
	);
}


/**
 * widgets_init function.
 *
 * @return void
 */
function register_theme_sidebar() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'wpd' ),
		'id'            => 'sidebar-main',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1><div class="widget-content">',
	) );
}

/**
 * Register the themes main menu.
 *
 * @return void
 */
function register_theme_menus() {

	register_nav_menus( array(
		'primary-menu' => __( 'Primary Menu', 'wpd' ),
	) );
}

/**
 * Add humans.txt to the <head> element.
 *
 * @return void.
 */
function header_meta() {
	$humans = '<link type="text/plain" rel="author" href="' . WPDOC_HLTR_URL . '/humans.txt" />';

	echo apply_filters( 'wpd_humans', $humans );
}
