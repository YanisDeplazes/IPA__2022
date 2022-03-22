<?php 

   /**
   * Grid Template Part for Kunde Single Page
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */


   // Data
   $ansprechperson = get_field('ansprechperson');
   $email_ansprechperson = get_field('e-mail_ansprechperson');

   // Reverse Relationship Loop (Assigned Projects)
   $title = 'Projekte';
   get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true));
   get_template_part( 'template-parts/loop/simple', 'simple', array('terms' => 'projekte', 'title' => $title,  'key' => 'kunde')); 
   get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true));

   // Ansprechperson
   $title = 'Ansprechperson';
   get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); 
   $content = '<div class="loop-wrapper"><table class="loop simple">';
   if ($ansprechperson){
   $content .= '
   <tr>
      <th class="overline">Name</th>
      <td class="body-2 right-text">'. $ansprechperson .'</td>
   </tr>
   ';
   }
   if ($email_ansprechperson){
   $content .= '
   <tr>
      <th class="overline">E-Mail</th>
      <td class="body-2 right-text"><a class="nostyle" href="mailto:'. $email_ansprechperson .'">'. $email_ansprechperson .'</a></td>
   </tr>
   ';
   }
   $content .= '</table></div>';
   get_template_part( 'template-parts/post/content', 'content', array('content' => $content,'title' => $title  )); 
   get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); 

   // Extrafields
   get_template_part( 'template-parts/post/extrafield', 'extrafield'); 