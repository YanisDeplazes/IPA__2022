<?php
/**
 * This is the template that displays all of the <head> section and everything up until main. It is called when using the wp_header().
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
      <link rel="stylesheet" href="dynamic.css">
      <title>Layout</title>
	  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	  <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
   <?php get_template_part( 'template-parts/header/header', 'header' ); ?>