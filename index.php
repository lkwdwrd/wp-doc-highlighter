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

<div id="content-area">
	

	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</main><!-- #main -->
	<?php get_sidebar(); ?>
</div><!-- #primary -->
<?php get_footer(); ?>