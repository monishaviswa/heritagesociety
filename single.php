<!-- This is a single post (full view) -->
<p>it is using single.php</p>
<?php
	get_header();

	if(have_posts()) : 
		while(have_posts()) : the_post(); ?>

			<article class="post">
				<!-- post thumbnail (image) -->
				<?php the_post_thumbnail('post-image'); ?>

				<!-- post title -->
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<!-- time and author -->
				<p class="post-info"><?php the_time('F jS, Y g:i a'); ?> | by <?php the_author(); ?></p>
				
				<!-- post content -->
				<?php the_content(); ?>

				

			</article>

		<?php endwhile;

	else :
		echo'<p>No content found</p>';

	endif;

	get_footer();

?>