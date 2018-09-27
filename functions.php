<?php
/**
 * Liceo de Pariso functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package liceoparaiso
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function liceoparaiso_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on liceoparaiso, use a find and replace
		* to change 'liceoparaiso' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'liceoparaiso', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'liceoparaiso' ),
			'footer' => esc_html__( 'Footer', 'liceoparaiso' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background', apply_filters(
			'liceoparaiso_custom_background_args', array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => false,
			'flex-height' => false,
		)
	);

	/**
	 * Add support for wide aligments.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
	 */
	add_theme_support( 'align-wide' );

	/**
	 * Add support for block color palettes.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
	 */
	// add_theme_support( 'editor-color-palette',
	// 	array(
	// 		'name'  => 'Dusty orange',
	// 		'color' => '#ED8F5B',
	// 	),
	// 	array(
	// 		'name'  => 'Dusty red',
	// 		'color' => '#E36D60',
	// 	),
	// 	array(
	// 		'name'  => 'Dusty wine',
	// 		'color' => '#9C4368',
	// 	),
	// 	array(
	// 		'name'  => 'Dark sunset',
	// 		'color' => '#33223B',
	// 	),
	// 	array(
	// 		'name'  => 'Almost black',
	// 		'color' => '#0A1C28',
	// 	),
	// 	array(
	// 		'name'  => 'Dusty water',
	// 		'color' => '#41848F',
	// 	),
	// 	array(
	// 		'name'  => 'Dusty sky',
	// 		'color' => '#72A7A3',
	// 	),
	// 	array(
	// 		'name'  => 'Dusty daylight',
	// 		'color' => '#97C0B7',
	// 	),
	// 	array(
	// 		'name'  => 'Dusty sun',
	// 		'color' => '#EEE9D1',
	// 	)
	// );

	/**
	 * Optional: Disable custom colors in block color palettes.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
	 *
	 * add_theme_support( 'disable-custom-colors' );
	 */

	/**
	 * Optional: Add AMP support.
	 *
	 * Add built-in support for the AMP plugin and specific AMP features.
	 * Control how the plugin, when activated, impacts the theme.
	 *
	 * @link https://wordpress.org/plugins/amp/
	 */
	add_theme_support( 'amp', array(
		'comments_live_list' => true,
	) );

}
add_action( 'after_setup_theme', 'liceoparaiso_setup' );

/**
 * Set the embed width in pixels, based on the theme's design and stylesheet.
 *
 * @param array $dimensions An array of embed width and height values in pixels (in that order).
 * @return array
 */
function liceoparaiso_embed_dimensions( array $dimensions ) {
	$dimensions['width'] = 720;
	return $dimensions;
}
add_filter( 'embed_defaults', 'liceoparaiso_embed_dimensions' );

/**
 * Register Google Fonts
 */
function liceoparaiso_fonts_url() {
	$fonts_url = '';

	/**
	 * Translator: If Roboto does not support characters in your language, translate this to 'off'.
	 */
	$roboto = esc_html_x( 'on', 'Roboto font: on or off', 'liceoparaiso' );
	/**
	 * Translator: If Roboto Mono does not support characters in your language, translate this to 'off'.
	 */
	$roboto_mono = esc_html_x( 'on', 'Roboto Mono font: on or off', 'liceoparaiso' );
	/**
	 * Translator: If Frank Ruhl Libre does not support characters in your language, translate this to 'off'.
	 */
	$frank_ruhl_libre = esc_html_x( 'on', 'Frank Ruhl Libre font: on or off', 'liceoparaiso' );

	$font_families = array();

	if ( 'off' !== $roboto ) {
		$font_families[] = 'Roboto:300,300i,400,400i';
	}

	if ( 'off' !== $roboto_mono ) {
		$font_families[] = 'Roboto Mono:300,300i,400,400i';
	}

	if ( 'off' !== $frank_ruhl_libre ) {
		$font_families[] = 'Frank Ruhl Libre:400,400i,500,500i';
	}

	if ( in_array( 'on', array( $roboto, $roboto_mono, $frank_ruhl_libre ) ) ) {
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );

}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function liceoparaiso_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'liceoparaiso-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'liceoparaiso_resource_hints', 10, 2 );

/**
 * Enqueue WordPress theme styles within Gutenberg.
 */
function liceoparaiso_gutenberg_styles() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'liceoparaiso-fonts', liceoparaiso_fonts_url(), array(), null );

	// Enqueue main stylesheet.
	wp_enqueue_style( 'liceoparaiso-base-style', get_theme_file_uri( '/css/editor-styles.css' ), array(), '20180514' );
}
add_action( 'enqueue_block_editor_assets', 'liceoparaiso_gutenberg_styles' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function liceoparaiso_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'liceoparaiso' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'liceoparaiso' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'liceoparaiso_widgets_init' );

/**
 * Enqueue styles.
 */
