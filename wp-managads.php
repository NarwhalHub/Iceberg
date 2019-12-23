<?php
/**
 * Plugin Name: WP Managads
 * Plugin URI: https://puleeno.com
 * Author: Puleeno Nguyen
 * Author URI: https://puleeno.com
 * Description: The flexible ads manager for WordPress
 * Version: 0.1.0
 * Tag: ads, manager, performance
 */

define( 'WP_MANAGADS_PLUGIN_FILE', __FILE__ );

$composer = sprintf( '%s/vendor/autoload.php', dirname( __FILE__ ) );

if ( ! file_exists( $composer ) ) {
	return;
}
/**
 * Load the plugin core via Composer
 */
require_once $composer;

/**
 * Initilize managads features
 */
if ( class_exists( Managads::class ) ) {
	$GLOBALS['managads'] = Managads::instance();
}