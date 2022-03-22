<?php 
   /**
   * Tbody for Server Loop
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */

   // Link as OnClick
   echo '<tr onclick="window.location.href= \''. get_permalink() .'\'">';

   // Title
   echo '<td class="order1"><h6><a href="'. get_permalink() .'" class="nostyle">'. get_the_title() .'</a></h6></td>';

   // Host
   echo '<td class="order2">'. get_field('host') .'</td>';

   // Count Projekts
   echo '<td class="order3">';
   $args = array('post_type' => 'objekte', 'meta_query' => array( array( 'key' => array('ftp_server','datenbank_server','domain_server'), 'value' =>  $post->ID, 'compare' => 'LIKE' ) ) );
   $the_query = new WP_Query( $args );      
   if( $the_query->have_posts() ): 
      $i = 0;
   while( $the_query->have_posts() ) : $the_query->the_post(); 
      $i++;
   endwhile; 
      if($i == 1){
         echo '<p>'.$i.'<span class="block-small-only"> Projekt</span></p>'; 

      }else{
         echo '<p>'.$i.'<span class="block-small-only"> Projekte</span></p>'; 
      }
   else:
      echo '<p>'.$i.'<span class="block-small-only"> Projekte</span></p>'; 
   endif;
   wp_reset_query();	
   echo '</td>';
   
   // Details
   echo '<td class="right-text order4"><div class="details-wrapper"><a href="' . get_permalink() .'" class="nostyle"><div class="details"><span></span><span></span><span></span></div></a></div></td></tr>';