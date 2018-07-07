<?php
/**
 * Template part for displaying posts
 *
 * @package liceoparaiso
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
/*
function create_img_array( $post_id = '' ) {
	$img_array = array();
	if ( get_custom_image_1( $post_id ) ) {
		array_push( $img_array, get_custom_image_1( $post_id ) );
	}
	if ( get_custom_image_2( $post_id ) ) {
		array_push( $img_array, get_custom_image_2( $post_id ) );
	}
	if ( get_custom_image_3( $post_id ) ) {
		array_push( $img_array, get_custom_image_3( $post_id ) );
	}
	if ( get_custom_image_4( $post_id ) ) {
		array_push( $img_array, get_custom_image_4( $post_id ) );
	}
	return( $img_array );
}*/

function get_galleria( $post_id ) {
	$galleria = '
	<!-- Slideshow container -->
	<div class="lp-slideshow-container">
	
	<!-- Full-width images with number and caption text -->';
	if ( get_custom_image_1( $post_id ) ) {
		$galleria = $galleria . '
			<div class="lp-mySlides lp-fade">
					<img src="' . get_custom_image_1( $post_id ) . '">
					<div class="lp-text">Caption Text</div>
			</div>';
	}
	if ( get_custom_image_2( $post_id ) ) {
		$galleria = $galleria . '
			<div class="lp-mySlides lp-fade">
					<img src="' . get_custom_image_2( $post_id ) . '">
					<div class="lp-text">Caption Text</div>
			</div>';
	}
	if ( get_custom_image_3( $post_id ) ) {
		$galleria = $galleria . '
			<div class="lp-mySlides lp-fade">
					<img src="' . get_custom_image_3( $post_id ) . '">
					<div class="lp-text">Caption Text</div>
			</div>';
	}
	if ( get_custom_image_4( $post_id ) ) {
		$galleria = $galleria . '
			<div class="lp-mySlides lp-fade">
					<img src="' . get_custom_image_4( $post_id ) . '">
					<div class="lp-text">Caption Text</div>
			</div>';
	}
	$galleria = $galleria . '
			  <!-- Next and previous buttons -->
			  <a class="lp-prev" onclick="plusSlides(-1)"><div class="flechita">&#10094;</div></a>
			  <a class="lp-next" onclick="plusSlides(1)"><div class="flechita">&#10095;</div></a>
			</div>
			<br>
			
			<!-- The dots/circles -->
			<div class="lp-dots">
			  <span class="lp-dot" onclick="currentSlide(1)"></span>
			  <span class="lp-dot" onclick="currentSlide(2)"></span>
				<span class="lp-dot" onclick="currentSlide(3)"></span>
			</div> 
	';
	echo $galleria;
}
