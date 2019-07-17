<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<?php $args = array(
   'order' => 'ASC',
   'posts_per_page' => 16,
   'post_type' => array('product'),
);
$query = new WP_Query( $args ); ?>

<?php $query = new WP_Query( $args ); /* $args set above*/ ?>
<?php if ( $query->have_posts() ) : ?>
   <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <img src="<?php echo CFS()->get( 'featured_image' ); ?>" /> 
      <?php echo CFS()->get( 'price' ); ?>
   <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>



<?php get_footer(); ?>