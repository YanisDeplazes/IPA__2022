<?php
   /**
   * Main Layout Component
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */

    $key = $args['key'];
    $class = $args['class'];

    if($key == 'start'){
        if(!empty($class)){
            echo '<main class="'. $class .'">';
        }else{
            echo '<main>test';
        }
    }elseif($key == 'end'){
        echo '</main>'; 
    }
?>