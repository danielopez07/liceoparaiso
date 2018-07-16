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
	wp_print_styles( array( 'wprig-modalidad' ) ); // Note: If this was already done it will be skipped.
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
		$modalidad = new WP_Query( array( 'post_type' => 'modalidad' ) );
		$modalidad->the_post();
		?>

		<h3> Reseña histórica </h3>
		<div class="resena"><p>
			<?php
			$value = get_field( 'resena', $post->ID );
			if ( $value ) :
				echo $value;
			else :
				echo 'No llega el valor';
			endif;
			?>
		</p></div>

		<?php wprig_post_thumbnail(); ?>

		<h3> Información de matrícula</h3>
		<div class="matricula"><p>
				<?php
				$value = get_field( 'matricula', $post->ID );
				if ( $value ) {
					echo $value;
				}
				?>
		</p></div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		wprig_post_categories();
		wprig_post_tags();
		wprig_edit_post_link();
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
