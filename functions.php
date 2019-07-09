<?php

function abogaisimo_enqueue() {

    wp_enqueue_style( 'foundation', get_stylesheet_directory_uri() . '/css/foundation.min.css' );
    wp_enqueue_style( 'hamburguers', get_stylesheet_directory_uri() . '/css/hamburgers.min.css' );
    wp_enqueue_style( 'app', get_stylesheet_directory_uri() . '/css/app.css' );
    wp_enqueue_script( 'foundation', get_stylesheet_directory_uri() . '/js/vendor/foundation.js', array('jquery') );
    wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/js/app.js', array('jquery') );
	
}
add_action('wp_enqueue_scripts', 'abogaisimo_enqueue');

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}



function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Otro Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// QUITAMOS ETIQUETAS DE ARCHIVE TITLE
function my_theme_archive_title( $title ) {
  if ( is_category() ) {
      $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
      $title = single_tag_title( '', false );
  } elseif ( is_author() ) {
      $title = '<span class="vcard">' . get_the_author() . '</span>';
  } elseif ( is_post_type_archive() ) {
      $title = post_type_archive_title( '', false );
  } elseif ( is_tax() ) {
      $title = single_term_title( '', false );
  }
  return $title;
}
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

// STARTS: OPTIONS PAGE ///////////////////////////////////////////////
add_action('admin_menu', 'add_global_custom_options');

function global_custom_options(){
	get_template_part( 'includes/options-page');
};


function add_global_custom_options()
{
	add_options_page('Ajustes Jessica Cosmetics', 'Ajustes de Jessica Cosmetics', 'manage_options', 'functions','global_custom_options');
}

//ENDS: OPTION PAGE
