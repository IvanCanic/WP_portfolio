<?php if(get_theme_mod('skills-btn') === 'yes') : ?>
<section id="skills" style="background-image: url(<?php echo esc_url(get_theme_mod('skills-background')) ?>);">

<div class="skills">
    <h3><?php echo esc_html(get_theme_mod('skills-title', 'What My Design Skills Included')) ?></h3>
    <p><?php echo esc_html(get_theme_mod('skills-subtitle')) ?></p>
    <div class="skills-container">

        <div class="skill">
            <?php if(get_theme_mod('skill-one')) : ?>
            <div class="skill-meta">
                <span><?php echo esc_html(get_theme_mod('skill-one')) ?></span>
                <span><?php echo esc_html(get_theme_mod('skill-one-data')) ?>%</span>
            </div>
            <div class="skill-line">
                <div class="skill-line-bar" style="width: <?php echo esc_attr(get_theme_mod('skill-one-data')) ?>%;"></div>
            </div>
            <?php endif; ?>
        </div>

        <div class="skill">
            <?php if(get_theme_mod('skill-two')) : ?>
            <div class="skill-meta">
                <span><?php echo esc_html(get_theme_mod('skill-two')) ?></span>
                <span><?php echo esc_html(get_theme_mod('skill-two-data')) ?>%</span>
            </div>
            <div class="skill-line">
                <div class="skill-line-bar" style="width: <?php echo esc_attr(get_theme_mod('skill-two-data')) ?>%;"></div>
            </div>
            <?php endif; ?>
        </div>

        <div class="skill">
            <?php if(get_theme_mod('skill-three')) : ?>
            <div class="skill-meta">
                <span><?php echo esc_html(get_theme_mod('skill-three')) ?></span>
                <span><?php echo esc_html(get_theme_mod('skill-three-data')) ?>%</span>
            </div>
            <div class="skill-line">
                <div class="skill-line-bar" style="width: <?php echo esc_attr(get_theme_mod('skill-three-data')) ?>%;"></div>
            </div>
            <?php endif; ?>
        </div>

    </div>
</div>
<div class="skills-images">
    <?php if(get_theme_mod('skills-img-left')) : ?>
    <img class="img1" src="<?php echo esc_url(get_theme_mod('skills-img-left')) ?>" alt="skills image 1">
    <?php endif; ?>

    <?php if(get_theme_mod('skills-img-right')) : ?>
    <img class="img2" src="<?php echo esc_url(get_theme_mod('skills-img-right')) ?>" alt="skills image 2">
    <?php endif; ?>
</div>
</section>
<?php endif; ?>