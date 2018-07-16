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
		<h3> Ruta 1</h3>
		<div class="descripciontransporte"><p>
				<?php
				$value = get_field( 'descripion1', $post->ID );
				if ( $value ) {
					echo $value;
				}
				?>
		</p></div>
		<div class="mapa">
			<img src="<?php get_map1( $post->ID ); ?>" >
		</div>
		<h3> Ruta 2</h3>
		<div class="descripciontransporte"><p>
				<?php
				$value = get_field( 'descripion2', $post->ID );
				if ( $value ) {
					echo $value;
				}
				?>
		</p></div>
		<div class="mapa">
			<img src="<?php get_map2( $post->ID ); ?>" >
		</div>
		<h3> Ruta 3</h3>
		<div class="descripciontransporte"><p>
				<?php
				$value = get_field( 'descripion3', $post->ID );
				if ( $value ) {
					echo $value;
				}
				?>
		</p></div>
		<div class="mapa">
			<img src="<?php get_map3( $post->ID ); ?>" >
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
