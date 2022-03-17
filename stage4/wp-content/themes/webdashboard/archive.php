<?php
/**
 * File Template for displaying archive pages. You can display archive title (tag, category, date-based, or author archives).
 * There are other archive files you can use, see the archive structure: https://developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>
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