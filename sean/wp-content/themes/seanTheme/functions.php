<?php 
//This is to load in the stylesheets and scripts
//This is pretty crappy code. My first theme. If you come across this, don't use it as an example.
function enqueue_customtheme_styles() {
    //loading Bootstrap 4 - This is in alpha
    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery') ); //loading bootstrap js file. Make sure you have the last parameter to load wordpress's jquery
    wp_enqueue_script( 'tether-js' , '//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js' ); //loading tether.js for bootstrap 4
    wp_enqueue_script( 'menu-hack' , '//mattpr.info/sean/navhack.js', $in_footer = true); //loading custom js
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'); //loading bootstrap from a CDN
    wp_enqueue_style('customtheme-style', get_stylesheet_uri() ); //loading my styles after bootstrap so they override
}

add_action('wp_enqueue_scripts', 'enqueue_customtheme_styles');

//Setup dynamic navigation
function customtheme_setup() {
    register_nav_menus( array(
            'primary'=> __('Primary Menu', 'customtheme')
        ));
        
    //Add theme support for document title tag
    add_theme_support ( 'title-tag' );
    
}

//add custom nav classes
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
    $classes[] = 'nav-item';
    return $classes;
}


add_action('after_setup_theme', 'customtheme_setup');
//Add gallery image post type
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'gallery_image',
    array(
      'labels' => array(
        'name' => __( 'Gallery Images' ),
        'singular_name' => __( 'Gallery Image' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

//Register sidebar
function customtheme_widgets() {
    register_sidebar(array (
        'name'          => __('Sidebar', 'customtheme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in the sidebar','customtheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ) );
}

add_action('widgets_init', 'customtheme_widgets');
?>