<footer id="main-footer" style="background-image: url(<?php echo esc_url(get_theme_mod('footer-background'))  ?>);">
            <div class="footer-contact">
                <h2><?php echo esc_html(get_theme_mod('footer-title')) ?></h2>
                <div class="contacts">
                    <?php if(get_theme_mod('footer-phone-link')) : ?>
                    <ul class="contact">
                        <li><i class="fas fa-phone" aria-hidden="true"></i></li>
                        <li><?php _e('Phone me:','portfolio_v') ?></li>
                        <li><a href="tel:<?php echo esc_url(get_theme_mod('footer-phone-link')) ?>"><?php echo esc_html(get_theme_mod('footer-phone-link')) ?></a></li>
                    </ul>
                    <?php endif; ?>

                    <?php if(get_theme_mod('footer-mail-link')) : ?>
                    <ul class="contact">
                        <li><i class="fab fa-telegram-plane"></i></li>
                        <li><?php _e('Mail me:','portfolio_v') ?></li>
                        <li><a href="mailto:<?php echo esc_url(get_theme_mod('footer-mail-link')) ?>"><?php echo esc_html(get_theme_mod('footer-mail-link')) ?></a></li>
                    </ul>
                    <?php endif; ?>

                    <?php if(get_theme_mod('footer-follow-link')) : ?>
                    <ul class="contact">
                        <li><i class="<?php echo esc_attr(get_theme_mod('footer-follow-link-icon')) ?>" aria-hidden="true"></i></li>
                        <li><?php _e('Follow me:','portfolio_v') ?></li>
                        <li><a href="<?php echo esc_url(get_theme_mod('footer-follow-link')) ?>" target="_blank"><?php echo esc_html(get_theme_mod('footer-follow-link')) ?></a></li>
                    </ul>
                    <?php endif; ?>
                </div>

                <?php if(get_theme_mod('hire-btn')) : ?>
                <a href="<?php echo esc_url(get_theme_mod('hire-btn-link')) ?>" class="vv-btn vv-btn-secondary"><?php echo esc_html(get_theme_mod('hire-btn')) ?></a>
                <?php endif; ?>

            </div>
            <div class="footer-meta">
            <?php _e('Copyright', 'portfolio_v')?> &copy; <?php the_time("Y"); ?> <?php _e('Portfolio by ','portfolio_v') ?><a href="#"><?php _e('VV Design', 'portfolio_v')?></a>. <?php _e('All rights reserved.', 'portfolio_v')?>
            </div>
            <span class="send-up" onclick="topFunction()"><i class="fas fa-angle-double-up" aria-hidden="true"></i>
            </span>
        </footer>
    </main>
    <?php wp_footer(); ?>
</body>
</html>