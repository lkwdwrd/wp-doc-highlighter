<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WP_Documenter
 * @subpackage Highlighter
 */

namespace WP_Doc\Highlighter;

?>
<?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>
	<?php do_action( 'before_sidebar' ); ?>
	<ul class="sidebar main-sidebar">
		<?php dynamic_sidebar( 'sidebar-main' ); ?>
	</ul>
<?php endif; ?>
