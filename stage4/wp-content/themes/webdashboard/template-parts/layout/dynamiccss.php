<?php 

$id = get_the_ID();
$menu_icon = get_field( "menu_icon",  $id); 
?>

<style>
#menu-item-60::before {
    -webkit-mask: url('<?php echo get_template_directory_uri();?>/assets/images/uebersicht.svg') no-repeat;
    mask: url('<?php echo get_template_directory_uri();?>/assets/images/uebersicht.svg') no-repeat;
}

#menu-item-93::before {
    -webkit-mask: url('<?php echo get_template_directory_uri();?>/assets/images/inhalte.svg') no-repeat;
    mask: url('<?php echo get_template_directory_uri();?>/assets/images/inhalte.svg') no-repeat;
}

#menu-item-79::before {
    -webkit-mask: url('<?php echo get_template_directory_uri();?>/assets/images/personen.svg') no-repeat;
    mask: url('<?php echo get_template_directory_uri();?>/assets/images/personen.svg') no-repeat;
}

#menu-item-57::before {
    -webkit-mask: url('<?php echo get_template_directory_uri();?>/assets/images/scrum.svg') no-repeat;
    mask: url('<?php echo get_template_directory_uri();?>/assets/images/scrum.svg') no-repeat;
}

.navigation.secondary .block-small-only::before {
    -webkit-mask: url('<?php echo $menu_icon;?>') no-repeat;
    mask: url('<?php echo $menu_icon; ?>') no-repeat;
}
</style>
