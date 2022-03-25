<?php
class TableLoop
{
    //Declaration of the properties
    public $type = "projekte";
    public $title;
    public $isStatus = false;
    public $isSearch = false;
    
    //Declaration of the methods
    
    
    //returns the data of the header line. Depending on the type, a different header line is output accordingly. 
    private function get_header()
    {
  
        $return = '<div class="loop-wrapper"><table class="loop">';
        
        if ($this->type == 'mitarbeiter') {
            $return .= '<thead><tr><th class="overline">Name</th><th class="overline">Funktionen</th><th class="overline">Projekte</th><th class="overline"></th></tr></thead>';
        } elseif ($this->type == 'kunden') {
            $return .= '<thead><tr><th class="overline">Name</th><th class="overline">Ansprechperson</th><th class="overline">Projekte</th><th class="overline"></th></tr></thead>';
        } elseif ($this->type == 'projekte') {
            if ($this->isStatus) {
                $return .= '<thead><tr><th class="overline">Name</th><th class="overline">Kunde</th><th class="overline">Version</th><th class="overline"></th></tr></thead>';
            } else {
                $return .= '<thead><tr><th class="overline">Name</th><th class="overline">Kunde</th><th class="overline">Status</th><th class="overline"></th></tr></thead>';
            }
        } elseif ($this->type == 'plugins') {
            $return .= '<thead><tr><th class="overline">Name</th><th class="overline">Beschreibung</th><th class="overline">Status</th><th class="overline"></th></tr></thead>';
        } elseif ($this->type == 'servers') {
            if ($this->isStatus) {
                $return .= '<thead><tr><th class="overline">Servername</th><th class="overline">Host</th><th class="overline">Version</th><th class="overline"></th></tr></thead>';
            } else {
                $return .= '<thead><tr><th class="overline">Servername</th><th class="overline">Host</th><th class="overline">Projekte</th><th class="overline"></th></tr></thead>';
            }
            
        }
        
        $return .= "<tbody>";
        return $return;
    }
    
    //returns the data of the loop's footer. In this case it is the 404 output.
    private function get_footer()
    {
        $return = '<div class="overline center-text" style="padding: 50px;"><img src="' . get_template_directory_uri() . '/assets/images/notfound.svg" alt="Previous" width="250"><div style="margin-top: 30px;"> Keine Elemente Gefunden</div>';
        return $return;
    }
    
    //returns the pagination
    private function get_pagination()
    {
        $return = "</tbody>";
        $return .= '</table></div>';
        $return .= '<div class="table__footer right-text overline"><div class="base__padding horizontal">';
        $return .= custom_pagination();
        $return .= '</div></div>';
        return $return;
    }
    
    //s executed within the foreach functions and fills the respective data cell according to its ID. The type is also checked here to give the correct output.
    private function fill_tbody($id)
    {
        $content = '<tr onclick="window.location.href= \'' . get_permalink() . '\'">';
        
        $tdContent = $this->loop_get_the_title();
        $content .= $this->createTD(array(
            'order' => 2,
            'content' => $tdContent
        ));
        
        if ($this->type == 'projekte') {
            $tdContent = $this->loop_get_kunde($id);
            $content .= $this->createTD(array(
                'order' => 3,
                'content' => $tdContent
            ));
            if ($this->isStatus) {
                $tdContent = $this->loop_get_wordpress_version($id);
                $content .= $this->createTD(array(
                    'order' => 1,
                    'content' => $tdContent
                ));
            } else {
                $tdContent = $this->loop_get_status();
                $content .= $this->createTD(array(
                    'order' => 1,
                    'content' => $tdContent
                ));
            }
        } elseif ($this->type == 'plugins') {
            $tdContent = $this->loop_get_beschreibung();
            $content .= $this->createTD(array(
                'order' => 3,
                'content' => $tdContent
            ));
            $tdContent = $this->loop_get_status();
            $content .= $this->createTD(array(
                'order' => 1,
                'content' => $tdContent
            ));
        } elseif ($this->type == 'servers') {
            $tdContent = $this->loop_get_host($id);
            $content .= $this->createTD(array(
                'order' => 2,
                'content' => $tdContent
            ));
            if ($this->isStatus) {
                $tdContent = $this->loop_get_php_version($id);
                $content .= $this->createTD(array(
                    'order' => 3,
                    'content' => $tdContent
                ));
            } else {
                $tdContent = $this->loop_get_counter($this->type);
                $content .= $this->createTD(array(
                    'order' => 3,
                    'content' => $tdContent
                ));
            }
        } elseif ($this->type == 'kunden') {
            $tdContent = $this->loop_get_ansprechperson();
            $content .= $this->createTD(array(
                'order' => 3,
                'content' => $tdContent
            ));
            $tdContent = $this->loop_get_counter($this->type);
            $content .= $this->createTD(array(
                'order' => 3,
                'content' => $tdContent
            ));
        } elseif ($this->type == 'mitarbeiter') {
            $tdContent = $this->loop_get_funktion($id);
            $content .= $this->createTD(array(
                'order' => 1,
                'content' => $tdContent
            ));
            $tdContent = $this->loop_get_counter($this->type);
            $content .= $this->createTD(array(
                'order' => 3,
                'content' => $tdContent
            ));
        }
        
        
        
        $content .= '<td class="right-text order4"><div class="details-wrapper"><a href="' . get_permalink() . '" class="nostyle"><div class="details"><span></span><span></span><span></span></div></a></div></td></tr>';
        return $content;
    }
    
