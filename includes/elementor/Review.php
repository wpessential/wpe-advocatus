<?php
class Review extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return "Review";
    }

    public function get_title()
    {
        return esc_html__("Review Area", "wpe-advocatus");
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
        return ['review', 'section'];
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
            'client_title',
            [
                'label' => esc_html__('Title', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your title here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'client_detail',
            [
                'label' => esc_html__('Detail', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your description here', 'wpe-advocatus'),
            ]
        );

        $this->end_controls_section();

        /*=================================For First Block=============================================*/

        $this->start_controls_section(
            'block',
            [
                'label' => esc_html__('Block Data', 'wpe-advocatus'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->start_controls_section(
            'block',
            [
                'label' => esc_html__('Block Data', 'wpe-advocatus'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'image_1',
            [
                'label' => esc_html__('Choose Image', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );





        $this->add_control(
            'client_qoute_1',
            [
                'label' => esc_html__('Qoute', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your description here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'client_name_1',
            [
                'label' => esc_html__('Title', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your title here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'client_designation_1',
            [
                'label' => esc_html__('Subitle', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default subtitle', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your subtitle here', 'wpe-advocatus'),
            ]
        );


        $this->add_control(
            'client_qoute_2',
            [
                'label' => esc_html__('Qoute', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your description here', 'wpe-advocatus'),
            ]
        );


        $this->add_control(
            'client_name_2',
            [
                'label' => esc_html__('Title', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your title here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'client_designation_2',
            [
                'label' => esc_html__('Subitle', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default subtitle', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your subtitle here', 'wpe-advocatus'),
            ]
        );


        $this->add_control(
            'client_qoute_3',
            [
                'label' => esc_html__('Qoute', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your description here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'client_name_3',
            [
                'label' => esc_html__('Title', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your title here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'client_designation_3',
            [
                'label' => esc_html__('Subitle', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default subtitle', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your subtitle here', 'wpe-advocatus'),
            ]
        );
        /*=================================For Second Block=============================================*/



    }


    /* For showing output of text fields content section on editing screen */
    protected function render()
    {
        $settings = $this->get_settings_for_display();

        ?>

        <section class="review">
            <div class="fxd-bg py-80" style="background-image:url(assets/images/resources/bg2.png);">
                <div class="container">
                    <div class="sec-tl mb-60 light">
                        <h1 class="color-3">
                            <?php echo $settings['background_heading']; ?>
                        </h1>
                        <h2>
                            <?php echo $settings['client_title']; ?>
                        </h2>
                        <p>
                            <?php echo $settings['client_detail']; ?>
                        </p>
                    </div>
                    <div class="review-wrapper">
                        <div class="row gx-5">
                            <div class="col-lg-4">
                                <div class="review-preview">
                                    <figure><a href="#"><img src="<?php echo $settings['image_1']; ?>" alt="Men"></a></figure>
                                    <div class="primary-box"></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="review-box">
                                    <div class="owl-carousel owl-theme owl-review">
                                        <div class="item">
                                            <div class="review-content">
                                                <span class="quote">“</span>
                                                <p>
                                                    <?php echo $settings['client_qoute_1']; ?>
                                                </p>
                                                <h4><a href="#">
                                                        <?php echo $settings['client_name_1']; ?>
                                                    </a></h4>
                                                <span>
                                                    <?php echo $settings['client_designation_1']; ?>
                                                    << /span>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="review-content">
                                                <span class="quote">“</span>
                                                <p>
                                                    <?php echo $settings['client_qoute_2']; ?>
                                                </p>
                                                <h4><a href="#">
                                                        <?php echo $settings['client_name_2']; ?>
                                                    </a></h4>
                                                <span>
                                                    <?php echo $settings['client_designation_2']; ?>
                                                    << /span>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="review-content">
                                                <span class="quote">“</span>
                                                <p>
                                                    <?php echo $settings['client_qoute_3']; ?>
                                                </p>
                                                <h4><a href="#">
                                                        <?php echo $settings['client_name_3']; ?>
                                                    </a></h4>
                                                <span>
                                                    <?php echo $settings['client_designation_3']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





















        <?php

    }


}

