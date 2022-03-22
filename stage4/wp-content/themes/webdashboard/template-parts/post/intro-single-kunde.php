
<?php 
 
/**
* Intro Template Part for Kunde Single Page
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*/

  // Data
  $firmaName = get_field( "firma" );
  $firmaAdresse = get_field( "adresse" );
  $firmaPLZ = get_field( "plz" );
  $firmaOrt = get_field( "ort" );
  $ansprechperson = get_field( "ansprechperson" );
  $email_ansprechperson = get_field( "e-mail_ansprechperson" );
  $firmaAdressefull = $firmaAdresse .'<br>'. $firmaPLZ .'<br>'. $firmaOrt;
  $title = 'Übersicht';

  // Table Start
  $content = '<div class="loop-wrapper"><table class="loop simple">';

  //Firmaname
  $content .= '
  <tr>
     <th class="overline">Firmaname</th>
     <td class="body-2 left-text">' . $firmaName . '</td>
  </tr>
  ';

  //Adresse
  $content .= '
  <tr>
     <th class="overline">Adresse</th>
     <td class="body-2 left-text">'. $firmaAdressefull .'</td>
  </tr>';

  // Table End
  $content .= '</table></div>';

  //Pass the Content to the Template
  get_template_part( 'template-parts/post/content', 'content', array('content' => $content,'title' => $title )); 