<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Axeman - Tailoring and Fashion HTML Template">
    <meta name="author" content="unicoder">
    <title>TailorApa - Online Tailoring and Fashion World</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@400;500;600;700&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&amp;display=swap" rel="stylesheet">

    <!--  CSS Style -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/webfonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/layerslider.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/category/category-three.css" id="color-change">

</head>

<body>
        @include('partials.navbar')

        @yield('content')

        @include('partials.footer')
</body>
</html>
