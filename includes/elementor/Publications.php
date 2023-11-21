<?php
class Publications extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return "Publications";
    }

    public function get_title()
    {
        return esc_html__("Publications Area", "wpe-advocatus");
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
        return ['publicationsarea', 'section'];
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
            'publications_area_title',
            [
                'label' => esc_html__('Title', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your title here', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
			'publications_area_detail',
			[
				'label' => esc_html__( 'Detail', 'wpe-advocatus' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'wpe-advocatus' ),
				'placeholder' => esc_html__( 'Type your description here', 'wpe-advocatus' ),
			]
		);
        
        $this->add_control(
            'category',
            [
                'label' => esc_html__('Category', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your category', 'wpe-advocatus'),
            ]
        );

        $this->add_control(
            'nunber_of_posts',
            [
                'label' => esc_html__('No of posts', 'wpe-advocatus'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('3', 'wpe-advocatus'),
                'placeholder' => esc_html__('Type your required no of post', 'wpe-advocatus'),
            ]
        );
        $this->end_controls_section();
     
    }

    /* For showing output of text fields content section on editing screen */
    protected function render() {
		$settings = $this->get_settings_for_display();

?>

<section class="publicate py-80">
            <div class="container">
                <div class="sec-tl mb-60">
                    <h1>
                    <?php echo $settings['background_heading']; ?>
                    </h1>
                    <h2>
                    <?php echo $settings['publications_area_title']; ?>
                    </h2>
                    <p>
                    <?php echo $settings['publications_area_detail']; ?>
                    </p>
                </div>
                <div class="publicate-wrapper">
                    <div class="row">
                        <?php
                        $_args = [

                            'cat' =>  $settings['publications_area_title'] , // this cat will take category "id" not slug
                            'posts_per_page' => $settings['publications_area_title'],

                        ];
                        // The Query.
                        //print_r($_args['cat']);exit;
                
                        $the_query = new WP_Query($_args);
                        if ($the_query->have_posts()) {
                            while ($the_query->have_posts()) {
                                $the_query->the_post();
                                ?>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="publicate-box">
                                        <figure><a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('blog_list') ?>
                                            </a></figure>
                                        <div class="publicate-content">
                                            <h3><a href="#">
                                                    <?php the_title() ?>
                                                </a></h3>
                                            <div class="flex-line">
                                                <span class="name"><a href="#">
                                                        <?php echo get_the_author_posts_link(); ?>
                                                    </a></span>
                                                <span>
                                                    <a
                                                        href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')); // this will show the datew but as we click on it it will show the post which were posted on that date?>">
                                                        <?php echo get_the_date(); ?>
                                                    </a>
                                                </span>
                                            </div>
                                            <p>
                                                <?php echo the_excerpt(); ?>
                                            </p>
                                            <div class="pub-foot">
                                                <a href="#"><i class="fa-solid fa-comments"></i>
                                                    <?php echo get_comments_number(); ?> Comments
                                                </a>
                                                <a href="#"><i class="fa-solid fa-share"></i> Share</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            <?php }
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </section>






















<?php

	}


}

