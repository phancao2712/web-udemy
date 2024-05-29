<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <!-- Stylesheets -->
    <script src="https://kit.fontawesome.com/c9111ed195.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('client/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/main.css') }}">

    <title>{{ $titlePage }} - Educrat</title>
</head>

<body class="preloader-visible" data-barba="wrapper">
    <!-- preloader start -->
    <div class="preloader js-preloader">
        <div class="preloader__bg"></div>
    </div>
    <!-- preloader end -->

    <!-- barba container start -->
    <div class="barba-container" data-barba="container">
        <main class="main-content">
            @include('components.client.header')


            <div class="content-wrapper js-content-wrapper">
                <div class="dashboard -home-9 px-0 js-dashboard-home-9">
                    @include('components.client.menu')
                    <div class="dashboard__main mt-0">
                        <div class="dashboard__content pt-0 px-15 pb-0">
                        @yield('content')
                    </div>
                        @include('components.client.footer')
                    </div>
                </div>
            </div>
        </main>

        @include('components.client.sidebar')
    </div>
    <!-- barba container end -->

    <!-- JavaScript -->
    <script src="{{ asset('client/js/vendors.js') }}"></script>
    <script src="{{ asset('client/js/main.js') }}"></script>
</body>

</html>
