<?php 

   /**
   * Secondary Navigation Component
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */

   $key = $args['key']; 
   $title = $args['term'];

   echo '<div class="navigation secondary site-margin"><div class="base__padding horizontal vertical"><div class="block-small-only current-menu-item flex align-items__center"><h5 class="current-menu-item">'.$title.'</h5><img onclick="toggleSecondnavigation(\'mobile\')" src="' . get_template_directory_uri() .'/assets/images/collapse.svg" class="collapse mobile" alt="Collapse"></div>';
      
      //Check What Navigation should be used
      if ($key == 'personen'){
         wp_nav_menu( array('theme_location' => 'navigation-secondary-personen',) ); 
      }else{
         wp_nav_menu( array('theme_location' => 'navigation-secondary-inhalte',) ); 
      }      

echo '<img onclick="toggleSecondnavigation(\'desktop\')" src="' . get_template_directory_uri() .'/assets/images/collapse.svg" class="collapse desktop" alt="Collapse"></div></div>';