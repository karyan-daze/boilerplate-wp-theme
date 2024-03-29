<?php
/**
 * understrap enqueue scripts
 *
 * @package understrap
 */

function understrap_scripts() {
    wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), '0.4.7');
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array(), '2.1.5', true );

    wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), '0.4.7', true );
    wp_enqueue_script( 'momentjs', '//cdn.jsdelivr.net/momentjs/latest/moment.min.js', array(), '1', true );
    wp_enqueue_script( 'daterangepickerjs', '//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js', array(), '2', true );
    wp_enqueue_style( 'daterangepickercss', '//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css', array(), '2');
    wp_enqueue_style( 'fancyboxcss', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), '2.1.5');




    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

/** 
*Loading slider script conditionally
**/

if ( is_active_sidebar( 'hero' ) ):
add_action("wp_enqueue_scripts","understrap_slider");
  
function understrap_slider(){
    if ( is_front_page() ) {    
    $data = array(
        "timeout"=> intval( get_theme_mod( 'understrap_theme_slider_time_setting', 5000 )),
        "items"=> intval( get_theme_mod( 'understrap_theme_slider_count_setting', 1 ))
    	);

    wp_enqueue_script("understrap-slider-script", get_stylesheet_directory_uri() . '/js/slider_settings.js', array(), '0.4.7');
    wp_localize_script( "understrap-slider-script", "understrap_slider_variables", $data );
    }
}
endif;

