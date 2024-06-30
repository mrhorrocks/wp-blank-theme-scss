<!-- THIS FILE DISPLAYS BOTH EXCERPTS AND FULL POSTS -->

<article id="post-<?php the_ID(); ?>" <?php post_class('default'); ?>>
    <!-- <article id="post-<?php the_ID(); ?>" class="post-article"> -->

    <?php if (is_singular()) {
        echo '<h2 class="post-article--title" itemprop="headline">';
    } else {
        echo '<h2 class="post-article--title">';
    } ?>

    <!-- TITLE -->
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
        <?php the_title(); ?>
    </a>
    <!-- TITLE -->

    <?php if (is_singular()) {
        echo '</h2>';
    } else {
        echo '</h2>';
    } ?>

    <!-- EDIT POST -->
    <?php
    // edit_post_link();
    ?>
    <!-- EDIT POST -->

    <?php if (!is_search()) {
        get_template_part('entry', 'meta');
    } ?>

    <?php get_template_part('entry', (is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content')); ?>

    <?php if (is_singular()) {
        get_template_part('entry-footer');
    } ?>
</article>