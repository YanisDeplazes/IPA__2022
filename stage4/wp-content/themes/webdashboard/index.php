<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();?>
<div class="page-content">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>
                <!--Post Loop-->
        <?php endwhile; ?>
                <!--Post Navigation-->
    <?php else : ?>
                <!--No Post Found-->
    <?php endif; ?>
</div>
<?php get_footer(); ?>