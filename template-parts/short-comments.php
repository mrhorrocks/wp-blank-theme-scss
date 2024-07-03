<?php

if (comments_open()) {
    // SHOW THE COMMENT FORM
    $comments_args = array(
        // Change the title of the reply section
        'title_reply' => __('Write a Reply or Comment', 'textdomain'),

        // Redefine your own textarea (the comment body).
        'comment_field' => '
        <label for="comment">' . _x('Comment sht', 'noun') . '</label>
        <textarea id="comment" name="comment" aria-required="true"></textarea>',

        // Change the title of send button 
        'label_submit' => __('Post Comment', 'textdomain'),

        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
    );
    comment_form($comments_args);
    // comment_form();
}
