<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankscss_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>
    <div class="container">
        <header id="app-header">
            <div class="grid cols-2">

                <div id="logo" class="col-span-2 sm:col-span-1">
                    <!-- LOGO -->
                    <?php if (get_header_image()) : ?>
                        <h1>
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                            </a>
                        </h1>
                    <?php endif; ?>
                    <!-- LOGO -->

                    <div class="hamburger">
                        <button>
                            <?php include 'hamburger_icon.php'; ?>
                        </button>
                    </div>
                </div>

                <nav class="col-span-2 sm:col-span-1">
                    <div class="nav-menu-links">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'container' => 'ul',
                                'menu_class' => 'top-nav-menu'
                            )
                        );
                        ?>
                    </div>
                </nav>
            </div>

            <!-- APP DESCRIPTION -->
            <?php if (get_bloginfo('description')  !== '') { ?>
                <div id="app-description">
                    <?php bloginfo('description'); ?>
                </div>
            <?php } ?>
            <!-- APP DESCRIPTION -->

            <!-- SEARCH -->
            <div id="search">
                <?php get_search_form(); ?>
            </div>
            <!-- SEARCH -->

        </header>
    </div>