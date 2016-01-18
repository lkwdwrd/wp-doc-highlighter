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
		<?php Template\reference_template( 'namespace' ); ?>
		<?php Template\reference_template( 'summary' ); ?>
		<?php Template\reference_template( 'description' ); ?>
		<?php Template\reference_template( 'methods' ); ?>
		<?php Template\reference_template( 'source' ); ?>
		<?php Template\reference_template( 'changelog' ); ?>
	</article>
	<div class="side-rail">
		<?php get_sidebar( 'reference' ); ?>
	</div>
</main>
<?php get_footer(); ?>