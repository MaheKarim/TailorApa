
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
<!-- Page Content -->
{{--<div class="content">--}}
{{--    <div class="container-fluid">--}}

{{--        <div class="row">--}}
{{--            <div class="col-md-8 offset-md-2">--}}

{{--                <!-- Login Tab Content -->--}}
{{--                <div class="account-content">--}}
{{--                    <div class="row align-items-center justify-content-center">--}}
{{--                        <div class="col-md-7 col-lg-6 login-left">--}}
{{--                            <img src="{{ asset('') }}frontend/assets/img/login-banner.png" class="img-fluid" alt="AmarDoctor Login">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-12 col-lg-6 login-right">--}}
{{--                            <div class="login-header">--}}
{{--                                <h3>Login <span>AmarDoctor</span></h3>--}}
{{--                                @if (count($errors)>0)--}}
{{--                                    <ul>--}}
{{--                                        @foreach($errors->all() as $error)--}}
{{--                                            <li class="alert alert-danger">{{ $error }}</li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                            <form action="{{ route('login') }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group form-focus">--}}
{{--                                    <input type="text" name="phn_number" class="form-control floating">--}}
{{--                                    <label class="focus-label">Email Or PHN Number</label>--}}
{{--                                </div>--}}
{{--                                <div class="form-group form-focus">--}}
{{--                                    <input type="password" name="password" class="form-control floating">--}}
{{--                                    <label class="focus-label">Password</label>--}}
{{--                                </div>--}}

{{--                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>--}}
{{--                                <div class="login-or">--}}
{{--                                    <span class="or-line"></span>--}}
{{--                                    <span class="span-or">or</span>--}}
{{--                                </div>--}}


{{--                                <div class="text-center dont-have">Forget Your Password ?  <a href="{{ url('/password/reset') }}"> Reset Your Password</a></div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /Login Tab Content -->--}}

{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--</div>--}}
<!-- /Page Content -->

<div id="page-wrapper">
<!-- Login Section Start -->
<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mb-5">
                <h3 class="mb-3">Welcome Message</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                <h4 class="mb-5 mt-5 underline">Keep in a mind a few basic password roules :</h4>
                <ul class="list-squire-check">
                    <li><span class="flaticon-checked-1 flat-small text-primary"></span> Change your passwords periodically</li>
                    <li><span class="flaticon-checked-1 flat-small text-primary"></span> Avoid re-using password for multiple site</li>
                    <li><span class="flaticon-checked-1 flat-small text-primary"></span> Use complex characters including uppercase and number</li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="form-icon-left rounded form-boder p-5 shadow">
                    <h3 class="mb-4 down-line">User Login</h3>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label>Email Address</label>
                                <input type="text" name="phn_number" class="form-control bg-light" value="" required="">
                            </div>
                            <div class="col-md-12">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control bg-light" value="" required="">
                            </div>
                            <div class="col-md-12 form-check">
                                <button type="submit" class="btn btn-primary mb-3">Login</button>
                            </div>
                            <div class="col-md-12">
                                <a href="{{ route('register') }}" class="btn-link text-dark">Don't Have an Account ? </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Login Section End -->

@include('frontend.inc.footer')
