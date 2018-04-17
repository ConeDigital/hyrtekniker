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


    //Change form content
    $('.cd-step-1').on('click', function(e) {
        e.preventDefault();
        $('.cd-form-step ').removeClass('cd-active-step');
        $('.cd-step-1').addClass('cd-active-step');
        $('.cd-form-step-two, .cd-form-step-three').fadeOut('fast');
        setTimeout(function(){
            $('.cd-form-step-one').fadeIn();
        }, 300);
    });
    $('.cd-step-2').on('click', function(e) {
        e.preventDefault();
        $('.cd-form-step ').removeClass('cd-active-step');
        $('.cd-step-2').addClass('cd-active-step');
        $('.cd-form-step-one, .cd-form-step-three').fadeOut('fast');
        setTimeout(function(){
            $('.cd-form-step-two').fadeIn();
        }, 300);
    });
    $('.cd-step-3').on('click', function(e) {
        e.preventDefault();
        $('.cd-form-step ').removeClass('cd-active-step');
        $('.cd-step-3').addClass('cd-active-step');
        $('.cd-form-step-one, .cd-form-step-two').fadeOut('fast');
        setTimeout(function(){
            $('.cd-form-step-three').fadeIn();
        }, 300);
    });

    //OPEN SLIDER IF CHECKBOX IS CHECKED
    var ckbox = $('.cd-form-checks input[type=checkbox]');

    $('.cd-form-checks input[type=checkbox]').on('click',function () {
        if (ckbox.is(':checked')) {
            $(this).parent().parent().parent().siblings().slideDown('fast');
        } else {
            $(this).parent().parent().parent().siblings().slideUp('fast');
        }
    });


    ////Scroll on menu click
    //$('.cd-scroll-link a').on('click', function(e){
    //    //Get section name from href
    //    var url = $(this).attr('href');
    //    var hash = url.substring(url.indexOf('#'));
    //    //Scroll to section
    //    $('html, body').animate({
    //        scrollTop: $(hash).offset().top
    //    }, 800);
    //    $("html, body").css({
    //        height: 'auto',
    //        overflow: 'visible'
    //    });
    //    $(".cd-mobile-menu").fadeOut('fast');
    //});


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
