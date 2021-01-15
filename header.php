<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    /* Importing local font*/
    @font-face {
    font-family: 'Roboto Mono';
    src: url(<?php echo esc_url(get_template_directory_uri() . '/assets/css/RobotoMono-Regular.ttf') ?>) format('truetype');
    }
    @font-face {
    font-family: 'Roboto Mono';
    src: url(<?php echo esc_url(get_template_directory_uri() . '/assets/Roboto_Mono/static/RobotoMono-Bold.ttf') ?>) format('truetype');
    }

    /* Lightbox icons */
    .lb-nav a.lb-next { background: url(<?php echo esc_url(get_template_directory_uri() . '../images/next.png') ?>) right 48% no-repeat !important; }
    .lb-nav a.lb-prev { background: url(<?php echo esc_url(get_template_directory_uri() . '../images/prev.png') ?>) left 48% no-repeat !important; }
    .lb-data .lb-close { background: url(<?php echo esc_url(get_template_directory_uri() . '../images/close.png') ?>) top right no-repeat !important; }

    /*Adding options for user to change colors from customizer*/

    :root {
    --primary-color: <?php echo esc_attr(get_theme_mod('primary-color', '#1f1f1f')) ?> !important;
    --secondary-color: <?php echo esc_attr(get_theme_mod('secondary-color', '#ecae1f')) ?> !important;
    --white-color: <?php echo esc_attr(get_theme_mod('white-color', '#f7f7f7')) ?> !important;
    --grey-color: <?php echo esc_attr(get_theme_mod('grey-color','#a1a09e')) ?> !important;
    --background-color: <?php echo esc_attr(get_theme_mod('background-color', '#f7f7f7')) ?> !important;
    }

    </style>
    <?php wp_head(); 
    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
    ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
    <main>
        <nav class="main-nav">
            <?php require_once( get_template_directory() . '/includes/main-nav.php'); ?>
        </nav>
        <?php get_search_form(); ?>
        <!--Hero section-->
        <header class="hero" id="hero">
            <div class="hero-section" style="background-image: url(<?php echo esc_url(get_theme_mod('header-background')) ?>);">
                <div class="hero-left">
                    <h1><?php echo esc_html(get_theme_mod('hero-title')) ?></h1>
                    <p><?php echo esc_html(get_theme_mod('hero-subtitle')) ?></p>
                    <div class="buttons">
                        <?php if(get_theme_mod('hero-download-btn')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('hero-download-btn-link')) ?>" class="vv-btn vv-btn-secondary" download><?php echo esc_html(get_theme_mod('hero-download-btn')) ?></a>
                        <?php endif; ?>
                        <?php if(get_theme_mod('hero-hire-me-btn')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('hero-hire-me-btn-link')) ?>" class="vv-btn vv-btn-primary"><?php echo esc_html(get_theme_mod('hero-hire-me-btn')) ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="hero-right">

                </div>
            </div>
        </header>