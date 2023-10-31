<?php
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



    <?php
}