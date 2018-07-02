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
		$image = wp_get_attachment_image_src( $image_id, 'medium' );
		if ( $image ) {
			return $image[0];
		}
	}
}

function get_custom_image_2( $post_id = '' ) {
	$image_id = intval( get_post_meta( $post_id, 'imagen_2', true ) );
	if ( $image_id ) {
		$image = wp_get_attachment_image_src( $image_id, 'medium' );
		if ( $image ) {
			return $image[0];
		}
	}
}

function get_custom_image_3( $post_id = '' ) {
	$image_id = intval( get_post_meta( $post_id, 'imagen_3', true ) );
	if ( $image_id ) {
		$image = wp_get_attachment_image_src( $image_id, 'medium' );
		if ( $image ) {
			return $image[0];
		}
	}
}

function get_custom_image_4( $post_id = '' ) {
	$image_id = intval( get_post_meta( $post_id, 'imagen_4', true ) );
	if ( $image_id ) {
		$image = wp_get_attachment_image_src( $image_id, 'medium' );
		if ( $image ) {
			return $image[0];
		}
	}
}

function get_galleria( $post_id ) {
	$galleria = '
			<!-- Slideshow container -->
			<div class="slideshow-container">
			
			  <!-- Full-width images with number and caption text -->
			  <div class="mySlides fade">
				<div class="numbertext">1 / 4</div>
				<img src="' . get_custom_image_1( $post_id ) . '" style="width:100%">
				<div class="text">Caption Text</div>
			  </div>
			
			  <div class="mySlides fade">
				<div class="numbertext">2 / 4</div>
				<img src="' . get_custom_image_2( $post_id ) . '" style="width:100%">
				<div class="text">Caption Two</div>
			  </div>
			
			  <div class="mySlides fade">
				<div class="numbertext">3 / 4</div>
				<img src="' . get_custom_image_3( $post_id ) . '" style="width:100%">
				<div class="text">Caption Three</div>
			  </div>

			  <div class="mySlides fade">
				<div class="numbertext">4 / 4</div>
				<img src="' . get_custom_image_4( $post_id ) . '" style="width:100%">
				<div class="text">Caption Four</div>
			  </div>
			
			  <!-- Next and previous buttons -->
			  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>
			
			<!-- The dots/circles -->
			<div style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span>
			  <span class="dot" onclick="currentSlide(2)"></span>
			  <span class="dot" onclick="currentSlide(3)"></span>
			</div> 
	';
	echo $galleria;
}
