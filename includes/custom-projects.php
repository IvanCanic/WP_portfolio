<?php 

function customProjects($wp_customize) {

    $wp_customize->add_section('projects', array(
        'title' => __('Projects','portfolio_v'),
        'description' => sprintf(__('Options for projects','portfolio_v')),
        'priority' => 134
    ));

    $wp_customize->add_setting('projects-btn', array(
        'default' => __('yes','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
    ));
    $wp_customize->add_control('projects-btn', array(
        'label' => __('Display a section','portfolio_v'),
        'section' => 'projects',
        'settings' => 'projects-btn',
        'type' => 'select',
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No'
        ),
        'priority' => 1
    ));

    $wp_customize->add_setting('projects-title', array(
        'default' => __('Introduce My Projects','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('projects-title', array(
        'label' => __('Add a title','portfolio_v'),
        'section' => 'projects',
        'settings' => 'projects-title',
        'priority' => 2
    ));

    $wp_customize->add_setting('projects-subtitle', array(
        'default' => __('Product Designer and Digital Creative Director working in design field for 13 years so far, 
        specialized in UI/UX, Branding and digital designs.
        These are the words we live by in everthing we do.','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('projects-subtitle', array(
        'label' => __('Add a subtitle','portfolio_v'),
        'section' => 'projects',
        'settings' => 'projects-subtitle',
        'priority' => 2
    ));

    $wp_customize->add_setting('projects-cat-one', array(
        'default' => __('Branding','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('projects-cat-one', array(
        'label' => __('Add a name for your category. (Be aware this name need to match category of your project picture)','portfolio_v'),
        'section' => 'projects',
        'settings' => 'projects-cat-one',
        'priority' => 2
    ));

    $wp_customize->add_setting('projects-cat-two', array(
        'default' => __('Packaging','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('projects-cat-two', array(
        'label' => __('Add a name for your category. (Be aware this name need to match category of your project picture)','portfolio_v'),
        'section' => 'projects',
        'settings' => 'projects-cat-two',
        'priority' => 2
    ));

    $wp_customize->add_setting('projects-cat-three', array(
        'default' => __('Photography','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('projects-cat-three', array(
        'label' => __('Add a name for your category. (Be aware this name need to match category of your project picture)','portfolio_v'),
        'section' => 'projects',
        'settings' => 'projects-cat-three',
        'priority' => 2
    ));

    $wp_customize->add_setting('projects-cat-four', array(
        'default' => __('Web','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('projects-cat-four', array(
        'label' => __('Add a name for your category. (Be aware this name need to match category of your project picture)','portfolio_v'),
        'section' => 'projects',
        'settings' => 'projects-cat-four',
        'priority' => 2
    ));
}

add_action( 'customize_register', 'customProjects' );

?>