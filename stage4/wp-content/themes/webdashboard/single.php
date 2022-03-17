<?php
/**
 * File Template for displaying single posts
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();?>
<div class="page-content">

    <?php while ( have_posts() ) :
        the_post();?>
        <!--Post Content-->
    <?php endwhile; ?>

</div>
<?php get_footer();?>
