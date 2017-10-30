<form action="/" method="get" id="mm-search-form">
    <label for="search" class="screen-reader-text">Search in <?php echo home_url( '/' ); ?></label>
    <input type="text" name="s" id="search" class="mm-search-input" value="<?php the_search_query(); ?>" />
    <?php /* <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" /> */ ?>
    <i class="fa fa-search" aria-hidden="true"></i>
</form>
