<?php
/**
 * Template part for displaying events
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package liceoparaiso
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		?>
	</header><!-- .entry-header -->

	<?php liceoparaiso_post_thumbnail('medium'); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'liceoparaiso' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		?>
		<p><?php echo get_field( 'fecha' ); ?></p>
		<?php

		// $fecha_inicio = get_post_meta($postIDID, 'fecha_de_inicio', true) ;
		// $fecha_inicio_dia = substr($fecha_inicio,0,2);
		// $fecha_inicio_mes = substr($fecha_inicio,2,2);
		// $fecha_inicio_anno = substr($fecha_inicio,4,4);
		// $nueva_fecha = $fecha_inicio_dia."/".$fecha_inicio_mes."/".$fecha_inicio_anno;

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'liceoparaiso' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		liceoparaiso_post_categories();
		liceoparaiso_post_tags();
		liceoparaiso_edit_post_link();
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
