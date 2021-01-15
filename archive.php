<?php get_header(); ?>

        <!-- CV Section-->
            <?php get_template_part('template-parts/section','cv'); ?>
        
        <!--Page section-->

        <section class="archive-page">

            <?php if(have_posts()) : ?>

            
            <div class="article-container">
            <?php while(have_posts()) : the_post(); ?>

                <article <?php post_class(); ?>>
                    <div class="thumb-place">
                        <?php if(has_post_thumbnail()) : ?>
                            <img src="<?php esc_url(the_post_thumbnail_url()) ?>" alt="<?php the_title() ?> image">
                        <?php endif; ?>
                    </div>

                    <div class="post-place">
                        <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                        <div class="author-data">
                        <?php echo __('posted by','portfolio_v') ?> <a href="<?php echo esc_url(get_author_posts_url('ID', get_the_author())) ?>"><?php the_author() ?></a> <?php _e('at', 'portfolio_v') ?> <?php the_time('Y-m-d H:i:s'); ?>
                        </div>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </article>

            <?php endwhile; ?>
            </div>

            <div class="pagination">

            <?php echo paginate_links(array(
                'mid-size' => 2,
                'prev_text' => '<i class="fas fa-chevron-left"></i>',
                'next_text' => '<i class="fas fa-chevron-right"></i>'
            )); ?>

            </div>
            
            <?php endif; ?>
            
        </section>

<?php get_footer(); ?>