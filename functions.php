<?php

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

function understrap_setup() {
    /*
     * Enable support for Post Formats.
     * See http://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside', 'gallery', 'image', 'status', 'video', 'quote', 'link', 'audio', 'chat'
    ) );

    //add feature image capability
    add_theme_support('post-thumbnails');

    // add theme support: HTML5 markup
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // add theme support: feed links
    add_theme_support('automatic-feed-links');
} // understrap_setup
add_action( 'after_setup_theme', 'understrap_setup' );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array());
    wp_enqueue_style( 'animate-styles', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), '0.1.0', true );
    wp_enqueue_script('wow-script', get_stylesheet_directory_uri() . '/js/wow.min.js', array());
    wp_enqueue_script('animate-script', get_stylesheet_directory_uri() . '/js/animate.js', array());
}

function all_excerpts_get_more_link($post_excerpt) {

    return $post_excerpt . ' ...' . ' <p><a class="btn btn-primary understrap-read-more-link" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More...', 'child-understrap')  . '</a></p>';
}
add_filter('wp_trim_excerpt', 'all_excerpts_get_more_link');

/**
 * Modify the excerpt
 *
 */
function custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

require get_stylesheet_directory() . '/admin/admin-init.php';
require get_stylesheet_directory() . '/PostTypes/PostType.php';
require get_stylesheet_directory() . '/inc/resources.php';
require get_stylesheet_directory() . '/inc/opt-in.php';

function child_understrap_home_bottom() {
    register_sidebar( array(
        'name' => __( 'Home Bottom', 'din' ),
        'id' => 'home-bottom',
        'description' => __( 'Widgets in this area will be shown at the bottom sidebar of the homepage.', 'din' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        ) );

    register_sidebar( array(
        'name' => __( 'Sidebar Top', 'din' ),
        'id' => 'sidebar-top',
        'description' => __( 'Widgets in this area will be shown at the top sidebar.', 'din' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer One', 'din' ),
        'id' => 'footer-one',
        'description' => __( 'This is the first footer area widget area.', 'din' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Two', 'din' ),
        'id' => 'footer-two',
        'description' => __( 'This is the second footer area widget area.', 'din' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Three', 'din' ),
        'id' => 'footer-three',
        'description' => __( 'This is the third footer area widget area.', 'din' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Promo', 'din' ),
        'id' => 'promo',
        'description' => __( 'Widgets in this area will be shown at the top sidebar.', 'din' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'child_understrap_home_bottom' );


