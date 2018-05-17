<?php get_header() ; ?>

    <section class="cd-hero cd-background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')">
        <div class="cd-max-width">
            <div class="cd-hero-content">
                <h1><?php the_title() ; ?></h1>
                <a class="cd-hero-button" href="#kontakta-oss">Kontakta oss</a>
            </div>
        </div>
        <div class="cd-background-overlay"></div>
    </section>
    <section class="cd-page-section">
        <div class="cd-max-width">
            <div class="cd-page-content">
                <div class="cd-company-content cd-service-content slide-effect">
                    <?php the_content() ; ?>
                </div>
            </div>
        </div>
    </section>

    <!--Competence section-->
    <?php get_template_part( 'template-parts/competence', get_post_format() ); ?>

    <!--Contact form section-->
    <?php get_template_part( 'template-parts/form', get_post_format() ); ?>


<?php get_footer() ; ?>