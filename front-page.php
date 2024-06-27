<?php
$hero_text = get_field('hero_text');
$sub_text = get_field('sub_text');
$link_text = get_field('link_text');
$link_url = get_field('link_url');
?>
<?php
require('template-parts/header.php');
?>
<main id="front-page">

    <?php if (has_post_thumbnail()) : ?>
        <!-- FEATURED IMAGE -->
        <div class="featured-image" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
            <!-- IMAGE SHOWS AS BACKGROUND HERE -->

            <?php if ($hero_text) : ?>
                <h2>
                    <?php the_field('hero_text'); ?>
                </h2>
            <?php endif; ?>

            <?php if ($sub_text) : ?>
                <h3>
                    <?php the_field('sub_text'); ?>
                </h3>
            <?php endif; ?>

            <?php if ($link_text) : ?>
                <a href="<?php the_field('link_url'); ?>">
                    <?php the_field('link_text'); ?>
                </a>
            <?php endif; ?>
        </div>

    <?php else : ?>
        <div class="featured-image" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
            <!-- NO FEARURED IMAGE -->
            <div class="">ACF</div>
        </div>
    <?php endif; ?>


    <div class="container">
        <section>
            <?php the_content(); ?>
        </section>
    </div>
</main>
<?php
require('template-parts/footer.php');
?>