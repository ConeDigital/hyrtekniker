jQuery(document).ready( function($) {

    //Remove Loading Background
    $(window).load(function () {
        $('.cd-load-overlay').fadeOut();
    });


    //Open & CLose Mobile Menu
    $('.cd-open-menu').on('click', function() {
        $('.cd-mobile-menu').fadeIn('fast');
        $("html, body").css({
            height: '100%',
            overflow: 'hidden',
            position: 'relative'
        });
    });

    $('.cd-close-menu').on('click', function() {
        $('.cd-mobile-menu').fadeOut('fast');
        $("html, body").css({
            height: 'auto',
            overflow: 'visible'
        });
    });

    //Change Competence sections content
    $('.cd-show-junior').on('click', function(e) {
        e.preventDefault();
        $('.cd-competence-table-head a').removeClass('cd-active-competence-link');
        $(this).addClass('cd-active-competence-link');
        $('.cd-active-competence-backr').css('left', '0');
        $('.cd-expert-content, .cd-qual-content').fadeOut('fast');
        setTimeout(function(){
            $('.cd-junior-content').fadeIn();
        }, 300);
    });
    $('.cd-show-qual').on('click', function(e) {
        e.preventDefault();
        $('.cd-competence-table-head a').removeClass('cd-active-competence-link');
        $(this).addClass('cd-active-competence-link');
        $('.cd-active-competence-backr').css('left', '33.3%');
        $('.cd-expert-content, .cd-junior-content').fadeOut('fast');
        setTimeout(function(){
            $('.cd-qual-content').fadeIn();
        }, 300);
    });
    $('.cd-show-expert').on('click', function(e) {
        e.preventDefault();
        $('.cd-competence-table-head a').removeClass('cd-active-competence-link');
        $(this).addClass('cd-active-competence-link');
        $('.cd-active-competence-backr').css('left', '66.6%');
        $('.cd-junior-content, .cd-qual-content').fadeOut('fast');
        setTimeout(function(){
            $('.cd-expert-content').fadeIn();
        }, 300);
    });

    //Change form content
    $('.cd-step-1').on('click', function(e) {
        $('.cd-form-step ').removeClass('cd-active-step');
        $('.cd-step-1').addClass('cd-active-step');
        $('.cd-form-step-two, .cd-form-step-three').fadeOut('fast');
        setTimeout(function(){
            $('.cd-form-step-one').fadeIn();
        }, 300);
    });
    $('.cd-step-2').on('click', function(e) {
        $('.cd-form-step ').removeClass('cd-active-step');
        $('.cd-step-2').addClass('cd-active-step');
        $('.cd-form-step-one, .cd-form-step-three').fadeOut('fast');
        setTimeout(function(){
            $('.cd-form-step-two').fadeIn();
        }, 300);
    });
    $('.cd-step-3').on('click', function(e) {
        $('.cd-form-step ').removeClass('cd-active-step');
        $('.cd-step-3').addClass('cd-active-step');
        $('.cd-form-step-one, .cd-form-step-two').fadeOut('fast');
        setTimeout(function(){
            $('.cd-form-step-three').fadeIn();
        }, 300);
    });


    //PRINT PROFILE -----------------------------
    function printProfile(){
        window.print();
    }

    //OPEN SLIDER IF CHECKBOX IS CHECKED
    var ckbox = $('.cd-form-checks input[type=checkbox]');

    $('.cd-form-checks input[type=checkbox]').on('click',function () {
        if (ckbox.is(':checked')) {
            $(this).parent().parent().parent().siblings().slideDown('fast');
        } else {
            $(this).parent().parent().parent().siblings().slideUp('fast');
        }
    });


    //Scroll on menu click
    $('.cd-scroll-link a').on('click', function(e){
        //Get section name from href
        var url = $(this).attr('href');
        var hash = url.substring(url.indexOf('#'));
        //Scroll to section
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800);

    });

    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });


    //Slide Effect when scrolling down
    (function($) {

        $.fn.visible = function(partial) {

            var $t            = $(this),
                $w            = $(window),
                viewTop       = $w.scrollTop(),
                viewBottom    = viewTop + $w.height(),
                _top          = $t.offset().top,
                _bottom       = _top + $t.height(),
                compareTop    = partial === true ? _bottom : _top,
                compareBottom = partial === true ? _top : _bottom;

            return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

        };

    })(jQuery);

    var win = $(window);

    var allMods = $(".slide-effect");

    allMods.each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("already-visible");
        }
    });

    win.scroll(function(event) {

        allMods.each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("come-in");
            }
        });

    });
});
