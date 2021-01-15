<?php get_header(); ?>

        <!-- CV Section-->
            <?php get_template_part('template-parts/section','cv'); ?>
        
        <!--Page section-->

        <section class="page-layout not-found">

          <h2><?php _e('Page not found...','portfolio_v') ?></h2>

          <div class="img-404">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/404.png') ?>" alt="page not found">
          </div>
  
        </section>

<?php get_footer(); ?>