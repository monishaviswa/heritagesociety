<?php
function learningWordPress_resources() {
wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

// Navigation Menus
register_nav_menus(array(
'primary' => __( 'Primary Menu'),
'footer' => __( 'Footer Menu'),
));
// Customize excerpt word count length
function custom_excerpt_length() {
return 25;
}
add_filter('excerpt_length', 'custom_excerpt_length');
// Feature image
function setup() {
add_theme_support('post-thumbnails');
}
add_action('after_set_theme', 'setup');




/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Banner',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );



?>