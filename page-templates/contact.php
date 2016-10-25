<?php
/**
 * Template Name: Contact Page
 *
 * Template for displaying all the contact info
 * We might also save it in a db to be sure
 *
 * @package understrap
 */

get_header();

$title = get_post_meta(get_the_ID(), 'page_title', true);
$images = rwmb_meta( 'page_hero_image' );
$contact_title = get_post_meta(get_the_ID(), 'page_contact_title', true);
$phone = get_post_meta(get_the_ID(), 'page_phone', true);
$phone_text = get_post_meta(get_the_ID(), 'page_phone_text', true);
$sms_text= get_post_meta(get_the_ID(), 'page_sms_text', true);
$sms = get_post_meta(get_the_ID(), 'page_sms', true);
$email_text = get_post_meta(get_the_ID(), 'page_email_title', true);
$email = get_post_meta(get_the_ID(), 'page_email', true);
$address_text = get_post_meta(get_the_ID(), 'page_address_text', true);
$address = get_post_meta(get_the_ID(), 'page_address', true);
$map_embed = get_post_meta(get_the_ID(), 'page_maps', true);

$contactform = get_post_meta(get_the_ID(), 'page_contact', true);


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

    <div class="wrapper" id="wrapper-index">
    <div  id="content">

            <main id="main" class="site-main" role="main">
                <div class="container-fluid">

                <div class="row special border-grid">
                    <div class="">
                    <h1 class="text-xs-center"><?php _e('Wir freuen uns auf Sie', 'airteam'); ?></h1>

                    <div class="col-md-3">
                    <div class="contact-icon"><img src="<?php echo get_template_directory_uri().'/assets/static/icon1_2x.png' ?>" /></div>
                        <div class="contact-text"><?= $phone_text ?></div>
                        <a href="tel:<?= $phone ?>"><?= $phone ?></a>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-icon"><img src="<?php echo get_template_directory_uri().'/assets/static/icon2_2x.png' ?>" />

                        </div>
                        <div class="contact-text"><?= $sms_text ?></div>
                        <a href=""><?= $sms ?></a>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-icon"><img src="<?php echo get_template_directory_uri().'/assets/static/icon3_2x.png' ?>" />

                        </div>
                        <div class="contact-text"><?= $email_text ?></div>
                        <a href=""><?= $email ?></a>


                    </div>
                    <div class="col-md-3">
                        <div class="contact-icon"><img src="<?php echo get_template_directory_uri().'/assets/static/icon4_2x.png' ?>" /></div>
                        <div class="contact-text"><?= $address_text ?></div>
                        <a href=""><?= $address ?></a>
                    </div>
                    </div>
                </div>

                </div>

                <div class="container-fluid">

                <div class="row form-map">
                    <div class="col-md-6 special-background"><?php require get_template_directory() . '/page-templates/section-contact-request.php'; ?></div>
                    <div class="col-md-6 map"><?php echo $map_embed ?></div>
                </div>
                </div>



            </main><!-- #main -->

    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>