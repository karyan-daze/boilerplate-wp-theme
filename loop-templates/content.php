<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    

       <div class="post-image"><?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> </div>

	<header class="entry-header col-md-12">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->
    
		<div class="entry-content col-md-12">

	            <?php
	                the_excerpt();
	            ?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links"><i class="fa fa-angle-double-left" aria-hidden="true"></i>' . __( '', 'understrap' ),
					'after'  => '</div>',
				) );
			?>
	        
		</div><!-- .entry-content -->




    
</article><!-- #post-## -->