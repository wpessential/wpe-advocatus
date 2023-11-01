<?php
function client_child_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'client_qoute' => '',
        'client_name' => '',
        'client_portfolio' => '',
        'qoute_sign' => '',
        'heading_link'=> '',
    );

    $atts = shortcode_atts($user_inputs, $atts, 'client_child');
    extract($atts); // convert associate array into variable and their value
    ob_start();


    ?>

    <div class="item">
        <div class="review-content">
            <span class="quote">
                <?php echo esc_html($qoute_sign); ?>
            </span>
            <p>
                <?php echo esc_html($client_qoute); ?>
            </p>
            <h4><a href="<?php echo esc_url($heading_link); ?>">
                    <?php echo esc_html($client_name); ?>
                </a></h4>
            <span>
                <?php echo esc_html($client_portfolio); ?>
            </span>
        </div>
    </div>
    <?php

    return ob_get_clean();
}