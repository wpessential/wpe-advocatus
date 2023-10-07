<?php
get_header();

while (have_posts()):
the_post();
?>


<section class="section-detail mb-60">
    <div class="container">
        <div class="post-detail position-relative">
            <div class="post-detail-info ">
                <h1 class="mb-0">  <?php the_title(); ?></h1>
                <div class="post-detail-mini-author align-items-center d-flex flex-wrap">
                    <!-- <img class="img-fluid rounded-circle" src="" height="50"
                        width="50"> -->
                       
                    <div class="post-detail-min-author-info">
                        <h5 class="mb-0"><a href="#"><?php echo get_the_author_link(); ?></a></h5>
                        <span class="d-block"> <?php echo get_the_date(); ?> | &nbsp;&nbsp; 9 min to read</span>
                    </div>
                </div>
            </div>
            <figure class="post-detail-img overflow-hidden position-relative ">
                <img class="img-fluid w-100" src=" <?php the_post_thumbnail() ?>">
            </figure>
            <div class="post-detail-content ">
                <p> <?php the_content();?></p>
               
                <div class="grid-2">
                    <figure class="featured-product-img post-detail-img overflow-hidden">
                        <a href="assets/images/resources/news-3.jpg">
                            <img class="img-fluid " src="assets/images/resources/design-1.jpg">
                        </a>
                    </figure>
                    <figure class="featured-product-img post-detail-img overflow-hidden">
                        <a href="assets/images/resources/news-3.jpg">
                            <img class="img-fluid " src="assets/images/resources/design-2.jpg">
                        </a>
                    </figure>
                </div>
                <p>Email is a crucial channel in any marketing mix, and never has this been truer than for today's
                    entrepreneur. Curious what to say? How to say it? How often to hit "send"? Each bite-sized lesson
                    delivers core concepts, guiding questions, and tactical how-to resources. Email is a crucial channel
                    in any marketing mix, and never has this been truer than for today's entrepreneur.</p>
                <p>Curious what to say? How to say it? How often to hit "send"? Each bite-sized lesson delivers core
                    concepts, guiding questions, and tactical how-to resources.</p>
            </div>
            <div class="post-detail-share d-flex flex-wrap align-items-center ">
                <h5 class="mb-0">Share on:</h5>
                <div class="share-links d-flex flex-wrap">
                    <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com/" title="Twitter" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="post-detail-author-info bg-color5 align-items-center d-flex flex-wrap ">
                <img src="assets/images/resources/author-img.jpg" height="100" width="100">
                <div class="post-detail-info-inner">
                    <h5 class="mb-0"><a href="#">Theresa Underwood</a></h5>
                    <p class="mb-0">Email is a crucial channel in any marketing mix, and never has this been truer than
                        for today's entrepreneur. Curious what to say? How to say it? How often to hit "send"? Each
                        bite-sized lesson delivers core concepts, guiding questions, and tactical how-to resources.
                        Email is a crucial channel in any marketing mix, and never has this been truer than for today's
                        entrepreneur.</p>
                    <div class="share-links d-flex flex-wrap">
                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/" title="Twitter" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://www.pinterest.com/" title="Pinterest" target="_blank"><i
                                class="fab fa-pinterest-p"></i></a>
                        <a href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="comments-thread">
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
            </div>
            <div class="comment-reply position-relative ">
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
            </div>
        </div>
    </div>
</section>
<?php endwhile;
get_footer();