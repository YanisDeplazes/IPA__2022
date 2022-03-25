<?php
   /**
   * Main Layout Component
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */

    $key = $args['key'];

    if($key == 'start'){
        if(!empty($class)){
            $class = $args['class'];
            echo '<main class="'. $class .'">';
        }else{
            echo '<main>';
        }
    }elseif($key == 'end'){
        echo '</main>'; 
    }
?>