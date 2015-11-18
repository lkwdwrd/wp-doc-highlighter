<?php

namespace WP_Doc\Highlighter;

use WP_Doc\Template;

get_header(); ?>

		<?php Template\reference_search_form(); ?>
		<div class="type-container">
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
		</div>
	</div><!-- #primary -->
<?php get_footer(); ?>