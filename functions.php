<?php

/**
 * BlankSCSS functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage BlankSCSS
 * @since BlankSCSS 1.0
 */

add_action('after_setup_theme', 'blankscss_setup');
function blankscss_setup()
{
    load_theme_textdomain('blankscss', get_template_directory() . '/languages');
    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
    add_theme_support('title-tag');

    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
    add_theme_support('post-thumbnails');

    add_image_size('twentyseventeen-featured-image', 2000, 1200, true);

    add_image_size('twentyseventeen-thumbnail-avatar', 100, 100, true);



    add_theme_support('responsive-embeds');
    add_theme_support('automatic-feed-links');
    add_theme_support('appearance-tools');
    add_theme_support('custom-header');

    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
    add_theme_support('html5', array('search-form', 'navigation-widgets'));
    add_theme_support(
        'html5',
        array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
            'navigation-widgets',
        )
    );

    // Set the default content width.
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1920;
    }

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(
        array(
            'main-menu' => esc_html__('Main Menu', 'blankscss'),
            'social' => __('Social Links Menu', 'blankscss')
        )
    );
}

// Define and register starter content to showcase the theme on new sites.
$starter_content = array(
    // 'widgets'     => array(
    //     // Place three core-defined widgets in the sidebar area.
    //     'sidebar-1' => array(
    //         'text_business_info',
    //         'search',
    //         'text_about',
    //     ),

    //     // Add the core-defined business info widget to the footer 1 area.
    //     'sidebar-2' => array(
    //         'text_business_info',
    //     ),

    //     // Put two core-defined widgets in the footer 2 area.
    //     'sidebar-3' => array(
    //         'text_about',
    //         'search',
    //     ),
    // ),

    // Specify the core-defined pages to create and add custom thumbnails to some of them.
    // 'posts'       => array(
    //     'home',
    //     'about'            => array(
    //         'thumbnail' => '{{image-sandwich}}',
    //     ),
    //     'contact'          => array(
    //         'thumbnail' => '{{image-espresso}}',
    //     ),
    //     'blog'             => array(
    //         'thumbnail' => '{{image-coffee}}',
    //     ),
    //     'homepage-section' => array(
    //         'thumbnail' => '{{image-espresso}}',
    //     ),
    // ),

    // Create the custom image attachments used as post thumbnails for pages.
    // 'attachments' => array(
    //     'image-espresso' => array(
    //         'post_title' => _x('Espresso', 'Theme starter content', 'twentyseventeen'),
    //         'file'       => 'assets/images/espresso.jpg', // URL relative to the template directory.
    //     ),
    //     'image-sandwich' => array(
    //         'post_title' => _x('Sandwich', 'Theme starter content', 'twentyseventeen'),
    //         'file'       => 'assets/images/sandwich.jpg',
    //     ),
    //     'image-coffee'   => array(
    //         'post_title' => _x('Coffee', 'Theme starter content', 'twentyseventeen'),
    //         'file'       => 'assets/images/coffee.jpg',
    //     ),
    // ),

    // Default to a static front page and assign the front and posts pages.
    // 'options'     => array(
    //     'show_on_front'  => 'page',
    //     'page_on_front'  => '{{home}}',
    //     'page_for_posts' => '{{blog}}',
    // ),

    // Set the front page section theme mods to the IDs of the core-registered pages.
    // 'theme_mods'  => array(
    //     'panel_1' => '{{homepage-section}}',
    //     'panel_2' => '{{about}}',
    //     'panel_3' => '{{blog}}',
    //     'panel_4' => '{{contact}}',
    // ),

    // Set up nav menus for each of the two areas registered in the theme.
    'nav_menus'   => array(
        // Assign a menu to the "top" location.
        // 'top'    => array(
        //     'name'  => __('Top Menu', 'twentyseventeen'),
        //     'items' => array(
        //         'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
        //         'page_about',
        //         'page_blog',
        //         'page_contact',
        //     ),
        // ),

        // Assign a menu to the "social" location.
        'social' => array(
            'name'  => __('Social Links Menu', 'twentyseventeen'),
            'items' => array(
                'link_yelp',
                'link_facebook',
                'link_twitter',
                'link_instagram',
                'link_email',
            ),
        ),
    ),
);

/**
 * Filters BlankSCSS array of starter content.
 *
 * @since BlankSCSS 1.1
 *
 * @param array $starter_content Array of starter content.
 */
$starter_content = apply_filters('blankscss_starter_content', $starter_content);

add_theme_support('starter-content', $starter_content);

