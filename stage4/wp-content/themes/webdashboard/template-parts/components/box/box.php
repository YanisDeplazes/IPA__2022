<?php
   $key = $args['key'];
   echo '<div class="box ' . $key .  '"><div class="padding horizontal vertical"><div class="flex align-items__center">';   
  
   if ($key == 'versionstatus') {
       
           get_template_part('template-parts/components/box/versionstatus', 'versionstatus', array(
               'version' => $args['content']
           ));
   
   } else{
    echo $args['content'];
} 
   
   echo '</div></div></div>';
   ?>