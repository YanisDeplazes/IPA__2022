<?php 

   /**
   * Assign THead to the current loop
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */

  $key = $args['key'];
  $isstatus = $args['isstatus'];

if ($key == 'mitarbeiter'){
    get_template_part( 'template-parts/loop/mitarbeiter/thead', 'thead');  
 }elseif($key == 'kunden'){
     get_template_part( 'template-parts/loop/kunden/thead', 'thead');  
 }elseif($key == 'projekte'){
      get_template_part( 'template-parts/loop/projekte/thead', 'thead',  array('isstatus' => $isstatus));  
 }elseif($key == 'plugins'){
       get_template_part( 'template-parts/loop/plugins/thead', 'thead');  
 }elseif($key == 'servers'){
      get_template_part( 'template-parts/loop/servers/thead', 'thead', array('isstatus' => $isstatus));  
}?>