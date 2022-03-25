<?php

class Plugins extends Inhalt
{
    protected $term;
    protected $id;
    protected $kunde;
    protected $url;
    protected $beschreibung;

    public function get_intro_box()
    {
        
        // URL
        $title = "URL";
        $td    = '<a href="' . $this->url . '" class="nostyle">' . $this->url . '</a>';
        $content = $this->create_tr(array(
            "title" => $title,
            "content" => $td
        ));
        
        
        // Mitarbeiter
        $title = "Beschreibung";
        $td    = $this->beschreibung;
        $content .= $this->create_tr(array(
            "title" => $title,
            "content" => $td
        ));
        
        
        return $this->create_grid_container($content, 'Übersicht');
        
        
    }
    
    public function get_grid_boxes()
    {
          $return = $this->view_zusatz();
        return $return;
    }
        
    public function __construct($settings)
    {
        $this->key                   = $settings["term"];
        $this->id                    = $settings["id"];
        $this->url                   = get_field("url");
        $this->beschreibung          = get_field("beschreibung");        
        return;
    }
}