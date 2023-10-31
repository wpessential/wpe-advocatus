<?php
get_header(); 
?>

    <section class="publicate py-80">
    <div class="container">

  
        <div class="publicate-wrapper">

            <div class="row">
               
            <?php while(have_posts()){
            the_post();       ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">

                            <div class="publicate-box">
                                <figure><a href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail() ?>
                                    </a></figure>
                                <div class="publicate-content">
                                    <h3><a href="<?php the_permalink() ?>">
                                            <?php the_title() ?>
                                        </a></h3>
                                    <div class="flex-line">
                                        <span class="name">
                                                <?php echo get_the_author_posts_link(); ?>
                                            </span>
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
                        <?php } ?>
                   
            </div>
        </div>
<!--  PAGINATION LINKE HERE  -->
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
get_footer();