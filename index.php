<?php get_header(); ?>
             
<!-- START CONTENT -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
  
    	<h2> <?php the_title(); ?></h2>
        <?php the_content('More &raquo;'); ?>
    <?php endwhile; ?>

<?php endif; ?>

<!-- End CONTENT -->


<?php get_footer(); ?>



