<!--THIS FILE DISPLAYS A SINGLE POST-->
<!-- HEADER -->
<?php require('template-parts/header.php'); ?>
<main id="posts-index">
    <div class="container">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php get_template_part('entry'); ?>

                <?php if (comments_open() && !post_password_required()) {
                    comments_template('', true);
                } ?>
        <?php endwhile;
        endif; ?>

        <footer class="footer">
            <?php get_template_part('nav', 'below-single'); ?>
        </footer>
    </div>
</main>

<!-- FOOTER -->
<?php require('template-parts/footer.php'); ?>