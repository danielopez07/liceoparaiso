<?php
/**
 * Template name: biblioteca
 * The template for displaying the index of clubs
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package liceoparaiso
 */

get_header(); ?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			/*
			 * Include the component stylesheet for the content.
			 * This call runs only once on index and archive pages.
			 * At some point, override functionality should be built in similar to the template part below.
			 */
			wp_print_styles( array( 'liceoparaiso-content', 'liceoparaiso-galleria' ) ); // Note: If this was already done it will be skipped.

			get_template_part( 'template-parts/content', 'biblioteca' );

		endwhile; // End of the loop.
		?>

	</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
