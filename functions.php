<?php 
/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if (!isset($content_width)) {
	$content_width = 800; /* pixels */
}



if ( ! function_exists( 'wpeadvocatus_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function wpeadvocatus_setup() {

    /**
	 * Make theme available for translation.
	 * Translations can be placed in the /languages/ directory.
	 */
		load_theme_textdomain( 'wpe-advocatus', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support("widgets");
		remove_theme_support('widgets-block-editor');

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'wpe-advocatus' ),
			'secondary' => __( 'Secondary Menu', 'wpe-advocatus' ),
		) );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'wpeadvocatus_setup' );


//  registering and enqueing new files


include_once(get_template_directory() . '\includes\shortcode.php');
add_shortcode('big_banner', 'big_banner_shortcode');


//   ||||||   ||||    ||||| |||||| ||||||     ||||| |||    ||  ||||    ||   || |||||                                                                 
//   ||  ||| ||       ||      ||   ||  |||    ||    || ||  || ||  ||   ||   || ||                                                   
//   ||||||  ||       |||||   ||   ||||||     ||||| ||  || || ||  ||   ||   || |||||                                                            
//   |||||    ||  ||||    ||  ||   |||||      ||    ||   |||| ||  ||   ||   || ||                                                 
//   ||  |||    ||| || |||||  ||   ||  |||    ||||| ||    |||  ||||||| ||||||| |||||            

if (!function_exists('enqueue_files')) {
	function enqueue_files()
	{
		// Register the CSS file
		wp_register_style('all-min-style', get_template_directory_uri() . '/assets/css/all.min.css', array(), '1.0');
		wp_register_style('owl-carousel-style', get_template_directory_uri() . '/assets/css/owl.carousal.min.css', array(), '1.0');
		wp_register_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0');
		wp_register_style('style-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');


		wp_register_style('bootstrap-min-style', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0');

		// Enqueue the CSS file




		wp_enqueue_style('owl-carousel-style');
		wp_enqueue_style('bootstrap-min-style');
		wp_enqueue_style('all-min-style');
		wp_enqueue_style('style-style');
		wp_enqueue_style('responsive-style');
		
		// ===================================================

		// Register the JavaScript file
		wp_register_script('bootstrap-bundle-min-script', get_template_directory_uri() . '/assets/js/bootstraps.bundle.min.js', array(), '1.0', true);
		wp_register_script('custom-script', get_template_directory_uri() . '/assets/js/custom-script.js', array(), '1.0', true);
		wp_register_script('owl-carousal-min-script', get_template_directory_uri() . '/assets/js/owl.carousal.min.js', array(), '1.0', true);
		wp_register_script('rocket-loader-min-script', get_template_directory_uri() . '/assets/js/rocket-loader.min.js', array(), '1.0', true);

		// Enqueue the JavaScript file
		wp_enqueue_script('jquery'); // wordpress has its own jquery so we will enque it 

		wp_enqueue_script('bootstrap-bundle-min-script');
		wp_enqueue_script('owl-carousal-min-script');
		wp_enqueue_script('custom-script');
		wp_enqueue_script('rocket-loader-min-script');
		// =====================================================
	}
}
add_action('wp_enqueue_scripts', 'enqueue_files');


if(function_exists("Kirki")){
	require_once get_template_directory() . '/config/config.php';
}