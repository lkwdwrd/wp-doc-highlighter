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
			'title' => 'Functions',
			'url' => get_post_type_archive_link( 'wp-parser-function' ),
			'classes' => array(
				'type-filter-header',
				'header-functions',
			),
		),
		array(
			'posts_per_page' => 100,
			'post_type' => 'wp-parser-function',
			'orderby' => 'title',
			'order' => 'ASC',
		)
	);
	Template\reference_list_template(
		'type-list',
		array(
			'title' => 'Hooks',
			'url' => get_post_type_archive_link( 'wp-parser-hook' ),
			'classes' => array(
				'type-filter-header',
				'header-hooks',
			),
		),
		array(
			'posts_per_page' => 100,
			'post_type' => 'wp-parser-hook',
			'orderby' => 'title',
			'order' => 'ASC',
		)
	);
	Template\reference_list_template(
		'type-list',
		array(
			'title' => 'Classes',
			'url' => get_post_type_archive_link( 'wp-parser-class' ),
			'classes' => array(
				'type-filter-header',
				'header-classes',
			),
		),
		array(
			'posts_per_page' => 100,
			'post_type' => 'wp-parser-class',
			'orderby' => 'title',
			'order' => 'ASC',
		)
	);
	Template\reference_list_template(
		'type-list',
		array(
			'title' => 'Methods',
			'url' => get_post_type_archive_link( 'wp-parser-method' ),
			'classes' => array(
				'type-filter-header',
				'header-methods',
			),
		),
		array(
			'posts_per_page' => 100,
			'post_type' => 'wp-parser-method',
			'orderby' => 'title',
			'order' => 'ASC',
		)
	);
	?>
</main>
<?php get_footer(); ?>
