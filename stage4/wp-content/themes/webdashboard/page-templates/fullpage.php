<?php
   /*
    * Template Name: Full Width Page
    */
   
    $settings = array('hasSecondnavigation' => true,'isFullwidth' => true, 'class' => 'inhalte', 'type' => 'inhalte', 'term' => 'projekte');
    $layout = new Layout($settings);
    $layout->get_layout_header();

    while ( have_posts() ) :
      the_post();
      echo the_content();
   endwhile;
  
    $layout->get_layout_footer();
  
   
   ?>