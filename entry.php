<div class="container">
    <h2>Entry.php</h2>
    <br>
    <main>
        <section>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if (is_singular()) {
                    echo '<h1 class="entry-title" itemprop="headline"> H1 ';
                } else {
                    echo '<h2 class="entry-title"> H2 ';
                } ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
                <?php if (is_singular()) {
                    echo '</h1>';
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
                <h2>entry end</h2>
            </article>
            <br />
            <br />
        </section>
    </main>
</div>