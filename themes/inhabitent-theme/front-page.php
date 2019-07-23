<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div class="logo-front">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-full.svg" alt="inhabitent logo">					
	</div>
	
<?php //the_content(); ?>


<div class='heroimg'>
<?php 
if ( has_post_thumbnail() ) {
the_post_thumbnail();
}  ?>
</div>

<h1 class="title_front"> SHOP STUFF </h1>

<section class="taxo-square">
<?php $get_term = get_terms( 'product_type') ?>

<?php foreach ( $get_term as $postfront ) : setup_postdata( $postfront );?>

<div class="rect-image">

<img src=<?php echo get_template_directory_uri().'/images/product-type-icons/'.$postfront->slug.'.svg'?>>
<p class="context">
	 <?php echo $postfront->description?> 
</p> 

<a href="<?php echo get_term_link($postfront)?>">
<?php echo $postfront->name?> stuff
</a>
</div>

<?php endforeach; wp_reset_postdata(); ?>
</section>

<h1 class="title_front"> INHABITENT JOURNAL </h1>
<div class="front-post-wrap">

<?php $args = array(
   'order' => 'ASC',
   'posts_per_page' => 3,
   'post_type' => array('post'),
);
$query = new WP_Query( $args ); ?>


<?php $query = new WP_Query( $args ); /* $args set above*/ ?>
<?php if ( $query->have_posts() ) : ?>
   <?php while ( $query->have_posts() ) : $query->the_post(); ?><div class="front-wrap-container">
	  <div class="front-post-container"> <?php the_post_thumbnail(); ?></div>
	  <div class="post-info">
	 <div class="front-comments"> <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?></div>
	  <div class="front-post-title"><?php the_title(sprintf( '<h2 class="frontpost"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>'); ?>
	  </div>
	  <div class="buttonfront">
	  <a href="<?php echo esc_url( get_permalink() )?>"> READ ENTRY → </a></span>
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

