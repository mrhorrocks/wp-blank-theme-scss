<?php
// get_sidebar();
?>
<footer id="footer" role="contentinfo">
    <div class="container">
        <div id="copyright">
            &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
        </div>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'social',
                'container' => 'ul',
                'menu_class' => 'social-menu'
            )
        );
        ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>