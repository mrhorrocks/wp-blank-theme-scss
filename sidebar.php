<?php if (is_active_sidebar('primary-widget-area')) : ?>
    <div class="container">
        <h1>SIDEBAR.PHP</h1>
        <aside id="sidebar" role="complementary">
            <div>
                <ul>
                    <?php dynamic_sidebar('primary-widget-area'); ?>
                </ul>
            </div>
        </aside>
    </div>
<?php endif; ?>