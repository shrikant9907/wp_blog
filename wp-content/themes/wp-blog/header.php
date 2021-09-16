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
