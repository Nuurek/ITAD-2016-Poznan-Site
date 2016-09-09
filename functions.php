<?php

show_admin_bar(false);

function itad_scripts() {
    /*
    $site_js_uri = get_stylesheet_directory_uri() . '/scripts/site.js';
    wp_enqueue_script('site-js', $site_js_uri);
    */
}
add_action( 'wp_enqueue_scripts', 'itad_scripts' );

function get_section($section_name) {
    get_template_part('sections/' . $section_name . '-section');
}
