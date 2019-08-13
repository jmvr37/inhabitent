<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article class="single-product-class" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-price"><?php echo CFS()->get( 'price' ); ?></div>

		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
		<div class="social-button">
			<button  type="button" class="sbutton"><i class="fab fa-facebook-f"></i> LIKE </button>
			<button  type="button" class="sbutton"><i class="fab fa-twitter"></i> TWEET </button>
			<button  type="button" class="sbutton"><i class="fab fa-pinterest-p"></i> PIN </button>
		</div>
	</footer><!-- .entry-footer -->
	</div><!-- .entry-content -->

</article><!-- #post-## -->
