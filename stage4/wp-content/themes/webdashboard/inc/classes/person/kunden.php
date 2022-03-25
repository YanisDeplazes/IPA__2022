<?php

class Kunden extends Person
{
    protected $term;
    protected $id;
    protected $firmaName;
    protected $firmaAdresse;
    protected $firmaPLZ;
    protected $firmaOrt;
    protected $ansprechperson;
    protected $email_ansprechperson;
    
    public function get_intro_box()
    {
        
        // Firma
        $title = "Firma";
        $td    = $this->firmaName;
        $content = $this->create_tr(array(
            "title" => $title,
            "content" => $td
        ));
        
        // Adresse
        $adressefull = array($this->firmaAdresse,$this->firmaPLZ,$this->firmaOrt);
        $i = 0;
        $title = "Adresse";
        foreach ($adressefull as $adresseitem) {
            if ($i == 0){
                $title = "test";
                $td    = $adresseitem;
                $content .= $this->create_tr(array(
                    "title" => $title,
                    "content" => $td
                ));
            }else{
                $title = "&nbsp;";
                $td    = $adresseitem;
                $content .= $this->create_tr(array(
                    "title" => $title,
                    "content" => $td
                ));
            }
            $i++;
        }
           
        
        return $this->create_grid_container($content, 'Übersicht');
        
        
    }
    
    public function get_grid_boxes()
    {
        $return = $this->view_projekte();
        $return .= $this->view_kunde();
        $return .= $this->view_zusatz();
        return $return;
    }
    
    private function view_kunde()
    {
        
        $td    = $this->ansprechperson;
        $content = $this->create_tr(array(
            "content" => $td
        ));
        
        $td    = '<a class="nostyle" href="mailto:'. $this->email_ansprechperson .'">'. $this->email_ansprechperson .'</a>';
        $content .= $this->create_tr(array(
            "content" => $td
        ));
        
        return $this->create_grid_box($content, 'Ansprechperson');
    }
    
    private function view_projekte()
    {
            $content = $this->reverse_loop(array('id' => $this->id, 'terms' => 'projekte',  'key' => 'kunde'));             
            return $this->create_grid_box($content, 'Projekte');   
    }
  
    
    public function __construct($settings)
    {
        $this->key                  = $settings["term"];
        $this->id                   = $settings["id"];
        $this->firmaName            = get_field( "firma" );
        $this->firmaAdresse         = get_field( "adresse" );
        $this->firmaPLZ             = get_field( "plz" );
        $this->firmaOrt             = get_field( "ort" );
        $this->ansprechperson       = get_field( "ansprechperson" );
        $this->email_ansprechperson = get_field( "e-mail_ansprechperson" );
        
        return;
    }
}