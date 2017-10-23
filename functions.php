<?php
/**
 * hokutodestiny functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hokutodestiny
 */

if ( ! function_exists( 'hokutodestiny_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hokutodestiny_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hokutodestiny, use a find and replace
		 * to change 'hokutodestiny' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hokutodestiny', get_template_directory() . '/languages' );

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
			'primary-menu' => esc_html__( 'Primary Menu', 'hokutodestiny' ),
			'secondary-menu' => esc_html__( 'Secondary Menu', 'hokutodestiny' ),
		) );
		
		
		
		function default_primary_menu_for_hokutodestiny(){
			
			echo '<ul class="nav navbar-nav main-menus navbar-right">';
			
			if(is_user_logged_in() && is_front_page()){
				echo '<li><a href="wp-admin/nav-menus.php">Create Menu</a></li>';
				
			}else{
				
				echo '<li><a href="'.home_url().'">Home</a></li>';
			}
			
			
			echo '</ul>';
			
			
		}
		
		function default_secondary_menu_for_hokutodestiny(){
			
			echo '<ul class="nav navbar-nav">';
			
			if(is_user_logged_in() && is_front_page()){
				echo '<li><a href="wp-admin/nav-menus.php">Create Menu</a></li>';
				
			}else{
				
				echo '<li><a href="'.home_url().'">Home</a></li>';
			}
			
			
			echo '</ul>';
			
			
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'hokutodestiny_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'hokutodestiny_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hokutodestiny_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hokutodestiny_content_width', 640 );
}
add_action( 'after_setup_theme', 'hokutodestiny_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hokutodestiny_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hokutodestiny' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hokutodestiny' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title" >',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hokutodestiny_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hokutodestiny_scripts() {
	
	
	

	
	
	
	wp_enqueue_style( 'hokutodestiny-magnific', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style( 'hokutodestiny-ionicons', get_template_directory_uri() . '/css/ionicons.min.css');
	wp_enqueue_style( 'hokutodestiny-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	
	wp_enqueue_style( 'hokutodestiny-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'hokutodestiny-responsive', get_template_directory_uri() . '/css/responsive.css');
	
	
	

	wp_enqueue_script( 'hokutodestiny-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'hokutodestiny-masonry', get_template_directory_uri() . '/js/masonry.pkgd.js', array('jquery'), '', true );
	wp_enqueue_script( 'hokutodestiny-magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'hokutodestiny-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hokutodestiny_scripts' );

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
 * Customize widget.
 */
require get_template_directory() . '/inc/custom-widget.php';

/**
 * Theme options.
 */
require get_template_directory() . '/inc/options.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function wpdocs_excerpt_more( $more ) {
   
    return '<div class="read-more"> 
		<a href="'.get_the_permalink().'">Read More</a>
	</div>';
	
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


function km_get_blog_posts_page_url() {
	// If front page is set to display a static page, get the URL of the posts page.
	if ( 'page' === get_option( 'show_on_front' ) ) {
		return get_permalink( get_option( 'page_for_posts' ) );
	}
	// The front page IS the posts page. Get its URL.
	return get_home_url();
}




/* 
add_action( 'init', 'codex_book_init' );

function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Members', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Member', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Members', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Member', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Member', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Member', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Member', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Member', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Member', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Members', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Members', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Members:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Members found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Members found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'member' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'      	=> 'dashicons-groups',
		'supports'           => array( 'title', 'thumbnail')
	);

	register_post_type( 'member', $args );
	
	
	
	
	
	
	$labels = array(
		'name'                       => _x( 'Years', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Year', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Years', 'textdomain' ),
		'popular_items'              => __( 'Popular Years', 'textdomain' ),
		'all_items'                  => __( 'All Years', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Year', 'textdomain' ),
		'update_item'                => __( 'Update Year', 'textdomain' ),
		'add_new_item'               => __( 'Add New Year', 'textdomain' ),
		'new_item_name'              => __( 'New Year Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate Years with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Years', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Years', 'textdomain' ),
		'not_found'                  => __( 'No Years found.', 'textdomain' ),
		'menu_name'                  => __( 'Years', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'year' ),
	);

	register_taxonomy( 'year', 'member', $args );
 

	
	
	
	
	
}
*/


	