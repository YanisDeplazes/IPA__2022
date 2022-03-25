<?php 

function acf_portfolio_item_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// Versionen Status
		acf_register_block(array(
			'name'				=> 'versionen-status',
			'title'				=> __('Versionen Status'),
			'description'		=> __('A custom block for displaying Version Status.'),
			'render_template'	=> 'template-parts/blocks/versionenstatus.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'Versionen','status' ),
		));

        // Intro Box
		acf_register_block(array(
			'name'				=> 'welcome-box',
			'title'				=> __('Welcome Box'),
			'description'		=> __('A custom block for displaying and welcoming the User.'),
			'render_template'	=> 'template-parts/blocks/welcomebox.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'Welcome','Box' ),
		));
	}
}

add_action('acf/init', 'acf_portfolio_item_block');