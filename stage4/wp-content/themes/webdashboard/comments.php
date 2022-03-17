<?php
/**
 * Template File that displays comments in your theme.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comment-template/
 */
?>

<div class="page-content">

	<?php
            //Get only the approved comments
        $args = array(
            'status' => 'approve'
        );
        
        // The comment Query
        $comments_query = new WP_Comment_Query;
        $comments = $comments_query->query( $args );
        
        // Comment Loop
        if ( $comments ) {
        foreach ( $comments as $comment ) {
        echo '<p>' . $comment->comment_content . '</p>';
        }
        } else {
        echo 'No comments found.';
        }
    ?>
	
</div>
<?php get_footer(); ?>