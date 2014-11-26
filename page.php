<?php get_header(); ?>

<div id="middle"><!--Start Main-->            
<!-- START CONTENT -->
<?php if (is_page('about')) { ?><!--Start Of If 'about' -->
<aside id="about" class="left-col"><!--This section is used to display a specific post into the aside, the post with the slug abouts goes here-->

<?php
$the_post_slug ="abouts";
$query = new WP_Query(array(
	"name" => "$the_post_slug"
));
$thispost = $query->posts[0];
?>
<h1>
<?php echo $thispost->post_title; ?>
</h1>
<?php echo $thispost->post_content; ?>
</aside><!--End Of Aside-->

<?php } else { ?><!--End of if 'About' -->
<?php $the_post_slug =null; ?>

<aside id="contact" class="left-col"><!--This section is used to display a specific post into the aside, the post with the slug membership-form goes here-->
<?php if(is_page( 'contact' )) { ?><!--Start of if 'contact' page  -->
<?php
$the_post_slug = 'contact-form';
 } 
?><!--End of if 'contact' -->
<?php if(is_page( 'gallery-2' )) { ?><!--Start of if 'Gallery' page  -->
<?php
$the_post_slug = 'gallery-form';
 } 
?><!--End of if 'Gallery' -->
<?php if(is_page( 'membership' )) { ?><!--Start of if 'Membership' page  -->
<?php
$the_post_slug = 'membership-form';
 } 
?><!--End of if 'Membership' -->
<?php if(is_page( 'volunteer' )) { ?><!--Start of if 'Voluteer' page  -->
<?php
$the_post_slug = 'volunteer-form';
 } 
?><!--End of if 'volunteer' -->

<!--Print the contents of the page -->
<?php if($the_post_slug !=null) { ?><!--Print the contents if the form is available, start of If in Form--> 
 <?php
$query = new WP_Query(array(
	"name" => "$the_post_slug"
));
$thispost = $query->posts[0];
?>

<?php echo do_shortcode ($thispost->post_content); ?>
<?php } else { ?><!--End of content form if, For all other pages call the widgized sidebar -->
<aside id="abouts"><!--start of aside-->
<?php get_sidebar( 'projects' ); ?>
</aside><!--End of aside-->
<?php } ?>
</aside><!--End aside contact -->
<?php } ?><!--End of else -->








 








<div id="officers" class="right-col"><!--Start of div officers-->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
  
    	<h2> <?php the_title(); ?></h2>
        <?php the_content('More &raquo;'); ?>
    <?php endwhile; ?>

<?php endif; ?>
</div><!--End Of div officers-->

<!-- End CONTENT -->


<?php get_footer(); ?>
