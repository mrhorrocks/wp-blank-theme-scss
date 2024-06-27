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
    <header id="app-header">
        <div class="container">
            <div class="grid cols-2">

                <div id="logo" class="col-span-2 sm:col-span-1">
                    <!-- LOGO -->
                    <?php
                    if (function_exists('the_custom_logo') && has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/images/wp-logo-placeholder.png" alt="Default Logo">';
                    }
                    ?>
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
            <!-- <div id="search" class="col-span-2 sm:col-span-1"> -->
            <?php
            // get_search_form();
            ?>
            <!-- </div> -->
            <!-- SEARCH -->

        </div>
    </header>