<?php

define("THEME_DIR", get_template_directory_uri());


// Remover generator meta tag
remove_action('wp_head', 'wp_generator');

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );


/*  Menus
----------------------------------------------------------------------------*/

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



/*  Images 
----------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );



/*  Body class (page slug)
----------------------------------------------------------------------------*/
add_filter( 'body_class', 'sp_body_class' );
function sp_body_class( $classes ) {

    if ( !is_front_page() )
        $classes[] = 'sub';
        return $classes;

}

function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] =  $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );


/*  Gravity forms
----------------------------------------------------------------------------*/

// Remove confirmation anchor (page jump)
add_filter( 'gform_confirmation_anchor', '__return_false' );



/*  Stylesheets
----------------------------------------------------------------------------*/
function enqueue_styles() {

    // Google fonts
    wp_register_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700', array(), '1', 'all' );
    wp_enqueue_style( 'googlefonts' );

    // Font awesome
    wp_register_style( 'fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array(), '1', 'all' );
    wp_enqueue_style( 'fontawesome' );
     
    // Foundation
    wp_register_style( 'foundation', THEME_DIR . '/css/foundation.min.css', array(), '1', 'all' );
    wp_enqueue_style( 'foundation' );

    // Main styles
    wp_register_style( 'main', THEME_DIR . '/css/main.css', array(), '1', 'all' );
    wp_enqueue_style( 'main' );

    // Custom styles
    wp_register_style( 'style', THEME_DIR . '/style.css', array(), '1', 'all' );
    wp_enqueue_style( 'style' );

    
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );


     
/*  Scripts
----------------------------------------------------------------------------*/ 
function enqueue_scripts() {
         
    // Modernizr
    wp_register_script( 'modernizr', THEME_DIR . '/js/modernizr.foundation.js', false, '1', false );
    wp_enqueue_script( 'modernizr' );

    // Typekit
    wp_register_script( 'typekit', '//use.typekit.net/jlj3afl.js', false, '1', false );
    wp_enqueue_script( 'typekit' );

    // Foundation
    wp_register_script( 'foundation-js', THEME_DIR . '/js/foundation.min.js', false, '1', true );
    wp_enqueue_script( 'foundation-js' );

     // Global scripts
    wp_register_script( 'scripts', THEME_DIR . '/js/scripts.js', false, '1', true );
    wp_enqueue_script( 'scripts' );

    // Vide (video background)
    wp_register_script( 'video', THEME_DIR . '/js/jquery.vide.min.js', false, '1', true );
    wp_enqueue_script( 'video' );

    // Magnific Popup
    wp_register_script( 'magnific', THEME_DIR . '/js/jquery.magnific-popup.min.js', false, '1', true );
    wp_enqueue_script( 'magnific' );


}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function typekit_load() {
    if ( wp_script_is( 'typekit', 'done' ) ) { ?>
      <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <?php }
}
add_action( 'wp_head', 'typekit_load' );


?>