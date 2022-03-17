The Theme should be widgetized as fully as possible. Any area in the layout that works like a widget (tag cloud, blogroll, list of categories) or could accept widgets (sidebar) should allow widgets.
<?php
/**
 * File Template for displaying single posts
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
?>

<div class="sidebar">
	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar' ); ?>
	<?php endif; ?>
</div>