<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WP_Documentor
 * @subpackage Highlighter
 */

namespace WP_Doc\Highlighter;

use WP_Doc\Highlighter\Tempalate;

get_header(); ?>
	<?php Template\reference_search_form(); ?>
	<main>
		<?php 
		Template\reference_list_template(
			'type-list',
			array(
				'title' => esc_html__( 'Source File' ),
				'classes' => array(
					'type-filter-header',
					'header-supplementary',
				),
			)
		);
		?>
	</main>
<?php get_footer(); ?>
