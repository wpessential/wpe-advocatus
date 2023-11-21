<?php
class Attornies extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return "Attornies";
    }

    public function get_title()
    {
        return esc_html__("Attornies Area", "wpe-advocatus");
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
        return ['attorniesarea', 'section'];
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
            'attornies_area_title',
            [
                'label' => esc_html__('Title', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your title here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
			'attornies_area_detail',
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
			'image_1',
			[
				'label' => esc_html__( 'Choose Image', 'wpe-advocatus' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
            'attorney_name_1',
            [
                'label' => esc_html__('Title', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your title here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'attorney_designation_1',
            [
                'label' => esc_html__('Subitle', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default subtitle', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your subtitle here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
			'image_2',
			[
				'label' => esc_html__( 'Choose Image', 'wpe-advocatus' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
            'attorney_name_2',
            [
                'label' => esc_html__('Title', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your title here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'attorney_designation_2',
            [
                'label' => esc_html__('Subitle', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default subtitle', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your subtitle here', 'wpe-advocatus'),
            ]
        );


        $this->add_control(
			'image_3',
			[
				'label' => esc_html__( 'Choose Image', 'wpe-advocatus' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
            'attorney_name_3',
            [
                'label' => esc_html__('Title', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your title here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'attorney_designation_3',
            [
                'label' => esc_html__('Subitle', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default subtitle', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your subtitle here', 'wpe-advocatus'),
            ]
        );


        $this->add_control(
			'image_4',
			[
				'label' => esc_html__( 'Choose Image', 'wpe-advocatus' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
            'attorney_name_4',
            [
                'label' => esc_html__('Title', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your title here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'attorney_designation_4',
            [
                'label' => esc_html__('Subitle', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default subtitle', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your subtitle here', 'wpe-advocatus'),
            ]
        );


        
			
        $this->end_controls_section();

    }

    /* For showing output of text fields content section on editing screen */
    protected function render() {
		$settings = $this->get_settings_for_display();

?>

<section class="team">
    <div class="container">
        <div class="sec-tl mb-60">
            <h1><?php echo $settings['background_heading']; ?></h1>
            <h2><?php echo $settings['attornies_area_title']; ?></h2>
            <p><?php echo $settings['attornies_area_detail']; ?></p>
        </div>
        <div class="team-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-box">
                        <figure><a href="#"><img src="<?php echo $settings['image_1']; ?>" alt="Team"></a></figure>
                        <div class="team-content">
                            <h3><a href="#"><?php echo $settings['attorney_name_1']; ?></a></h3>
                            <p><?php echo $settings['attorney_designation_1']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-box">
                        <figure><a href="#"><img src="<?php echo $settings['image_2']; ?>" alt="Team"></a></figure>
                        <div class="team-content">
                            <h3><a href="#"><?php echo $settings['attorney_name_2']; ?></a></h3>
                            <p><?php echo $settings['attorney_designation_2']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-box">
                        <figure><a href="#"><img src="<?php echo $settings['image_3']; ?>" alt="Team"></a></figure>
                        <div class="team-content">
                            <h3><a href="#"><?php echo $settings['attorney_name_3']; ?></a></h3>
                            <p><?php echo $settings['attorney_designation_3']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-box">
                        <figure><a href="#"><img src="<?php echo $settings['image_4']; ?>" alt="Team"></a></figure>
                        <div class="team-content">
                            <h3><a href="#"><?php echo $settings['attorney_name_4']; ?></a></h3>
                            <p><?php echo $settings['attorney_designation_4']; ?></p>
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

