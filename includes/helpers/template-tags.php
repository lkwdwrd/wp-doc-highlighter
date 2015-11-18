<?php
/**
 * Template tags used to keep logic out of the templates themselves.
 *
 * @package  WP_Documentor
 * @subpackage Highlighter
 */

namespace WP_Doc\Highlighter\Template;

/**
 * Output the site title and home link information based on context.
 *
 * When on the front page, use an h1 tag to display the the home link for the
 * site, otherwise just us a div so it doesn't affect with the overall hierachy
 * of the single pages.
 *
 * Output is sanitized and printed to the page.
 *
 * @return void
 */
function home_link() {
	$output = '<%1$s class="site-title"><a href="%2$s">%3$s</a></%1$s>';
	$tag = ( is_front_page() || is_archive() ) ? 'h1' : 'div';
	$home_link = esc_url( home_url( '/' ) );
	$name = esc_html( get_bloginfo( 'name' ) );

	printf( $output, $tag, $home_link, $name );
}

/**
 * Output the main menu for the site.
 *
 * @return void
 */
function main_menu() {
	$args = array(
		'theme_location'  => 'primary-menu',
		'container'       => 'nav',
		'container_class' => 'main-nav',
		'fallback_cb'     => ''
	);

	wp_nav_menu( $args );
}

/**
 * Loads a reference template.
 *
 * @param  string $name The name of the template to output.
 * @param  mixed  $post Null to use the global post object, or a WP_Post.
 * @return void         Outputs the template directly, so there is no return.
 */
function reference_template( $name, $post = null ) {
	echo apply_filters( 'wpd_render_ref', '', $name, $post );
}

/**
 * Loads a reference list and renders a template.
 *
 * @param  string $name  The name of the template to render.
 * @param  array  $meta  The meta to add to the reference list object.
 * @param  mixed  $query Either a WP_Query object, or arguments to create one. Null
 *                       to use the global WP_Query object.
 * @return void          Outputs the template directly so there is no return value.
 */
function reference_list_template( $name, $meta = array(), $query = null ) {
	if ( is_null( $query ) ) {
		global $wp_query;
		$query = $wp_query;
	}

	echo apply_filters( 'wpd_render_ref_list', '', $name, $meta, $query );
}

/**
 * Output a reference search form.
 *
 * @return void Outputs the search form directly.
 */
function reference_search_form() {
	echo apply_filters( 'wpd_search_form', '' );
}
