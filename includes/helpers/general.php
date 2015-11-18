<?php
/**
 * Set up theme defaults and register supported WordPress features.
 *
 * @package WP_Documentor
 */
namespace WP_Doc\Highlighter\Helpers;

/**
 * Whether or not composer has autoloaded.
 *
 * Acts as a lazy loader, attempting to autoload composer the first time it
 * is called. This allows us to wait until it's actually needed to load the
 * composer files. If they aren't used, they don't get loaded.
 *
 * @return bool Whether or not composer autoloader is available.
 */
function autoload_composer() {
	static $loaded;
	if ( null === $loaded ) {
		// try to locate the vendor directory
		$base_dir = WPDOC_PATH;
		do {
			if ( file_exists( $base_dir . 'vendor/autoload.php' ) ) {
				$loaded = require_once $base_dir . 'vendor/autoload.php';
				break;
			} else {
				$loaded = false;
				$base_dir = trailingslashit( dirname( $base_dir ) );
			}
		} while ( dirname( ABSPATH ) . '/' !== $base_dir );
	}

	return $loaded;
}

/**
 * Recursively converts array keys from snake_case to camelCase.
 *
 * @param  array $array The array to convert keys for.
 * @return array        The array with snake_cased keys converted to camelCase.
 */
function php_to_js_keys( $array ) {
	foreach( $array as $key => $value ) {
		// Make this recursive by running the values through if array.
		if ( is_array( $value ) ) {
			$array[ $key ] = php_to_js_keys( $value );
		}
		// Do the conversion if necessary
		$new_key = $key;
		if ( is_string( $new_key ) ) {
			$new_key = lcfirst( str_replace( ' ', '', ucwords( str_replace( '_', ' ', $key ) ) ) );
		}
		// If we have changed anything after processing, update the array.
		if ( $new_key !== $key ) {
			$array[ $new_key ] = $array[ $key ];
			unset( $array[ $key ] );
		}
	}

	return $array;
}
