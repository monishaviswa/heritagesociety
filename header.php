<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title><?php wp_title(':', true, 'right'); ?><?php bloginfo('name'); ?> : <?php bloginfo('description'); ?></title>
    
<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]> 
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->    

 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" /><!--For now random fav icon -->

	  <?php /*?> Always have wp_head() just before the closing </head>
	   tag of your theme. Many plugins use this hook to add 
       elements to <head> such as styles, scripts, and meta tags.
	  <?php */?>
<?php wp_head(); ?>
</head>

<!--The navigation and the logo goes inside the header -->
<header><!--Start Of Header-->

		
<div id="logo"><!--Start Of logo div-->	
<h1>
<a href="<?php bloginfo('wpurl'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="BHSW logo" id="logo"/></a>
</h1>
</div><!--End Of logo div-->

<nav>
<?php
$args = array(
			'theme_location' => 'primary',
	
			);
?>
<?php wp_nav_menu( $args ); ?>
</nav>
</header><!-- End header -->











<<<<<<< HEAD
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<!-- <meta property='fb:app_id' content='a43c8b87110ddc62f24ffc3af8c853e9' /> -->
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>




	<div class="container">

		<!-- site-header -->
		<header class="site-header">
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?></h5>

			<nav class="site-nav">
				<?php
					$args = array(
						'theme_location' => 'headerMenu'
					);
				?>
				<?php wp_nav_menu( $args ); ?>
			</nav>
		</header><!-- /site-header -->
=======
>>>>>>> origin/master
