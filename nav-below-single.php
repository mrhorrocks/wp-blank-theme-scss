<!-- NEXT/PREVIOUS POST -->
<?php $args = array(
    // 'screen_reader_text' => __('Posts Navigation'),
    'aria_label'         => __('Posts'),
    'class'              => 'posts-navigation',
    'prev_text' => ' %title ', // Can be <html>
    'next_text' => ' %title ' // Can be <html>
);
the_post_navigation($args);
?>
<!-- NEXT/PREVIOUS POST -->