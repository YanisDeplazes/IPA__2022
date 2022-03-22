

<tbody>
   <tr onclick="window.location.href='<?php echo get_permalink();?>'">
      <td class="order1">
         <h6><a href="<?php echo get_permalink(); ?>" class="nostyle"><?php the_title();?></a></h6>
      </td>
      <td class="order2">
               <?php             
            $kunde = get_field('kunde', $post->ID);
               echo   '<a href="' . get_the_permalink($kunde->ID). '" class="nostyle">' . $kunde -> post_title . '</a>';?>
                           
      </td>
      <td class="order1">
      <?php $status = get_field('status');
      if ($status == "Live"){
          echo '<span class="status green overline">Live</span>';
      }elseif($status == 'Development'){
          echo '<span class="status orange overline">Development</span>';
      }     
      
      ?>
      </td>
      <td class="right-text order4">
         <div class="details-wrapper">
            <a href="<?php echo get_permalink();?>" class="nostyle">
               <div class="details"><span></span><span></span><span></span></div>
            </a>
         </div>
      </td>
   </tr>
</tbody>