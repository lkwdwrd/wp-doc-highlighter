<?php

/**
 * WP Documenter Highlighter theme functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package WP_Documenter
 * @subpackage Highlighter
 */

namespace WP_Doc\Highlighter;

// Useful global constants
define( 'WPDOC_HLTR_VERSION',      '0.1.0' );
define( 'WPDOC_HLTR_URL',          get_stylesheet_directory_uri() );
define( 'WPDOC_HLTR_TEMPLATE_URL', get_template_directory_uri() );
define( 'WPDOC_HLTR_PATH',         get_template_directory() . '/' );
define( 'WPDOC_HLTR_INC',          WPDOC_HLTR_PATH . 'includes/' );

// Include compartmentalized functions
require_once WPDOC_HLTR_INC . 'helpers/general.php';
require_once WPDOC_HLTR_INC . 'helpers/template-tags.php';
require_once WPDOC_HLTR_INC . 'functions/core.php';
// require_once WPDOC_INC . 'functions/explanations.php';

// Run the setup functions
\WP_Doc\Highlighter\Core\setup();
