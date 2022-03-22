<?php 


$ftp_server =  get_field('ftp_server');
$datenbank_server = get_field('datenbank_server');
$domain_server = get_field('domain_server');
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
      if ($ftp_server){
      $content = 'FTP Server<br>';
      }
      if ($datenbank_server){
         $content .= 'Datenbank Server<br>';
      }
      if ($domain_server){
         $content .= 'Domain Server<br>';
      }
 
get_template_part( 'template-parts/post/content', 'content', array('content' => $content,'title' => 'Servers' )); /* Box Content / Content */
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Ending */


get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
get_template_part( 'template-parts/loop/simple', 'simple', array('terms' => 'projekte', 'title' => 'Projekte', 'key' =>  array('ftp_server','datenbank_server','domain_server'))); /* Box Content / Simple Loop */
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Beginning */

get_template_part( 'template-parts/post/extrafield', 'extrafield');  /* Box Extra Fields */