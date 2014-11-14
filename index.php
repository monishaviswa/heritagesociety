<?php
	get_header();
?>
<div class="row">
	<div class="col _4">
		<p>This is a sidebar.</p>
	</div>

	<div class="col _8">
	<?php
		if(have_posts()) : 
			while(have_posts()) : the_post(); ?>
				
				<article class="post">
					<!-- post thumbnail (image) -->
					<?php the_post_thumbnail('small-thumbnail'); ?>

					<!-- post title -->
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<!-- post time -->
					<p class="post-info"><?php the_time('F jS, Y g:i a'); ?>
					 | by <?php the_author(); ?></p>

					<!-- post content -->
					<p>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>">Read more</a>
					</p>

					<!-- categories -->
					<p> Categories: 
						<?php 
							$categories = get_the_category();
							$separator = ", ";
							$output = '';

							if($categories) {
								foreach ($categories as $category) {
									$output .= '<a href="' . get_category_link($category->term_id) .'">' . $category->cat_name . '</a>' . $separator;
								}
								//trim removes the front and end ", "
								echo trim($output, $separator);
							}
						?>
					</p>

				</article>

			<?php endwhile;

		else :
			echo'<p>No content found</p>';
		endif;
	?>
	</div> <!-- end ._8 column -->

</div> <!-- end row -->

<?php
	get_footer();
?>