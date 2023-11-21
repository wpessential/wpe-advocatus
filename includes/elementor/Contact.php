<?php
class FAQ extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return "FAQArea";
    }

    public function get_title()
    {
        return esc_html__("FAQ area", "wpe-advocatus");
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_icon()
    {
        return ' eicon-container';
    }
    public function get_keywords()
    {
        return ['faqarea', 'section'];
    }


    public function register_controls()
    {
        /*=================================== For Background Image ==============================*/
        // We created STYLE tab and add background image option to it 

        $this->start_controls_section(
            'Main_section',
            [
                'label' => esc_html__('Main Data', 'wpe-advocatus'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'background_heading',
            [
                'label' => esc_html__('Background Heading', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('0', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type background heading', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'contact_title',
            [
                'label' => esc_html__('Title', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your title here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'contact_detail',
            [
                'label' => esc_html__('Detail', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your description here', 'wpe-advocatus'),
            ]
        );

        $this->end_controls_section();

        /*=================================For Contact form Block=============================================*/

        $this->start_controls_section(
            'block',
            [
                'label' => esc_html__('Block Data', 'wpe-advocatus'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'contact_form',
            [
                'label' => esc_html__('Contact Form id', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default id', 'wpe-advocatus'),
                'placeholder' => esc_html__('contact form id here', 'wpe-advocatus'),
            ]
        );
        $this->end_controls_section();

    }

    /* For showing output of text fields content section on editing screen */
    protected function render()
    {
        $settings = $this->get_settings_for_display();

        ?>

        <section class="faq py-80">
            <div class="container">
                <div class="sec-tl mb-60 light">
                    <h1><?php echo $settings['background_heading']; ?></h1>
                    <h2><?php echo $settings['faq_title']; ?></h2>
                    <p><?php echo $settings['faq_detail']; ?></p>
                </div>
                <div class="faq-wrapper">
                    <div class="row gx-5">
                        <div class="col-lg-6">
                            <div class="faq-block">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <?php echo $settings['question_1']; ?>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php echo $settings['answer_1']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <?php echo $settings['question_2']; ?>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php echo $settings['answer_2']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                <?php echo $settings['question_3']; ?>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php echo $settings['answer_3']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingfour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsefour" aria-expanded="false"
                                                aria-controls="collapsefour">
                                                <?php echo $settings['question_4']; ?>
                                            </button>
                                        </h2>
                                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php echo $settings['answer_4']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-box">
                                <p><?php echo $settings['general_detail']; ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





















        <?php

    }


}

