<?php 
$current_user = wp_get_current_user();
$avatar_url = get_avatar( $current_user->ID, 32 );
echo '<header><div class="flex base__padding horizontal align-items__center align-items__space-between"><div class="header__title flex align-items__center"><div class="hamburger" onclick="toggleMainnavigation()"><div></div><div></div><div></div></div><h4 class="inline-block">Web Dashboard</h4></div><div class="block-medium"><form action="/" method="get" class="search flex align-items__center"><input type="text" name="s" id="search" value="" /><input type="image" alt="Search" src="'. get_template_directory_uri() .'/assets/images/search.svg" /></form></div><div class="avatar">' . $avatar_url . '</div></div></header>'; ?>