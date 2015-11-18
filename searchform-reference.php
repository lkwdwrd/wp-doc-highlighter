<?php
/**
 * The template for displaying search forms in WP_Documenter
 *
 * @package WP_Documenter
 * @subpackage Highlighter
 */

namespace WP_Doc\Highlighter;

?>
<form role="search" class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="search-field" class="search-label">
		<?php echo esc_html( _x( 'Reference Search', 'label', 'wpd' ) ); ?>
	</label>
	<input
		type="search"
		class="search-field"
		placeholder="<?php echo esc_attr_x( 'e.g. function_name()', 'placeholder', 'wpd' ); ?>"
		value="<?php echo esc_attr( get_search_query() ); ?>"
		name="rs"
	/>
	<button class="search-submit">
		<?php echo esc_html( _x( 'Search', 'submit button', 'wpd' ) ); ?>
	</button>
</form>
