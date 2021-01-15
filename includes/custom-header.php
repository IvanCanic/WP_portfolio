<?php 

function customHeader($wp_customize){
    $wp_customize->add_section('Header', array(
        'title' => __('Header','portfolio_v'),
        'description' => sprintf(__('Options for header section', 'portfolio_v')),
        'priority' => 130
    ));

    $wp_customize->add_setting('header-background', array(
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header-background', array(
        'label' => __('Add header background image','portfolio_v'),
        'section' => 'Header',
        'settings' => 'header-background',
        'priority' => 1
    )));

    $wp_customize->add_setting('hero-title', array(
        'default' => __('I m Mina Nimbus - UI/UX Designer','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('hero-title', array(
        'label' => __('Change title', 'portfolio_v'),
        'section' => 'Header',
        'settings' => 'hero-title',
        'priority' => 2
    ));

    $wp_customize->add_setting('hero-subtitle', array(
        'default' => __('Product Designer and Digital Creative Director working in design field for 13 years so far, specialized in UI/UX, Branding and digital designs.','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('hero-subtitle', array(
        'label' => __('Change subtitle', 'portfolio_v'),
        'section' => 'Header',
        'settings' => 'hero-subtitle',
        'priority' => 2
    ));

    $wp_customize->add_setting('hero-download-btn', array(
        'default' => __('Download CV','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('hero-download-btn', array(
        'label' => __('Title for your download button', 'portfolio_v'),
        'section' => 'Header',
        'settings' => 'hero-download-btn',
        'priority' => 2
    ));

    $wp_customize->add_setting('hero-download-btn-link', array(
        'default' => __('Enter your link','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('hero-download-btn-link', array(
        'label' => __('URL link for your download button', 'portfolio_v'),
        'section' => 'Header',
        'settings' => 'hero-download-btn-link',
        'priority' => 2
    ));

    $wp_customize->add_setting('hero-hire-me-btn', array(
        'default' => __('Hire Me Now','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_text',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('hero-hire-me-btn', array(
        'label' => __('Name for your hire me button', 'portfolio_v'),
        'section' => 'Header',
        'settings' => 'hero-hire-me-btn',
        'priority' => 2
    ));

    $wp_customize->add_setting('hero-hire-me-btn-link', array(
        'default' => __('Add a link to your hire me button','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('hero-hire-me-btn-link', array(
        'label' => __('URL link for your hire me button', 'portfolio_v'),
        'section' => 'Header',
        'settings' => 'hero-hire-me-btn-link',
        'priority' => 2
    ));

    $wp_customize->add_setting('social-facebook', array(
        'default' => __('https://www.facebook.com/','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('social-facebook', array(
        'label' => __('Add your facebook url','portfolio_v'),
        'section' => 'Header',
        'settings' => 'social-facebook',
        'priority' => 2
    ));

    $wp_customize->add_setting('social-twitter', array(
        'default' => __('https://twitter.com/','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('social-twitter', array(
        'label' => __('Add your twitter url','portfolio_v'),
        'section' => 'Header',
        'settings' => 'social-twitter',
        'priority' => 2
    ));

    $wp_customize->add_setting('social-instagram', array(
        'default' => __('https://www.instagram.com/','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('social-instagram', array(
        'label' => __('Add your instagram url','portfolio_v'),
        'section' => 'Header',
        'settings' => 'social-instagram',
        'priority' => 2
    ));

    $wp_customize->add_setting('social-youtube', array(
        'default' => __('https://www.youtube.com/','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('social-youtube', array(
        'label' => __('Add your youtube url','portfolio_v'),
        'section' => 'Header',
        'settings' => 'social-youtube',
        'priority' => 2
    ));

    $wp_customize->add_setting('social-github', array(
        'default' => __('https://github.com/','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('social-github', array(
        'label' => __('Add your github url','portfolio_v'),
        'section' => 'Header',
        'settings' => 'social-github',
        'priority' => 2
    ));

    $wp_customize->add_setting('social-linkedin', array(
        'default' => __('https://www.linkedin.com/','portfolio_v'),
        'sanitize_callback' => 'foot_sanitize_url',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('social-linkedin', array(
        'label' => __('Add your linkedin url','portfolio_v'),
        'section' => 'Header',
        'settings' => 'social-linkedin',
        'priority' => 2
    ));

}

add_action('customize_register', 'customHeader');

?>