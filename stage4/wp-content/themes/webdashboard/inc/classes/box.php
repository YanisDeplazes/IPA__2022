<?php 
class Box
{
    // property declaration
    public string $class;
    public string $content;
    public bool $hasPadding = false;
    
    // method declaration

    public function __construct($settings) {
        if(!empty($settings['class'])){
            $this->class = $settings['class'];
        }
        if($settings['hasPadding']){
            $this->hasPadding = $settings['hasPadding'];
        }        
        if(!empty($settings['content'])){
            $this->content = $settings['content'];
        }
      
    }

    // return the box

    public function get_box(){
        if(!empty($this->class)){
            $return = '<div class="box ' . $this->class . '">';
        }else{
            $return = '<div class="box">';
        }
        if($this->hasPadding){
            $return .= '<div class="padding horizontal vertical">'; 
        }
        $return .= $this->content;
        if($this->hasPadding){
            $return .= '</div>';
        }
        $return .= '</div>';

        return $return;

    }

}