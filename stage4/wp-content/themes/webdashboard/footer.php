<?php
   /**
    * File Template for displaying the Footer. It is called when using the wp_footer()
    * 
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    */
   ?>
<script>
   window.addEventListener('DOMContentLoaded', (event) => {
      document.querySelector('.loader').classList.add("none")
   });
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/navigation.js"></script>
<section id="wp-footer">
   <?php wp_footer(); ?>
</section>
</body>
</html>