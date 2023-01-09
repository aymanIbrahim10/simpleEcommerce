<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>{{ $title ?? config('app.name') }} - Ecommerce</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    @include('front.include.main')
    @include('front.include.header')
    @yield('content')
    @include('front.include.footer')


    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('front/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('front/js/jquery.superslides.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('front/js/inewsticker.js') }}"></script>
    <script src="{{ asset('front/js/bootsnav.js') }}"></script>
    <script src="{{ asset('front/js/images-loded.min.js') }}"></script>
    <script src="{{ asset('front/js/isotope.min.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/baguetteBox.min.js') }}"></script>
    <script src="{{ asset('front/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('front/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
    <script>
        setInterval(function() {
            $("#notifications_count").load(window.location.href + " #notifications_count");
            $("#unreadNotifications").load(window.location.href + " #unreadNotifications");
        }, 5000);

    </script>
    @yield('js')
</body>

</html>
