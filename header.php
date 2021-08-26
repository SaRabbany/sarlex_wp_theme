<?php get_header(); ?>

<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  



    <!-- AOS animation -->


    <link rel="shortcut icon" href="image/sarlex_fabicon.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css">

    <?php wp_head(); ?>

</head>

<body class="">


    <header class="header-hero">
        <!-- the nav bar start here -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri() ?>/image/logonav.png" alt="">
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span><img src="<?php echo get_template_directory_uri() ?>image/menu.svg" alt=""></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- <ul class="navbar-nav ms-auto text-center align-items-center">
                        <li class="nav-item">
                            <a class="" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="" href="pages/service.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="" href="pages/portfolio.html">Portfolio</a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="" href="pages/about.html">About Us</a>
                        </li>
                        <a href="pages/contact.html" class=" desktop-item " style=" font-size: 18px;
                            font-weight: 500;
                            color:#ffffff;
                            background-color: #ff7a59;
                            padding: 15px 35px;
                            border-radius: 10px;">
                            Contact Us</a>
                        </li>
                    </ul> -->
                    <?php
                        wp_nav_menu(array(
                            'theme_location'=> 'main-menus ',
                            'menu_class'=> 'navbar-nav ms-auto text-center align-items-center',
                           
                        ));
                    ?>
                </div>
            </div>
        </nav>
        <!-- the nav bar end here -->

        <div class="container">
            <div class="row headerContents">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="2000">
                    <div class="col">
                        <h2>Welcome to SarLex Technologies </h2>
                        <h1>Make a better deal <br> with us</h1>
                        <p>We deliver services to global businesses since 2014, with 100% project delivery success. Hire
                            the best programmers at affordable prices. Our design-focused approach and project execution
                            processes help you to deliver the right solutions.</p>
                        <a href="pages/contact.html">
                            <button class="btn common-button mt-3">Lets Talk</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in" data-aos-duration="2000">
                    <!-- <img src="image/home-page-banner-img.svg" alt=""> -->

                    <img src="https://cdni.iconscout.com/illustration/premium/thumb/website-developer-3141876-2631147.png" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- the header section ends here -->