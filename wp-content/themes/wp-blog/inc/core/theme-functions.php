<?php 
/*
* It will enable the thumbnail support for posts.
*/ 
add_theme_support( 'post-thumbnails' );

/*  
* Register Navigation Menu
*/
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'wp-blog' ),
) );


/*
* Register Sidebars
*/ 
function wb_register_sidebars() { 
    register_sidebar( array(
      'name'          => __( 'Right Sidebar', 'wp-blog' ),
      'description'   => 'It will display on the right side of blog listing and blog details page.',
      'id'            => 'right-sidebar',
      'before_widget' => '<div id="%1$s" class="card wb-card %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="card-header wb-chead">',
      'after_title'   => '</h3>',
    ));   
  }  
add_action( 'widgets_init', 'wp_blog_register_sidebars',10, 0 ); 
  