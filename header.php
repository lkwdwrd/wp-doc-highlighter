<?php
/**
 * The template for displaying the header.
 *
 * @package WP Documenter
 * @subpackage Highlighter
 */

namespace WP_Doc\Highlighter;

use WP_Doc\Highlighter\Template;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php do_action( 'before' ); ?>
		<header class="site-header">
			<?php Template\home_link(); ?>
			<?php Template\main_menu(); ?>
		</header>
		<main>