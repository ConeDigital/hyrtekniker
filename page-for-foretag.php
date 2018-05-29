<?php get_header() ; ?>

    <section class="cd-hero cd-background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')">
        <div class="cd-max-width">
            <div class="cd-hero-content">
                <h1><?php the_title() ; ?></h1>
                <a class="codemaster" href="#kontakta-oss">Kontakta oss</a>
            </div>
        </div>
        <div class="cd-background-overlay"></div>
    </section>
    <div class="cd-max-width cd-expert-wrapper">
        <div class="cd-expert-left">
            <section class="cd-concept-section cd-page-section">
                <div class="cd-page-content">

                    <div class="cd-right-text slide-effect ">
                        <?php the_content() ; ?>

                    </div>
                </div>
            </section>
        </div>
        <div class="cd-expert-right">
            <div class="cd-expert-sidebar">
                <div class="cd-expert-sidebar-content">
                    <p>Innehåll</p>
                    <a href="#rekrytering">Rekrytering</a>
                    <a href="#inget-vanligt-bemanningsbolag">Inget vanligt bemanningsbolag</a>
                    <a href="#ratt-person-for-jobbet">Rätt person för jobbet</a>
                    <a href="#hyr-eller-kop">Hyr eller köp</a>
                </div>
                <a href="#kontakta-oss" class="cd-expert-sidebar-link">Kontakta oss</a>
            </div>
        </div>
    </div>



    <!--Competence section-->
    <?php get_template_part( 'template-parts/competence', get_post_format() ); ?>

    <!--Contact form section-->
    <?php get_template_part( 'template-parts/form', get_post_format() ); ?>


<?php get_footer() ; ?>