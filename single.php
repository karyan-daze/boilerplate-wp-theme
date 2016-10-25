<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();


?>
<div class="wrapper" id="wrapper-nav-only   ">

</div><!-- #wrapper-static-hero -->

<div class="wrapper" id="single-wrapper">
    
    <div  id="content" class="container">

        <div class="row">
        
            <div id="primary" class="col-md-8 offset-md-2 content-area">
                
                <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'loop-templates/content', 'single' ); ?>

                        
                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->
                
            </div><!-- #primary -->
        
        <?php get_sidebar(); ?>

        </div><!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
