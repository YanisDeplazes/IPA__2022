<?php
   /**
    * File Template for displaying archive for Pers / Kunden
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    */
      
      // Base Layout Start
      get_header();
      get_template_part( 'template-parts/layout/main', 'main', array('key' => 'start', 'class' => 'personen') );
      get_template_part( 'template-parts/navigation/primary', 'primary' );
      get_template_part( 'template-parts/navigation/secondary', 'secondary', array('key'   => 'personen') ); 
      get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'start', 'fullwidth'   => true) );
      get_template_part( 'template-parts/layout/loader', 'loader');

      // Box with Loop in it
      get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start' , 'class' => 'loop main') ); 
      get_template_part( 'template-parts/loop/main', 'main', array('key'   => 'kunden' ) ); 
      get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end') ); 

      // Base Layout End
      get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'end') );
      get_template_part( 'template-parts/layout/main', 'main', array('key' => 'start', 'class' => 'personen') );
      get_footer(); 

   ?>