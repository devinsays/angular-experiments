<?php
/**
 * Angular Experiments.
 * Enqueue scripts and styles for the front end.
 *
 * @since 1.0.0
 */
function ae_scripts() {

	// Load main stylesheet.
	wp_enqueue_style( 'ae-style', get_stylesheet_uri() );

	// Load Angular
	wp_enqueue_script( 'ae-angular', '//ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js', array( ), '', true );

	// Load custom app script
	wp_enqueue_script( 'ae-js', get_template_directory_uri() . '/js/app.js', array(), '', true );

	// Variables for app script
	wp_localize_script( 'ae-js', 'aeJS',
		array(
			'api' => get_bloginfo( 'wpurl' ) . '/wp-json/posts',
		)
	);

}
add_action( 'wp_enqueue_scripts', 'ae_scripts' );