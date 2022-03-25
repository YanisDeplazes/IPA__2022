<?php
   /**
    * If there is a front-page.php file in the theme, this template is always used for the start page. Without the template file, either home.php (blog index) or page.php (static start page) is loaded as normal.
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
    *
    */
   
    $settings = array('hasSecondnavigation' => false,'isFullwidth' => false, 'class' => 'ubersicht', 'type' => 'ubersicht', 'term' => 'ubersicht');
    $layout = new Layout($settings);
    $layout->get_layout_header();

    while ( have_posts() ) :
      the_post();
      echo the_content();
   endwhile;
  
    $layout->get_layout_footer();
  
   
   ?>


