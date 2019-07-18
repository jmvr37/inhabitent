<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="logo-front">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-full.svg" alt="inhabitent logo">					
	</div>
	
<?php the_content(); ?>


<div class='heroimg'>
<?php 
if ( has_post_thumbnail() ) {
the_post_thumbnail();
}  ?>
</div>


<ul>

<?php $args = array(
   'order' => 'ASC',
   'posts_per_page' => 3,
   'post_type' => array('post'),
);
$query = new WP_Query( $args ); ?>


<?php $query = new WP_Query( $args ); /* $args set above*/ ?>
<?php if ( $query->have_posts() ) : ?>
   <?php while ( $query->have_posts() ) : $query->the_post(); ?><li>
	  <?php the_post_thumbnail(); ?>
	  <h1><?php the_title(); ?></h1>
	  </li>
   <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>

</ul>

<?php get_footer(); ?>

