<?php function customSkills($wp_customize) {

    $wp_customize->add_section('skills', array(
        'title' => __('Skills','portfolio_v'),
        'description' => sprintf(__('Options for skills section','portfolio_v')),
        'priority' => 133
    ));

    $wp_customize->add_setting('skills-background', array(
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'skills-background', array(
        'label' => __('Change background image','portfolio_v'),
        'section' => 'skills',
        'settings' => 'skills-background',
        'priority' => 1
    )));

    $wp_customize->add_setting('skills-title', array(
        'default' => __('What My Design Skills Included','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('skills-title', array(
        'label' => __('Change title','portfolio_v'),
        'section' => 'skills',
        'settings' => 'skills-title',
        'priority' => 2
    ));

    $wp_customize->add_setting('skills-subtitle', array(
        'default' => __('These are the words we live by in everything we do. Every story we tell, every brand we build and every interaction we create must not only look beautiful. ','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('skills-subtitle', array(
        'label' => __('Change a subtitle','portfolio_v'),
        'section' => 'skills',
        'settings' => 'skills-subtitle',
        'priority' => 2
    ));

    $wp_customize->add_setting('skill-one', array(
        'default' => __('Photoshop','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('skill-one', array(
        'label' => __('Skill name','portfolio_v'),
        'section' => 'skills',
        'settings' => 'skill-one',
        'priority' => 2
    ));

    $wp_customize->add_setting('skill-one-data', array(
        'default' => __('80','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('skill-one-data', array(
        'label' => __('Rate your skill 0-100','portfolio_v'),
        'section' => 'skills',
        'settings' => 'skill-one-data',
        'priority' => 2
    ));

    $wp_customize->add_setting('skill-two', array(
        'default' => __('Illustrator','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('skill-two', array(
        'label' => __('Skill name','portfolio_v'),
        'section' => 'skills',
        'settings' => 'skill-two',
        'priority' => 2
    ));

    $wp_customize->add_setting('skill-two-data', array(
        'default' => __('90','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('skill-two-data', array(
        'label' => __('Rate your skill 0-100','portfolio_v'),
        'section' => 'skills',
        'settings' => 'skill-two-data',
        'priority' => 2
    ));

    $wp_customize->add_setting('skill-three', array(
        'default' => __('Sketch','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('skill-three', array(
        'label' => __('Skill name','portfolio_v'),
        'section' => 'skills',
        'settings' => 'skill-three',
        'priority' => 2
    ));

    $wp_customize->add_setting('skill-three-data', array(
        'default' => __('70','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('skill-three-data', array(
        'label' => __('Rate your skill 0-100','portfolio_v'),
        'section' => 'skills',
        'settings' => 'skill-three-data',
        'priority' => 2
    ));

    $wp_customize->add_setting('skills-img-left', array(
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'skills-img-left', array(
        'label' => __('Add left mini picture','portfolio_v'),
        'section' => 'skills',
        'settings' => 'skills-img-left',
        'priority' => 2
    )));

    $wp_customize->add_setting('skills-img-right', array(
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'skills-img-right', array(
        'label' => __('Add right mini picture','portfolio_v'),
        'section' => 'skills',
        'settings' => 'skills-img-right',
        'priority' => 2
    )));

    $wp_customize->add_setting('skills-btn', array(
        'default' => __('yes','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
    ));
    $wp_customize->add_control('skills-btn', array(
        'label' => __('Display a section','portfolio_v'),
        'section' => 'skills',
        'settings' => 'skills-btn',
        'type' => 'select',
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No'
        ),
        'priority' => 1
    ));

}

add_action( 'customize_register', 'customSkills' ); ?>