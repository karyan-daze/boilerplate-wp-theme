
    jQuery(document).ready(function() {
        var owl = jQuery('.owl-carousel');
        owl.owlCarousel({
            items:(understrap_slider_variables.items),
            loop:true,
            autoplay:true,
            autoplayTimeout:(understrap_slider_variables.timeout),
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: false,
            dots: true,
            autoplayHoverPause:true,
            margin:0,
            autoHeight:true
        });

        jQuery('.play').on('click',function(){
            owl.trigger('autoplay.play.owl',[1000])
        });
        jQuery('.stop').on('click',function(){
            owl.trigger('autoplay.stop.owl')
        });
    });


    function scroll_to_class(chosen_class) {
        var nav_height = jQuery('nav').outerHeight();
        var scroll_to = jQuery(chosen_class).offset().top - nav_height;

        if(jQuery(window).scrollTop() != scroll_to) {
            jQuery('html, body').stop().animate({scrollTop: scroll_to}, 1000);
        }
    }


    jQuery(document).ready(function() {
        /*
         Fullscreen background
         */
        /*
         Multi Step Form
         */
        jQuery('.msf-form form fieldset:first-child').fadeIn('slow');

        // next step
        jQuery('.msf-form form .btn-next').on('click', function() {
            jQuery(this).parents('fieldset').fadeOut(400, function() {
                jQuery(this).next().fadeIn();
                scroll_to_class('.msf-form');
            });
        });

        // previous step
        jQuery('.msf-form form .btn-previous').on('click', function() {
            jQuery(this).parents('fieldset').fadeOut(400, function() {
                jQuery(this).prev().fadeIn();
                scroll_to_class('.msf-form');
            });
        });




    });

