<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if (is_singular() && pings_open(get_queried_object())): ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.png">
    <!-- ============================================= -->

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
<!--    <link rel="stylesheet"-->
<!--          href="--><?php //echo get_template_directory_uri() ?><!--/assets/bootstrap-material-design-font/css/material.css">-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/et-line-font-plugin/style.css">
<!--    <link rel="stylesheet" href="--><?php //echo get_template_directory_uri() ?><!--/assets/tether/tether.min.css">-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/animate.css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/theme/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/mobirise-gallery/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri() ?>/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/owl-carousel/owl.theme.default.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/almendares.css">

</head>
<body <?php body_class() ?> >
<div id="preloader">
    <div class="bubblingG">
        <span id="bubblingG_1"></span>
        <span id="bubblingG_2"></span>
        <span id="bubblingG_3"></span>
    </div>
</div>
<section class="menu-6">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="<?php echo get_site_url() ?>" class="navbar-logo">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logoPA.png"
                                 alt="Producciones Almendares">
                        </a>
                        <a class="navbar-caption" href="<?php echo get_site_url() ?>"></a>
                    </div>

                </div>
                <div class="mbr-table-cell">
                    <button id="button-menu" class="navbar-toggler pull-xs-right hidden-md-up" type="button"
                            data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm',
                        'menu_id' => 'exCollapsingNavbar',
                        'walker' => new Walker_Nav_Primary()
                    ));
                    ?>
                    <button id="close-menu" hidden="" class="navbar-toggler navbar-close" type="button"
                            data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>
        </div>
    </nav>

</section>
