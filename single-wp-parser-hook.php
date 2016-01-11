<?php
/**
 * Single view for a Reference item.
 *
 * @package WP_Documenter
 * @subpackage Highlighter
 */

namespace WP_Doc\Highlighter;

use WP_Doc\Highlighter\Template;

get_header();
the_post();
?>
<main>
	<article id="post-<?php the_id(); ?>" <?php post_class( array( 'main-column', 'language-php' ) ); ?>>
		<?php Template\reference_template( 'deprecated' ); ?>
		<?php Template\reference_template( 'title' ); ?>
		<?php Template\reference_template( 'summary' ); ?>
		<?php Template\reference_template( 'signature-hook' ); ?>
		<?php Template\reference_template( 'params' ); ?>
		<?php Template\reference_template( 'description' ); ?>
		<?php Template\reference_template( 'source-file' ); ?>
		<?php Template\reference_template( 'usage' ); ?>
		<?php Template\reference_template( 'changelog' ); ?>

		<?php if ( comments_open() || '0' != get_comments_number() ) : ?>
			<section class="user-notes">
				<h2><?php esc_html_e( 'User Contributed Notes', 'wporg' ); ?></h2>
				<?php comments_template(); ?>
			</section>
		<?php endif; ?>
	</article>
	<div class="side-rail">
		<?php get_sidebar( 'reference' ); ?>
	</div>
</main>
<?php get_footer(); ?>