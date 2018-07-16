<?php
/**
 * Template part for displaying maps
 *
 * @package wprig
 */

function get_map1( $post_id ) {
	$image_id = intval( get_post_meta( $post_id, 'mapa1', true ) );
	if ( $image_id ) {
		$image = wp_get_attachment_image_src( $image_id, 'medium' );
		if ( $image ) {
			echo $image[0];
		}
	}
}

function get_map2( $post_id ) {
	$image_id = intval( get_post_meta( $post_id, 'mapa2', true ) );
	if ( $image_id ) {
		$image = wp_get_attachment_image_src( $image_id, 'medium' );
		if ( $image ) {
			echo $image[0];
		}
	}
}

function get_map3( $post_id ) {
	$image_id = intval( get_post_meta( $post_id, 'mapa3', true ) );
	if ( $image_id ) {
		$image = wp_get_attachment_image_src( $image_id, 'medium' );
		if ( $image ) {
			echo $image[0];
		}
	}
}
