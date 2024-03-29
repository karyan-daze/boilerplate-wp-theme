<?php
/**
 * Template Name: Home
 *
 * Template for displaying the home page section
 *
 * @package airteam.camera
 */

?>

    <?php get_header(); ?>

<?php

$embed = get_post_meta(get_the_ID(), 'page_embed_link', true);

get_sidebar('hero');

get_sidebar('statichero');

$row_class = 'row m-t-3 m-b-3'
?>

    <div class="wrapper" id="wrapper-index">

        <div id="content">

            <div class="container">

                <?php require get_template_directory() . '/page-templates/section-benefits.php'; ?>


            </div><!-- #row -->

            <div class="container">
                <?php require get_template_directory() . '/page-templates/section-partners.php'; ?>
            </div>

            <div class="container-fluid" style="background-size:cover;background-image:url('<?php echo get_stylesheet_directory_uri() .'/assets/static/background.jpg'; ?>')">
                <?php require get_template_directory() . '/page-templates/section-info.php'; ?>

            </div>

            <div class="container">
                <?php require get_template_directory() . '/page-templates/section-medias.php'; ?>
            </div>

            <div class="container-fluid">
                <?php require get_template_directory() . '/page-templates/section-testimonials.php'; ?>
            </div>

            <div class="container-fluid">
                <?php require get_template_directory() . '/page-templates/section-contact.php'; ?>
            </div>
    </div><!-- Container end -->

    </div><!-- Wrapper end -->

<?php get_footer(); ?>