<?php get_header(); ?>
<div id="wrapper"><!--Start Wrapper-->
<div id="main"><!--Start Main-->            
<!-- START CONTENT -->
<aside id="left"><!--Start Of aside div-->
<?php get_sidebar( 'projects' ); ?>
</aside><!--End Of aside div-->
<div id="postform"><!--This section is used to display a specific post into the aside, the post with the slug membership-form goes here-->

<?php
$the_slug = 'add-post';
$args=array(
	'name' => $the_slug,
	'post_type' => 'post',
	'post_status' => 'publish'
	
);
$thispost = get_posts( $args );
//var_dump($thispost);
	if( $thispost ) 
	{
	$id=getpostid($thispost);
	}
?>
<?php echo do_shortcode (get_post_field('post_content', $id)); ?>

</div><!--End div form -->

<div id="projectscontent"><!--Start of div  descriptions-->
<?php
query_posts( array( 'category_name' => 'userpost' ) );
while (have_posts()) : the_post();
the_content();
endwhile;
?>
</div><!--End Of div descriptions-->

<!-- End CONTENT -->


<?php get_footer(); ?>