<?php 

   /**
   * Assign TBody to the current loop
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */

// Data
$key = $args['key'];

if ($key == 'mitarbeiter'){
    echo fillMitarbeiter();
 }elseif($key == 'kunden'){
    echo fillKunde();
 }elseif($key == 'projekte'){
    echo fillProjekt();
 }elseif($key == 'plugins'){
    echo fillPlugin();
 }elseif($key == 'servers'){
    echo fillServer();
}?>