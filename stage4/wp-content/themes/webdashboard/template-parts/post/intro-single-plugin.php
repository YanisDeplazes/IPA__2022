
 <?php /* Get Custom Fields and save as Variables*/
$beschreibung = get_field( "beschreibung" );
$url = get_field( "url" );
$content = '

<div class="loop-wrapper">
   <table class="loop simple">
      ';
      $content .= '
      <tr>
         <th class="overline">URL</th>
         <td class="body-2 left-text"><a href="'. $url .'" class="nostyle">' . $url . '</a></td>
      </tr>
      ';
      $content .= '
      <tr>
         <th class="overline">Beschreibung</th>
         <td class="body-2 left-text">'. $beschreibung .'</td>
      </tr>';
      $content .= '
   </table>
</div>
';
get_template_part( 'template-parts/post/content', 'content', array('content' => $content,'title' => 'Übersicht' )); /* Box Content / Content */

