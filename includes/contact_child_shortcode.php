<?php
function contact_child_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'contact_form' => '',
        'contact_map' => '',
    );
    $atts = shortcode_atts($user_inputs, $atts, 'contact_child');
    extract($atts); // convert associate array into variable and their value
    ob_start();


    ?>

    <div class="row gx-5 align-items-center">
        <div class="col-lg-6">
            <div class="contact-box">
                <?php
                echo  do_shortcode('[wpforms id="' . $contact_form . '"]');

                ?>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="contact-map">
                <iframe src="<?php echo esc_url($contact_map); ?>" height="360" style="border:0;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <?php

    return ob_get_clean();
}