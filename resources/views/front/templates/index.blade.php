<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicons.ico') }}">

    {{-- Google Fonts --}}
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|
    Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,
    700i"
        rel="stylesheet">

    {{-- CSS --}}
    <link href="{{ asset('assets/vendor/css/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/css/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/css/glightbox/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/css/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    {{-- Main CSS --}}
    <link href="{{ asset('assets/vendor/css/style.css') }}" rel="stylesheet">

    {{-- My CSS --}}
    <link href="{{ asset('assets/vendor/css/my-style.css') }}" rel="stylesheet">
</head>

<body>
    {{-- Main Content --}}
    @yield('page-content')

    {{-- JavaScript --}}
    <script src="{{ asset('assets/vendor/js/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    {{-- Main JavaScript --}}
    <script src="{{ asset('assets/vendor/js/main.js') }}"></script>

    {{-- My Script --}}
    <script src="{{ asset('assets/vendor/js/my-script.js') }}"></script>
</body>

</html>
