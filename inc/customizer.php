<?php

function add_section_text_control($wp_customize, $id) {
    $settingsId = $id . '_text';
    $visibleName = ucfirst($id . ' text');

    $wp_customize->add_setting( $settingsId, array(
        'default'     => '',
        'transport'   => 'postMessage',
    ) );

    $wp_customize->add_control( $settingsId, array(
      'label' => __( $visibleName ),
      'type' => 'textarea',
      'section' => 'sections',
    ) );
}

function itad_customize_register($wp_customize) {
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

    $wp_customize->add_section( 'sections' , array(
        'title'      => __( 'Sections text', 'mytheme' ),
        'priority'   => 10,
    ) );

    $sections = ['news', 'talks', 'sponsors', 'location', 'contact'];
    foreach ($sections as $section) {
        add_section_text_control($wp_customize, $section);
    }
}
add_action('customize_register', 'itad_customize_register');

function itad_customize_css()
{
}
add_action( 'wp_head', 'itad_customize_css');


function customizer_live_preview()
{
    error_log('customizer_live_preview');
	wp_enqueue_script(
		  'itad-customizer',			//Give the script an ID
		  get_template_directory_uri().'/js/customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',						//Define a version (optional)
		  false						//Put script in footer?
	);
}
add_action( 'customize_preview_init', 'customizer_live_preview' );


?>
