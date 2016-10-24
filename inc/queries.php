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
            global $post;
            $medias = rwmb_meta( 'media_file' );
            $video_id = get_post_meta(get_the_ID(), 'media_embed_link', true);




            ?>
             <?php if($count < 6) :
                $newClass = 'hide-0';
                    elseif($count > 6) :
                    $newClass = 'hide-1';
            endif ?>

            <?php if( has_term( 'video', 'media_category' ) ) : ?>

            <div class="media col-md-4 object-<?php echo $count ?> object-video <?php echo $newClass ?>" data-href="http://www.youtube.com/watch?v=<?php echo $video_id ?>&amp;fs=1&amp;autoplay=1" data-title="<?php the_title(); ?>">

    <!--            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/--><?php //echo $video_id ?><!--?controls=0&cc_load_policy=1&fs=0&iv_load_policy=3&modestbranding=0&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe>-->
            <img src="http://img.youtube.com/vi/<?php echo $video_id ?>/0.jpg" />
            <i class="fa fa-play" aria-hidden="true"></i>
            <?php elseif( has_term( 'image', 'media_category' )): ?>


                <?php foreach ( $medias as $media ) :
              if(!empty($media['url'])) :
             $image_id = $media['ID']; ?>

                   <div class="media col-md-4 object-<?php echo $count ?> object-image <?php echo $newClass ?>" data-href="<?php echo $media['url'] ?>" data-title="<?php the_title(); ?>">

                  <?php

                    $image = RWMB_Image_Field::file_info( $image_id, array( 'size' => 'medium_large' ) );
            echo '<img src="' . $image['url'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '">';
            endif;
            endforeach; ?>
            <?php endif; ?>


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
            <h4 class="text-xs-center"><?php the_title(); ?></h4>
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
        <div class="partner">

            <div class="partner-image ">
                <img src="<?php the_post_thumbnail_url('medium'); ?>"/>
            </div>
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

            <div class="<?php echo $prefix; ?>_image">

                <img src="<?php the_post_thumbnail_url('medium'); ?>"/>
            </div>
             <div class="description"><?php the_content(); ?></div>
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

    $class = 'col-md-4';

// The Loop
    $count = 0;
    while ($query->have_posts()) :
        $count++;
        $query->the_post();
        $name = get_post_meta(get_the_ID(), $prefix.'_name', true);
        $job_title = get_post_meta(get_the_ID(), $prefix.'_job_title', true);
        $link = get_post_meta(get_the_ID(), $prefix.'_link', true);


        ?>
        <a href="<?php echo $link ?>"><div class="<?= $prefix ?> <?= $class; ?>">

            <div class="<?php echo $prefix; ?> image">

                <img src="<?php the_post_thumbnail_url('medium'); ?>"/>
                <div class="team-overlay">
                    <h4><?= $name ?></h4>
                    <span><?= $job_title ?></span>
                </div>
            </div>

        </div></a>
    <?php endwhile;

    //wp_reset_query();
}


function airteam_get_faqs(){
    $prefix = 'faq';

    $args = array(
        'post_type' => array('faq'),
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
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading-<?php echo $count ?>">
                <h4 class="panel-title faq-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $count ?>" aria-expanded="true" aria-controls="collapse-<?php echo $count ?>">
                        <?php the_title(); ?>
                        <i class="fa fa-angle-down"></i>
                    </a>

                </h4>
            </div>
            <div id="collapse-<?php echo $count ?>" class="faq-description panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-<?php echo $count ?>">
<?php the_content(); ?>
            </div>
        </div>

<?php
    endwhile;

}