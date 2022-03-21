<?php
/**
 * Functions and definitions
 * In WordPress, functions.php or the theme functions file is a template included in WordPress themes. It acts like a plugin for your WordPress site that's automatically activated with your aIn WordPress, functions.php or the theme functions file is a template included in WordPress themes. It acts like a plugin for your WordPress site that's automatically activated with your current theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// This theme requires WordPress 5.3 or later.
if (version_compare($GLOBALS["wp_version"], "5.3", "<")) {
    require get_template_directory() . "/inc/back-compat.php";
}

function my_custom_login()
{
    echo '<link rel="stylesheet" type="text/css" href="' .
        get_bloginfo("stylesheet_directory") .
        '/login/custom-login-style.css"/>';
}
add_action("login_head", "my_custom_login");

// Force Login https://www.trickspanda.com/force-users-login-viewing-wordpress/
function v_getUrl()
{
    $url =
        isset($_SERVER["HTTPS"]) && "on" === $_SERVER["HTTPS"]
            ? "https"
            : "http";
    $url .= "://" . $_SERVER["SERVER_NAME"];
    $url .= in_array($_SERVER["SERVER_PORT"], ["80", "443"])
        ? ""
        : ":" . $_SERVER["SERVER_PORT"];
    $url .= $_SERVER["REQUEST_URI"];
    return $url;
}
function v_forcelogin()
{
    if (!is_user_logged_in()) {
        // Check if User is not logged in
        $url = v_getUrl(); // Get URL
        $whitelist = apply_filters("v_forcelogin_whitelist", []);
        $redirect_url = apply_filters("v_forcelogin_redirect", $url);
        if (
            preg_replace("/\?.*/", "", $url) !=
                preg_replace("/\?.*/", "", wp_login_url()) &&
            !in_array($url, $whitelist)
        ) {
            wp_safe_redirect(wp_login_url($redirect_url), 302);
            exit();
        }
    }
}
add_action("init", "v_forcelogin");

/*
 * Creating a function to create our CPT and Custom Taxonomies
 */

