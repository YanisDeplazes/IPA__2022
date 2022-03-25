<?php
class Layout
{
    // property declaration
    public $title;
    public $type = "none";
    public $class = "none";
    public $term = "none";
    public $hasSecondNavigation = false;
    public $isFullwidth = false;
    
    // method declaration
    
    // get the layout header
    public function get_layout_header()
    {
        get_menu_icon($this->type);
        get_header();
        get_template_part('template-parts/layout/main', 'main', array(
            'key' => 'start',
            'class' => $this->class
        ));
        get_template_part('template-parts/navigation/primary', 'primary');
        if ($this->hasSecondNavigation) {
            get_template_part('template-parts/navigation/secondary', 'secondary', array(
                'key' => $this->type,
                'title' => $this->title
            ));
        }
        get_template_part('template-parts/layout/main__content', 'main__content', array(
            'key' => 'start',
            'fullwidth' => $this->isFullwidth
        ));
        get_template_part('template-parts/layout/loader', 'loader');
    }
    
    // get the layout footer  
    public function get_layout_footer()
    {
        get_template_part('template-parts/layout/main__content', 'main__content', array(
            'key' => 'end'
        ));
        get_template_part('template-parts/layout/main', 'main', array(
            'key' => 'end'
        ));
        get_footer();
    }
    
    public function __construct($settings)
    {
        
        if ($settings['isFullwidth']) {
            $this->isFullwidth = $settings['isFullwidth'];
        }
        if ($settings['hasSecondnavigation']) {
            $this->hasSecondNavigation = $settings['hasSecondnavigation'];
        }
        if (!empty($settings['type'])) {
            $this->type = $settings['type'];
        }
        if (!empty($settings['class'])) {
            $this->class = $settings['class'];
        }
        if (!empty($settings['term'])) {
            $this->term = $settings['term'];
        }
        if (!empty($settings['title'])) {
            $this->title = $settings['title'];
        } else {
            $this->title = ucfirst($this->term);
        }
        
    }
    
}