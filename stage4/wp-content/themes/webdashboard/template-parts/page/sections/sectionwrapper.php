<?php
   $content = $args['content'];

   echo '<section><div class="wrapper">';
   
   if (!empty($args['title'])) {
       echo "<h4>" . $args['title'] . "</h4>";
   } 
   
   
   foreach ($content as &$value) {
      get_template_part('template-parts/components/box/box', 'box', array(
         'key' => $args['key'],
         'content' => $value
     ));   
   }
   echo 'test</div></section>';
   ?>