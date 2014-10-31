<?php get_header(); ?>
<div id="wrapper"><!--Start Wrapper-->
<div id="main"><!--Start Main-->

<div class="forms">
<?php
$the_slug = 'contact-form';
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

<div class="descriptions"><!--Start of div  descriptions-->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
  
    	<h2> <?php the_title(); ?></h2>
        <?php the_content('More &raquo;'); ?>
    <?php endwhile; ?>

<?php endif; ?>

</div><!--End Of div descriptions-->


<?php get_footer(); ?>