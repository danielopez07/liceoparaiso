<?php
/**
 * Template part for displaying reglamentos y protocolos
 *
 * @package liceoparaiso
 */

/**
 * Funcion para desplegar los reglamentos y protocolos
 *
 * @param string $date es la fecha yyyymmdd.
 */
function get_reglamentos( $post_ID ) {
	/*
	Reglamentos: get_field( 'reglamento1', $post_ID ) genera un array.
	Por ejemplo:
	Array
		(
			[id] => 88
			[alt] =>
			[title] => Reglamento de Evaluacion
			[caption] =>
			[description] =>
			[mime_type] => application/pdf
			[url] => //localhost:8181/wordpress/wp-content/uploads/2018/07/Reglamento-de-Evaluacion.pdf
		)
	*/
	?>

	<article class="reglamentos-container">
		<?php
		$documentos = array(
			get_field( 'reglamento1', $post_ID ),
			get_field( 'reglamento2', $post_ID ),
			get_field( 'reglamento3', $post_ID ),
			get_field( 'reglamento4', $post_ID ),
			get_field( 'reglamento5', $post_ID ),
		);
		?>

		<div class="reglamentos">
			<h3>Reglamentos</h3>
			<?php
			foreach ( $documentos as $value ) {
				if ( $value ) {
				?>
				<a href="<?php echo esc_html( $value['url'] ); ?>" target="blank">
				<div class="boton-reglamento">
					<span class="icono-reglamento dashicons dashicons-media-text"></span>
					<br>
					<?php echo esc_html( $value['title'] ); ?>
				</div>
				</a>
				<br>
				<?php
				}
			}
			?>
		</div><!-- reglamentos -->

		<?php
		$documentos = [
			get_field( 'protocolo1', $post_ID ),
			get_field( 'protocolo2', $post_ID ),
			get_field( 'protocolo3', $post_ID ),
			get_field( 'protocolo4', $post_ID ),
			get_field( 'protocolo5', $post_ID ),
		];
		?>

		<div class="protocolos">
			<h3>Protocolos</h3>
			<?php
			foreach ( $documentos as $value ) {
				if ( $value ) {
				?>
				<a href="<?php echo esc_html( $value['url'] ); ?>" target="blank">
				<div class="boton-reglamento">
					<span class="icono-reglamento dashicons dashicons-media-text"></span>
					<br>
					<?php echo esc_html( $value['title'] ); ?>
				</div>
				</a>
				<br>
				<?php
				}
			}
			?>
		</div><!-- protocolos -->
	</article><!-- reglamentos-container -->
	<?php
}
