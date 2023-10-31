<?php
function client_area_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'client_area_visibility' => '',
        'background_heading' => '',
        'background_image' => '',
        'client_heading' => '',
        'client_detail' => '',
        'client_image' => '',
    );










    $atts = shortcode_atts($user_inputs, $atts, 'client_area');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    if ($client_area_visibility) {
        $background_image = wp_get_attachment_image_url($background_image);
        ?>

<section class="review">
    <div class="fxd-bg py-80" style="background-image: url('<?php echo $background_image; ?>');">
    <div class="container">
        <div class="sec-tl mb-60 light">
            <h1 class="color-3"><?php echo esc_html($background_heading); ?></h1>
            <h2><?php echo esc_html($client_heading); ?></h2>
            <p><?php echo esc_html($client_detail); ?></p>
        </div>
        <div class="review-wrapper">
            <div class="row gx-5">
                <div class="col-lg-4">
                    <div class="review-preview">
                        <figure><a href="#"><img src="<?php echo wp_get_attachment_image_url($client_image); ?>"></a></figure>
                        <div class="primary-box"></div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="review-box">
                        <div class="owl-carousel owl-theme owl-review">
                        <?php echo do_shortcode($content); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>






        <?php
    }
    return ob_get_clean();
}