<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
    <body class="index-page">
        <div id="user-app">
        </div>
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <!-- Preloader -->
        <div id="preloader"></div>
        <!-- Scripts -->
        <script src="{{ asset('js/main.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ asset('vendor/php-email-form/validate.js') }}" defer></script>
        <script src="{{ asset('vendor/aos/aos.js') }}" defer></script>
        <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}" defer></script>
        <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}" defer></script>
        <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/purecounterjs/dist/purecounter_vanilla.js"></script>
    </body>
</html>
