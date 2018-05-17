<section id="kontakta-oss" class="cd-contact-form-section cd-background-img" style="background-image: url('<?php the_field('contact-form-img', 'option') ?>')">
    <div class="cd-contact-form">
        <?php echo do_shortcode(get_field('contact-form-shortcode','option')) ; ?>
    </div>
</section>