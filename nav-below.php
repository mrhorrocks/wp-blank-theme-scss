<!-- PAGINATION FOR THE CATEGORIES/404 PAGE -->
<?php $args = array(
    'prev_text' => 'Older', // Can be <html>
    'next_text' => 'Newer' // Can be <html>
);
the_posts_navigation($args);
?>
<!-- NEXT/PREVIOUS POST -->