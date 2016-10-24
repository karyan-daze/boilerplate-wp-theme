<?php
/**
 * Template Name: Record Request
 *
 * Template for displaying a two step contact form that sends an email.
 * We might also save it in a db to be sure
 *
 * @package understrap
 */

get_header();

$title = get_post_meta(get_the_ID(), 'page_title', true);
$images = rwmb_meta( 'page_hero_image' );

?>
    <div class="wrapper" id="wrapper-nav-only   ">

    </div><!-- #wrapper-static-hero -->

    <div class="wrapper" id="wrapper-index">
    <div  id="content" class="container">

            <main id="main" class="site-main" role="main">

                <?php require get_template_directory() . '/page-templates/section-request.php'; ?>


            </main><!-- #main -->

    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>