    //is used to create the individual data cell and packs the content into a data cell with the correct class.
    private function createTD($settings)
    {
        $order   = $settings['order'];
        $content = $settings['content'];
        
        $return = '<td class="order' . $order . '">';
        $return .= $content;
        $return .= '</td>';
        return $return;
    }
    
    //return title
    private function loop_get_the_title()
    {
        $return = '<h6><a href="' . get_permalink() . '" class="nostyle">' . get_the_title() . '</a></h6>';
        return $return;
    }
    
    //return status
    private function loop_get_status()
    {
        $status = get_field('status');
        if ($status == "Live") {
            $return = '<span class="status green overline">Live</span>';
        } elseif ($status == 'Development') {
            $return = '<span class="status orange overline">Development</span>';
        }
        return $return;
    }
    
    //return host 
    private function loop_get_host($id)
    {
        $return = get_field('host', $id);
        return $return;
    }
    
    //return the funktion as a clickable link
    private function loop_get_funktion($id)
    {
        
        $post_tags = get_the_terms($id, 'funktionen');
        if (!empty($post_tags)) {
            $i = 0;
            foreach ($post_tags as $post_tag) {
                $return = '<a href="' . get_tag_link($post_tag) . '" class="nostyle">' . $post_tag->name . '</a>';
            }
        }
        
        return $return;
    }
    
    //return the ansprechperson
    private function loop_get_ansprechperson()
    {
        $return = get_field("ansprechperson");
        return $return;
    }
    
    //return the kunde as a clickable link
    private function loop_get_kunde($id)
    {
        $kunde  = get_field('kunde', $id);
        $return = '<a href="' . get_the_permalink($kunde->ID) . '" class="nostyle">' . $kunde->post_title . '</a>';
        return $return;
    }
    
    //return the beschreibung 
    private function loop_get_beschreibung()
    {
        $return = get_field('beschreibung');
        return $return;
    }
    
