<?php 

$kunde = get_field('kunde');

/*Projekt Simple Loop*/
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
   echo '<div class="loop-wrapper"><table class="loop simple"><tr><th class="overline">Firma</th><?php }?><td class="body-2 right-text">' .  $kunde->post_title  .'</td></tr><tr><th class="overline">Ansprechperson</th><?php }?><td class="body-2 right-text">Test</td></tr></table></div>';
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true));  /* Box Ending */

/*Simple Content Box*/
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
get_template_part( 'template-parts/post/content', 'content', array('content' => $ansprechpersonen,'title' => 'Server' )); /* Box Content / Content */
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Ending */

/*Plugins*/
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
get_template_part( 'template-parts/post/content', 'content', array('content' => $ansprechpersonen,'title' => 'Plugins' )); /* Box Content / Content */
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Ending */

/*Google*/
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
get_template_part( 'template-parts/post/content', 'content', array('content' => $ansprechpersonen,'title' => 'Google' )); /* Box Content / Content */
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Ending */

/*Dokumente*/
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
get_template_part( 'template-parts/post/content', 'content', array('content' => $ansprechpersonen,'title' => 'Dokumente' )); /* Box Content / Content */
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Ending */


get_template_part( 'template-parts/post/extrafield', 'extrafield');  /* Box Extra Fields */