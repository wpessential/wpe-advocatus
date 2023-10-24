<?php
function publications_area_shortcode($atts, $content = null)
{
    $user_inputs = array(
        'publication_area_visibility' => '',
        'background_heading' => '',
        'publication_heading' => '',
        'publication_detail' => '',
        'author_name' => '',
    );

    $atts = shortcode_atts($user_inputs, $atts, 'publications_area');
    extract($atts); // convert associate array into variable and their value
    ob_start();
    $_args = [
        // 'posts_count' => $post_counts,
        //'cat' => 10,
        'author_name' => $author_name,
    ];
    // The Query.
    $the_query = new WP_Query($_args);
    if ($the_query->have_posts()) {

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
                            <?php while ($the_query->have_posts()) {
                                $the_query->the_post();
                                ?>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="publicate-box">
                                        <figure><a href="#"><?php the_post_thumbnail() ?></a></figure>
                                        <div class="publicate-content">
                                            <h3><a href="#">
                                                    <?php the_title() ?>
                                                </a></h3>
                                            <div class="flex-line">
                                                <span class="name"><a href="#">
                                                        <?php echo get_the_author_posts_link(); ?>
                                                    </a></span>
                                                <span>
                                                    <?php echo get_the_date(); ?>
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
                                <?php
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
}