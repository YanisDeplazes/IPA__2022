<?php 
$current_user = wp_get_current_user(); /* Get User */
$user_name = $current_user->user_firstname . ' ' . $current_user->user_lastname; /* First + Lastname */

$return = '<h1>Hallo, '. $user_name  .'</h1><hr class="fullwidth">'; /* Box Content / Content */

$content = $return;
$settings = array(
    'class' => 'projekte',
    'title' => '',
    'box' => array(
        'key' => 'start',
        'class' => 'intro',
        'content' => $content,
        'hasPadding' => true
    )
    );

$section = new Section($settings);
$return = $section->get_section();
echo $return;