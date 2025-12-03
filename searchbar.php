add_shortcode('search_bar', 'custom_sliding_search_bar', 12);
function custom_sliding_search_bar() {
    ?>   
     <div class="sliding-search-bar">
    <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
        <!-- Search Button -->
        <button type="button" id="search-toggle" class="toggle-search-button" aria-expanded="false">
            <span class="screen-reader-text">Open Search</span>
<svg height="20" viewBox="0 0 1792 1792" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg>
        </button>

        <!-- Search Field -->
        <input type="search" class="search-field hidden" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search-submit">
            Go
            <span class="screen-reader-text">Search</span>
        </button>
    </form>
</div>
    <?php
}

// Enqueue JavaScript
add_action('wp_enqueue_scripts', 'custom_search_toggle_script');
function custom_search_toggle_script() {
    wp_enqueue_script('custom-search-toggle', get_stylesheet_directory_uri() . '/js/custom-search-toggle.js', array('jquery'), '1.0', true);
}
