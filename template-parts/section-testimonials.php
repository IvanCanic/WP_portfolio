
<?php if(get_theme_mod('testimonial-btn') === 'yes') : ?>
<section id="testimonials">

    <?php $query = new WP_Query( array('post_type' => 'testimonials'));

    if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

    <div class="testimonial">
        <div class="test-body">
            <p class="grey">
                <?php the_time('jS F, Y'); ?>
            </p>
            <p>
                <?php the_content(); ?>
            </p>
        </div>
        <div class="test-foot">
            <img src="<?php esc_url(the_post_thumbnail_url()) ?>" alt="<?php esc_attr(the_title()) ?>">
            <ul>
                <li><?php the_title(); ?></li>
                <?php if(get_post_meta( $post->ID ,'_wporg_meta_key', true)) : ?>
                <li class="grey"><?php echo esc_html(get_post_meta( $post->ID ,'_wporg_meta_key', true)) ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <?php endwhile; endif;  ?>
    <?php wp_reset_postdata(); ?> 
</section>
<?php endif; ?>