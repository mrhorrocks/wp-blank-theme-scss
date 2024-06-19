<?php get_header(); ?>
<main>
    <div class="container">
        <h1>PAGE.PHP</h1>
        <section>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <!-- PAGE TITLE -->
                        <?php the_title(); ?>
                        <!-- PAGE TITLE -->
                        <!-- EDIT PAGE -->
                        <?php
                        // edit_post_link();
                        ?>
                        <!-- EDIT PAGE -->
                        <div class="entry-content" itemprop="mainContentOfPage">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('full', array('itemprop' => 'image'));
                            } ?>
                            <!-- SHOW CONTENT -->
                            <?php the_content(); ?>
                            <!-- SHOW CONTENT -->
                            <div class="entry-links">
                                <?php wp_link_pages(); ?>
                            </div>
                        </div>
                    </article>
                    <?php if (comments_open() && !post_password_required()) {
                        comments_template('', true);
                    } ?>
            <?php endwhile;
            endif; ?>
        </section>
        <?php
        // get_sidebar(); 
        ?>
    </div>
</main>
<?php get_footer(); ?>