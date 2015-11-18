<?php
/**
 * Pulls in the reference sidebar used on all reference post types.
 *
 * @package WP_Documentor
 * @subpackage Highglighter
 */

namespace WP_Doc\Highlighter;

?>
<?php if ( is_active_sidebar( 'sidebar-reference' ) ) : ?>
	<?php do_action( 'before_sidebar' ); ?>
	<div class="sidebar reference-sidebar">
		<?php dynamic_sidebar( 'sidebar-reference' ); ?>
	</div>
<?php endif; ?>
