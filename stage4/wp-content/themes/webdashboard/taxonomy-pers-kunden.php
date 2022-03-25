<?php
   /**
    * File Template for displaying archive for Pers / Kunden
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    */



    $settings = array('hasSecondnavigation' => true,'isFullwidth' => true, 'class' => 'personen', 'type' => 'personen', 'term' => 'kunden');
    $layout = new Layout($settings);
    $layout->get_layout_header();

    /* Content */
    $settings = array('type' => 'kunden', 'isStatus' => false);
    $loop = new TableLoop($settings);
    echo $loop->get_table();

    $layout->get_layout_footer();
   ?>