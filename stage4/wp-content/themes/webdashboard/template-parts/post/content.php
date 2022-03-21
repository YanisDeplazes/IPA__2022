<?php 

/* This Code Outputs the content within the body-2 paragraphy styling. Used on Single(Post) Page */

echo '<h5>'. $args['title'] .'</h5><hr class="fullwidth"><p class="body-2">'. $args['content'] .'</p>';  /* Output of  Content and title*/

?>