<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Lora:wght@400;700&amp;family=Montserrat:wght@400;500;600;700&amp;family=Nunito:wght@400;700&amp;display=swap" rel="stylesheet">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('client/fonts/fontawesome/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('client/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/libs/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('client/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/libs/flickity-fade/flickity-fade.css') }}">
    <link rel="stylesheet" href="{{ asset('client/libs/flickity/dist/flickity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/libs/highlightjs/styles/vs2015.css') }}">
    <link rel="stylesheet" href="{{ asset('client/libs/jarallax/dist/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('client/libs/quill/dist/quill.core.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('client/css/theme.min.css') }}">

    <title>{{ $pageTitle }} - {{ env('APP_NAME') }}</title>

</head>
<body>

    @include('components.client.header')

   @yield('content')

    <!-- FOOTER
    ================================================== -->
    @include('components.client.footer')

    <!-- Libs JS -->
    <script src="{{ asset('client/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('client/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('client/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.j') }}s"></script>
    <script src="{{ asset('client/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('client/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ asset('client/libs/countup.js/dist/countUp.min.js') }}"></script>
    <script src="{{ asset('client/libs/dropzone/dist/min/dropzone.min.j') }}s"></script>
    <script src="{{ asset('client/libs/flickity/dist/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('client/libs/flickity-fade/flickity-fade.js') }}"></script>
    <script src="{{ asset('client/libs/highlightjs/highlight.pack.min.js') }}"></script>
    <script src="{{ asset('client/libs/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('client/libs/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('client/libs/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('client/libs/jarallax/dist/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('client/libs/jarallax/dist/jarallax-element.min.js') }}"></script>
    <script src="{{ asset('client/libs/parallax-js/dist/parallax.min.js') }}"></script>
    <script src="{{ asset('client/libs/quill/dist/quill.min.js') }}"></script>
    <script src="{{ asset('client/libs/smooth-scroll/dist/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('client/libs/typed.js/lib/typed.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('client/js/theme.min.js') }}"></script>


</body>

<!-- Mirrored from transvelo.github.io/skola-html/5.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2024 10:49:18 GMT -->
</html>
