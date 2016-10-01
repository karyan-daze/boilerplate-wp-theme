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

            <div class="container-fluid">
                <?php require get_template_directory() . '/page-templates/section-info.php'; ?>

            </div>

            <div class="container">
                <?php require get_template_directory() . '/page-templates/section-medias.php'; ?>
            </div>

            <div class="container">
                <?php require get_template_directory() . '/page-templates/section-testimonials.php'; ?>
            </div>
    </div><!-- Container end -->

    </div><!-- Wrapper end -->

<?php get_footer(); ?>