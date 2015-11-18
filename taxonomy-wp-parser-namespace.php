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

	<div id="content-area">

		<?php Template\reference_search_form(); ?>
		<div class="type-container">
			<?php 
			Template\reference_list_template(
				'type-list',
				array(
					'title' => esc_html__( 'Namespace' ),
					'classes' => array(
						'type-filter-header',
						'header-supplementary',
					),
				)
			);
			?>
		</div>
	</div><!-- #primary -->
<?php get_footer(); ?>
