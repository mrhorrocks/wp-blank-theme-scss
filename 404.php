<!-- 404 ERROR PAGE -->
<?php require('template-parts/header.php'); ?>

<main id="search-index">
    <div class="container">
        <section>
            <div class="page-heading">
                <h2 class="post-title" itemprop="name">
                    404
                </h2>

            </div>
            <article id="post-0" class="post not-found">
                <h2 class="post-article--title" itemprop="name">
                    <?php esc_html_e('Not Found', 'blankslate'); ?>
                </h2>

                <div class="entry-content" itemprop="mainContentOfPage">
                    <p>
                        <?php esc_html_e('Nothing found for the requested page. Try a search instead?', 'blankslate'); ?>
                    </p>
                    <?php get_search_form(); ?>
                </div>
            </article>
        </section>
    </div>
</main>

<!-- FOOTER -->
<?php require('template-parts/footer.php'); ?>