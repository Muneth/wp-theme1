
	<footer class="main-footer">
		<div class="container">
			<div class="f_left">
				<p>&copy; 2016 - Advanced WP Theme</p>
			</div>
			<div class="f_right">
				<?php wp_nav_menu(

					array(
					'theme_location' => 'footer',
					'container' => 'nav',
					'container_class' => 'footermenu'
					));
				?>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>