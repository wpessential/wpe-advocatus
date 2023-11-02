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
		add_image_size('attorney', 261, 290, true);
		add_image_size('client', 340, 280, true);
		add_image_size('blog_list', 356,288,true);





		

///////////////////////////////////////////////////////////////////////////////////////////////////////
 //  For ADMIN 

 add_action( 'show_user_profile', 'social_media_profile_fields' );
add_action( 'edit_user_profile', 'social_media_profile_fields' );

function social_media_profile_fields( $user ) { ?>
    <h3><?php _e("Social media information", "blank"); ?></h3>
	<p><?php echo _e("get_user_meta(userid,key,true(for single vslue return))");?></p>

    <table class="form-table">
    <tr>
        <th><label for="Facebook"><?php _e("Facebook"); ?></label></th>
        <td>
            <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_user_meta( $user->ID,'facebook',true) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your facebook link."); ?></span>
        </td>
    </tr>
    <tr>
        <th><label for="twitter"><?php _e("Twitter"); ?></label></th>
        <td>
            <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_user_meta( $user->ID,'twitter',true) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your twitter link."); ?></span>
        </td>
    </tr>
    <tr>
    <th><label for="pintrest"><?php _e("Pintrest"); ?></label></th>
        <td>
            <input type="text" name="pintrest" id="pintrest" value="<?php echo esc_attr( get_user_meta( $user->ID,'pintrest',true)  ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your pintrest link."); ?></span>
        </td>
    </tr>
	<tr>
    <th><label for="linkedin"><?php _e("Linked in"); ?></label></th>
        <td>
            <input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr( get_user_meta( $user->ID,'linkedin',true) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your linked in link."); ?></span>
        </td>
    </tr>
	<tr>
    <th><label for="instagram"><?php _e("Instagram"); ?></label></th>
        <td>
            <input type="text" name="instagram" id="instagram" value="<?php echo esc_attr( get_user_meta( $user->ID,'instagram',true) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your instagram link."); ?></span>
        </td>
    </tr>
    </table>
<?php }

// For SAVING ACTION
add_action( 'personal_options_update', 'save_social_media_profile_fields' );
add_action( 'edit_user_profile_update', 'save_social_media_profile_fields' );

function save_social_media_profile_fields( $user_id ) {
    if ( empty( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'], 'update-user_' . $user_id ) ) {
        return;
    }
    
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
    update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
    update_user_meta( $user_id, 'pintrest', $_POST['pintrest'] );
	update_user_meta( $user_id, 'linkedin', $_POST['linkedin'] );
    update_user_meta( $user_id, 'instagram', $_POST['instagram'] );

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
	//include_once(get_template_directory() . '/includes/blog_shortcode.php');









	add_shortcode('home_about', 'home_about_shortcode'); // this adds  the short code in function first_about and it has the tag about
	add_shortcode('home_practice_area', 'practice_area_shortcode');
	add_shortcode('home_banner', 'home_banner_shortcode');
	add_shortcode('about_history', 'about_history_shortcode');
	add_shortcode('about_expertise', 'about_expertise_shortcode');
	add_shortcode('practice_area_child', 'practicearea_child_shortcode');
	add_shortcode('attorney_area', 'attorney_area_shortcode');
	add_shortcode('attorney_child', 'attorney_child_shortcode');
	add_shortcode('faq_area', 'faq_area_shortcode');
	add_shortcode('faq_child', 'faq_shortcode');
	add_shortcode('publications_area', 'publications_area_shortcode');
	add_shortcode('client_area', 'client_area_shortcode');
	add_shortcode('client_child', 'client_child_shortcode');
	add_shortcode('contact_area', 'contact_area_shortcode');
	add_shortcode('contact_child', 'contact_child_shortcode');
	add_shortcode('blog', 'blog_shortcode');




}







// if (function_exists("Kirki")) {
// 	require_once get_template_directory() . '/config/config.php';
// }