<?php

//hide admin bar on front page
	
add_filter('show_admin_bar', '__return_false');	

/**
 * wp-sanspapier functions and definitions
 *
 * @package wp-sanspapier
 */

if ( ! function_exists( 'wp_sanspapier_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_sanspapier_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wp-sanspapier, use a find and replace
	 * to change 'wp-sanspapier' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wp-sanspapier', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'wp-sanspapier' ),
	) );

	class My_Sub_Menu extends Walker_Nav_Menu {
		
	  function start_lvl(&$output, $depth = 0, $args = array()) {
	    $indent = str_repeat("\t", $depth);
	    $output .= "\n$indent<ul class=\"submenu\">\n";
	  }
	  function end_lvl(&$output, $depth = 0, $args = array()) {
	    $indent = str_repeat("\t", $depth);
	    $output .= "$indent</ul>\n";
	  }
	}


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
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wp_sanspapier_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // wp_sanspapier_setup
add_action( 'after_setup_theme', 'wp_sanspapier_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_sanspapier_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_sanspapier_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_sanspapier_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wp_sanspapier_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp-sanspapier' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'wp_sanspapier_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
// function wp_sanspapier_scripts() {
// 	wp_enqueue_style( 'wp-sanspapier-style', get_stylesheet_uri() );

// 	wp_enqueue_script( 'wp-sanspapier-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

// 	wp_enqueue_script( 'wp-sanspapier-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'wp_sanspapier_scripts' );

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
