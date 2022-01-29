<?php
/**
 * Js Bangladesh functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Js_Bangladesh
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'js_bangladesh_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function js_bangladesh_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Js Bangladesh, use a find and replace
		 * to change 'js-bangladesh' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'js-bangladesh', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

        // Post Formats
        add_theme_support( 'post-formats', array('images', 'audio', 'aside', 'gallery', 'link' ) );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
        // Register a New menu 
        register_nav_menus([
            'primary' => __('primary Menu','js-bangladesh'),
            'footer' => __('footer Menu','js-bangladesh')
        ]);


        
    


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
				'js_bangladesh_custom_background_args',
				array(
					'default-color' => '',
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
				'width'       => 336,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'js_bangladesh_setup' );



// function wpdocs_excerpt_more( $more ) {
//     return '<a href="'.get_the_permalink().'" rel="nofollow">Read More...</a>';
// }*q  ?"wp_nav_menu.,mnbnm,././
// add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );






/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function js_bangladesh_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'js_bangladesh_content_width', 640 );
}
add_action( 'after_setup_theme', 'js_bangladesh_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function js_bangladesh_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'js-bangladesh' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'js-bangladesh' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'js_bangladesh_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function js_bangladesh_style() {
	wp_enqueue_style( 'js-bangladesh-style', get_stylesheet_uri(), array(), _S_VERSION, 'all');
    // Add Custom Css

    wp_enqueue_style('noonpost-googlefonts', 'https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap', false);
    wp_enqueue_style('all.css', get_template_directory_uri() . '/assets/css/all.css', [], time(), 'all');
    wp_enqueue_style('elegant-font-icons.css', get_template_directory_uri() . '/assets/css/elegant-font-icons.css', [], time(), 'all');
    wp_enqueue_style('bootstrap.min.css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], time(), 'all');
    wp_enqueue_style('owl.carousel.css', get_template_directory_uri() . '/assets/css/owl.carousel.css', [], time(), 'all');
    wp_enqueue_style('style.css', get_template_directory_uri() . '/assets/css/style.css', [], time(), 'all');
    wp_enqueue_style('custom.css', get_template_directory_uri() . '/assets/css/custom.css', [], time(), 'all');
    
    wp_style_add_data( 'js-bangladesh-style', 'rtl', 'replace' );


    // Add Custom Js
	wp_enqueue_script( 'Customizar.js', get_template_directory_uri() . '/js/customizer.js', ['jquery'], time(), true );
	wp_enqueue_script( 'navigation.js', get_template_directory_uri() . '/js/navigation.js', ['jquery'], time(), true );
    wp_enqueue_script( 'popper.min.js', get_template_directory_uri() . '/js/popper.min.js', [], time(), true );


    wp_enqueue_script( 'jquery-3.5.0.min.js', get_template_directory_uri() . '/assets/js/jquery-3.5.0.min.js', ['jquery'], time(), true );
	wp_enqueue_script( 'popper.min.js', get_template_directory_uri() . '/assets/js/popper.min.js', [], time(), true );
    wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], time(), true );

	wp_enqueue_script( 'ajax-contact.js', get_template_directory_uri() . '/assets/js/ajax-contact.js', ['jquery'], time(), true );
    wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', ['jquery'], time(), true );
    wp_enqueue_script( 'switch.js', get_template_directory_uri() . '/assets/js/switch.js', [], time(), true);

	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', [], time(), true );
} 


  
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    add_action( 'wp_enqueue_scripts', 'js_bangladesh_style' );



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
 * plugin-installer.
 */
require get_template_directory() . '/inc/plugin-installer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



