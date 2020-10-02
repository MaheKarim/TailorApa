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
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@400;500;600;700&amp;display=swap"
          rel="stylesheet">
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


<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="্রেে">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Booking</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Product Booking</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content success-page-cont">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-6">

                <!-- Success Card -->
                <div class="card success-card">
                    <div class="card-body">
                        <div class="success-cont">
                            <i class="fas fa-check"></i>
                            <h3>Product booked Successfully!</h3>
                            <p>Your Product Buying Request is Sent To Our Admin Panel. <br>
                                Our Admin Will Contact With You Immediately. Please Check Your Dashboard For Admin Activity.
                                <span>Thank You!</span>
                            </p>
                            <a href="{{route('user.dashboard')}}" class="btn btn-primary view-inv-btn">Check Status</a>
                        </div>
                    </div>
                </div>
                <!-- /Success Card -->
            </div>
        </div>

    </div>
</div>
<!-- /Page Content -->
@include('frontend.inc.footer')
