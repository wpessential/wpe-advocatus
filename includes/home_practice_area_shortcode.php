<?php
function practice_area_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'practice_area_visibility' => '',
        'background_heading' => '',
        'practice_area_heading' => '',
        'practice_area_detail' => '',
    );

    $atts = shortcode_atts($user_inputs, $atts, 'home_practice_area');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    if ($practice_area_visibility) {
        ?>
        <section class="area py-80">
            <div class="container">
                <div class="sec-tl light mb-60">
                    <h1>
                        <?php echo esc_html($background_heading); ?>
                    </h1>
                    <h2>
                        <?php echo esc_html($practice_area_heading); ?>
                    </h2>
                    <p>
                        <?php echo esc_html($practice_area_detail); ?>
                    </p>
                </div>
                <?php if ($content): ?>
                    <div class="area-wrapper">
                        <?php echo do_shortcode($content); ?>
                    </div>
                <?php endif; ?>
        </section>
        <?php
    }
    return ob_get_clean();

}