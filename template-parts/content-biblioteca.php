<?php
/**
 * Template part for displaying posts
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
		<?php
			$titulo2 = get_the_title();
			get_funcionarios( $titulo2 );
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

		<?php liceoparaiso_post_thumbnail(); ?>

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
		liceoparaiso_post_categories();
		liceoparaiso_post_tags();
		liceoparaiso_edit_post_link();
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
