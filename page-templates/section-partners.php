<div id="partners" class="<?php echo $row_class; ?>">
    <h2 class="title text-xs-center"><?php _e('Wir arbeiten mit','airteam'); ?></h2>
    <div id="owl-partners" class="owl-carousel">
    <?php airteam_get_partners(); ?>
    </div>
</div>

<script>
    jQuery(document).ready(function(){

        jQuery("#owl-partners").owlCarousel({
            autoHeight: true,
            autoPlay: true,
            items : 5, //10 items above 1000px browser width
    });

    });
</script>
