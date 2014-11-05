<?php get_header(); ?>
<div id="wrapper"><!--Start Wrapper-->
<div id="main"><!--Start Main-->            
<!-- START CONTENT -->
<aside id="about"><!--This section is used to display a specific post into the aside, the post with the slug abouts goes here-->

<?php
$the_slug = 'abouts';
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
<h1>
<?php echo get_the_title($id);?>
</h1>
<?php echo get_post_field('post_content', $id); ?>
</aside><!--End Of Aside-->

<div id="officers"><!--Start of div officers-->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
  
    	<h2> <?php the_title(); ?></h2>
        <?php the_content('More &raquo;'); ?>
    <?php endwhile; ?>

<?php endif; ?>
</div><!--End Of div officers-->

<!-- End CONTENT -->


<?php get_footer(); ?>
