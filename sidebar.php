<h3>SIDEBAR.PHP</h3>
<?php if (is_active_sidebar('sidebar-1')) : ?>
    <div class="side-bar">
        <aside role="complementary">
            <ul>
                <?php dynamic_sidebar('sidebar-1'); ?>
            </ul>
        </aside>
    </div>
<?php endif; ?>

<?php if (is_active_sidebar('sidebar-2')) : ?>
    <div class="side-bar">
        <aside role="complementary">
            <ul>
                <?php dynamic_sidebar('sidebar-2'); ?>
            </ul>
        </aside>
    </div>
<?php endif; ?>