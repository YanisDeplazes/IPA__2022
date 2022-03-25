<?php
class Single
{
    // property declaration

     /*
      *   No Properties needed
      */

    // method declaration
    public function reverse_loop($args)
    {
        $key   = $args['key'];
        $terms = $args['terms'];
        $id    = $args['id'];
        
        $args      = array(
            'post_type' => 'objekte',
            'post_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'obj',
                    'field' => 'slug',
                    'terms' => $terms
                )
            ),
            'meta_query' => array(
                array(
                    'key' => $key,
                    'value' => $id,
                    'compare' => 'LIKE'
                )
            )
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()):
            $return = "";
            $td = "";

            while ($the_query->have_posts()):
                $the_query->the_post();
                $td .= '<a href="' . get_post_permalink() . '" class="nostyle">' . get_the_title() . '</a>';
                $return .= $this->create_tr(array(
                    "content" => $td
                ));
            endwhile;
        else:
            $return = '<div class="overline center-text" style="padding: 50px;"><img src="' . get_template_directory_uri() . '/assets/images/notfound.svg" alt="Previous" width="100"><div style="margin-top: 30px;"> Keine Elemente Gefunden</div>';
        endif;
        wp_reset_query();
        
        return $return;
        
    }
    
    protected function create_grid_box($content, $title)
    {
        $newcontent = $this->create_grid_container($content, $title);
        $settings   = array(
            "key" => "start",
            "class" => "tes",
            "content" => $newcontent,
            "hasPadding" => true
        );
        $box        = new Box($settings);
        $return     = $box->get_box();
        return $return;
    }
    
    protected function create_grid_container($content, $title)
    {
        return '<h5>' . $title . '</h5><hr class="fullwidth"><p class="body-2"><div class="loop-wrapper"><table class="loop simple">' . $content . '</table></div></p>';
    }
    
    protected function create_tr($settings)
    {
        
        if (!empty($settings["title"])) {
            $return = '<tr><th class="overline">' . $settings["title"] . '</th><td class="body-2 right-text">' . $settings["content"] . "</td></tr>";
            
        } else {
            $return = '<tr><td class="body-2 left-text">' . $settings["content"] . "</td></tr>";
        }
        return $return;
    }
    
    protected function view_zusatz()
    {
        $rows = get_field('extra_felder');
        if ($rows) {
            foreach ($rows as $row) {
                $td      = '';
                $content = '';
                $typ     = $row['typ'];
                $nytitle = $row['box_titel'];
                if ($typ == "Dokumente") {
                    $files = $row['dokumente'];
                    foreach ($files as $file) {
                        $dokument = $file['dokument'];
                        $url      = $dokument['url'];
                        $title    = $dokument['title'];
                        $caption  = $dokument['caption'];
                        $icon     = $dokument['icon'];
                        
                        $text = $row['text'];
                        $td   = '<a href="' . $url . '" target="_blank" class="nostyle">' . $title . '</a>';
                        $content .= $this->create_tr(array(
                            "content" => $td
                        ));
                    }
                } elseif ($typ == "Tabelle") {
                    $tabelle = $row['tabelle'];
                    foreach ($tabelle as $tabelleitem) {
                        $title = $tabelleitem['tabellen_titel'];
                        $td    = $tabelleitem['tabellen_inhalt'];
                        $content .= $this->create_tr(array(
                            "title" => $title,
                            "content" => $td
                        ));
                        
                    }
                } elseif ($typ == "Text") {
                    $text    = $row['text'];
                    $td      = $text;
                    $content = $this->create_tr(array(
                        "content" => $td
                    ));
                    
                }
                $return = $this->create_grid_box($content, $row['box_titel']);
                
            }
        }
    }
}