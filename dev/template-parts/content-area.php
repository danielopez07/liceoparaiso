<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wprig
 */

?>

<?php
	wp_print_styles( array( 'wprig-modalidad', 'wprig-reglamentos' ) ); // Note: If this was already done it will be skipped.
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
					wprig_posted_on();
					wprig_posted_by();
					wprig_comments_link();
				?>
			</div><!-- .entry-meta -->
		<?php
		endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		$titulo = get_the_title();
		if ( 'Diurno' === $titulo ) {
			get_funcionarios_diurno( $titulo );
		} elseif ( 'Nocturno' === $titulo ) {
			get_funcionarios_nocturno( $titulo );
		} else {
			get_funcionarios_vocacional( $titulo );
		}
		?>
	</div>

	<div class="imagen-area" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>

	<div class="color-fondo"><article class="matricula entry-content">
		<h3> Información de matrícula</h3>
		<p>
			<?php
			$value = get_field( 'matricula', $post->ID );
			if ( $value ) {
				echo $value;
			}
			?>
		</p>
	</article></div>

	<div class="entry-content">
		<?php
		get_reglamentos( $post->ID );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		wprig_post_categories();
		wprig_post_tags();
		wprig_edit_post_link();
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
