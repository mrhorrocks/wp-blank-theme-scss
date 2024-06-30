<?php
$hero_text = get_field('hero_text');
$sub_text = get_field('sub_text');
$link_text = get_field('link_text');
$link_url = get_field('link_url');
?>
<!-- HEADER -->
<?php require('template-parts/header.php'); ?>

<!-- FEATURED IMAGE -->
<?php if (has_post_thumbnail()) : ?>
    <div class="featured-image" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
        <!-- FEATURED IMAGE SHOWS AS BACKGROUND HERE -->

        <!-- ACF FIELDS -->
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
        <!-- ACF FIELDS -->

    </div>
<?php else : ?>
    <div class="featured-image" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
        <!-- NO FEATURED IMAGE -->
        <div class="">ACF</div>
    </div>
<?php endif; ?>
<!-- FEATURED IMAGE -->

<main id="front-page">
    <div class="container">
        <section>
            <?php the_content(); ?>
        </section>
    </div>
</main>

<!-- FOOTER -->
<?php require('template-parts/footer.php'); ?>