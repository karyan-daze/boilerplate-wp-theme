<?php
/**
 * Template Name: Team
 *
 * Template for displaying the Team
 *
 * @package airteam.camera
 */

?>

    <?php
        get_header();
        $title = get_post_meta(get_the_ID(), 'page_title', true);
        $images = rwmb_meta( 'page_hero_image' );

?>


<div class="wrapper" id="wrapper-static-hero">
    <?php foreach ( $images as $image ) : ?>
    <?php if(empty($image['url'])) : ?>
        <img class="hero-image" src="<?php echo get_stylesheet_directory_uri() ?>/assets/static/preview.jpg" />

    <?php else : ?>
        <img class="hero-image" src="<?php echo $image['full_url']; ?>" />

    <?php endif; ?>
    <?php endforeach; ?>

    <h3 class="text-xs-center"><?php echo $title ?></h3>

    </div><!-- #wrapper-static-hero -->

<?php
$row_class = 'row m-t-3 m-b-3'
?>

    <div class="wrapper" id="wrapper-index">

        <div id="content">

            <div class="container">

                <?php require get_template_directory() . '/page-templates/section-team.php'; ?>


            </div><!-- #row -->

    </div><!-- Container end -->

    </div><!-- Wrapper end -->

<?php get_footer(); ?>