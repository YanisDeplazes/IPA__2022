<?php 
   /**
   * Tbody for Plugin Loop
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   */



   // Link as OnClick
   echo '<tbody><tr onclick="window.location.href= \''. get_permalink() .'\'">';

   // Title
   echo '<td class="order2"><h6><a href="'. get_permalink() .'" class="nostyle">'. get_the_title() .'</a></h6></td>';

   // Beschreibung
   echo '<td class="order3"><p class="body-2">'. get_field('beschreibung') .'</p></td>';

   // Status
   echo '<td class="order1">';
   $status = get_field('status');
      if ($status == "Live"){
          echo '<span class="status green overline">Live</span>';
      }elseif($status == 'Development'){
          echo '<span class="status orange overline">Development</span>';
      }     
   echo'</td>';


   // Details
   echo '<td class="right-text order4"><div class="details-wrapper"><a href="' . get_permalink() .'" class="nostyle"><div class="details"><span></span><span></span><span></span></div></a></div></td></tr></tbody>';