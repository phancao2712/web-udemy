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

    <link rel="stylesheet" href="../../../cdn.jsdelivr.net/npm/choices.js/public/assets/styles/base.min.css" />
    <link rel="stylesheet" href="../../../cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../unpkg.com/leaflet%401.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Stylesheets -->
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


    <main class="main-content
  bg-beige-1
">
        <header data-anim="fade" data-add-bg="" class="header -base js-header">
            <div class="header__container py-10">
                <div class="row justify-between items-center">

                    <div class="col-auto">
                        <div class="header-left">

                            <div class="header__logo ">
                                <a data-barba href="{{ url('/') }}">
                                    <img src="{{ asset('client/img/general/logo.svg') }}" alt="logo">
                                </a>
                            </div>

                        </div>
                    </div>


                    <div class="col-auto">
                        <div class="header-right d-flex items-center">



                            <div class="mr-30">

                                <div class="d-none xl:d-block ml-20">
                                    <button class="text-dark-1 items-center" data-el-toggle=".js-mobile-menu-toggle">
                                        <i class="text-11 icon icon-mobile-menu"></i>
                                    </button>
                                </div>

                            </div>

                            <div class="header-right__buttons md:d-none">
                                <a href="{{ url('/') }}" class="button -sm -rounded -dark-1 text-white">Trang
                                    chủ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="content-wrapper  js-content-wrapper">
            <section class="form-page js-mouse-move-container">
                <div class="form-page__img bg-dark-1">
                    <div class="form-page-composition">
                        <div class="-bg"><img data-move="30" class="js-mouse-move"
                                src="{{ asset('client/img/login/bg.png') }}" alt="bg"></div>
                        <div class="-el-1"><img data-move="20" class="js-mouse-move"
                                src="{{ asset('client/img/home-9/hero/bg.png') }}" alt="image"></div>
                        <div class="-el-2"><img data-move="40" class="js-mouse-move"
                                src="{{ asset('client/img/home-9/hero/1.png') }}" alt="icon"></div>
                        <div class="-el-3"><img data-move="40" class="js-mouse-move"
                                src="{{ asset('client/img/home-9/hero/2.png') }}" alt="icon"></div>
                        <div class="-el-4"><img data-move="40" class="js-mouse-move"
                                src="{{ asset('client/img/home-9/hero/3.png') }}" alt="icon"></div>
                    </div>
                </div>

                @yield('content')
            </section>
        </div>
    </main>

    <!-- JavaScript -->
    <script src="../../../unpkg.com/leaflet%401.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('client/js/vendors.js') }}"></script>
    <script src="{{ asset('client/js/main.js') }}"></script>
</body>

</html>
