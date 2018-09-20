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
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
	</header><!-- .entry-header -->

	<?php wprig_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wprig' ),
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
	</div><!-- .entry-content -->

	<article class="lista-clubes">
		<?php
		$query = new WP_Query( array( 'post_type' => 'club' ) );

		while ( $query->have_posts() ) :
			$query->the_post();
			?>
			<article class="club">
				<a href="<?php echo esc_html( get_permalink() ); ?>">
					<?php
					echo '<h3>';
					the_title();
					echo '</h3>';
					$image_id = intval( get_post_meta( $post->ID, 'imagen_1', true ) );
					if ( $image_id ) {
						$image = wp_get_attachment_image_src( $image_id, 'medium' );
						if ( $image ) {
							echo '<img class="img-club" src="' . esc_html( $image[0] ) . '">';
						}
					}
					?>
				</a>
			</article>
			<?php
		endwhile;

		wp_reset_postdata(); ?>
	</article>

</article><!-- #post-<?php the_ID(); ?> -->
