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

function my_custom_login(){
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') .'/login/custom-login-style.css"/>';
}
add_action('login_head','my_custom_login');

// Force Login https://www.trickspanda.com/force-users-login-viewing-wordpress/
function v_getUrl() {
	$url  = isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
	$url .= '://' . $_SERVER['SERVER_NAME'];
	$url .= in_array( $_SERVER['SERVER_PORT'], array('80', '443') ) ? '' : ':' . $_SERVER['SERVER_PORT'];
	$url .= $_SERVER['REQUEST_URI'];
	return $url;
  }
  function v_forcelogin() {
	if( !is_user_logged_in() ) { // Check if User is not logged in
	  $url = v_getUrl(); // Get URL
	  $whitelist = apply_filters('v_forcelogin_whitelist', array()); 
	  $redirect_url = apply_filters('v_forcelogin_redirect', $url);
	  if( preg_replace('/\?.*/', '', $url) != preg_replace('/\?.*/', '', wp_login_url()) && !in_array($url, $whitelist) ) {
		wp_safe_redirect( wp_login_url( $redirect_url ), 302 ); exit();
	  }
	}
  }
  add_action('init', 'v_forcelogin');

?>
