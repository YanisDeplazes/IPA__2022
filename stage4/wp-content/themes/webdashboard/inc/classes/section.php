<?php

class Section
{
    
    public  $class;
    public  $title;
    public  $box;
    
    public function get_section(){
        if(!empty($this->class)){
            $return = '<section class="'. $this->class .'">';
        }else{
            $return = '<section">';
        }
        if(!empty($this->title)){
            $return .= '<div class="wrapper">';
            $return .= '<h4>'. $this->title .'</h4>';
            $return .= '</div>';
        }
        if(!empty($this->box)){
            $settings = $this->box;
            $box = new Box($settings);
            $return .= $box->get_box();
        }
        $return .= '</section>';
        return $return;
        
    }


    public function __construct($settings){

        if(!empty($settings['class'])){
            $this->class = $settings['class'];
        } 
        if(!empty($settings['title'])){
            $this->title = $settings['title'];
        } 
        if(!empty($settings['box'])){
            $this->box = $settings['box'];
        } 
        
        $this->get_section();
    }

}