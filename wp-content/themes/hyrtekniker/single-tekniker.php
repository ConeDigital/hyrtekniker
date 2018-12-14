<?php get_header() ; ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="cd-print-header">
        <img src="<?php the_field('secondary-logo', 'option') ; ?>">
    </div>
    <section class="cd-hero cd-tekniker-hero">
        <div class="cd-tekniker-hero-img-wrapper">
            <div class="cd-tekniker-hero-img cd-background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')"></div>
        </div>
        <div class="cd-max-width">
            <div class="cd-hero-content">
                <h1><?php
                    $categories = get_the_category();

                    if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name );
                    }
                    ?>;
                    <?php the_title() ; ?>
                </h1>
                <?php the_field('tekniker-description') ; ?>
            </div>
        </div>
        <div class="cd-background-overlay"></div>
        <div class="cd-tekniker-thumbnail-container">
            <div class="cd-max-width">
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
                    <?php if ( $categories[0]->slug  === 'junior-tekniker') : ?>
                        <img class="junior-img" src="<?php echo esc_url(home_url('/wp-content/themes/hyrtekniker/assets/images/award-junior.png')) ; ?>" />
                    <?php endif; ?>
                    <?php if ( $categories[0]->slug  === 'kvalificerad-tekniker') : ?>
                        <img class="kvalificerad-img" src="<?php echo esc_url(home_url('/wp-content/themes/hyrtekniker/assets/images/award-kvalificerad.png')) ; ?>" />
                    <?php endif; ?>
                    <?php if ( $categories[0]->slug  === 'expert-tekniker') : ?>
                        <img class="expert-img" src="<?php echo esc_url(home_url('/wp-content/themes/hyrtekniker/assets/images/award-expert.png')) ; ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="cd-single-tekniker-section">
        <div class="cd-max-width cd-expert-wrapper cd-tekniker-wrapper">
            <div class="cd-expert-left">
                <h2><?php
                    $categories = get_the_category();

                    if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name );
                    }
                    ?>;
                    <?php the_title() ; ?>
                </h2>
                <?php the_content() ; ?>
                <p><strong>Starttid: <?php the_field('tekniker-date') ; ?></strong></p>
            </div>
            <div class="cd-expert-right">
                <div class="cd-tekniker-sidebar">
                    <div class="cd-tekniker-sidebar-content">
                        <h4>Information</h4>
                        <p>Arbetsområde: <span><?php the_field('tekniker-city') ; ?></span></p>
                        <p>Tillgänglig: <span><?php the_field('tekniker-date') ; ?></span></p>
                        <p>Kompetensnivå: <span><?php
                                $categories = get_the_category();

                                if ( ! empty( $categories ) ) {
                                    echo esc_html( $categories[0]->name );
                                }
                                ?></span>
                        </p>
                        <p>Expertområden: <span><?php the_field('tekniker-expertise') ; ?></span></p>
                    </div>
                    <a href="#intresseforfragan" >Intresseförfrågan</a>
                    <button class="cd-print-button" onclick="printProfile()" ><i class="material-icons">print</i>Skriv ut profil</button>

                    <script>
                        function printProfile() {
                            window.print();
                        }
                    </script>
                </div>
                <div class="cd-tekniker-sidebar">
                    <div class="cd-tekniker-sidebar-content">
                        <h4>Utbildningar</h4>
                        <?php if( have_rows('tekniker-educations') ): ?>
                            <?php while( have_rows('tekniker-educations') ) : the_row();?>
                                <p><span><?php the_sub_field('tekniker-education') ; ?></span></p>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="cd-max-width cd-tekniker-table-section">
            <h2>Erfarenhet:</h2>
            <div class="cd-tekniker-table">
                <div class="cd-tekniker-th">
                    <div class="cd-tekniker-td">
                        <span>Område</span>
                    </div>
                    <div class="cd-tekniker-td">
                        <span>Erfarenhet (år)</span>
                    </div>
                    <div class="cd-tekniker-td">
                        <span>Kunskap (1-10)</span>
                    </div>
                </div>
                <div class="cd-tekniker-tr cd-tekniker-tr-first">
                    <div class="cd-tekniker-td">
                        <p>Brancherfarenhet</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('brancherfarenhet-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('brancherfarenhet-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Belysning</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('belysning-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('belysning-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Brand</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('brand-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('brand-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Byggnad</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('byggnad-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('byggnad-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Datorer</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('datorer-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('datorer-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>El</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('el-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('el-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Energi</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('energi-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('energi-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Felanmälan</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('wrong-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('wrong-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Inneklimat</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('inside-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('inside-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Kundservice och bemötande</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('customer-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('customer-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Larm, Passage & Lås</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('alarm-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('alarm-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Rondering</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('rondering-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('rondering-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Styr & Regler</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('rules-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('rules-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Ventilation</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('vent-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('vent-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Värme och vatten</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('warm-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('warm-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Utbildning</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('edu-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('edu-skill') ; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="intresseforfragan" class="cd-contact-form-section cd-background-img" style="background-image: url('<?php the_field('contact-form-img', 'option') ?>')">
        <div class="cd-contact-form">
            <?php echo do_shortcode(get_field('tekniker-form-shortcode','option')) ; ?>
        </div>
    </section>


<?php endwhile; ?>


<?php get_footer() ; ?>