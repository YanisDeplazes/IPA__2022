

<?php
/**
 * File template for displaying search results pages. Display a list of posts in excerpt or full-length form. Choose one or the other as appropriate.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 */
   
    get_header();
	get_template_part( 'template-parts/layout/main', 'main', array('key' => 'start', 'class' => 'inhalte') );
	get_template_part( 'template-parts/navigation/primary', 'primary' );
	get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'start', 'fullwidth'   => true) );
	get_template_part( 'template-parts/layout/loader', 'loader');
	$projectsCount = 0;
	$pluginsCount = 0;
	$serverCount = 0;
	$kundenCount = 0;
	$mitarbeiterCount = 0;

	function fillProjekt(){
	  	$content =  '<tr onclick="window.location.href= \''. get_permalink() .'\'">';
	  	$content .= '<td class="order1"><h6><a href="'. get_permalink() .'" class="nostyle">'. get_the_title() .'</a></h6></td>';
      	$kunde = get_field('kunde', $post->ID);
      	$content .=  '<td class="order2">';
	  	$content .= '<a href="' . get_the_permalink($kunde->ID). '" class="nostyle">' . $kunde -> post_title . '</a>';             
	  	$content .=  '</td>';
   	  	$content .=  '<td class="order1">';
      	$status = get_field('status');
         if ($status == "Live"){
			$content .=  '<span class="status green overline">Live</span>';
         }elseif($status == 'Development'){
			$content .= '<span class="status orange overline">Development</span>';
         }     
		$content .= '</td>';
   		$content .= '<td class="right-text order4"><div class="details-wrapper"><a href="' . get_permalink() .'" class="nostyle"><div class="details"><span></span><span></span><span></span></div></a></div></td></tr>';
		return $content;
	}

	function fillPlugin(){
	 	$content = '<tr onclick="window.location.href= \''. get_permalink() .'\'">';
		$content .= '<td class="order2"><h6><a href="'. get_permalink() .'" class="nostyle">'. get_the_title() .'</a></h6></td>';
		$content .= '<td class="order3"><p class="body-2">'. get_field('beschreibung') .'</p></td>';
		$content .= '<td class="order1">';
		$status = get_field('status');
		   if ($status == "Live"){
			$content .= '<span class="status green overline">Live</span>';
		   }elseif($status == 'Development'){
			$content .= '<span class="status orange overline">Development</span>';
		   }     
		$content .='</td>';
		$content .= '<td class="right-text order4"><div class="details-wrapper"><a href="' . get_permalink() .'" class="nostyle"><div class="details"><span></span><span></span><span></span></div></a></div></td></tr>';
		return $content;
	}

	function fillServer(){
		$content = '<tr onclick="window.location.href= \''. get_permalink() .'\'">';
	 	$content .= '<td class="order1"><h6><a href="'. get_permalink() .'" class="nostyle">'. get_the_title() .'</a></h6></td>';
		$content .= '<td class="order2">'. get_field('host') .'</td>';
		$content .= '<td class="order3">';
		$args = array('post_type' => 'objekte', 'meta_query' => array( array( 'key' => array('ftp_server','datenbank_server','domain_server'), 'value' =>  $post->ID, 'compare' => 'LIKE' ) ) );
		$the_query = new WP_Query( $args );      
		if( $the_query->have_posts() ): 
		   $i = 0;
		while( $the_query->have_posts() ) : $the_query->the_post(); 
		   $i++;
		endwhile; 
		   if($i == 1){
			$content .= '<p>'.$i.'<span class="block-small-only"> Projekt</span></p>'; 
	 
		   }else{
			$content .= '<p>'.$i.'<span class="block-small-only"> Projekte</span></p>'; 
		   }
		else:
			$content .= '<p>'.$i.'<span class="block-small-only"> Projekte</span></p>'; 
		endif;
		wp_reset_query();	
		$content .= '</td>';
		$content .= '<td class="right-text order4"><div class="details-wrapper"><a href="' . get_permalink() .'" class="nostyle"><div class="details"><span></span><span></span><span></span></div></a></div></td></tr>';
		return $content;
	}

	function fillKunde(){
		$content = '<tr onclick="window.location.href= \''. get_permalink() .'\'">';
	 	$content .= '<td class="order1"><h6><a href="'. get_permalink() .'" class="nostyle">'. get_the_title() .'</a></h6></td>';
		$content .= '<td class="order2"><p class="body-2">' . get_field( "ansprechperson" ) .'</p></td>';
		$content .= '<td class="order3">';
		$args = array('post_type' => 'objekte','meta_query' => array(array('key' => 'kunde','value' => $post->ID ,'compare' => 'LIKE')));
		$the_query = new WP_Query( $args );      
		if( $the_query->have_posts() ): 
		   $i = 0;
		while( $the_query->have_posts() ) : $the_query->the_post(); 
		   $i++;
		endwhile; 
		   if($i == 1){
			$content .= '<p>'.$i.'<span class="block-small-only"> Projekt</span></p>'; 
	 
		   }else{
			$content .= '<p>'.$i.'<span class="block-small-only"> Projekte</span></p>'; 
		   }
		else:
			$content .= '<p>'.$i.'<span class="block-small-only"> Projekte</span></p>'; 
		endif;
		wp_reset_query();	
		$content .= '</td>';
		$content .= '<td class="right-text order4"><div class="details-wrapper"><a href="' . get_permalink() .'" class="nostyle"><div class="details"><span></span><span></span><span></span></div></a></div></td></tr>';
		return $content;
	}

	function fillMitarbeiter(){
		$content =  '<tr onclick="window.location.href= \''. get_permalink() .'\'">';
		$content .=  '<td class="order1"><h6><a href="'. get_permalink() .'" class="nostyle">'. get_the_title() .'</a></h6></td>';
		$content .=  '<td class="order2">';
		$post_tags = get_the_terms( $post->ID, 'funktionen' );
		if ( ! empty( $post_tags ) ) {
			$i = 0;
			foreach( $post_tags as $post_tag ) {
				$content .=  '<p class="body-2"><a href="' . get_tag_link( $post_tag ) . '" class="nostyle">' . $post_tag->name . '</a></p>';
			}
		}   
		$content .=  '</td>';
		$content .=  '<td class="order3">';
			$args = array('post_type' => 'objekte','meta_query' => array(array('key' => 'v_mitarbeiter','value' => $post->ID ,'compare' => 'LIKE')));
			$the_query = new WP_Query( $args );      
			if( $the_query->have_posts() ): 
				$i = 0;
			while( $the_query->have_posts() ) : $the_query->the_post(); 
				$i++;
			endwhile; 
				if($i == 1){
					$content .=  '<p>'.$i.'<span class="block-small-only"> Projekt</span></p>'; 

				}else{
					$content .=  '<p>'.$i.'<span class="block-small-only"> Projekte</span></p>'; 
				}
			else:
				$content .=  '<p>'.$i.'<span class="block-small-only"> Projekte</span></p>'; 
			endif;
			wp_reset_query();	 
			$content .=  '</td>';
			$content .=  '<td class="right-text order4"><div class="details-wrapper"><a href="' . get_permalink() .'" class="nostyle"><div class="details"><span></span><span></span><span></span></div></a></div></td></tr>';
		return $content;
		}

	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			$taxs = get_the_terms( get_the_ID(), array('obj','pers') ); 
			foreach ( $taxs as $tax ) {
				$taxonomy = $tax->slug;
				if($taxonomy == "projekte"){
					$projectsCount++;
					$project = array($content => fillProjekt());
					$projects[] = $project;
				}elseif($taxonomy == "plugins"){
					$pluginsCount++;
					$plugin = array($content => fillPlugin());
					$plugins[] = $plugin;
				}elseif($taxonomy == "servers"){
					$kundenCount++;
					$server = array($content => fillServer());
					$servers[] = $server;
				}elseif($taxonomy == "kunden"){
					$kundenCount++;
					$kunde = array($content => fillKunde());
					$kunden[] = $kunde;
				}elseif($taxonomy == "mitarbeiter"){
					$mitarbeiterCount++;
					$mitarbeit = array($content => fillMitarbeiter());
					$mitarbeiter[] = $mitarbeit;
				}
			}

		} 
		// Post Navigation
	} else {
		//No Post Found
	}

	if($projectsCount > 0){
		$key="projekte";
		get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start', 'hasWrapper' => true, 'title'   => 'Projekte')); 
		get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start' , 'class' => 'loop main') );
		echo'<div class="loop-wrapper"><table class="loop">';
		get_template_part( 'template-parts/loop/thead', 'thead', array('key'   => $key )); 
		echo "<tbody>";
		$i = 0;
		while ($i <= $projectsCount) {
			echo $projects[$i][$content];			
			$i++;  
		}
		echo "</tbody>";
		echo '</table></div>';
		get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end') );
		get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end', 'hasWrapper' => true));
	}

	if($pluginsCount > 0){
		$key="plugins";
		get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start', 'hasWrapper' => true, 'title'   => 'Plugins')); 
		get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start' , 'class' => 'loop main') );
		echo'<div class="loop-wrapper"><table class="loop">';
		get_template_part( 'template-parts/loop/thead', 'thead', array('key'   => $key )); 
		echo "<tbody>";
		$i = 0;
		while ($i <= $pluginsCount) {
			echo $plugins[$i][$content];
			$i++;  
		}
		echo "</tbody>";
		echo '</table></div>';
		get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end') );
		get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end', 'hasWrapper' => true));
	}
	if($serverCount > 0){
		$key="servers";
		get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start', 'hasWrapper' => true, 'title'   => 'Servers')); 
		get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start' , 'class' => 'loop main') );
		echo'<div class="loop-wrapper"><table class="loop">';
		get_template_part( 'template-parts/loop/thead', 'thead', array('key'   => $key )); 
		echo "<tbody>";
		$i = 0;
		while ($i <= $serverCount) {
			echo $servers[$i][$content];
			$i++;  
		}
		echo "</tbody>";
		echo '</table></div>';
		get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end') );
		get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end', 'hasWrapper' => true));
	}
	if($kundenCount > 0){
		$key="kunden";
		get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start', 'hasWrapper' => true, 'title'   => 'Kunden')); 
		get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start' , 'class' => 'loop main') );
		echo'<div class="loop-wrapper"><table class="loop">';
		get_template_part( 'template-parts/loop/thead', 'thead', array('key'   => $key )); 
		echo "<tbody>";
		$i = 0;
		while ($i <= $kundenCount) {
			echo $kunden[$i][$content];
			$i++;  
		}
		echo "</tbody>";
		echo '</table></div>';
		get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end') );
		get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end', 'hasWrapper' => true)); 
	}
	if($mitarbeiterCount > 0){
		$key="mitarbeiter";
		get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start', 'hasWrapper' => true, 'title'   => 'Mitarbeiter')); 
		get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start' , 'class' => 'loop main') );
		echo'<div class="loop-wrapper"><table class="loop">';
		get_template_part( 'template-parts/loop/thead', 'thead', array('key'   => $key )); 
		echo "<tbody>";
		$i = 0;
		while ($i <= $mitarbeiterCount) {
			echo $mitarbeiter[$i][$content];
			$i++;  
		}
		echo "</tbody>";
		echo '</table></div>';
		get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end') );
		get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end', 'hasWrapper' => true));
	}


    // Base Layout End
    get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'end') );
    get_template_part( 'template-parts/layout/main', 'main', array('key' => 'end') );

    get_footer(); 

