<?php 
/* /////////////////////////////////////////////////////////////////////////////////
F U N C T I O N   F O R  L A Y O U T 
///////////////////////////////////////////////////////////////////////////////// */

function get_layout($settings){

    /*
     *   Preset
     */

    $key = $settings['key'];

    if($key == 'start'){

        if(!empty($settings['isFullwidth'])){
            $isFullwidth = $settings['isFullwidth'];
        }
        if(!empty($settings['type'])){
            $type = $settings['type'];
        }
        if(!empty($settings['class'])){
            $class = $settings['class'];
        }
        if(!empty($settings['term'])){
            $term = $settings['term'];
        }
        if(!empty($settings['hasSecondnavigation'])){
            $hasSecondnavigation = $settings['hasSecondnavigation'];
        }
        if(!empty($settings['title'])){
            $title = $settings['title'];
        }else{
            $title = ucfirst($term);
        }
        get_menu_icon("personen");
        get_header();
        get_template_part( 'template-parts/layout/main', 'main', array('key' => 'start', 'class' => $class) );
        get_template_part( 'template-parts/navigation/primary', 'primary' );
        if($hasSecondnavigation){
            get_template_part( 'template-parts/navigation/secondary', 'secondary', array('key'   => $type, 'title' => $title) ); 
        }
        get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'start', 'fullwidth'   => $isFullwidth) );
        get_template_part( 'template-parts/layout/loader', 'loader');
    }elseif($key == 'end'){

        get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'end') );
        get_template_part( 'template-parts/layout/main', 'main', array('key' => 'start', 'class' => 'personen') );
        get_footer(); 
    }else{
        echo "something went wrong";
    }

}