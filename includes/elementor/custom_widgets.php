<?php
use Elementor\Widget_Base;

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * Test Widget 1.
 *
 *
 * @since 1.0.0
 * 
 */


 class star_widget extends \Elementor\Widget_Base {


	/**
	 * Get widget name.
	 *
	 * Retrieve star widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */

	public function get_name() 
	{
		return 'star';// this will work as id
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve star widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title(){
		return esc_html__( 'Star Widget ', 'wpe-advocatus' );
	}	
	
	/**
	 * Get widget icon.
	 *
	 * Retrieve star widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */

	 public function get_icon(){
		return 'eicon-star';
	 }

	 /**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the star widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'basic' ];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the star widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'testwidget', 'url', 'link' ];
	}

	/**
	 * Register srar widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'wpe-advocatus' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'url',
			[
				'label' => esc_html__( 'URL to embed', 'elementor-test-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'url',
				'placeholder' => esc_html__( 'https://your-link.com', 'wpe-advocatus' ),
			]
		);

		$this->end_controls_section();

	}



 








}