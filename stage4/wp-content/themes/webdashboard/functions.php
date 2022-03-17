<?php
/**
 * Functions and definitions
 * In WordPress, functions.php or the theme functions file is a template included in WordPress themes. It acts like a plugin for your WordPress site that's automatically activated with your aIn WordPress, functions.php or the theme functions file is a template included in WordPress themes. It acts like a plugin for your WordPress site that's automatically activated with your current theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}
?>
