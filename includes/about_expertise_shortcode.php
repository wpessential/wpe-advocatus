<?php
function about_expertise_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'expertise_heading' => '',
        'expertise_detail' => '',
    );

    $atts = shortcode_atts($user_inputs, $atts, 'about_expertise');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    ?>

<div class="col-lg-6">
    <div class="about-box">
        <h3>
            <?php echo esc_html($expertise_heading); ?>
        </h3>
        <p>
            <?php echo esc_html($expertise_detail); ?>
        </p>
    </div>
</div>
<?php
    return ob_get_clean();
}