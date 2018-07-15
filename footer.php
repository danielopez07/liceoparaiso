<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package liceoparaiso
 */

?>

<footer id="colophon" class="site-footer">
	<hr>
	<nav class="footer-menu">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'footer',
			'menu_id'        => 'footer-menu',
			'container'      => 'ul',
		)
	);
	?>
	</nav>
	<hr>
	<div class="site-info">
		<p> Liceo de Paraíso <span class="sep"> | </span>
		<a href="sandstormagency.com" target="blank">Sandstorm Agency</a> © 
		<?php
		echo esc_html( date( 'Y' ) );
		?>
		Todos los derechos reservados.</p>

	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
