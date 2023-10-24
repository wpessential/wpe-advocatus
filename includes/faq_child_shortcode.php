<?php
function faq_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'question_1' => '',
        'answer_1' => '',
        'question_2' => '',
        'answer_2' => '',
        'question_3' => '',
        'answer_3' => '',
        'question_4' => '',
        'answer_4' => '',
        'faq_para'=> '',

    );

    $atts = shortcode_atts($user_inputs, $atts, 'faq_child');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    ?>
    <div class="col-lg-6">
        <div class="faq-block">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <?php echo esc_html($question_1); ?>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                            <?php echo esc_html($answer_1); ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <?php echo esc_html($question_2); ?>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                        <?php echo esc_html($answer_2); ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <?php echo esc_html($question_3); ?>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <?php echo esc_html($answer_4); ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            <?php echo esc_html($question_4); ?>
                        </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <?php echo esc_html($answer_4); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="faq-box">
            <p><?php echo esc_html($faq_para); ?> </p>
        </div>
    </div>
    <?php
    return ob_get_clean();
}