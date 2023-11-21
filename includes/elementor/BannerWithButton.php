<?php
class BannerWithButton extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return "BannerWithButton";
    }

    public function get_title()
    {
        return esc_html__("Banner With Button", "wpe-advocatus");
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_icon()
    {
        return 'eicon-banner';
    }
    public function get_keywords()
    {
        return ['bannerwithbuttons', 'banner'];
    }


    public function register_controls()
    {
        $this->start_controls_section(
            // contol section starts here and it will contain neccessary controls inside
            // this shows in which section control should be like content,style or advance section
            'content-section',
            [
                'label' => esc_html__('Content', 'wpe-advocatus'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        /* adding Text control for banner Title */
        $this->add_control(
            'banner_title',
            [
                'label' => esc_html__('Title', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your title here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'banner_subtitle',
            [
                'label' => esc_html__('Subitle', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default subtitle', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your subtitle here', 'wpe-advocatus'),
            ]
        );

        $this->end_controls_section();

        /** =============Fro Button we created new section ========================*/

        $this->start_controls_section(
            'button-section',
            [
                'label' => esc_html__('Button', 'wpe-advocatus'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        /* adding Text control for banner Title */
        $this->add_control(
            'button_title',
            [
                'label' => esc_html__('Button', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Button', 'wpe-advocatus'),
                'placeholder' => esc_html__('Button', 'wpe-advocatus'),
            ]
        );

        // For button link
        $this->add_control(
            'button_link',
            [
                'label' => esc_html__('Link', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::URL,
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

/*=================================== For Background Image ==============================*/
// We created STYLE tab and add background image option to it 

        // $this->start_controls_section(
        //     'background-section',
        //     [
        //         'label' => esc_html__('Background', 'wpe-advocatus'),
        //         'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        //     ]
        // );

        // $this->add_group_control(
            
		// 	\Elementor\Group_Control_Background::get_type(),
		// 	[
		// 		'name' => 'background',
		// 		'types' => [ 'classic', 'gradient', 'video' ],
		// 		'selector' => '{{WRAPPER}} .your-class',
		// 	]
		// );


        
        //$this->end_controls_section();

    }


    /* For showing output of text fields content section on editing screen */
    protected function render()
    {
        $settings = $this->get_settings_for_display();

    ?>



        <section>
    <div class="fxd-bg dark-overlay" style="background-image:url(assets/images/resources/bg1.png);">
        <div class="hero-wrap">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-info">
                    <h1><?php echo $settings['banner_title']; ?></h1>
                    <p><?php echo $settings['banner_subtitle']; ?></p>
                </div>
                <div class="hero-btn">
                    <a href="<?php echo $settings['button_link']; ?>" class="theme-btn"><?php echo $settings['button_title']; ?></button></a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>











    <?php

    }

}