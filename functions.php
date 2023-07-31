<?php

function stopper_assets() {

	wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.min.css');
    // wp_deregister_script( 'jquery' )
    // wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.0.min.js', false, null, 'footer');
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);

}

add_action( 'wp_enqueue_scripts', 'stopper_assets' );

show_admin_bar(true);

add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails'. array('about') );
add_theme_support( 'post-thumbnails'. array('contacts') );
add_theme_support( 'post-thumbnails'. array('faq') );
add_theme_support( 'post-thumbnails'. array('catalog') );