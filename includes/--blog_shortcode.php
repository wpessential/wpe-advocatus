<?php
function blog_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'blog_heading' => '',
        'blog_detail' => '',
        'blog_category' => '',
        'post_per_page'=> '',
    );

    $atts = shortcode_atts($user_inputs, $atts, 'blog');
    extract($atts); // convert associate array into variable and their value
    ob_start();

    ?>
    <section class="publicate py-80">
        <div class="container">

            <div class="sec-tl mb-60">
                <h2>
                    <?php echo esc_html($blog_heading); ?>
                </h2>
                <p>
                    <?php echo esc_html($blog_detail); ?>
                </p>
            </div>
            <div class="publicate-wrapper">

                <div class="row">
                    <?php
                    $_args = [

                        'cat' => $blog_category,
                        'posts_per_page' => $post_per_page,
                        
                    ];
                    // The Query.
                    $the_query = new WP_Query($_args);
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            ?>

                            <div class="col-lg-4 col-md-6 col-sm-12">

                                <div class="publicate-box">
                                    <figure><a href="#">
                                            <?php the_post_thumbnail() ?>
                                        </a></figure>
                                    <div class="publicate-content">
                                        <h3><a href="#">
                                                <?php the_title() ?>
                                            </a></h3>
                                        <div class="flex-line">
                                            <span class="name"><a href="#">
                                                    <?php echo get_the_author_posts_link(); ?>
                                                </a></span>
                                            <span><a
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

            <div class="blog-button text-center mt-3">
                <ul class="page-numbers">
                    <li>
                        <?php

                        $page_navigation = array(
                            'prev_text' => '<i class="fa fa-angle-double-left"></i>',
                            'next_text' => '<i class="fa fa-angle-double-right"></i>',
                        );


                        echo paginate_links($page_navigation); ?>
                    </li>

                </ul>
            </div>
        </div>

    </section>







    <?php
}
return ob_get_clean();

// complete shortcode query and calling mechansism

// // THis is the BLOG LIST page
// $page_id = get_queried_object_id(); // get the id of the post
// // print $page_id;exit;
// if ($page_id) {
//     $heading = get_post_meta($page_id, 'blog_heading', true);

//     $detail = get_post_meta($page_id, 'blog_detail', true);
//     //print_r($detail); exit;
//     $category = get_post_meta($page_id, 'blog_category', true);
//     // print_r($category);exit;
//     $post_counts = get_post_meta($page_id, 'post_per_page', true);
//     // print_r($post_counts);exit;

// }

// get_header();

// echo do_shortcode("[blog blog_heading='$heading' blog_detail='$detail' blog_category='$category' post_per_page='$post_counts']"); ?>
