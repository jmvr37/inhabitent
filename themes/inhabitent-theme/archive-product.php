<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<!-- /* taxonomie query */ -->

<?php
$taxonomies = get_taxonomies();
if ( ! empty( $taxonomies ) ) : ?>
    <ul>
        <?php
        foreach ( $taxonomies as $taxonomy ) {
            echo '<li>' . $taxonomy . '</li>';
        }
        ?>
    </ul>
<?php endif; ?>


<div class='gridwrapper'>
   
   <?php $args = array(
   'order' => 'ASC',
   'posts_per_page' => 16,
   'post_type' => array('product'),
);
$query = new WP_Query( $args ); ?>

<?php if ( $query->have_posts() ) : ?>
   <?php while ( $query->have_posts() ) : $query->the_post(); ?>

      <div class='gridcontainer'>
         <div class='postgrid'>
         <div class='pimg'><img src="<?php echo CFS()->get( 'featured_image' ); ?>" /> </div>
         <div class='Product-type'>
         <h1 class='ptitle'><?php the_title(); ?></h1>
         <span class='pprice'><?php echo CFS()->get( 'price' ); ?></span>
</div>
      </div>
   </div>

   <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>

</div>


<?php get_footer(); ?>