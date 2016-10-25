<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a class="btn btn-secondary" style="margin-bottom:20px;" href="<?php echo site_url() . '/blog' ?>"><i class="fa fa-angle-left" style="color:white;padding-right:10px;"></i><?php _e('Zurück','airteam'); ?></a>
	<div class="container-fluid">
		<div class="row">
     <div class="post-image"><?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> </div>
		</div>
	</div>
	<div class="container">
		<div class="row">
	<header class="entry-header">

		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>



	</header><!-- .entry-header -->

	<div class="entry-meta">

		<?php understrap_posted_on(); ?>

	</div><!-- .entry-meta -->
    
	<div class="entry-content row">

		<div class="col-md-12"><?php the_content(); ?></div>
		


	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->
		</div>
	</div>

</article><!-- #post-## -->
