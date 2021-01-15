<?php 

function customNumbers($wp_customize) {

    $wp_customize->add_section('numbers', array(
        'title' => __('Numbers','portfolio_v'),
        'description' => sprintf(__('Options for numbers','portfolio_v')),
        'priority' => 134
    ));

    $wp_customize->add_setting('numbers-btn', array(
        'default' => __('yes','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
    ));
    $wp_customize->add_control('numbers-btn', array(
        'label' => __('Display a section','portfolio_v'),
        'section' => 'numbers',
        'settings' => 'numbers-btn',
        'type' => 'select',
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No'
        ),
        'priority' => 1
    ));

    $wp_customize->add_setting('numbers-background', array(
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 'numbers-background', array(
            'label' => __('Change background','portfolio_v'),
            'section' => 'numbers',
            'settings' => 'numbers-background',
            'priority' => 1
        )
    ));

    $wp_customize->add_setting('numbers-one-n', array(
        'default' => __('120','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('numbers-one-n', array(
        'label' => __('Set a number','portfolio_v'),
        'section' => 'numbers',
        'settings' => 'numbers-one-n',
        'priority' => 2
    ));

    $wp_customize->add_setting('numbers-one-t', array(
        'default' => __('Happy Clients','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('numbers-one-t', array(
        'label' => __('Set a text','portfolio_v'),
        'section' => 'numbers',
        'settings' => 'numbers-one-t',
        'priority' => 2
    ));

    $wp_customize->add_setting('numbers-two-n', array(
        'default' => __('10','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('numbers-two-n', array(
        'label' => __('Set a number','portfolio_v'),
        'section' => 'numbers',
        'settings' => 'numbers-two-n',
        'priority' => 2
    ));

    $wp_customize->add_setting('numbers-two-t', array(
        'default' => __('Years of Experience','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('numbers-two-t', array(
        'label' => __('Set a text','portfolio_v'),
        'section' => 'numbers',
        'settings' => 'numbers-two-t',
        'priority' => 2
    ));

    $wp_customize->add_setting('numbers-three-n', array(
        'default' => __('230','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('numbers-three-n', array(
        'label' => __('Set a number','portfolio_v'),
        'section' => 'numbers',
        'settings' => 'numbers-three-n',
        'priority' => 2
    ));

    $wp_customize->add_setting('numbers-three-t', array(
        'default' => __('Incredible Projects','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('numbers-three-t', array(
        'label' => __('Set a text','portfolio_v'),
        'section' => 'numbers',
        'settings' => 'numbers-three-t',
        'priority' => 2
    ));

    $wp_customize->add_setting('numbers-four-n', array(
        'default' => __('18','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('numbers-four-n', array(
        'label' => __('Set a number','portfolio_v'),
        'section' => 'numbers',
        'settings' => 'numbers-four-n',
        'priority' => 2
    ));

    $wp_customize->add_setting('numbers-four-t', array(
        'default' => __('Awards Winning','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('numbers-four-t', array(
        'label' => __('Set a text','portfolio_v'),
        'section' => 'numbers',
        'settings' => 'numbers-four-t',
        'priority' => 2
    ));

}

add_action( 'customize_register', 'customNumbers' );

?>