<?php
/**
 * Template part for displaying posts
 *
 * @package wprig
 */

/**
 * Function get_custom_image_1 prints the image from the custom field to screen
 * Parameter $post_id es el id del post
 * https://support.advancedcustomfields.com/forums/topic/get_post_meta-doesnt-work-with-images/
 */

function get_custom_image_1( $post_id = '' ) {
	$image_id = intval( get_post_meta( $post_id, 'imagen_1', true ) );
	if ( $image_id ) {
		$image = wp_get_attachment_image_src( $image_id, 'large' );
		if ( $image ) {
			return $image[0];
		}
	}
}

function get_custom_image_2( $post_id = '' ) {
	$image_id = intval( get_post_meta( $post_id, 'imagen_2', true ) );
	if ( $image_id ) {
		$image = wp_get_attachment_image_src( $image_id, 'large' );
		if ( $image ) {
			return $image[0];
		}
	}
}

function get_custom_image_3( $post_id = '' ) {
	$image_id = intval( get_post_meta( $post_id, 'imagen_3', true ) );
	if ( $image_id ) {
		$image = wp_get_attachment_image_src( $image_id, 'large' );
		if ( $image ) {
			return $image[0];
		}
	}
}

function get_custom_image_4( $post_id = '' ) {
	$image_id = intval( get_post_meta( $post_id, 'imagen_4', true ) );
	if ( $image_id ) {
		$image = wp_get_attachment_image_src( $image_id, 'large' );
		if ( $image ) {
			return $image[0];
		}
	}
}

function get_custom_descripcion_1 ( $post_id = '' ){
	$value = get_field( 'descripcion_imagen1', $post_id );
	if ($value){
		return $value;
	}
}

function get_custom_descripcion_2 ( $post_id = '' ){
	$value = get_field( 'descripcion_imagen2', $post_id );
	if ( $value ){
		return $value;
	}
}

function get_custom_descripcion_3 ( $post_id = '' ){
	$value = get_field( 'descripcion_imagen3', $post_id );
	if ( $value ){
		return $value;
	}
}

function get_custom_descripcion_4 ( $post_id = '' ){
	$value = get_field( 'descripcion_imagen4', $post_id );
	if ( $value ){
		return $value;
	}
}

function get_galleria( $post_id ) {
	$i = 0;
	$galleria = '
	<!-- Slideshow container -->
	<div class="lp-slideshow-container">
	
	<!-- Full-width images with number and caption text -->';
	if ( get_custom_image_1( $post_id ) ) {
		$galleria = $galleria . '
			<div class="lp-mySlides lp-fade">
				<img src="' . get_custom_image_1( $post_id ) . '">';
		if ( get_custom_descripcion_1( $post_id ) ) {
			$galleria = $galleria . '<div class="lp-text">' . get_custom_descripcion_1( $post_id ) . '</div>';
		}
		$galleria = $galleria . '
			</div>';
		$i++;
	}
	if ( get_custom_image_2( $post_id ) ) {
		$galleria = $galleria . '
			<div class="lp-mySlides lp-fade">
				<img src="' . get_custom_image_2( $post_id ) . '">';
		if ( get_custom_descripcion_2( $post_id ) ) {
			$galleria = $galleria . '<div class="lp-text">' . get_custom_descripcion_2( $post_id ) . '</div>';
		}
		$galleria = $galleria . '
			</div>';
		$i++;
	}
	if ( get_custom_image_3( $post_id ) ) {
		$galleria = $galleria . '
			<div class="lp-mySlides lp-fade">
				<img src="' . get_custom_image_3( $post_id ) . '">';
			if ( get_custom_descripcion_3( $post_id ) ) {
				$galleria = $galleria . '<div class="lp-text">' . get_custom_descripcion_3( $post_id ) . '</div>';
			}
		$galleria = $galleria . '
			</div>';
		$i++;
	}
	if ( get_custom_image_4( $post_id ) ) {
		$galleria = $galleria . '
			<div class="lp-mySlides lp-fade">
					<img src="' . get_custom_image_4( $post_id ) . '">';
					if ( get_custom_descripcion_4( $post_id ) ) {
						$galleria = $galleria . '<div class="lp-text">' . get_custom_descripcion_4( $post_id ) . '</div>';
					}
		$galleria = $galleria . '
			</div>';
		$i++;
	}
	$galleria = $galleria . '
			  <!-- Next and previous buttons -->
			  <a class="lp-prev" onclick="plusSlides(-1)"><div class="flechita">&#10094;</div></a>
			  <a class="lp-next" onclick="plusSlides(1)"><div class="flechita">&#10095;</div></a>
			</div>
			<br>
			
			<!-- The dots/circles -->
			<div class="lp-dots">';
	$j = 1;
	while ( $i > 0 ) {
		$galleria = $galleria . '<span class="lp-dot" onclick="currentSlide(' . $j . ')"></span>';
		$i--;
		$j++;
	}
	$galleria = $galleria . '</div>';
	echo $galleria;
}
