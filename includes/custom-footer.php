<?php 

function customFooter($wp_customize) {

    $wp_customize->add_section('footer', array(
        'title' => __('Footer','portfolio_v'),
        'description' => sprintf(__('Options for footer','portfolio_v')),
        'priority' => 134
    ));

    $wp_customize->add_setting('footer-background', array(
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 'footer-background', array(
            'label' => __('Change background picture','portfolio_v'),
            'section' => 'footer',
            'settings' => 'footer-background',
            'priority' => 1
        )
    ));

    $wp_customize->add_setting('footer-title', array(
        'default' => __('Let\'s Talk!','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('footer-title', array(
        'label' => __('Change a title','portfolio_v'),
        'section' => 'footer',
        'settings' => 'footer-title',
        'priority' => 2
    ));

    $wp_customize->add_setting('footer-phone-link', array(
        'default' => __('+1 800 123 456 789','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('footer-phone-link', array(
        'label' => __('Add your contact number','portfolio_v'),
        'section' => 'footer',
        'settings' => 'footer-phone-link',
        'priority' => 2
    ));

    $wp_customize->add_setting('footer-mail-link', array(
        'default' => __('portfolio2020@mail.com','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_meil',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('footer-mail-link', array(
        'label' => __('Add your email address','portfolio_v'),
        'section' => 'footer',
        'settings' => 'footer-mail-link',
        'priority' => 2
    ));

    $wp_customize->add_setting('footer-follow-link', array(
        'default' => __('https://www.behance.net/lorem','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('footer-follow-link', array(
        'label' => __('Add link to your follow account','portfolio_v'),
        'section' => 'footer',
        'settings' => 'footer-follow-link',
        'priority' => 2
    ));

    $wp_customize->add_setting('footer-follow-link-icon', array(
        'default' => __('fa fa-behance-square','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('footer-follow-link-icon', array(
        'label' => __('Add Font Awesome(v5 or above) class for icon of your custom follow account','portfolio_v'),
        'section' => 'footer',
        'settings' => 'footer-follow-link-icon',
        'priority' => 2
    ));

    $wp_customize->add_setting('hire-btn', array(
        'default' => __('Hire me','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('hire-btn', array(
        'label' => __('Button title','portfolio_v'),
        'section' => 'footer',
        'settings' => 'hire-btn',
        'priority' => 2
    ));

    $wp_customize->add_setting('hire-btn-link', array(
        'default' => __('#','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('hire-btn-link', array(
        'label' => __('Button link','portfolio_v'),
        'section' => 'footer',
        'settings' => 'hire-btn-link',
        'priority' => 2
    ));

}

add_action( 'customize_register', 'customFooter' );
