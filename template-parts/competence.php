<section class="cd-competence-section" id="vara-konsulter">
    <div class="cd-max-width">
        <h3>Vi tillhandahåller kvalificerade tekniker på tre olika kompetensnivåer:</h3>
        <div class="cd-competence-table">
            <div class="cd-competence-table-head">
                <span class="cd-active-competence-backr"></span>
                <a href="#" class="cd-active-competence-link cd-show-junior">Junior</a>
                <a href="#" class="cd-show-qual">Kvalificerad Tekniker</a>
                <a href="#" class="cd-show-expert">Expert tekniker</a>
            </div>
            <div class="cd-competence-table-wrapper">
                <div class="cd-junior-content">
                    <div class="cd-competence-table-content ">
<!--                        <img src="--><?php //the_field('competence-junior-img', 'option') ; ?><!--" />-->
                        <div class="cd-competence-table-right">
                            <?php the_field('competence-junior-text', 'option') ; ?>
                        </div>
                    </div>
                </div>
                <div class="cd-qual-content">
                    <div class="cd-competence-table-content">
<!--                        <img src="--><?php //the_field('competence-qual-img', 'option') ; ?><!--" />-->
                        <div class="cd-competence-table-right">
                            <?php the_field('competence-qual-text', 'option') ; ?>
                        </div>
                    </div>
                </div>
               <div class="cd-expert-content">
                   <div class="cd-competence-table-content">
<!--                       <img src="--><?php //the_field('competence-expert-img', 'option') ; ?><!--" />-->
                       <div class="cd-competence-table-right">
                           <?php the_field('competence-expert-text', 'option') ; ?>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>