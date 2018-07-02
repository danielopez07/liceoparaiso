<?php
/**
 * Template part for displaying posts
 *
 * @package liceoparaiso
 */

/**
 * Function get_custom_image_1 prints the image from the custom field to screen
 * Parameter $post_id es el id del post
 */
function get_custom_image_1( $post_id = '' ) {
	$resultinghtml = '<amp-img src=' . get_post_meta( $post_id, 'imagen_1', true ) . '></amp-img>';
	echo ( $resultinghtml );
}
