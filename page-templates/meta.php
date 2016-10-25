<?php
/**
 * Template Name: Meta
 *
 * Template for displaying META pages
 *
 * @package airteam.camera
 *
 *
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
                <img class="hero-image static-header" src="<?php echo $image['full_url']; ?>" />

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

        <div id="content" class="container">

            <div class="row">

                <div class="col-md-8 offset-md-2">
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :

                            comments_template();

                        endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>
                    </div>
            </div><!-- .row -->

        </div><!-- Container end -->

    </div><!-- Wrapper end -->

<?php get_footer(); ?>