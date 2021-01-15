<div class="nav-brand">
    <?php if(function_exists('the_custom_logo')) {
        the_custom_logo();
    } ?>

    <ul>
        <?php if(get_bloginfo('name')) : ?>
        <li><?php esc_html(bloginfo('name')) ?></li>
        <?php endif; ?>
        <?php if(get_bloginfo('description')) : ?>
        <li class="orange"><?php esc_html(bloginfo('description')) ?></li>
        <?php endif; ?>
    </ul>
</div>
           
    <?php 
        wp_nav_menu( array(
            'menu'                 => '',
            'container'            => '',
            'container_class'      => '',
            'container_id'         => '',
            'container_aria_label' => '',
            'menu_class'           => 'nav-menu',
            'menu_id'              => '',
            'echo'                 => true,
            'fallback_cb'          => 'wp_page_menu',
            'before'               => '',
            'after'                => '',
            'link_before'          => '',
            'link_after'           => '',
            'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'item_spacing'         => 'preserve',
            'depth'                => 0,
            'walker'               => '',
            'theme_location'       => 'primary_menu',
        ) )
    ?>

<div class="nav-toggle"><i class="fas fa-bars" aria-hidden="true"></i></div>
<div class="nav-social">
    <?php if(get_theme_mod('social-twitter')) : ?>
    <a href="<?php echo esc_url(get_theme_mod('social-twitter')) ?>"><i class="fab fa-twitter"></i></a>
    <?php endif; ?>

    <?php if(get_theme_mod('social-facebook')) : ?>
    <a href="<?php echo esc_url(get_theme_mod('social-facebook')) ?>"><i class="fab fa-facebook-f"></i></a>
    <?php endif; ?>

    <?php if(get_theme_mod('social-instagram')) : ?>
    <a href="<?php echo esc_url(get_theme_mod('social-instagram')) ?>"><i class="fab fa-instagram"></i></a>
    <?php endif; ?>

    <?php if(get_theme_mod('social-youtube')) : ?>
    <a href="<?php echo esc_url(get_theme_mod('social-youtube')) ?>"><i class="fab fa-youtube"></i></a>
    <?php endif; ?>

    <?php if(get_theme_mod('social-github')) : ?>
    <a href="<?php echo esc_url(get_theme_mod('social-github')) ?>"><i class="fab fa-github"></i></a>
    <?php endif; ?>

    <?php if(get_theme_mod('social-linkedin')) : ?>
    <a href="<?php echo esc_url(get_theme_mod('social-linkedin')) ?>"><i class="fab fa-linkedin"></i></a>
    <?php endif; ?>

    <span id="search-modal"><i class="fas fa-search"></i></span>
</div>