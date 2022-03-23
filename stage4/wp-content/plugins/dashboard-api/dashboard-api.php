<?php
/**
 * Plugin Name: Rest Ajax
 * Author: Yanis Deplazes
 * License: GPL2
 * text-domain: rest-ajax
*/

defined( 'ABSPATH' ) or die( 'Unauthorized access' );

function get_project_wp_version($external_source){ 
    $content = file_get_contents($external_source);
    $decoded_content = json_decode($content, TRUE);
    $information = $decoded_content;
    $version = $information['Wordpress']['Version'];
    return $version;
} 

function get_server_php_version($external_source){ 
    $content = file_get_contents($external_source);
    $decoded_content = json_decode($content, TRUE);
    $information = $decoded_content;
    $version = $information['PHP']['Version'];
    return $version;
} 


// Check Stable Check of Wordpress
function wordpress_stablecheck($version){ 
    $content = file_get_contents("http://api.wordpress.org/core/stable-check/1.0/");
    $decoded_content = json_decode($content, TRUE);
    $information = $decoded_content;
    $status = $information[$version];
    if ($status == "latest"){
        $return = '<span class="status green overline">'.$version.' - latest</span>';   
    }elseif($status == "outdated"){
        $return = '<span class="status orange overline">'.$version.' - outdated</span>';
    }elseif($status == "insecure"){
        $return = '<span class="status red overline">'.$version.' - insecure</span>';
    }else{
        $return = '<span class="status grey overline">not avaiable</span>';
    }
    return $return;
} 

// Check Stable Check of PHP
function php_version_checker($version) {
    if (version_compare($version, '8.0.0') >= 0) {
        $return = '<span class="status green overline">'.$version.' - Active support</span>';   
    }elseif (version_compare($version, '7.4.0') >= 0) {
        $return = '<span class="status orange overline">'.$version.' - Security fixes only</span>';
    }else{
        $return = '<span class="status red overline">'.$version.' - End of life</span>';
    }
    return $return;
}