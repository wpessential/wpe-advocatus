<?php
class PracticeArea extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return "PracticeArea";
    }

    public function get_title()
    {
        return esc_html__("Practice Area", "wpe-advocatus");
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
        return ['practicearea', 'section'];
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
            'practice_area_title',
            [
                'label' => esc_html__('Title', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your title here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
			'practice_area_detail',
			[
				'label' => esc_html__( 'Detail', 'wpe-advocatus' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'wpe-advocatus' ),
				'placeholder' => esc_html__( 'Type your description here', 'wpe-advocatus' ),
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


        $this->add_control(
            'heading_1',
            [
                'label' => esc_html__('Heading', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default heading', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your heading here', 'wpe-advocatus'),
            ]
        );


        $this->add_control(
			'detail_1',
			[
				'label' => esc_html__( 'Detail', 'wpe-advocatus' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'wpe-advocatus' ),
				'placeholder' => esc_html__( 'Type your description here', 'wpe-advocatus' ),
			]
		);


        $this->add_control(
            'heading_2',
            [
                'label' => esc_html__('Heading', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default heading', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your heading here', 'wpe-advocatus'),
            ]
        );


        $this->add_control(
			'detail_2',
			[
				'label' => esc_html__( 'Detail', 'wpe-advocatus' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'wpe-advocatus' ),
				'placeholder' => esc_html__( 'Type your description here', 'wpe-advocatus' ),
			]
		);

        $this->add_control(
            'heading_3',
            [
                'label' => esc_html__('Heading', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default heading', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your heading here', 'wpe-advocatus'),
            ]
        );


        $this->add_control(
			'detail_3',
			[
				'label' => esc_html__( 'Detail', 'wpe-advocatus' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'wpe-advocatus' ),
				'placeholder' => esc_html__( 'Type your description here', 'wpe-advocatus' ),
			]
		);

        $this->add_control(
            'heading_4',
            [
                'label' => esc_html__('Heading', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default heading', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your heading here', 'wpe-advocatus'),
            ]
        );


        $this->add_control(
			'detail_4',
			[
				'label' => esc_html__( 'Detail', 'wpe-advocatus' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'wpe-advocatus' ),
				'placeholder' => esc_html__( 'Type your description here', 'wpe-advocatus' ),
			]
		);
        
        $this->end_controls_section();

    }

    /* For showing output of text fields content section on editing screen */
    protected function render() {
		$settings = $this->get_settings_for_display();

?>

<section class="area py-80">
    <div class="container">
        <div class="sec-tl light mb-60">
            <h1><?php echo $settings['background_heading']; ?></h1>
            <h2><?php echo $settings['practice_area_title']; ?></h2>
            <p><?php echo $settings['practice_area_detail']; ?></p>
        </div>
        <div class="area-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <div class="area-box">
                        <div class="area-logo">
                        <a href="#" class="icon"><i class="fa-solid fa-handshake"></i></a>
                    </div>
                    <div class="area-content">
                        <h3><a href="#"><?php echo $settings['heading_1']; ?></a></h3>
                        <p><?php echo $settings['detail_1']; ?></p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="area-box">
                        <div class="area-logo">
                        <a href="#" class="icon"><i class="fa-solid fa-wrench"></i></a>
                    </div>
                    <div class="area-content">
                        <h3><a href="#"><?php echo $settings['heading_2']; ?></a></h3>
                        <p><?php echo $settings['detail_2']; ?></p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="area-box">
                        <div class="area-logo">
                        <a href="#" class="icon"><i class="fa-solid fa-desktop"></i></a>
                    </div>
                    <div class="area-content">
                        <h3><a href="#"><?php echo $settings['heading_3']; ?></a></h3>
                        <p><?php echo $settings['detail_3']; ?></p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="area-box">
                        <div class="area-logo">
                        <a href="#" class="icon"><i class="fa-solid fa-house-chimney"></i></a>
                    </div>
                    <div class="area-content">
                        <h3><a href="#"><?php echo $settings['heading_4']; ?></a></h3>
                        <p><?php echo $settings['detail_4']; ?></p>
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

