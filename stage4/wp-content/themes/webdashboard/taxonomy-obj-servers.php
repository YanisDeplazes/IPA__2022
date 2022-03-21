<?php
   /**
    * File Template for displaying archive pages. You can display archive title (tag, category, date-based, or author archives).
    * There are other archive files you can use, see the archive structure: https://developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    */
      
      get_header();
      $current_user = wp_get_current_user(); /* Get User */
      $user_name = $current_user->user_firstname . ' ' . $current_user->user_lastname; /* First + Lastname */
      
      echo '<main class="project">';
      get_template_part( 'template-parts/navigation/primary', 'primary' ); /* Loading Primary Navigation */
      get_template_part( 'template-parts/navigation/secondary', 'secondary', array('key'   => 'objekte') ) ; /* Loading Secondary Navigation */
      get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'start', 'fullwidth'   => true) );  /* Loading Beginning of main__Content */
      get_template_part( 'template-parts/layout/loader', 'loader'); /* Loading Loader  */
      get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start' , 'class' => 'loop main')); /* Box Beginning */
      get_template_part( 'template-parts/loop/main', 'main', array('key'   => 'servers' )); /* Box Beginning */
      get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end')); /* Box Beginning */
      get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'end') );  /* Loading End of main__Content */
      get_footer(); 

   ?>