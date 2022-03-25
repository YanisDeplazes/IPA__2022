<?php
   /**
    * File Template for displaying archive for Obj / Projekte
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    */
  
      $settings = array('hasSecondnavigation' => true,'isFullwidth' => true, 'class' => 'inhalte', 'type' => 'inhalte', 'term' => 'projekte');
      $layout = new Layout($settings);
      $layout->get_layout_header();

      /* Content */
      $settings = array('type' => 'projekte', 'isStatus' => false);
      $loop = new TableLoop($settings);
      echo $loop->get_table();

      $layout->get_layout_footer();

   ?>

