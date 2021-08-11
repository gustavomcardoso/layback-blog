<?php
/**
 * Style functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Enqueue theme styles.
 */
function gulp_wp_theme_styles() {

	/**
	 * Set a script handle prefix based on theme name.
	 * Note that this should be the same as the `themePrefix` var set in your Gulpfile.js.
	 */
	// $theme_handle_prefix = 'theme-name';
	// wp_enqueue_style( $theme_handle_prefix . '-styles', get_template_directory_uri() . '/assets/css/' . $theme_handle_prefix .'.min.css', array(), '1.0.0', 'all' );
	
	wp_register_style ('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style ('flickity', 'https://unpkg.com/flickity@2/dist/flickity.min.css', array(), 1, 'all');
    wp_enqueue_style('flickity');
    wp_register_style ('fullPage', get_template_directory_uri() . '/assets/vendor/fullPage/dist/fullpage.min.css' , array(), 1, 'all');
    wp_enqueue_style('fullPage');
    wp_register_style ('css', get_template_directory_uri() . '/assets/css/main.css' , array(), 1, 'all');
    wp_enqueue_style('css');
}
add_action( 'wp_enqueue_scripts', 'gulp_wp_theme_styles' );
