<?php 

function vv_scripts() {

    //Css

    wp_enqueue_style('mainStyle', get_stylesheet_uri());

    wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/css/lightbox.css', '');

    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/all.css', '' );

    wp_enqueue_style('mainCss', get_template_directory_uri() . '/assets/css/main.css' , '', 1.000005, 'all' );

    //JS

    wp_enqueue_script( 'jquery3', get_template_directory_uri() . '/assets/js/jquery-3.3.1.js', '', false, true );

    wp_enqueue_script('lightboxJS', get_template_directory_uri() . '/assets/js/lightbox.js', '', false, true );

    wp_enqueue_script('mainJs', get_template_directory_uri() . '/assets/js/main.js', '', false, true);
}

add_action('wp_enqueue_scripts', 'vv_scripts');

// Adding menu, thumbnails and logo

function littleStaff() {

    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary_menu' => __('Primary Menu', 'portfolio_v')
    ));

    if ( ! isset( $content_width ) ) $content_width = 900;

}

add_action('after_setup_theme', 'littleStaff');

//Create customizer section for header
require_once( get_template_directory() . '/includes/custom-header.php');

// Adding theme settings for CV section
require_once( __DIR__ . '/includes/custom-cv.php');

// Adding theme settings for skills section
require_once( get_template_directory() . '/includes/custom-skills.php');

// Adding theme settings for theme colors
require_once( get_template_directory() . '/includes/custom-colors.php');

// Adding theme settings for Testimonial section
function customTestimonials($wp_customize) {
    $wp_customize->add_section('testimonials', array(
        'title' => __('Testimonials','portfolio_v'),
        'description' => sprintf(__('Options for testimonials section','portfolio_v')),
        'priority' => 133
    ));

    $wp_customize->add_setting('testimonial-btn', array(
        'default' => __('yes','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
    ));
    $wp_customize->add_control('testimonial-btn', array(
        'label' => __('Display a section','portfolio_v'),
        'section' => 'testimonials',
        'settings' => 'testimonial-btn',
        'type' => 'select',
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No'
        ),
        'priority' => 1
    ));
}

add_action( 'customize_register', 'customTestimonials' );

// Adding theme settings for Testimonial section
require_once( get_template_directory() . '/includes/custom-numbers.php');

// Adding theme settings for Services section
require_once( get_template_directory() . '/includes/custom-services.php');

//Create customizer section for footer
require_once( get_template_directory() . '/includes/custom-footer.php');

//Create customizer section for projects
require_once( get_template_directory() . '/includes/custom-projects.php');


//Sanitization for customizer

function foot_sanitize_text($ar) {

    return sanitize_text_field( $ar );
    
}

function foot_sanitize_meil($ar) {

    return sanitize_email($ar);
    
}

function foot_sanitize_url($ar) {

    return esc_url($ar) ;
    
}

function foot_sanitize_color($ar) {

    return sanitize_hex_color( $ar );
}