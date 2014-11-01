<?php get_header(); ?>
<!-- START CONTENT -->
<div id="banner">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
  
    	
        <?php the_content('More &raquo;'); ?>
    <?php endwhile; ?>

<?php endif; ?>
</div>
<!-- End CONTENT -->
<div id="wrapper"><!--Start Wrapper-->
<?php if(function_exists('wp_content_slider')) { wp_content_slider(); } ?>
<div id="main"><!--Start Main-->

<div id="ct01"><!--Start CT01-->
</div><!--End CT01-->

<div id="ct02"><!--Start CT02-->
</div><!--End CT02-->

<div id="ct03"><!--Start CT03-->
</div><!--End CT03-->







<?php get_footer(); ?>