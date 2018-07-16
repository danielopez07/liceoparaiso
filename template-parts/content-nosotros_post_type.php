<?php
/**
 * Template part for displaying nosotros
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package liceoparaiso
 */

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

	<div class="entry-content">
		<h3>Historia</h3>
		<div class="descripcionnosotros"><p>
				<?php
				$value = get_field( 'historia', $post->ID );
				if ( $value ) {
					echo $value;
				}
				?>
		</p></div>
		<h3>Misión</h3>
		<div class="descripcionnosotros"><p>
				<?php
				$value = get_field( 'mision', $post->ID );
				if ( $value ) {
					echo $value;
				}
				?>
		</p></div>
		<h3>Visión</h3>
		<div class="descripcionnosotros"><p>
				<?php
				$value = get_field( 'vision', $post->ID );
				if ( $value ) {
					echo $value;
				}
				?>
		</p></div>
		<h3>Valores</h3>
		<div class="descripcionnosotros"><p>
				<?php
				$value = get_field( 'valores', $post->ID );
				if ( $value ) {
					echo $value;
				}
				?>
		</p></div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
