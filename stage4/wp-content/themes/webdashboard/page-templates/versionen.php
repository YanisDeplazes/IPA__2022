

<?php
/**
 * File template for displaying search results pages. Display a list of posts in excerpt or full-length form. Choose one or the other as appropriate.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 */
   
      // Data
      get_menu_icon("inhalte");
      $taxs = get_the_terms( $postID, 'obj' ); 
      foreach ( $taxs as $tax ) {
        $taxonomy = $tax->slug;
        $term = ucfirst($taxonomy);
      }

      // Base Layout Start
      get_header();
      get_template_part( 'template-parts/layout/main', 'main', array('key' => 'start', 'class' => 'inhalte project '. $taxonomy.'',) );
      get_template_part( 'template-parts/navigation/primary', 'primary' );
      get_template_part( 'template-parts/navigation/secondary', 'secondary', array('key'   => 'objekte', 'term' => $term) ); 
      get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'start', 'fullwidth'   => true) );
      get_template_part( 'template-parts/layout/loader', 'loader');
      $posts = get_posts( array(
            'post_type' => 'objekte',
            'posts_per_page' => -1,
            'tax_query' => array(
                array (
                    'taxonomy' => 'obj',
                    'field' => 'slug',
                    'terms' => 'projekte',
                )
            ),
            'meta_query' => array(
                array(
                    'key'   => 'versionen_check',
                    'value' => '1',
                )
            )
        ) );
        if( $posts ) {        
            $key="projekte";
            get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start', 'hasWrapper' => true, 'title'   => 'Wordpress')); 
            get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start' , 'class' => 'loop main') );
            echo'<div class="loop-wrapper"><table class="loop">';
            get_template_part( 'template-parts/loop/thead', 'thead', array('key'   => $key, 'isstatus' => true )); 
            echo "<tbody>";
            foreach( $posts as $post ) {
                echo fillProjektStatus();			
            }
            echo "</tbody>";
            echo '</table></div>';
            get_template_part( 'template-parts/loop/pagination', 'pagination', array('key'   => $key )); 
            get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end') );
            get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end', 'hasWrapper' => true));

        }
        
        $posts = get_posts( array(
            'post_type' => 'objekte',
            'posts_per_page' => -1,
            'tax_query' => array(
                array (
                    'taxonomy' => 'obj',
                    'field' => 'slug',
                    'terms' => 'servers',
                )
            ),
            'meta_query' => array(
                array(
                    'key'   => 'versionen_check',
                    'value' => '1',
                )
            )
        ) );
        
        if( $posts ) {        
            $key="servers";
            get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start', 'hasWrapper' => true, 'title'   => 'PHP')); 
            get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start' , 'class' => 'loop main') );
            echo'<div class="loop-wrapper"><table class="loop">';
            get_template_part( 'template-parts/loop/thead', 'thead', array('key'   => $key, 'isstatus' => true )); 
            echo "<tbody>";
            foreach( $posts as $post ) {
                echo fillServerStatus();			
            }
            echo "</tbody>";
            echo '</table></div>';
            get_template_part( 'template-parts/loop/pagination', 'pagination', array('key'   => $key )); 
            get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end') );
            get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end', 'hasWrapper' => true));
        }
        


    // Base Layout End
    get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'end') );
    get_template_part( 'template-parts/layout/main', 'main', array('key' => 'end') );

    get_footer(); 

