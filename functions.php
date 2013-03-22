<?php 

function wpbootstrap_scripts_with_jquery() {
	// Register the script like this for a theme:
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
	wp_register_script( 'leaflet', get_template_directory_uri() . '/bootstrap/js/leaflet.js' );
	wp_register_script( 'stamen', 'http://maps.stamen.com/js/tile.stamen.js?v1.2.1' );
	wp_register_script( 'lodum', get_template_directory_uri() . '/bootstrap/js/lodum.js', array( 'jquery' )  );
	
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'leaflet' );
	wp_enqueue_script( 'stamen' );
	wp_enqueue_script( 'lodum' );
	
}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

// functions to highlight the search term on the search results page (search.php)

function search_title_highlight() {
    $title = get_the_title();
    $keys = implode('|', explode(' ', get_search_query()));
    $title = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $title);

    echo $title;
}

function search_content_highlight() {
    $content = get_the_content();
    $keys = implode('|', explode(' ', get_search_query()));
    $content = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $content);

    echo '<p>' . $content . '</p>';
}

?>