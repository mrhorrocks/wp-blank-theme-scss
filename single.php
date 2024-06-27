<?php
require('template-parts/header.php');
?>
<div class="container">
    <h1>SINGLE.php</h1>
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
<?php
require('template-parts/footer.php');
?>