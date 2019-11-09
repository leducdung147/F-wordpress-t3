<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php the_post_thumbnail_url('largest');?>" class=" img-fluid" alt=""></a>
    
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
      </button>
      <?php
      wp_nav_menu( array(
        'theme_location'  => 'Home',
        'menu'            =>'Home',
        'container'       => 'div', 
        'container_class' => 'collapse navbar-collapse', 
        'container_id'    => 'navbarResponsive',
        'menu_class'      => 'navbar-nav ml-auto', 
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'list_item_class'  => 'nav-link js-scroll-trigger',
    'link_class'   => 'nav-link m-2 menu-item nav-active'
      ) );
    ?>
    </div>
 
  </nav>
  
