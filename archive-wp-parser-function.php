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
				'title' => esc_html__( 'Functions' ),
				'url' => get_post_type_archive_link( 'wp-parser-function' ),
				'classes' => array(
					'type-filter-header',
					'header-functions',
				),
			)
		);
		?>
	</main>
<?php get_footer(); ?>