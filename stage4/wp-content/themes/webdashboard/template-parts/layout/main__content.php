<?php 
if ($args['key'] == 'start' ){
    echo '<div class="main__content ';
    if ($args['fullwidth']){
        echo 'full-width';
    }
    echo ' flex-1"><div class="base__padding vertical horizontal">';

}else{
    echo'</div></div></main>';
}
?>