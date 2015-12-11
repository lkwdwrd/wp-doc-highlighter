<?php namespace WP_Doc;
/**
 * The template for displaying Search Results pages.
 *
 * @package WP_Documentor
 * @subpackage Highlighter
 */

namespace WP_Doc\Highlighter;

use WP_Doc\Highlighter\Tempalate;

get_header(); ?>
	<div class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
		<span class="trail-browse"><span class="trail-begin"><?php _e( 'Search Results', 'wporg' ); ?></span></span>
		<span class="sep">/</span> <span class="trail-end"><?php echo esc_html( get_search_query() ); ?></span>
	</div>

	<?php Template\reference_search_form(); ?>
	<main>
		<?php 
			Template\reference_list_template(
				'type-list',
				array(
					'title' => esc_html__( 'Search Results' ),
					'classes' => array(
						'type-filter-header',
						'header-supplementary',
					),
				)
			);
			?>
	</main>
<?php get_footer(); ?>
