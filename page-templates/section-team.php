<div class="container"><div id="main-team" class="<?php echo $row_class ?>">

    <div class="col-md-6">
        <?php foreach ( $main_images as $image ) : ?>
        <?php if(!empty($image['url'])) : ?>
                <div class="team-border">
                    <div class="team-info"><h5 class="team-title"><?php echo $main_full_name ?></h5>
                    <span class="description"><?php echo $main_job_title ?></span>
                    </div>
                </div>
                <img class="team-image" src="<?php echo $image['full_url']; ?>" />

            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <div class="col-md-6">
        <div class="team-about">
        <h2 class="text-xs-center text-md-left"><?php echo $main_title ?></h2>
        <p><?php echo $main_description ?></p>
        </div>
    </div>

</div>
</div>
<div class="container-fluid background-color-main">

<div id="team" class="<?php echo $row_class ?>">
        <div class="col-md-10 offset-md-1 team-content"><h2 class="title text-xs-center"><?php _e('Team Mitglieder','airteam'); ?></h2>
            <?php airteam_get_teams(); ?>
        </div>
</div>
    <div class="<?php echo $row_class; ?> contact-section">
        <div class="col-md-6 offset-md-3">

            <h3 class="text-xs-center title">Willst du mit uns ﬂiegen?</h3>
            <p class="text-xs-center m-t-2">Dann schicke uns hier und jetzt direkt deine Anfrage oder greif einfach zum Hörer +49 30 123456789
            </p>

            <div class="text-xs-center m-t-3"><a class="btn btn-success btn-lg btn-contact black" href="<?php echo site_url() .'/pilot-werden' ?>">JETZT PILOT WERDEN</a>
            </div>

        </div>
    </div>

</div>

