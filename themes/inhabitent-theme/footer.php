<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="contact">
						<h3>CONTACT INFO</h3>
						<p>
						<i class="far fa-envelope"></i>
						<a href="#">info@inhabitent.com</a>
						</p>
						<p>
						<i class="fas fa-phone-square-alt"></i>
						<a href="#">778-456-7891</a>
						</p>	
						<p>
						<i class="fab fa-facebook-square"></i>
						<i class="fab fa-instagram"></i>
						<i class="fab fa-google-plus-g"></i>
						</p>
					</div>
					<div class="hours">
						<h3>BUSINESS HOURS</h3>
						<p><span class="days">Monday-Friday:</span> 9am to 5pm</p>
						<p><span class="days">Saturday:</span> 10am to 2pm</p>
						<p><span class="days">Sunday:</span> Closed</p>
					</div>
					<div class="logo-footer">
						<a href="#" rel="home">
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-text.svg" alt="inhabitent logo">
						</a>

					</div>
					

					<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
				</div><!-- .site-info -->
				<div class='container'>
						<div class='footer2'>
							Copyright © 2019 Inhabitent	
						</div>
					</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<!-- <?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
				}  ?> -->

		<?php wp_footer(); ?>

	</body>
</html>
