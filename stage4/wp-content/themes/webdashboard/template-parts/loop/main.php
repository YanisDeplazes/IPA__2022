<?php 
   /**
   * Section Layout Component
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */

    $key = $args['key'];
    if ( have_posts() ){

        // Start HTML Container
        echo'<div class="loop-wrapper"><table class="loop">';

        // Get THead and Pass Key
        get_template_part( 'template-parts/loop/thead', 'thead', array('key'   => $key )); 
        while ( have_posts() ) : the_post();

        // Get TBody and Pass Key
        get_template_part( 'template-parts/loop/tbody', 'tbody', array('key'   => $key ));
        
        endwhile; 

        // End HTML Container
        echo '</table></div>';

        // Get Pagination
        get_template_part( 'template-parts/loop/pagination', 'pagination', array('key'   => $key )); 

    }else{

        // Not Found
        get_template_part( 'template-parts/loop/404', '404', array('size' => 'big', 'content' => 'Keine Elemente gefunden.')) ;
    }