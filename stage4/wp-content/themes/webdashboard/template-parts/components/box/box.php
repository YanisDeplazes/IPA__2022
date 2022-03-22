<?php

   /**
   * Box Component
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */


    // Data
    $key = $args['key'];
    $class = $args['class'];
    $hasPadding = $args['hasPadding'];

    if($key == 'start'){
        echo '<div class="box ' . $class . '">';
        if($hasPadding){
            echo '<div class="padding horizontal vertical">'; 
        }
    }elseif($key == 'end'){
        if($hasPadding){
            echo '</div>';
        }
        echo '</div>';
    }
?>