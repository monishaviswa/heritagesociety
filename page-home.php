<?php get_header(); ?>
<!-- START CONTENT -->
<div id="middle"><!-- START div middle -->

<div class="flexslider"><!-- START div flexslider-->
<?php if ( function_exists( 'show_simpleresponsiveslider' ) ) show_simpleresponsiveslider(); ?>
</div><!-- End div flexslider -->




<div id="cta01" class="cta"><!--Start CT01-->
<?php
//get 1 recent post
    $args=array(
      'category_name' => 'news',
      'showposts'=>1,
      'caller_get_posts'=>1
    );
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
     
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <h2><?php the_title(); ?></h2>
	  <h3><?php the_time('F j, Y'); ?></h3>
        
       <?php the_excerpt(); ?>
       <p class="rdmore">
       <a href="<?php echo site_url(); ?>/category/news/">Read More</a>
       </p>
	        <?php endwhile; ?>
      
	 
    <?php }  ?>  
  



</div><!--End CT01-->

<div id="cta02" class="cta"><!--Start CT02-->
<?php if ( is_active_sidebar( 'Events' ) ) : ?>
		<div class="news-sidebar col _4">
			<?php dynamic_sidebar( 'Events' ); ?>
		</div>
	<?php endif; ?>

</div><!--End CT02-->

<div id="cta03" class="cta"><!--Start CT03-->
<?php
//get 1 recent post
    $args=array(
      'category_name' => 'aboutpost',
      'showposts'=>1,
      'caller_get_posts'=>1
    );
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
     
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <h2><?php the_title(); ?></h2>
	  <h3><?php the_time('F j, Y'); ?></h3>
        
       <?php the_excerpt(); ?>
       <p class="rdmore">
       <a href="<?php echo site_url(); ?>/about">Read More</a>
       </p>
	        <?php endwhile; ?>
      
	 
    <?php }  ?>  
</div><!--End CT03-->







<?php get_footer(); ?>