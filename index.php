<!--THIS FILE DISPLAYS THE POSTS -->
<?php require('template-parts/header.php'); ?>

<main id="posts-index">
    <div class="container">
        <section>
            <div class="page-heading">
                <h2 class="post-title" itemprop="name">
                    Posts
                </h2>
                <p>All posts</p>
            </div>
            <!-- LOOP THROUGH POSTS <ARTICLE> -->
            <?php if (have_posts()) : while (have_posts()) : the_post();
                    get_template_part('entry');
                    comments_template();
                endwhile;
            endif;

            get_template_part('nav', 'below');
            ?>
            <!-- LOOP THROUGH POSTS </ARTICLE> -->
        </section>
    </div>


</main>

<!-- FOOTER -->
<?php require('template-parts/footer.php'); ?>