<?php 


   /**
   *  Reverse Relationship Loop (For projectss)
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */
  
   // Data
   $key = $args['key'];
   $title = $args['title']; 
   $terms = $args['terms'];
   $args = array('post_type' => 'objekte','tax_query' => array(array('taxonomy' => 'obj','field' => 'slug','terms' =>  $terms)),'meta_query' => array(array('key' =>  $key,'value' => $post->ID ,'compare' => 'LIKE')));

   // Title 
   echo '<h5>'. $title .'</h5><hr class="fullwidth"><div class="loop-wrapper"><table class="loop simple">';
         
   // query
   $the_query = new WP_Query( $args );
   if( $the_query->have_posts() ): 
      while( $the_query->have_posts() ) : $the_query->the_post(); 
         echo '<tr><td class="body-2"><a href="'. get_post_permalink() .'" class="nostyle">' . the_title() .'</a></td></tr>';
      endwhile; 
   else: 
      get_template_part( 'template-parts/loop/404', '404', array('size' => 'small', 'content' => 'Keine Elemente gefunden.')) ;
      echo '</div>';
   endif; 
   wp_reset_query();	  
   echo '</table></div>';