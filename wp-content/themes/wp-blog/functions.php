<?php 
/*
* Theme Core Functionality
*/
include_once 'inc/core/theme-functions.php';

/*
* Theme additional features
*/ 
include_once 'inc/shortcodes/theme-shortcodes.php'; 
include_once 'inc/post-types/theme-posttypes.php'; 
include_once 'inc/settings/theme-settings.php'; 
include_once 'inc/wp-bootstrap-navwalker.php'; 

/*
 * Admin Bar Hide
 */
// add_filter('show_admin_bar', '__return_false');

/* 
 * Auto Update Plugins 
 */
// add_filter( 'auto_update_plugin', '__return_false' );  