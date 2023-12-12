<?php

/**
 * disrtbikeadventures functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package disrtbikeadventures
 */

/**
 * Script/CSS includes
 * Included in header..
 */
//function front_end_includes() {
//    $_VERSION = '1.0.1';
//
//    wp_enqueue_script('location', get_stylesheet_directory_uri() . '/js/location.js', $deps = [], $_VERSION, $in_footer = false); 
//}  add_action('wp_enqueue_scripts', 'front_end_includes');

// Enqueue Styles
function child_theme_enqueue_styles() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/dist/css/style.min.css', array(), '1.0.01'); // Use this for production
    wp_enqueue_style('tailwind-style', get_stylesheet_directory_uri() . '/dist/css/tailwind_output.min.css', array(), '1.0.01'); // Use this for production
    // wp_enqueue_style( 'child-style', get_stylesheet_uri(), array(), '3.0.25' ); //Use this only for development
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );