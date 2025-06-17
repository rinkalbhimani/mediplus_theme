<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title><?php bloginfo('name'); ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/magnific-popup.css">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">

</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Get Pro Button -->
    <ul class="pro-features">
        <?php
        if (have_rows('header')):
            while (have_rows('header')):
                the_row();
                if (get_row_layout() == 'pro-features'):
                    $pro_link = get_sub_field('get_pro_link');
                    $big_title = get_sub_field('big_title');
                    $title = get_sub_field('title');
                    $btn_first = get_sub_field('btn_first');
                    $btn_second = get_sub_field('btn_second');
                    ?>
                    <a class="get-pro" href="#"><?php echo $pro_link; ?></a>
                    <li class="big-title"><?php echo $big_title; ?></li>
                    <li class="title"><?php echo $title; ?></li>
                    <?php
                    if (have_rows('sub_item')):
                        while (have_rows('sub_item')):
                            the_row();
                            $items = get_sub_field('items');
                            ?>
                            <li><?php echo $items; ?></li>
                            <?php
                        endwhile;
                    endif;
                    ?>
                    <div class="button">
                        <a href="http://preview.themeforest.net/item/mediplus-medical-and-doctor-html-template/full_screen_preview/26665910?_ga=2.145092285.888558928.1591971968-344530658.1588061879"
                            target="_blank" class="btn"><?php echo $btn_first; ?></a>
                        <a href="https://themeforest.net/item/mediplus-medical-and-doctor-html-template/26665910" target="_blank"
                            class="btn"><?php echo $btn_second; ?></a>
                    </div>
                    <?php
                endif;
            endwhile;
        endif;
        ?>

    </ul>

    <!-- Header Area -->
    <header class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">
                        <!-- Contact -->
                        <ul class="top-link">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'primary-menu'
                                )
                            ) ?>
                        </ul>
                        <!-- End Contact -->
                    </div>
                    <div class="col-lg-6 col-md-7 col-12">
                        <!-- Top Contact -->
                        <ul class="top-contact">
                            <li><i class="fa fa-phone"></i>+880 1234 56789</li>
                            <li><i class="fa fa-envelope"></i><a
                                    href="mailto:support@yourmail.com">support@yourmail.com</a></li>
                        </ul>
                        <!-- End Top Contact -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <?php the_custom_logo(); ?>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="col-lg-7 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <?php wp_nav_menu(array('theme_location' => 'secondary-menu')); ?>
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="get-quote">
                                <a href="appointment.html" class="btn">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->