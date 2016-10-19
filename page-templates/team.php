<?php
/**
 * Template Name: Team
 *
 * Template for displaying the Team
 *
 * @package airteam.camera
 *
 * Parameters available on the team page for showing the right content
 *
 * @params: page_title
 * @params: page_hero_image
 * @params: page_team_job_title
 * @params: page_team_name
 * @params: page_team_description
 * @params: page_team_title
 * @params: page_team_image
 *
 */

?>

    <?php
        get_header();
        $title = get_post_meta(get_the_ID(), 'page_title', true);
        $images = rwmb_meta( 'page_hero_image' );

        $main_job_title = get_post_meta(get_the_ID(), 'page_team_job_title', true);
        $main_full_name = get_post_meta(get_the_ID(), 'page_team_name', true);
        $main_description = get_post_meta(get_the_ID(), 'page_team_description', true);
        $main_title = get_post_meta(get_the_ID(), 'page_team_title', true);
        $main_images = rwmb_meta( 'page_team_image' );


?>


<div class="wrapper" id="wrapper-static-hero">
    <?php foreach ( $images as $image ) : ?>
    <?php if(empty($image['url'])) : ?>


        <img class="hero-image" src="<?php echo get_stylesheet_directory_uri() ?>/assets/static/preview.jpg" />

    <?php else : ?>
            <picture class="hero-image static-header">
                <img src="<?php echo $image['full_url'] ?>" sizes=""
                     srcset="<?php echo $image['srcset']; ?>">
            </picture>



    <?php endif; ?>
    <?php endforeach; ?>
    <div class="overlay-static">
    <h1 class="text-xs-center"><?php echo $title ?></h1>
        <div class="border-text-bottom center-block"></div>
    </div>
    </div><!-- #wrapper-static-hero -->

<?php
$row_class = 'row m-t-3 m-b-3'
?>

    <div class="wrapper" id="wrapper-index">

        <div id="content">


                <?php require get_template_directory() . '/page-templates/section-team.php'; ?>



    </div><!-- Container end -->

    </div><!-- Wrapper end -->

<?php get_footer(); ?>