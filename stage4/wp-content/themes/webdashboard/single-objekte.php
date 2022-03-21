<?php
/**
 * File Template for displaying single posts
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

      get_header();
      $current_user = wp_get_current_user(); /* Get User */
      $user_name = $current_user->user_firstname . ' ' . $current_user->user_lastname; /* First + Lastname */
      
      echo '<main class="project">';
      get_template_part( 'template-parts/navigation/primary', 'primary' ); /* Loading Primary Navigation */
      get_template_part( 'template-parts/navigation/secondary', 'secondary', array('key'   => 'personen') ) ; /* Loading Secondary Navigation */
      get_template_part( 'template-parts/layout/main__content', 'main__content', array('key'   => 'start', 'fullwidth'   => false) );  /* Loading Beginning of main__Content */
      get_template_part( 'template-parts/layout/loader', 'loader'); /* Loading Loader  */?>
      
<div class="page-content">

    <?php while ( have_posts() ) :
        the_post();?>
          <section>
                  <div class="box intro fullwidth-small">
                     <div class="padding horizontal vertical">
                        <h3 class="center-text"><?php the_title();?></h3>
                        <h5>Übersicht</h5>
                        <hr class="fullwidth">
                        <div class="loop-wrapper">
                           <table class="loop simple">
                              <tr>
                                 <th class="overline">Url</th>
                                 <td class="body-2 right-text"><a href="https://competence.ch" target="_blank">competence.ch</a></td>
                              </tr>
                              <tr>
                                 <th class="overline">Stack</th>
                                 <td class="body-2 right-text">LAMP</td>
                              </tr>
                              <tr>
                                 <th class="overline">CMS</th>
                                 <td class="body-2 right-text">Wordpress</td>
                              </tr>
                              <tr>
                                 <th class="overline">Verantwortung</th>
                                 <td class="body-2 right-text">Nico Caputi</td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="grid align-items__space-between">
                  <div class="box">
                     <div class="padding horizontal vertical">
                        <h5>Kunde</h5>
                        <hr class="fullwidth">
                        <div class="loop-wrapper">
                           <table class="loop simple">
                              <tr>
                                 <th class="overline">Firma</th>
                                 <td class="body-2 right-text">Firma Name</td>
                              </tr>
                              <tr>
                                 <th class="overline">Ansprechsperson</th>
                                 <td class="body-2 right-text">Ansprechperson</td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="box">
                     <div class="padding horizontal vertical">
                        <h5>Server</h5>
                        <hr class="fullwidth">
                        <div class="loop-wrapper">
                           <table class="loop simple">
                              <tr>
                                 <th class="overline">FTP</th>
                                 <td class="body-2 right-text">Hosttech</td>
                              </tr>
                              <tr>
                                 <th class="overline">Datenbank</th>
                                 <td class="body-2 right-text">Google Cloud</td>
                              </tr>
                              <tr>
                                 <th class="overline">Domain</th>
                                 <td class="body-2 right-text">Hosttech</td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="box">
                     <div class="padding horizontal vertical">
                        <h5>Übersicht</h5>
                        <hr class="fullwidth">
                        <div class="loop-wrapper">
                           <table class="loop simple">
                              <tr>
                                 <td class="body-2">Plugin 1</td>
                              </tr>
                              <tr>
                                 <td class="body-2">Plugin 2</td>
                              </tr>
                              <tr>
                                 <td class="body-2">Plugin 3</td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="box">
                     <div class="padding horizontal vertical">
                        <h5>Übersicht</h5>
                        <hr class="fullwidth">
                        <div class="loop-wrapper">
                           <table class="loop simple">
                              <tr>
                                 <td class="body-2">Plugin 1</td>
                              </tr>
                              <tr>
                                 <td class="body-2">Plugin 2</td>
                              </tr>
                              <tr>
                                 <td class="body-2">Plugin 3</td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="box">
                     <div class="padding horizontal vertical">
                        <h5>Übersicht</h5>
                        <hr class="fullwidth">
                        <table class="loop simple">
                           <tr>
                              <td class="body-2">Plugin 1</td>
                           </tr>
                           <tr>
                              <td class="body-2">Plugin 2</td>
                           </tr>
                           <tr>
                              <td class="body-2">Plugin 3</td>
                           </tr>
                        </table>
                     </div>
                  </div>
               </section>
    <?php endwhile; ?>

</div>
<?php get_footer();?>
