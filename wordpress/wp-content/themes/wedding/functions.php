<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');

register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar-1',
    'description' => 'Khu vực sidebar hiển thị dưới mỗi bài viết',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));
 // register the nav
 function register_my_menu() {
  register_nav_menu('Home',__( 'Home' ));
 }
 add_action( 'init', 'register_my_menu' );



// let's add our custom class to the actual link tag    

function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'Home') {
    $classes[] = 'hehe';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link js-scroll-trigger"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');