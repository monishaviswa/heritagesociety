<?php

function learningWordPress_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');



// Customize excerpt word count length
function custom_excerpt_length() {
	return 45;
}

		   //replace this     with this
add_filter('excerpt_length', 'custom_excerpt_length');



// remove excerpt [...]
function new_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

// remove the auto paragraph tag
remove_filter('the_excerpt', 'wpautop');
//remove_filter('the_content', 'wpautop');

//Theme setup
function setup() {
	// Navigation Menus
	register_nav_menus(array(
		'headerMenu' => __('Header Menu'),
		'footerMenu' => __('Footer Menu'),
		'copyrightMenu' => __( 'Copyright Menu')
	));

	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 200, 200, true);
	add_image_size('post-image', 500, 500, true);
}

add_action('after_setup_theme', 'setup');