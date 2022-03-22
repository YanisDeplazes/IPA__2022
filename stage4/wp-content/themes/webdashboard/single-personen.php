<?php
/**
    * File Template for displaying single posts
    * 
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
    */
    get_header();
    $current_user = wp_get_current_user(); /* Get User */
    $user_name = $current_user->user_firstname . ' ' . $current_user->user_lastname; /* First + Lastname */
    echo '<main class="personen">';
    get_template_part( 'template-parts/navigation/primary', 'primary' ); /* Loading Primary Navigation */
    get_template_part( 'template-parts/navigation/secondary', 'secondary', array('key'   => 'personen') ) ; /* Loading Secondary Navigation */
    get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'start', 'fullwidth'   => false) );  /* Loading Beginning of main__Content */
    get_template_part( 'template-parts/layout/loader', 'loader'); /* Loading Loader  */
    while ( have_posts() ) :
       the_post();
       $postID = $post->ID; //Post ID
       $taxs = get_the_terms( $postID, 'pers' ); //Array of pers categories
       get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start')); 
       get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'start', 'class' => 'intro','hasPadding' => true)); 
       echo '<h3 class="center-text">' . get_the_title() .'</h3>';
       foreach ( $taxs as $tax ) {
       if ($tax->slug == 'mitarbeiter'){
             get_template_part( 'template-parts/post/intro-single-mitarbeiter', 'intro-single-mitarbeiter'); 
         }else{
             get_template_part( 'template-parts/post/intro-single-kunde', 'intro-single-kunde'); 
         }
       }
       get_template_part( 'template-parts/components/box/box', 'box', array('key'   => 'end','hasPadding' => true)); 
       get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end')); 

       /* ----- New Section Beginning -----*/
       get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'start', 'class' => 'grid align-items__space-between')); 
       
       /* ----- Check Taxonomy -----*/
       foreach ( $taxs as $tax ) {
         if ($tax->slug == 'mitarbeiter'){
            /* ----- If it's Mitarbeiter Single Page -----*/
            get_template_part( 'template-parts/post/grid-single-mitarbeiter','grid-single-mitarbeiter'); 

          }else{
            /* ----- If it's Kunden Single Page -----*/
            get_template_part( 'template-parts/post/grid-single-kunde','grid-single-kunde'); 
          }
        }   
  get_template_part( 'template-parts/layout/section', 'section', array('key'   => 'end')); 

endwhile; 
echo "</main>";
get_footer();
?>