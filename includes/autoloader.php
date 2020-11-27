<?php
/**
 * Register theme classes
 *
 * @package  Courtney_Theme
 * @category General
 * @access   public
 * @since    1.0.0
 */

// Theme file namespace.
namespace Courtney;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) { exit; }

// Define the `classes` directory.
define( 'CHCD_CLASS', get_theme_file_path() . '/includes/classes/class-' );

// Array of classes to register.
const CLASSES = [
	'Courtney\Classes\Theme'               => CHCD_CLASS . 'theme.php',
	// 'Courtney\Classes\Non_Latin'           => CHCD_CLASS . 'non-latin.php',
	// 'Courtney\Classes\SVG_Icons'            => CHCD_CLASS . 'svg-icons.php',
	// 'Courtney\Classes\Media'            => CHCD_CLASS . 'media.php',
	// 'Courtney\Classes\Walker_Comment'            => CHCD_CLASS . 'walker-comment.php',
	// 'Courtney\Classes\Walker_Page'            => CHCD_CLASS . 'walker-page.php',
	// 'Courtney\Classes\Dark_Mode_Widget' => CHCD_CLASS . 'dark-mode-widget.php',
	// 'Courtney\Classes\User_Bio'         => CHCD_CLASS . 'user-bio.php',
	// 'Courtney\Classes\Admin_Pages'      => CHCD_CLASS . 'admin-pages.php',
	// 'Courtney\Classes\Dashboard'        => CHCD_CLASS . 'dashboard.php',
	// 'Courtney\Classes\Script_Loader'        => CHCD_CLASS . 'script-loader.php'
];

// Autoload class files.
spl_autoload_register(
	function ( string $classname ) {
		if ( isset( CLASSES[ $classname ] ) ) {
			require CLASSES[ $classname ];
		}
	}
);
