

	<?php if ( is_active_sidebar( 'projects' ) ) : ?>
     
		<?php dynamic_sidebar( 'projects' ); ?>

	<?php else : ?>

		<?echo "the default text goes here"; ?>

	<?php endif; ?>

