<?php 

   /**
   * Grid Template Mitarbeiter for Server Single Page
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */

   // Reverse Relationship Loop (Assigned projects)
   $title = 'Projekte';
   get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); 
   get_template_part( 'template-parts/loop/simple', 'simple', array('terms' => $title, 'title' => 'Projekte', 'key' => 'v_mitarbeiter')); 
   get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true));  

   // Reverse Relationship Loop (Assigned plugins)
   $title = 'Plugins';
   get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true));
   get_template_part( 'template-parts/loop/simple', 'simple', array('terms' => 'plugins', 'title' => $title, 'key' => 'v_mitarbeiter')); 
   get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true));

   // Extrafields
   get_template_part( 'template-parts/post/extrafield', 'extrafield');  