<?php if (is_active_sidebar('sidebar-1')) : ?>
    <div class="side-bar">
        <aside role="complementary">
            <ul>
                <?php dynamic_sidebar('sidebar-1'); ?>
            </ul>
        </aside>
    <?php endif; ?>

    <?php if (is_active_sidebar('sidebar-2')) : ?>
        <aside role="complementary">
            <ul>
                <?php dynamic_sidebar('sidebar-2'); ?>
            </ul>
        </aside>
    </div>
<?php endif; ?>