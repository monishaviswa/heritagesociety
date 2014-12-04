<!-- This is a single post (full view) -->

<?php get_header(); ?>
<div id="middle">
<!-- Beginning of Aside -->
<aside id="news" class="left-col">
<?php if ( is_active_sidebar( 'single-sidebar' ) ) : ?>
		<div class="news-sidebar col _4">
			<?php dynamic_sidebar( 'single-sidebar' ); ?>
		</div>
	<?php endif; ?>
this is a test
</aside>
	<?php if(have_posts()) :  ?>
	<?php 	while(have_posts()) : the_post(); ?>

			   <div id="post" class="right-col">
				<!-- post thumbnail (image) -->
				<?php the_post_thumbnail('post-image'); ?>

				<!-- post title -->
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<!-- time and author -->
				<h3><?php the_time('F jS, Y g:i a'); ?> </h3>
				
				<!-- post content -->
				<?php the_content(); ?>

			</div><!--End of div post-->

			

		<?php endwhile; ?>

	<?php else : ?>
	<div id="post" class="right-col">
		<?php echo'<p>No content found</p>'; ?>
    </div><!--End of div post-->
	<?php endif; ?>
</div><!--End of Div Middle-->
<?php	get_footer(); ?>