// ADD CSS AN JS
add_action('wp_enqueue_scripts', 'blankscss_enqueue');
function blankscss_enqueue()
{
    // CSS
    wp_enqueue_style('blankscss-style', get_stylesheet_uri());
    wp_enqueue_style('custom', get_template_directory_uri() . '/customstyles/custom.css', array(), 1, 'all');
    wp_enqueue_style('another_custom', get_template_directory_uri() . '/customstyles/another_custom.css', array(), 1, 'all');
    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('another_custom', get_template_directory_uri() . '/js/another_custom.js', array(), 1, 1, 1);
}

// DISABLE POSTS IN ADMIN
// function remove_posts_menu()
// {
//     remove_menu_page('edit.php');
// }
// add_action('admin_menu', 'remove_posts_menu')

// CUSTOM HEADER
function blankscss_custom_header_setup()
{
    $args = array(
        // 'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support('custom-header', $args);
}
add_action('after_setup_theme', 'blankscss_custom_header_setup');

// ADD TO FOOTER
add_action('wp_footer', 'blankscss_footer');
function blankscss_footer()
{
    echo '<p>Footer content</p>';
}

// TITLE TAG SEPARATOR
add_filter('document_title_separator', 'blankscss_document_title_separator');
function blankscss_document_title_separator($sep)
{
    $sep = esc_html('|');
    return $sep;
}

// ADD TITLE FIELD TO PAGES
add_filter('the_title', 'blankscss_title');
function blankscss_title($title)
{
    if ($title == '') {
        return esc_html('...');
    } else {
        return wp_kses_post($title);
    }
}

// ?
function blankscss_schema_type()
{
    $schema = 'https://schema.org/';
    if (is_single()) {
        $type = "Article";
    } elseif (is_author()) {
        $type = 'ProfilePage';
    } elseif (is_search()) {
        $type = 'SearchResultsPage';
    } else {
        $type = 'WebPage';
    }
    echo 'itemscope itemtype="' . esc_url($schema) . esc_attr($type) . '"';
}

// ADD ATTRIBUTES TO MENU ITEMS
add_filter('nav_menu_link_attributes', 'blankscss_schema_url', 10);
function blankscss_schema_url($atts)
{
    $atts['itemprop'] = 'url';
    return $atts;
}
if (!function_exists('blankscss_wp_body_open')) {
    function blankscss_wp_body_open()
    {
        do_action('wp_body_open');
    }
}

// ADD A SKIP TO CONTENT LINK ABOVE THE BODY TAG
add_action('wp_body_open', 'blankscss_skip_link', 5);
function blankscss_skip_link()
{
    echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__('Skip to the content', 'blankscss') . '</a>';
}

// CHANGE THE EXCERPT TEXT
function blankscss_excerpt_more($more)
{
    return '[.....]';
}
add_filter('excerpt_more', 'blankscss_excerpt_more');

////////////////////////
////////////////////////
////////////////////////
// COMPLEATELY DISABLE IMAGE SIZE THREASHOLD
// add_filter('big_image_size_threshold', '__return_false');
// COMPLEATELY DISABLE IMAGE SIZE THREASHOLD

// INCREASE THE IMAGE SIZE THRESHHOLD TO 4000PX
function mynamespace_big_image_size_threshold($threshold)
{
    return 100; // new threshold
}
add_filter('big_image_size_threshold', 'mynamespace_big_image_size_threshold', 999, 1);
// INCREASE THE IMAGE SIZE THRESHHOLD TO 4000PX
////////////////////////
////////////////////////
////////////////////////

// ?
add_filter('intermediate_image_sizes_advanced', 'blankscss_image_insert_override');
function blankscss_image_insert_override($sizes)
{
    unset($sizes['medium_large']);
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    return $sizes;
}

// ?
add_action('widgets_init', 'blankscss_widgets_init');
function blankscss_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar Widget Area', 'blankscss'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

// ? SECURITY
add_action('wp_head', 'blankscss_pingback_header');
function blankscss_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
}

// ?
add_action('comment_form_before', 'blankscss_enqueue_comment_reply_script');
function blankscss_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

// ?
function blankscss_custom_pings($comment)
{
?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url(comment_author_link()); ?></li>
<?php
}

// ?
add_filter('get_comments_number', 'blankscss_comment_count', 0);
function blankscss_comment_count($count)
{
    if (!is_admin()) {
        global $id;
        $get_comments = get_comments('status=approve&post_id=' . $id);
        $comments_by_type = separate_comments($get_comments);
        return count($comments_by_type['comment']);
        // return count($comments_by_type['comment'] = $get_comments);
    } else {
        return $count;
    }
}
?>