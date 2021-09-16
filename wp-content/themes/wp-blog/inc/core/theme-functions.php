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
add_action( 'widgets_init', 'wb_register_sidebars',10, 0 ); 
  
/*
* Add Themes Stylesheets
*/
function wb_theme_styles() {
    $version = date('timestamp');
    $stylediruri = get_stylesheet_directory_uri();
    
    ?>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <?php 
    wp_enqueue_style( 'lato-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap', array(), false);
    wp_enqueue_style( 'opensans-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap', array(), false);
    
    // Theme Stylesheets
    wp_enqueue_style( 'fontawesome-css', $stylediruri.'/css/all.min.css', array(), false);
    wp_enqueue_style( 'bootstrap-css', $stylediruri.'/css/bootstrap.min.css', array(), false);
    wp_enqueue_style( 'components-css', $stylediruri.'/css/components.css', array(), false);
    wp_enqueue_style( 'utils-css', $stylediruri.'/css/utils.css', array(), false);
    wp_enqueue_style( 'style-css', $stylediruri.'/css/style.css', array(), $version);
    wp_enqueue_style( 'responsive-css', $stylediruri.'/css/responsive.css', array(), $version );
} 
add_action( 'wp_head', 'wb_theme_styles' , 1 );  


/*
* Add Themes Scripts 
*/
function wb_theme_scripts() {
    $version = date('timestamp');
    $stylediruri = get_stylesheet_directory_uri();
                  
    wp_enqueue_script('jquery'); 
    wp_enqueue_script( 'fontawesome-script', $stylediruri.'/js/all.min.js', array( 'jquery'), false );
    wp_enqueue_script( 'bootstrap-script', $stylediruri.'/js/bootstrap.min.js', array( 'jquery'), false );
    wp_enqueue_script( 'custom-script', $stylediruri.'/js/custom.js', array( 'jquery'), $version ,true );
     
} 
add_action( 'wp_enqueue_scripts', 'wb_theme_scripts');  


/* 
* Insert Default Pages For Blog
*/
add_action('init', 'insertDefaultPages');
function insertDefaultPages() {

    $pages = array (
        'Landing',
        'About Us',
        'Blog',
        'Contact Us',
        'Sitemap',
        'Privacy Policy',
        'Terms and conditions',
       );
    if ($pages) {
  
      update_option('show_on_front', 'page'); 
  
      foreach($pages as $page) {
          $pageData = get_page_by_title( $page );
          if (!$pageData) {
  
            // Create new page
            $my_post = array(
              'post_title'    => wp_strip_all_tags( $page ),
              'post_content'  => '',
              'post_status'   => 'publish',
              'post_type'     => 'page',
            );
             
            // Insert page in Database
            wp_insert_post( $my_post );
  
          } else {
  
            // Front Page / Landing Page
            if ($page == 'Landing') {
              update_option('page_on_front', $pageData->ID);   
            }
  
            // Blog Page
            if ($page == 'Blog') {
              update_option('page_for_posts', $pageData->ID ); 
            }
          }
      }
    }
  }
