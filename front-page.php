<?php get_header() ; ?>

    <section class="cd-hero cd-background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')">
        <div class="cd-max-width">
            <div class="cd-hero-content">
               <?php the_content() ; ?>
            </div>
        </div>
        <div class="cd-background-overlay"></div>
    </section>

    <section class="cd-concept-section cd-page-section">
        <div class="cd-max-width">
            <div class="cd-page-content">
                <div class="cd-left-img slide-effect">
                    <img src="<?php the_field('first-section-img') ; ?>">
                </div>
                <div class="cd-right-text slide-effect ">
                    <?php the_field('first-section-content') ; ?>
                    <div class="cd-right-buttons">
                        <a class="cd-button" href="<?php echo esc_url(home_url('/ansok')); ?>">Ansök Nu</a>
                        <div class="sharer" data-sharer="facebook" data-width="800" data-height="600" data-title="" data-url="<?php the_permalink(); ?>">Eller tipsa en vän!</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cd-service-section cd-page-section">
        <div class="cd-max-width">
            <div class="cd-service-content slide-effect">
                <?php the_field('page-description') ; ?>
                <?php if( have_rows('page-role') ): ?>
                    <?php while( have_rows('page-role') ) : the_row();?>
                        <div class="cd-service-items">
                            <p><strong><?php the_sub_field('page-role-headline') ; ?></strong></p>
                            <?php if( have_rows('page-role-credits') ): ?>
                                <?php while( have_rows('page-role-credits') ) : the_row();?>
                                    <div class="cd-service-item">
                                        <i class="material-icons">check</i>
                                        <p><?php the_sub_field('page-role-credit') ; ?></p>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="cd-service-buttons">
                    <a class="cd-button" href="<?php echo esc_url(home_url('/ansok')); ?>">Ansök Nu</a>
                    <div class="sharer" data-sharer="facebook" data-width="800" data-height="600" data-title="" data-url="<?php the_permalink(); ?>">Eller tipsa en vän!</div>
                </div>
            </div>
        </div>
    </section>

    <section class="cd-about-section cd-page-section">
        <div class="cd-max-width">
            <div class="cd-page-content" id="about-us">
                <div class="cd-left-img slide-effect">
                    <img src="<?php the_field('third-section-img') ; ?>">
                </div>
                <div class="cd-right-text slide-effect">
                    <?php the_field('third-section-content') ; ?>
                    <div class="cd-right-buttons">
                        <a class="cd-button" href="<?php echo esc_url(home_url('/ansok')); ?>">Ansök Nu</a>
                        <div class="sharer" data-sharer="facebook" data-width="800" data-height="600" data-title="" data-url="<?php the_permalink(); ?>">Eller tipsa en vän!</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ; ?>