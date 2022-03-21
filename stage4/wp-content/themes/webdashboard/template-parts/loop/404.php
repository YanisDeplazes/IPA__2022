
<?php 
if($args['size'] == 'small'){
    echo '<div class="overline center-text"><img src="'. get_template_directory_uri() .'/assets/images/notfound.svg" alt="Previous" width="100"><div style="margin-top: 10px;">Keine passenden Elemente gefunden</div>';
}else{
    echo '<div class="overline center-text" style="padding: 50px;"><img src="'. get_template_directory_uri() .'/assets/images/notfound.svg" alt="Previous" width="250"><div style="margin-top: 30px;">Keine passenden Elemente gefunden</div>';
}
?>