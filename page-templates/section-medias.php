<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div id="medias" class="<?php echo $row_class; ?>">


            <div class="row"><div class="filter-media col-md-4 offset-md-4">
                <div class="filter-image"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/static/video.svg'?>" width="15px" />Video</div>
                <input id="toggle-event" type="checkbox" checked data-toggle="toggle" data-on="" data-off="" data-onstyle="" data-offstyle="">
                <div class="filter-video"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/static/image.svg'?>" width="15px">Fotografie</div>
            </div>
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



        jQuery('#toggle-event').change(function() {
            jQuery('#console-event').html('Toggle: ' + jQuery(this).prop('checked'))
            if(jQuery(this).prop('checked')) {
                // hide all the images
                // show the videos
                jQuery('.object-image.hide-0').show(400, "linear");
                jQuery('.object-video.hide-1').hide(400, "linear");
                jQuery('.object-video.hide-0').hide(400, "linear");
            }
            if (jQuery(this).prop('checked') == false){



                jQuery('.object-image.hide-0').hide(400, "linear");
                jQuery('.object-image.hide-1').hide(400, "linear");
                jQuery('.object-image').hide(400, "linear");
                jQuery('.object-video').show(400, "linear");
                console.log(jQuery(this).prop('checked'));

            }

        })

        jQuery('#load-more').on('click', function(){
            if(jQuery('#toggle-event').prop('checked') == true){
                jQuery('.object-image.hide-1').show(400, "linear");
            } else {

                jQuery('.object-video.hide-1').show(400);
            }
        })
    })


</script>

