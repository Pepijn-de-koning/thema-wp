<?php

  function laadStijlblad() {
    wp_enqueue_style( 'stijl', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), 1.1, true );
  }

  add_action('init', 'laadStijlblad');

  //menu registreren
  function registreer_menu() {
    $argumenten = array (
      'hoofd-menu' => __('Hoofd menu')
    );

    register_nav_menus($argumenten);

  }
  add_action('init', 'registreer_menu');

  /**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//widgets

function registreer_widgets() {
  register_sidebar(
    array(
      'id' => 'aside',
      'name' => __( 'Widget aside'),
      'description' => __( 'Widget voor side element' ),
      'before_widget' => '<div class="widget-aside">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-titel">',
      'after_title' => '</h3>',

    )
  );
  register_sidebar(
    array(
      'id' => 'onder',
      'name' => __( 'Widget footer'),
      'description' => __( 'Widget voor de footer' ),
      'before_widget' => '<div class="widget-footer">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-footer">',
      'after_title' => '</h3>',

    )
  );
}
add_action( 'init', 'registreer_widgets' )


?>
