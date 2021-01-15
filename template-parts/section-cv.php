<section id="cv" style="background-image: url(<?php echo esc_url(get_theme_mod('cv-background')) ?>);">
    <div>
        <h2><?php echo esc_html(get_theme_mod('cv-title')) ?></h2>

        <?php if(get_theme_mod('cv-button')) : ?>
        <a href="<?php echo esc_url(get_theme_mod('cv-button-link')) ?>" class="vv-btn vv-btn-secondary"><?php echo esc_html(get_theme_mod('cv-button')) ?></a>
        <?php endif; ?>

    </div>
    <div>
        <div class="bg-circle" style="background-image: url(<?php echo esc_url(get_theme_mod('cv-img')) ?>);">
        </div>
    </div>
    <div>
        <ul>
            <?php if(get_theme_mod('cv-experience')) : ?>
            <li><?php _e('Experience:','portfolio_v') ?> <span><?php echo esc_html(get_theme_mod('cv-experience')) ?></span></li>
            <?php endif; ?>

            <?php if(get_theme_mod('cv-speciality')) : ?>
            <li><?php _e('Speciality:','portfolio_v') ?> <span><?php echo esc_html(get_theme_mod('cv-speciality')) ?></span></li>
            <?php endif; ?>

            <?php if(get_theme_mod('cv-address')) : ?>
            <li><?php _e('Address:','portfolio_v') ?> <span><?php echo esc_html(get_theme_mod('cv-address')) ?></span></li>
            <?php endif; ?>

            <?php if(get_theme_mod('cv-email')) : ?>
            <li><?php _e('Email:','portfolio_v') ?> <span><?php echo esc_html(get_theme_mod('cv-email')) ?></span></li>
            <?php endif; ?>

            <?php if(get_theme_mod('cv-phone')) : ?>
            <li><?php _e('Phone:','portfolio_v') ?> <span><?php echo esc_html(get_theme_mod('cv-phone')) ?></span></li>
            <?php endif; ?>

            <?php if(get_theme_mod('cv-freelance')) : ?>
            <li><?php _e('Freelance:','portfolio_v') ?> <span><?php echo esc_html(get_theme_mod('cv-freelance')) ?></span></li>
            <?php endif; ?>
        </ul>
    </div>
</section>