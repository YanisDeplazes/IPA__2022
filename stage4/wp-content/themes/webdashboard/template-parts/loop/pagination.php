<div class="table__footer right-text overline">
      <div class="base__padding horizontal">
         <div class="pagination flex align-items__center">
            <div>
               <!--Seite echo (get_query_var('paged')) ? get_query_var('paged') : 1; von  -->
               <?php the_posts_pagination( array(
                  'mid_size'  => 2,
                  'prev_text' => __( 'Zurück', 'textdomain' ),
                  'next_text' => __( 'Weiter', 'textdomain' ),
                  ) ); ?>
            </div>
            <!--   <img src="../assets/img/previous.svg" alt="Previous"> <img src="../assets/img/next.svg" alt="Next"> -->
         </div>
      </div>
   </div>
</div>