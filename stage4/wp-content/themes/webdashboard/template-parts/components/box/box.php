<?php
   $key = $args['key']; 
   echo '<div class="box ' . $key .  '"><div class="padding horizontal vertical"><div class="flex align-items__center">';   /* Beginning of Box and Adding Key to as Classname */
  
   if ($key == 'versionstatus') { /* If Box is Versionstatus */
       
           get_template_part('template-parts/components/box/versionstatus', 'versionstatus', array(
               'version' => $args['content']
           ));
   
   } else{
    echo $args['content'];
} 
   
   echo '</div></div></div>'; /* End of Box and Adding Key to as Classname */
   ?>