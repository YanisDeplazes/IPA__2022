<?php $key = $args['key'];
if ( have_posts() ) : 
echo'<div class="loop-wrapper"><table class="loop">';
get_template_part( 'template-parts/loop/thead', 'thead', array('key'   => $key )); 
while ( have_posts() ) : the_post();
get_template_part( 'template-parts/loop/tbody', 'tbody', array('key'   => $key )); 
endwhile; 
echo '</table></div>';
get_template_part( 'template-parts/loop/pagination', 'pagination', array('key'   => $key )); 
else : 
    get_template_part( 'template-parts/loop/404', '404', array('size' => 'big', 'content' => 'Keine Elemente gefunden.')) ;
endif;
