<?php
/**
 * LCCC Microsite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LCCC_Microsite
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lorainccc_microsite_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on LCCC Microsite, use a find and replace
		* to change 'lc-works' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'lc-works', get_template_directory() . '/languages' );

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
      		'primary-microsite' => esc_html__( 'Primary Microsite', 'lc-works' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'lorainccc_microsite_custom_background_args',
			array(
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
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'lorainccc_microsite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lorainccc_microsite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lorainccc_microsite_content_width', 640 );
}
add_action( 'after_setup_theme', 'lorainccc_microsite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lorainccc_microsite_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lc-works' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lc-works' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar( array(
		'name'          => esc_html__( 'LorainCountyWorks Search Sidebar', 'lc-works' ),
		'id'            => 'lc-search-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lc-works' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'lorainccc_microsite_widgets_init' );

/**
 * Enqueue google fonts.
 */
function lc_add_google_fonts() {
	wp_enqueue_style( 'open-sans-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap', false );
	wp_enqueue_style( 'montaga-google-fonts', 'https://fonts.googleapis.com/css2?family=Montaga&display=swap', false );
	wp_enqueue_style( 'icons-google-fonts', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined', false );
}
	
add_action( 'wp_enqueue_scripts', 'lc_add_google_fonts' );

function lorainccc_microsite_foundation_scripts() {
		/* Add Foundation JS */
	
		wp_enqueue_style( 'foundation',  '/wp-content/themes/lccc-framework/foundation-681/css/foundation.css' );

		wp_enqueue_script( 'foundation-js', '/wp-content/themes/lccc-framework/foundation-681/js/vendor/foundation.js', array( 'jquery' ), '1', true );
		wp_enqueue_script( 'foundation-whatinput', '/wp-content/themes/lccc-framework/foundation-681/js/vendor/what-input.js', array( 'jquery' ), '1', true);
		
		/* Foundation Init JS */
	
		wp_enqueue_script( 'foundation-init-js', '/wp-content/themes/lccc-framework/foundation-681/js/app.js', array( 'jquery' ), '1', true );
	
		//Adds Google Analytics, Google Tag, Hotjar and Eloqua to header
		wp_enqueue_script( 'lc-google-analytic-parent-async', 'https://www.googletagmanager.com/gtag/js?id=G-Z27HB3ECDG', array(), '20221117', false); 
		wp_enqueue_script( 'lc-google-analytics-scripts', get_stylesheet_directory_uri() . '/js/lc-google-analytics.js', array( 'lc-google-analytic-parent' ), '20180828', false);

		// wp_enqueue_script( 'lorainccc_micro-function-script', get_stylesheet_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
	
}
add_action( 'wp_enqueue_scripts', 'lorainccc_microsite_foundation_scripts' );

/**
 * Enqueue scripts and styles.
 */
function lorainccc_microsite_scripts() {

	wp_enqueue_style( 'lc-works-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'lc-works-style', 'rtl', 'replace' );

	wp_enqueue_script( 'lc-works-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'lc-works-mobile-navigation', get_template_directory_uri() . '/js/lc-mobile-nav.js', array( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lorainccc_microsite_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Menu Functions */

class lc_top_bar_menu_walker extends Walker_Nav_Menu
{
	/*
	 * Add vertical menu class and submenu data attribute to sub menus
	 */

	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\" data-submenu>\n";
	}
}

//Optional fallback
function lc_topbar_menu_fallback($args)
{
	/*
	 * Instantiate new Page Walker class instead of applying a filter to the
	 * "wp_page_menu" function in the event there are multiple active menus in theme.
	 */

	$walker_page = new Walker_Page();
	$fallback = $walker_page->walk(get_pages(), 0);
	$fallback = str_replace("<ul class='children'>", '<ul class="children submenu menu vertical" data-submenu>', $fallback);

	echo '<ul class="dropdown menu" data-dropdown-menu">'.$fallback.'</ul>';
}

class lc_drill_menu_walker extends Walker_Nav_Menu
{
	/*
	 * Add vertical menu class
	 */

	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\">\n";
	}
}

function lc_drill_menu_fallback($args)
{
	/*
	 * Instantiate new Page Walker class instead of applying a filter to the
	 * "wp_page_menu" function in the event there are multiple active menus in theme.
	 */

	$walker_page = new Walker_Page();
	$fallback = $walker_page->walk(get_pages(), 0);
	$fallback = str_replace("children", "children vertical menu", $fallback);
	echo '<ul class="vertical menu" data-drilldown="">'.$fallback.'</ul>';
}

/** Block Editor Style Theme Support
 * 
 *  Added support for front-end styles in Block Editor
 *  Also adds padding around content to make editing easier.
 * 
 */
function lc_block_editor_theme_support(){
	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-styles.css' );
}

add_action( 'admin_init', 'lc_block_editor_theme_support' );