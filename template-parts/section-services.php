<?php if(get_theme_mod('services-btn') === 'yes') : ?>
<section id="services">
    <h2><?php echo esc_html(get_theme_mod('services-title', 'Services What I Can Ofer for You')) ?></h2>
    <p><?php echo esc_html(get_theme_mod('services-subtitle')) ?></p>
    <div class="services">

    <?php $query = new WP_Query( array('post_type' => 'services'));

        if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

        <div class="service">
            <?php if(get_post_meta($post->ID, '_wporg_meta_key', true)) : ?>
            <div class="service-logo"><i class="<?php echo esc_attr(get_post_meta($post->ID, '_wporg_meta_key', true)) ?>" aria-hidden="true"></i></div>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
            </a>
            <?php the_excerpt(); ?>
        </div>
        
    <?php endwhile; endif; ?>
    <?php wp_reset_postdata(); ?> 

    </div>
</section>
<?php endif; ?>