<?php
/**
 * File Template for displaying the Footer. It is called when using the wp_footer()
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>
        <footer>
             <!--Nav Menu-->
             <p class="footer__copyright">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>.</p>
        </footer>
        <section id="wp-footer">
            <?php wp_footer(); ?>
        </section>
    </body>
</html>
