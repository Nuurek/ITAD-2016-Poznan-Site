<?php

show_admin_bar(false);

function itad_scripts() {
	// Load our main stylesheet.
}
add_action( 'wp_enqueue_scripts', 'itad_scripts' );

require get_template_directory() . '/inc/customizer.php';
?>
