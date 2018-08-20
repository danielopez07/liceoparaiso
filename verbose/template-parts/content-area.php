<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package liceoparaiso
 */

?>

<?php
	wp_print_styles( array( 'liceoparaiso-modalidad', 'liceoparaiso-reglamentos' ) ); // Note: If this was already done it will be skipped.
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
		<?php
		$titulo = get_the_title();
		if ( 'Diurno' === $titulo ) {
			get_funcionarios_diurno();
		} elseif ( 'Nocturno' === $titulo ) {
			get_funcionarios_nocturno();
		} else {
			get_funcionarios_plan_nacional();
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
		liceoparaiso_post_categories();
		liceoparaiso_post_tags();
		liceoparaiso_edit_post_link();
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
