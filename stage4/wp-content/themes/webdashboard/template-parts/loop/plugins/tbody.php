

<tbody>
   <tr onclick="window.location.href='<?php echo get_permalink();?>'">
      <td class="order1">
         <h6><a href="<?php echo get_permalink(); ?>" class="nostyle"><?php the_title();?></a></h6>
      </td>
      <td class="order2">
          <p class="body-2"><?php echo get_field('beschreibung');?></p>            
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