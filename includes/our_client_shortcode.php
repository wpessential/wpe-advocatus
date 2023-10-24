<?php
function client_area_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'client_area_visibility'=>'',
        'background_heading'=>'',
        'client_heading' => '',
        'client_detail' => '',
        'client_image'=> '',
    );

    $atts = shortcode_atts($user_inputs, $atts, 'client_area');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    if($client_area_visibility){
    ?>

<section class="review">
    <div class="fxd-bg py-80" style="background-image:url(assets/images/resources/bg2.png);">
        <div class="container">
            <div class="sec-tl mb-60 light">
                <h1 class="color-3"><?php echo esc_html($background_heading); ?></h1>
                <h2><?php echo esc_html($client_heading); ?></h2>
                <p><?php echo esc_html($client_detail); ?></p>
            </div>
            <div class="review-wrapper">
                <div class="row gx-5">
                    <div class="col-lg-4">
                        <div class="review-preview">
                            <figure><?php echo wp_get_attachment_image_url($client_image); ?></a></figure>
                            <div class="primary-box"></div>
                        </div>
                    </div>
                    <?php if ($content): ?>
                    <div class="col-lg-8">
                        <div class="review-box">
                            <div class="owl-carousel owl-theme owl-review owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-1476px, 0px, 0px); transition: all 0.25s ease 0s; width: 5166px;">                                      
                                        <div class="owl-item cloned" style="width: 728px; margin-right: 10px;">
                                            <div class="item">
                                            <?php echo do_shortcode($content); ?>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                                <div class="owl-nav disabled"><button type="button" role="presentation"
                                        class="owl-prev"><span aria-label="Previous">‹</span></button><button
                                        type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">›</span></button></div>
                                <div class="owl-dots"><button role="button"
                                        class="owl-dot active"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button></div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    }
    return ob_get_clean();
}