<?php

class Projekte extends Inhalt
{
    protected $term;
    protected $id;
    protected $kunde;
    protected $ansprechperson;
    protected $firma;
    protected $plugins;
    protected $v_mitarbeiter;
    protected $servers;
    protected $cms;
    protected $web_stack;
    protected $url;
    protected $google;
    protected $google_analytics;
    protected $google_id;
    protected $google_search_console;
    
    public function get_intro_box()
    {
        
        // URL
        $title = "URL";
        $td    = '<a href="' . $this->url . '" class="nostyle">' . $this->url . '</a>';
        $content = $this->create_tr(array(
            "title" => $title,
            "content" => $td
        ));
        
        
        // Web Stack
        if ($this->web_stack) {
            $td    = "";
            $title = "CMS";
            foreach ($this->web_stack as $web_stack_item) {
                $td .= '<span class="web_stack">' . $web_stack_item . "</span>";
            }
            $content .= $this->create_tr(array(
                "title" => $title,
                "content" => $td
            ));
            
        }
        
        // CMS
        if ($this->cms) {
            $td    = "";
            $title = "CMS";
            
            
            
            
            foreach ($this->cms as $cms_item) {
                $td .= $cms_item . "<br>";
            }
            $content .= $this->create_tr(array(
                "title" => $title,
                "content" => $td
            ));
        }
        
        // Mitarbeiter
        $title = "Verantwortung";
        $td    = $this->v_mitarbeiter->post_title;
        $content .= $this->create_tr(array(
            "title" => $title,
            "content" => $td
        ));
        
        
        return $this->create_grid_container($content, 'Übersicht');
        
        
    }
    
    public function get_grid_boxes()
    {
        $return = $this->view_kunde($this->kunde);
        $return .= $this->view_server();
        $return .= $this->view_plugins($this->plugins);
        $return .= $this->view_google($this->google);
        $return .= $this->view_zusatz();
        return $return;
    }
    
    private function view_kunde($kunde)
    {
        $firma          = get_field("firma", $kunde);
        $ansprechperson = get_field("ansprechperson", $kunde);
        
        $title   = "Firma";
        $td      = '<a href="' . get_the_permalink($kunde->ID) . '" class="nostyle">' . $firma . "</a>";
        $content = $this->create_tr(array(
            "title" => $title,
            "content" => $td
        ));
        
        $title = "Ansprechperson";
        $td    = '<a href="' . get_the_permalink($kunde->ID) . '" class="nostyle">' . $ansprechperson . "</a>";
        $content .= $this->create_tr(array(
            "title" => $title,
            "content" => $td
        ));
        
        return $this->create_grid_box($content, 'Kunde');
    }
    
    private function view_server()
    {
        $ftp_server       = get_field("ftp_server");
        $datenbank_server = get_field("datenbank_server");
        $domain_server    = get_field("domain_server");
        if ($ftp_server || $datenbank_server || $domain_server) {
            if ($ftp_server) {
                $title   = "FTP Server";
                $td      = '<a href="' . get_the_permalink($ftp_server->ID) . '" class="nostyle">' . $ftp_server->post_title . "</a>";
                $content = $this->create_tr(array(
                    "title" => $title,
                    "content" => $td
                ));
            }
            if ($datenbank_server) {
                $title = "Datenbank Server";
                $td    = '<a href="' . get_the_permalink($datenbank_server->ID) . '" class="nostyle">' . $datenbank_server->post_title . "</a>";
                $content .= $this->create_tr(array(
                    "title" => $title,
                    "content" => $td
                ));
            }
            if ($domain_server) {
                $title = "Domain Server";
                $td    = '<a href="' . get_the_permalink($domain_server->ID) . '" class="nostyle">' . $domain_server->post_title . "</a>";
                $content .= $this->create_tr(array(
                    "title" => $title,
                    "content" => $td
                ));
            }
            
            return $this->create_grid_box($content, 'Servers');
        }
        
    }
    
    private function view_plugins($plugins)
    {
        if ($plugins) {
            $content = "";
            foreach ($plugins as $plugin) {
                $td = '<a href="' . get_the_permalink($plugin->ID) . '" class="nostyle">' . $plugin->post_title . "</a>";
                $content = $this->create_tr(array(
                    "content" => $td
                ));
            }
            return $this->create_grid_box($content, 'Plugins');
        }
    }
    
    private function view_google($google)
    {
        if ($google) {
            if ($this->google_analytics) {
                $title = "Google Analytics";
                $td    = $this->google_analytics;
                $content = $this->create_tr(array(
                    "title" => $title,
                    "content" => $td
                ));
            }
            if ($this->google_id) {
                $title = "Google ID";
                $td    = "Ja";
                $content .= $this->create_tr(array(
                    "title" => $title,
                    "content" => $td
                ));
            }
            if ($this->google_search_console) {
                $title = "Google Search Console";
                $td    = "Ja";
                $content .= $this->create_tr(array(
                    "title" => $title,
                    "content" => $td
                ));
            }
            return $this->create_grid_box($content, 'Google');
        }
        
        
    }
    
    public function __construct($settings)
    {
        $this->key                   = $settings["term"];
        $this->id                    = $settings["id"];
        $this->url                   = get_field("url");
        $this->cms                   = get_field("cms");
        $this->web_stack             = get_field("web_stack");
        $this->kunde                 = get_field("kunde");
        $this->plugins               = get_field("plugins");
        $this->servers               = get_field("servers");
        $this->google                = get_field("google");
        $this->v_mitarbeiter         = get_field("v_mitarbeiter");
        $this->google_analytics      = get_field("google_analytics");
        $this->google_id             = get_field("google_id");
        $this->google_search_console = get_field("google_search_console");
        
        return;
    }
}