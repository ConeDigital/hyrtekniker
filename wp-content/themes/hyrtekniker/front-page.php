<?php get_header() ; ?>

   <div class="cd-home-section">
       <div class="cd-home-content">
           <div class="cd-background-img" style="background-image: url('<?php the_field('home-tekniker-img'); ?>')"></div>
           <div class="cd-background-overlay"></div>
           <div class="cd-home-text">
               <h2>Hyr en Tekniker</h2>
               <p>Till våra tekniker</p>
           </div>
           <a href="<?php the_field('home-tekniker-link'); ?>" class="cd-absolute-link"></a>
       </div>
       <div class="cd-home-content">
           <div class="cd-background-img" style="background-image: url('<?php the_field('home-forvaltare-img'); ?>')"></div>
           <div class="cd-background-overlay"></div>
           <div class="cd-home-text">
               <h2>Hyr en Teknisk Förvaltare</h2>
               <p>Till våra förvaltare</p>
           </div>
           <a href="<?php the_field('home-forvaltare-link'); ?>" class="cd-absolute-link"></a>
       </div>
   </div>

<?php get_footer() ; ?>