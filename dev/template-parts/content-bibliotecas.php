<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wprig
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
		<h3> Historia</h3>
		<div class="matricula"><p>
				<?php
				$value = get_field( 'historia', $post->ID );
				if ( $value ) {
					echo $value;
				}
				?>
		</p></div>
		<div class="galleria-content">
		<?php
			get_galleria( $post->ID );
		?>
		</div>
		<h3> Información de Servicios</h3>
		<div class="matricula"><p>
				<?php
				$value = get_field( 'servicios', $post->ID );
				if ( $value ) {
					echo $value;
				}
				?>
		</p></div>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
