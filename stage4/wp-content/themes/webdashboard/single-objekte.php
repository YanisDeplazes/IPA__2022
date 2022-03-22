<?php
   /**
    * File Template for displaying single posts for Objekte Posts
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
    */
    
      // Data
      $taxs = get_the_terms( $postID, 'obj' ); 
      foreach ( $taxs as $tax ) {
        $taxonomy = $tax->slug;
      }

      // Base Layout Start
      get_header();
      get_template_part( 'template-parts/layout/main', 'main', array('key' => 'start', 'class' => 'inhalte project '. $taxonomy.'',) );
      get_template_part( 'template-parts/navigation/primary', 'primary' );
      get_template_part( 'template-parts/navigation/secondary', 'secondary', array('key'   => 'objekte') ); 
      get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'start', 'fullwidth'   => false) );
      get_template_part( 'template-parts/layout/loader', 'loader');

      // Start Loop
      while ( have_posts() ) :
        the_post();

        // Section with Intro Box and its content
        get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start')); 
        get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start', 'class' => 'intro','hasPadding' => true)); 
        echo '<h3 class="center-text">' . get_the_title() .'</h3>';
  
          if ($taxonomy == 'projekte'){
             get_template_part( 'template-parts/post/intro-single-projekt','intro-single-projekt'); 
           }elseif($tax->slug == 'plugins'){
             get_template_part( 'template-parts/post/intro-single-plugin','intro-single-plugin'); 
           }elseif($tax->slug == 'servers'){
             get_template_part( 'template-parts/post/intro-single-server','intro-single-server'); 
           }
        
        get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); 
        get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end')); 
 

        // Section with grid and its content
        get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start', 'class' => 'grid align-items__space-between')); 
          if ($taxonomy == 'projekte'){
             get_template_part( 'template-parts/post/grid-single-projekt','grid-single-projekt'); 
 
           }elseif($taxonomy == 'plugins'){
             get_template_part( 'template-parts/post/grid-single-plugin','grid-single-plugin'); 
           }elseif($taxonomy== 'servers'){
             get_template_part( 'template-parts/post/grid-single-server','grid-single-server'); 
           }
        get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end')); 
      
      // End Loop
      endwhile; 

      // Base Layout End
      get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'end') );
      get_template_part( 'template-parts/layout/main', 'main', array('key' => 'end') );
      get_footer(); 

   ?>

