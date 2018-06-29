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
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'liceoparaiso' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'liceoparaiso' ), 'WordPress' );
			?>
		</a>
		<span class="sep"> | </span>
		<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'liceoparaiso' ), '<a href="' . esc_url( 'https://github.com/liceoparaiso/liceoparaiso/' ) . '">Liceo de Pariso</a>', 'the contributors' );
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>