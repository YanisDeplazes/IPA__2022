<?php 
class SingleView extends Single
{
    // property declaration
    public $key;
    public $id;
    public $class;
    private $item;
    
    public function __construct($settings) {
        $this->key = $settings['term'];
        $this->id = $settings['id'];
        $this->class =  ucfirst($this->key);
    }

        // method declaration
    public function get_content(){
        $return =  $this->get_intro_box();
        $return .=  $this->get_grid_boxes();
        return $return;
    }

    private function get_intro_box(){
        $return = '<h3 class="center-text">' . get_the_title() .'</h3>';
        $this->item = new $this->class(array('term' => $this->key, 'id' => $this->id));
        $return .= $this->item->get_intro_box();
        $content = $return;
        $settings = array(
            'class' => 'projekte',
            'title' => '',
            'box' => array(
                'key' => 'start',
                'class' => 'intro',
                'content' => $content,
                'hasPadding' => true
            )
            );

        $section = new Section($settings);
        $return = $section->get_section();
        
        return $return;
    }


    private function get_grid_boxes(){
            $return ='<section class="project grid align-items__space-between">';
            $return .= $this->item->get_grid_boxes();
            $return .='<section>';
            return $return;
    }

}