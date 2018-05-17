<?php get_header() ; ?>

    <div class="cd-gray-page">
        <div class="cd-max-width cd-application-top-text">
            <?php the_content() ; ?>
        </div>
        <div class="cd-form-section cd-max-width">
            <div class="cd-form">
                <div class="cd-form-header">
                    <div class="cd-form-step cd-active-step cd-step-1">
                        <div class="cd-form-step-number">1</div>
                        <span>Information</span>
                    </div>
                    <div class="cd-form-step cd-step-2">
                        <div class="cd-form-step-number">2</div>
                        <span>Din Kompetens</span>
                    </div>
                    <div class="cd-form-step cd-step-3">
                        <div class="cd-form-step-number">3</div>
                        <span>Kontaktuppgifter</span>
                    </div>
                </div>
                <div class="cd-form-content">
                    <div class="cd-service-content cd-form-step-one">
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
                            <a class="cd-button cd-step-2" href="#">Ansök enkelt utan CV, svar på 5 snabba frågor</a>
                        </div>
                    </div>
                    <div class="cd-form-content-apply">
                        <?php echo do_shortcode('[contact-form-7 id="17" title="Apply"]') ; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer() ; ?>