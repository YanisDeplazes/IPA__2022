<?php
   /**
   * File Template for displaying single pages
   * 
   * Documentation:
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
   */
   
   get_header();
   $current_user = wp_get_current_user(); /* Get User */
   $user_name = $current_user->user_firstname . ' ' . $current_user->user_lastname; /* First + Lastname */
   
   echo '<main class="project">';
   get_template_part( 'template-parts/navigation/primary', 'primary' ); /* Loading Primary Navigation */
   get_template_part( 'template-parts/navigation/secondary', 'secondary' ) ; /* Loading Secondary Navigation */
   get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'start', 'fullwidth'   => false) );  /* Loading Beginning of main__Content */
   get_template_part( 'template-parts/layout/loader', 'loader'); /* Loading Loader  */
   get_template_part( 'template-parts/page/sections/sectionwrapper', 'sectionwrapper', array('key'   => 'intro' , 'box' => true , 'content'   => array('<h1>Hallo, '. $user_name  .'</h1><hr class="fullwidth">') ) ); /* Intro Box */
   get_template_part( 'template-parts/page/sections/sectionwrapper', 'sectionwrapper', array('key'   => 'versionstatus' , 'box' => true , 'title'   => 'Version Status', 'content'   => array("CMS", "Server") ) ); /* Version Status  */
   get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'end') );  /* Loading End of main__Content */
   get_footer(); 
   
   ?>