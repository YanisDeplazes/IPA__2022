<tbody>
   <tr onclick="window.location.href='<?php echo get_permalink();?>'">
      <td class="order1">
         <h6><a href="<?php echo get_permalink(); ?>" class="nostyle"><?php the_title();?></a></h6>
      </td>
      <td class="order2">
         <?php $post_tags = get_the_terms( $post->ID, 'funktionen' );
            if ( ! empty( $post_tags ) ) {
               $i = 0;
                foreach( $post_tags as $post_tag ) {
                    echo '<p class="body-2"><a href="' . get_tag_link( $post_tag ) . '" class="nostyle">' . $post_tag->name . '</a></p>';
                }
            }   
            ?>            
      </td>
      <td class="order3">
         <?php 
            // args
            $args = array(
            	'post_type' => 'objekte',
            	'meta_query' => array(
            		array(
            			'key' => 'v_mitarbeiter', // name of custom field
            			'value' => $post->ID , 
            			'compare' => 'LIKE'
            		)
            	)
                  
            );
            
            // query
            $the_query = new WP_Query( $args );      
            if( $the_query->have_posts() ): 
            $i = 0;
            while( $the_query->have_posts() ) : $the_query->the_post(); 
            $i++;
            endwhile; 
            echo $i; 
             else:
                echo "0";
             endif;?>
         <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
      </td>
      <td class="right-text order4">
         <div class="details-wrapper">
            <a href="<?php echo get_permalink();?>" class="nostyle">
               <div class="details"><span></span><span></span><span></span></div>
            </a>
         </div>
      </td>
   </tr>
</tbody>