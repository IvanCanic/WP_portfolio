<?php

function customServices($wp_customize) {

    $wp_customize->add_section('services', array(
        'title' => __('Services','portfolio_v'),
        'description' => sprintf(__('Options for services','portfolio_v')),
        'priority' => 134
    ));

    $wp_customize->add_setting('services-btn', array(
        'default' => __('yes','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text'
    ));
    $wp_customize->add_control('services-btn', array(
        'label' => __('Display a section','portfolio_v'),
        'section' => 'services',
        'settings' => 'services-btn',
        'type' => 'select',
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No'
        ),
        'priority' => 1
    ));

    $wp_customize->add_setting('services-title', array(
        'default' => __('Services What I Can Ofer for You','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services-title', array(
        'label' => __('Add a title','portfolio_v'),
        'section' => 'services',
        'settings' => 'services-title',
        'priority' => 2
    ));

    $wp_customize->add_setting('services-subtitle', array(
        'default' => __('These are the words we live by in everything we do. Every story we tell, every brand we build and every interaction we create must not only look beautiful.','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('services-subtitle', array(
        'label' => __('Add a subtitle','portfolio_v'),
        'section' => 'services',
        'settings' => 'services-subtitle',
        'priority' => 2
    ));

}

add_action( 'customize_register', 'customServices' );

?>