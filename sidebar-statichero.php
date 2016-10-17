
    <!-- ******************* The Hero Widget Area ******************* -->
    <?php $embed = get_post_meta(get_the_ID(), 'page_embed_link', true); ?>

    <div class="wrapper" id="wrapper-static-hero">
        <div class="overlay-video"></div>
        <div class="video-container">
            <iframe width="100%" height="750px" src="<?php echo $embed ?>?autoplay=1&loop=1&playlist=p2dOfiEGjRI&controls=0&cc_load_policy=1&fs=0&iv_load_policy=3&modestbranding=1&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe>
        <?php require get_template_directory() . '/page-templates/section-home-request.php' ?>
        </div>

    </div><!-- #wrapper-static-hero -->

