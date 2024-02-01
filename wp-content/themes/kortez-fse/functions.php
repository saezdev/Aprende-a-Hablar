<?php
/**
 * Kortez FSE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kortez FSE
 */

if ( ! defined( 'KORTEZ_FSE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'KORTEZ_FSE_VERSION', wp_get_theme()->get( 'Version' ) );
}

define( 'KORTEZ_FSE_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'kortez_fse_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kortez_fse_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Kortez FSE, use a find and replace
		 * to change 'kortez-fse' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kortez-fse', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
	}

endif;
add_action( 'after_setup_theme', 'kortez_fse_setup' );

/**
 * Enqueue scripts and styles.
 */
function kortez_fse_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Register theme stylesheet.
	wp_enqueue_style( 'kortez-fse-styles', get_theme_file_uri( '/style.css' ), array(), $theme_version );
}
add_action( 'wp_enqueue_scripts', 'kortez_fse_scripts' );

/**
 * Info
 */
require get_theme_file_path( '/inc/admin/info.php' );

