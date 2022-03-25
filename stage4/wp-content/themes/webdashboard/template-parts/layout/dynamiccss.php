<?php 
   /**
   * Dynamic CSS with Links
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */
    $id = get_the_ID();
    $menu_icon = get_field( "menu_icon",  $id); 
?>

<style>

/* Disable WP Footer because of Margin */
#wp-footer{
    display: none;
}

.tax-obj #menu-item-93::before, .tax-pers #menu-item-79::before, .single-objekte #menu-item-93::before, .single-personen #menu-item-79::before{
    background: #009ba9;
}

.tax-obj #menu-item-93::after, .tax-pers #menu-item-79::after, .single-objekte #menu-item-93::after,.single-personen #menu-item-79::after {
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
.tax-obj #menu-item-93 a, .tax-pers #menu-item-79 a, .single-objekte #menu-item-93 a, .single-personen #menu-item-79 a{
    color: #009ba9;
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
    -webkit-mask: url('<?php echo $GLOBALS["menu_icon"];?>') no-repeat;
    mask: url('<?php echo $GLOBALS["menu_icon"]; ?>') no-repeat;
}
</style>
