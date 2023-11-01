<?php

function home_banner_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'section_visibility' => '',
        'background_image' => '',
        'name' => '',
        'lawyer' => '',
        'contact_us' => '',
        'contact_detail'=> '',
        'heading'=> '',

    );

    $atts = shortcode_atts($user_inputs, $atts, 'home_banner');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    if ($section_visibility == '1') {
      
    
    ?>
    <section>
        <div class="fxd-bg dark-overlay" style="background-image:url(<?php echo wp_get_attachment_image_url( $background_image ,"full" )?>)">
            <div class="hero-wrap">
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-info">
                            <h1><?php echo esc_html($name); ?></h1>
                            <p><?php echo esc_html($lawyer); ?></p>
                            <p><?php echo esc_html($heading ); ?></p>
                        </div>
                        <div class="hero-btn">
                            <a href="<?php echo esc_url($contact_detail); ?>" class="theme-btn"><?php echo esc_html($contact_us); ?></a>
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