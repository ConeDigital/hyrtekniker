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
                <?php the_field('tekniskforvaltare-description') ; ?>
            </div>
        </div>
        <div class="cd-background-overlay"></div>
        <div class="cd-tekniker-thumbnail-container">
            <div class="cd-max-width">
                <?php
                $categories = get_the_terms( $post->ID, 'category' );

                foreach( $categories as $category ) {
                    if ($category->slug == 'expert-tekniskforvaltare') {
                        $class = 'expert';
                    }else if ($category->slug == 'kvalificerad-tekniskforvaltare'){
                        $class = 'kvalificerad';
                    }else if ($category->slug == 'junior-tekniskforvaltare'){
                        $class = 'junior';
                    }else{
                        $class = 'none';
                    }
                } ?>
                <div class="cd-tekniker-thumbnail <?php echo $class ; ?>">
                    <?php if ( $categories[0]->slug  === 'junior-tekniskforvaltare') : ?>
                        <img class="junior-img" src="<?php echo esc_url(home_url('/wp-content/themes/hyrtekniker/assets/images/award-junior.png')) ; ?>" />
                    <?php endif; ?>
                    <?php if ( $categories[0]->slug  === 'kvalificerad-tekniskforvaltare') : ?>
                        <img class="kvalificerad-img" src="<?php echo esc_url(home_url('/wp-content/themes/hyrtekniker/assets/images/award-kvalificerad.png')) ; ?>" />
                    <?php endif; ?>
                    <?php if ( $categories[0]->slug  === 'expert-tekniskforvaltare') : ?>
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
                <p><strong>Starttid: <?php echo date('d/m/Y', strtotime( get_field('tekniskforvaltare-date') ) ); ?></strong></p>
            </div>
            <div class="cd-expert-right">
                <div class="cd-tekniker-sidebar">
                    <div class="cd-tekniker-sidebar-content">
                        <h4>Information</h4>
                        <p>Arbetsområde: <span><?php the_field('tekniskforvaltare-city') ; ?></span></p>
                        <p>Tillgänglig: <span><?php echo date('d/m/Y', strtotime( get_field('tekniskforvaltare-date') ) ); ?></span></p>
                        <p>Kompetensnivå: <span><?php
                                $categories = get_the_category();

                                if ( ! empty( $categories ) ) {
                                    echo esc_html( $categories[0]->name );
                                }
                                ?></span>
                        </p>
                        <p>Expertområden: <span><?php the_field('tekniskforvaltare-expertise') ; ?></span></p>
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
                        <?php if( have_rows('tekniskforvaltare-educations') ): ?>
                            <?php while( have_rows('tekniskforvaltare-educations') ) : the_row();?>
                                <p><span><?php the_sub_field('tekniskforvaltare-education') ; ?></span></p>
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
                        <p>Arbetsledning</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('arbetsledning-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('arbetsledning-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Besiktningar(underhåll)</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('besiktningar-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('besiktningar-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Byggteknik</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('byggteknik-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('byggteknik-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Fastighetsekonomi</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('fastighetsekonomi-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('fastighetsekonomi-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Fastighets-och hyresrätt</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('hyresratt-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('hyresratt-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Fastighetsteknik</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('fastighetsteknik-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('fastighetsteknik-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Kundservice och bemötande</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('kundservice-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('kundservice-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Ledarskap/arbetsledning</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('ledarskap-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('ledarskap-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Lokalanpassning</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('lokalanpassning-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('lokalanpassning-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Projekthantering</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('projekthantering-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('projekthantering-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Underhållsplanering</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('underhallsplanering-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('underhallsplanering-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Upphandling av tjänster</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('upphandling-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('upphandling-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Utbildning</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('utbildning-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('utbildning-skill') ; ?></p>
                    </div>
                </div>
                <div class="cd-tekniker-tr">
                    <div class="cd-tekniker-td">
                        <p>Uthyrning av Lokaler/lägenhet</p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('uthyrning-year') ; ?></p>
                    </div>
                    <div class="cd-tekniker-td">
                        <p><?php the_field('uthyrning-skill') ; ?></p>
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