<?php
/**
 * Single view for a Reference item.
 *
 * @package WP_Documenter
 * @subpackage Highlighter
 */

namespace WP_Doc\Highlighter;

get_header() ?>
<main id="main" class="site-main" role="main">
	<?php if ( have_posts() ) : ?>
		<?php while( have_posts() ): the_post(); ?>
			<article id="post-<?php get_the_id(); ?>" <?php post_class( 'main-column' ); ?>>
				<?php get_template_part( 'templates/partials/content', 'media' ); ?>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php get_template_part( 'templates/partials/content', 'meta' ); ?>
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
				<?php get_template_part( 'templates/partials/content', 'categories' ); ?>
				<?php get_template_part( 'templates/partials/content', 'tags' ); ?>
				<?php get_template_part( 'templates/partials/content', 'navigation' ); ?>
			</article>
		<?php endwhile; ?>
	<?php endif; ?>
	<div class="side-rail">
		<?php get_sidebar(); ?>
	</div>
</main>

<?php get_footer(); ?>
