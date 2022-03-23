<?php 

echo '<aside class="navigation primary"><div class="base__padding vertical horizontal">';

echo '<div class="block-small-only">';
echo get_search_form();
echo '</div>';

wp_nav_menu( array('theme_location' => 'navigation-primary',) ); 
get_post_meta( $item->ID, '_menu_item_object_id', true );  
echo '</div></aside>';