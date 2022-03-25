<?php
   /**
    * File Template for displaying archive for Pers / Mitarbeiter
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    */


    $settings = array('hasSecondnavigation' => true,'isFullwidth' => true, 'class' => 'personen', 'type' => 'personen', 'term' => 'mitarbeiter');
    $layout = new Layout($settings);
    $layout->get_layout_header();

    /* Content */
    $settings = array('type' => 'mitarbeiter', 'isStatus' => false);
    $loop = new TableLoop($settings);
    echo $loop->get_table();

    $layout->get_layout_footer();
   ?>