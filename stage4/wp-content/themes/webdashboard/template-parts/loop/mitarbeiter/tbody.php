<?php 
   /**
   * Tbody for Mitarbeiter Loop
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */



   // Link as OnClick
   echo '<tbody><tr onclick="window.location.href= \''. get_permalink() .'\'">';
   
   // Title
   echo '<td class="order1"><h6><a href="'. get_permalink() .'" class="nostyle">'. get_the_title() .'</a></h6></td>';

   // Funktion(en)
   echo '<td class="order2">';
   $post_tags = get_the_terms( $post->ID, 'funktionen' );
   if ( ! empty( $post_tags ) ) {
      $i = 0;
      foreach( $post_tags as $post_tag ) {
         echo '<p class="body-2"><a href="' . get_tag_link( $post_tag ) . '" class="nostyle">' . $post_tag->name . '</a></p>';
      }
   }   
   echo '</td>';

   // Count Projekts
   echo '<td class="order3">';
   $args = array('post_type' => 'objekte','meta_query' => array(array('key' => 'v_mitarbeiter','value' => $post->ID ,'compare' => 'LIKE')));
   $the_query = new WP_Query( $args );      
   if( $the_query->have_posts() ): 
      $i = 0;
   while( $the_query->have_posts() ) : $the_query->the_post(); 
      $i++;
   endwhile; 
      echo $i; 
   else:
      echo '0';
   endif;
   wp_reset_query();	 
   echo '</td>';
   
   // Details
   echo '<td class="right-text order4"><div class="details-wrapper"><a href="' . get_permalink() .'" class="nostyle"><div class="details"><span></span><span></span><span></span></div></a></div></td></tr></tbody>';