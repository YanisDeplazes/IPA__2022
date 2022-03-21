<?php

/* This Code Outputs the Table Content which is saved in TR as an array. Used on Single(Post) Page */

echo '<h5>'. $args['title'] .'</h5><hr class="fullwidth"><div class="loop-wrapper"><table class="loop simple">'; /* Title and starting container*/ 
 
foreach ($args['tr'] as $tr) {
    echo'<tr><th class="overline">'. $tr['th'] .'</th><?php }?><td class="body-2 right-text">'. $tr['td'] .'</td></tr>'; /* Output of Table Content*/
}

echo '</table></div>';  /* ending container*/ 