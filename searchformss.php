<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s">Search our website</label>
        <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
