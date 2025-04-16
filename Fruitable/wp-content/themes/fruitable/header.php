<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="<?php bloginfo('charset')?>">
        <title>Fruitables - Vegetable Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
        <?php wp_head(); ?>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
          <div class="container-fluid fixed-top">
               <div class="container topbar bg-primary d-none d-lg-block">
                    <div class="d-flex justify-content-between">
                        <div class="top-info ps-2">
                            <small class="me-3">
                                <i class="fas fa-map-marker-alt me-2 text-secondary"></i>
                                <a href="#" class="text-white">
                                    <?php echo esc_html(get_field('topbar_address', 'option')); ?>
                                </a>
                            </small>
                            <small class="me-3">
                                <i class="fas fa-envelope me-2 text-secondary"></i>
                                <a href="mailto:<?php echo esc_attr(get_field('topbar_email', 'option')); ?>" class="text-white">
                                    <?php echo esc_html(get_field('topbar_email', 'option')); ?>
                                </a>
                            </small>
                        </div>
                        <div class="top-link pe-2">
                    <?php
                    if (has_nav_menu('topbar-menu')) {
                        wp_nav_menu(array(
                            'theme_location' => 'topbar-menu',
                            'menu_class'     => 'topbar-nav d-flex align-items-center', // Apply flex classes
                            'container'      => false, // Remove default <ul> container
                            'fallback_cb'    => false,
                            'items_wrap'     => '%3$s' // Remove <ul> wrapper
                        ));
                    } else {
                        echo '<p>No menu assigned to "Top Bar Menu". Please set it in Appearance > Menus.</p>';
                    }
                    ?>
                </div>

                    </div>
                </div>

            <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="<?php echo home_url('/'); ?>" class="navbar-brand">
                    <h1 class="text-primary display-6">Fruitables</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu', // Fetch the registered main menu
                        'menu_class'     => 'navbar-nav mx-auto', // Keep Bootstrap structure
                        'container'      => 'ul', // Ensure proper structure
                        'fallback_cb'    => false, // Disable default fallback menu
                        'depth'          => 2, // Enable dropdowns
                    ));
                    ?>
                    <div class="d-flex m-3 me-0">
                        <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="fas fa-search text-primary"></i>
                        </button>
                        <a href="#" class="position-relative me-4 my-auto">
                            <i class="fa fa-shopping-bag fa-2x"></i>
                            <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                        </a>
                        <a href="#" class="my-auto">
                            <i class="fas fa-user fa-2x"></i>
                        </a>
                    </div>
                </div>
            </nav>

            </div>
        </div>
        <!-- Navbar End -->