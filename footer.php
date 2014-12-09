</div>

	<footer id="main-footer">
		
			<?php $args = array(
			
				'container' => '',
				'items_wrap' => '<ul id="topfooter">%3$s</ul>',
				'theme_location' => 'primary'
			); wp_nav_menu( $args ); ?>
		

<div id="bottomfooter">		
<ul>
			<li>&copy;<?php echo date('Y'); ?> <?php bloginfo('name'); ?></li>
			<li>All Rights Reserved</li>
			<li>Students SCCC</li>
		</ul>
</div>

	</footer><!-- /main-footer -->

</div><!-- /page -->

<?php wp_footer(); ?> 

</body>
</html>