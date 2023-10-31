<?php
/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if (!isset($content_width)) {
	$content_width = 800; /* pixels */
}



if (!function_exists('wpeadvocatus_setup')):
	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function wpeadvocatus_setup()
	{

		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain('wpe-advocatus', get_template_directory() . '/languages');

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support('automatic-feed-links');

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support('post-thumbnails');
		add_theme_support("widgets");
		remove_theme_support('widgets-block-editor');

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus(
			array(
				'primary' => __('Primary Menu', 'wpe-advocatus'),
				'secondary' => __('Secondary Menu', 'wpe-advocatus'),
			)
		);

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
  
    
        // REgister Image Sizes
		add_image_size('wpeadvocatus_blog_post', 1116, 745, true); 





		///////////////////////////////////////////////////////////

		//	||||    |||| ||||| ||||||| |||||     ||||||   |||||  |||     |||                                                    
		//	|| ||  || || ||      ||   ||   ||    ||   || ||   ||   ||  ||                                          
		//	||   ||   || |||||   ||   |||||||    |////|  ||   ||     ||                                     
		//	||        || ||      ||   ||   ||    ||   || ||   ||   ||  ||                                           
		//	||        || |||||   ||   ||   ||    ||||||   |||||  |||    |||                                 



		// IT IS BEING USED IN blog_shortcode.php

		// These lines of code add actions to WordPress. Actions are events that trigger specific functions.
	
		add_action('add_meta_boxes', 'create_metabox', 10, 2);
		
		// This is the beginning of a function called "my_metabox," which creates a custom meta box.
		function create_metabox($post_type, $post)
		{
		
			// These lines define an array of screen names where the meta box should appear (posts and pages).
			$screens_name = ['page']; // for one screen only 
			// $screens_name = ['post', 'page'];
		
		
			// This line converts the $post variable into an array.
			$args = (array) $post;
		
			// This line adds a custom meta box to the specified screens with a title and callback function.
			add_meta_box('my_test_meta_box', __('Metabox ', 'register-metabox'), 'my_metabox_callback', $screens_name, 'advanced', 'high', $args);
		
		
		
		}
		
		///////////////////////////////////////////////////////////////////////////////////////
		
		
		add_action('save_post', 'save_my_metabox', 10, 1);
		// This is the beginning of a function called "save_my_metabox," which handles saving data from the meta box.
		function save_my_metabox($post_id)
		{
			// Check if our nonce is set (a security token).
			if (!isset($_POST['register_metabox_nonce_verification_nonce'])) {
				return $post_id;
			}
		
			// Retrieve the nonce from the form.
			$nonce = $_POST['register_metabox_nonce_verification_nonce'];
		
			// Verify that the nonce is valid for security.
			if (!wp_verify_nonce($nonce, 'register_metabox_nonce_verification')) {
				return $post_id;
			}
		
			// Check if the WordPress system is doing an autosave, and if so, do nothing.
			if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
				return $post_id;
			}
		
		
		
		
			// Get the value from the "banner_title" field in the form or provide an empty string if not set.
			$heading = $_POST['blog_heading'] ?? '';
			// Update the post's metadata with the "banner_title" value.
			update_post_meta($post_id, 'blog_heading', $heading);
		
			// Get the value from the "banner_subtitle" field in the form or provide an empty string if not set.
			$detail = $_POST['blog_detail'] ?? '';
			// Update the post's metadata with the "banner_subtitle" value.
			update_post_meta($post_id, 'blog_detail', $detail);
		
			// This will get the value from blog_category field in the form if not it will provide empty string to 
			$category = $_POST['blog_category'] ?? '';
			// Update the post's metadata with the "blog_category" value.
			update_post_meta($post_id, 'blog_category', $category);
		
			$post_counts = $_POST['post_per_page'] ?? '';
			update_post_meta($post_id, 'post_per_page', $post_counts);

			

		}
		//|//////////////////////////////////////////////////////////////////////////////////////////////////
		
		// This is the beginning of a function called "my_metabox_callback," which displays the content of the meta box.
		function my_metabox_callback($args)
		{
			// Add a security nonce field to the form.we will set ut here first and then we used it above
			wp_nonce_field('register_metabox_nonce_verification', 'register_metabox_nonce_verification_nonce');
		
			$heading = get_post_meta($args->ID, 'blog_heading', true);
			// Get the current value of the "blog_detail" meta field.
			$detail = get_post_meta($args->ID, 'blog_detail', true);
				// Get the current value of the "blog_category" meta field.
			$category = get_post_meta($args->ID, 'blog_category', true);
				// Get the current value of the "blog_" meta field.

			$pot_counts = get_post_meta($args->ID, 'post_per_page', true);

		
		
		
			?>
		
		
		
			<!-- Display an input field for "blog_heading" with a label. -->
			<label for="blog_heading" style="width:150px; display:inline-block;">
				<?php echo esc_html__('Heading', 'register-metabox'); ?>
			</label>
			<input type="text" name="blog_heading" id="blog_heading" class="blog_heading" value="<?php echo esc_attr($heading); ?>"
				style="width:300px;" />
			<br>
			<p>This is for the Heading</p>
			<br>
		
			<!-- Display an input field for "blog_detail" with a label. -->
			<label for="blog_detail" style="width:150px; display:inline-block;">
				<?php echo esc_html__('Detail', 'register-metabox'); ?>
			</label>
			<input type="text" name="blog_detail" id="blog_detail" class="blog_detail" value="<?php echo esc_attr($detail); ?>"
				style="width:300px;" />
			<br>
			<p>This is for the detail</p>
			<br>
		
				<!-- Display an input field for "blog_category" with a label. -->
		
			<label for="blog_category" style="width:150px; display:inline-block;">
				<?php echo esc_html__('Category', 'register-metabox'); ?>
			</label>
			<input type="text" name="blog_category" id="blog_category" class="blog_category" value="<?php echo esc_attr($category); ?>"
				style="width:300px;" />
			<br>
			<p>This is for the category</p>
			<br>

			<label for="post_per_page" style="width:150px; display:inline-block;">
				<?php echo esc_html__('Posts Count', 'register-metabox'); ?>
			</label>
			<input type="text" name="post_per_page" id="post_per_page" class="post_per_page" value="<?php echo esc_attr($pot_counts); ?>"
				style="width:300px;" />
			<br>
			<p>This is for the Posts per page </p>
			<br>
		
		
		
			<?php
		}













	}
