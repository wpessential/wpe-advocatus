<?php
function faq_area_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'faq_visibility'=> '',
        'faq_background'=> '',
        'faq_heading'=> '',
        'faq_detail'=> '',

    );

    $atts = shortcode_atts($user_inputs, $atts, 'faq_area');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    if ($faq_visibility) {
    ?>

<section class="faq py-80">
    <div class="container">
        <div class="sec-tl mb-60 light">
            <h1><?php echo esc_html($faq_background); ?></h1>
            <h2><?php echo esc_html($faq_heading); ?></h2>
            <p><?php echo esc_html($faq_detail); ?></p>
        </div>
        <div class="faq-wrapper">
        <?php if ($content): ?>
            <div class="row gx-5">
            <?php echo do_shortcode($content); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
    }
    return ob_get_clean();
}