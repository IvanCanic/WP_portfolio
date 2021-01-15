<?php get_header(); ?>

        <!-- CV Section-->
            <?php get_template_part( 'template-parts/section', 'cv'); ?>

        <!-- Services Section-->
            <?php get_template_part( 'template-parts/section', 'services' ); ?>

        <!-- Skills Section-->
            <?php get_template_part('template-parts/section', 'skills'); ?>

        <!-- Projects Section-->
            <?php get_template_part( 'template-parts/section', 'projects') ?>

        <!-- Numbers Section-->
            <?php get_template_part( 'template-parts/section', 'numbers') ?>

        <!--Testimonials Section-->
            <?php get_template_part( 'template-parts/section', 'testimonials' ); ?>

        <!--Footer-->
<?php get_footer(); ?>