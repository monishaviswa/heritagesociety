<?php

function my_setup() {
	// Register menus
	register_nav_menus(array(
		'primary' => 'Primary Menu',
		'footer' => 'Footer Menu'
	));

	// Add featured image support
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_setup');





// Customize excerpt word count length
function custom_excerpt_length() {
	return 35;
}
add_filter('excerpt_length', 'custom_excerpt_length');





// Remove the default value [...] in excerpt
function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');




// Feature image
function setup() {
add_theme_support('post-thumbnails');
}
add_action('after_set_theme', 'setup');




/* Register our sidebars and widgetized areas. */
function my_register_sidebars() {

	register_sidebar( array(
		'id' => 'projects',
		'name' =>'projects sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));

	register_sidebar( array(
		'name'			=> 'news sidebar',
		'id'			=> 'news-sidebar',
		'description'	=> '',
		'class'			=> '',
		'before_widget'	=> '',
		'after_widget'	=> '',
		'before_title'	=> '<h2>',
		'after_title'	=> '</h2>'
	));
	register_sidebar( array(
		'id' => 'singles',
		'name' =>'singles sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));


register_sidebar( array(
		'id' => 'events',
		'name' =>'Events Sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));







}
add_action( 'widgets_init', 'my_register_sidebars' );






?>