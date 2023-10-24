<?php
function about_history_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'history_heading' => '',
        'year_1' => '',
        'year_1_detail' => '',
        'year_2' => '',
        'year_2_detail' => '',
        'year_3' => '',
        'year_3_detail' => '',
    );

    $atts = shortcode_atts($user_inputs, $atts, 'about_history');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    ?>


<div class="col-lg-6">
    <div class="about-box res-mb">
        <h3>
            <?php echo esc_html($history_heading); ?>
        </h3>
        <ul class="hst-wrap">
            <li><span>
                    <?php echo esc_html($year_1); ?>
                </span>
                <p>
                    <?php echo esc_html($year_1_detail); ?>
                </p>
            </li>
            <li><span>
                    <?php echo esc_html($year_2); ?>
                </span>
                <p>
                    <?php echo esc_html($year_2_detail); ?>
                </p>
            </li>
            <li><span>
                    <?php echo esc_html($year_3); ?>
                </span>
                <p>
                    <?php echo esc_html($year_3_detail); ?>
                </p>
            </li>
        </ul>
    </div>
</div>
<?php
    return ob_get_clean();
}