<?php
   /**
    * File Template for displaying single posts for Personen Posts
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
    */
      
    
      // Base Layout Start
      get_header();
      get_template_part( 'template-parts/layout/main', 'main', array('key' => 'start', 'class' => 'inhalte project') );
      get_template_part( 'template-parts/navigation/primary', 'primary' );
      get_template_part( 'template-parts/navigation/secondary', 'secondary', array('key'   => 'personen') ); 
      get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'start', 'fullwidth'   => false) );
      get_template_part( 'template-parts/layout/loader', 'loader');

      // Start Loop
      while ( have_posts() ) :
        the_post();

        // Data
        $postID = $post->ID; 
        $current_user = wp_get_current_user(); 
        $user_name = $current_user->user_firstname . ' ' . $current_user->user_lastname; 
        $taxs = get_the_terms( $postID, 'pers' ); 

        // Section with Intro Box and its content
        get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start')); 
        get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start', 'class' => 'intro','hasPadding' => true)); 
        echo '<h3 class="center-text">' . get_the_title() .'</h3>';
        foreach ( $taxs as $tax ) {
        if ($tax->slug == 'mitarbeiter'){
              get_template_part( 'template-parts/post/intro-single-mitarbeiter', 'intro-single-mitarbeiter'); 
          }else{
              get_template_part( 'template-parts/post/intro-single-kunde', 'intro-single-kunde'); 
          }
        }
        get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); 
        get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end')); 
 

        // Section with grid and its content
        get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start', 'class' => 'grid align-items__space-between')); 
        foreach ( $taxs as $tax ) {
          if ($tax->slug == 'mitarbeiter'){
             get_template_part( 'template-parts/post/grid-single-mitarbeiter','grid-single-mitarbeiter'); 
 
           }else{
             get_template_part( 'template-parts/post/grid-single-kunde','grid-single-kunde'); 
           }
        }   
        get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end')); 
      
      // End Loop
      endwhile; 

      // Base Layout End
      get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'end') );
      get_template_part( 'template-parts/layout/main', 'main', array('key' => 'start', 'class' => 'personen') );
      get_footer(); 

   ?>
