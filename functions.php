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
function my_register_sidebars() {

	/* Register the Projects sidebar */
	register_sidebar(
		array(
			'id' => 'projects',
			'name' =>'projects sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

}

add_action( 'widgets_init', 'my_register_sidebars' );




/**
*Gets the post array and returns the ID 
*
*
*/
function getpostid($postslug)
{
foreach ($postslug as $key => $value) 
{
	foreach($value as $keys => $values)
	{
	
	if($keys=="ID")
		{
		$id=$values;
		}
	}

}
return $id;
}



?>
