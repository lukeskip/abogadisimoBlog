<?php

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
// ENDS: TEMPLATE SUPPORT
function jess_enqueue() {

    wp_enqueue_style( 'foundation', get_stylesheet_directory_uri() . '/css/foundation.min.css' );
    wp_enqueue_style( 'hamburguers', get_stylesheet_directory_uri() . '/css/hamburgers.min.css' );
    wp_enqueue_style( 'app', get_stylesheet_directory_uri() . '/css/app.css' );
    wp_enqueue_script( 'foundation', get_stylesheet_directory_uri() . '/js/vendor/foundation.js', array('jquery') );
    wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/js/app.js', array('jquery') );
	
}
add_action('wp_enqueue_scripts', 'jess_enqueue');

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}



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
