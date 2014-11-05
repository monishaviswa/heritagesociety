<!DOCTYPE html>
<html <?php language_attributes(); ?>>

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