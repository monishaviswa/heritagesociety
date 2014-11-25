<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewpoint" content="width=device-width">
	<title>
		<?php bloginfo('name');
		wp_title(':', true, 'left'); ?>
	</title>
    
	<!-- Remy Sharp Shim -->
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" /><!--For now random fav icon -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page">

		<header>
			
			<div id="logo">
				<!-- site logo, hard coded -->
				<img alt="BHSWA logo" src="<?php bloginfo('template_directory'); ?>/folder-name/image-name.jpg">
				<!-- site name -->
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			</div><!-- /logo -->

			<nav>
				<?php $args = array(
					'theme_location' => 'primary'
				);
				wp_nav_menu( $args ); ?>
			</nav>

		</header><!-- /header -->