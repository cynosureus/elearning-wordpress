<?php
/**
 * cynosure_elearning functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package cynosure_elearning
 */

if ( ! function_exists( 'cynosure_elearning_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cynosure_elearning_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on cynosure_elearning, use a find and replace
	 * to change 'cynosure_elearning' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'cynosure_elearning', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'cynosure_elearning' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'cynosure_elearning_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // cynosure_elearning_setup
add_action( 'after_setup_theme', 'cynosure_elearning_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cynosure_elearning_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cynosure_elearning_content_width', 640 );
}
add_action( 'after_setup_theme', 'cynosure_elearning_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cynosure_elearning_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Elearning Main Sidebar', 'cynosure_elearning' ),
		'id'            => 'elearning-main-sidebar',
		'description'   => '',
		'class'			=> 'elearning-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Front Page Sidebar', 'cynosure_elearning' ),
		'id'            => 'elearning-front-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


}
add_action( 'widgets_init', 'cynosure_elearning_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cynosure_elearning_scripts() {

	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ) );

	wp_enqueue_style( 'cynosure_elearning-style', get_stylesheet_uri() );

	wp_enqueue_script( 'cynosure_elearning-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'cynosure_elearning-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_style( 'fancyboxjs-css', get_template_directory_uri() . '/assets/js/fancybox/source/jquery.fancybox.css' );

	wp_enqueue_script( 'fancyboxjs', get_template_directory_uri() . '/assets/js/fancybox/source/jquery.fancybox.pack.js', array( 'jquery' ) );


	wp_enqueue_style( 'fancyboxjs-buttons-css', get_template_directory_uri() . '/assets/js/fancybox/source/helpers/jquery.fancybox-buttons.css' );

	wp_enqueue_script( 'fancyboxjs-buttons', get_template_directory_uri() . '/assets/js/fancybox/source/helpers/jquery.fancybox-buttons.js', array( 'jquery' ) );

	wp_enqueue_script( 'fancyboxjs-media', get_template_directory_uri() . '/assets/js/fancybox/source/helpers/jquery.fancybox-media.js', array( 'jquery' ) );

	wp_enqueue_style( 'elearning-styles', get_template_directory_uri() . '/assets/css/elearning.css' );

	wp_enqueue_script( 'scotch-panels-master', get_template_directory_uri() . '/assets/js/scotch-panels-master/src/scotchPanels.js' );

	

	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

	wp_enqueue_script( 'elearning-theme', get_template_directory_uri() . '/assets/js/elearning-theme.js', array( 'jquery' ) );

	wp_enqueue_script( 'elearning-panel', get_template_directory_uri() . '/assets/js/elearningpanel.js', array( 'jquery' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cynosure_elearning_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_filter('show_admin_bar', '__return_false');
