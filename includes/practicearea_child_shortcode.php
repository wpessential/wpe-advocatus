<?php
function practicearea_child_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'icon_1'=>'',
        'heading_1' => '',
        'heading_1_detail' => '',
        'icon_2'=>'',
        'heading_2' => '',
        'heading_2_detail' => '',
        'icon_3'=>'',
        'heading_3' => '',
        'heading_3_detail' => '',
        'icon_4'=>'',
        'heading_4' => '',
        'heading_4_detail' => '',
        'link_1'=> '',
        'link_2'=> '',
        'link_3'=> '',
        'link_4'=> '',


    );

    $atts = shortcode_atts($user_inputs, $atts, 'practice_area_child');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    ?>
<div class="row">
    <div class="col-lg-6">
        <div class="area-box">
            <div class="area-logo">
                <a href="#" class="icon"><i class="<?php echo $icon_1;?>"></i></a>
            </div>
            <div class="area-content">
                <h3><a href="<?php echo esc_url($link_1); ?>">
                        <?php echo esc_html($heading_1); ?>
                    </a></h3>
                <p>
                    <?php echo esc_html($heading_1_detail); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="area-box">
            <div class="area-logo">
                <a href="#" class="icon"><i class="<?php echo $icon_2;?>"></i></a>
            </div>
            <div class="area-content">
                <h3><a href="<?php echo esc_url($link_2); ?>">
                        <?php echo esc_html($heading_2); ?>
                    </a></h3>
                <p>
                    <?php echo esc_html($heading_2_detail); ?>
                </p>
            </div>
        </div>
    </div>
        <div class="col-lg-6">
            <div class="area-box">
                <div class="area-logo">
                    <a href="#" class="icon"><i class="<?php echo $icon_3;?>"></i></a>
                </div>
                <div class="area-content">
                    <h3><a href="<?php echo esc_url($link_3); ?>">
                            <?php echo esc_html($heading_3); ?>
                        </a></h3>
                    <p>
                        <?php echo esc_html($heading_3_detail); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="area-box">
                <div class="area-logo">
                    <a href="#" class="icon"><i class="<?php echo esc_html($icon_4);?>"></i></a>
                </div>
                <div class="area-content">
                    <h3><a href="<?php echo esc_url($link_4); ?>">
                            <?php echo esc_html($heading_4); ?>
                        </a></h3>
                    <p>
                        <?php echo esc_html($heading_4_detail); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    return ob_get_clean();
}