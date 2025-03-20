<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TaskTrak Hub
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/tasktakhub x-icon.png" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Font Stylesheet Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="<?php bloginfo('template_directory'); ?>/img/TASKTRAK HUB Rectangle Logo.png"
                    alt="TaskTrak Hub" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
               
                <?php  
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'container' => false,
                            'container_class' => '',
                            'menu_class' => 'navbar-nav mb-2 mb-lg-0',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'depth' => 3,
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                    ?>

                
              <!--   <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">SOLUTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">CASE STUDIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">BLOGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="https://www.tasktrakhub.com/" target="_blank">SIGN IN /
                            SIGN UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary btn-gradient text-uppercase px-4 py-2 text-white" href="#">
                            Get Started
                        </a>
                    </li>
                </ul>  -->

            </div>
        </div>
    </nav>


    <header class="container-fluid top-section px-5">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div>
                <a href="#" class="text-dark">Explore Plans</a>
                <a href="#" class="text-dark">Industry Specific Solution</a>
                <a href="#" class="text-dark">Productivity Tips and Best Practices</a>
            </div>
            <div>
                <a href="https://www.tasktrakhub.com/" class="btn btn-primary" target="_blank"
                    rel="noopener noreferrer">
                    Join TaskTrak Hub
                </a>
                <a href="https://www.tasktrakhub.com/login" class="btn btn-member-login" target="_blank"
                    rel="noopener noreferrer">
                    Member Login
                </a>
            </div>

        </div>
    </header>

    <!-- <header class="container-fluid bottom-section">
        <div class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">TaskTrak Hub</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">About TaskTrak Hub</a></li>
                        <li><a class="dropdown-item" href="#">Mission</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">FEATURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">PRICING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">SUPPORT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">ENQUIRY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="contact.php">CONTACT US</a>
                </li>
            </ul>
        </div>
    </header> -->
    <div class="clearfix"></div>