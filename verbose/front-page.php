<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package liceoparaiso
 */

get_header();

/*
* Include the component stylesheet for the content.
* This call runs only once on index and archive pages.
* At some point, override functionality should be built in similar to the template part below.
*/
// wp_print_styles( array( 'liceoparaiso-content', 'liceoparaiso-front-page', 'liceoparaiso-galleria' ) ); // Note: If this was already done it will be skipped.
wp_print_styles( array( 'liceoparaiso-content', 'liceoparaiso-galleria', 'liceoparaiso-eventos' ) ); // Note: If this was already done it will be skipped.
?>

	<main id="primary" class="site-main">

		<div class="galleria-content">
		<?php
			get_galleria( 77 );
		?>
		</div> <!-- galleria -->

		<article class="eventos">
			<h2>Eventos</h2>

			<?php
			$args = array(
				'post_type' => 'evento',
			);

			$evento = new WP_Query( $args );

			while ( $evento->have_posts() ) :
				$evento->the_post();

				get_template_part( 'template-parts/content', evento );

			endwhile; // End of the loop.
			?>
		</article>

		<!-- <?php the_posts_navigation(); ?> -->


	</main><!-- #primary -->

<?php
get_footer();
