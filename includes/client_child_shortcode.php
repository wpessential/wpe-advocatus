<?php
function client_child_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'client_qoute'=>'',
        'client_name'=>'',
        'client_portfolio' => '',
    );

    $atts = shortcode_atts($user_inputs, $atts, 'client_child');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    
    ?>


 <div class="review-content">
    <span class="quote">“</span>
    <p><?php echo esc_html($client_qoute); ?></p>
    <h4><a href="#"><?php echo esc_html($client_name); ?></a></h4>
    <span><?php echo esc_html($client_dtail); ?></span>
</div>
<?php
    
    return ob_get_clean();
}