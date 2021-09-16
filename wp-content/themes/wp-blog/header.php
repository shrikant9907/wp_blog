<!doctype html>
<html <?php language_attributes(); ?>>
<head> 
                
  <title><?php wp_title(); ?></title>
 
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta property="og:title" content="" />
  <meta property="og:description" content="" />

  <meta property="og:url" content="" />
  <meta property="og:image" content="" />

  <meta name="google-site-verification" content="" />
  <meta name="robots" content="noindex, nofollow" />

  <!-- Favicon -->
  <link rel='icon' href='<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png' type='image/x-icon' />
  <meta name="site-icon" content="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 


<!-- Header Start -->
<header id="main_header" class="header border-bottom">

    <!-- Header Top Start -->
    <div class="hdrtop bg-dark text-white f16">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 hdrtopleft">
                    <div class="d-flex">
                      <p class="py_5 mb_0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 hdrtopright">
                    <div class="d-flex justify-content-end">
                        <a  class="py_5" href="mailto:wpblog@example.com" target="_blank"><i class="fa fa-envelope top-icon mr_10"></i>wpblog@example.com</a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Top End -->

    <!-- Header Middle Start -->
    <div class="hdrmiddle f14 text-uppercase">
        <div class="container">
            <div class="row">
              <div class="col-12 col-md-3 align-items-center d-flex"> 
                <div class="site_logo with_image">
                  <a class="logo_link" href="<?php echo site_url('/'); ?>">
                    <?php if($logoSrc) {  ?>
                      <img class="logo_image"  src="<?php echo $logoSrc; ?>" alt="<?php bloginfo('name'); ?>" />
                    <?php } else {
                      ?>
                      <span><?php bloginfo('name'); ?></span>
                      <?php 
                    } ?>
                  </a>
                </div>
              </div>
              <div class="col-12 col-md-9">
                <nav class="navbar navbar-expand-lg">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#wb-navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'wb-navbar-collapse',
                        'menu_class'        => 'nav navbar-nav ml-auto',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                </nav>
              </div>
            </div>
          </div>
    </div>
    <!-- Header Middle End -->
 

</header>  
<!-- Header End -->
 