<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'isr-custom-css', get_stylesheet_directory_uri() . '/app.css', array(), get_the_time() );
   wp_enqueue_script( 'isr-custom-js', get_stylesheet_directory_uri() . '/app.js', array(), get_the_time(), true );
}
