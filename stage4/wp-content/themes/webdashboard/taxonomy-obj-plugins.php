<?php
   /**
    * File Template for displaying archive for Obj / Plugins
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    */

    $settings = array('hasSecondnavigation' => true,'isFullwidth' => true, 'class' => 'inhalte', 'type' => 'inhalte', 'term' => 'plugins');
    $layout = new Layout($settings);
    $layout->get_layout_header();

    /* Content */
    $settings = array('type' => 'plugins', 'isStatus' => false);
    echo "plugins";
    $loop = new TableLoop($settings);
    echo $loop->get_table();
        
    $layout->get_layout_footer();

   ?>