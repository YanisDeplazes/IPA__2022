<?php 

/*Projekt Simple Loop*/
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
get_template_part( 'template-parts/loop/simple', 'simple', array('terms' => 'projekte', 'title' => 'Projekte')); /* Box Content / Simple Loop */
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true));  /* Box Ending */

/*Simple Content Box*/
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
get_template_part( 'template-parts/post/content', 'content', array('content' => $ansprechpersonen,'title' => 'Ansprechperson' )); /* Box Content / Content */
get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); /* Box Ending */

get_template_part( 'template-parts/post/extrafield', 'extrafield');  /* Box Extra Fields */