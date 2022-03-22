<?php 

   /**
   * Grid Template Part for Server Single Page
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */


   // Data
   $ftp_server =  get_field('ftp_server');
   $datenbank_server = get_field('datenbank_server');
   $domain_server = get_field('domain_server');

   // Server Types
   $title = 'Server-Typ';
   get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); 
   $content = '<div class="loop-wrapper"><table class="loop simple">';
   if ($ftp_server){
      $content .= '
      <tr>
         <td class="body-2 left-text">FTP Server</td>
      </tr>
      ';
      }
      if ($datenbank_server){
         $content .= '
         <tr>
            <td class="body-2 left-text">Datenbank Server</td>
         </tr>
         ';
      }
      if ($domain_server){
         $content .= '
         <tr>
            <td class="body-2 left-text">Domain Server</td>
         </tr>
         ';
   }

   $content .= '</table></div>';
   get_template_part( 'template-parts/post/content', 'content', array('content' => $content,'title' => $title )); 
   get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); 

   // Reverse Relationship Loop (Assigned projects)
   get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); 
   get_template_part( 'template-parts/loop/simple', 'simple', array('terms' => 'projekte', 'title' => 'Projekte', 'key' =>  array('ftp_server','datenbank_server','domain_server'))); 
   get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); 

   // Extrafields
   get_template_part( 'template-parts/post/extrafield', 'extrafield'); 