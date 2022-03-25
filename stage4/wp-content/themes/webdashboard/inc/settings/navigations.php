<?php 

/* /////////////////////////////////////////////////////////////////////////////////
R E G I S T E R   N A V I G A T I O N
///////////////////////////////////////////////////////////////////////////////// */

function register_my_menus()
{
    register_nav_menus(array(
        'navigation-primary' => __('Primary Navigation') ,
        'navigation-secondary-inhalte' => __('Secondary Navigation Inhalte') ,
        'navigation-secondary-personen' => __('Secondary Navigation Personen') ,
    ));
}
add_action('init', 'register_my_menus');
