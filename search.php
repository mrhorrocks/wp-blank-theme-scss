<!-- SEARCH RESULTS -->
<?php require('template-parts/header.php'); ?>

<main id="search-index">
    <div class="container">
        <section>
            <div class="page-heading">
                <?php if (have_posts()) : ?>

                    <h2 class="post-title" itemprop="name">
                        <?php printf(esc_html__('Search Results for: %s', 'blankscss'), get_search_query()); ?>
                    </h2>

                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('entry'); ?>
                    <?php endwhile; ?>

                <?php else : ?>

                    <h2 class="post-title" itemprop="name">
                        <?php esc_html_e('Nothing Found', 'blankscss'); ?>
                    </h2>

                    <p>
                        <?php esc_html_e('Sorry, nothing matched your search. Please try again.'); ?>
                    </p>

                <?php endif; ?>
            </div>

            <?php get_template_part('nav', 'below'); ?>
            <?php get_search_form(); ?>

        </section>
    </div>
</main>

<!-- FOOTER -->
<?php require('template-parts/footer.php'); ?>