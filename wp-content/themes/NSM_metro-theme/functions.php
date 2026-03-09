<?php

// Lecture: functions.php is the main file for theme functions and features.
// It loads on every request and is where we add theme features.
function nm_metro_setup() {

    // : title-tag lets WP handle <title> dynamically.
    add_theme_support('title-tag');

    // : post-thumbnails enable featured images.
    add_theme_support('post-thumbnails');

    // : custom-logo allows branding in header.php.
    add_theme_support('custom-logo');

    // Register the main nav location I keep referencing in header.php.
    register_nav_menus(array(
        'main-menu' => 'Main Navigation'
    ));
}
add_action('after_setup_theme', 'nm_metro_setup');


// : wp_enqueue_style() is the correct way to load CSS so i can see it on goodname.local
function nm_metro_scripts() {
    wp_enqueue_style('nm-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'nm_metro_scripts');
