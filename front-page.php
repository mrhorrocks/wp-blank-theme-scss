<?php get_header(); ?>
<main>
    <div class="container">
        <section id="front-page">
            <!-- FEARURED IMAGE -->
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('itemprop' => 'image'));
            } ?>
            <!-- FEARURED IMAGE -->
            <?php the_content(); ?>
        </section>
    </div>
</main>
<?php get_footer(); ?>