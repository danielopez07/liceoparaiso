<?php
/**
 * Template part for displaying nosotros
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package liceoparaiso
 */

	wp_print_styles( array( 'liceoparaiso-reglamentos', 'liceoparaiso-nosotros' ) ); // Note: If this was already done it will be skipped.
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
		?>
			<div class="entry-meta">
				<?php
					liceoparaiso_posted_on();
					liceoparaiso_posted_by();
					liceoparaiso_comments_link();
				?>
			</div><!-- .entry-meta -->
		<?php
		endif;
		?>
	</header><!-- .entry-header -->

	<article class="descripcionnosotros entry-content">
		<h3>Historia</h3>
		<p>
			<?php
			$value = get_field( 'historia', $post->ID );
			// if ( $value ) {
			// 	echo wp_kses_post( $value );
			// }
			if ( $value ) {
				// $value          = strip_shortcodes( $value );
				// $value          = apply_filters( 'the_content', $value );
				// $value          = str_replace( ']]&gt;', ']]&gt;', $value );
				$excerpt_length = 89; // number of words
				$excerpt_more   = apply_filters( 'excerpt_more', ' <a href="/wordpress/historia/" target="blank">[...]</a>' );
				$value          = wp_trim_words( $value, $excerpt_length, $excerpt_more );
			}
			// echo wp_kses_post( apply_filters( 'the_excerpt', $value ) );
			echo wp_kses_post( $value );
			?>
		</p>
	</article>

	<div class="imagen-area" style="background-image: url(
		<?php
		the_post_thumbnail_url(
			$post->ID,
			'medium',
			array( 'class' => 'foto-nosotros' )
		);
	?>
	);"></div>

	<!-- <?php
		the_post_thumbnail(
			$post->ID,
			'medium',
			array( 'class' => 'foto-nosotros' )
		);
	?> -->

	<article class="descripcionnosotros entry-content color-fondo">
		<h3>Misión</h3>
		<p>
		<?php
		$value = get_field( 'mision', $post->ID );
		if ( $value ) {
			echo wp_kses_post( $value );
		}
		?>
		</p>
	</article>

	<article class="descripcionnosotros entry-content">
		<h3>Visión</h3>
		<p>
		<?php
		$value = get_field( 'vision', $post->ID );
		if ( $value ) {
			echo wp_kses_post( $value );
		}
		?>
		</p>
	</article>

	<article class="descripcionnosotros entry-content color-fondo">
		<h3>Valores</h3>
		<p>
		<?php
		$value = get_field( 'valores', $post->ID );
		if ( $value ) {
		echo wp_kses_post( $value );
		}
		?>
		</p>
	</article>

	<article class="descripcionnosotros entry-content">
		<?php
		get_reglamentos( $post->ID );
		?>
	</article>

	<div class="color-fondo">
	<article class="contacto" id="seccion-contacto">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3931.1951453980564!2d-83.86986758547143!3d9.833971392965134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa12097c35d9f1b%3A0x1be4a9fd2980498e!2sLiceo+de+Para%C3%ADso!5e0!3m2!1sen!2scr!4v1531971375115" width="600" height="450" frameborder="0" style="border:0" allowfullscreen class="mapa"></iframe>
		<div id="formulario-contacto">
			<?php
			echo do_shortcode( '[caldera_form id="CF5b5625eb60b62"]' );
			?>
		</div>
	</article>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
