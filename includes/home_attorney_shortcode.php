<?php
function attorney_area_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'attorney_area_visibility'=>'',
        'background_heading'=>'',
        'attorney_area_heading' => '',
        'attorney_area_detail' => '',
    );

    $atts = shortcode_atts($user_inputs, $atts, 'attorney_area');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    if($attorney_area_visibility){
    ?>



<section class="team">
    <div class="container">
        <div class="sec-tl mb-60">
            <h1><?php echo esc_html($background_heading); ?></h1>
            <h2><?php echo esc_html($attorney_area_heading); ?></h2>
            <p><?php echo esc_html($attorney_area_detail); ?></p>
        </div>
        <?php if ($content): ?>
        <div class="team-wrapper">
            <?php  echo do_shortcode($content); ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php
    }
    return ob_get_clean();
}