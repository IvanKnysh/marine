<div class="search-form">
    <div class="border"></div>
    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
        <input type="hidden" value="post" name="post_type" />
        <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Search ..." />
        <input type="submit" id="searchsubmit" value="" />
    </form>
</div>