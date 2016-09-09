<?php

show_admin_bar(false);

function itad_scripts() {
	// Load our main stylesheet.
}
add_action( 'wp_enqueue_scripts', 'itad_scripts' );

require get_template_directory() . '/inc/customizer.php';

function get_section($section_name) {
    get_template_part('sections/' . $section_name . '-section');
}
