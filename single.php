<?php
/**
 * Single view for a Reference item.
 *
 * @package WP_Documenter
 * @subpackage Highlighter
 */

namespace WP_Doc\Highlighter;

?>

<article id="post-<?php get_the_id(); ?>" <?php post_class( 'main-column' ); ?>>
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php the_content(); ?>
</article>
<div class="side-rail">
	<?php get_sidebar(); ?>
</div>
