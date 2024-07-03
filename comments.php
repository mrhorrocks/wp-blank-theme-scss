<?php

/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 */
?>
<div id="comments">
    <?php
    if (have_comments()) :
        global $comments_by_type;
        $comments_by_type = separate_comments($comments);
        if (!empty($comments_by_type['comment'])) :
    ?>
            <section id="comments-list" class="comments">

                <h2 class="comments-title">
                    <?php comments_number(); ?>
                </h2>
                <!-- TOP COMMENT PAGINATION -->
                <?php if (get_comment_pages_count() > 1) : ?>
                    <nav id="comments-nav-above" class="comments-nav" role="navigation">
                        <div class="paginated-comments-links">
                            <?php paginate_comments_links(); ?>
                        </div>
                    </nav>
                <?php endif; ?>

                <ul>
                    <!-- LOOP THROUGH COMMENTS FOR THIS POST -->
                    <?php wp_list_comments('type=comment'); ?>
                </ul>

                <!-- BOTTOM COMMENT PAGINATION -->
                <?php if (get_comment_pages_count() > 1) : ?>
                    <nav id="comments-nav-below" class="comments-nav" role="navigation">
                        <div class="paginated-comments-links">
                            <?php paginate_comments_links(); ?>
                        </div>
                    </nav>
                <?php endif; ?>



            </section>

        <?php
        endif;
        if (!empty($comments_by_type['pings'])) :
            $ping_count = count($comments_by_type['pings']);
        ?>
            <section id="trackbacks-list" class="comments">

                <h2 class="comments-title">
                    <?php echo '<span class="ping-count">' . esc_html($ping_count) . '</span> ' . esc_html(_nx('Trackback or Pingback', 'Trackbacks and Pingbacks', $ping_count, 'comments count', 'blankscss')); ?>
                </h2>

                <ul>
                    <?php wp_list_comments('type=pings&callback=blankscss_custom_pings'); ?>
                </ul>
            </section>
    <?php
        endif;
    endif;
    if (comments_open()) {
        // SHOW THE COMMENT FORM
        // $comments_args = array(
        //     // Change the title of the reply section
        //     'title_reply' => __('Write a Reply or Comment', 'textdomain'),

        //     // Change the title of send button 
        //     'label_submit' => __('Post Comment', 'textdomain'),

        //     // Remove "Text or HTML to be displayed after the set of comment fields".
        //     'comment_notes_after' => '',

        //     // Redefine your own textarea (the comment body).
        //     // 'comment_field' => '
        //     // <div class="comment-form-comment">
        //     // <label for="comment">' . _x('Comment', 'noun') . '</label>
        //     // <br />
        //     // <textarea id="comment" name="comment" aria-required="true"></textarea>
        //     // </div>',
        // );
        // comment_form($comments_args);
        // comment_form();
        comments_template('template-parts/short-comments.php');
    }
    ?>
</div>