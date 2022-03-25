<?php
   /**
    * File Template for displaying single posts for Objekte Posts
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
    */
    
       // Data
      $taxs = get_the_terms( get_the_ID(), 'pers' ); 
      foreach ( $taxs as $tax ) {
        $taxonomy = $tax->slug;
        $term = ucfirst($taxonomy);
      }

      $settings = array('hasSecondnavigation' => true,'isFullwidth' => false, 'class' => 'project', 'type' => 'personen', 'term' => 'ubersicht', 'title' => $term);
      $layout = new Layout($settings);
      $layout->get_layout_header();

      // Start Loop
      while ( have_posts() ) :
        the_post();

        $settings = array('term' => $taxonomy,'id' => get_the_ID());
        $singleview = new SingleView($settings);
        echo $singleview->get_content();

    
      endwhile; 

       echo get_layout(array('key' => 'end'));

   ?>

