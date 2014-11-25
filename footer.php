	<footer id="main-footer">
		<nav>
			<?php $args = array(
				'theme_location' => 'primary'
			);		
			wp_nav_menu( $args ); ?>
		</nav>

		<ul id="bottomfooter">
			<li>&copy;<?php echo date('Y'); ?> <?php bloginfo('name'); ?></li>
			<li>All Rights Reserved</li>
			<li>Students SCCC</li>
		</ul>

	</footer><!-- /main-footer -->

</div><!-- /page -->

<?php wp_footer(); ?> 

</body>
</html>