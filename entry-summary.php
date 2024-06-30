<!-- THIS FILE DISPLAYS A SUMMARY ON THE /POSTS INDEX PAGE-->
<!-- <h1>ENTRY-SUMMARY.php</h1> -->
<div class="post-article--summary">
    <?php if ((has_post_thumbnail()) && (!is_search())) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    <?php endif; ?>

    <div itemprop="description">
        <?php the_excerpt(); ?>
    </div>

    <?php if (is_search()) { ?>
        <div class="entry-links">
            <?php wp_link_pages(); ?>
        </div>
    <?php } ?>

</div>