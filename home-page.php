<?php

/* Template Name: Home Page */

get_header();

?>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <?php get_section('navigation') ?>

	<!-- Intro Header -->
    <?php get_section('intro-header'); ?>

    <!-- News Section -->
    <?php get_section('news'); ?>

    <!-- Agenda Section -->
    <?php get_section('agenda'); ?>

    <!-- Partners Section -->
    <?php get_section('partners'); ?>

    <!-- Localization Section -->
    <?php get_section('localization'); ?>

    <!-- Contact Section -->
    <?php get_section('contact'); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/scripts/site.js"></script>

</body>

</html>
