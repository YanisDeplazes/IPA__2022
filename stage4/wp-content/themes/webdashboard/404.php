<?php
   /**
    * If there is a front-page.php file in the theme, this template is always used for the start page. Without the template file, either home.php (blog index) or page.php (static start page) is loaded as normal.
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
    *
    */
   
   get_header();
   echo '<main class="project">';
   get_template_part( 'template-parts/navigation/primary', 'primary' ); 
   get_template_part( 'template-parts/navigation/secondary', 'secondary' ) ;
   get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'start') ); 
   get_template_part( 'template-parts/layout/loader', 'loader'); 
	get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start')); 
	get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start', 'hasPadding' => true)); /* Box Beginning */
   get_template_part( 'template-parts/loop/404', '404', array('size' => 'big', 'content' => 'Error 404, Seite nicht gefunden.')) ;
	get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Ending */
   get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end')); 
   get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'end') ); 
   get_footer(); 
   
   ?>