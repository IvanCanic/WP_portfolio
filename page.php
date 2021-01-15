<?php get_header(); ?>

        <!-- CV Section-->
            <?php get_template_part('template-parts/section','cv'); ?>
        
        <!--Page section-->

        <section class="page-layout">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <?php if(has_post_thumbnail()) : ?>
            <div class="thumb-place">
                <img src="<?php esc_url(the_post_thumbnail_url()) ?>" alt="<?php the_title(); ?> image">
            </div>
            <?php endif; ?>
        </section>

<?php get_footer(); ?>