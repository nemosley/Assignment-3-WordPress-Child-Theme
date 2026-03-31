<?php

function nsm_child_enqueue_styles() {

    // parent style
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // child style (loads after parent)
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array('parent-style')
    );
}
add_action('wp_enqueue_scripts', 'nsm_child_enqueue_styles');

function nsm_child_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'nsm_child_excerpt_length');