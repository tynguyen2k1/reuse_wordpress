<?php
/**
 * reuse functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package reuse
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

// ---- Static routes (about, ...) ----
add_action( 'init', function () {
	add_rewrite_rule( '^tai-che/?$', 'index.php?static_page=tai-che', 'top' );
	add_rewrite_rule( '^dang-ky/?$', 'index.php?static_page=dang-ky', 'top' );
	add_rewrite_rule( '^dang-nhap/?$', 'index.php?static_page=dang-nhap', 'top' );
	add_rewrite_rule( '^otp/?$', 'index.php?static_page=otp', 'top' );
	add_rewrite_rule( '^quen-mat-khau/?$', 'index.php?static_page=quen-mat-khau', 'top' );
	add_rewrite_rule( '^quen-mat-khau-thong-bao/?$', 'index.php?static_page=quen-mat-khau-thong-bao', 'top' );
} );
add_filter( 'query_vars', function ( $vars ) {
	$vars[] = 'static_page';
	return $vars;
} );
add_filter( 'template_include', function ( $template ) {
	$slug = get_query_var( 'static_page' );
	if ( $slug ) {
		$file = get_template_directory() . "/templates/{$slug}.php";
		if ( file_exists( $file ) ) {
			return $file;
		}
	}
	return $template;
} );

// ---- Auto flush rewrite rules an toàn ----
// 1. Khi kích hoạt theme
add_action( 'after_switch_theme', function () {
	flush_rewrite_rules();
} );
// 2. Đảm bảo flush một lần khi có thay đổi routes (dựa trên key version)
add_action( 'admin_init', function () {
	$key = 'reuse_routes_flushed_v5';
	if ( ! get_option( $key ) ) {
		flush_rewrite_rules( false );
		update_option( $key, time() );
	}
} );



/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function reuse_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on reuse, use a find and replace
		* to change 'reuse' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'reuse', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'reuse' ),
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
			'reuse_custom_background_args',
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
add_action( 'after_setup_theme', 'reuse_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function reuse_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'reuse_content_width', 640 );
}
add_action( 'after_setup_theme', 'reuse_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function reuse_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'reuse' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'reuse' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'reuse_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function reuse_scripts() {
	wp_enqueue_style( 'reuse-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'reuse-style', 'rtl', 'replace' );

	// Tailwind CSS (minified build)
	wp_enqueue_script( 'tailwindcss', 'https://cdn.tailwindcss.com', array(), _S_VERSION);

	// Font Awesome from node_modules
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/all.min.css', array(), _S_VERSION);

	// Alpine.js for interactive elements
	wp_enqueue_script( 'alpinejs', 'https://unpkg.com/alpinejs', array(), _S_VERSION, true );
	wp_script_add_data( 'alpinejs', 'defer', true );

	// Custom js
	wp_enqueue_script( 'reuse-custom', get_template_directory_uri() . '/js/app.js', array(), _S_VERSION, true );

	// wp_enqueue_script( 'reuse-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'reuse_scripts' );

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

/**
 * Shortcode để lấy đường dẫn ảnh theme
 */
add_shortcode('theme_img', function($atts) {
    $src = $atts['src'] ?? '';
    return get_template_directory_uri() . '/img/' . $src;
});
