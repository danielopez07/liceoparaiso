<?php
/**
 * Aqui definimos los custom post types
 *
 * @package liceoparaiso
 */

/**
 * Eventos
 */

/*
A
function eventos_init() {
	$labels = array(
		'name'                  => _x( 'Eventos', 'Post type general name', 'liceoparaiso' ),
		'singular_name'         => _x( 'Evento', 'Post type singular name', 'liceoparaiso' ),
		'menu_name'             => _x( 'Eventos', 'Admin Menu text', 'liceoparaiso' ),
		'name_admin_bar'        => _x( 'Eventos', 'Add New on Toolbar', 'liceoparaiso' ),
		'add_new'               => __( 'Agregar nuevo', 'liceoparaiso' ),
		'add_new_item'          => __( 'Agregar nuevo evento', 'liceoparaiso' ),
		'new_item'              => __( 'Nuevo evento', 'liceoparaiso' ),
		'edit_item'             => __( 'Editar evento', 'liceoparaiso' ),
		'view_item'             => __( 'Ver evento', 'liceoparaiso' ),
		'all_items'             => __( 'Todos los eventos', 'liceoparaiso' ),
		'search_items'          => __( 'Buscar eventos', 'liceoparaiso' ),
		'parent_item_colon'     => __( 'Eventos padres:', 'liceoparaiso' ),
		'not_found'             => __( 'No se encontraron eventos.', 'liceoparaiso' ),
		'not_found_in_trash'    => __( 'No se encontraron eventos en la basura.', 'liceoparaiso' ),
		'featured_image'        => _x( 'Imagen de cabecera del evento', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'liceoparaiso' ),
		'set_featured_image'    => _x( 'Establecer imagen de cabecera', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'liceoparaiso' ),
		'remove_featured_image' => _x( 'Remover imagen de cabecera', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'liceoparaiso' ),
		'use_featured_image'    => _x( 'Usar como imagen de cabecera', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'liceoparaiso' ),
		'archives'              => _x( 'Archivo de eventos', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'liceoparaiso' ),
		'insert_into_item'      => _x( 'Insertar en el evento', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'liceoparaiso' ),
		'uploaded_to_this_item' => _x( 'Subido a este evento', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'liceoparaiso' ),
		'filter_items_list'     => _x( 'Filtrar lista de eventos', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'liceoparaiso' ),
		'items_list_navigation' => _x( 'Navegación de lista de eventos', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'liceoparaiso' ),
		'items_list'            => _x( 'Lista de eventos', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'liceoparaiso' ),
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

*/

/**
 * Clubes
 */

 /*
 A
function clubes_init() {
	$labels = array(
		'name'                  => _x( 'Clubes', 'Post type general name', 'liceoparaiso' ),
		'singular_name'         => _x( 'Club', 'Post type singular name', 'liceoparaiso' ),
		'menu_name'             => _x( 'Clubes', 'Admin Menu text', 'liceoparaiso' ),
		'name_admin_bar'        => _x( 'Clubes', 'Add New on Toolbar', 'liceoparaiso' ),
		'add_new'               => __( 'Agregar nuevo', 'liceoparaiso' ),
		'add_new_item'          => __( 'Agregar nuevo club', 'liceoparaiso' ),
		'new_item'              => __( 'Nuevo club', 'liceoparaiso' ),
		'edit_item'             => __( 'Editar club', 'liceoparaiso' ),
		'view_item'             => __( 'Ver club', 'liceoparaiso' ),
		'all_items'             => __( 'Todos los clubes', 'liceoparaiso' ),
		'search_items'          => __( 'Buscar clubes', 'liceoparaiso' ),
		'parent_item_colon'     => __( 'Clubes padres:', 'liceoparaiso' ),
		'not_found'             => __( 'No se encontraron clubes.', 'liceoparaiso' ),
		'not_found_in_trash'    => __( 'No se encontraron clubes en la basura.', 'liceoparaiso' ),
		'featured_image'        => _x( 'Imagen de cabecera del club', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'liceoparaiso' ),
		'set_featured_image'    => _x( 'Establecer imagen de cabecera', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'liceoparaiso' ),
		'remove_featured_image' => _x( 'Remover imagen de cabecera', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'liceoparaiso' ),
		'use_featured_image'    => _x( 'Usar como imagen de cabecera', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'liceoparaiso' ),
		'archives'              => _x( 'Archivo de clubes', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'liceoparaiso' ),
		'insert_into_item'      => _x( 'Insertar en el club', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'liceoparaiso' ),
		'uploaded_to_this_item' => _x( 'Subido a este club', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'liceoparaiso' ),
		'filter_items_list'     => _x( 'Filtrar lista de clubes', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'liceoparaiso' ),
		'items_list_navigation' => _x( 'Navegación de lista de clubes', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'liceoparaiso' ),
		'items_list'            => _x( 'Lista de clubes', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'liceoparaiso' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'club' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-groups',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'clubes', $args );
}

add_action( 'init', 'clubes_init' );
*/
