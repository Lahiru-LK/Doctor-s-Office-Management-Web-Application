<?php
add_action( 'wp_enqueue_scripts', 'kivicare_enqueue_styles' ,99);

function kivicare_enqueue_styles() {
    $parent_style = 'parent-style'; // This is 'kivicare-style' for the kivicare theme.
    wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css'); 
    wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css');
}

function kivicare_child_theme_setup() {
    load_child_theme_textdomain( 'kivicare', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'kivicare_child_theme_setup' );
?>