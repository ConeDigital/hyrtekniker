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
                <div>
                    <label>
                        <input type="checkbox" />
                        Junior
                    </label>
                    <label>
                        <input type="checkbox" />
                        Kvalificerad
                    </label>
                    <label>
                        <input type="checkbox" />
                        Expert
                    </label>
                </div>
            </div>
            <div class="cd-tekniker-filter-item">
                <h5>Område:</h5>
                <select>
                    <option>Stockholm</option>
                    <option>Malmö</option>
                </select>
            </div>
            <div class="cd-tekniker-filter-item">
                <h5>Tillgänglighet:</h5>
                <div class="cd-slidecontainer">
                    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
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
                        <div>
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