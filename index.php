<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <?php wp_head(); ?>
</head>
<body>
    <?php
        $sections = ['news', 'talks', 'sponsors', 'location', 'contact'];
    ?>
    <div class="sticky-menu">
        <ul>
            <?php
                foreach ($sections as $section) {
                    $html = '';
                    $html .= '<li><a href="#';
                    $html .= $section;
                    $html .= '">';
                    $html .= ucfirst($section);
                    $html .= '</a></li>';
                    echo $html;
                }
            ?>
        </ul>
    </div>
    <?php
        foreach ($sections as $section) {
            $html = '';
            $html .= '<section id="';
            $html .= $section;
            $html .= '"><h1>';
            $html .= ucfirst($section);
            $html .= '</h1><h2>';
            $html .= get_theme_mod($section . '_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
            $html .= '</h2></section>';
            echo $html;
        }
    ?>
    
<?php
get_footer();
?>
