<?php
// get_sidebar();
?>
<footer id="app-footer" role="contentinfo">
    <div class="container">
        FOOTER
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