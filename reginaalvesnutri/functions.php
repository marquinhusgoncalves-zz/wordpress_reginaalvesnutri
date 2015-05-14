<?php 

function reginaalvesnutri(){
	wp_enqueue_style('style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'reginaalvesnutri');

//Barra superior ADM
    add_filter('show_admin_bar', '__return_false');

//Change excerpt text
function custom_excerpt_length( $length ) {
    return 25;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
    return ' ... <hr /><a class="leia-mais btn btn-primary" href="'. get_permalink( get_the_ID() ) . '">' . __('Leia mais', ' ') . '</a>';
    }
    add_filter( 'excerpt_more', 'new_excerpt_more' );

//Adiciona menu no adm
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

//Navigation Menus
register_nav_menus(array(
    'primary' => __( 'Primary Menu' ),
    'mobile' => __( 'Mobile Menu' ),
));

//Register custom navigation walker
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

//Register widgetized area and update sidebar with default widgets
    function reginaalvesnutri_widgets_init() {
        register_sidebar( array(
            'name' => __( 'Sidebar Primary', 'reginaalvesnutri_widgets_init' ),
            'id' => 'sidebar-1',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',   
        ) );
        register_sidebar( array(
            'name' => __( 'Footer', 'reginaalvesnutri_widgets_init' ),
            'id' => 'sidebar-2',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
        
    }
    add_action( 'widgets_init', 'reginaalvesnutri_widgets_init' );    

//Catch the second image
  function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
  
    if(empty($first_img)) {
      $first_img = "/img/default.jpg";
    }
    return $first_img;
  }

//Logo Admin
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png);
            padding-bottom: 30px;
            background-size: 300px auto;
            width: 320px;
            height: 60px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

//Link Logo
function meu_wp_login_url() {
return get_bloginfo('url');
}
add_filter('login_headerurl', 'meu_wp_login_url');

//Logo Title
function meu_wp_login_title() {
return get_bloginfo('name');
}
add_filter('login_headertitle', 'meu_wp_login_title');
?>