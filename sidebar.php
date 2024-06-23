<?php if (is_active_sidebar('primary-widget-area')) : ?>

    <div class="side-bar">
        <h1>SIDEBAR.PHP</h1>
        <aside role="complementary">
            <div>
                <ul>
                    <?php dynamic_sidebar('primary-widget-area'); ?>
                </ul>
            </div>
        </aside>
    </div>

<?php endif; ?>