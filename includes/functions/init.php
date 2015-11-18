<?php
namespace WP_Doc\Legacy;


add_action( 'init', __NAMESPACE__ . '\\init' );

function init() {
	add_action( 'add_meta_boxes', __NAMESPACE__ . '\\rename_comments_meta_box', 10, 2 );

	add_filter( 'breadcrumb_trail_items',  __NAMESPACE__ . '\\breadcrumb_trail_items', 10, 2 );
}

/**
 * Fix breadcrumb for hooks.
 *
 * A hook has a parent (the function containing it), which causes the Breadcrumb
 * Trail plugin to introduce trail items related to the parent that shouldn't
 * be shown.
 *
 * @param  array $items The breadcrumb trail items
 * @param  array $args  Original arg
 * @return array
 */
function breadcrumb_trail_items( $items, $args ) {
	$post_type = 'wp-parser-hook';

	// Bail early when not the single archive for hook
	if ( ! is_singular() || $post_type !== get_post_type() || ! isset( $items[4] ) ) {
		return $items;
	}

	$post_type_object = get_post_type_object( $post_type );

	// Replaces 'Functions' archive link with 'Hooks' archive link
	$items[2] = '<a href="' . get_post_type_archive_link( $post_type ) . '">' . $post_type_object->labels->name . '</a>';
	// Replace what the plugin thinks is the parent with the hook name
	$items[3] = $items[4];
	// Unset the last element since it shifted up in trail hierarchy
	unset( $items[4] );

	return $items;
}

/**
 * Rename the 'Comments' meta box to 'User Contributed Notes' for reference-editing screens.
 *
 * @param string  $post_type Post type.
 * @param WP_Post $post      WP_Post object for the current post.
 */
function rename_comments_meta_box( $post_type, $post ) {
	if ( is_parsed_post_type( $post_type ) ) {
		remove_meta_box( 'commentsdiv', $post_type, 'normal' );
		add_meta_box( 'commentsdiv', __( 'User Contributed Notes', 'wporg' ), 'post_comment_meta_box', $post_type, 'normal', 'high' );
	}
}
