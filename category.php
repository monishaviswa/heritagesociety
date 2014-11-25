<?php get_header(); ?>

<div class="site-content row">

	<!-- Sidebar, left, width=4 -->
	<?php if ( is_active_sidebar( 'news-sidebar' ) ) : ?>
		<div class="news-sidebar col _4">
			<ul><?php dynamic_sidebar( 'news-sidebar' ); ?></ul>
		</div>
	<?php endif; ?>

	<!-- News posts, right, width=8 -->
	<div class="post-area col _8">

		<?php if (have_posts()) :
			while (have_posts()) :

				the_post(); ?>

				<div class="row">
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
				</div>

			<?php endwhile; ?>

			<!-- Pagination -->
    		<?php wp_pagenavi(); ?>

		<?php else : ?>

			<p>No content found</p>
		
		<?php endif; ?>

	</div>

</div> <!-- /site-content -->

<?php get_footer(); ?>