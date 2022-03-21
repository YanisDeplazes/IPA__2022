<aside class="navigation primary">
   <div class="base__padding vertical horizontal">
      <?php wp_nav_menu( array('theme_location' => 'navigation-primary',) ); ?>
      <?php get_post_meta( $item->ID, '_menu_item_object_id', true ); ?>
   </div>
</aside>