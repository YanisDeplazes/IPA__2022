<?php 

   /**
   *  Get the Function of a Person as a Clickable Tag Link
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */
  
$post_tags = get_the_terms( $post->ID, 'funktionen' );
 if ( ! empty( $post_tags ) ) {
    foreach( $post_tags as $post_tag ) {
        echo '<a href="' . get_tag_link( $post_tag ) . '" class="nostyle">' . $post_tag->name . '</a>';
    }
}   
?>