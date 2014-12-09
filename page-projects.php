<?php get_header(); ?>
<div id="middle"><!--Start Middle-->
           
<!-- START CONTENT -->
<aside id="news" class="left-col"><!--Start Of aside div-->
<?php if ( is_active_sidebar( 'Projects' ) ) : ?>
		<div class="news-sidebar col _4">
			<?php dynamic_sidebar( 'Projects' ); ?>
		</div>
	<?php endif; ?>

</aside><!--End Of aside div-->
<aside id="contact"><!--This section is used to display a specific post into the aside, the post with the slug membership-form goes here-->

<?php
$the_post_slug= 'add-post';

$query = new WP_Query(array(
	"name" => "$the_post_slug"
));
$thispost = $query->posts[0];
echo do_shortcode ($thispost->post_content); 
?>

</aside><!--End aside contact -->

<div id="post" class="right-col"><!--Start of div  descriptions-->
<?php
query_posts( array( 'category_name' => 'userpost' ) );
while (have_posts()) : the_post();
?>
<h2>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<?php the_date('F m,Y', '<h3>', '</h3>'); ?>


<?php the_excerpt(); ?>
<p class="rdmore">
<a href="<?php the_permalink(); ?>">Read More</a>
</p>
<?php endwhile; ?>

</div><!--End Of div post-->




<?php get_footer(); ?>