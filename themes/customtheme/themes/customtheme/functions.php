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


function vifx_theme_setup() {
    // Add support for Elementor
    add_theme_support('elementor');
}
add_action('after_setup_theme', 'vifx_theme_setup');

function vifx_theme_register_elementor_locations( $elementor_theme_manager ) {
    $elementor_theme_manager->register_all_core_location();
}
add_action('elementor/theme/register_locations', 'vifx_theme_register_elementor_locations');

/** new code for new theme base (below) */

// function your_theme_setup() {
//     // Tambahkan dukungan untuk title tag
//     add_theme_support( 'title-tag' );

//     // Tambahkan dukungan untuk gambar unggulan
//     add_theme_support( 'post-thumbnails' );

//     // Registrasi menu navigasi
//     register_nav_menus( array(
//         'primary' => __( 'Primary Menu', 'your-theme' ),
//     ) );
// }
// add_action( 'after_setup_theme', 'your_theme_setup' );

// function your_theme_scripts() {
//     // Enqueue style utama
//     wp_enqueue_style( 'your-theme-style', get_stylesheet_uri() );

//     // Enqueue script utama
//     wp_enqueue_script( 'your-theme-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
// }
// add_action( 'wp_enqueue_scripts', 'your_theme_scripts' );
?>