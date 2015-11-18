<?php
/**
 * Code Reference user submitted content (comments, notes, etc).
 *
 * @package wporg-developer
 */

/**
 * Class to handle user submitted content.
 */
class DevHub_User_Submitted_Content {

	/**
	 * Initializer
	 */
	public static function init() {
		add_action( 'init', array( __CLASS__, 'do_init' ) );
	}

	/**
	 * Handles adding/removing hooks to enable comments as user contributed notes.
	 */
	public static function do_init() {

		// Disable pings.
		add_filter( 'pings_open',                       '__return_false' );

		// Sets whether submitting notes is open for the user
		add_filter( 'comments_open',                    '\WP_Doc\Legacy\can_user_post_note', 10, 2 );

		// Enqueue scripts and styles
		add_action( 'wp_enqueue_scripts',               array( __CLASS__, 'scripts_and_styles' ), 11 );

		// Force comment registration to be true
		add_filter( 'pre_option_comment_registration', '__return_true' );

		// Force comment moderation to be true
		add_filter( 'pre_option_comment_moderation',   '__return_true' );

		// Remove reply to link
		add_filter( 'comment_reply_link',              '__return_empty_string' );

		// Disable smilie conversion
		remove_filter( 'comment_text',                 'convert_smilies',    20 );

		// Disable capital_P_dangit
		remove_filter( 'comment_text',                 'capital_P_dangit',   31 );

		// Enable shortcodes for comments
		add_filter( 'comment_text',                    'do_shortcode');

	}

	/**
	 * Enqueues scripts and styles.
	 */
	public static function scripts_and_styles() {
		if ( is_singular() ) {
			wp_enqueue_script( 'wporg-developer-user-notes', WPDOC_URL . 'assets/js/vendor/user-notes.js', array( 'quicktags' ), '20150618', true );
			if ( get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
		}
	}

	/**
	 * Capture an {@see wp_editor()} instance as the 'User Contributed Notes' comment form.
	 *
	 * Uses output buffering to capture the editor instance for use with the {@see comments_form()}.
	 *
	 * @return string HTML output for the wp_editor-ized comment form.
	 */
	public static function wp_editor_comments() {
		ob_start();
		echo '<p class="comment-form-comment"><label for="comment">' . _x( 'Add Note', 'noun', 'wporg' ) . '</label>';
		wp_editor( '', 'comment', array(
			'media_buttons' => false,
			'textarea_name' => 'comment',
			'textarea_rows' => 8,
			'quicktags'     => array(
				'buttons' => 'strong,em,ul,ol,li'
			),
			'teeny'         => true,
			'tinymce'       => false,
		) );
		echo '</p>';
		return ob_get_clean();
	}

} // DevHub_User_Submitted_Content

DevHub_User_Submitted_Content::init();
