<?php
/* /////////////////////////////////////////////////////////////////////////////////
4)  C U S T O M   P A G I N A T I O N
///////////////////////////////////////////////////////////////////////////////// */
function custom_pagination()
{
    $return = '<div class="pagination flex align-items__center">';

    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if ($pages > 1)
    {
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $return .= '<div>Seite ' . $paged . ' von ' . $pages . '</div>';
        $return .= get_previous_posts_link('<img src="' . get_template_directory_uri() . '/assets/images/previous.svg" alt="Previous">');
        $return .= get_next_posts_link('<img src="' . get_template_directory_uri() . '/assets/images/next.svg" alt="Previous">');
    }
    $return .= '</div>';
    return $return;
}