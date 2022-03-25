<?php

class Mitarbeiter extends Person
{
    protected $term;
    protected $id;
    protected $funktionen;
    
    public function get_intro_box()
    {
        
        $return = '<div class="overline center-text">';           
        if (!empty($this->funktionen))
        {
            $i = 0;
            foreach ($this->funktionen as $post_tag)
            {
                $return .= '<a href="' . get_tag_link($post_tag) . '" class="nostyle">' . $post_tag->name . '</a>';
            }
        }
        $return .= '</div>';
        return $return;

        return $this->create_grid_container($content, 'Übersicht');
        
        
    }
    
    public function get_grid_boxes()
    {
        $return = $this->view_projekte();
        $return .= $this->view_plugins();
        $return .= $this->view_zusatz();
        return $return;
    }
    
    
    protected function view_projekte()
    {
            $content = $this->reverse_loop(array('id' => $this->id, 'terms' => 'projekte',  'key' => 'v_mitarbeiter'));             
            return $this->create_grid_box($content, 'Projekte');   
    }
    
    protected function view_plugins()
    {
            $content = $this->reverse_loop(array('id' => $this->id, 'terms' => 'plugins',  'key' => 'v_mitarbeiter'));             
            return $this->create_grid_box($content, 'Plugins');   
    }
    
    
    public function __construct($settings)
    {
        $this->key                  = $settings["term"];
        $this->id                   = $settings["id"];
        $this->funktionen            = get_the_terms($this->id , 'funktionen');

        return;
    }
}