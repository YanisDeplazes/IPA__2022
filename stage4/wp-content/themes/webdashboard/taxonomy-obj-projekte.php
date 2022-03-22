<?php
   /**
    * File Template for displaying archive for Obj / Projekte
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    */
      
      // Base Layout Start
      get_header();
      get_template_part( 'template-parts/layout/main', 'main', array('key' => 'start', 'class' => 'inhalte') );
      get_template_part( 'template-parts/navigation/primary', 'primary' );
      get_template_part( 'template-parts/navigation/secondary', 'secondary', array('key'   => 'objekte') ); 
      get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'start', 'fullwidth'   => true) );
      get_template_part( 'template-parts/layout/loader', 'loader');

      // Box with Loop in it
      get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start' , 'class' => 'loop main') );
      get_template_part( 'template-parts/loop/main', 'main', array('key'   => 'projekte' )); 
      get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end') );

      // Base Layout End
      get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'end') );
      get_template_part( 'template-parts/layout/main', 'main', array('key' => 'start', 'class' => 'inhalte') );
      get_footer(); 

   ?>