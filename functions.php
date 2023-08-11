<?php
// Hooks
add_action('wp_enqueue_scripts', 'testwork_styles');
add_action('wp_enqueue_scripts', 'testwork_scripts');

function testwork_styles() {
  wp_enqueue_style( 'testwork_styles', get_stylesheet_uri() );
};

function testwork_scripts() {  
  if(is_front_page()) {
      wp_enqueue_script('testwork_scripts', get_template_directory_uri() . "/assets/js/script.js", array('jquery'), null, true);
  }
}

// add JQuery
add_action( 'init', 'true_jquery_register' );

function true_jquery_register() {
  if ( !is_admin() ) {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', ( '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' ), false, null, true );
    wp_enqueue_script( 'jquery' );
  }
}

add_theme_support('custom-logo');

add_theme_support('menus');

add_theme_support('post-thumbnails');



