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