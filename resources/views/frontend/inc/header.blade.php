<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Axeman - Tailoring and Fashion HTML Template">
    <meta name="author" content="unicoder">
    <title>TailorApa - Pionering Tailoring and Fashion Website in Bangladesh</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{  asset('/') }}frontend/assets/images/favicon.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&amp;display=swap" rel="stylesheet">

    <!--  CSS Style -->
    <link rel="stylesheet" href="{{  asset('/') }}frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{  asset('/') }}frontend/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{  asset('/') }}frontend/assets/css/all.min.css">
    <link rel="stylesheet" href="{{  asset('/') }}frontend/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{  asset('/') }}frontend/assets/webfonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="{{  asset('/') }}frontend/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{  asset('/') }}frontend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{  asset('/') }}frontend/assets/css/layerslider.css">
    <link rel="stylesheet" href="{{  asset('/') }}frontend/assets/css/template.css">
    <link rel="stylesheet" href="{{  asset('/') }}frontend/assets/css/style.css">
    <link rel="stylesheet" href="{{  asset('/') }}frontend/assets/css/category/category-three.css" id="color-change">

</head>

<div id="page_wrapper">
    <!-- Header Section Start -->
    <header class="nav-split-simple nav-on-banner fixed-bg-secondary">
        <div class="top-header sm-mx-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 py-2">
                        <ul class="top-contact">
                            <li><a href="#" class="text-white">(+880) 177-896-356</a></li>
                            <li><a href="#" class="text-white">security@tailorapa.com</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-6 py-2">
                        <ul class="nav-bar-top right list-color-white d-flex">
                            <li><a href="{{ route('register') }}">Registration</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-nav py-lg-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg nav-line-active nav-white nav-primary-hover">
                            <a class="navbar-brand" href="#"><img class="nav-logo" src="{{  asset('/') }}frontend/assets/images/logo/1.png" alt="Image not found !"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav w-100">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#">Home</a>

                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="about.html">About</a> </li>
                                    <li class="nav-item"><a class="nav-link" href="service.html">Service</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-toggle dropdown-item" href="gallery.html">Gallery</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="gallery.html">Classic Gallery</a></li>
                                                    <li><a class="dropdown-item" href="gallery-simple.html">Simple Gallery</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle dropdown-item" href="projects.html">Projects</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="projects.html">Projects</a></li>
                                                    <li><a class="dropdown-item" href="project-single.html">Project Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle dropdown-item" href="our-tailors.html">Tailors</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="our-tailors.html">Our Tailors</a></li>
                                                    <li><a class="dropdown-item" href="single-tailor.html">Single Tailor</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="shop.html">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-toggle dropdown-item" href="shop.html">Shop Grid</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="shop-grid-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="dropdown-item" href="shop-grid-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle dropdown-item" href="blog-single.html">Shop Single</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="shop-single-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="dropdown-item" href="shop-single-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item" href="cart.html">Cart</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="gallery.html">Gallery</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="gallery.html">Classic Gallery</a></li>
                                            <li><a class="dropdown-item" href="gallery-simple.html">Simple Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-toggle dropdown-item" href="blog.html">Blog Grid</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="blog-grid-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="dropdown-item" href="blog-grid-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle dropdown-item" href="#">Single Blog</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="blog-single-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="dropdown-item" href="blog-single-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
</div>
