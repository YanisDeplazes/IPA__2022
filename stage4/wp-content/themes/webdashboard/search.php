

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
					$serverCount++;
					$server = array($content => fillServer());
					$servers[] = $server;
				}elseif($taxonomy == "kunden"){
					$kundenCount++;
					$kunde = array($content => fillKunde());
					$kunden[] = $kunde;
				}else{
					$mitarbeiterCount++;
					$mitarbeit = array($content => fillMitarbeiter());
					$mitarbeiter[] = $mitarbeit;
				}
			}

		} 
		// Post Navigation
	} else {
        get_template_part( 'template-parts/loop/404', '404', array('size' => 'big', 'content' => 'Keine Elemente gefunden.')) ;
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
		get_template_part( 'template-parts/loop/pagination', 'pagination', array('key'   => $key )); 
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
		get_template_part( 'template-parts/loop/pagination', 'pagination', array('key'   => $key )); 
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
		get_template_part( 'template-parts/loop/pagination', 'pagination', array('key'   => $key )); 
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
		get_template_part( 'template-parts/loop/pagination', 'pagination', array('key'   => $key )); 
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
		get_template_part( 'template-parts/loop/pagination', 'pagination', array('key'   => $key )); 
		get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end') );
		get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end', 'hasWrapper' => true));
	}


    // Base Layout End
    get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'end') );
    get_template_part( 'template-parts/layout/main', 'main', array('key' => 'end') );

    get_footer(); 

