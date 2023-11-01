<?php
function publications_area_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'publication_area_visibility' => '',
        'background_heading' => '',
        'publication_heading' => '',
        'publication_detail' => '',
        'post_category' => '',
         'post_count'=> ''
    );

    $atts = shortcode_atts($user_inputs, $atts, 'publications_area');
    extract($atts); // convert associate array into variable and their value
    ob_start();
   
 //print_r($post_category);exit;
        if ($publication_area_visibility) {
            ?>

            <section class="publicate py-80">
                <div class="container">
                    <div class="sec-tl mb-60">
                        <h1>
                            <?php echo esc_html($background_heading); ?>
                        </h1>
                        <h2>
                            <?php echo esc_html($publication_heading); ?>
                        </h2>
                        <p>
                            <?php echo esc_html($publication_detail); ?>
                        </p>
                    </div>
                    <div class="publicate-wrapper">
                        <div class="row">
                        <?php
                    $_args = [

                        'cat' => $post_category,// this cat will take category "id" not slug
                        'posts_per_page' => $post_count,
                        
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
                                        <figure><a href="<?php the_permalink();?>"><?php the_post_thumbnail() ?></a></figure>
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
    return ob_get_clean();
