<?php

function gad_corner_scripts() {
    wp_enqueue_style( 'gad-corner-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_script( 'gad-corner-carousel', get_template_directory_uri() . '/assets/js/carousel.js', array(), '1.0.0', true );
    wp_enqueue_script( 'gad-corner-dashboard', get_template_directory_uri() . '/assets/js/dashboard.js', array(), '1.0.0', true );
    wp_enqueue_script( 'gad-corner-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true );
    wp_enqueue_script( 'gad-corner-mobile', get_template_directory_uri() . '/assets/js/mobile-menu.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'gad_corner_scripts' );

function gad_corner_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'gad_corner_theme_support' );

function gad_corner_register_menus() {
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'gad-corner' ),
    ) );
}
add_action( 'init', 'gad_corner_register_menus' );

function get_gad_statistics() {
    return array(
        'total_teachers' => 145,
        'active_teachers' => 138,
        'total_students' => 2850,
        'male_count' => 1420,
        'female_count' => 1380,
        'other_count' => 50,
        'programs' => 12,
        'achievements' => 28,
    );
}

function gad_corner_custom_post_types() {
    register_post_type( 'gad_program', array(
        'labels' => array(
            'name' => 'GAD Programs',
            'singular_name' => 'GAD Program',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
    ) );
}
add_action( 'init', 'gad_corner_custom_post_types' );
