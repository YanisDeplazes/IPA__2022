<div class="navigation secondary site-margin">
   <div class="base__padding horizontal vertical">
      <div class="block-small-only current-menu-item flex align-items__center">
         <h5 class="current-menu-item">Title 2</h5>
         <img onclick="toggleSecondnavigation('mobile')" src="<?php echo get_template_directory_uri();?>/assets/images/collapse.svg" class="collapse mobile" alt="Collapse">
      </div>
      <?php 
      
      $key = $args['key']; 
      if ($key == 'personen'){
         wp_nav_menu( array('theme_location' => 'navigation-secondary-personen',) ); 
      }else{
         wp_nav_menu( array('theme_location' => 'navigation-secondary-inhalte',) ); 
      }      
      ?>   
      <img onclick="toggleSecondnavigation('desktop')" src="<?php echo get_template_directory_uri();?>/assets/images/collapse.svg" class="collapse desktop" alt="Collapse">
   </div>
</div>
