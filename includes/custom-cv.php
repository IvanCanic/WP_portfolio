<?php
function customCV($wp_customize) {
    $wp_customize->add_section('CV', array(
        'title' => __('CV Section','portfolio_v'),
        'description' => sprintf(__('Options for CV section','portfolio_v')),
        'priority' => 132
    ));

    $wp_customize->add_setting('cv-background', array(
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'cv-background', array(
        'label' => __('Change background image','portfolio_v'),
        'section' => 'CV',
        'settings' => 'cv-background',
        'priority' => 1
    )));

    $wp_customize->add_setting('cv-title', array(
        'default' => __('I am creative UI/UX Designer, Photographer','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('cv-title', array(
        'label' => __('Add a title','portfolio_v'),
        'section' => 'CV',
        'settings' => 'cv-title',
        'priority' => 2
    ));

    $wp_customize->add_setting('cv-experience', array(
        'default' => __('3 Years','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('cv-experience', array(
        'label' => __('Add your experience','portfolio_v'),
        'section' => 'CV',
        'settings' => 'cv-experience',
        'priority' => 2
    ));

    $wp_customize->add_setting('cv-speciality', array(
        'default' => __('UI/UX Designer, Photographer','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('cv-speciality', array(
        'label' => __('Add your speciality','portfolio_v'),
        'section' => 'CV',
        'settings' => 'cv-speciality',
        'priority' => 2
    ));

    $wp_customize->add_setting('cv-address', array(
        'default' => __('California, USA','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('cv-address', array(
        'label' => __('Add your address','portfolio_v'),
        'section' => 'CV',
        'settings' => 'cv-address',
        'priority' => 2
    ));

    $wp_customize->add_setting('cv-email', array(
        'default' => __('m.nimbus2000@mail.com','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_meil',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('cv-email', array(
        'label' => __('Add your email address','portfolio_v'),
        'section' => 'CV',
        'settings' => 'cv-email',
        'priority' => 2
    ));

    $wp_customize->add_setting('cv-phone', array(
        'default' => __('+1 800 123 456 789','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('cv-phone', array(
        'label' => __('Add your phone number','portfolio_v'),
        'section' => 'CV',
        'settings' => 'cv-phone',
        'priority' => 2
    ));

    $wp_customize->add_setting('cv-freelance', array(
        'default' => __('Available','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('cv-freelance', array(
        'label' => __('Add your freelance status','portfolio_v'),
        'section' => 'CV',
        'settings' => 'cv-freelance',
        'priority' => 2
    ));

    $wp_customize->add_setting('cv-button', array(
        'default' => __('All Projects','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('cv-button', array(
        'label' => __('Add a title for your button','portfolio_v'),
        'section' => 'CV',
        'settings' => 'cv-button',
        'priority' => 2
    ));

    $wp_customize->add_setting('cv-button-link', array(
        'default' => __('https://www.google.com','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('cv-button-link', array(
        'label' => __('Add a link for your button','portfolio_v'),
        'section' => 'CV',
        'settings' => 'cv-button-link',
        'priority' => 2
    ));

    $wp_customize->add_setting('cv-img', array(
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cv-img', array(
        'label' => __('Change your middle image','portfolio_v'),
        'section' => 'CV',
        'settings' => 'cv-img',
        'priority' => 2
    )));
}

add_action( 'customize_register', 'customCV' ); ?>