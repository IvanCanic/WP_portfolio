
<?php 
$default_avatar = 'http://zacvineyard.com/blog/wp-content/themes/zac/images/default-avatar.png';
?>
<h2><?php _e('Comments', 'portfolio_v') ?></h2>

<?php if($comments) : ?>  
    <ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'avatar_size' => 100,
						'style'       => 'ol',
						'short_ping'  => true,
						'reply_text'  => __( 'Reply', 'portfolio_v' ),
					)
				);
			?>
		</ol>
        <?php the_comments_pagination(
			array(
				'mid-size' => 2,
                'prev_text' => '<i class="fas fa-chevron-left"></i>',
                'next_text' => '<i class="fas fa-chevron-right"></i>'
			)
		); ?>
<?php endif; ?> 

<hr>

<?php if(comments_open()) : ?>

	<h2><?php _e('Add Your Comment', 'portfolio_v') ?></h2>

    <?php comment_form(); ?>

<?php else : ?>  

    <p><?php _e('The comments are closed.', 'portfolio_v') ?></p> 

<?php endif; ?>