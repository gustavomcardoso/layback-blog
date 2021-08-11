<?php
/**
 * Script functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Enqueue theme scripts
 */
function gulp_wp_theme_scripts() {
	/**
	 * Set a script handle prefix based on theme name.
	 * Note that this should be the same as the `themePrefix` var set in your Gulpfile.js.
	 * Enqueue common scripts.
	 */
	// $theme_handle_prefix = 'theme-name';
	// wp_enqueue_script( $theme_handle_prefix . '-scripts', get_template_directory_uri() . '/assets/js/' . $theme_handle_prefix . '.min.js', array( 'jquery' ), '1.0.0', true );
	
	wp_register_script('jquery' , get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js' , array(), 1, 1, 1);
	wp_enqueue_script('jquery');

	wp_register_script('popper' , 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), 1, 1, 1);
	wp_enqueue_script('popper');

	wp_register_script('bootstrap' , 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), 1, 1, 1);
	wp_enqueue_script('bootstrap');

	wp_register_script('validate' , 'http://jqueryvalidation.org/files/dist/jquery.validate.js', array(), 1, 1, 1);
	wp_enqueue_script('validate');

	wp_register_script('mask' , 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js', array(), 1, 1, 1);
	wp_enqueue_script('mask');

	wp_register_script('flickity' , 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), 1, 1, 1);
	wp_enqueue_script('flickity');

	wp_register_script('forms' , get_template_directory_uri() . '/assets/js/forms.js' , array(), 1, 1, 1);
	wp_enqueue_script('forms');
	
	wp_register_script('main' , get_template_directory_uri() . '/assets/js/main.js' , array(), 1, 1, 1);
	wp_enqueue_script('main');

}
add_action( 'wp_enqueue_scripts', 'gulp_wp_theme_scripts' );

$directory =  get_template_directory_uri();
