<?php 
$post_tags = get_the_terms( $post->ID, 'funktionen' );
 if ( ! empty( $post_tags ) ) {
    foreach( $post_tags as $post_tag ) {
        echo '<a href="' . get_tag_link( $post_tag ) . '" class="nostyle">' . $post_tag->name . '</a>';
    }
}   
?>