<?php
/**
 * Template part for displaying eventos in the front page
 *
 * @package wprig
 */

/**
 * Funcion para imprimir la fecha formateada
 *
 * @param string $date es la fecha yyyymmdd.
 */
function print_formated_date( $date ) {
	$dia  = substr( $date, 6, 2 );
	$mes  = substr( $date, 4, 2 );
	$anno = substr( $date, 0, 4 );
	?> <p> <?php echo esc_html( $dia . '/' . $mes . '/' . $anno ); ?> </p>
	<?php
}

/**
 * Funcion para mostrar la lista de eventos
 * del mas proximo al mas distante.
 */
function get_eventos() {
	$args = array(
		'post_type' => 'evento',
	);

	$evento      = new WP_Query( $args );
	$arr_eventos = [];
	$arr_imags   = [];
	$arr_capts   = [];

	// ponemos los eventos en arrays para fecha, imagenes y caption
	// filtramos los que ya hayan pasado
	while ( $evento->have_posts() ) :

		$evento->the_post();

		$date = get_field( 'fecha' );

		if ( (int) $date >= date( 'Ymd' ) ) {
			$arr_eventos[ get_the_ID() ] = $date;
			$arr_imags[ get_the_ID() ]   = get_the_post_thumbnail_url();
			$arr_capts[ get_the_ID() ]   = get_the_post_thumbnail_caption();
			// caption es la "leyenda", este va a ser el alt text
		}

	endwhile; // End of the loop.
	wp_reset_postdata();

	// ordenamos el array por fechas
	asort( $arr_eventos );

	foreach ( $arr_eventos as $post_ID => $fecha ) {
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
			<header class="entry-header">
			<?php
				$evento = get_post( $post_ID );
			?>
			<h3>
				<?php
				echo wp_kses_post( $evento->post_title );
				?>
			</h3>
			<?php
				print_formated_date( $evento->fecha );
				echo wp_kses_post( $evento->post_content );
				echo wp_kses_post( $evento->post_thumbnail );
				the_post_thumbnail( $evento );
			?>

			<img src="<?php echo esc_html( $arr_imags[ $post_ID ] ); ?>" class="image-evento" alt="<?php echo esc_html( $arr_capts[ $post_ID ] ); ?>">

			<hr>

			<?php
			// $evento = new WP_Query( array( 'p' => (int) $post_ID ) );
			// while ( $evento->have_posts() ) :
			// 	$evento->the_post();
			// 	echo get_the_title();
			// endwhile;
			// wp_reset_postdata();
			
			// intento con wp_query, para no tener que usar array para imagenes,
			// pero no funciono
			?>

		</article><!-- #post -->
		<?php
	}
}
