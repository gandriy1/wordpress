<?php
/**
 * taher functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package taher
 */

require get_template_directory() . '/inc/static-vars.php';

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'taher_setup' ) ) :
	function taher_setup() {
		load_theme_textdomain( 'taher', get_template_directory() . '/languages' );
		//add_theme_support( 'title-tag' );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'taher' ),
				'site-map' => esc_html__( 'Site Map', 'taher' )
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'taher_setup' );

function taher_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'taher_content_width', 1600 );
}
add_action( 'after_setup_theme', 'taher_content_width', 0 );

function taher_scripts() {
	wp_enqueue_style( 'taher-style', get_stylesheet_uri(), array());
	$js_directory = get_stylesheet_directory_uri() .'/assets/js/';
	$js_rev_slider_directory = get_stylesheet_directory_uri() .'/assets/rev-slider/js/';
	$js_rev_slider_directory_extensions = $js_rev_slider_directory .'extensions/';

	wp_enqueue_script( 'jquery1', $js_directory .'jquery.min.js', array(), false, true);
	wp_enqueue_script( 'bootstrap', $js_directory .'bootstrap.min.js', array(), false, true);
	wp_enqueue_script( 'animsition', $js_directory .'animsition.js', array(), false, true);
	wp_enqueue_script( 'plugins', $js_directory .'plugins.js', array(), false, true);
	wp_enqueue_script( 'countTo', $js_directory .'countTo.js', array(), false, true);
	wp_enqueue_script( 'fitText', $js_directory .'fitText.js', array(), false, true);
	wp_enqueue_script( 'flexslider', $js_directory .'flexslider.js', array(), false, true);
	wp_enqueue_script( 'vegas', $js_directory .'vegas.js', array(), false, true);
	wp_enqueue_script( 'owlcarousel', $js_directory .'owlCarousel.js', array(), false, true);
	wp_enqueue_script( 'cube-portfolio', $js_directory .'cube.portfolio.js', array(), false, true);
	wp_enqueue_script( 'main', $js_directory .'main.js', array(), false, true);

	wp_enqueue_script( 'jquery-themepunch-tools', $js_rev_slider_directory .'jquery.themepunch.tools.min.js', array(), false, true);
	wp_enqueue_script( 'jquery-themepunch-revolution', $js_rev_slider_directory .'jquery.themepunch.revolution.min.js', array(), false, true);
	wp_enqueue_script( 'rev-slider', $js_directory .'rev-slider.js', array(), false, true);
	wp_enqueue_script( 'revolution.extension.actions', $js_rev_slider_directory_extensions .'revolution.extension.actions.min.js', array(), false, true);
	wp_enqueue_script( 'revolution.extension.carousel', $js_rev_slider_directory_extensions .'revolution.extension.carousel.min.js', array(), false, true);
	wp_enqueue_script( 'revolution.extension.kenburn', $js_rev_slider_directory_extensions .'revolution.extension.kenburn.min.js', array(), false, true);
	wp_enqueue_script( 'revolution.extension.layeranimation', $js_rev_slider_directory_extensions .'revolution.extension.layeranimation.min.js', array(), false, true);
	wp_enqueue_script( 'revolution.extension.migration', $js_rev_slider_directory_extensions .'revolution.extension.migration.min.js', array(), false, true);
	wp_enqueue_script( 'revolution.extension.navigation', $js_rev_slider_directory_extensions .'revolution.extension.navigation.min.js', array(), false, true);
	wp_enqueue_script( 'revolution.extension.parallax', $js_rev_slider_directory_extensions .'revolution.extension.parallax.min.js', array(), false, true);
	wp_enqueue_script( 'revolution.extension.slideanims', $js_rev_slider_directory_extensions .'revolution.extension.slideanims.min.js', array(), false, true);
	wp_enqueue_script( 'revolution.extension.video', $js_rev_slider_directory_extensions .'revolution.extension.video.min.js', array(), false, true);
}
add_action( 'wp_enqueue_scripts', 'taher_scripts' );

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}