<?php

   /**
   * Section Layout Component
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */

   
    $key = $args['key'];
    $class = $args['class'];
    $hasWrapper = $args['hasWrapper'];
    $title = $args['title'];

    if($key == 'start'){
        // Check if Section has specific class 
        if(!empty($class)){
            echo '<section class="'. $class .'">';
        }else{
            echo '<section>';
        }
        // Check if Section has Wrapper modifier 
        if($hasWrapper){
            echo '<div class="wrapper">';
        }
        if(!empty($title)){
            echo '<h4>'. $title .'</h4>';

        }
    
    }elseif($key == 'end'){
        // Check if Section has Wrapper modifier */
        if($hasWrapper){
            echo '</div>';
        }
        echo '</section>'; 
    }else{
        echo 'something went wrong';
    }
?>