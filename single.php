<?php
get_header();

if (have_posts()) {
    the_post();
    //$author_id = get_the_author_meta('ID');

    $user = get_current_user_id(); // this will get the id of the current user who is logged in 
    if ($user) {
        $facebook = get_user_meta($user, "facebook", true);
        $twitter = get_user_meta($user, "twitter", true);
        $pintrest = get_user_meta($user, "pintrest", true);
        $linkedin = get_user_meta($user, "linkedin", true);
        $instagram = get_user_meta($user, "instagram", true);
    }

    $author_id = get_the_author_meta("ID"); // we will get the id of the authhor of the post like this and then we can access the 
    ?>
    <section class="section-detail mb-60">
        <div class="container">
            <div class="post-detail position-relative">
                <div class="post-detail-info ">
                    <h1 class="mb-0">
                        <?php the_title(); ?>
                    </h1>
                    <div class="post-detail-mini-author align-items-center d-flex flex-wrap">
                        <!-- <img class="img-fluid rounded-circle" src="" height="50"
                        width="50"> -->

                        <div class="post-detail-min-author-info">
                            <h5 class="mb-0">
                                <?php echo get_the_author_link(); ?>
                            </h5>
                            <span class="d-block"><a
                                    href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')); // this will show the datew but as we click on it it will show the post which were posted on that date?>">
                                    <?php echo get_the_date(); ?>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <figure class="post-detail-img overflow-hidden position-relative ">
                    <?php the_post_thumbnail('wpeadvocatus_blog_post'); ?>
                </figure>
                <div class="post-detail-content">
                    <p>
                        <?php the_content(); ?>
                    </p>

                </div>
                <div class="post-detail-share d-flex flex-wrap align-items-center ">
                    <h5 class="mb-0">Share on:</h5>
                    <div class="share-links d-flex flex-wrap">
                        <a href="<?php echo esc_url($facebook); ?>" title="Facebook" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo esc_url($twitter); ?>" title="Twitter" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <a href="<?php echo esc_url($linkedin); ?>" title="Linkedin" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="post-detail-author-info bg-color5 align-items-center d-flex flex-wrap ">
                    <?php echo get_avatar($author_id, 96); ?>
                    <div class="post-detail-info-inner">
                        <h5 class="mb-0"><a href="#">
                                <?php echo get_the_author_meta("display_name"); ?>
                            </a></h5>
                        <p class="mb-0">
                            <?php echo get_the_author_meta("description"); ?>
                        </p>
                        <div class="share-links d-flex flex-wrap">
                            <a href="<?php echo esc_url($facebook); ?>" title="Facebook" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="<?php echo esc_url($twitter); ?>" title="Twitter" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="<?php echo esc_url($pintrest); ?>" title="Pinterest" target="_blank"><i
                                    class="fab fa-pinterest-p"></i></a>
                            <a href="<?php echo esc_url($linkedin); ?>" title="Linkedin" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="<?php echo esc_url($instagram); ?>" title="Instagram" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <?php comments_template();?>
            </div>
        </div>
    </section>


<!-- <div class="comments-thread">
                    <h3>Comments:</h3>
                    <ul class="comment-list comments">
                        <li class="comment-author-bizvee">
                            <div class="comment comment-body ">
                                <img class="comment-author vcard" src="assets/images/resources/comment-img1.jpg" height="60"
                                    width="60">
                                <div class="comment-detail">
                                    <h5><a href="#">Annette Black</a></h5><span class="says">says:</span>
                                    <span class="post-detail-date-reply comment-metadata">Februrary 14, 2021
                                    </span>
                                    <p class="comment-content">Email is a crucial channel in any marketing mix, and never
                                        has this been truer than for today's entrepreneur. Curious what to say? How to say
                                        it?
                                        How often to hit "send"? Each bite-sized lesson delivers core concepts, guiding
                                        questions, and tactical how-to resources. Email is a crucial channel in any
                                        marketing mix, and never has this been truer than for today's entrepreneur.</p>
                                    <div class="reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="comment comment-body">
                                <img class="comment-author vcard" src="assets/images/resources/comment-img2.jpg" height="60"
                                    width="60">
                                <div class="comment-detail">
                                    <h5><a href="#">Annette Black</a></h5><span class="says">says:</span>
                                    <span class="post-detail-date-reply comment-metadata">Februrary 14, 2021
                                    </span>
                                    <p class="comment-content">Email is a crucial channel in any marketing mix, and never
                                        has this been truer than for today's entrepreneur. Curious what to say? How to say
                                        it?
                                        How often to hit "send"? Each bite-sized lesson delivers core concepts.</p>
                                    <div class="reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="comment-body comment">
                                <img class="comment-author vcard" src="assets/images/resources/comment-img3.jpg" height="60"
                                    width="60">
                                <div class="comment-detail">
                                    <h5><a href="#">Annette Black</a></h5><span class="says">says:</span>
                                    <span class="post-detail-date-reply comment-metadata">Februrary 14, 2021

                                    </span>
                                    <p class="comment-content">Email is a crucial channel in any marketing mix, and never
                                        has this been truer than for today's entrepreneur. Curious what to say? How to say
                                        it?
                                        How often to hit "send"? Each bite-sized lesson delivers core concepts, guiding
                                        questions, and tactical how-to resources. Email is a crucial channel in any
                                        marketing mix, and never has this been truer than for today's entrepreneur.</p>
                                    <div class="reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> -->
                <!-- <div class="comment-reply position-relative ">
                    <h3>Leave a comment</h3>
                    <form>
                        <div class="row mrg30">
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="field-box v2 position-relative ">
                                    <label>Name</label>
                                    <input type="text" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="field-box v2 position-relative ">
                                    <label>Email</label>
                                    <input type="email" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="field-box v2 position-relative ">
                                    <label>Company Name</label>
                                    <input type="text" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="field-box v2 position-relative ">
                                    <label>Website</label>
                                    <input type="url" required="">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="field-box v2 position-relative ">
                                    <label>Comment</label>
                                    <textarea placeholder="Write your comment here..."></textarea>
                                </div>
                                <div class="field-btn position-relative ">
                                    <button class="theme-btn" type="submit">Send
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> -->











                       <!-- ================================= -->





    </html>
    <?php
}
get_footer();