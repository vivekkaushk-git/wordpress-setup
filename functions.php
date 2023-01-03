<?php
/**
 * tgb Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tgb
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_TGB_VERSION', time() );



// FUNCTION TO ENQUEUE FILES IN CHILD THEME
require_once get_stylesheet_directory().'/includes/tgb-enqueue.php';


// FUNCTION TO ADD CUSTOM FUNCTIONALITIES IN CHILD THEME
require_once get_stylesheet_directory().'/includes/tgb-functions.php';


// FUNCTION TO ADD SHORTCODES IN CHILD THEME
require_once get_stylesheet_directory().'/includes/tgb-shortcodes.php';




