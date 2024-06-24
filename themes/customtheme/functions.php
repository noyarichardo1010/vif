<?php

function theme_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function add_custom_scripts() {
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'add_custom_scripts');

?>