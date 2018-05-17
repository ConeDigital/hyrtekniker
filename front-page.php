<?php get_header() ; ?>

   <div class="cd-home-section">
       <div class="cd-home-left">
           <a href="<?php echo esc_url(home_url('/for-tekniker')); ?>" class="cd-absolute-link"></a>
           <div class="cd-home-left-content">
               <h1><?php the_title() ; ?></h1>
               <p><?php the_content() ; ?></p>
           </div>
           <div class="cd-home-link-content">
               <p>För Tekniker</p>
               <h4>Ett Koncept från FT Drift</h4>
               <i class="material-icons">arrow_forward</i>
           </div>
       </div>
       <div class="cd-home-right">
           <div class="cd-home-right-content cd-background-img" style="background-image: url('<?php the_field('home-top-img') ; ?>')">
               <a href="<?php echo esc_url(home_url('/ansok')); ?>" class="cd-absolute-link"></a>
               <div class="cd-background-overlay"></div>
                <div class="cd-home-link-content">
                    <p>Ansök nu</p>
                    <h4>Vi söker personal</h4>
                    <i class="material-icons">arrow_forward</i>
                </div>
           </div>
           <div class="cd-home-right-content cd-background-img" style="background-image: url('<?php the_field('home-lower-img') ; ?>')">
               <a href="<?php echo esc_url(home_url('/for-foretag')); ?>" class="cd-absolute-link"></a>
               <div class="cd-background-overlay"></div>
               <div class="cd-home-link-content">
                   <p>För Företag</p>
                   <h4>kvalificerade Tekniker</h4>
                   <i class="material-icons">arrow_forward</i>
               </div>
           </div>
       </div>

   </div>

<?php get_footer() ; ?>