<?php
/**
 * Template name: historia
 * The template for displaying the historia del liceo
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package liceoparaiso
 */

get_header();

wp_print_styles( array( 'liceoparaiso-content', 'liceoparaiso-nosotros', 'liceoparaiso-reglamentos' ) );
?>

	<main id="primary" class="site-main">

		<div class="entry-content"><article class="descripcionnosotros">
			<h2>Historia</h2>
			<p>
				<?php
				$value = get_field( 'historia', 322 );
				if ( $value ) {
					echo wp_kses_post( $value );
				}
				?>
			</p>
		</article></div>

	</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
