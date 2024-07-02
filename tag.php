<!-- THIS FILE DISPLAYS EXCERPTS ON THE TAG INDEX PAGE-->
<?php require('template-parts/header.php'); ?>

<main id="category-index">

    <div class="container">
        <section>
            <div class="page-heading">
                <h2 class="post-title" itemprop="name">
                    <?php single_term_title(); ?>
                </h2>

                <?php if ('' != get_the_archive_description()) {
                    // 
                    echo get_the_archive_description();
                    // 
                } ?>
            </div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <!-- <ARTICLE> -->
                    <?php get_template_part('entry'); ?>
                    <!-- <ARTICLE> -->
            <?php endwhile;
            endif;
            get_template_part('nav', 'below');
            ?>

        </section>
    </div>
</main>

<!-- FOOTER -->
<?php require('template-parts/footer.php'); ?>