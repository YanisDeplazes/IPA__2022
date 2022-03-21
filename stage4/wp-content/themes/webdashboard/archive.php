<?php
/**
 * File Template for displaying archive pages. You can display archive title (tag, category, date-based, or author archives).
 * There are other archive files you can use, see the archive structure: https://developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
   
   get_header();
   $current_user = wp_get_current_user(); /* Get User */
   $user_name = $current_user->user_firstname . ' ' . $current_user->user_lastname; /* First + Lastname */
   
   echo '<main class="project">';
   get_template_part( 'template-parts/navigation/primary', 'primary' ); /* Loading Primary Navigation */
   get_template_part( 'template-parts/navigation/secondary', 'secondary' ) ; /* Loading Secondary Navigation */
   get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'start', 'fullwidth'   => false) );  /* Loading Beginning of main__Content */
   get_template_part( 'template-parts/layout/loader', 'loader'); /* Loading Loader  */?>



<div class="box loop main">
                     <div class="loop-wrapper">
                        <table class="loop">
                           <thead>
                              
                              <tr>
                                 <th class="overline">Name</th>
                                 <th class="overline">Kundenname</th>
                                 <th class="overline">Status</th>
                                 <th class="overline"></th>
                              </tr>
                           </thead>
<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : ?>
                           <tbody>
                              <tr onclick="window.location.href='../single/index.html'">
                                 <td class="order2">
                                    <h6><a href="../single/index.html" class="nostyle">Projektname</a></h6>
                                 </td>
                                 <td class="order3"><a href="../single/index.html" class="nostyle">Kundenname</a></td>
                                 <td class="order1"><span class="status orange overline">Development</span></td>
                                 <td class="right-text order4">
                                    <div class="details-wrapper"><a href="../single/index.html" class="nostyle"><div class="details"><span></span><span></span><span></span></div></a></div>
                                 </td>
                              </tr>
                           </tbody>
               
            <?php the_post(); ?>
                <!--Post Loop-->
        <?php endwhile; ?>
        </table>
                     </div>
                     <div class="table__footer right-text overline">
                        <div class="base__padding horizontal">
                           <div class="pagination flex align-items__center">
                              <div>Seite 2 von 5</div>  <img src="../assets/img/previous.svg" alt="Previous"> <img src="../assets/img/next.svg" alt="Next">
                           </div>
                        </div>
                     </div>
               </div>
    <?php else : ?>
                <!--No Post Found-->
    <?php endif; ?>
    




  <?php get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'end') );  /* Loading End of main__Content */
   get_footer(); 
   
   ?>
