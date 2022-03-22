<?php 
       
// Check rows exists.
if( have_rows('extra_fields') ):
   // Loop through rows.
   while( have_rows('extra_fields') ) : the_row();
   get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
   $title = '<h5>' . get_sub_field('title') . '</h5>';
   echo '<div class="loop-wrapper"><table class="loop simple">';
   $content = get_sub_field('table_view');
       while( have_rows('table_view') ) : the_row();
           echo'<tr><th class="overline">'. get_sub_field('title') .'</th><?php }?><td class="body-2 right-text">'.  get_sub_field('content')  .'</td></tr>'; /* Output of Table Content*/
       endwhile;
   echo '</table></div>';
   get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true));  /* Box Ending */

   // End loop.
endwhile;

// No value.
else :
   // Do something...
endif;
?>