</div><!-- End of div middle -->



<footer id="main-footer">

<?php
$args = array(
			'theme_location' => 'primary',
			 'container' => '',               
			'items_wrap'      => '<ul id="topfooter">%3$s</ul>'
			
			                 
			);
?>
<?php wp_nav_menu( $args ); ?>


<ul id="bottomfooter">
<li>
Copyrights <?php echo date("Y") ?> Black Heritage Society
</li>
<li>
All Rights Reserved

</li>
<li>
Students SCCC
</li>
</ul>		


</footer>
</div><!--End Of Page Div -->


</body>
</html>