		<footer class="site-footer">
			
			<nav class="site-nav">
				<?php
					$args = array(
						'theme_location' => 'footerMenu',
						'theme_location' => 'copyrightMenu'
					);
				?>
				<?php wp_nav_menu( $args ); ?>
			</nav>

			<!--
			<ul>
				<li>&copy;<?php echo date('Y'); ?> <?php bloginfo('name'); ?></li>
				<li>All Rights Reserved</li>
				<li>Privacy Policy</li>
			</ul>
			-->

		</footer>

	</div> <!-- /container -->

	<?php wp_footer(); ?>
	</body>
</html>