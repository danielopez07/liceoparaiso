<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package liceoparaiso
 */

wp_print_styles( array( 'liceoparaiso-biblioteca' ) ); // Note: If this was already done it will be skipped.

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

	<nav id="nav-biblioteca">
		<a class="link-nav-biblio" href="#horario-biblioteca">Horario de atención</a>
		<a class="link-nav-biblio" href="#prestamo-materiales">Préstamo de materiales</a>
		<a class="link-nav-biblio" href="https://www.facebook.com/bibliotecaliceoparaiso/" target="blank"><span class="dashicons dashicons-facebook" id="facebook-icon"></span>/bibliotecaliceoparaiso</a>
		<a class="link-nav-biblio" href="https://mep.janium.net/janium-bin/busqueda_rapida.pl?Id=20160526102747" target="blank">Catálogo en línea</a>
	</nav>

	<div class="entry-content">
		<h2>Información general</h2>
		<div class="matricula">
			<p>
			<?php
			$value = get_field( 'informacion-general', $post->ID );
			if ( $value ) {
				echo $value;
			}
			?>
			</p>
		</div>
	</div><!-- .entry-content -->

	<div class="entry-content color-fondo">
		<h2>Misión</h2>
		<div class="matricula">
			<p>
			<?php
			$value = get_field( 'mision', $post->ID );
			if ( $value ) {
				echo $value;
			}
			?>
			</p>
		</div>
	</div><!-- .entry-content -->

	<div class="entry-content color-fondo">
		<h2>Visión</h2>
		<div class="matricula">
			<p>
			<?php
			$value = get_field( 'vision', $post->ID );
			if ( $value ) {
				echo $value;
			}
			?>
			</p>
		</div>
	</div><!-- .entry-content -->

	<div class="galleria-content color-fondo">
		<?php
			get_galleria( $post->ID );
		?>
	</div>

	<div class="entry-content color-fondo" id="horario-biblioteca">
		<h2>Horario de atención</h2>
		<div class="matricula">
			<p>
			<?php
			$value = get_field( 'horario', $post->ID );
			if ( $value ) {
				echo $value;
			}
			?>
			</p>
		</div>
	</div><!-- .entry-content -->

	<div class="entry-content" id="prestamo-materiales">
		<h2>Préstamo de materiales</h2>
		<div class="matricula">
			<p>
			<?php
			$value = get_field( 'servicios', $post->ID );
			if ( $value ) {
				echo $value;
			}
			?>
			</p>
		</div>
	</div><!-- .entry-content -->

	<div class="entry-content color-fondo">
		<h2> Historia</h2>
		<div class="matricula">
			<p>
			<?php
			$value = get_field( 'historia', $post->ID );
			if ( $value ) {
				echo $value;
			}
			?>
			</p>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
