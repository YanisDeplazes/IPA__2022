
 <?php 
 
    /**
    * Intro Template Part for Projekt Single Page
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    */

      // Data
      $cms = get_field( "cms" );
      $web_stack = get_field( "web_stack" );
      $url = get_field( "url" );
      $v_mitarbeiter = get_field("verantwortlicher_mitarbeiter");
      $title = 'Übersicht';

      // Loop Start
      $content = '<div class="loop-wrapper"><table class="loop simple">';

      // URL
      $content .= '
      <tr>
         <th class="overline">URL</th>
         <td class="body-2 right-text"><a href="'. $url .'" class="nostyle">' . $url . '</a></td>
      </tr>';

      // Web Stack
      if ($web_stack){
            $content .= '
            <tr>
               <th class="overline">Web Stack</th>
               <td class="body-2 right-text">';
                  foreach ($web_stack as $web_stack_item) {
                     $content .= $web_stack_item .'<br>';
                  }  
            $content .= '</td></tr>';
      }

      // CMS
      if ($cms){
            $content .= '
            <tr>
               <th class="overline">CMS</th>
               <td class="body-2 right-text">';
               foreach ($cms as $cms_item) {
                  $content .= $cms_item .'<br>';
               }
            $content .= '</td></tr>';
      }

      // Mitarbeiter
      $content .= '
      <tr>
         <th class="overline">Verantwortung</th>
         <td class="body-2 right-text">'. $v_mitarbeiter->post_title  .'</td>
      </tr>';

      // Loop End
      $content .= '</table></div>';

      //Pass the Content to the Template
      get_template_part( 'template-parts/post/content', 'content', array('content' => $content,'title' => $title )); 