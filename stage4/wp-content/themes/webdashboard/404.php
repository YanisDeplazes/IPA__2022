<?php
/**
 * File Template for displaying Error 404 pages 
 * 
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header();
?>
<div class="page-content">
	<p><?php esc_html_e( 'Nothing seems to have been found at this location. Maybe try a search?', 'sm-wp-theme' ); ?></p>
	<?php get_search_form(); ?>
</div>
<?php get_footer(); ?>
