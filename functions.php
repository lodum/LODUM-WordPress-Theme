<?php 

function wpbootstrap_scripts_with_jquery() {
	// Register the script like this for a theme:
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
	wp_register_script( 'leaflet', get_template_directory_uri() . '/bootstrap/js/leaflet.js' );
	wp_register_script( 'stamen', 'http://maps.stamen.com/js/tile.stamen.js?v1.2.1' );
	
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'leaflet' );
	wp_enqueue_script( 'stamen' );
}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

?>