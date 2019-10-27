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