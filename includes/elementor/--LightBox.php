<?php
class LightBox extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return "LightBox";
    }

    public function get_title()
    {
        return esc_html__("Light Box", "wpe-advocatus");
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_icon()
    {
        return ' eicon-lightbox';
    }
    public function get_keywords()
    {
        return ['LightBox', 'section'];
    }


    public function get_script_depends()
    {
        return ['lightbox' . 'bootstrap-bundle-min-scripts'];
    }
    public function get_style_depends()
    {
        return ['all-min-styles'];
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
            'button_title',
            [
                'label' => esc_html__('Button', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Button', 'wpe-advocatus'),
                'placeholder' => esc_html__('Button title', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'item_description',
            [
                'label' => esc_html__('Description', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'textdomain'),
                'placeholder' => esc_html__('Type your description here', 'textdomain'),
            ]
        );





        $this->end_controls_section();

        /*=================================For First Block=============================================*/
        /*=================================For Second Block=============================================*/



    }


    /* For showing output of text fields content section on editing screen */
    protected function render()
    {
        $settings = $this->get_settings_for_display();

        ?>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#popup-<?php echo $this->get_id(); // this will change the id of the dialog box evrytime we use any dialog box?>">
            <?php echo $settings['button_title']; ?>
        </button>

        <!-- Vertically centered scrollable modal -->
        <div class="modal fade" id="popup-<?php echo $this->get_id(); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1> -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>
                                <?php echo $settings['item_description']; ?>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <?php

    }


}










//===============================================================//
?>