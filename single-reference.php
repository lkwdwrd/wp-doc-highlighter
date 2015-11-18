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
<article id="post-<?php get_the_id(); ?>" <?php post_class( array( 'main-column', 'language-php' ) ); ?>>
	<?php Template\reference_template( 'deprecated' ); ?>
	<h1><?php the_title(); ?></h1>
	<?php Template\reference_template( 'namespace' ); ?>
	<?php Template\reference_template( 'summary' ); ?>
	<?php Template\reference_template( 'signature' ); ?>
	<?php Template\reference_template( 'params' ); ?>
	<?php Template\reference_template( 'return' ); ?>
	<?php Template\reference_template( 'description' ); ?>
	<?php Template\reference_template( 'usage' ); ?>
	<?php Template\reference_template( 'source' ); ?>
	<?php Template\reference_template( 'changelog' ); ?>

	<?php /* $explanation = Reference\get_explanation_field( 'post_content', get_the_ID() );
	if ( $explanation ) : ?>
		<section class="explanation">
			<h2><?php esc_html_e( 'Explanation', 'wpd' ); ?></h2>
			<?php echo apply_filters( 'the_content', apply_filters( 'get_the_content', $explanation ) ); ?>
		</section>
	<?php endif; */?>

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

<?php get_footer(); ?>