endif; // myfirsttheme_setup
add_action('after_setup_theme', 'wpeadvocatus_setup');


//  registering and enqueing new files




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
		wp_register_style('owl-carousel-style', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0');
		wp_register_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0');
		wp_register_style('style-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');


		wp_register_style('bootstrap-min-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');

		// Enqueue the CSS file




		wp_enqueue_style('owl-carousel-style');
		wp_enqueue_style('bootstrap-min-style');
		wp_enqueue_style('all-min-style');
		wp_enqueue_style('style-style');
		wp_enqueue_style('responsive-style');

		// ===================================================

		// Register the JavaScript file
		wp_register_script('bootstrap-bundle-min-script', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0', true);
		wp_register_script('custom-script', get_template_directory_uri() . '/assets/js/custom-script.js', array(), '1.0', true);
		wp_register_script('owl-carousal-min-script', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0', true);


		// Enqueue the JavaScript file
		wp_enqueue_script('jquery'); // wordpress has its own jquery so we will enque it 

		wp_enqueue_script('bootstrap-bundle-min-script');
		wp_enqueue_script('owl-carousal-min-script');
		wp_enqueue_script('custom-script');
		// =====================================================

		// REGISTERING FONTS
		wp_register_script('font_1', get_template_directory_uri() . '/assets/webfonts/fa-solid-900.woff2.har', array(), '1.0', true);
		wp_register_script('font_2', get_template_directory_uri() . '/assets/webfonts/fa-brands-400.woff2.har', array(), '1.0', true);

		wp_enqueue_script('font_1');
		wp_enqueue_script('font_2');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_files');



add_action('init', 'register_shortcode'); // register the code using this hook
function register_shortcode()
{ // cstom function to registers short code which is being included in this function below 

	include_once(get_template_directory() . '/includes/home_about_shortcode.php');
	include_once(get_template_directory() . '/includes/home_practice_area_shortcode.php');
	include_once(get_template_directory() . '/includes/practicearea_child_shortcode.php');
	include_once(get_template_directory() . '/includes/home_banner_shortcode.php');
	include_once(get_template_directory() . '/includes/about_history_shortcode.php');
	include_once(get_template_directory() . '/includes/about_expertise_shortcode.php');
	include_once(get_template_directory() . '/includes/home_attorney_shortcode.php');
	include_once(get_template_directory() . '/includes/attorneys_child_shortcode.php');
	include_once(get_template_directory() . '/includes/publications_shortcode.php');
	include_once(get_template_directory() . '/includes/faq_shortcode.php');
	include_once(get_template_directory() . '/includes/faq_child_shortcode.php');
	include_once(get_template_directory() . '/includes/our_client_shortcode.php');
	include_once(get_template_directory() . '/includes/client_child_shortcode.php');
	include_once(get_template_directory() . '/includes/contact_shortcode.php');
	include_once(get_template_directory() . '/includes/contact_child_shortcode.php');
	include_once(get_template_directory() . '/includes/blog_shortcode.php');









	add_shortcode('home_about', 'home_about_shortcode'); // this adds  the short code in function first_about and it has the tag about
	add_shortcode('home_practice_area', 'practice_area_shortcode');
	add_shortcode('home_banner', 'home_banner_shortcode');
	add_shortcode('about_history', 'about_history_shortcode');
	add_shortcode('about_expertise', 'about_expertise_shortcode');
	add_shortcode('practice_area_child', 'practicearea_child_shortcode');
	add_shortcode('attorney_area', 'attorney_area_shortcode');
	add_shortcode('attorney_child', 'attorney_child_shortcode');
	add_shortcode('publications_area', 'publications_area_shortcode');
	add_shortcode('faq_area', 'faq_area_shortcode');
	add_shortcode('faq_child', 'faq_shortcode');
	add_shortcode('client_area', 'client_area_shortcode');
	add_shortcode('client_child', 'client_child_shortcode');
	add_shortcode('contact_area', 'contact_area_shortcode');
	add_shortcode('contact_child', 'contact_child_shortcode');
	add_shortcode('blog', 'blog_shortcode');




}







// if (function_exists("Kirki")) {
// 	require_once get_template_directory() . '/config/config.php';
// }