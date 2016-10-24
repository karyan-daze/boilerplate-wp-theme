<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div id="medias" class="<?php echo $row_class; ?>">


            <div class="row">
                <div class="filter-media">
                    <div class="col-md-1 offset-md-4 filter-video">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/static/video.svg'?>" width="15px" />
                        Video
                    </div>

                    <div class="col-md-1"><div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                        <label class="onoffswitch-label" for="myonoffswitch"></label>
                    </div>
                        </div>
                <div class="col-md-2 filter-image">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/static/image.svg'?>" width="15px">
                    Fotografie
                </div>
                </div>


                <!--                <div class="filter-image"><img src="--><?php //echo get_stylesheet_directory_uri() . '/assets/static/video.svg'?><!--" width="15px" />Video</div>-->
<!--                <input id="toggle-event" type="checkbox" checked data-toggle="toggle" data-on="" data-off="" data-onstyle="" data-offstyle="">-->
<!--                <div class="filter-video"><img src="--><?php //echo get_stylesheet_directory_uri() . '/assets/static/image.svg'?><!--" width="15px">Fotografie</div>-->
    </div>
            <?php airteam_get_medias(); ?>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="btn btn-primary btn-lg" id="load-more"><?php _e('Weitere Laden','') ?></div>
                </div>
                </div>
</div>

<script>

    jQuery(function() {
        // default selecting is: Video
        // So we hide all the images
        jQuery('.object-image').hide();
        jQuery('.object-video.hide-0').show();
        jQuery('.object-video.hide-1').hide();



        jQuery('.onoffswitch-checkbox').change(function() {
            if(jQuery(this).prop('checked')) {
                console.log('checked show me videos');
                // hide all the images
                // show the videos
                jQuery('.object-image.hide-0').hide(400, "linear");
                jQuery('.object-image.hide-1').hide(400, "linear");
                jQuery('.object-video.hide-1').hide(400, "linear");
                jQuery('.object-video.hide-0').show(400, "linear");
            }
            if (jQuery(this).prop('checked') == false){
                console.log('not checked show me images')


                jQuery('.object-image.hide-0').show(400, "linear");
                jQuery('.object-image.hide-1').hide(400, "linear");
                jQuery('.object-video.hide-0').hide(400, "linear");
                jQuery('.object-video.hide-1').hide(400, "linear");
                console.log(jQuery(this).prop('checked'));

            }

        })

        jQuery('#load-more').on('click', function(){
            if(jQuery('.onoffswitch-checkbox').prop('checked') == true){
                jQuery('.object-video.hide-1').show(400);
            } else {
                jQuery('.object-image.hide-1').show(400, "linear");

            }
        })
    })
    $ = jQuery;
    $(document).ready(function() {

        $(".object-video").on('click', function(){
            console.log('clicked that yt link')
            var data = jQuery(this).data('href');
            var title = jQuery(this).data('title');
            console.log(data);
            $.fancybox({
                'padding'        : 0,
                'autoScale'      : false,
                'transitionIn'   : 'none',
                'transitionOut'  : 'none',
                'title'          : title,
                'width'          : 680,
                'height'         : 495,
                'href'           : data.replace(new RegExp("watch\\?v=", "i"), 'v/'),
                'type'           : 'swf',
                'swf'            : {
                    'wmode'              : 'transparent',
                    'allowfullscreen'    : 'true'
                }
            });
            return false;
        });
        $(".object-image").on('click', function(){
            console.log('clicked that image link')
            var data = jQuery(this).data('href');
            var title = jQuery(this).data('title');
            console.log(data);
            $.fancybox({
                'padding'        : 0,
                'autoScale'      : true,
                'transitionIn'   : 'none',
                'transitionOut'  : 'none',
                'title'          : title,
                'openEffect'     : 'elastic',
                'href'           : data,
            });
            return false;
        });
    });
    $('#foo').bind('click', function() {
        alert($(this).text());
    });
    $('#foo').trigger('click');


</script>

