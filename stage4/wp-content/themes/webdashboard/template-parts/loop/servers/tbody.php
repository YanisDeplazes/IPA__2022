

<tbody>
   <tr onclick="window.location.href='<?php echo get_permalink();?>'">
      <td class="order1">
         <h6><a href="<?php echo get_permalink(); ?>" class="nostyle"><?php the_title();?></a></h6>
      </td>
      <td class="order2">
      <?php echo get_field('host');?>              
      </td>
      <td class="order3">
         <?php 
            // args
            $args = array(
            	'post_type' => 'objekte',
            	'meta_query' => array(
            		array(
            			'key' => array('ftp_server','datenbank_server','domain_server'), // Zählen aller  Servers
            			'value' =>  $post->ID, 
            			'compare' => 'LIKE'
            		)
            	)
                  
            );
            
            
            // query
            $the_query = new WP_Query( $args );
            
            ?>
         <?php if( $the_query->have_posts() ): ?>
         <?php $i = 0;?>
         <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
         <?php $i++; ?>
         <?php endwhile; ?>
         <?php echo $i; ?>
         <?php else:
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