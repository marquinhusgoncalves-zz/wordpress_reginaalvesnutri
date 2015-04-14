<?php 

function reginaalvesnutri(){
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'reginaalvesnutri');

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu' ),
	'mobile' => __( 'Mobile Menu' ),
));

// Barra superior ADM
add_filter('show_admin_bar', '__return_false');

//Total de palavras
function custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Theme setup
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

// Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

//JS
    add_filter('show_admin_bar', '__return_false');
    function wpt_register_js() {
        wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
        wp_enqueue_script('jquery.bootstrap.min');
    }
    add_action( 'init', 'wpt_register_js' );

//CSS
    function wpt_register_css() {
        wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'bootstrap.min' );
    }
    add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

 ?>