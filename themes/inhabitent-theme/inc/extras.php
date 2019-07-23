<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	if ( is_page( 'HOME' ) ) {
        $classes[] = 'home-page';
	}

	if ( is_page( 'ABOUT' ) ) {
        $classes[] = 'about-page';
	}
	if ( is_page( 'FINDUS' ) ) {
	$classes[] = 'find-page';
	
	}
	if ( is_page( 'single-product' ) ) {
		$classes[] = 'single-product';
		
		}

	if ( is_page( 'taxonomy-product_type' ) ) {
			$classes[] = 'tax';
			
		}

		// Separates class names with a single space, collates class names for body element

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );



function childtheme_custome_login() {
	echo	'<style>
	#login h1 a {
	background-image: url(' . get_template_directory_uri() . '/project-04/images/logos/inhabitent-logo-text-dark.svg );
	padding-bottom: 0px;
	background-size: 300px;
	width: 100%;
	}
	</style>';
}

add_action( 'login_head', 'childtheme_custome_login' );

function the_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );