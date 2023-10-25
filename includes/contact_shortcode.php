<?php
function contact_area_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'contact_area_visibility' => '',
        'background_heading' => '',
        'contact_heading' => '',
        'contact_detail' => '',
        'contact_map'=>'', 
    );

    $atts = shortcode_atts($user_inputs, $atts, 'contact_area');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    if ($contact_area_visibility) {
        ?>

<section class="contact py-80">
    <div class="container">
        <div class="sec-tl mb-60">
            <h1><?php echo esc_html($background_heading); ?></h1>
            <h2><?php echo esc_html($contact_heading); ?></h2>
            <p><?php echo esc_html($contact_detail); ?></p>
        </div>
        <div class="contact-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="contact-block">
                    <?php
                echo do_shortcode($content);

                ?>
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