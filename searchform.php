<form role="search" method="get" class="search-form" action="index.php">

    <label>
        <span class="screen-reader-text">Search for:</span>
        <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />
    </label>

    <button type="submit" class="search-submit" value="Search">
        <?php echo file_get_contents(get_stylesheet_directory_uri() . '/images/svg/search-icon.svg'); ?>
    </button>

</form>