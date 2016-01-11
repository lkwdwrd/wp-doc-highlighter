<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Documentor
 * @package Highlighter
 */

namespace WP_Doc\Highlighter;

get_header(); ?>
<main id="main" class="site-main" role="main">
	<div id="site-content" class="main-column">
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_id(); ?>" <?php post_class(); ?>>
					<?php get_template_part( 'templates/partials/content', 'media' ); ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php get_template_part( 'templates/partials/content', 'meta' ); ?>
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
				</article>
			<?php endwhile; ?>

		<?php endif; ?>
		<?php get_template_part( 'templates/partials/archive', 'navigation' ); ?>
	</div>
	<div class="side-rail">
		<?php get_sidebar(); ?>
	</div>
</main><!-- #main -->
<?php get_footer(); ?>
