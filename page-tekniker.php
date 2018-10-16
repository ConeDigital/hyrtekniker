<?php get_header() ;

$args_city = array(
  'numberposts' => -1,
  'post_type' => 'tekniker',
  'meta_query' => array(
    'available_clause' => array(
      'key' => 'tekniker-city',
      'compare' => 'EXISTS',
    ),
  ),
  'orderby' => array(
    'available_clause' => 'ASC',
  )
);
$args = array(
  'numberposts' => -1,
  'post_type' => 'tekniker',
  'meta_query' => array(
    'available_clause' => array(
      'key' => 'tekniker-date',
      'compare' => 'EXISTS',
    ),
  ),
  'orderby' => array(
    'available_clause' => 'ASC',
  )
);
$count = 0;
$today = strtotime(date('d.m.Y'));
?>
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
            <div class="cd-tekniker-filter-item cd-competence-filter">
                <h5>Kompetens</h5>
                <input type="hidden" id="cd-competence" />
                <div class="cd-competence">
                    <div class="cd-competence-item">
                        <input type="checkbox" id="cd-junior" data-id="cd-competence" value="junior-tekniker" checked />
                        <label for="cd-junior">Junior</label>
                        <div class="check">
                            <i class="material-icons">check</i>
                        </div>
                    </div>
                    <div class="cd-competence-item">
                        <input type="checkbox" id="cd-kvalificerad-tekniker" data-id="cd-competence" value="kvalificerad-tekniker" checked />
                        <label for="cd-kvalificerad-tekniker">Kvalificerad</label>
                        <div class="check">
                            <i class="material-icons">check</i>
                        </div>
                    </div>
                    <div class="cd-competence-item">
                        <input type="checkbox" id="cd-expert" data-id="cd-competence" value="expert-tekniker" checked />
                        <label for="cd-expert">Expert</label>
                        <div class="check">
                            <i class="material-icons">check</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cd-tekniker-filter-item cd-location">
                <h5>Område:</h5>
                <input type="hidden" id="cd-location" />
                <select data-id="cd-location">
                    <option value="">Alla</option>
                    <?php $cities = new WP_Query( $args_city ); ?>
                    <?php if ( $cities->have_posts() ) : ?>
                        <?php
                        $currentCity = 'test';
                        ?>
                        <?php while ( $cities->have_posts() ) : $cities->the_post(); ?>
                            <?php
                            $count++;
                            if ( $count == 1 || $currentCity != get_field('tekniker-city') ) : ?>
                                <option value="<?php the_field('tekniker-city') ; ?>"><?php the_field('tekniker-city') ; ?></option>
                            <?php endif; ?>
                            <?php $currentCity = get_field( 'tekniker-city' ); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </select>
            </div>
            <div class="cd-tekniker-filter-item cd-availability">
                <div class="cd-date-heading">
                    <h5>Tillgänglighet:</h5>
                    <p class="range-text">Inom <span id="range-value">3</span> månader</p>
                </div>
                <input type="hidden" id="cd-availability" value="3" />
                <div class="cd-slidecontainer">
                    <input data-id="cd-availability" type="range" min="0" max="12" value="3" class="slider" id="myRange">
                </div>
            </div>
        </div>
    </section>
    <section class="cd-tekniker-list-section">
        <div class="cd-max-width">
            <h4 class="cd-tekniker-count"><?php echo $count; ?> träffar</h4>
            <?php $loop = new WP_Query( $args ); ?>
            <?php if ( $loop->have_posts() ) : ?>
                <div class="cd-tekniker-list">
                    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                        <div class="cd-tekniker-card cd-single-tech <?php if ( strtotime( get_field('tekniker-date') )  > strtotime('+3 month', $today) ) {echo 'cd-tekniker-hidden'; $count--; } ?>"
                             data-competence="<?php echo get_the_category()[0]->slug; ?>"
                             data-location="<?php the_field('tekniker-city'); ?>"
                             data-availability="<?php the_field('tekniker-date'); ?>"
                             >
                            <?php
                            $tech_category = get_the_category();

                            if ($tech_category[0]->slug == 'expert-tekniker') {
                                $class = 'expert';
                            }else if ($tech_category[0]->slug == 'kvalificerad-tekniker'){
                                $class = 'kvalificerad';
                            }else if ($tech_category[0]->slug == 'junior-tekniker'){
                                $class = 'junior';
                            }else{
                                $class = 'none';
                            }
                            ?>
                            <div class="cd-tekniker-thumbnail <?php echo  $class; ?>">
                                <?php if ( $tech_category[0]->slug  === 'junior-tekniker') : ?>
                                    <img class="junior-img" src="<?php echo esc_url(home_url('/wp-content/themes/hyrtekniker/assets/images/award-junior.png')) ; ?>" />
                                <?php endif; ?>
                                <?php if ( $tech_category[0]->slug  === 'kvalificerad-tekniker') : ?>
                                    <img class="kvalificerad-img" src="<?php echo esc_url(home_url('/wp-content/themes/hyrtekniker/assets/images/award-kvalificerad.png')) ; ?>" />
                                <?php endif; ?>
                                <?php if ( $tech_category[0]->slug  === 'expert-tekniker') : ?>
                                    <img class="expert-img" src="<?php echo esc_url(home_url('/wp-content/themes/hyrtekniker/assets/images/award-expert.png')) ; ?>" />
                                <?php endif; ?>
                                <a class="cd-absolute-link" href="<?php the_permalink() ; ?>"></a>
                            </div>
                            <div class="cd-tekniker-card-content">
                                <div>
                                    <h4><a href="<?php the_permalink() ; ?>">
                                        <?php
                                        if ( ! empty( $tech_category ) ) {
                                            echo esc_html( $tech_category[0]->name );
                                        }
                                        ?>;
                                        <?php the_title() ; ?></a>
                                    </h4>
                                    <?php the_field('tekniker-description') ; ?>
                                </div>
                                <div class="cd-tekniker-card-info">
                                      <span>
                                          <i class="material-icons">location_on</i>
                                          <?php the_field('tekniker-city') ; ?>
                                      </span>
                                    <span>
                                        <i class="material-icons">timer</i>
                                        Tillgänlig: <?php echo date('d/m/Y', strtotime( get_field('tekniker-date') ) ); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <div class="cd-no-results-form" data-initial_count="<?php echo $count; ?>" style="display: none;">
                        Fyll i det här är du vacker:
                        <input type="text" name="" placeholder="Vad du vill skriva" />
                    </div>
                </div>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
        </div>
    </section>
    <section class="cd-page-bottom-section">
        <div class="cd-page-bottom-grid cd-page-bottom-left cd-background-img" style="background-image: url('<?php echo esc_url(home_url('/wp-content/themes/hyrtekniker/assets/images/mashroom.jpeg')) ; ?>')">
            <div class="cd-background-overlay"></div>
            <div class="cd-page-bottom-content">
                <h4>För Företag</h4>
                <p>Lorem ipsum dolor sit amet, consectetur lorem.</p>
                <a href="<?php echo esc_url(home_url('/for-foretag')); ?>" class="cd-outline-button"><span>Läs mer</span></a>
            </div>
        </div>
        <div class="cd-page-bottom-grid cd-page-bottom-left cd-background-img" style="background-image: url('<?php echo esc_url(home_url('/wp-content/themes/hyrtekniker/assets/images/worker.jpeg')) ; ?>')">
            <div class="cd-background-overlay"></div>
            <div class="cd-page-bottom-content">
                <h4>För Tekniker</h4>
                <p>Lorem ipsum dolor sit amet, consectetur lorem.</p>
                <a href="<?php echo esc_url(home_url('/for-tekniker')); ?>" class="cd-outline-button"><span>Läs mer</span></a>
            </div>
        </div>
    </section>


<?php get_footer() ; ?>