<h5><?php echo $args['title']; ?></h5>
<hr class="fullwidth">
<div class="loop-wrapper">
   <table class="loop simple">
      <?php 
         // args
                  $args = array(
                  	'post_type' => 'objekte',
                      'tax_query' => array(
                         array(
                             'taxonomy' => 'obj',
                             'field' => 'slug',
                             'terms' => $args['terms']
                         )
                         ),
                  	'meta_query' => array(
                  		array(
                  			'key' => $args['key'], // name of custom field
                  			'value' => $post->ID , 
                  			'compare' => 'LIKE'
                  		)
                  	)
                        
                  );
         
         // query
         $the_query = new WP_Query( $args );
         ?>
      <?php if( $the_query->have_posts() ): ?>
      <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <tr>
         <td class="body-2"><a href="<?php echo get_post_permalink();?>" class="nostyle"><?php the_title();?></a></td>
      </tr>
      <?php endwhile; ?>
      <?php else: 
    get_template_part( 'template-parts/loop/404', '404', array('size' => 'small', 'content' => 'Keine Elemente gefunden.')) ;?>
    </div>
         <?php endif; ?>
      <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
   </table>
</div>