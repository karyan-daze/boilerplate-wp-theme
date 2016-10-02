<div id="main-team" class="<?php echo $row_class ?>">

    <div class="col-md-6">
        <?php foreach ( $main_images as $image ) : ?>
        <?php if(!empty($image['url'])) : ?>
                <img class="team_main" src="<?php echo $image['full_url']; ?>" />
                <h4><?php echo $main_full_name ?></h4>
                <p><?php echo $main_job_title ?></p>

            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <div class="col-md-6">
        <h2><?php echo $main_title ?></h2>
        <p><?php echo $main_description ?></p>

    </div>

</div>


<div id="team" class="<?php echo $row_class ?>">
        <h2 class="title text-xs-center"><?php _e('Team','airteam'); ?></h2>
            <?php airteam_get_teams(); ?>
</div>


