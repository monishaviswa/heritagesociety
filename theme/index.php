<?php

get_header();

if(have_posts()) : 
	while(have_posts()) : the_post(); ?>
		
		<article class="post">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="post-info"><?php the_time('F jS, Y g:i a'); ?> | by <?php the_author(); ?></p>
			
			<?php if($post->post_excerpt) { ?>
				<p>
					<?php echo get_the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>">Read More&raquo;</a>
				</p>
			<?php } else {
				the_content();
			} ?>

		</article>

	<?php endwhile;

else :
	echo'<p>No content found</p>';

endif;

get_footer();

?>