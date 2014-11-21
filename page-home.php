<?php get_header(); ?>
<!-- START CONTENT -->
<div id="middle"><!-- START div middle -->







<div id="cta01" class="cta"><!--Start CT01-->
<?php
//get 1 recent post
    $args=array(
      'category__in' => array(5),
      'showposts'=>1,
      'caller_get_posts'=>1
    );
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
     
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		 <?php the_content('More &raquo;'); ?>
		</p>
       <?php
      endwhile;
    } //if ($my_query)
  wp_reset_query();  // Restore global post data stomped by the_post().
?>
</div><!--End CT01-->

<div id="cta02" class="cta"><!--Start CT02-->
</div><!--End CT02-->

<div id="cta03" class="cta"><!--Start CT03-->
<?php
$the_post_slug = 'abouts';
$args=array(
	'name' => $the_post_slug,
	'post_type' => 'post',
	'post_status' => 'publish'
	
);
$thispost = get_posts( $args );
	if( $thispost ) 
	{
	$id=getpostid($thispost);
	}
?>
<h1>
<?php echo get_the_title($id);?>
</h1>
<?php echo get_post_field('post_content', $id); ?>
</div><!--End CT03-->







<?php get_footer(); ?>