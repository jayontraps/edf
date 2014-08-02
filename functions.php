<?php
/**
 * edf_2014 functions and definitions
 *
 * @package edf_2014
 */

add_action('init', 'dir_item_init');
function dir_item_init() 
{
		$item_labels = array(
		'name' => _x('Directory Items', 'post type general name'),
		'singular_name' => _x('item', 'post type singular name'),
		'all_items' => __('All Items'),
		'add_new' => _x('Add new item', 'Items'),
		'add_new_item' => __('Add new item'),
		'edit_item' => __('Edit item'),
		'new_item' => __('New item'),
		'view_item' => __('View item'),
		'search_items' => __('Search in Items'),
		'not_found' =>  __('No Items found'),
		'not_found_in_trash' => __('No Items found in trash'), 
		'parent_item_colon' => ''
	);


	$args = array(
		'labels' => $item_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','excerpt'),
		'has_archive' => 'item',
		'taxonomies' => array('category')
		
	); 
	register_post_type('directory_item',$args);
}


// Add new post type for Events stating all $args

add_action('init', 'event_item_init');
function event_item_init() 
{
		$event_labels = array(
		'name' => _x('Events', 'post type general name'),
		'singular_name' => _x('event', 'post type singular name'),
		'all_items' => __('All Events'),
		'add_new' => _x('Add new event', 'Events'),
		'add_new_item' => __('Add new event'),
		'edit_item' => __('Edit event'),
		'new_item' => __('New event'),
		'view_item' => __('View event'),
		'search_items' => __('Search in Events'),
		'not_found' =>  __('No Events found'),
		'not_found_in_trash' => __('No Events found in trash'), 
		'parent_item_colon' => ''
	);


	$args = array(
		'labels' => $event_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => array( 'slug' => 'event','with_front' => FALSE),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title'),
		'has_archive' => 'event'
	); 
	register_post_type('event',$args);
}



// Add a page taxonomy
add_action( 'init', 'prod_create_taxonomies', 0 );

function prod_create_taxonomies() 
{
	// product Catagory
	register_taxonomy('Status','event',array(
		'hierarchical' => true,
		'label' => 'Status',
		'singular_name' => 'Status',
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'status' )
	));
}





// override default jQuery version (1.8.2) 
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'edf_2014_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function edf_2014_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on edf_2014, use a find and replace
	 * to change 'edf_2014' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'edf_2014', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'edf_2014' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'edf_2014_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // edf_2014_setup
add_action( 'after_setup_theme', 'edf_2014_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function edf_2014_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'edf_2014' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'edf_2014_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function edf_2014_scripts() {
	wp_enqueue_style( 'edf_2014-style', get_stylesheet_uri() );

	wp_enqueue_script( 'edf_2014-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20120206', true );

	wp_enqueue_script( 'edf_2014-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	// wp_enqueue_script( 'edf_2014-headroom', get_template_directory_uri() . '/js/headroom.min.js' );

	
	wp_enqueue_script( 'edf_2014-picturefill', get_template_directory_uri() . '/js/picturefill.min.js' );

	wp_enqueue_script( 'edf_2014-slick', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), '20130115', true );

	wp_enqueue_script( 'edf_2014-masonry', get_template_directory_uri() . '/js/masonry.pkgd.js', array(), '20130115', true );

	wp_enqueue_script( 'edf_2014-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'edf_2014_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