    //counts and return the amound of objects related to the element 
    private function loop_get_counter($settings)
    {
        $i = 0;
        if ($settings == 'servers') {
            $args = array(
                'post_type' => 'objekte',
                'meta_query' => array(
                    array(
                        'key' => array(
                            'ftp_server',
                            'datenbank_server',
                            'domain_server'
                        ),
                        'value' => get_the_ID(),
                        'compare' => 'LIKE'
                    )
                )
            );
        } elseif ($settings == "kunden") {
            $args = array(
                'post_type' => 'objekte',
                'meta_query' => array(
                    array(
                        'key' => 'kunde',
                        'value' => get_the_ID(),
                        'compare' => 'LIKE'
                    )
                )
            );
        } elseif ($settings == "mitarbeiter") {
            $args = array(
                'post_type' => 'objekte',
                'meta_query' => array(
                    array(
                        'key' => 'v_mitarbeiter',
                        'value' => get_the_ID(),
                        'compare' => 'LIKE'
                    )
                )
            );
        } else {
            return;
        }
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()):
            $i = 0;
            while ($the_query->have_posts()):
                $the_query->the_post();
                $i++;
            endwhile;
            if ($i == 1) {
                $return = '<p>' . $i . '<span class="block-small-only"> Projekt</span></p>';
                
            } else {
                $return = '<p>' . $i . '<span class="block-small-only"> Projekte</span></p>';
            }
        else:
            $return = '<p>' . $i . '<span class="block-small-only"> Projekte</span></p>';
        endif;
        wp_reset_query();
        return $return;
    }
    
    //return stable check of wordpress
    private function loop_get_wordpress_version($id)
    {
        if(!empty(get_field('check_url', $id))){
        $interface = new WebDashboardInterface(get_field('check_url', $id));
        $version   = $interface->get_project_wp_version();
        $return    = $interface->wordpress_stablecheck($version);
        }else{
            $return = "no url set";

        }
        return $return;
    }
    
    //return the php version
    private function loop_get_php_version($id)
    {   if(!empty(get_field('check_url', $id))){
        $interface = new WebDashboardInterface(get_field('check_url', $id));
        $version   = $interface->get_server_php_version();
        $return    = $interface->php_version_checker($version);
    }else{
        $return = "no url set";
    }
        return $return;
    }
    
    //returns the value of the defined table.
    public function get_table()
    {
        if ($this->isStatus) {
            $posts = get_posts(array(
                'post_type' => 'objekte',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'obj',
                        'field' => 'slug',
                        'terms' => $this->type
                    )
                ),
                'meta_query' => array(
                    array(
                        'key' => 'versionen_check',
                        'value' => '1'
                    )
                )
            ));
            if ($posts) {
                global $post;
                $return = $this->get_header();
                foreach ($posts as $post) {
                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post);
                    $return .= $this->fill_tbody(get_the_ID());
                }
                
                $return .= $this->get_pagination();
                
            } else {
                $return = $this->get_footer();
            }
            wp_reset_postdata();
            
        } elseif($this->isSearch) {


/*
	$projectsCount = 0;
	$pluginsCount = 0;
	$serverCount = 0;
	$kundenCount = 0;
	$mitarbeiterCount = 0;
	
	if ( have_posts() ) {
		while ( have_posts() ) {
            the_post();
			$taxs = get_the_terms( get_the_ID(), array('obj','pers') ); 
			foreach ( $taxs as $tax ) {
				$taxonomy = $tax->slug;
				if($taxonomy == "projekte"){
					$projectsCount++;
					$project = array($content => $this->fill_tbody('projekte'));
					$projects[] = $project;
				}elseif($taxonomy == "plugins"){
					$pluginsCount++;
					$plugin = array($content => $this->fill_tbody('plugins'));
					$plugins[] = $plugin;
				}elseif($taxonomy == "servers"){
					$serverCount++;
					$server = array($content => $this->fill_tbody('servers'));
					$servers[] = $server;
				}elseif($taxonomy == "kunden"){
					$kundenCount++;
					$kunde = array($content => $this->fill_tbody('kunden'));
					$kunden[] = $kunde;
				}else{
					$mitarbeiterCount++;
					$mitarbeit = array($content => $this->fill_tbody('mitarbeiter'));
					$mitarbeiter[] = $mitarbeit;
				}
			}

		} 
		
	} 


    if($projectsCount > 0){

        $i = 0;
		while ($i <= $projectsCount) {
			echo $projects[$i][$content];
			$i++;  
		}
	}

	if($pluginsCount > 0){
        $i = 0;
		while ($i <= $pluginsCount) {
			echo $plugins[$i][$content];
			$i++;  
		}

	}
	if($serverCount > 0){
        $i = 0;
		while ($i <= $serverCount) {
			echo $servers[$i][$content];
			$i++;  
		}

	}
	if($kundenCount > 0){
        $i = 0;
		while ($i <= $kundenCount) {
			echo $kunden[$i][$content];
			$i++;  
		}

	}
	if($mitarbeiterCount > 0){

        $i = 0;
		while ($i <= $mitarbeiterCount) {
			echo $mitarbeiter[$i][$content];
			$i++;  
		}
	}*/

$return = "this function will be active soon";
return $return; 


        }else{
            if (have_posts()):
                $return = $this->get_header();
                while (have_posts()):
                    the_post();
                    $return .= $this->fill_tbody(get_the_ID());
                endwhile;
                $return .= $this->get_pagination();
            else:
                $return = $this->get_footer();
            endif;
        }
        
        $content  = $return;
        $settings = array(
            'class' => 'projekte',
            'title' => $this->title,
            'box' => array(
                'key' => 'start',
                'class' => 'loop main',
                'content' => $content,
                'hasPadding' => false
            )
        );
        
        $section = new Section($settings);
        $return  = $section->get_section();
        return $return;
        
    }
    public function __construct($settings)
    {
        $return = "";
        if (!empty($settings['type'])) {
            $this->type = $settings['type'];
        }
        if (!empty($settings['title'])) {
            $this->title = $settings['title'];
        }
        if (!empty($settings['isStatus'])) {
            $this->isStatus = $settings['isStatus'];
        }
        if (!empty($settings['isSearch'])) {
            $this->isSearch = $settings['isSearch'];
        }

        
    }
}