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
            <h4>28 stycken träffar</h4>
            <?php $loop = new WP_Query( array( 'post_type' => 'tekniker', 'posts_per_page' => -1, 'order' => 'DSC' )); ?>
            <?php if ( $loop->have_posts() ) : ?>
                <div class="cd-tekniker-list">
                    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                        <div class="cd-tekniker-card">
                            <?php
                            $categories = get_the_terms( $post->ID, 'category' );

                            foreach( $categories as $category ) {
                                if ($category->slug == 'expert-tekniker') {
                                    $class = 'expert';
                                }else if ($category->slug == 'kvalificerad-tekniker'){
                                    $class = 'kvalificerad';
                                }else if ($category->slug == 'junior-tekniker'){
                                    $class = 'junior';
                                }else{
                                    $class = 'none';
                                }
                            } ?>
                            <div class="cd-tekniker-thumbnail <?php echo $class ; ?>">
                                <img class="junior-img" src="<?php echo esc_url(home_url('/wp-content/themes/hyrtekniker/assets/images/award-expert.png')) ; ?>" />
                                <img class="kvalificerad-img" src="<?php echo esc_url(home_url('/wp-content/themes/hyrtekniker/assets/images/award-expert.png')) ; ?>" />
                                <img class="expert-img" src="<?php echo esc_url(home_url('/wp-content/themes/hyrtekniker/assets/images/award-expert.png')) ; ?>" />
                                <a class="cd-absolute-link" href="<?php the_permalink() ; ?>"></a>
                            </div>
                            <div class="cd-tekniker-card-content">
                                <div>
                                    <h4><a href="<?php the_permalink() ; ?>">
                                        <?php
                                        $categories = get_the_category();

                                        if ( ! empty( $categories ) ) {
                                            echo esc_html( $categories[0]->name );
                                        }
                                        ?>;
                                        <?php the_title() ; ?></a>
                                    </h4>
                                    <?php the_field('tekniker-description') ; ?>
                                </div>
                                <div class="cd-tekniker-card-info">
                                      <span>
                                          <i class="material-icons">location_on</i>
                                          Stockholm
                                      </span>
                                    <span>
                                        <i class="material-icons">timer</i>
                                        1 Månad
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
        </div>
    </section>



<?php endwhile; ?>


<?php get_footer() ; ?>