<?php
/**
 * Courtney Theme core functions file
 *
 * Designed and built for the Courtney Hoffman Costume Designer website.
 *
 * @package    WordPress/ClassicPress
 * @subpackage Courtney_Theme
 * @author     Controlled Chaos Design <greg@ccdzine.com>
 * @copyright  Copyright (c) Controlled Chaos Design
 * @link       https://github.com/ControlledChaos/chcd-theme
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @since      1.0.0
 */

// Theme file namespace.
// namespace Courtney_Theme;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) { exit; }

// Define the minimum required PHP version.
define( 'CHCD_PHP_VERSION', '7.3' );

/**
 * Get the theme activation class
 *
 * Instantiate before the following version compare
 * to allow the deatcivation methods to run.
 */
require get_theme_file_path( '/includes/classes/class-activate.php' );

// Stop here if the minimum PHP version is not met.
if ( version_compare( phpversion(), CHCD_PHP_VERSION, '<' ) ) {
	return;
}

/**
 * Core theme function
 *
 * Loads PHP classes.
 *
 * @since  1.0.0
 * @access public
 * @global string $pagenow Gets the filename of the current page.
 * @return void
 */
function chcd_theme() {

	// Register theme classes.
	require get_theme_file_path( '/includes/autoloader.php' );

	// Get the filename of the current page.
	global $pagenow;

	// Instantiate theme classes.
	Courtney\Classes\Theme     :: instance();
	// Courtney\Classes\Non_Latin :: instance();
	// Courtney\Classes\Media     :: instance();
	// Courtney\Classes\Customize :: instance();

	// Instantiate admin theme classes.
	if ( is_admin() ) {

		// Run the page header on all screens.
		// Courtney\Classes\Admin_Pages :: instance();

		// Run the dashboard only on the admin index screen.
		if ( 'index.php' == $pagenow ) {
			// Courtney\Classes\Dashboard :: instance();
		}
	}

	// Template files.
	// require get_theme_file_path( '/includes/template-functions.php' );
	// require get_theme_file_path( '/includes/template-tags.php' );

	// Handle SVG icons.
	// require get_theme_file_path( '/includes/svg-icons.php' );

	// Custom CSS.
	// require get_theme_file_path( '/includes/custom-css.php' );
}

// Run the theme.
chcd_theme();
