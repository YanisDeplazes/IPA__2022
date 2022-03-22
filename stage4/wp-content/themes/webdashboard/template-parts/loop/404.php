
<?php 
   /**
   * Error 404 Custom Message and SVG
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */

if($args['size'] == 'small'){
    echo '<div class="overline center-text"><img src="'. get_template_directory_uri() .'/assets/images/notfound.svg" alt="Previous" width="100"><div style="margin-top: 10px;">'. $args['content'] .'</div>';
}else{
    echo '<div class="overline center-text" style="padding: 50px;"><img src="'. get_template_directory_uri() .'/assets/images/notfound.svg" alt="Previous" width="250"><div style="margin-top: 30px;">'. $args['content'] .'</div>';
}
?>