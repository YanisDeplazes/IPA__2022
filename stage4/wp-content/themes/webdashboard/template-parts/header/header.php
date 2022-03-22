<?php 

   /**
   * Header as a Component
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */

    $current_user = wp_get_current_user();
    $avatar_url = get_avatar( $current_user->ID, 32 );

    echo '<header><div class="flex base__padding horizontal align-items__center align-items__space-between"><div class="header__title flex align-items__center"><div class="hamburger" onclick="toggleMainnavigation()"><div></div><div></div><div></div></div><h4 class="inline-block">'. get_bloginfo() .'</h4></div><div class="block-medium">';
    echo get_search_form();
    echo '</div><div class="avatar">' . $avatar_url . '</div></div></header>'; ?>