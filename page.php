<!-- HEADER -->
<?php require('template-parts/header.php'); ?>

<main id="page">
    <div class="container">
        <div id="page-content" class="grid cols-5">
            <section id="page-content" class="col-span-3">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <!-- CUSTOM HEADER -->
                            <?php if (get_header_image()) : ?>
                                <h1>
                                    <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                                </h1>
                            <?php endif; ?>
                            <!-- CUSTOM HEADER -->

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
                                <!-- TEXT CONTENT -->

                                <div class="entry-links">
                                    <?php wp_link_pages(); ?>
                                </div>
                            </div>
                        </article>

                        <?php if (comments_open() && !post_password_required()) {
                            comments_template('', true);
                            echo "this";
                        } ?>
                <?php endwhile;
                endif; ?>
            </section>

            <!-- SIDEBAR -->
            <section id="side-bar" class="col-span-2">
                <?php get_sidebar(); ?>
            </section>
            <!-- SIDEBAR -->
        </div>
    </div>
</main>
<!-- FOOTER -->
<?php require('template-parts/footer.php'); ?>