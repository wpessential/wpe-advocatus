<?php
function home_about_shortcode($atts, $content = null)
{
    $user_inputs = array(
        "about_section_visibility"=> "",
        "background_heading"=> "",
        'about_us_heading' => '',
        'about_us_detail' => '',
    );

    $atts = shortcode_atts($user_inputs, $atts, 'home_practice_area');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    if($about_section_visibility){
    ?>

    <section class="about py-80">
        <div class="container">
            <div class="sec-tl mb-60">
                <h1><?php echo esc_html($background_heading); ?></h1>
                <h2>
                    <?php echo esc_html($about_us_heading); ?>
                </h2>
                <p>
                    <?php echo esc_html($about_us_detail); ?>
                </p>
            </div>
            <div class="about-wrapper">
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