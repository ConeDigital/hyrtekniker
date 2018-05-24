<?php get_header() ; ?>

    <section class="cd-hero cd-background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')">
        <div class="cd-max-width">
            <div class="cd-hero-content">
                <?php the_content() ; ?>
                <a class="codemaster" href="<?php echo esc_url(home_url('/ansok')); ?>">Ansök enkelt utan CV. Svara på 5 frågor</a>
                <a href="#innehall" class="cd-hero-link">Eller läs mer om vårt koncept</a>
            </div>
        </div>
        <div class="cd-background-overlay"></div>
    </section>

<div class="cd-max-width cd-expert-wrapper" id="innehall">
    <div class="cd-expert-left">
        <section class="cd-concept-section cd-page-section">
            <div class="cd-page-content">
                <!--                <div class="cd-left-img slide-effect">-->
                <!--                    <img src="--><?php //the_field('first-section-img') ; ?><!--">-->
                <!--                </div>-->
                <div class="cd-right-text slide-effect ">
                    <?php the_field('first-section-content') ; ?>
                    <!--                    <div class="cd-right-buttons">-->
                    <!--                        <a class="cd-button" href="--><?php //echo esc_url(home_url('/ansok')); ?><!--">Ansök Nu</a>-->
                    <!--                        <div class="sharer" data-sharer="facebook" data-width="800" data-height="600" data-title="" data-url="--><?php //the_permalink(); ?><!--">Eller tipsa en vän!</div>-->
                    <!--                    </div>-->
                </div>
            </div>
        </section>
        <section class="cd-service-section cd-page-section" id="vem-vi-soker">
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
                <!--                <div class="cd-service-buttons">-->
                <!--                    <a class="cd-button" href="--><?php //echo esc_url(home_url('/ansok')); ?><!--">Ansök Nu</a>-->
                <!--                    <div class="sharer" data-sharer="facebook" data-width="800" data-height="600" data-title="" data-url="--><?php //the_permalink(); ?><!--">Eller tipsa en vän!</div>-->
                <!--                </div>-->
            </div>
        </section>
        <section class="cd-page-section" id="varfor-arbeta-som-konsult">
            <div class="cd-page-content">
                <div class="cd-service-content slide-effect">
                    <?php the_field('andra_sektionen') ; ?>
                </div>
            </div>
        </section>
        <section class="cd-about-section cd-page-section" id="om-oss">
            <div class="cd-page-content" id="about-us">
                <!--                <div class="cd-left-img slide-effect">-->
                <!--                    <img src="--><?php //the_field('third-section-img') ; ?><!--">-->
                <!--                </div>-->
                <div class="cd-right-text slide-effect">
                    <?php the_field('third-section-content') ; ?>
                    <!--                    <div class="cd-right-buttons">-->
                    <!--                        <a class="cd-button" href="--><?php //echo esc_url(home_url('/ansok')); ?><!--">Ansök Nu</a>-->
                    <!--                        <div class="sharer" data-sharer="facebook" data-width="800" data-height="600" data-title="" data-url="--><?php //the_permalink(); ?><!--">Eller tipsa en vän!</div>-->
                    <!--                    </div>-->
                </div>
            </div>
        </section>
    </div>
    <div class="cd-expert-right">
        <div class="cd-expert-sidebar">
            <div class="cd-expert-sidebar-content">
                <p>Innehåll</p>
                <a href="#vem-vi-soker">Vem vi söker</a>
                <a href="#varfor-arbeta-som-konsult">Varför arbeta som konsult</a>
                <a href="#om-oss">Om oss</a>
                <a href="#vara-konsulter">Våra konsulter</a>
            </div>
            <a href="<?php echo esc_url(home_url('/ansok')); ?>" class="cd-expert-sidebar-link">Ansök enkelt utan CV, svara på 5 snabba frågor</a>
        </div>
    </div>
</div>


    <!--Competence section-->
    <?php get_template_part( 'template-parts/competence', get_post_format() ); ?>

    <!--Contact form section-->
    <?php get_template_part( 'template-parts/form', get_post_format() ); ?>


<?php get_footer() ; ?>