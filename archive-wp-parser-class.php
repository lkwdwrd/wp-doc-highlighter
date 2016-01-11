<?php

namespace WP_Doc\Highlighter;

use WP_Doc\Highlighter\Template;

get_header(); ?>
	<?php Template\reference_search_form(); ?>
	<main>
		<?php 
		Template\reference_list_template(
			'type-list',
			array(
				'title' => esc_html__( 'Classes' ),
				'url' => get_post_type_archive_link( 'wp-parser-class' ),
				'classes' => array(
					'type-filter-header',
					'header-classes',
				),
			)
		);
		?>
	</main>
	<?php get_template_part( 'templates/partials/archive', 'navigation' ); ?>
<?php get_footer(); ?>