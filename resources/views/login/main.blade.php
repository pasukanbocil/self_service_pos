<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title }}</title>
    <link rel="icon" href="{{ asset('Assets/img/stisla-fill.svg') }}">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('Assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('Assets/modules/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('Assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                @yield('login')
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('Assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('Assets/modules/popper.js') }}"></script>
    <script src="{{ asset('Assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('Assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('Assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('Assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('Assets/js/scripts.js') }}"></script>
    <script src="{{ asset('Assets/js/custom.js') }}"></script>
</body>

</html>
