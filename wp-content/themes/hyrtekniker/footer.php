<?php
/**
 * The template for displaying the footer
 *
 * @package cone
 */
?>

    <footer>
        <div class="cd-footer-top cd-max-width">
            <div class="cd-footer-top-left">
                <p><?php the_field('footer-text', 'option') ; ?></p>
               <div class="cd-footer-left-info">
                   <a href="<?php the_field('footer-link', 'option') ; ?>" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i>ftdrift.se </a>
                   <p><i class="fa fa-phone-square" aria-hidden="true"></i><?php the_field('footer-phone', 'option') ; ?></p>
               </div>
            </div>
            <div class="cd-footer-top-right">
                <?php if( have_rows('footer-images' ,'option') ): ?>
                    <?php while( have_rows('footer-images' ,'option') ) : the_row();?>
                        <img src="<?php the_sub_field('footer-img' ,'option') ; ?>">
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="cd-footer-bottom">
            <div class="cd-max-width cd-footer-bottom-content">
                <p>Org nr: <?php the_field('footer-org', 'option') ; ?></p>
                <div class="cd-footer-bottom-right">
                    <p>Cookies</p>
                    <p>© Hyrtekniker 2018</p>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>