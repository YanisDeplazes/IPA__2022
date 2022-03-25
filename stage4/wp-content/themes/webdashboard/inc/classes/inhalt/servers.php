<?php

class Servers extends Inhalt
{
    public $term;
    public $id;
    public $ftp_server;
    public $datenbank_server;
    public $domain_server;
    public $host;
    
    public function get_intro_box()
    {      
        return '<div class="overline center-text">'. $this->host .'</div>';; 
    }
    
    public function get_grid_boxes()
    {
        $return = $this->view_hosting();
        $return .= $this->view_projekte();
        $return .= $this->view_zusatz();
        return $return;
    }
    
    private function view_hosting()
    {
        if ($this->ftp_server || $this->datenbank_server || $this->domain_server) {
            
            $content = "";
            if ($this->ftp_server) {
                $td = 'FTP Server';
                $content .= $this->create_tr(array(
                    "content" => $td
                ));
            }
            if ($this->datenbank_server) {
                $td = 'Datenbank Server';
                $content .= $this->create_tr(array(
                    "content" => $td
                ));
            }
            if ($this->domain_server) {
                $td = 'Domain Server';
                $content .= $this->create_tr(array(
                    "content" => $td
                ));
            }
            
            
            
            
            return $this->create_grid_box($content, 'Projekte');
        }
    }
    
    private function view_projekte()
    {
            $content = $this->reverse_loop(array('id' => $this->id, 'terms' => 'projekte', 'title' => 'Projekte', 'key' =>  array('ftp_server','datenbank_server','domain_server')));             
           
            return $this->create_grid_box($content, 'Hosting');   
    }
    
    
    
    public function __construct($settings)
    {
        $this->key              = $settings["term"];
        $this->id               = $settings["id"];
        $this->ftp_server       = get_field('ftp_server');
        $this->datenbank_server = get_field('datenbank_server');
        $this->domain_server    = get_field('domain_server');
        $this->host             = get_field('host');
        return;
    }
}