<?php
function attorney_child_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'attorney_1_image'=>'',
        'attorney_1_name'=>'',
        'attorney_1_designation' => '',
        'attorney_2_image'=>'',
        'attorney_2_name'=>'',
        'attorney_2_designation' => '',
        'attorney_3_image'=>'',
        'attorney_3_name'=>'',
        'attorney_3_designation' => '',
        'attorney_4_image'=>'',
        'attorney_4_name'=>'',
        'attorney_4_designation' => '',
        'attorney_1_link'=> '',
        'attorney_2_link'=> '',
        'attorney_3_link'=> '',
        'attorney_4_link'=> '',

    );

    $atts = shortcode_atts($user_inputs, $atts, 'attorney_child');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    ?>

<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="team-box">
            <figure><img src="<?php echo wp_get_attachment_image_url($attorney_1_image,'attorney'); ?>" alt="Team"></figure>
            <div class="team-content">
                <h3><a href="<?php echo esc_url($attorney_1_link); ?>"><?php echo esc_html($attorney_1_name); ?></a></h3>
                <p><?php echo esc_html($attorney_1_designation); ?></p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="team-box">
            <figure><img src="<?php echo wp_get_attachment_image_url($attorney_2_image); ?>" alt="Team"></figure>
            <div class="team-content">
                <h3><a href="<?php echo esc_url($attorney_2_link); ?>"><?php echo esc_html($attorney_2_name); ?></a></h3>
                <p><?php echo esc_html($attorney_2_designation); ?></p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="team-box">
            <figure><img src="<?php echo wp_get_attachment_image_url($attorney_3_image); ?>" alt="Team"></figure>
            <div class="team-content">
                <h3><a href="<?php echo esc_url($attorney_3_link); ?>"><?php echo esc_html($attorney_3_name); ?></a></h3>
                <p><?php echo esc_html($attorney_3_designation); ?></p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="team-box">
            <figure><img src="<?php echo wp_get_attachment_image_url($attorney_4_image); ?>" alt="Team"></figure>
            <div class="team-content">
                <h3><a href="<?php echo esc_url($attorney_4_link); ?>"><?php echo esc_html($attorney_4_name); ?></a></h3>
                <p><?php echo esc_html($attorney_4_designation); ?></p>
            </div>
        </div>
    </div>
</div>
<?php
    
    return ob_get_clean();
}