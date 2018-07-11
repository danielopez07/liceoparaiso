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

		<h2>Total funcionarios</h2>

		<h4 id="titulomodalidad2">
		<?php 
		$titulo = get_the_title();
		echo $titulo; 
		?> 
		</h4>

		<h2>Total funcionarios end</h2>
		<?php
		$titulo2 = get_the_title();
		get_funcionarios($titulo2); 
		?>

		<h3> Reseña histórica </h3>
		<div class="resena"><p>
				<?php
				$value = get_field( 'resena', $post->ID );
				if ( $value ) {
					echo $value;
				}
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
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wprig' ),
				'after'  => '</div>',
			)
		);
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

<?php
if ( is_singular() ) :
	the_post_navigation(
		array(
			'prev_text' => '<div class="post-navigation-sub"><span>' . esc_html__( 'Previous:', 'wprig' ) . '</span></div>%title',
			'next_text' => '<div class="post-navigation-sub"><span>' . esc_html__( 'Next:', 'wprig' ) . '</span></div>%title',
		)
	);

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
endif;
