<?php get_header(); ?>
<div class="container">
    <main id="page-content" class="grid cols-5">
        <section id="page-content" class="col-span-3">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <!-- PAGE TITLE -->
                        <h2 class="page-title">
                            <?php the_title(); ?>
                        </h2>
                        <!-- PAGE TITLE -->
                        <!-- EDIT PAGE -->
                        <?php
                        // edit_post_link();
                        ?>
                        <!-- EDIT PAGE -->
                        <div class="entry-content">
                            <!-- FEARURED IMAGE -->
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('full', array('itemprop' => 'image'));
                            } ?>
                            <!-- FEARURED IMAGE -->
                            <!-- TEXT CONTENT -->
                            <?php the_content(); ?>
                            <!--  -->
                            <?php
                            // the_excerpt(); 
                            ?>
                            <!-- TEXT CONTENT -->
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
        <section id="side-bar" class="col-span-2">
            <?php
            get_sidebar();
            ?>
        </section>
    </main>
</div>
<?php get_footer(); ?>