function liceoparaiso_styles() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'liceoparaiso-fonts', liceoparaiso_fonts_url(), array(), null );

	// Enqueue main stylesheet.
	wp_enqueue_style( 'liceoparaiso-base-style', get_stylesheet_uri(), array(), '20180514' );

	// Register component styles that are printed as needed.
	wp_register_style( 'liceoparaiso-comments', get_theme_file_uri( '/css/comments.css' ), array(), '20180514' );
	wp_register_style( 'liceoparaiso-content', get_theme_file_uri( '/css/content.css' ), array(), '20180514' );
	wp_register_style( 'liceoparaiso-sidebar', get_theme_file_uri( '/css/sidebar.css' ), array(), '20180514' );
	wp_register_style( 'liceoparaiso-widgets', get_theme_file_uri( '/css/widgets.css' ), array(), '20180514' );
	wp_register_style( 'liceoparaiso-front-page', get_theme_file_uri( '/css/front-page.css' ), array(), '20180514' );
	wp_register_style( 'liceoparaiso-galleria', get_theme_file_uri( '/css/galleria.css' ), array(), '20180701' );
	wp_register_style( 'liceoparaiso-eventos', get_theme_file_uri( '/css/eventos.css' ), array(), '20180708' );
	wp_register_style( 'liceoparaiso-modalidad', get_theme_file_uri( '/css/modalidad.css' ), array(), '20180708' );
	wp_register_style( 'liceoparaiso-reglamentos', get_theme_file_uri( '/css/reglamentos.css' ), array(), '20180716' );
	wp_register_style( 'liceoparaiso-nosotros', get_theme_file_uri( '/css/nosotros.css' ), array(), '20180717' );
	wp_register_style( 'liceoparaiso-club', get_theme_file_uri( '/css/club.css' ), array(), '20180718' );
	wp_register_style( 'liceoparaiso-clubes-index', get_theme_file_uri( '/css/clubes-index.css' ), array(), '20180820' );
	wp_register_style( 'liceoparaiso-biblioteca', get_theme_file_uri( '/css/biblioteca.css' ), array(), '20180926' );

}
add_action( 'wp_enqueue_scripts', 'liceoparaiso_styles' );

/**
 * Enqueue scripts.
 */
function liceoparaiso_scripts() {

	// If the AMP plugin is not active, enqueue custom scripts.
	if ( ! liceoparaiso_is_amp() ) {

		// Enqueue the navigation script.
		wp_enqueue_script( 'liceoparaiso-navigation', get_theme_file_uri( '/js/navigation.js' ), array(), '20180514', false );
		wp_script_add_data( 'liceoparaiso-navigation', 'async', true );
		wp_localize_script( 'liceoparaiso-navigation', 'liceoparaisoScreenReaderText', array(
			'expand'   => __( 'Expand child menu', 'liceoparaiso' ),
			'collapse' => __( 'Collapse child menu', 'liceoparaiso' ),
		));

		// Enqueue skip-link-focus script.
		wp_enqueue_script( 'liceoparaiso-skip-link-focus-fix', get_theme_file_uri( '/js/skip-link-focus-fix.js' ), array(), '20180514', false );
		wp_script_add_data( 'liceoparaiso-skip-link-focus-fix', 'defer', true );

		// Enqueue comment script on singular post/page views only.
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// Enqueue the galleria script.
		wp_enqueue_script( 'liceoparaiso-galleria', get_theme_file_uri( '/js/galleria.js' ), array(), '20180701', false );
		wp_script_add_data( 'liceoparaiso-galleria', 'async', true );

		// Enqueue the funcionarios script.
		wp_enqueue_script( 'liceoparaiso-funcionarios', get_theme_file_uri( '/js/funcionarios.js' ), array(), '20180709', false );
		wp_script_add_data( 'liceoparaiso-funcionarios', 'async', true );
	}

}
add_action( 'wp_enqueue_scripts', 'liceoparaiso_scripts' );

/**
 * Custom responsive image sizes.
 */
require get_template_directory() . '/inc/image-sizes.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/pluggable/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Optional: Add theme support for lazyloading images.
 *
 * @link https://developers.google.com/web/fundamentals/performance/lazy-loading-guidance/images-and-video/
 */
require get_template_directory() . '/pluggable/lazyload/lazyload.php';

/**
 * Implementa las funciones custom del template.
 */
require get_template_directory() . '/pluggable/functions/funciones-paraiso.php';

/**
 * Disponibilizar los dashicons para el frontend
 */

if ( ! is_admin() ) {
	function load_dashicons_font() {
		wp_enqueue_style( 'dashicons' );
	}
	add_action( 'wp_enqueue_scripts', 'load_dashicons_font' );
}

/**
 * Implementa las funciones custom del template de modalidad.
 */
require get_template_directory() . '/pluggable/functions/funciones-modalidad.php';

/**
 * Implementa las funciones custom del template de transporte.
 */
require get_template_directory() . '/pluggable/functions/funciones-transporte.php';

/**
* Implementa las funciones custom para los eventos en front-page.
 */
require get_template_directory() . '/pluggable/functions/funciones-evento.php';

/**
* Implementa las funciones custom para los reglamentos en nosotros y modalidades.
 */
require get_template_directory() . '/pluggable/functions/funciones-reglamentos.php';
