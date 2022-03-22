<?php 
   /**
   * Pagination Loop Component
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */


   echo '<div class="table__footer right-text overline"><div class="base__padding horizontal"><div class="pagination flex align-items__center"><div>';
   the_posts_pagination( array('mid_size'  => 2,'prev_text' => __( 'Zurück', 'textdomain' ),'next_text' => __( 'Weiter', 'textdomain' ),) ); 
   echo '</div></div></div></div></div>';