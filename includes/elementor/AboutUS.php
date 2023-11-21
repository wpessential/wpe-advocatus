<?php
class AboutUS extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return "AboutUs";
    }

    public function get_title()
    {
        return esc_html__("About Us", "wpe-advocatus");
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
        return ['aboutus', 'section'];
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
            'aboutus_title',
            [
                'label' => esc_html__('Title', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your title here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
			'aboutus_detail',
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
            'first_block',
            [
                'label' => esc_html__('First Block Data', 'wpe-advocatus'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'main_heading_1',
            [
                'label' => esc_html__('Main Heading', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default heading', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your heading here', 'wpe-advocatus'),
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
        
        $this->end_controls_section();

        /*=================================For Second Block=============================================*/

        $this->start_controls_section(
            'second_block',
            [
                'label' => esc_html__('second Block Data', 'wpe-advocatus'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'main_heading_2',
            [
                'label' => esc_html__('Main Heading', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default heading', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your heading here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
			'second_block_detail',
			[
				'label' => esc_html__( 'Detail', 'wpe-advocatus' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'wpe-advocatus' ),
				'placeholder' => esc_html__( 'Type your description here', 'wpe-advocatus' ),
			]
		);


    }


    /* For showing output of text fields content section on editing screen */
    protected function render() {
		$settings = $this->get_settings_for_display();

?>

<section class="about py-80">
    <div class="container">
        <div class="sec-tl mb-60">
            <h1> <?php echo $settings['background_heading']; ?></h1>
            <h2> <?php echo $settings['aboutus_title']; ?></h2>
            <p><?php echo $settings['aboutus_detail']; ?></p>
        </div>
        <div class="about-wrapper">
            <div class="row gx-5">
                <div class="col-lg-6">
                    <div class="about-box res-mb">
                        <h3><?php echo $settings['main_heading_1']; ?></h3>
                        <ul class="hst-wrap">
                            <li><span><?php echo $settings['heading_1']; ?>-</span> <p><?php echo $settings['detail_1']; ?></p></li>
                            <li><span><?php echo $settings['heading_2']; ?>-</span> <p><?php echo $settings['detail_2']; ?></p></li>
                            <li><span><?php echo $settings['heading_3']; ?>-</span> <p><?php echo $settings['detail_3']; ?></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-box">
                        <h3><?php echo $settings['main_heading_2']; ?></h3>
                        <p><?php echo $settings['second_block_detail']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






















<?php

	}


}

