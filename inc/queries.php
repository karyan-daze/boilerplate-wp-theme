<?php
/**
 * File that contains all the Custom Post Type queries for the sections
 * @param $prefix
 * get_benefits
 * get_partners
 * get_media
 * get_testimonials
 *
 * AVAILABLE PARAMETERS
 *  * Loading the custom posts
 * Benefits:
 * @params: benefit_image: url
 * @params benefit_description: text
 * Partners:
 * @params: partner_image: url
 * @params:
 * Media
 * @params: media_caption: text
 * @params: media_image: url
 * @params: media_video: url
 * register taxonomy
 * @category: (taxonomy): image or video
 *
 * Testimonials
 * @params: customer_description: text
 * @params: customer_name: text
 * @params: customer_job_title: text
 * @params: customer_image: url
 */


function airteam_get_medias()
{

    $args = array(
        'post_type' => array('medias'),
        'post_status' => 'publish',
    );

// The Query
    $query = new WP_Query($args);
    $count_posts = $query->found_posts;

    if($count_posts > 0) :
    $class = count_columns($count_posts);
    else:
        $class = '';
    endif;

// The Loop
    $count = 0;
    while ($query->have_posts()) :
        $count++;
        $query->the_post();

        ?>
        <div class="benefit <?php echo $class; ?>">

            <div class="benefit-icon">
                <img src="<?php the_post_thumbnail_url('medium'); ?>"/>
            </div>
            <h4><?php the_title(); ?></h4>
        </div>
    <?php endwhile;

    //wp_reset_query();
}


function airteam_get_benefits()
{

    $args = array(
        'post_type' => array('benefits'),
        'post_status' => 'publish',
    );

// The Query
    $query = new WP_Query($args);
    $count_posts = $query->found_posts;

    $class = count_columns($count_posts);

// The Loop
    $count = 0;
    while ($query->have_posts()) :
        $count++;
        $query->the_post();

        ?>
        <div class="benefit <?php echo $class; ?>">

                <div class="benefit-icon">
                <img src="<?php the_post_thumbnail_url('medium'); ?>"/>
                </div>
            <h4><?php the_title(); ?></h4>
        </div>
    <?php endwhile;

    //wp_reset_query();
}

function airteam_get_partners()
{

    $args = array(
        'post_type' => array('partners'),
        'post_status' => 'publish',
    );

// The Query
    $query = new WP_Query($args);
    $count_posts = $query->found_posts;

    $class = count_columns($count_posts);

// The Loop
    $count = 0;
    while ($query->have_posts()) :
        $count++;
        $query->the_post();

        ?>
        <div class="benefit <?php echo $class; ?>">

            <div class="benefit-icon">
                <img src="<?php the_post_thumbnail_url('medium'); ?>"/>
            </div>
            <h4><?php the_title(); ?></h4>
        </div>
    <?php endwhile;

    //wp_reset_query();
}

function airteam_get_media()
{
    $prefix = 'media';
    $args = array(
        'post_type' => array('medias'),
        'post_status' => 'publish',
    );

// The Query
    $query = new WP_Query($args);
    $count_posts = $query->found_posts;

    $class = count_columns($count_posts);

// The Loop
    $count = 0;
    while ($query->have_posts()) :
        $count++;
        $query->the_post();

        ?>
        <div class="<?= $prefix ?> <?= $class; ?>">

            <div class="<?php echo $prefix; ?> image">
                <img src="<?php the_post_thumbnail_url('medium'); ?>"/>
            </div>
            <h4><?php the_title(); ?></h4>
        </div>
    <?php endwhile;

    //wp_reset_query();
}

function airteam_get_testimonials()
{

    $prefix = 'testimonial';

    $args = array(
        'post_type' => array('testimonials'),
        'post_status' => 'publish',
    );

// The Query
    $query = new WP_Query($args);
    $count_posts = $query->found_posts;

    $class = count_columns($count_posts);

// The Loop
    $count = 0;
    while ($query->have_posts()) :
        $count++;
        $query->the_post();
        $name = get_post_meta(get_the_ID(), $prefix.'_name', true);
        $job_title = get_post_meta(get_the_ID(), $prefix.'_job_title', true);

        ?>
        <div class="<?= $prefix ?> <?= $class; ?>">

            <div class="<?php echo $prefix; ?> image">

                <img src="<?php the_post_thumbnail_url('medium'); ?>"/>
            </div>

            <p>
                <?php the_content(); ?>
            </p>
            <h4><?= $name ?>, <?= $job_title ?></h4>
        </div>
    <?php endwhile;

    //wp_reset_query();
}

function airteam_get_teams()
{

    $prefix = 'team';

    $args = array(
        'post_type' => array('teams'),
        'post_status' => 'publish',
    );

// The Query
    $query = new WP_Query($args);
    $count_posts = $query->found_posts;

    $class = count_columns($count_posts);

// The Loop
    $count = 0;
    while ($query->have_posts()) :
        $count++;
        $query->the_post();
        $name = get_post_meta(get_the_ID(), $prefix.'_name', true);
        $job_title = get_post_meta(get_the_ID(), $prefix.'_job_title', true);

        ?>
        <div class="<?= $prefix ?> <?= $class; ?>">

            <div class="<?php echo $prefix; ?> image">

                <img src="<?php the_post_thumbnail_url('medium'); ?>"/>
            </div>

            <p>
                <?php the_content(); ?>
            </p>
            <h4><?= $name ?>, <?= $job_title ?></h4>
        </div>
    <?php endwhile;

    //wp_reset_query();
}
