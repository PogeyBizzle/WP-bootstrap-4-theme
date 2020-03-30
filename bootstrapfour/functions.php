<?php

//////////////////////////////////////////////////////////////////////////////
///  Load Bootstrap 4 CSS and Javascript
function bootstrapfour_scripts(){
    // Theme stylesheet
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', false, '4.4.1', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', false, '1.0', 'all');
    // Theme Javascript
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '4.4.1', true );
    wp_enqueue_script('bootstrap-bundle-script', get_template_directory_uri() . '/js/bootstrap.bundle.js', array('jquery'), '4.4.1', true );
}

add_action('wp_enqueue_scripts', 'bootstrapfour_scripts');

////////////////////////////////////////////////////////////////////////////////
/// Register Nav Walker
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/////////////////////////////////////////////////////////////////////////////////
///  Register Menu

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);
function add_classes_on_li($classes, $item, $args)
{
    $classes[] = 'nav-item';

    return $classes;
}

add_filter('wp_nav_menu', 'add_classes_on_a');
function add_classes_on_a($ulclass)
{
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}

/////////////////////////////////////////////////////////////////////////////////
/// Register Sidebar
///
if ( function_exists('register_sidebar') ) {

    register_sidebar( array(
        'name' => __( 'Sidebar' ),
        'id' => 'sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="">',
        'after_title' => '</h3>',
    ));

    register_sidebar( array(
        'name' => __( 'Footer One' ),
        'id' => 'Footer one',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="">',
        'after_title' => '</h3>',
    ));

    register_sidebar( array(
        'name' => __( 'Footer Two' ),
        'id' => 'Footer Two',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="">',
        'after_title' => '</h3>',
    ));

    register_sidebar( array(
        'name' => __( 'Footer Three' ),
        'id' => 'Footer Three',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="">',
        'after_title' => '</h3>',
    ));
}



//////////////////////////////////////////////////////////////////////////////////
/// Add theme support

function theme_setup(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comme/**
nt-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    /** custom background **/
    $bg_defaults = array(
        'default-image'          => '',
        'default-preset'         => 'default',
        'default-size'           => 'cover',
        'default-repeat'         => 'no-repeat',
        'default-attachment'     => 'scroll',
    );
    add_theme_support( 'custom-background', $bg_defaults );

    /** custom header **/
    $header_defaults = array(
        'default-image'          => '',
        'width'                  => 300,
        'height'                 => 60,
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
    );
    add_theme_support( 'custom-header', $header_defaults );

    /** custom log **/
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );



}
add_action('after_setup_theme','theme_setup');