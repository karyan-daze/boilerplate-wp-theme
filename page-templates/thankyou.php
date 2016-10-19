<?php
/**
 * Template Name: Thank You
 *
 * Template for the Thank you page
 * We might also save it in a db to be sure
 * TODO should not be read by google
 *
 *
 * @package airteam
 */

get_header();

?>
    <div class="wrapper" id="wrapper-nav-only">

    </div><!-- #wrapper-static-hero -->

    <div class="wrapper thank-you" id="wrapper-index">
    <div id="content" class="container-fluid">

            <main id="main" class="site-main" role="main">


                <div class="row">
                    <div class="container">

                        <div class="col-md-6 offset-md-3">
                            <div class="monkey-image">
                            <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/static/monkey.svg'); ?>

                            </div>
                            <div class="thank-you-text">
                                <h4 class="text-xs-center"><?= _e('Vielen Dank!', 'airteam') ?></h4>

                                <?php if ($_SERVER['HTTP_REFERER'] == site_url(). '/anfrage/') : ?><p class="text-xs-center"><?= _e('Wir prüfen deine Angaben und melden uns in Kürze bei dir (max. 48 Stunden) mit allen nötigen Informationen für die Durchführung des Drohnenflugs. ', 'airteam') ?></p><?php endif; ?>
                                <?php if ($_SERVER['HTTP_REFERER'] == site_url(). '/pilot-werden/') : ?><p class="text-xs-center"><?= _e('Wir freuen uns sehr, dass du bei AIRTEAM Pilot werden willst. Bevor du lals AIRTEAM Pilot loslegen kannst dauert es noch ein wenig, bis wir deine Eingaben geprüft haben. Sobald das geschehen ist (max. 48 Stunden), melden wir uns bei dir. ', 'airteam') ?></p><?php endif; ?>
                            </div>
                        </div>
                        </div>
                    </div>

            </main><!-- #main -->

    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer();

?>