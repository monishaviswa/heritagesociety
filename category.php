<?php get_header(); ?>

<div id="middle">
<aside id="news" class="left-col">

	
	<?php if ( is_active_sidebar( 'news-sidebar' ) ) : ?>
		
			<ul><?php dynamic_sidebar( 'news-sidebar' ); ?></ul>
		
	<?php endif; ?>
</aside>
	<!-- News posts, right, width=8 -->
<div id="post" class="right-col">

		<?php if (have_posts()) :
			while (have_posts()) :

				the_post(); ?>

					<article class="col _12">
						<!-- Post title -->
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						
						<!-- Post time -->
						<p><?php the_time('F j, Y'); ?></p>

						<!-- Post description -->
						<?php the_excerpt(); ?>
						<p><a href="<?php the_permalink(); ?>">Read More</a></p>

						<!-- Post thumbnail -->
						<?php the_post_thumbnail(); ?>
					</article>
				

			<?php endwhile; ?>

			<!-- Pagination -->
    		<?php wp_pagenavi(); ?>

		<?php else : ?>

			<p>No content found</p>
		
		<?php endif; ?>

	</div>

</div> <!--div middle -->

<?php get_footer(); ?>