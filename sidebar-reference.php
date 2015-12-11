<?php
/**
 * Pulls in the reference sidebar used on all reference post types.
 *
 * @package WP_Documentor
 * @subpackage Highglighter
 */

namespace WP_Doc\Highlighter;

do_action( 'before_sidebar' ); 
Template\reference_search_form();
Template\reference_list_template(
	'type-list', 
	array(),
	array(
		'posts_per_page' => 100,
		'post_type' => 'reference',
		'orderby' => 'title',
		'order' => 'ASC',
	)
);
