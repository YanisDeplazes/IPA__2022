<?php
$key = $args['key'];
$class = $args['class'];
$hasPadding = $args['hasPadding'];

/*if ($key == 'versionstatus') {
    /* If Box is Versionstatus 
    echo '<div class="flex align-items__center">';
    get_template_part('template-parts/components/box/versionstatus', 'versionstatus', array(
        'version' => $args['content']
    ));
    echo '</div>';
} elseif ($key == 'intro') {
    echo '<div class="flex align-items__center">';
    
    echo $args['content'];
    echo '</div>';
    
} elseif ($key == 'single') {
    get_template_part('template-parts/components/box/box-projects', 'box-projects', array(
        'terms' => $args['terms'],
        'title' => $args['title']
    ));
}*/

if($key == 'start'){
    echo '<div class="box ' . $class . '">';
    if($hasPadding){
        echo '<div class="padding horizontal vertical">'; /* Start of Box with giving the key as classname*/
    }
    
}elseif($key == 'end'){
    if($hasPadding){
        echo '</div>';
    }
    echo '</div>';
    }
?>