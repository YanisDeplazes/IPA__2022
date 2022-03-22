<?php 
$kunde = get_field('kunde');
$ansprechperson = get_field('ansprechperson', $kunde->ID);
$plugins = get_field('plugins');
$servers = get_field('servers');
$google = get_field('google');
$dokumente = get_field('dokumente');
/*Projekt Simple Loop*/
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
$content = '
<div class="loop-wrapper">
   <table class="loop simple">
      ';
      $content .= '
      <tr>
         <th class="overline">Firma</th>
         <td class="body-2 right-text"><a href="'. get_the_permalink($kunde->ID).'" class="nostyle">' . $kunde->post_title . '</a></td>
      </tr>
      ';
      $content .= '
      <tr>
         <th class="overline">Ansprechperson</th>
         <td class="body-2 right-text"><a href="'. get_the_permalink($kunde->ID).'" class="nostyle">' . $ansprechperson . '</a></td>
      </tr>
      ';
      $content .= '
   </table>
</div>
';
get_template_part( 'template-parts/post/content', 'content', array('content' => $content,'title' => 'Kunde' )); /* Box Content / Content */
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true));  /* Box Ending */
/*Simple Content Box*/
if ($servers){
$ftp_server =  get_field('ftp_server');
$datenbank_server = get_field('datenbank_server');
$domain_server = get_field('domain_server');
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
$content = '
<div class="loop-wrapper">
   <table class="loop simple">
      ';
      if ($ftp_server){
      $content .= '
      <tr>
         <th class="overline">FTP Server</th>
         <td class="body-2 right-text"><a href="'. get_the_permalink($ftp_server->ID).'" class="nostyle">'. $ftp_server->post_title .'</td>
      </tr>
      ';
      }
      if ($datenbank_server){
      $content .= '
      <tr>
         <th class="overline">Datenbank Server</th>
         <td class="body-2 right-text"><a href="'. get_the_permalink($datenbank_server->ID).'" class="nostyle">'. $datenbank_server->post_title .'</td>
         </tr>
      ';
      }
      if ($domain_server){
      $content .= '
      <tr>
        <th class="overline">Datenbank Server</th>
        <td class="body-2 right-text"><a href="'. get_the_permalink($domain_server->ID).'" class="nostyle">'. $domain_server->post_title .'</td>
      </tr>
      ';
      }
      $content .= '
   </table>
</div>
';
get_template_part( 'template-parts/post/content', 'content', array('content' => $content,'title' => 'Servers' )); /* Box Content / Content */
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Ending */
}
if ($plugins){
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
$content = '
<div class="loop-wrapper">
   <table class="loop simple">';
      foreach ($plugins as $plugin) {
      $content .= '<a href="'. get_the_permalink($plugin->ID).'" class="nostyle">' . $plugin->post_title . '</a>';
      }
      $content .= '
   </table>
</div>
';
get_template_part( 'template-parts/post/content', 'content', array('content' => $content,'title' => 'Plugins' )); /* Box Content / Content */
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Ending */
}
if ($google){
$google_analytics =  get_field('google_analytics');
$google_id = get_field('google_id');
$google_search_console = get_field('google_search_console');
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
$content = '
<div class="loop-wrapper">
   <table class="loop simple">
      ';
      if ($google_analytics){
      $content .= '
      <tr>
         <th class="overline">Google Analytics</th>
         <td class="body-2 right-text">'. $google_analytics .'</td>
      </tr>
      ';
      }
      if ($google_id){
      $content .= '
      <tr>
         <th class="overline">Google ID</th>
         <td class="body-2 right-text">Ja </td>
      </tr>
      ';
      }
      if ($google_search_console){
      $content .= '
      <tr>
         <th class="overline">Google Search Console</th>
         <td class="body-2 right-text">Ja</td>
      </tr>
      ';
      }
      $content .= '
   </table>
</div>
';
get_template_part( 'template-parts/post/content', 'content', array('content' => $content,'title' => 'Google' )); /* Box Content / Content */
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Ending */
}
/*Dokumente*/
if ($dokumente){
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
$content = '
<div class="loop-wrapper">
   <table class="loop simple">
      ';
      $content .= '
      <tr>
         <th class="overline">Firma</th>
         <td class="body-2 right-text">' . $kunde->post_title . '</td>
      </tr>
      ';
      $content .= '
      <tr>
         <th class="overline">Firma</th>
         <td class="body-2 right-text">' . $kunde->post_title . '</td>
      </tr>
      ';
      $content .= '
      <tr>
         <th class="overline">Firma</th>
         <td class="body-2 right-text">' . $kunde->post_title . '</td>
      </tr>
      ';
      $content .= '
      <tr>
         <th class="overline">Firma</th>
         <td class="body-2 right-text">' . $kunde->post_title . '</td>
      </tr>
      ';
      $content .= '
   </table>
</div>
';
get_template_part( 'template-parts/post/content', 'content', array('content' => $content,'title' => 'Dokumente' )); /* Box Content / Content */
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Ending */
}
get_template_part( 'template-parts/post/extrafield', 'extrafield');  /* Box Extra Fields */