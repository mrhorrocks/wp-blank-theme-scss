<?php
add_action('after_setup_theme', 'blankscss_setup');
function blankscss_setup()
{
    load_theme_textdomain('blankscss', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'navigation-widgets'));
    add_theme_support('appearance-tools');
    add_theme_support('woocommerce');
    add_theme_support('custom-header');
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1920;
    }
    register_nav_menus(array('main-menu' => esc_html__('Main Menu', 'blankscss')));
}
add_action('admin_notices', 'blankscss_notice');
function blankscss_notice()
{
    $user_id = get_current_user_id();
    $admin_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $param = (count($_GET)) ? '&' : '?';
    if (!get_user_meta($user_id, 'blankscss_notice_dismissed_11') && current_user_can('manage_options'))
        echo '<div class="notice notice-info"><p><a href="' . esc_url($admin_url), esc_html($param) . 'dismiss" class="alignright" style="text-decoration:none"><big>' . esc_html__('Ⓧ', 'blankscss') . '</big></a>' . wp_kses_post(__('<big><strong>🏆 Thank you for using blankscss!</strong></big>', 'blankscss')) . '<p>' . esc_html__('Powering over 10k websites! Buy me a sandwich! 🥪', 'blankscss') . '</p><a href="https://github.com/bhadaway/blankscss/issues/57" class="button-primary" target="_blank"><strong>' . esc_html__('How do you use blankscss?', 'blankscss') . '</strong></a> <a href="https://opencollective.com/blankscss" class="button-primary" style="background-color:green;border-color:green" target="_blank"><strong>' . esc_html__('Donate', 'blankscss') . '</strong></a> <a href="https://wordpress.org/support/theme/blankscss/reviews/#new-post" class="button-primary" style="background-color:purple;border-color:purple" target="_blank"><strong>' . esc_html__('Review', 'blankscss') . '</strong></a> <a href="https://github.com/bhadaway/blankscss/issues" class="button-primary" style="background-color:orange;border-color:orange" target="_blank"><strong>' . esc_html__('Support', 'blankscss') . '</strong></a></p></div>';
}
add_action('admin_init', 'blankscss_notice_dismissed');
function blankscss_notice_dismissed()
{
    $user_id = get_current_user_id();
    if (isset($_GET['dismiss']))
        add_user_meta($user_id, 'blankscss_notice_dismissed_11', 'true', true);
}
add_action('wp_enqueue_scripts', 'blankscss_enqueue');
function blankscss_enqueue()
{
    wp_enqueue_style('blankscss-style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
}
add_action('wp_footer', 'blankscss_footer');
function blankscss_footer()
{
?>

    <?php
    function blankscss_custom_header_setup()
    {
        $args = array(
            'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
            'default-text-color' => '000',
            'width'              => 1000,
            'height'             => 250,
            'flex-width'         => true,
            'flex-height'        => true,
        );
        add_theme_support('custom-header', $args);
    }
    add_action('after_setup_theme', 'blankscss_custom_header_setup');
    ?>

<?php
}
add_filter('document_title_separator', 'blankscss_document_title_separator');
function blankscss_document_title_separator($sep)
{
    $sep = esc_html('|');
    return $sep;
}
add_filter('the_title', 'blankscss_title');
function blankscss_title($title)
{
    if ($title == '') {
        return esc_html('...');
    } else {
        return wp_kses_post($title);
    }
}
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
add_action('wp_body_open', 'blankscss_skip_link', 5);
function blankscss_skip_link()
{
    echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__('Skip to the content', 'blankscss') . '</a>';
}
add_filter('the_content_more_link', 'blankscss_read_more_link');
function blankscss_read_more_link()
{
    if (!is_admin()) {
        return ' <a href="' . esc_url(get_permalink()) . '" class="more-link">' . sprintf(__('...%s', 'blankscss'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
    }
}
add_filter('excerpt_more', 'blankscss_excerpt_read_more_link');
function blankscss_excerpt_read_more_link($more)
{
    if (!is_admin()) {
        global $post;
        return ' <a href="' . esc_url(get_permalink($post->ID)) . '" class="more-link">' . sprintf(__('...%s', 'blankscss'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
    }
}
add_filter('big_image_size_threshold', '__return_false');
add_filter('intermediate_image_sizes_advanced', 'blankscss_image_insert_override');
function blankscss_image_insert_override($sizes)
{
    unset($sizes['medium_large']);
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    return $sizes;
}
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
add_action('wp_head', 'blankscss_pingback_header');
function blankscss_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('comment_form_before', 'blankscss_enqueue_comment_reply_script');
function blankscss_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
function blankscss_custom_pings($comment)
{
?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url(comment_author_link()); ?></li>
<?php
}
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

// LOAD CSS HERE
function load_stylesheets()
{
    // custom.css
    wp_register_style('custom', get_template_directory_uri() . '/customstyles/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');

    // another_custom.css
    wp_register_style('another_custom', get_template_directory_uri() . '/customstyles/another_custom.css', array(), 1, 'all');
    wp_enqueue_style('another_custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// LOAD SCRIPTS HERE
function addjs()
{
    // custom.js
    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');

    // another_custom_js
    wp_register_script('another_custom', get_template_directory_uri() . '/js/another_custom.js', array(), 1, 1, 1);
    wp_enqueue_script('another_custom');
}
add_action('wp_enqueue_scripts', 'addjs');
