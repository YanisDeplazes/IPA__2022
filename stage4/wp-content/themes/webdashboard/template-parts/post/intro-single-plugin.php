<?php 
 
/**
* Intro Template Part for Projekt Single Page
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*/

  // Data
  $beschreibung = get_field( "beschreibung" );
  $url = get_field( "url" );
  $title = 'Übersicht';

  // Table Start
  $content = '<div class="loop-wrapper"><table class="loop simple">';
  
  // URL
  $content .= '
  <tr>
     <th class="overline">URL</th>
     <td class="body-2 left-text"><a href="'. $url .'" class="nostyle">' . $url . '</a></td>
  </tr>';

  // Beschreibung
  $content .= '
  <tr>
     <th class="overline">Beschreibung</th>
     <td class="body-2 left-text">'. $beschreibung .'</td>
  </tr>';

  // Table End
  $content .= '</table></div>';

  //Pass the Content to the Template
  get_template_part( 'template-parts/post/content', 'content', array('content' => $content,'title' => $title )); 