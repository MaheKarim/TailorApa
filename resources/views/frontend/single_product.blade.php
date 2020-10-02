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

<!-- Shop Section Start -->
<div id="page_wrapper">
<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 order-1 order-lg-2">
                <div id="sidebar" class="shop-sidebar">
                    <div class="widget widget_product_categories">
                        <h4 class="widget-title down-line">Categories</h4>
                        <ul>
                            <li><a href="#">Accessories</a><span>(15)</span></li>
                            <li><a href="#">Clothing</a><span>(10)</span></li>
                            <li><a href="#">Hoodies</a><span>(09)</span></li>
                            <li><a href="#">Home &amp; Kitchen</a><span>(21)</span></li>
                            <li><a href="#">Sports &amp; Outdoors</a><span>(35)</span></li>

                        </ul>
                    </div>
                    <div class="widget widget_tag_cloud">
                        <h4 class="widget-title down-line">Product Tag</h4>
                        <div class="tagcloud">
                            <ul>
                                <li><a href="#">general</a></li>
                                <li><a href="#">videos</a></li>
                                <li><a href="#">media</a></li>
                                <li><a href="#">web</a></li>
                                <li><a href="#">parallax</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="widget widget_top_rated_products">
                        <h4 class="widget-title down-line">Top Rated Product</h4>
                        <ul class="product_list_widget">
                            <li>
                                <a href="#">
                                    <img src="{{ asset('storage') }}/{{$product->package_image}}">
                                    <span class="product-title">{{ $product->product_name }}</span>
                                </a>
                                <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>{{
    $product->package_rate
}}
                                        </span>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 order-2 order-lg-1 woocommerce-product">
                <div class="woocommerce-thumb">
                    <div class="woocommerce-single">
                        <div class="woocommerce-product-gallery mb-sm-30">
                            <div class="woocommerce-product-gallery__wrapper full-img-sweep" style="width:600px;height:600px;margin:0 auto;margin-bottom: 0px;">
                                <!-- Slide 1-->
                                <div class="ls-slide" data-ls="duration:4000; kenburnsscale:1.2;">
                                    <img width="600" height="600" src="{{ asset('storage') }}/{{$product->package_image}}" class="ls-bg" alt="" />
                                </div>

                            </div>
                        </div>
                        <div class="summary entry-summary">
                            <h1 class="product_title entry-title">{{ $product->product_name }}</h1>

                            <span class="price">
                                        <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ $product->total_rate}}</span>
                                    </del>
                                <br>
                                    <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ $product->package_rate }}</span></ins>
                                    </span>
                            <br>
                            <br>

                                @auth
                                <div class="mb-4">

                                    <a class="btn btn-secondary py-0 rounded-0" href="{{ route('productBooking', $product->id) }}" value="">Buy Now</a>
                                </div>
                                    @endauth
                                    @if (!Auth::check())

                                        <span style="background-color: aqua">To book this Product, You have to login!</span>
                                    @endif


                        </div>
                        <div class="woocommerce-tabs wc-tabs-wrapper">
                            <ul class="nav nav-tabs wc-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active woocommerce-Tabs-panel woocommerce-Tabs-panel--description" id="home" role="tabpanel" aria-labelledby="home-tab">

                                    <p>{!! $product->description !!}</p>

                                </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<!-- Shop Section End -->
<!-- /Page Content -->
@include('frontend.inc.footer')
