<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankscss_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<!-- <body <?php body_class(); ?>> -->

<body>
    <?php
    // wp_body_open(); 
    ?>
    <div class="container">
        <header id="app-header">

            <div class="grid cols-2">
                <div class="col-span-1">
                    <!-- LOGO -->
                    <div id="logo">
                        <?php if (get_header_image()) : ?>
                            <h1>
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                    <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                                </a>
                            </h1>
                        <?php endif; ?>
                    </div>
                    <!-- LOGO -->
                </div>
                <div class="col-span-1">
                    <!-- MAIN NAV -->
                    <nav id="menu" role="navigation">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'container' => 'ul',
                                'menu_class' => 'top_menu_class'
                            )
                        );
                        ?>
                    </nav>
                    <!-- MAIN NAV -->
                </div>
            </div>

            <!-- APP DESCRIPTION -->
            <div id="app-description">
                <?php bloginfo('description'); ?>
            </div>
            <!-- APP DESCRIPTION -->

            <!-- SEARCH -->
            <div id="search">
                <?php get_search_form(); ?>
            </div>
            <!-- SEARCH -->
    </div>


    </header>
    </div>