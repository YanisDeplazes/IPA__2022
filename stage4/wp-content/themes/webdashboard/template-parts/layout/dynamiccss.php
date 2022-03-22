<?php 

$id = get_the_ID();
$menu_icon = get_field( "menu_icon",  $id); 
?>

<style>
.inhalte #menu-item-93::before, .personen #menu-item-79::before{
    background-color: #009BA9;
}
.inhalte #menu-item-93::after,.personen #menu-item-79::after{
    width: 3px;
    height: 34px;
    background: #009ba9;
    content: " ";
    position: absolute;
    left: calc(0px - var(--site-padding-h));
    top: -7.5px;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}
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
