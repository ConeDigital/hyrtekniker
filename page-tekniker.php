<?php get_header() ; ?>
<?php while ( have_posts() ) : the_post(); ?>

    <section class="cd-hero cd-tekniker-hero">
        <div class="cd-tekniker-hero-img-wrapper">
            <div class="cd-tekniker-hero-img cd-background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')"></div>
        </div>
        <div class="cd-max-width">
            <div class="cd-hero-content">
                <h1><?php the_title() ; ?></h1>
                <?php the_content() ; ?>
            </div>
        </div>
        <div class="cd-background-overlay"></div>

    </section>
    <section class="cd-tekniker-filter-section">
        <div class="cd-max-width cd-tekniker-filter">
            <div class="cd-tekniker-filter-item">
                <h5>Kompetens</h5>
                <input type="hidden" id="cd-competence" />
                <div class="cd-competence">
                    <label>
                        <input type="checkbox" data-id="cd-competence" value="junior-tekniker" checked />
                        Junior
                    </label>
                    <label>
                        <input type="checkbox" data-id="cd-competence" value="kvalificerad-tekniker" checked />
                        Kvalificerad
                    </label>
                    <label>
                        <input type="checkbox" data-id="cd-competence" value="expert-tekniker" checked />
                        Expert
                    </label>
                </div>
            </div>
            <div class="cd-tekniker-filter-item cd-location">
                <h5>Område:</h5>
                <input type="hidden" id="cd-location" />
                <select data-id="cd-location">
                    <option value="">Alla</option>
                    <option value="Stockholm">Stockholm</option>
                    <option value="Malmö">Malmö</option>
                </select>
            </div>
            <div class="cd-tekniker-filter-item cd-availability">
                <h5>Tillgänglighet:</h5>
                <p class="range-text">Inom <span id="range-value">0</span> månader</p>
                <input type="hidden" id="cd-availability" value="0" />
                <div class="cd-slidecontainer">
                    <input data-id="cd-availability" type="range" min="0" max="12" value="0" class="slider" id="myRange">
                </div>
            </div>
        </div>
    </section>
    <section class="cd-tekniker-list-section">
        <div class="cd-max-width">
            <?php $loop = new WP_Query( array( 'post_type' => 'tekniker', 'posts_per_page' => -1, 'order' => 'DSC' )); ?>
            <?php if ( $loop->have_posts() ) : ?>
                <div class="cd-tekniker-list">
                    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                        <div class="cd-single-tech"
                        data-competence="<?php echo get_the_category()[0]->slug; ?>"
                        data-location="<?php the_field('tekniker-city'); ?>"
                        data-availability="<?php the_field('tekniker-date'); ?>">
                            <h4><?php the_title() ; ?></h4>
                            <?php the_field('tekniker-description') ; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
        </div>
    </section>



<?php endwhile; ?>


<?php get_footer() ; ?>