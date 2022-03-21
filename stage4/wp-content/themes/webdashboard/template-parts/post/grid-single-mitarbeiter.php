<?php 
            /*Projekt Simple Loop*/
            get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
            get_template_part( 'template-parts/loop/simple', 'simple', array('terms' => 'projekte', 'title' => 'Projekte')); /* Box Content / Simple Loop */
            get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true));  /* Box Ending */

            /*Plugins Simple Loop*/
            get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start','hasPadding' => true)); /* Box Beginning */
            get_template_part( 'template-parts/loop/simple', 'simple', array('terms' => 'plugins', 'title' => 'Plugins')); /* Box Content / Simple Loop */
            get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true));  /* Box Ending */

            get_template_part( 'template-parts/post/extrafield', 'extrafield');  /* Box Extra Fields */