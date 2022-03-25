<?php

/* /////////////////////////////////////////////////////////////////////////////////
D I S A B L E   S H O W   A D M I N   B A R
///////////////////////////////////////////////////////////////////////////////// */

add_filter('show_admin_bar', '__return_false');



/* /////////////////////////////////////////////////////////////////////////////////
A D D I N G   S V G   S U P P O R T   F O R   F I L E   U P L O A D 
///////////////////////////////////////////////////////////////////////////////// */

function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');



/* /////////////////////////////////////////////////////////////////////////////////
C H A N G I N G   P O S T   P E R   P A G E   L I M I T   F O R   S E A R C H
///////////////////////////////////////////////////////////////////////////////// */

function change_wp_search_size($query)
{
    if ($query->is_search) $query->query_vars['posts_per_page'] = - 1;
    return $query;
}
add_filter('pre_get_posts', 'change_wp_search_size');



/* /////////////////////////////////////////////////////////////////////////////////
F U N C T I O N   T O   G E T   M E N U   I C O N
///////////////////////////////////////////////////////////////////////////////// */

function get_menu_icon($tax)
{
    if ($tax == "personen")
    {
        $GLOBALS["menu_icon"] = get_template_directory_uri() . '/assets/images/personen.svg';
    }
    elseif($tax == "inhalte")
    {
        $GLOBALS["menu_icon"] = get_template_directory_uri() . '/assets/images/inhalte.svg';
    }
}

