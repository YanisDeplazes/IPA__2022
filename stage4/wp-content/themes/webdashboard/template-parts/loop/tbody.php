<?php $key = $args['key'];

if ($key == 'mitarbeiter'){
    get_template_part( 'template-parts/loop/mitarbeiter/tbody', 'tbody');  
 }elseif($key == 'kunden'){
     get_template_part( 'template-parts/loop/kunden/tbody', 'tbody');  
 }elseif($key == 'projekte'){
      get_template_part( 'template-parts/loop/projekte/tbody', 'tbody');  
 }elseif($key == 'plugins'){
       get_template_part( 'template-parts/loop/plugins/tbody', 'tbody');  
 }elseif($key == 'servers'){
      get_template_part( 'template-parts/loop/servers/tbody', 'tbody');  
}?>