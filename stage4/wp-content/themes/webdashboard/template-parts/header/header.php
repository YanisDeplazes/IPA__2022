<header>
   <div class="flex base__padding horizontal align-items__center align-items__space-between">
      <div class="header__title flex align-items__center">
         <div class="hamburger" onclick="toggleMainnavigation()">
            <div></div>
            <div></div>
            <div></div>
         </div>
         <h4 class="inline-block">Web Dashboard</h4>
      </div>
      <div class="block-medium">
         <form action="/" method="get" class="search flex align-items__center">
            <input type="text" name="s" id="search" value="" />
            <input type="image" alt="Search" src="<?php echo get_template_directory_uri();?>/assets/images/search.svg" />
         </form>
      </div>
      <div class="avatar"><img src="<?php echo get_template_directory_uri();?>/assets/images/avatar.jpeg" alt="Avatar"></div>
   </div>
</header>