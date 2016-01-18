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
			<article id="post-<?php the_id(); ?>" <?php post_class( 'main-column' ); ?>>
				<?php get_template_part( 'templates/partials/content', 'media' ); ?>
				<a class="permalink" href="<?php the_permalink(); ?>">
					<h1 class="post-title"><?php the_title(); ?></h1>
				</a>
				<?php get_template_part( 'templates/partials/content', 'meta' ); ?>
				<?php the_content(); ?>
				<?php wp_link_pages( $defaults = array(
					'before'           => '<p class="page-links">' . __( 'Pages:' ),
					'link_before'      => '<span class="button page-link">',
					'link_after'       => '</span>',
				) ); ?>
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
