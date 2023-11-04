<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
$comment_count = get_comments_number();
wp_enqueue_script('comment-reply');
?>
<div class="comments-thread">

    <h3>
        <?php if ('1' === $comment_count): ?>
            <?php esc_html_e('1 comment', 'wpe-advocatus'); ?>
        <?php else: ?>
            <?php
            printf(
                /* translators: %s: Comment count number. */
                esc_html(_nx('%s comment', '%s comments', $comment_count, 'Comments title', 'wpe-advocatus')),
                esc_html(number_format_i18n($comment_count))
            );
            ?>
        <?php endif; ?>
    </h3>

    <ul class="comment-list comments">

        <?php
        wp_list_comments(
            array(
                'avatar_size' => 100,
                'style' => 'ul',
                'short_ping' => true,
            )
        );
        ?>

    </ul>
    <?php the_comments_pagination(); ?>
    <?php if (!comments_open()): ?>
        <p class="no-comments">
            <?php esc_html_e('Comments are closed.', 'wpe-advocatus'); ?>
        </p>
    <?php endif; ?>
    <!--comment-thread-->
</div>



<div class="comment-reply position-relative">

    <?php
    $args = array(
        'title_reply' => esc_html__('Leave the comment', 'twentytwentyone'),
        'title_reply_before' => '<h3>',
        'title_reply_after' => '</h3>',
        'fields' => [
            'author' => '<div class="col-md-6 col-sm-12 col-lg-6"><div class="field-box v2 position-relative "> <label>Name</label><input type="text" required></div></div>',
            'email' => '<div class="col-md-6 col-sm-12 col-lg-6"><div class="field-box v2 position-relative "> <label>E-mail</label><input type="text" required></div></div>',
            'url' => '<div class="col-md-6 col-sm-12 col-lg-6"><div class="field-box v2 position-relative "> <label>Websites</label><input type="url" required></div></div>',
        ],
        'comment_field' => '<div class="field-box v2 position-relative "><label></label><textarea placeholder="Write your comment here..."></textarea></div> ',
        'submit_button' => '<div class="field-btn position-relative "><button class="theme-btn" type="submit">Send
        </button></div>',
        //   'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s main-button">%4$s</button>',
        'submit_field' => '<div class="col-lg-12"><fieldset>%1$s %2$s</fieldset></div>',
        'class_container' => 'content',
        'comment_notes_before' => '<div class="col-lg-12 col-sm-12"><p class="comment-notes"><span id="email-notes">Your email address will not be published.</span></p></div>',

    );


    if (has_action('set_comment_cookies', 'wp_set_comment_cookies') && get_option('show_comments_cookies_opt_in')) {
        $args['fields']['cookies'] = '<div class="col-lg-12 col-sm-12"><fieldset><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox"required /><label>Save my name, email, and website in this browser for the next time I comment.</label></fieldset></div>';

    }

    add_action('comment_form_top', function () {
        echo '<div class="row">';  // This row will be addede inside in the form tag
    }, 1);


    add_action('comment_form', function () {
        echo '</div>';
    }, 10000);

    comment_form($args);
    ?>







