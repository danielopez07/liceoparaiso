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

function get_galleria( $post_id ) {
	$galleria = '
			<!-- Slideshow container -->
			<div class="lp-slideshow-container">
			
			  <!-- Full-width images with number and caption text -->
			  <div class="lp-mySlides lp-fade">
					<img src="' . get_custom_image_1( $post_id ) . '">
					<div class="lp-text">Caption Text</div>
			  </div>
			
			  <div class="lp-mySlides lp-fade">
					<img src="' . get_custom_image_2( $post_id ) . '">
					<div class="lp-text">Caption Two</div>
			  </div>
			
			  <div class="lp-mySlides lp-fade">
					<img src="' . get_custom_image_3( $post_id ) . '">
					<div class="lp-text">Caption Three</div>
			  </div>

			  <div class="lp-mySlides lp-fade">
					<img src="' . get_custom_image_4( $post_id ) . '">
					<div class="lp-text">Caption Four</div>
			  </div>
			
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
				<span class="lp-dot" onclick="currentSlide(4)"></span>
			</div> 
	';
	echo $galleria;
}

function get_galleria2( $post_id ) {
	$galleria = ' 
	<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="' . get_custom_image_1( $post_id ) . '" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="' . get_custom_image_2( $post_id ) . '" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="' . get_custom_image_3( $post_id ) . '" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

	';
	echo $galleria;
}
