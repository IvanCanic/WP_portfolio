<?php get_header(); ?>

        <!-- CV Section-->
            <?php get_template_part('template-parts/section','cv'); ?>
        
        <!--Page section-->

        <section class="single-post-layout">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="thumb-place">
                <?php if(has_post_thumbnail()) : ?>
                    <img src="<?php esc_url(the_post_thumbnail_url()) ?>" alt="<?php the_title(); ?> image">
                <?php endif; ?>
            </div>

            <div class="post-place">
                <h2><?php the_title(); ?></h2>
                <div class="author-data">
                    <?php _e('posted by','portfolio_v') ?> <a href="<?php echo esc_url(get_author_posts_url('ID', get_the_author())) ?>"><?php the_author(); ?></a> <?php _e('at','portfolio_v') ?> <?php the_time('Y-m-d H:i:s'); ?>
                </div>
                <p><?php echo get_the_content(); ?></p>

                <?php 
                	wp_link_pages(
                        array(
                            'before'      => '<div class="page-links">' . __( 'Pages:', 'portfolio_v' ),
                            'after'       => '</div>',
                            'link_before' => '<span class="page-number">',
                            'link_after'  => '</span>',
                        )
                    );
                ?>
            </div>

            <ul class="post-tags">

            <?php $tags = get_the_tags(); ?>

            <?php if($tags) : ?>
            <?php foreach($tags as $tag) : ?>
                <li><a href="<?php echo get_tag_link( $tag->term_id )?>"><?php echo $tag->name ?></a></li>
            <?php endforeach; endif; ?>
            
            </ul>

            
            <?php if ( comments_open() || get_comments_number() ) : ?>
                <div class="comments-place">
                    <?php comments_template(); ?>
                </div>
            <?php endif;?>
           

            <?php endwhile; endif; ?>
        </section>

<?php get_footer(); ?>