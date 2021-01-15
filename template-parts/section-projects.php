<?php if(get_theme_mod('projects-btn') === 'yes') : ?>
<section id="projects">
    <div class="projects-header">
        <h2><?php echo esc_html(get_theme_mod('projects-title')) ?></h3>
        <p> <?php echo esc_html(get_theme_mod('projects-subtitle')) ?></p>
        <a href="<?php echo esc_url(home_url( 'projects')) ?>" class="vv-btn vv-btn-secondary" id="pr-btn"><?php _e('All Projects','portfolio_v') ?></a>
        <ul>
            <li data-filter="all" class="fl active"><?php _e('All','portfolio_v') ?></li>
            <?php if(get_theme_mod('projects-cat-one')) : ?>
                <li data-filter="<?php echo esc_attr(strtolower(get_theme_mod('projects-cat-one'))) ?>" class="fl" ><?php echo esc_html(get_theme_mod('projects-cat-one')) ?></li>
            <?php endif; ?>
            <?php if(get_theme_mod('projects-cat-two')) : ?>
                <li data-filter="<?php echo esc_attr(strtolower(get_theme_mod('projects-cat-two'))) ?>" class="fl" ><?php echo esc_html(get_theme_mod('projects-cat-two')) ?></li>
            <?php endif; ?>   
            <?php if(get_theme_mod('projects-cat-three')) : ?>
                <li data-filter="<?php echo esc_attr(strtolower(get_theme_mod('projects-cat-three'))) ?>" class="fl" ><?php echo esc_html(get_theme_mod('projects-cat-three')) ?></li>
            <?php endif; ?>
            <?php if(get_theme_mod('projects-cat-four')) : ?>
                <li data-filter="<?php echo esc_attr(strtolower(get_theme_mod('projects-cat-four'))) ?>" class="fl" ><?php echo esc_html(get_theme_mod('projects-cat-four')) ?></li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="projects-footer">
        <?php $query = new WP_Query(array('post_type' => 'projects'));

        if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

        <a data-lightbox="roadtrip" href="<?php esc_url(the_post_thumbnail_url()) ?>" class="all <?php echo esc_attr(strtolower(get_post_meta( $post->ID ,'_wporg_meta_key', true))) ?>" >
            <img src="<?php esc_url(the_post_thumbnail_url()) ?>" alt="<?php esc_attr(the_title()) ?>">
        </a>
        
        <?php endwhile; endif; ?>

    </div>
</section>
<?php endif; ?>