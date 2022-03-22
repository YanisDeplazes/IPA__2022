<?php
   /**
    * If there is a front-page.php file in the theme, this template is always used for the start page. Without the template file, either home.php (blog index) or page.php (static start page) is loaded as normal.
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
    *
    */
   
    get_header();
    $current_user = wp_get_current_user(); /* Get User */
    $user_name = $current_user->user_firstname . ' ' . $current_user->user_lastname; /* First + Lastname */
   
    echo '<main class="project">';
   
    get_template_part( 'template-parts/navigation/primary', 'primary' ); /* Loading Primary Navigation */
    get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'start', 'fullwidth'   => false) );  /* Loading Beginning of main__Content */
    get_template_part( 'template-parts/layout/loader', 'loader'); /* Loading Loader  */

	get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start')); 
	get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start', 'hasPadding' => true)); /* Box Beginning */
	get_template_part( 'template-parts/page/content', 'content', array('content' => '<h1>Hallo, '. $user_name  .'</h1><hr class="fullwidth">')); /* Box Content / Content */
	get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Ending */
    get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end')); 


	get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start', 'hasWrapper' => true, 'title'   => 'Version Status')); 
    get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start' , 'class' => 'versionstatus','hasPadding' => true)); /* Box Beginning */
	get_template_part( 'template-parts/page/content', 'content', array('content'   => '<div class="flex align-items__center"><span class="status dot green"></span><h6>CMS</h6></div>')); /* Version Status  */
   	get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Ending */
    get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start' , 'class' => 'versionstatus','hasPadding' => true)); /* Box Beginning */
	get_template_part( 'template-parts/page/content', 'content', array('content'   => '<div class="flex align-items__center"><span class="status dot green"></span><h6>Server</h6></div>')); /* Version Status  */
	get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Ending */
    get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end', 'hasWrapper' => true)); 


    get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'end') );  /* Loading End of main__Content */
    
    echo '</main>';

    get_footer(); 
   
   ?>