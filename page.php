<?php get_header(); ?>

<div class="row">
	<div class="col _4">
		<div class="col _12">
			<h2>BHS 1950s Impressions</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
				Aenean commodo ligula eget dolor. Aenean massa. 
				Cum sociis natoque penatibus et magnis dis parturient montes, 
				nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, 
				pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, 
				fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, 
				imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
				Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. 
				Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, 
				consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, 
				viverra quis, feugiat a, tellus. 
				Phasellus viverra nulla ut metus varius laoreet. Q</p>
		</div>

		<div class="col _12">
			<h2>Categories</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
				Aenean commodo ligula eget dolor. Aenean massa. 
				Cum sociis natoque penatibus e</p>
		</div>
	</div>

	<div class="col _8">
		<div class="col _12">
			<?php
			if(have_posts()) : 
				while(have_posts()) : the_post(); ?>		
					<article class="post page">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</article>
	
				<?php endwhile;

			else :
				echo'<p>No content found</p>';

			endif;
			?>

		</div>
	</div>
</div> <!-- end row -->

<?php get_footer(); ?>