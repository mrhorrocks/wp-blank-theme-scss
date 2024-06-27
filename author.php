<?php
require('template-parts/header.php');
?>
<!-- SHOW AURTOR DETAILS -->
<div class="container">
    <h1>AUTHOR.php</h1>
    <header class="header">
        <?php the_post(); ?>
        <h1 class="entry-title author" itemprop="name">
            <?php the_author_link(); ?>
        </h1>

        <div class="archive-meta" itemprop="description">
            <?php if ('' != get_the_author_meta('user_description')) {
                echo esc_html(get_the_author_meta('user_description'));
            } ?>
        </div>
        <?php rewind_posts(); ?>
    </header>

    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('entry'); ?>
    <?php endwhile; ?>

    <?php get_template_part('nav', 'below'); ?>
</div>
<!-- SHOW AURTOR DETAILS -->
<?php
require('template-parts/footer.php');
?>