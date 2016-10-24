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

?>
    <div class="wrapper" id="wrapper-nav-only   ">

    </div><!-- #wrapper-static-hero -->

    <div class="wrapper" id="wrapper-index">
    <div  id="content" class="container">

            <main id="main" class="site-main" role="main">


                <div class="row">

                    <h1><?php _e('Wir freuen uns auf Sie', 'airteam'); ?></h1>

                    <div class="col-md-3">
                    <div class="contact-icon"><img src="" /></div>
                        <h5>Rufen Sie uns an</h5>
                        <a href=""></a>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-icon"><img src="" /></div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-icon"><img src="" /></div>

                    </div>
                    <div class="col-md-3">
                        <div class="contact-icon"><img src="" /></div>

                    </div>

                </div>



            </main><!-- #main -->

    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>