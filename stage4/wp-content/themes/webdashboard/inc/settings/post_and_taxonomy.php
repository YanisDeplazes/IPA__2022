<?php
/* /////////////////////////////////////////////////////////////////////////////////
C U S T O M   T A X O N O M I E S   A N D   P O S T   T Y P E
///////////////////////////////////////////////////////////////////////////////// */

function custom_post_type_and_taxonomy()
{
    $templatename = "projektmanagementdashboard";

    /*
     * Define new Custom Taxonomies
     */
    $customtaxonomies = [
    ["hierarchical" => true, "name" => "Kategorien", "singular_name" => "Kategorie", "search_items" => "Kategorien suchen", "all_items" => "All Kategorien", "parent_item" => "Parent Kategorie", "parent_item_colon" => "Parent Kategorie:", "edit_item" => "Kategorie bearbeiten", "update_item" => "Kategorie bearbeiten", "add_new_item" => "Neue Kategorie hinzufügen", "new_item_name" => "Neue Kategorie Name", "menu_name" => "Kategorien", "slug" => "pers", "with_front" => false, "hierarchical" => true, "location" => "personen", ], // PERSONEN KATEGORIE
    ["hierarchical" => true, "name" => "Kategorien", "singular_name" => "Kategorie", "search_items" => "Kategorien suchen", "all_items" => "All Kategorien", "parent_item" => "Parent Kategorie", "parent_item_colon" => "Parent Kategorie:", "edit_item" => "Kategorie bearbeiten", "update_item" => "Kategorie bearbeiten", "add_new_item" => "Neue Kategorie hinzufügen", "new_item_name" => "Neue Kategorie Name", "menu_name" => "Kategorien", "slug" => "obj", "with_front" => false, "hierarchical" => true, "location" => "objekte", ], // OBJEKTE KATEGORIE
    ["hierarchical" => true, "name" => "Funktionen", "singular_name" => "Funktion", "search_items" => "Funktion suchen", "all_items" => "Alle Funktionen", "parent_item" => "Parent Funktionen", "parent_item_colon" => "Parent Funktionen:", "edit_item" => "Funktion bearbeiten", "update_item" => "Funktion bearbeiten", "add_new_item" => "Neue Funktion hinzufügen", "new_item_name" => "Neue Funktion Name", "menu_name" => "Funktionen", "slug" => "funktionen", "with_front" => false, "hierarchical" => true, "location" => "personen", ], // PERSONEN FUNKTIONEN
    ];

    /*
     * Register defined Taxonomies
     */
    foreach ($customtaxonomies as $customtaxonomy)
    {
        $args = ["hierarchical" => $customtaxonomy["hierarchical"], "labels" => ["name" => _x($customtaxonomy["name"], "taxonomy general name") , "singular_name" => _x($customtaxonomy["singular_name"], "taxonomy singular name") , "search_items" => __($customtaxonomy["search_items"]) , "all_items" => __($customtaxonomy["all_items"]) , "parent_item" => __($customtaxonomy["parent_item"]) , "parent_item_colon" => __($customtaxonomy["parent_item_colon"]) , "edit_item" => __($customtaxonomy["edit_item"]) , "update_item" => __($customtaxonomy["update_item"]) , "add_new_item" => __($customtaxonomy["add_new_item"]) , "new_item_name" => __($customtaxonomy["new_item_name"]) , "menu_name" => __($customtaxonomy["menu_name"]) , ], "show_in_rest" => true, "rewrite" => ["slug" => $customtaxonomy["slug"], "with_front" => $customtaxonomy["with_front"], "hierarchical" => $customtaxonomy["hierarchical"], ], ];
        register_taxonomy($customtaxonomy["slug"], $customtaxonomy["location"], $args);
    }

    /*
     * Define new Custom Post types
     */
    $customposttypes = [
    ["name" => "Objekte", "singular_name" => "Objekt", "menu_name" => "Objekte", "parent_item_colon" => "Parent Objekte", "all_items" => "Alle Objekte", "view_item" => "Objekt zeigen", "add_new_item" => "neues Objekt hinzufügen", "add_new" => "Neu hinzufügen", "edit_item" => "Objekt bearbeiten", "update_item" => "Objekt bearbeiten", "search_items" => "Objekte suchen", "not_found" => "Nichts gefunden", "not_found_in_trash" => "Nichts im Papierkorb gefunden", "label" => "objekte", "description" => "Diese Custom Post Types sind für alle Objekte zuständig", "supports" => ["title", "thumbnail", "revisions", "custom-fields", ], "taxonomies" => ["obj"], "hierarchical" => false, "public" => true, "show_ui" => true, "show_in_menu" => true, "show_in_nav_menus" => true, "show_in_admin_bar" => true, "menu_position" => 5, "can_export" => true, "has_archive" => true, "exclude_from_search" => false, "publicly_queryable" => true, "capability_type" => "post", "show_in_rest" => true, "menu_icon" => "https://www.stutz-medien.ch/sites/default/files/inhalte.svg", ], //Objekte / Inhalte
    ["name" => "Personen", "singular_name" => "Person", "menu_name" => "Person", "parent_item_colon" => "Parent Personen", "all_items" => "Alle Personen", "view_item" => "Personen zeigen", "add_new_item" => "neue Person hinzufügen", "add_new" => "Neu hinzufügen", "edit_item" => "Person bearbeiten", "update_item" => "Person bearbeiten", "search_items" => "Personen suchen", "not_found" => "Nichts gefunden", "not_found_in_trash" => "Nichts im Papierkorb gefunden", "label" => "personen", "description" => "Diese Custom Post Types sind für alle Personen zuständig", "supports" => ["title", "thumbnail", "revisions", "custom-fields", ], "taxonomies" => ["pers"], "hierarchical" => false, "public" => true, "show_ui" => true, "show_in_menu" => true, "show_in_nav_menus" => true, "show_in_admin_bar" => true, "menu_position" => 6, "can_export" => true, "has_archive" => true, "exclude_from_search" => false, "publicly_queryable" => true, "capability_type" => "post", "show_in_rest" => true, "menu_icon" => "https://www.stutz-medien.ch/sites/default/files/personen.svg", ], ]; //Personen
   
    /*
     * Register defined Custom Post types
     */
    foreach ($customposttypes as $customposttype)
    {
        $labels = ["name" => _x($customposttype["name"], "Post Type General Name", $templatename) , "singular_name" => _x($customposttype["singular_name"], "Post Type Singular Name", $templatename) , "menu_name" => __($customposttype["menu_name"], $templatename) , "parent_item_colon" => __($customposttype["parent_item_colon"], $templatename) , "all_items" => __($customposttype["all_items"], $templatename) , "view_item" => __($customposttype["view_item"], $templatename) , "add_new_item" => __($customposttype["add_new_item"], $templatename) , "add_new" => __($customposttype["add_new"], $templatename) , "edit_item" => __($customposttype["edit_item"], $templatename) , "update_item" => __($customposttype["update_item"], $templatename) , "search_items" => __($customposttype["search_items"], $templatename) , "not_found" => __($customposttype["not_found"], $templatename) , "not_found_in_trash" => __($customposttype["not_found_in_trash"], $templatename) , ];
        $args = ["label" => __($customposttype["label"], $templatename) , "description" => __($customposttype["description"], $templatename) , "labels" => $labels, "supports" => $customposttype["supports"], "taxonomies" => $customposttype["supports"],"hierarchical" => $customposttype["hierarchical"], "public" => $customposttype["public"], "show_ui" => $customposttype["show_ui"], "show_in_menu" => $customposttype["show_in_menu"], "show_in_nav_menus" => $customposttype["show_in_nav_menus"], "show_in_admin_bar" => $customposttype["show_in_admin_bar"], "menu_position" => $customposttype["menu_position"], "can_export" => $customposttype["can_export"], "has_archive" => $customposttype["has_archive"], "exclude_from_search" => $customposttype["exclude_from_search"], "publicly_queryable" => $customposttype["publicly_queryable"], "capability_type" => $customposttype["capability_type"], "show_in_rest" => $customposttype["show_in_rest"], "menu_icon" => $customposttype["menu_icon"],];
        register_post_type($customposttype["label"], $args);
    }
}

/* Hook into the 'init' action */

add_action("init", "custom_post_type_and_taxonomy", 0);

