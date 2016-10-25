<?php
/**
 * Template Name: Pricing
 *
 * Template for displaying the Pricing section
 *
 * @package airteam.camera
 *
 * Parameters available on the faq page for showing the right content
 *
 * @params: title
 * @params: content
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
$row_class = 'row m-t-1 m-b-3'
?>

    <div class="wrapper" id="wrapper-index">

        <div id="content">

            <div class="container">

                <?php require get_template_directory() . '/page-templates/section-pricing.php'; ?>


            </div><!-- #row -->

        </div><!-- Container end -->

    </div><!-- Wrapper end -->
<script>
    jQuery(document).ready(function() {

        jQuery('.faq-title a').click(function(){
            // if the class contains "COLLAPSED"
            // WE NEED A BORDER
            console.log(jQuery(this));

        });

        jQuery('.faq-title a').click(function(){
            jQuery('.collapsed').parent('.faq-title').addClass('notselected')
        });

        });
</script>

<?php get_footer(); ?>