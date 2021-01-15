<?php if(get_theme_mod('numbers-btn') === 'yes') : ?>
<section id="numbers" style="background-image: url(<?php echo esc_url(get_theme_mod('numbers-background')) ?>);">
    <div class="numbers">

        <?php if(get_theme_mod('numbers-one-n') OR get_theme_mod('numbers-one-t')) : ?>
        <div class="number">
            <h2><?php echo esc_html(get_theme_mod('numbers-one-n'))?></h2>
            <p><?php echo esc_html(get_theme_mod('numbers-one-t'))?></p>
        </div>
        <?php endif; ?>

        <?php if(get_theme_mod('numbers-two-n') OR get_theme_mod('numbers-two-t')) : ?>
        <div class="number">
            <h2><?php echo esc_html(get_theme_mod('numbers-two-n'))?></h2>
            <p><?php echo esc_html(get_theme_mod('numbers-two-t'))?></p>
        </div>
        <?php endif; ?>

        <?php if(get_theme_mod('numbers-three-n') OR get_theme_mod('numbers-three-t')) : ?>
        <div class="number">
            <h2><?php echo esc_html(get_theme_mod('numbers-three-n'))?></h2>
            <p><?php echo esc_html(get_theme_mod('numbers-three-t'))?></p>
        </div>
        <?php endif; ?>

        <?php if(get_theme_mod('numbers-four-n') OR get_theme_mod('numbers-four-t')) : ?>
        <div class="number">
            <h2><?php echo esc_html(get_theme_mod('numbers-four-n'))?></h2>
            <p><?php echo esc_html(get_theme_mod('numbers-four-t'))?></p>
        </div>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>