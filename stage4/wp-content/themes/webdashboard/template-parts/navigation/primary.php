<?php 

echo '<aside class="navigation primary"><div class="base__padding vertical horizontal">';
wp_nav_menu( array('theme_location' => 'navigation-primary',) ); 
get_post_meta( $item->ID, '_menu_item_object_id', true );  
echo '</div></aside>';