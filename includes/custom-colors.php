<?php

function customColors($wp_customize) {

    $wp_customize->add_section('theme-colors', array(
        'title' => __('Theme colors','portfolio_v'),
        'description' => sprintf(__('Options for theme colors','portfolio_v')),
        'priority' => 120
    ));

    $wp_customize->add_setting('primary-color', array(
        'default' => __('#1f1f1f','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_color',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 'primary-color', array(
            'label' => __('Primary color','portfolio_v'),
            'section' => 'theme-colors',
            'settings' => 'primary-color',
            'priority' => 1
        )
    ));

    $wp_customize->add_setting('secondary-color', array(
        'default' => __('#ecae1f','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_color',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 'secondary-color', array(
            'label' => __('Secondary color','portfolio_v'),
            'section' => 'theme-colors',
            'settings' => 'secondary-color',
            'priority' => 1
        )
    ));

    $wp_customize->add_setting('white-color', array(
        'default' => __('#f7f7f7','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_color',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 'white-color', array(
            'label' => __('White color','portfolio_v'),
            'section' => 'theme-colors',
            'settings' => 'white-color',
            'priority' => 1
        )
    ));

    $wp_customize->add_setting('grey-color', array(
        'default' => __('#a1a09e','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_color',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 'grey-color', array(
            'label' => __('Grey color','portfolio_v'),
            'section' => 'theme-colors',
            'settings' => 'grey-color',
            'priority' => 1
        )
    ));

    $wp_customize->add_setting('background-color', array(
        'default' => __('#f7f7f7','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_color',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 'background-color', array(
            'label' => __('Background color','portfolio_v'),
            'section' => 'theme-colors',
            'settings' => 'background-color',
            'priority' => 1
        )
    ));
}

add_action( 'customize_register', 'customColors' );

?>