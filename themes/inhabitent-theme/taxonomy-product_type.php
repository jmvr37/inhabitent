<?php
/**
 * The template for displaying  'product type ' archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					single_term_title('<h1 class="page-title">', '</h1>');
					
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class='gridwrapper'>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

            <div class='gridcontainer'>
         <div class='postgrid'>
         <div class='pimg'><a href="<?php echo get_permalink()?>"><img src="<?php echo CFS()->get( 'featured_image' ); ?>" /></a> </div>
         <div class='Product-type'>
         <h1 class='ptitle'><?php the_title(); ?></h1>
         <span class='pprice'><?php echo CFS()->get( 'price' ); ?></span>
        </div>
        </div>
   </div>


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>