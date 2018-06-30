<?php
/**
 * Aqui definimos los custom post types
 *
 * @package wprig
 */

/**
 * Eventos
 */
function eventos_init() {
	$labels = array(
		'name'                  => _x( 'Eventos', 'Post type general name', 'wprig' ),
		'singular_name'         => _x( 'Evento', 'Post type singular name', 'wprig' ),
		'menu_name'             => _x( 'Eventos', 'Admin Menu text', 'wprig' ),
		'name_admin_bar'        => _x( 'Eventos', 'Add New on Toolbar', 'wprig' ),
		'add_new'               => __( 'Agregar nuevo', 'wprig' ),
		'add_new_item'          => __( 'Agregar nuevo evento', 'wprig' ),
		'new_item'              => __( 'Nuevo evento', 'wprig' ),
		'edit_item'             => __( 'Editar evento', 'wprig' ),
		'view_item'             => __( 'Ver evento', 'wprig' ),
		'all_items'             => __( 'Todos los eventos', 'wprig' ),
		'search_items'          => __( 'Buscar eventos', 'wprig' ),
		'parent_item_colon'     => __( 'Eventos padres:', 'wprig' ),
		'not_found'             => __( 'No se encontraron eventos.', 'wprig' ),
		'not_found_in_trash'    => __( 'No se encontraron eventos en la basura.', 'wprig' ),
		'featured_image'        => _x( 'Imagen de cabecera del evento', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'wprig' ),
		'set_featured_image'    => _x( 'Establecer imagen de cabecera', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'wprig' ),
		'remove_featured_image' => _x( 'Remover imagen de cabecera', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'wprig' ),
		'use_featured_image'    => _x( 'Usar como imagen de cabecera', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'wprig' ),
		'archives'              => _x( 'Archivo de eventos', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'wprig' ),
		'insert_into_item'      => _x( 'Insertar en el evento', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'wprig' ),
		'uploaded_to_this_item' => _x( 'Subido a este evento', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'wprig' ),
		'filter_items_list'     => _x( 'Filtrar lista de eventos', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'wprig' ),
		'items_list_navigation' => _x( 'Navegación de lista de eventos', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'wprig' ),
		'items_list'            => _x( 'Lista de eventos', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'wprig' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'evento' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'eventos', $args );
}

add_action( 'init', 'eventos_init' );
