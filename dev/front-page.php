<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wprig
 */

get_header();

/*
* Include the component stylesheet for the content.
* This call runs only once on index and archive pages.
* At some point, override functionality should be built in similar to the template part below.
*/
// wp_print_styles( array( 'wprig-content', 'wprig-front-page', 'wprig-galleria' ) ); // Note: If this was already done it will be skipped.
wp_print_styles( array( 'wprig-content', 'wprig-galleria', 'wprig-eventos' ) ); // Note: If this was already done it will be skipped.
?>

	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			/*
			* Include the component stylesheet for the content.
			* This call runs only once on index and archive pages.
			* At some point, override functionality should be built in similar to the template part below.
			*/
			wp_print_styles( array( 'wprig-content' ) ); // Note: If this was already done it will be skipped.

			get_template_part( 'template-parts/content', 'front-page' );

		endwhile; // End of the loop.
		?>

	</main><!-- #primary -->

<?php
get_footer();
