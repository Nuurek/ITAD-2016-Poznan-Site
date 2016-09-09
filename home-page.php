<?php

/* Template Name: Home Page */

get_header();

?>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <?php

    /* Navigation */
    get_section('navigation');

	/* Intro Header */
    get_section('intro-header');

    /* News Section */
    get_section('news');

    /* Agenda Section */
    get_section('agenda');

    /* Partners Section */
    get_section('partners');

    /* Localization Section */
    get_section('localization');

    /* Contact Section */
    get_section('contact');

    get_footer();

    ?>