function custom_post_type()
{
    $templatename = "projektmanagementdashboard";

    $customtaxonomies = [
        [
            "hierarchical" => true,
            "name" => "Kategorien",
            "singular_name" => "Kategorie",
            "search_items" => "Kategorien suchen",
            "all_items" => "All Kategorien",
            "parent_item" => "Parent Kategorie",
            "parent_item_colon" => "Parent Kategorie:",
            "edit_item" => "Kategorie bearbeiten",
            "update_item" => "Kategorie bearbeiten",
            "add_new_item" => "Neue Kategorie hinzufügen",
            "new_item_name" => "Neue Kategorie Name",
            "menu_name" => "Kategorien",
            "slug" => "pers", // This controls the base slug that will display before each term
            "with_front" => false, // Don't display the category base before "/locations/"
            "hierarchical" => true, // This will allow URL's like "/locations/boston/cambridge/"
            "location" => "personen",
        ],
		[
			"hierarchical" => true,
            "name" => "Kategorien",
            "singular_name" => "Kategorie",
            "search_items" => "Kategorien suchen",
            "all_items" => "All Kategorien",
            "parent_item" => "Parent Kategorie",
            "parent_item_colon" => "Parent Kategorie:",
            "edit_item" => "Kategorie bearbeiten",
            "update_item" => "Kategorie bearbeiten",
            "add_new_item" => "Neue Kategorie hinzufügen",
            "new_item_name" => "Neue Kategorie Name",
            "menu_name" => "Kategorien",
            "slug" => "objekte", // This controls the base slug that will display before each term
            "with_front" => false, // Don't display the category base before "/locations/"
            "hierarchical" => true, // This will allow URL's like "/locations/boston/cambridge/"
            "location" => "objekte",
        ],
		[
			"hierarchical" => true,
            "name" => "Funktionen",
            "singular_name" => "Funktion",
            "search_items" => "Funktion suchen",
            "all_items" => "Alle Funktionen",
            "parent_item" => "Parent Funktionen",
            "parent_item_colon" => "Parent Funktionen:",
            "edit_item" => "Funktion bearbeiten",
            "update_item" => "Funktion bearbeiten",
            "add_new_item" => "Neue Funktion hinzufügen",
            "new_item_name" => "Neue Funktion Name",
            "menu_name" => "Funktionen",
            "slug" => "funktionen", // This controls the base slug that will display before each term
            "with_front" => false, // Don't display the category base before "/locations/"
            "hierarchical" => true, // This will allow URL's like "/locations/boston/cambridge/"
            "location" => "personen",
        ],
    ];

    foreach ($customtaxonomies as $customtaxonomy) {
        $args = [
            // Hierarchical taxonomy (like categories)
            "hierarchical" => $customtaxonomy["hierarchical"],
            // This array of options controls the labels displayed in the WordPress Admin UI
            "labels" => [
                "name" => _x($customtaxonomy["name"], "taxonomy general name"),
                "singular_name" => _x(
                    $customtaxonomy["singular_name"],
                    "taxonomy singular name"
                ),
                "search_items" => __($customtaxonomy["search_items"]),
                "all_items" => __($customtaxonomy["all_items"]),
                "parent_item" => __($customtaxonomy["parent_item"]),
                "parent_item_colon" => __($customtaxonomy["parent_item_colon"]),
                "edit_item" => __($customtaxonomy["edit_item"]),
                "update_item" => __($customtaxonomy["update_item"]),
                "add_new_item" => __($customtaxonomy["add_new_item"]),
                "new_item_name" => __($customtaxonomy["nanew_item_nameme"]),
                "menu_name" => __($customtaxonomy["menu_name"]),
            ],
			"show_in_rest" => true,
			
            // Control the slugs used for this taxonomy
            "rewrite" => [
                "slug" => $customtaxonomy["slug"], // This controls the base slug that will display before each term
                "with_front" => $customtaxonomy["with_front"], // Don't display the category base before "/locations/"
                "hierarchical" => $customtaxonomy["hierarchical"], // This will allow URL's like "/locations/boston/cambridge/"
            ],			

        ];

        // Add new "Locations" taxonomy to Posts
        register_taxonomy(
            $customtaxonomy["slug"],
            $customtaxonomy["location"],
            $args
        );
    }

    /*
     * Define new Custom Post Types
     */

    $customposttypes = [
        [
            "name" => "Objekte",
            "singular_name" => "Objekt",
            "menu_name" => "Objekte",
            "parent_item_colon" => "Parent Objekte",
            "all_items" => "Alle Objekte",
            "view_item" => "Objekt zeigen",
            "add_new_item" => "neues Objekt hinzufügen",
            "add_new" => "Neu hinzufügen",
            "edit_item" => "Objekt bearbeiten",
            "update_item" => "Objekt bearbeiten",
            "search_items" => "Objekte suchen",
            "not_found" => "Nichts gefunden",
            "not_found_in_trash" => "Nichts im Papierkorb gefunden",
            "label" => "objekte",
            "description" => "Diese Custom Post Types sind für alle Objekte zuständig",
            "supports" => [
                "title",
                "editor",
                "excerpt",
                "thumbnail",
                "revisions",
                "custom-fields",
            ],
            "taxonomies" => ["objekte"],
            "hierarchical" => true,
            "public" => true,
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "show_in_admin_bar" => true,
            "menu_position" => 5,
            "can_export" => true,
            "has_archive" => true,
            "exclude_from_search" => false,
            "publicly_queryable" => true,
            "capability_type" => "post",
            "show_in_rest" => true,
			"menu_icon" => "https://www.stutz-medien.ch/sites/default/files/inhalte.svg",
        ],

        [
            "name" => "Personen",
            "singular_name" => "Person",
            "menu_name" => "Person",
            "parent_item_colon" => "Parent Personen",
            "all_items" => "Alle Personen",
            "view_item" => "Personen zeigen",
            "add_new_item" => "neue Person hinzufügen",
            "add_new" => "Neu hinzufügen",
            "edit_item" => "Person bearbeiten",
            "update_item" => "Person bearbeiten",
            "search_items" => "Personen suchen",
            "not_found" => "Nichts gefunden",
            "not_found_in_trash" => "Nichts im Papierkorb gefunden",
            "label" => "personen",
            "description" => "Diese Custom Post Types sind für alle Personen zuständig",
            "supports" => [
                "title",
                "editor",
                "excerpt",
                "thumbnail",
                "revisions",
                "custom-fields",
            ],
            "taxonomies" => ["pers"],
            "hierarchical" => false,
            "public" => true,
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "show_in_admin_bar" => true,
            "menu_position" => 6,
            "can_export" => true,
            "has_archive" => true,
            "exclude_from_search" => false,
            "publicly_queryable" => true,
            "capability_type" => "post",
            "show_in_rest" => true,
			"menu_icon" => "https://www.stutz-medien.ch/sites/default/files/personen.svg",
        ],
    ];
    foreach ($customposttypes as $customposttype) {
        $labels = [
            "name" => _x(
                $customposttype["name"],
                "Post Type General Name",
                $templatename
            ),
            "singular_name" => _x(
                $customposttype["singular_name"],
                "Post Type Singular Name",
                $templatename
            ),
            "menu_name" => __($customposttype["menu_name"], $templatename),
            "parent_item_colon" => __(
                $customposttype["parent_item_colon"],
                $templatename
            ),
            "all_items" => __($customposttype["all_items"], $templatename),
            "view_item" => __($customposttype["view_item"], $templatename),
            "add_new_item" => __(
                $customposttype["add_new_item"],
                $templatename
            ),
            "add_new" => __($customposttype["add_new"], $templatename),
            "edit_item" => __($customposttype["edit_item"], $templatename),
            "update_item" => __($customposttype["update_item"], $templatename),
            "search_items" => __(
                $customposttype["search_items"],
                $templatename
            ),
            "not_found" => __($customposttype["not_found"], $templatename),
            "not_found_in_trash" => __(
                $customposttype["not_found_in_trash"],
                $templatename
            ),
        ];

        // Set other options for Custom Post Type

        $args = [
            "label" => __($customposttype["label"], $templatename),
            "description" => __($customposttype["description"], $templatename),
            "labels" => $labels,
            // Features this CPT supports in Post Editor
            "supports" => $customposttype["supports"],
            // You can associate this CPT with a taxonomy or custom taxonomy.
            "taxonomies" => $customposttype["supports"],
            /* A hierarchical CPT is like Pages and can have
             * Parent and child items. A non-hierarchical CPT
             * is like Posts.
             */
            "hierarchical" => $customposttype["hierarchical"],
            "public" => $customposttype["public"],
            "show_ui" => $customposttype["show_ui"],
            "show_in_menu" => $customposttype["show_in_menu"],
            "show_in_nav_menus" => $customposttype["show_in_nav_menus"],
            "show_in_admin_bar" => $customposttype["show_in_admin_bar"],
            "menu_position" => $customposttype["menu_position"],
            "can_export" => $customposttype["can_export"],
            "has_archive" => $customposttype["has_archive"],
            "exclude_from_search" => $customposttype["exclude_from_search"],
            "publicly_queryable" => $customposttype["publicly_queryable"],
            "capability_type" => $customposttype["capability_type"],
            "show_in_rest" => $customposttype["show_in_rest"],
			"menu_icon" => $customposttype["menu_icon"],

        ];

        // Registering your Custom Post Type
        register_post_type($customposttype["label"], $args);
    }
}

/* Hook into the 'init' action so that the function
 * Containing our post type registration is not
 * unnecessarily executed.
 */

add_action("init", "custom_post_type", 0);


add_filter( 'show_admin_bar', '__return_false' );
?>
