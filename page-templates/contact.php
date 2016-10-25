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
    <div class="wrapper" id="wrapper-nav-only   ">

    </div><!-- #wrapper-static-hero -->

    <div class="wrapper" id="wrapper-index">
    <div  id="content">

            <main id="main" class="site-main" role="main">
                <div class="container">

                <div class="row">

                    <h1><?php _e('Wir freuen uns auf Sie', 'airteam'); ?></h1>

                    <div class="col-md-3">
                    <div class="contact-icon"><img src="" /></div>
                        <h5><?= $phone_text ?></h5>
                        <a href=""><?= $phone ?></a>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-icon"><img src="" />
                            <?= $sms_text ?>
                        </div>
                        <a href=""><?= $sms ?></a>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-icon"><img src="" />
                            <?= $email_text ?>
                        </div>
                        <a href=""><?= $email ?></a>


                    </div>
                    <div class="col-md-3">
                        <div class="contact-icon"><img src="" /></div>
                        <h5><?= $address_text ?></h5>
                        <a href=""><?= $address ?></a>
                    </div>

                </div>

                </div>

                <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6"><?php echo $map_embed ?></div>
                </div>
                </div>



            </main><!-- #main -->

    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>